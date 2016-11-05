<?php

/* modular/image.html.twig */
class __TwigTemplate_bc62ea0fddb7b2f620e2227ca409dadda8531a011b10dd01b0ae826f0318bd2c extends Twig_Template
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
        echo "\" class=\"section-brand bg-cream text-xs-center p-y-lg\">
  <div class=\"container\">
    <img src=\"";
        // line 3
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
        echo "\" alt=\"Logo Café com Pimenta\" class=\"logo img-responsive\">
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\" class=\"section-brand bg-cream text-xs-center p-y-lg\">
  <div class=\"container\">
    <img src=\"{{ page.media.images|first.url }}\" alt=\"Logo Café com Pimenta\" class=\"logo img-responsive\">
  </div>
</section>
";
    }
}
