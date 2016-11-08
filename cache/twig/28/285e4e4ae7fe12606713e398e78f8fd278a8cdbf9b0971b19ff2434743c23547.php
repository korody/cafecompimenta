<?php

/* partials/navbar.html.twig */
class __TwigTemplate_c61bd8de6ddf285d66cef63945bcb4c1e5101a4aa5fa142a86f03a69291a44c4 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-fixed-top\" data-toggle=\"sticky-onscroll\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\">
        <img src=\"";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "cafecompimenta_logo_branco.png", array(), "array"), "url", array());
        echo "\" alt=\"Café com Pimenta\" class=\"header-logo\">
    </a>
    <ul class=\"nav navbar-nav pull-right\">
        <li class=\"nav-item navicon\">
            <a id=\"trigger-overlay\" class=\"nav_slide_button nav-toggle\" href=\"#\"><span></span></a>
        </li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<nav class=\"navbar navbar-fixed-top\" data-toggle=\"sticky-onscroll\">
    <a class=\"navbar-brand\" href=\"{{ base_url }}\">
        <img src=\"{{ page.find('/images').media['cafecompimenta_logo_branco.png'].url }}\" alt=\"Café com Pimenta\" class=\"header-logo\">
    </a>
    <ul class=\"nav navbar-nav pull-right\">
        <li class=\"nav-item navicon\">
            <a id=\"trigger-overlay\" class=\"nav_slide_button nav-toggle\" href=\"#\"><span></span></a>
        </li>
    </ul>
</nav>
";
    }
}
