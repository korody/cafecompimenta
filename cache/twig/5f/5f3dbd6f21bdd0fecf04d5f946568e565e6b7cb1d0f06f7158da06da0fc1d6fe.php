<?php

/* modular/form.html.twig */
class __TwigTemplate_b5aaec0941c30c262546308ca5ae03f40583b3879661794756bab9317e892404 extends Twig_Template
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
        echo "<section class=\"section-form m-y-lg\">
  <div class=\"container\">
    <div class=\"col-md-8 col-md-offset-2 col-xl-6 col-xl-offset-3\">
    \t<div class=\"row\">
        \t";
        // line 5
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 5)->display($context);
        // line 6
        echo "        </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"section-form m-y-lg\">
  <div class=\"container\">
    <div class=\"col-md-8 col-md-offset-2 col-xl-6 col-xl-offset-3\">
    \t<div class=\"row\">
        \t{% include \"forms/form.html.twig\" %}
        </div>
    </div>
  </div>
</section>
";
    }
}
