<?php

/* partials/navigation.html.twig */
class __TwigTemplate_58f91a0f45c30bdd4b336110c9f684640bce74424e69ea2428566b6a85e459c3 extends Twig_Template
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
        echo "<div class=\"overlay overlay-boxify\">
    <nav>
        ";
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 4
        echo "        ";
        // line 5
        echo "
        <ul>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 8
            echo "                ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 9
                echo "                    ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 10
                echo "                    <li class=\"";
                echo (isset($context["current_module"]) ? $context["current_module"] : null);
                echo "\">
                        <a href=\"#";
                // line 11
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                    </li>
                ";
            }
            // line 13
            echo "    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </ul>
    </nav>
</div>";
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 4,  61 => 15,  54 => 13,  46 => 11,  41 => 10,  38 => 9,  35 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"overlay overlay-boxify\">
    <nav>
        {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
        {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

        <ul>
            {% for module in page.collection() %}
                {% if not module.header.hidemenu %}
                    {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
                    <li class=\"{{ current_module }}\">
                        <a href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
                    </li>
                {% endif %}    
            {% endfor %}
        </ul>
    </nav>
</div>";
    }
}
