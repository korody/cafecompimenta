<?php

/* modular/intro.html.twig */
class __TwigTemplate_7ebeec3e36580e2446f54725029e357a2c21bcefdb95a4f18e366df03e7c3795 extends Twig_Template
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
        echo "<section class=\"section-brand-intro p-y-xl\">
  ";
        // line 3
        echo "  <div class=\"container\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 5
            echo "      <div class=\"row vertical-align\">
        <div class=\"col-md-4 col-md-offset-1\">
          <div class=\"";
            // line 7
            echo $this->getAttribute($context["element"], "animation", array());
            echo "\">
            <img src=\"";
            // line 8
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["element"], "image", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive\">
          </div>
        </div>
        <div class=\"col-md-6 col-md-offset-1\">
          <h2 class=\"display-3\">";
            // line 12
            echo $this->getAttribute($context["element"], "title", array());
            echo "</h2>
          <p class=\"display-4\">";
            // line 13
            echo $this->getAttribute($context["element"], "description", array());
            echo "</p>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
</section>";
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
        return array (  58 => 17,  48 => 13,  44 => 12,  37 => 8,  33 => 7,  29 => 5,  25 => 4,  22 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"section-brand-intro p-y-xl\">
  {# <div class=\"texture-overlay\"></div> #}
  <div class=\"container\">
    {% for element in page.header.elements %}
      <div class=\"row vertical-align\">
        <div class=\"col-md-4 col-md-offset-1\">
          <div class=\"{{ element.animation }}\">
            <img src=\"{{ page.media[element.image].url }}\" class=\"img-responsive\">
          </div>
        </div>
        <div class=\"col-md-6 col-md-offset-1\">
          <h2 class=\"display-3\">{{ element.title }}</h2>
          <p class=\"display-4\">{{ element.description }}</p>
        </div>
      </div>
    {% endfor %}
  </div>
</section>";
    }
}
