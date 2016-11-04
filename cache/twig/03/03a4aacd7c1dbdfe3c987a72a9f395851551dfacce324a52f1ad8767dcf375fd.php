<?php

/* modular/downloads.html.twig */
class __TwigTemplate_ac15d7b0ca70c35a9cd20961ccdaf72a6c36f43404ce983c26ca0372c275ed87 extends Twig_Template
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
        echo "<section class=\"download\" id=\"download\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center wp4\">
        ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"download\" id=\"download\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 text-center wp4\">
        {{ page.content }}
      </div>
    </div>
  </div>
</section>";
    }
}
