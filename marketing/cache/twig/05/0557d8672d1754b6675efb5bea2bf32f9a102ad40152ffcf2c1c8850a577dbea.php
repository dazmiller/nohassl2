<?php

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_75dd659ea7867e8e56012108e2776f9f03788de0b5fcae5337832e1bccf1100b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["value"] = ((((isset($context["value"]) ? $context["value"] : null) === false)) ? (0) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 6
        $context["has_hidden"] = false;
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 8
            if (twig_test_empty($context["key"])) {
                // line 9
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-field-name=\"";
        // line 15
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\"
";
    }

    // line 18
    public function block_input($context, array $blocks = array())
    {
        // line 19
        echo "
    <div class=\"switch-toggle switch-grav ";
        // line 20
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo " switch-";
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        echo "\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 22
            echo "            ";
            $context["id"] = (("toggle_" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . $context["key"]);
            // line 23
            echo "
            <input type=\"radio\"
                value=\"";
            // line 25
            echo $context["key"];
            echo "\"
                id=\"";
            // line 26
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\"
                name=\"";
            // line 27
            echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
            echo "\"
                ";
            // line 28
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array(), "any", true, true)) {
                // line 29
                echo "                class=\"";
                echo ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "highlight", array()) == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
                ";
            }
            // line 31
            echo "                ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array())) {
                // line 32
                echo "                    ";
                if ((("" . $context["key"]) == ("" . (isset($context["value"]) ? $context["value"] : null)))) {
                    echo "checked=\"checked\" ";
                }
                // line 33
                echo "                    ";
                if ((array_key_exists("value", $context) && (($context["key"] == 1) || ($context["key"] == "1")))) {
                    echo "checked=\"checked\" ";
                }
                // line 34
                echo "                ";
            } else {
                // line 35
                echo "                    ";
                if ((("" . $context["key"]) == ("" . (isset($context["value"]) ? $context["value"] : null)))) {
                    echo "checked=\"checked\" ";
                }
                // line 36
                echo "                ";
            }
            // line 37
            echo "                ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "required=\"required\"";
            }
            // line 38
            echo "            />
            <label for=\"";
            // line 39
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter($context["text"]);
            } else {
                echo $this->env->getExtension('GravTwigExtension')->translate($context["text"]);
            }
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        <a></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 41,  138 => 39,  135 => 38,  130 => 37,  127 => 36,  122 => 35,  119 => 34,  114 => 33,  109 => 32,  106 => 31,  100 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 23,  79 => 22,  75 => 21,  69 => 20,  66 => 19,  63 => 18,  57 => 15,  52 => 14,  49 => 13,  45 => 1,  38 => 9,  36 => 8,  32 => 7,  30 => 6,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set value = (value is null ? field.default : value) %}*/
/* {% set value = (value is same as(false) ? 0 : value) %}*/
/* */
/* {% set has_hidden = false %}*/
/* {% for key, text in field.options %}*/
/*     {% if key is empty %}*/
/*       {% set has_hidden = true %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* {% block global_attributes %}*/
/*     {{ parent() }}*/
/*     data-grav-field-name="{{ field.name|fieldName }}"*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/* */
/*     <div class="switch-toggle switch-grav {{ field.size }} switch-{{ field.options|length }}">*/
/*         {% for key, text in field.options %}*/
/*             {% set id = "toggle_" ~ field.name ~ key %}*/
/* */
/*             <input type="radio"*/
/*                 value="{{ key }}"*/
/*                 id="{{ id }}"*/
/*                 name="{{ (scope ~ field.name)|fieldName }}"*/
/*                 {% if field.highlight is defined %}*/
/*                 class="{{ field.highlight == '' ~ key ? 'highlight' : '' }}"*/
/*                 {% endif %}*/
/*                 {% if field.toggleable %}*/
/*                     {% if '' ~ key == '' ~ value %}checked="checked" {% endif %}*/
/*                     {% if value is defined and (key == 1 or key == '1') %}checked="checked" {% endif %}*/
/*                 {% else %}*/
/*                     {% if '' ~ key == '' ~ value %}checked="checked" {% endif %}*/
/*                 {% endif %}*/
/*                 {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*             />*/
/*             <label for="{{ id }}">{% if grav.twig.twig.filters['tu'] is defined %}{{ text|tu }}{% else %}{{ text|t }}{% endif %}</label>*/
/*         {% endfor %}*/
/*         <a></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
