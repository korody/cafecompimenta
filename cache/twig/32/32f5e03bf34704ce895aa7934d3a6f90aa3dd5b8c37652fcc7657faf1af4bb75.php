<?php

/* modular/gallery.html.twig */
class __TwigTemplate_7e75b078c07a12d7fafae5b357f1080ce66ea0620c470e8c3abed0f33f0281d4 extends Twig_Template
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
        echo "<section class=\"screenshots\" id=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
        echo "\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "screenshots", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        <div class=\"col-sm-6 col-md-3 nopadding\">
          <figure>
            <img src=\"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["item"], "description", array());
            echo "\">
            <figcaption>
              <div class=\"caption-content\">
                <a href=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "large_image", array()), array(), "array"), "url", array());
            echo "\" class=\"single_image\">
                  <i class=\"fa fa-";
            // line 11
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i><br>
                  <p>";
            // line 12
            echo $this->getAttribute($context["item"], "description", array());
            echo "</p>
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  50 => 12,  46 => 11,  42 => 10,  34 => 7,  30 => 5,  26 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"screenshots\" id=\"{{ page.menu }}\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      {% for item in page.header.screenshots %}
        <div class=\"col-sm-6 col-md-3 nopadding\">
          <figure>
            <img src=\"{{ page.media[item.image].url }}\" alt=\"{{ item.description }}\">
            <figcaption>
              <div class=\"caption-content\">
                <a href=\"{{ page.media[item.large_image].url }}\" class=\"single_image\">
                  <i class=\"fa fa-{{ item.icon }}\"></i><br>
                  <p>{{ item.description }}</p>
                </a>
              </div>
            </figcaption>
          </figure>
        </div>
      {% endfor %}
    </div>
  </div>
</section>";
    }
}
