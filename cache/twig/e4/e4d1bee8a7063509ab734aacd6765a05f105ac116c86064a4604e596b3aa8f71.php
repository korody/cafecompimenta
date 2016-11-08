<?php

/* partials/google-maps.html.twig */
class __TwigTemplate_de82bdb65cbd8d1ce4d52390d59cc12009d2243d5449cf34b5a895c67f5d2efd extends Twig_Template
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
        echo "<div id=\"map-";
        echo (isset($context["hash"]) ? $context["hash"] : null);
        echo "\" class=\"google-map\" style=\"width: ";
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "; height: ";
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\"
     data-lat=\"";
        // line 2
        echo (isset($context["lat"]) ? $context["lat"] : null);
        echo "\"
     data-lng=\"";
        // line 3
        echo (isset($context["lng"]) ? $context["lng"] : null);
        echo "\"
     data-zoom=\"";
        // line 4
        echo (isset($context["zoom"]) ? $context["zoom"] : null);
        echo "\"
     data-infowindow=\"";
        // line 5
        echo (isset($context["infowindow"]) ? $context["infowindow"] : null);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/google-maps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  32 => 3,  28 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"map-{{ hash }}\" class=\"google-map\" style=\"width: {{ width }}; height: {{ height }}\"
     data-lat=\"{{ lat }}\"
     data-lng=\"{{ lng }}\"
     data-zoom=\"{{ zoom }}\"
     data-infowindow=\"{{ infowindow }}\">
</div>
";
    }
}
