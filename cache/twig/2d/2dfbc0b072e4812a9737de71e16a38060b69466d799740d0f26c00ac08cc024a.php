<?php

/* partials/footer.html.twig */
class __TwigTemplate_3c8717402c457a1d125f298842b8281d466525472cb12b54e863ba22156d1728 extends Twig_Template
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
        <a href=\"";
        // line 3
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/home\"><img src=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "cafecompimenta_logo_branco_reduzido.png", array(), "array"), "url", array());
        echo "\" class=\"img-responsive footer-logo m-b-sm\"></a>
        <p>© Café com Pimenta 2016<br>piece of cloud by <a href=\"http://www.aerogami.com/\">AEROGAMI</a></p>
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
        <a href=\"{{ base_url }}/home\"><img src=\"{{ page.find('/images').media['cafecompimenta_logo_branco_reduzido.png'].url }}\" class=\"img-responsive footer-logo m-b-sm\"></a>
        <p>© Café com Pimenta 2016<br>piece of cloud by <a href=\"http://www.aerogami.com/\">AEROGAMI</a></p>
    </div>
</footer>";
    }
}
