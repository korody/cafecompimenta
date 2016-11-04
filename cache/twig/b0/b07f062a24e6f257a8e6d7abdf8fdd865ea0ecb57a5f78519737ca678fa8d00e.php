<?php

/* modular/showcase.html.twig */
class __TwigTemplate_0778c11edfac3c156a52fd6c5048f1f893e73dddde1fba1b9ef9b0a744fd0514 extends Twig_Template
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
        echo "<section class=\"brand-intro\">
  <div class=\"showcase-wrap\">
    <div class=\"texture-overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"device wp3\">
            <div class=\"device-content\">
              <div class=\"showcase-slider\">
                <ul class=\"slides\" id=\"showcaseSlider\">
                 ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                   <li>
                    <img src=\"";
            // line 13
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" alt=\"Device Content Image\">
                  </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-6\">
          ";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  47 => 16,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"brand-intro\">
  <div class=\"showcase-wrap\">
    <div class=\"texture-overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"device wp3\">
            <div class=\"device-content\">
              <div class=\"showcase-slider\">
                <ul class=\"slides\" id=\"showcaseSlider\">
                 {% for item in page.media.images %}
                   <li>
                    <img src=\"{{ item.url }}\" alt=\"Device Content Image\">
                  </li>
                {% endfor %}
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-6\">
          {{ page.content }}
        </div>
      </div>
    </div>
  </div>
</section>";
    }
}
