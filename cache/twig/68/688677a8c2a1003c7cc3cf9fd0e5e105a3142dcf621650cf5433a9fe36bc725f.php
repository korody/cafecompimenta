<?php

/* partials/header.html.twig */
class __TwigTemplate_39290a7d85e120ce4740cc7fbe2ef17266b1d2d82753bd64135a474fa97ea2da extends Twig_Template
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
        echo "<header>
  <section class=\"jumbotron jumbotron-fluid\">
    <div class=\"texture-overlay\"></div>
    <div class=\"container-fluid\">
      <div class=\"row nav-wrapper\">
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-left\">
          <a href=\"#\"><img src=\"";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/images"), "method"), "media", array()), "cafecompimenta_logo_branco.png", array(), "array"), "url", array());
        echo "\" alt=\"Café com Pimenta\" class=\"header-logo\"></a>
        </div>
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-right navicon\">
          <a id=\"trigger-overlay\" class=\"nav_slide_button nav-toggle\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row m-t-xxl\">
        <div class=\"col-xs-12 text-xs-center\">
          <h1 class=\"display-1 text-white wp0\">";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "title", array());
        echo "</h1>
          ";
        // line 17
        echo "        </div>
      </div>
    </div>
  </section>  
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 17,  38 => 15,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<header>
  <section class=\"jumbotron jumbotron-fluid\">
    <div class=\"texture-overlay\"></div>
    <div class=\"container-fluid\">
      <div class=\"row nav-wrapper\">
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-left\">
          <a href=\"#\"><img src=\"{{ page.find('/images').media['cafecompimenta_logo_branco.png'].url }}\" alt=\"Café com Pimenta\" class=\"header-logo\"></a>
        </div>
        <div class=\"col-md-6 col-sm-6 col-xs-6 text-right navicon\">
          <a id=\"trigger-overlay\" class=\"nav_slide_button nav-toggle\" href=\"#\"><span></span></a>
        </div>
      </div>
      <div class=\"row m-t-xxl\">
        <div class=\"col-xs-12 text-xs-center\">
          <h1 class=\"display-1 text-white wp0\">{{ site.header.title }}</h1>
          {# <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> #}
        </div>
      </div>
    </div>
  </section>  
</header>
";
    }
}
