<?php

/* forms/fields/formname/formname.html.twig */
class __TwigTemplate_0ebbea4a1340f11bbc069de33aec1d6f4cc27368e55be8c78941dae02c5e2b7f extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"__form-name__\" value=\"";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/formname/formname.html.twig";
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
        return "<input type=\"hidden\" name=\"__form-name__\" value=\"{{ form.name }}\" />";
    }
}
