<?php

/* system.html.twig */
class __TwigTemplate_ba7bdeb8d24c419626949ceec0358f7c2e4d9e46019164b0435660132f7de77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "system.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => "system"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titlebar($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 7
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        // line 8
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
        echo "</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 10
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION");
        echo " - ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM");
        echo "</h1>
";
    }

    // line 13
    public function block_content_top($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"alert notice\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION");
        echo ": <b>";
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "file", array()), "filename", array()), array((isset($context["base_path"]) ? $context["base_path"] : null) => ""));
        echo "</b></div>
    <ul class=\"tab-bar\">
        <li class=\"active\"><span>";
        // line 16
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM");
        echo "</span></li>
        <li><a href=\"";
        // line 17
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/site\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE");
        echo "</a></li>
        <li><a href=\"";
        // line 18
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/info\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO");
        echo "</a></li>
    </ul>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "system.html.twig", 23)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()), "data" => (isset($context["data"]) ? $context["data"] : null))));
    }

    public function getTemplateName()
    {
        return "system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  88 => 22,  79 => 18,  73 => 17,  69 => 16,  61 => 14,  58 => 13,  50 => 10,  45 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set data = admin.data('system') %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }} - {{ "PLUGIN_ADMIN.SYSTEM"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block content_top %}*/
/*     <div class="alert notice">{{ "PLUGIN_ADMIN.SAVE_LOCATION"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>*/
/*     <ul class="tab-bar">*/
/*         <li class="active"><span>{{ "PLUGIN_ADMIN.SYSTEM"|tu }}</span></li>*/
/*         <li><a href="{{ base_url_relative }}/site">{{ "PLUGIN_ADMIN.SITE"|tu }}</a></li>*/
/*         <li><a href="{{ base_url_relative }}/info">{{ "PLUGIN_ADMIN.INFO"|tu }}</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}*/
/* {% endblock %}*/
/* */
/* */
