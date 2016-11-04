<?php

/* error.html.twig */
class __TwigTemplate_284c63e545f169bac86370cba61640f2d8b88cda4e087275229a02549de6c17f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo " <section class=\"video\"> 
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center\">
        <h1>Error ";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
        ";
        // line 9
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>   
  </div> 
</section>
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  48 => 9,  44 => 8,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}
{% block header %}{% endblock %}
{% block content %}
 <section class=\"video\"> 
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center\">
        <h1>Error {{ page.header.http_response_code }}</h1>
        {{ page.content }}
      </div>
    </div>   
  </div> 
</section>
{% endblock %}
{% block footer %}{% endblock %}";
    }
}
