<?php

/* partials/footer.html.twig */
class __TwigTemplate_8948846bfb325a13380969f48a762c6638ed3c0f0bc29af790cd47805d748f22 extends Twig_Template
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
        echo "<footer class=\"bg-purple text-xs-center\">
    <div class=\"container\">
        <img src=\"";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "cafecompimenta_logo_branco.png", array(), "array"), "url", array());
        echo "\" class=\"img-responsive footer-logo m-b-md\">
        <p>© Café com Pimenta 2016 - piece of cloud by <a href=\"http://www.aerogami.com/\">AEROGAMI</a></p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<footer class=\"bg-purple text-xs-center\">
    <div class=\"container\">
        <img src=\"{{ page.find('/images').media['cafecompimenta_logo_branco.png'].url }}\" class=\"img-responsive footer-logo m-b-md\">
        <p>© Café com Pimenta 2016 - piece of cloud by <a href=\"http://www.aerogami.com/\">AEROGAMI</a></p>
    </div>
</footer>";
    }
}
