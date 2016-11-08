<?php

/* @Var:{{ config.plugins.email.from }} */
class __TwigTemplate_c63bfbe74cd339365729efd70d2d90c1a6886a5b6974c40a5a850177cb192654 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "email", array()), "from", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ config.plugins.email.from }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{{ config.plugins.email.from }}";
    }
}
