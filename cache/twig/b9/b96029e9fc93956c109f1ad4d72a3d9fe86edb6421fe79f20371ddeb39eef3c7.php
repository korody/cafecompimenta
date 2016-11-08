<?php

/* formdata.html.twig */
class __TwigTemplate_0aadb171b3399a40e52c8b99ae84de2bf52d7e7e2c4ef6669827ca853ec94853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ((null === (isset($context["form"]) ? $context["form"] : null))) {
            // line 8
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

    ";
        // line 14
        if ((isset($context["form"]) ? $context["form"] : null)) {
            // line 15
            echo "        ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
                // line 16
                echo "            <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
                echo "</p></div>
        ";
            }
            // line 18
            echo "        <div class=\"text-xs-center p-y-xl\">
            <h2 class=\"display-2\">";
            // line 19
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text", array());
            echo "</h2>
            ";
            // line 20
            $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 20)->display($context);
            // line 21
            echo "        </div>
    ";
        } else {
            // line 23
            echo "        <div class=\"alert notices yellow\"><p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO_FORM_DATA");
            echo "</p></div>
    ";
        }
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  77 => 23,  73 => 21,  71 => 20,  67 => 19,  64 => 18,  56 => 16,  53 => 15,  51 => 14,  45 => 12,  42 => 11,  38 => 4,  35 => 3,  31 => 1,  28 => 8,  26 => 7,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

{% block header %}
    {# {% include 'partials/header.html.twig' %} #}
{% endblock %}

{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% block content %}
    {{ content|raw }}

    {% if form %}
        {% if form.message %}
            <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ form.message|raw }}</p></div>
        {% endif %}
        <div class=\"text-xs-center p-y-xl\">
            <h2 class=\"display-2\">{{ page.header.text }}</h2>
            {% include \"forms/data.html.twig\" %}
        </div>
    {% else %}
        <div class=\"alert notices yellow\"><p>{{ 'PLUGIN_FORM.NO_FORM_DATA'|t }}</p></div>
    {% endif %}

{% endblock %}
";
    }
}
