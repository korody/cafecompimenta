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
            'bottom' => array($this, 'block_bottom'),
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
        // line 50
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
        <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- open/close -->

        ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('navigation', $context, $blocks);
        // line 72
        echo "
        ";
        // line 73
        $this->displayBlock('bottom', $context, $blocks);
        // line 76
        echo "    </body>
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
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
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

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/toucheffects-min.js"), "method");
        // line 39
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 40
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/flickity.pkgd.min.js"), "method");
        // line 41
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fancybox.pack.js"), "method");
        // line 42
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/retina.js"), "method");
        // line 43
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 44
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 45
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/scripts-min.js"), "method");
        // line 46
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts.js"), "method");
        // line 47
        echo "            ";
    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        // line 58
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "        ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "        ";
    }

    // line 69
    public function block_navigation($context, array $blocks = array())
    {
        // line 70
        echo "           ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 70)->display($context);
        // line 71
        echo "        ";
    }

    // line 73
    public function block_bottom($context, array $blocks = array())
    {
        // line 74
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
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
        return array (  252 => 74,  249 => 73,  245 => 71,  242 => 70,  239 => 69,  235 => 67,  232 => 66,  229 => 65,  224 => 62,  220 => 63,  217 => 62,  214 => 61,  210 => 59,  207 => 58,  204 => 57,  200 => 47,  197 => 46,  194 => 45,  191 => 44,  188 => 43,  185 => 42,  182 => 41,  179 => 40,  176 => 39,  173 => 38,  170 => 37,  166 => 34,  163 => 33,  161 => 32,  158 => 31,  155 => 30,  152 => 29,  149 => 28,  146 => 27,  143 => 26,  140 => 25,  135 => 48,  133 => 37,  127 => 35,  125 => 25,  114 => 17,  106 => 12,  103 => 11,  101 => 10,  93 => 9,  90 => 8,  87 => 7,  81 => 76,  79 => 73,  76 => 72,  74 => 69,  71 => 68,  69 => 65,  66 => 64,  64 => 61,  61 => 60,  59 => 57,  50 => 50,  48 => 7,  43 => 5,  39 => 4,  35 => 3,  31 => 2,  28 => 1,);
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

        {% block bottom %}
            {{ assets.js() }}
        {% endblock %}
    </body>
</html>
";
    }
}
