<?php

/* common/footer.twig */
class __TwigTemplate_d7f8f5d84d874c3b3f0866a57c09bc1f97fadc505ad67a6c341a6055ebf914d8 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\"><a href=\"http://opencart-russia.ru\" target=\"_blank\">";
        // line 2
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://forum.opencart-russia.ru/threads/ustanovka.6044/\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"http://forum.opencart-russia.ru\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a><br />
\t</div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container"><a href="http://opencart-russia.ru" target="_blank">{{ text_project }}</a>|<a href="http://forum.opencart-russia.ru/threads/ustanovka.6044/" target="_blank">{{ text_documentation }}</a>|<a href="http://forum.opencart-russia.ru" target="_blank">{{ text_support }}</a><br />*/
/* 	</div>*/
/* </footer>*/
/* </body></html>*/
