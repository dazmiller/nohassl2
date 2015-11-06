<?php

/* partials/blueprints.html.twig */
class __TwigTemplate_03d2f8da30c71750f7dbdd06ade6b6927853c8d47760731a7f2b7955a54d526e extends Twig_Template
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
        $context["form_id"] = (((isset($context["form_id"]) ? $context["form_id"] : null)) ? ((isset($context["form_id"]) ? $context["form_id"] : null)) : ("blueprints"));
        // line 2
        echo "
<form id=\"";
        // line 3
        echo (isset($context["form_id"]) ? $context["form_id"] : null);
        echo "\" method=\"post\" data-grav-form=\"";
        echo (isset($context["form_id"]) ? $context["form_id"] : null);
        echo "\" data-grav-keepalive=\"true\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 6
                echo "            ";
                $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 7
                echo "
            <div class=\"block block-";
                // line 8
                echo $this->getAttribute($context["field"], "type", array());
                echo "\">
                ";
                // line 9
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/blueprints.html.twig", 9)->display($context);
                // line 10
                echo "            </div>
        ";
            }
            // line 12
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "extra", array())) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "extra", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 16
                echo "        ";
                $context["field"] = array("name" => ("_json." . $context["name"]));
                // line 17
                echo "        ";
                $context["value"] = twig_escape_filter($this->env, twig_jsonencode_filter($context["value"]));
                // line 18
                echo "        ";
                $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "partials/blueprints.html.twig", 18)->display($context);
                // line 19
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        }
        // line 21
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 21,  126 => 20,  112 => 19,  109 => 18,  106 => 17,  103 => 16,  85 => 15,  83 => 14,  80 => 13,  66 => 12,  62 => 10,  60 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set form_id = form_id ? form_id : 'blueprints' %}*/
/* */
/* <form id="{{ form_id }}" method="post" data-grav-form="{{ form_id }}" data-grav-keepalive="true">*/
/*     {% for field in blueprints.fields %}*/
/*         {% if field.type %}*/
/*             {% set value = data.value(field.name) %}*/
/* */
/*             <div class="block block-{{ field.type }}">*/
/*                 {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% if data.extra %}*/
/*     {% for name, value in data.extra %}*/
/*         {% set field = {name: '_json.' ~ name} %}*/
/*         {% set value = value|json_encode|e %}*/
/*         {% include 'forms/fields/hidden/hidden.html.twig' %}*/
/*     {% endfor %}*/
/*     {% endif %}*/
/* </form>*/
/* */
