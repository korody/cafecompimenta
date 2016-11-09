<?php

/* partials/base.html.twig */
class __TwigTemplate_20fa28e725aaa1fd35fc1abf568539975cb7c063ed664fde8fbc959cbf828d11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 51
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
        <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- open/close -->

        ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('navigation', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.ico");
        echo "\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=OpenSans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>

        <script src=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/modernizr.custom.js");
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

         ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

        ";
    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 27
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css"), "method");
        // line 28
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jquery.fancybox.css"), "method");
        // line 29
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/flickity.css"), "method");
        // line 30
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 31
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 32
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 33
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/queries.css"), "method");
        // line 34
        echo "        ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/toucheffects-min.js"), "method");
        // line 39
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 40
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/flickity.pkgd.min.js"), "method");
        // line 41
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fancybox.pack.js"), "method");
        // line 42
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/retina.js"), "method");
        // line 43
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 44
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 45
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/scripts-min.js"), "method");
        // line 46
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 47
        echo "        ";
    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "        ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "        ";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "        ";
    }

    // line 70
    public function block_navigation($context, array $blocks = array())
    {
        // line 71
        echo "           ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 71)->display($context);
        // line 72
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 72,  243 => 71,  240 => 70,  236 => 68,  233 => 67,  230 => 66,  225 => 63,  221 => 64,  218 => 63,  215 => 62,  211 => 60,  208 => 59,  205 => 58,  201 => 47,  198 => 46,  195 => 45,  192 => 44,  189 => 43,  186 => 42,  183 => 41,  180 => 40,  177 => 39,  174 => 38,  171 => 37,  167 => 34,  164 => 33,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  149 => 28,  146 => 27,  143 => 26,  135 => 48,  133 => 37,  127 => 35,  125 => 26,  113 => 17,  105 => 12,  102 => 11,  100 => 10,  92 => 9,  89 => 8,  86 => 7,  78 => 74,  75 => 73,  73 => 70,  70 => 69,  68 => 66,  65 => 65,  63 => 62,  60 => 61,  58 => 58,  49 => 51,  47 => 7,  42 => 5,  38 => 4,  34 => 3,  30 => 2,  27 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.ico') }}\" />
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=OpenSans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>

        <script src=\"{{ url('theme://js/modernizr.custom.js') }}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

         {% block stylesheets %}
                {% do assets.addCss('theme://css/bootstrap.min.css') %}
                {% do assets.addCss('theme://css/jquery.fancybox.css') %}
                {% do assets.addCss('theme://css/flickity.css') %}
                {% do assets.addCss('theme://css/animate.css') %}
                {% do assets.addCss('theme://css/styles.css') %}
                {% do assets.addCss('theme://css/custom.css') %}
                {% do assets.addCss('theme://css/queries.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.addJs('theme://js/min/toucheffects-min.js') %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/flickity.pkgd.min.js') %}
            {% do assets.addJs('theme://js/jquery.fancybox.pack.js') %}
            {% do assets.addJs('theme://js/retina.js') %}
            {% do assets.addJs('theme://js/waypoints.min.js') %}
            {% do assets.addJs('theme://js/bootstrap.min.js') %}
            {% do assets.addJs('theme://js/min/scripts-min.js') %}
            {% do assets.addJs('theme://js/scripts.js') %}
        {% endblock %}
        {{ assets.js() }}

        {% endblock head%}
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- open/close -->

        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block navigation %}
           {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {{ assets.js('bottom') }}
    </body>
</html>
";
    }
}
