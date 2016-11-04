<?php

/* modular/brand.html.twig */
class __TwigTemplate_20ac8bfa52def909ac8dc78bba36bed20e2313302f0fbdb3bc3b62e8548ee202 extends Twig_Template
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
        echo "<section class=\"brand bg-faded text-center p-y-lg\">
  <div class=\"container\">
    <img src=\"";
        // line 3
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
        echo "\" alt=\"Logo Café com Pimenta\" class=\"logo img-responsive\">
    ";
        // line 5
        echo "  </div>
</section>

<section class=\"brand-cvp bg-dark text-center p-y-lg\">
  <div class=\"container\">
    <h2 class=\"display-2 text-white\">";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "cvp", array());
        echo "</h2>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/brand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  27 => 5,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"brand bg-faded text-center p-y-lg\">
  <div class=\"container\">
    <img src=\"{{ page.media.images|first.url }}\" alt=\"Logo Café com Pimenta\" class=\"logo img-responsive\">
    {# <h2>{{ page.header.cvp }}</h2> #}
  </div>
</section>

<section class=\"brand-cvp bg-dark text-center p-y-lg\">
  <div class=\"container\">
    <h2 class=\"display-2 text-white\">{{ page.header.cvp }}</h2>
  </div>
</section>
";
    }
}
