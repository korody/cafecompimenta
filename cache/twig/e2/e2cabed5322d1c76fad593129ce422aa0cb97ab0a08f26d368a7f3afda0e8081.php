<?php

/* modular/intro.html.twig */
class __TwigTemplate_c00787f89b1b018c5b57c31b208809bc86a8699e5dbc2026e2ca8b7b86e872b0 extends Twig_Template
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
        echo "\" class=\"section-brand-intro text-xs-center p-y-xl\">
  ";
        // line 3
        echo "  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 6
            echo "        <div class=\"col-md-6\">
          <img src=\"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["element"], "image", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive brand-intro-element p-y-md\">
          <h2 class=\"display-2 brand-intro-title ";
            // line 8
            echo $this->getAttribute($context["element"], "brand_intro_title_class", array());
            echo "\">";
            echo $this->getAttribute($context["element"], "title", array());
            echo "</h2>
          <p class=\"display-3 m-y-0\">";
            // line 9
            echo $this->getAttribute($context["element"], "description", array());
            echo "</p>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  45 => 9,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  24 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\" class=\"section-brand-intro text-xs-center p-y-xl\">
  {# <div class=\"texture-overlay\"></div> #}
  <div class=\"container\">
    <div class=\"row\">
      {% for element in page.header.elements %}
        <div class=\"col-md-6\">
          <img src=\"{{ page.media[element.image].url }}\" class=\"img-responsive brand-intro-element p-y-md\">
          <h2 class=\"display-2 brand-intro-title {{ element.brand_intro_title_class }}\">{{ element.title }}</h2>
          <p class=\"display-3 m-y-0\">{{ element.description }}</p>
        </div>
      {% endfor %}
    </div>
  </div>
</section>
";
    }
}
