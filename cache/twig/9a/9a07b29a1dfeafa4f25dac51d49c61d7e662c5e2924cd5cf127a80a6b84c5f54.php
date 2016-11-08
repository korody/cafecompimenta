<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_94ff3fff8371e7c261c13dc72afc5c56693031e38e48c0901cb3236cc2da5f99 extends Twig_Template
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
        echo "\" class=\"testimonials text-xs-center p-y-xl bg-cream\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                <div class=\"testimonials-slider\">
                    <ul class=\"slides\" id=\"featuresSlider\">
                        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "testimonials", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 8
            echo "                            <li>
                                <img src=\"";
            // line 9
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["testimonial"], "avatar", array()), array(), "array"), "url", array());
            echo "\" alt=\"User Avatar\" class=\"img-circle\">
                                <blockquote>
                                    <p class=\"quote display-2 m-b-sm\">";
            // line 11
            echo $this->getAttribute($context["testimonial"], "quote", array());
            echo "</p>
                                    <p class=\"display-3 text-muted m-b-md\">";
            // line 12
            echo $this->getAttribute($context["testimonial"], "author", array());
            echo "</p>
                                </blockquote>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  45 => 12,  41 => 11,  36 => 9,  33 => 8,  29 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\" class=\"testimonials text-xs-center p-y-xl bg-cream\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                <div class=\"testimonials-slider\">
                    <ul class=\"slides\" id=\"featuresSlider\">
                        {% for testimonial in page.header.testimonials %}
                            <li>
                                <img src=\"{{ page.media[testimonial.avatar].url }}\" alt=\"User Avatar\" class=\"img-circle\">
                                <blockquote>
                                    <p class=\"quote display-2 m-b-sm\">{{ testimonial.quote }}</p>
                                    <p class=\"display-3 text-muted m-b-md\">{{ testimonial.author }}</p>
                                </blockquote>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }
}
