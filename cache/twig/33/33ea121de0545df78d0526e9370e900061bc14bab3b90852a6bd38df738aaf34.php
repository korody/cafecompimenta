<?php

/* modular/clients.html.twig */
class __TwigTemplate_a7c921e58252500a63060a3bedd5ecb31ec50d04f69dcce056bed6bf0a64011c extends Twig_Template
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
        echo "\"  class=\"clients text-xs-center\">
    <div class=\"container-fluid\">
        <div class=\"row flex-items-xs-middle flex-items-xs-center\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "clients", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "                <div class=\"col-sm-6 col-md-4 col-lg-2 p-b-xxl\">
                    <img src=\"";
            // line 6
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["item"], "logo", array()), array(), "array"), "url", array());
            echo "\" class=\"img-fluid client-logo\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  33 => 6,  30 => 5,  26 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\"  class=\"clients text-xs-center\">
    <div class=\"container-fluid\">
        <div class=\"row flex-items-xs-middle flex-items-xs-center\">
            {% for item in page.header.clients %}
                <div class=\"col-sm-6 col-md-4 col-lg-2 p-b-xxl\">
                    <img src=\"{{ page.media[item.logo].url }}\" class=\"img-fluid client-logo\">
                </div>
            {% endfor %}
        </div>
    </div>
</section>
";
    }
}
