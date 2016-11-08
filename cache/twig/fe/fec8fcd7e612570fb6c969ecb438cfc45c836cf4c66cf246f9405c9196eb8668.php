<?php

/* forms/data.html.twig */
class __TwigTemplate_5584c696b8cee02705c9cd25060c7ffd1b4cc3cf8c0924d7574fea2d4056d762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/data.html.twig", "forms/data.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/data.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"forms/default/data.html.twig\" %}
";
    }
}
