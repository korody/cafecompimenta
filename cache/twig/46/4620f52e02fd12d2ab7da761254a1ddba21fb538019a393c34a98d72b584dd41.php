<?php

/* modular/image.html.twig */
class __TwigTemplate_9fe4b59c2784ae82a206ec4b8190de466c689bb857621304a8794f1393282266 extends Twig_Template
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
  \t\t<div class=\"row flex-items-xs-center\">
  \t\t\t\t<div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6\">
\t\t\t\t    <img src=\"";
        // line 5
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "url", array());
        echo "\" alt=\"Logo Café com Pimenta\" class=\"logo img-fluid wp6\">
\t\t\t\t  </div>
  \t\t</div>
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
        return array (  27 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\" class=\"section-brand bg-cream text-xs-center p-y-lg\">
  <div class=\"container\">
  \t\t<div class=\"row flex-items-xs-center\">
  \t\t\t\t<div class=\"col-xs-12 col-sm-10 col-md-8 col-lg-6\">
\t\t\t\t    <img src=\"{{ page.media.images|first.url }}\" alt=\"Logo Café com Pimenta\" class=\"logo img-fluid wp6\">
\t\t\t\t  </div>
  \t\t</div>
  </div>
</section>
";
    }
}
