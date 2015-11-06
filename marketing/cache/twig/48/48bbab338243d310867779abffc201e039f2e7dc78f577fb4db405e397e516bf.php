<?php

/* forms/fields/select/select.html.twig */
class __TwigTemplate_f82cb976af8625c2e17feac775e7477a568ad4b347fcd10ad8377ecb8bc7199a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/select/select.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    ";
        // line 5
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_input($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"form-select-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
        <select class=\"";
        // line 10
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
        echo "\" name=\"";
        echo ($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ("[]") : ("")));
        echo "\"
                ";
        // line 11
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 12
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 13
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 14
        echo "                ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 15
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array())) {
            echo "form=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array());
            echo "\"";
        }
        // line 16
        echo "                >
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 18
            echo "            <option ";
            if ((($context["key"] == (isset($context["value"]) ? $context["value"] : null)) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()) && twig_in_filter($context["text"], (isset($context["value"]) ? $context["value"] : null))))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ($context["text"]) : ($context["key"]));
            echo "\">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter($context["text"]);
            } else {
                echo $this->env->getExtension('GravTwigExtension')->translate($context["text"]);
            }
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  90 => 18,  86 => 17,  83 => 16,  76 => 15,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  51 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-selectize="{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     <div class="form-select-wrapper {{ field.size }}">*/
/*         <select class="{{ field.classes }}" name="{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}"*/
/*                 {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                 {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                 {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                 {% if field.multiple in ['on', 'true', 1] %}multiple="multiple"{% endif %}*/
/*                 {% if field.form %}form="{{ field.form }}"{% endif %}*/
/*                 >*/
/*             {% for key, text in field.options %}*/
/*             <option {% if key == value or (field.multiple and text in value) %}selected="selected"{% endif %} value="{{ field.multiple ? text : key }}">{% if grav.twig.twig.filters['tu'] is defined %}{{ text|tu }}{% else %}{{ text|t }}{% endif %}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/* {% endblock %}*/
/* */
