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
        // line 39
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
        <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- open/close -->

        ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('navigation', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
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
        echo "            <meta charset=\"utf-8\" />
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
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.ico");
        echo "\" />
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,600,700|Raleway:300,400,700\" rel=\"stylesheet\">

            <script src=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/modernizr.custom.js");
        echo "\"></script>

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>

             ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "


        ";
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "                    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css"), "method");
        // line 27
        echo "                    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jquery.fancybox.css"), "method");
        // line 28
        echo "                    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/flickity.css"), "method");
        // line 29
        echo "                    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 30
        echo "                    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 31
        echo "            <![endif]-->
                    ";
        // line 32
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 33
        echo "                    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/queries.css"), "method");
        // line 34
        echo "            ";
    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        // line 47
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "        ";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "        ";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "        ";
    }

    // line 58
    public function block_navigation($context, array $blocks = array())
    {
        // line 59
        echo "           ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "        ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/toucheffects-min.js"), "method");
        // line 64
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 65
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/flickity.pkgd.min.js"), "method");
        // line 66
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fancybox.pack.js"), "method");
        // line 67
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/retina.js"), "method");
        // line 68
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 69
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 70
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/scripts-min.js"), "method");
        // line 71
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
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
        return array (  243 => 72,  240 => 71,  237 => 70,  234 => 69,  231 => 68,  228 => 67,  225 => 66,  222 => 65,  219 => 64,  216 => 63,  213 => 62,  209 => 60,  206 => 59,  203 => 58,  199 => 56,  196 => 55,  193 => 54,  188 => 51,  184 => 52,  181 => 51,  178 => 50,  174 => 48,  171 => 47,  168 => 46,  164 => 34,  161 => 33,  159 => 32,  156 => 31,  153 => 30,  150 => 29,  147 => 28,  144 => 27,  141 => 26,  138 => 25,  129 => 35,  127 => 25,  116 => 17,  108 => 12,  105 => 11,  103 => 10,  95 => 9,  92 => 8,  89 => 7,  80 => 73,  78 => 62,  75 => 61,  73 => 58,  70 => 57,  68 => 54,  65 => 53,  63 => 50,  60 => 49,  58 => 46,  49 => 39,  47 => 7,  42 => 5,  38 => 4,  34 => 3,  30 => 2,  27 => 1,);
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
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,600,700|Raleway:300,400,700\" rel=\"stylesheet\">

            <script src=\"{{ url('theme://js/modernizr.custom.js') }}\"></script>

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>

             {% block stylesheets %}
                    {% do assets.addCss('theme://css/bootstrap.min.css') %}
                    {% do assets.addCss('theme://css/jquery.fancybox.css') %}
                    {% do assets.addCss('theme://css/flickity.css') %}
                    {% do assets.addCss('theme://css/animate.css') %}
                    {% do assets.addCss('theme://css/styles.css') %}
            <![endif]-->
                    {% do assets.addCss('theme://css/custom.css') %}
                    {% do assets.addCss('theme://css/queries.css') %}
            {% endblock %}
            {{ assets.css() }}


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
