<?php

class ModelExtensionPaymentPlaton extends Model {

    public function getMethod() {
        $this->language->load('extension/payment/platon');

        $method_data = array(
            'code' => 'platon',
            'title' => $this->language->get('text_title'),
            'terms' => '',
            'sort_order' => $this->config->get('payment_platon_sort_order')
        );

        return $method_data;
    }

}
