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
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 40
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
        <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- open/close -->

        ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "
        ";
        // line 59
        $this->displayBlock('navigation', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
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

         ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        ";
        // line 27
        echo "        <link href='https://fonts.googleapis.com/css?family=OpenSans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>

        <script src=\"";
        // line 30
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/modernizr.custom.js");
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css"), "method");
        // line 16
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jquery.fancybox.css"), "method");
        // line 17
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/flickity.css"), "method");
        // line 18
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 19
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 20
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 21
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/queries.css"), "method");
        // line 22
        echo "        ";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "        ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "        ";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        // line 56
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "        ";
    }

    // line 59
    public function block_navigation($context, array $blocks = array())
    {
        // line 60
        echo "           ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "        ";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/toucheffects-min.js"), "method");
        // line 65
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 66
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/flickity.pkgd.min.js"), "method");
        // line 67
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fancybox.pack.js"), "method");
        // line 68
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/retina.js"), "method");
        // line 69
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 70
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 71
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/scripts-min.js"), "method");
        // line 72
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 73
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
        return array (  246 => 73,  243 => 72,  240 => 71,  237 => 70,  234 => 69,  231 => 68,  228 => 67,  225 => 66,  222 => 65,  219 => 64,  216 => 63,  212 => 61,  209 => 60,  206 => 59,  202 => 57,  199 => 56,  196 => 55,  191 => 52,  187 => 53,  184 => 52,  181 => 51,  177 => 49,  174 => 48,  171 => 47,  167 => 22,  164 => 21,  161 => 20,  158 => 19,  155 => 18,  152 => 17,  149 => 16,  146 => 15,  143 => 14,  129 => 30,  124 => 27,  117 => 23,  115 => 14,  110 => 12,  107 => 11,  105 => 10,  97 => 9,  94 => 8,  91 => 7,  80 => 74,  78 => 63,  75 => 62,  73 => 59,  70 => 58,  68 => 55,  65 => 54,  63 => 51,  60 => 50,  58 => 47,  49 => 40,  47 => 7,  42 => 5,  38 => 4,  34 => 3,  30 => 2,  27 => 1,);
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

        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        {# <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'> #}
        <link href='https://fonts.googleapis.com/css?family=OpenSans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600,700' rel='stylesheet' type='text/css'>

        <script src=\"{{ url('theme://js/modernizr.custom.js') }}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

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


    </body>
</html>
";
    }
}
