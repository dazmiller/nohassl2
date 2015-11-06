<?php

/* forms/fields/section/section.html.twig */
class __TwigTemplate_c69248c03ed8760eeed0676d9bed329e7f0206f9b36726f710f5dbb43ee320a0 extends Twig_Template
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
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())) {
            // line 2
            echo "<h1 ";
            if ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "underline", array())) {
                echo "class=\"no_underline\"";
            }
            echo ">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()));
            } else {
                echo $this->env->getExtension('GravTwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()));
            }
            echo "</h1>
";
        }
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array())) {
            // line 6
            echo "<p>";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array()));
            } else {
                echo $this->env->getExtension('GravTwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array()));
            }
            echo "<p>
";
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 10
            echo "    <div class=\"form-section\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
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
                // line 12
                echo "        ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 13
                    echo "            ";
                    $context["value"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                    // line 14
                    echo "            ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/section/section.html.twig", 14)->display($context);
                    // line 15
                    echo "        ";
                }
                // line 16
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
            // line 17
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/section/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  58 => 11,  55 => 10,  53 => 9,  50 => 8,  40 => 6,  38 => 5,  35 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if field.title %}*/
/* <h1 {% if not field.underline %}class="no_underline"{% endif %}>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.title|tu }}{% else %}{{ field.title|t }}{% endif %}</h1>*/
/* {% endif %}*/
/* */
/* {% if field.text %}*/
/* <p>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.text|tu }}{% else %}{{ field.text|t }}{% endif %}<p>*/
/* {% endif %}*/
/* */
/* {% if field.fields %}*/
/*     <div class="form-section">*/
/*     {% for field in field.fields %}*/
/*         {% if field.type %}*/
/*             {% set value = data.value(field.name) %}*/
/*             {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/text/text.html.twig'] %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* */
