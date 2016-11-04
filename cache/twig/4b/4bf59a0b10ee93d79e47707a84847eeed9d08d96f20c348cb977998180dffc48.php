<?php

/* modular/featureslist.html.twig */
class __TwigTemplate_098cc73e19785de9e65c5aff7705e0d0cd06a52483a618b506508e9618b308f2 extends Twig_Template
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
        echo "<section class=\"features text-center\" id=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "featureslist", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                    <div class=\"col-md-3 m-b-lg feature-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo " wp2 ";
            if ($this->getAttribute($context["item"], "delay", array())) {
                echo "delay-";
                echo $this->getAttribute($context["item"], "delay", array());
                echo "s";
            }
            echo "\">
                        <div class=\"feature\">
                            <i class=\"fa fa-";
            // line 8
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h1>";
            // line 11
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h1>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/featureslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  60 => 11,  54 => 8,  42 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"features text-center\" id=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% for item in page.header.featureslist %}
                    <div class=\"col-md-3 m-b-lg feature-{{ loop.index }} wp2 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
                        <div class=\"feature\">
                            <i class=\"fa fa-{{ item.icon }}\"></i>
                        </div>
                        <div class=\"feature-content\">
                            <h1>{{ item.title }}</h1>
                        </div>
                    </div>
                {% endfor %} 
            </div>
        </div>
    </div>
</section>";
    }
}
