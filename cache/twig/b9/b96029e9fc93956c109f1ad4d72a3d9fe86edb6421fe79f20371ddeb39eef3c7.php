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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((null === (isset($context["form"]) ? $context["form"] : null))) {
            // line 4
            $context["form"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

    ";
        // line 10
        if ((isset($context["form"]) ? $context["form"] : null)) {
            // line 11
            echo "        ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
                // line 12
                echo "            <div class=\"alert notices ";
                echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) ? ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
                echo "</p></div>
        ";
            }
            // line 14
            echo "        <div class=\"text-xs-center p-y-xl\">
            <h2 class=\"display-2\">";
            // line 15
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text", array());
            echo "</h2>
            ";
            // line 17
            echo "            ";
            $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 17)->display($context);
            // line 18
            echo "        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"alert notices yellow\"><p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO_FORM_DATA");
            echo "</p></div>
    ";
        }
        // line 22
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
        return array (  76 => 22,  70 => 20,  66 => 18,  63 => 17,  59 => 15,  56 => 14,  48 => 12,  45 => 11,  43 => 10,  37 => 8,  34 => 7,  30 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

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
            {# <p>{{ 'PLUGIN_FORM.DATA_SUMMARY'|t }}</p> #}
            {% include \"forms/data.html.twig\" %}
        </div>
    {% else %}
        <div class=\"alert notices yellow\"><p>{{ 'PLUGIN_FORM.NO_FORM_DATA'|t }}</p></div>
    {% endif %}

{% endblock %}
";
    }
}
