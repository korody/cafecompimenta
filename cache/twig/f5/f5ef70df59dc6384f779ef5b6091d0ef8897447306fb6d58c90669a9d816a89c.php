<?php

/* modular/form.html.twig */
class __TwigTemplate_f62d9e78116a0a849066a23f353b4700cef017f24f75465cb6e093ecefe158af extends Twig_Template
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
        echo "<section id=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
        echo "\" class=\"section-form text-xs-center bg-faded\">
  <div class=\"container\">
  \t<div class=\"row\">
\t    <div class=\"col-md-8 offset-md-2 col-xl-6 offset-xl-3 wp6 m-b-md\">
        \t";
        // line 5
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 5)->display($context);
        // line 6
        echo "        </div>
    </div>
\t\t<p class=\"lead text-muted\">";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hint", array());
        echo "</p>
  </div>
  <div class=\"m-t-xxl\">
  ";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
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
        return array (  39 => 11,  33 => 8,  29 => 6,  27 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\" class=\"section-form text-xs-center bg-faded\">
  <div class=\"container\">
  \t<div class=\"row\">
\t    <div class=\"col-md-8 offset-md-2 col-xl-6 offset-xl-3 wp6 m-b-md\">
        \t{% include \"forms/form.html.twig\" %}
        </div>
    </div>
\t\t<p class=\"lead text-muted\">{{ page.header.hint }}</p>
  </div>
  <div class=\"m-t-xxl\">
  {{ page.content }}
</section>
";
    }
}
