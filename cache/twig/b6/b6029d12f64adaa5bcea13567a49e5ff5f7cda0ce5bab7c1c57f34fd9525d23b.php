<?php

/* modular/menu.html.twig */
class __TwigTemplate_c8a48048717a14830727fbce7354480be4e7b6ddd68eab5630d1008ae2d06f60 extends Twig_Template
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
        echo "\" class=\"menu text-xs-center\">
    <div class=\"card card-block p-t-xl m-b-0 ";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "card_class", array());
        echo "\">
        <a class=\"menu-collapse\" data-toggle=\"collapse\" data-target=\"#";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array());
        echo "\"></a>
        <h2 class=\"card-title display-2 m-y-0\">";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h2>
        <h3 class=\"card-subtitle display-3\">";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "subtitle", array());
        echo "</h3>
        <i class=\"fa fa-chevron-down p-t-md\"></i>
    </div>

    <div class=\"collapse ";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "collapsible_class", array());
        echo " p-t-md\" id=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array());
        echo "\">
        <div class=\"container\">
            <div class=\"row flex-items-xs-center\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "food_menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3 m-b-xl wp2 ";
            if ($this->getAttribute($context["item"], "delay", array())) {
                echo "delay-";
                echo $this->getAttribute($context["item"], "delay", array());
                echo "s";
            }
            echo "\">
                        <div class=\"menu-item-icon\">
                            <img src=\"";
            // line 15
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), $this->getAttribute($context["item"], "icon", array()), array(), "array"), "url", array());
            echo "\" class=\"img-fluid\">
                        </div>
                        <div class=\"menu-item-title\">
                            <h4 class=\"display-3\">";
            // line 18
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h4>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " 
            </div>
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
        return array (  81 => 21,  71 => 18,  65 => 15,  55 => 13,  51 => 12,  43 => 9,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\" class=\"menu text-xs-center\">
    <div class=\"card card-block p-t-xl m-b-0 {{ page.header.card_class }}\">
        <a class=\"menu-collapse\" data-toggle=\"collapse\" data-target=\"#{{ page.slug }}\"></a>
        <h2 class=\"card-title display-2 m-y-0\">{{ page.header.title }}</h2>
        <h3 class=\"card-subtitle display-3\">{{ page.header.subtitle }}</h3>
        <i class=\"fa fa-chevron-down p-t-md\"></i>
    </div>

    <div class=\"collapse {{ page.header.collapsible_class }} p-t-md\" id=\"{{ page.slug }}\">
        <div class=\"container\">
            <div class=\"row flex-items-xs-center\">
                {% for item in page.header.food_menu %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3 m-b-xl wp2 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
                        <div class=\"menu-item-icon\">
                            <img src=\"{{ page.find('/images').media[(item.icon)].url }}\" class=\"img-fluid\">
                        </div>
                        <div class=\"menu-item-title\">
                            <h4 class=\"display-3\">{{ item.title }}</h4>
                        </div>
                    </div>
                {% endfor %} 
            </div>
        </div>
    </div>
</section>
";
    }
}
