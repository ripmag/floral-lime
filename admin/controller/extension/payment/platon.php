<?php
class ControllerExtensionPaymentPlaton extends Controller {
	private $error = array();
  private $gw_url = 'https://secure.platononline.com/payment/auth';

	public function index() {
		$this->load->language('extension/payment/platon');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_platon', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');

		$data['entry_key'] = $this->language->get('entry_key');
		$data['entry_password'] = $this->language->get('entry_password');
		$data['entry_gateway_url'] = $this->language->get('entry_gateway_url');
		$data['entry_processed_status'] = $this->language->get('entry_processed_status');
		$data['entry_refunded_status'] = $this->language->get('entry_refunded_status');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_order_status'] = $this->language->get('tab_order_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['key'])) {
			$data['error_key'] = $this->error['key'];
		} else {
			$data['error_key'] = '';
		}

		if (isset($this->error['password'])) {
			$data['error_password'] = $this->error['password'];
		} else {
			$data['error_password'] = '';
		}

		if (isset($this->error['gw_url'])) {
			$data['error_gw_url'] = $this->error['gw_url'];
		} else {
			$data['error_gw_url'] = '';
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_extension'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/payment/platon', 'user_token=' . $this->session->data['user_token'], true)
   		);

		$data['action'] = $this->url->link('extension/payment/platon', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true);

		if (isset($this->request->post['payment_platon_key'])) {
			$data['payment_platon_key'] = $this->request->post['payment_platon_key'];
		} else {
			$data['payment_platon_key'] = $this->config->get('payment_platon_key');
		}

		if (isset($this->request->post['payment_platon_password'])) {
			$data['payment_platon_password'] = $this->request->post['payment_platon_password'];
		} else {
			$data['payment_platon_password'] = $this->config->get('payment_platon_password');
		}

		if (isset($this->request->post['payment_platon_gateway_url'])) {
			$data['payment_platon_gateway_url'] = $this->request->post['payment_platon_gateway_url'];
		} else {
      $cfg_gw_url = $this->config->get('payment_platon_gateway_url');
			$data['payment_platon_gateway_url'] = empty($cfg_gw_url) ?  $this->gw_url : $cfg_gw_url;
		}

		if (isset($this->request->post['payment_platon_processed_status_id'])) {
			$data['payment_platon_processed_status_id'] = $this->request->post['payment_platon_processed_status_id'];
		} else {
			$data['payment_platon_processed_status_id'] = $this->config->get('payment_platon_processed_status_id');
		}

		if (isset($this->request->post['payment_platon_refunded_status_id'])) {
			$data['payment_platon_refunded_status_id'] = $this->request->post['payment_platon_refunded_status_id'];
		} else {
			$data['payment_platon_refunded_status_id'] = $this->config->get('payment_platon_refunded_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_platon_status'])) {
			$data['payment_platon_status'] = $this->request->post['payment_platon_status'];
		} else {
			$data['payment_platon_status'] = $this->config->get('payment_platon_status');
		}

		if (isset($this->request->post['payment_platon_sort_order'])) {
			$data['payment_platon_sort_order'] = $this->request->post['payment_platon_sort_order'];
		} else {
			$data['payment_platon_sort_order'] = $this->config->get('payment_platon_sort_order');
		}

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/platon', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/platon')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_platon_key']) {
			$this->error['key'] = $this->language->get('error_key');
		}

		if (!$this->request->post['payment_platon_password']) {
			$this->error['password'] = $this->language->get('error_password');
		}

		if (!$this->request->post['payment_platon_gateway_url']) {
			$this->error['gw_url'] = $this->language->get('error_gw_url');
		}

		return !$this->error;
	}
}
