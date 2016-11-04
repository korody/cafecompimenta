<?php

/* modular/menu.html.twig */
class __TwigTemplate_9253a21c7a36f31f833036391e8ea54b3e522215e2d679f4581bb7d5495961cf extends Twig_Template
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
        echo "<section class=\"menu text-center p-y-xl ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "section_class", array());
        echo "\">
    <div class=\"container\">
        <div class=\"m-b-xl\">
            <h2 class=\"display-2 text-uppercase\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
            <span class=\"display-4\">";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array());
        echo "</span>
        </div>
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "food_menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "                <div class=\"col-md-3 m-b-lg wp2 ";
            if ($this->getAttribute($context["item"], "delay", array())) {
                echo "delay-";
                echo $this->getAttribute($context["item"], "delay", array());
                echo "s";
            }
            echo "\">
                    <div class=\"menu-item-icon\">
                        <img src=\"";
            // line 11
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($context["item"], "icon", array()), array(), "array"), "url", array());
            echo "\" class=\"img-responsive\">
                    </div>
                    <div class=\"menu-item-title\">
                        <h3>";
            // line 14
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h3>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  56 => 14,  50 => 11,  40 => 9,  36 => 8,  30 => 5,  26 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"menu text-center p-y-xl {{ page.header.section_class }}\">
    <div class=\"container\">
        <div class=\"m-b-xl\">
            <h2 class=\"display-2 text-uppercase\">{{ page.header.title }}</h2>
            <span class=\"display-4\">{{ page.header.subtitle }}</span>
        </div>
        <div class=\"row\">
            {% for item in page.header.food_menu %}
                <div class=\"col-md-3 m-b-lg wp2 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
                    <div class=\"menu-item-icon\">
                        <img src=\"{{ page.find('/images').media[(item.icon)].url }}\" class=\"img-responsive\">
                    </div>
                    <div class=\"menu-item-title\">
                        <h3>{{ item.title }}</h3>
                    </div>
                </div>
            {% endfor %} 
        </div>
    </div>
</section>
";
    }
}
