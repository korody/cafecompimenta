<?php

/* modular/testimonials.html.twig */
class __TwigTemplate_371512115b104d9ba85adea91b9a4e2818fb08d23128b58de6a57e541bedd039 extends Twig_Template
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
        echo "<section class=\"features-intro\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 nopadding features-intro-img\">
                <div class=\"features-bg\">
                    <div class=\"texture-overlay\"></div>
                    <";
        // line 10
        echo "                </div>
            </div>
            <div class=\"col-md-6 nopadding\">
                <div class=\"features-slider\">
\t                <h2 class=\"display-3 text-white\"><strong>";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</strong></h2>
                    <ul class=\"slides\" id=\"featuresSlider\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "slider", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 17
            echo "\t                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote class=\"team-quote\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\"><img src=\"";
            // line 19
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/avatar.png");
            echo "\" alt=\"User Avatar\"></div>
\t\t                            <p>";
            // line 20
            echo $this->getAttribute($context["slide"], "content", array());
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"logo-quote\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo $this->getAttribute($context["slide"], "url", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["slide"], "logo", array()), array(), "array"), "url", array());
            echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        return array (  68 => 27,  55 => 22,  50 => 20,  46 => 19,  42 => 17,  38 => 16,  33 => 14,  27 => 10,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"features-intro\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-6 nopadding features-intro-img\">
                <div class=\"features-bg\">
                    <div class=\"texture-overlay\"></div>
                    <{# div class=\"features-img wp1\">
                        <img src=\"{{ page.media[page.header.logo].url }}\" alt=\"Logo\">
                    </div> #}
                </div>
            </div>
            <div class=\"col-md-6 nopadding\">
                <div class=\"features-slider\">
\t                <h2 class=\"display-3 text-white\"><strong>{{ page.header.title }}</strong></h2>
                    <ul class=\"slides\" id=\"featuresSlider\">
                        {% for slide in page.header.slider %}
\t                        <li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote class=\"team-quote\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\"><img src=\"{{ url('theme://img/avatar.png') }}\" alt=\"User Avatar\"></div>
\t\t                            <p>{{ slide.content }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"logo-quote\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ slide.url }}\"><img src=\"{{ page.media[slide.logo].url }}\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t                        </li>
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
