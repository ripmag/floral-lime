<?php

/* catalog/recurring_form.twig */
class __TwigTemplate_2a13724d10cf995c10f4016c21e23d1b51515b8733fd66573d9fb2489dd01de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-recurring\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"alert alert-info\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 30
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 33
            echo "              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                <input type=\"text\" name=\"recurring_description[";
            // line 34
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["recurring_description"]) ? $context["recurring_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["recurring_description"]) ? $context["recurring_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" class=\"form-control\" />
              </div>
              ";
            // line 36
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 37
                echo "              <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
              ";
            }
            // line 39
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
          </div>
          <fieldset>
            <legend>";
        // line 43
        echo (isset($context["text_profile"]) ? $context["text_profile"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 45
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"price\" value=\"";
        // line 47
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-duration\">";
        // line 51
        echo (isset($context["entry_duration"]) ? $context["entry_duration"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"duration\" value=\"";
        // line 53
        echo (isset($context["duration"]) ? $context["duration"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_duration"]) ? $context["entry_duration"] : null);
        echo "\" id=\"input-duration\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-cycle\">";
        // line 57
        echo (isset($context["entry_cycle"]) ? $context["entry_cycle"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"cycle\" value=\"";
        // line 59
        echo (isset($context["cycle"]) ? $context["cycle"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_cycle"]) ? $context["entry_cycle"] : null);
        echo "\" id=\"input-cycle\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-frequency\">";
        // line 63
        echo (isset($context["entry_frequency"]) ? $context["entry_frequency"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"frequency\" id=\"input-frequency\" class=\"form-control\">
                  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frequencies"]) ? $context["frequencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 67
            echo "                  ";
            if (((isset($context["frequency"]) ? $context["frequency"] : null) == $this->getAttribute($context["frequency_option"], "value", array()))) {
                // line 68
                echo "                  <option value=\"";
                echo $this->getAttribute($context["frequency_option"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["frequency_option"], "text", array());
                echo "</option>
                  ";
            } else {
                // line 70
                echo "                  <option value=\"";
                echo $this->getAttribute($context["frequency_option"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["frequency_option"], "text", array());
                echo "</option>
                  ";
            }
            // line 72
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frequency_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 77
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 80
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 81
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 82
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 84
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 85
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 87
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 92
        echo (isset($context["text_trial"]) ? $context["text_trial"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-price\">";
        // line 94
        echo (isset($context["entry_trial_price"]) ? $context["entry_trial_price"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_price\" value=\"";
        // line 96
        echo (isset($context["trial_price"]) ? $context["trial_price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_trial_price"]) ? $context["entry_trial_price"] : null);
        echo "\" id=\"input-trial-price\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-duration\">";
        // line 100
        echo (isset($context["entry_trial_duration"]) ? $context["entry_trial_duration"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_duration\" value=\"";
        // line 102
        echo (isset($context["trial_duration"]) ? $context["trial_duration"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_trial_duration"]) ? $context["entry_trial_duration"] : null);
        echo "\" id=\"input-trial-duration\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-cycle\">";
        // line 106
        echo (isset($context["entry_trial_cycle"]) ? $context["entry_trial_cycle"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_cycle\" value=\"";
        // line 108
        echo (isset($context["trial_cycle"]) ? $context["trial_cycle"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_trial_cycle"]) ? $context["entry_trial_cycle"] : null);
        echo "\" id=\"input-trial-cycle\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-frequency\">";
        // line 112
        echo (isset($context["entry_trial_frequency"]) ? $context["entry_trial_frequency"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_frequency\" id=\"input-trial-frequency\" class=\"form-control\">
                  ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frequencies"]) ? $context["frequencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 116
            echo "                  ";
            if (((isset($context["trial_frequency"]) ? $context["trial_frequency"] : null) == $this->getAttribute($context["frequency_option"], "value", array()))) {
                // line 117
                echo "                  <option value=\"";
                echo $this->getAttribute($context["frequency_option"], "value", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["frequency_option"], "text", array());
                echo "</option>
                  ";
            } else {
                // line 119
                echo "                  <option value=\"";
                echo $this->getAttribute($context["frequency_option"], "value", array());
                echo "\">";
                echo $this->getAttribute($context["frequency_option"], "text", array());
                echo "</option>
                  ";
            }
            // line 121
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frequency_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-status\">";
        // line 126
        echo (isset($context["entry_trial_status"]) ? $context["entry_trial_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_status\" id=\"input-trial-status\" class=\"form-control\">
                  ";
        // line 129
        if ((isset($context["trial_status"]) ? $context["trial_status"] : null)) {
            // line 130
            echo "                  <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  <option value=\"1\" selected=\"selected\">";
            // line 131
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 133
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  <option value=\"1\">";
            // line 134
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 136
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 141
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 143
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 153
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/recurring_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 153,  389 => 143,  384 => 141,  377 => 136,  372 => 134,  367 => 133,  362 => 131,  357 => 130,  355 => 129,  349 => 126,  343 => 122,  337 => 121,  329 => 119,  321 => 117,  318 => 116,  314 => 115,  308 => 112,  299 => 108,  294 => 106,  285 => 102,  280 => 100,  271 => 96,  266 => 94,  261 => 92,  254 => 87,  249 => 85,  244 => 84,  239 => 82,  234 => 81,  232 => 80,  226 => 77,  220 => 73,  214 => 72,  206 => 70,  198 => 68,  195 => 67,  191 => 66,  185 => 63,  176 => 59,  171 => 57,  162 => 53,  157 => 51,  148 => 47,  143 => 45,  138 => 43,  133 => 40,  127 => 39,  121 => 37,  119 => 36,  110 => 34,  101 => 33,  97 => 32,  92 => 30,  87 => 28,  81 => 25,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-recurring" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="alert alert-info">{{ text_recurring }}</div>*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-recurring" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               {% for language in languages %}*/
/*               <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                 <input type="text" name="recurring_description[{{ language.language_id }}][name]" value="{{ recurring_description[language.language_id] ? recurring_description[language.language_id].name }}" placeholder="{{ entry_name }}" class="form-control" />*/
/*               </div>*/
/*               {% if error_name[language.language_id] %}*/
/*               <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*           <fieldset>*/
/*             <legend>{{ text_profile }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-duration">{{ entry_duration }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="duration" value="{{ duration }}" placeholder="{{ entry_duration }}" id="input-duration" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-cycle">{{ entry_cycle }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="cycle" value="{{ cycle }}" placeholder="{{ entry_cycle }}" id="input-cycle" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-frequency">{{ entry_frequency }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="frequency" id="input-frequency" class="form-control">*/
/*                   {% for frequency_option in frequencies %}*/
/*                   {% if frequency == frequency_option.value %}*/
/*                   <option value="{{ frequency_option.value }}" selected="selected">{{ frequency_option.text }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ frequency_option.value }}">{{ frequency_option.text }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="status" id="input-status" class="form-control">*/
/*                   {% if status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_trial }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-trial-price">{{ entry_trial_price }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="trial_price" value="{{ trial_price }}" placeholder="{{ entry_trial_price }}" id="input-trial-price" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-trial-duration">{{ entry_trial_duration }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="trial_duration" value="{{ trial_duration }}" placeholder="{{ entry_trial_duration }}" id="input-trial-duration" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-trial-cycle">{{ entry_trial_cycle }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="trial_cycle" value="{{ trial_cycle }}" placeholder="{{ entry_trial_cycle }}" id="input-trial-cycle" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-trial-frequency">{{ entry_trial_frequency }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="trial_frequency" id="input-trial-frequency" class="form-control">*/
/*                   {% for frequency_option in frequencies %}*/
/*                   {% if trial_frequency == frequency_option.value %}*/
/*                   <option value="{{ frequency_option.value }}" selected="selected">{{ frequency_option.text }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ frequency_option.value }}">{{ frequency_option.text }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-trial-status">{{ entry_trial_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="trial_status" id="input-trial-status" class="form-control">*/
/*                   {% if trial_status %}*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* //--></script></div>*/
/* {{ footer }}*/
/* */
