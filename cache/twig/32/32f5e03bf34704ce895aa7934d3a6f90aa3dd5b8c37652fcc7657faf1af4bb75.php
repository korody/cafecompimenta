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
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "screenshots", array()), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 4
            echo "      <div class=\"row\">
        <ul class=\"grid\">
          ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "            <li>
              <figure>
                <img src=\"";
                // line 9
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["item"], "description", array());
                echo "\">
                <figcaption>
                  <div class=\"caption-content\">
                    <a href=\"";
                // line 12
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "large_image", array()), array(), "array"), "url", array());
                echo "\" class=\"single_image\">
                      <i class=\"fa fa-";
                // line 13
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i><br>
                      <p>";
                // line 14
                echo $this->getAttribute($context["item"], "description", array());
                echo "</p>
                    </a>
                  </div>
                </figcaption>
              </figure>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>
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
        return array (  78 => 24,  70 => 21,  57 => 14,  53 => 13,  49 => 12,  41 => 9,  37 => 7,  33 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"screenshots\" id=\"{{ page.menu }}\">
  <div class=\"container-fluid\">
    {% for row in page.header.screenshots|batch(4) %}
      <div class=\"row\">
        <ul class=\"grid\">
          {% for item in row %}
            <li>
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
            </li>
          {% endfor %}
        </ul>
      </div>
    {% endfor %}
  </div>
</section>";
    }
}
