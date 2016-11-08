<?php

/* modular/text.html.twig */
class __TwigTemplate_c40d3c6de3a1c83b644ba6a9fd1d7571f7708c5941298f40c42e351ca4001024 extends Twig_Template
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
        echo "\" class=\"section-text text-xs-center p-y-lg ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "section_class", array());
        echo "\">
    <div class=\"container\">
\t\t\t<h2 class=\"display-2 ";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text_class", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "text", array());
        echo "</h2>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"{{ page.menu }}\" class=\"section-text text-xs-center p-y-lg {{ page.header.section_class }}\">
    <div class=\"container\">
\t\t\t<h2 class=\"display-2 {{ page.header.text_class }}\">{{ page.header.text }}</h2>
    </div>
</section>
";
    }
}
