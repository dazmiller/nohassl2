<?php

/* logout.html.twig */
class __TwigTemplate_d981e39f2d202add716d1febc3b6632894c209efa37d8024f6eec2161e7767b4 extends Twig_Template
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
        $this->loadTemplate("logout.html.twig", "logout.html.twig", 1, "567728370")->display(array_merge($context, array("title" => "Grav Logout")));
    }

    public function getTemplateName()
    {
        return "logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* logout.html.twig */
class __TwigTemplate_d981e39f2d202add716d1febc3b6632894c209efa37d8024f6eec2161e7767b4_567728370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/login.html.twig", "logout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta http-equiv=\"refresh\" content=\"3; URL=";
        // line 4
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\">
  ";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "    <section id=\"admin-login\" class=\"default-glow-shadow\">
        <h1>
            ";
        // line 10
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "
        </h1>
        ";
        // line 12
        echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "setMessage", array(0 => $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_ADMIN.LOGGED_OUT")), "method");
        echo "
        ";
        // line 13
        $this->loadTemplate("partials/messages.html.twig", "logout.html.twig", 13)->display($context);
        // line 14
        echo "    </section>
    ";
    }

    public function getTemplateName()
    {
        return "logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  94 => 13,  90 => 12,  85 => 10,  81 => 8,  78 => 7,  72 => 4,  67 => 3,  64 => 2,  19 => 1,);
    }
}
/* {% embed 'partials/login.html.twig' with {title:'Grav Logout'} %}*/
/*   {% block head %}*/
/*     {{ parent() }}*/
/*     <meta http-equiv="refresh" content="3; URL={{ base_url_relative }}">*/
/*   {% endblock %}*/
/* */
/*   {% block page %}*/
/*     <section id="admin-login" class="default-glow-shadow">*/
/*         <h1>*/
/*             {{ title }}*/
/*         </h1>*/
/*         {{ admin.setMessage('PLUGIN_ADMIN.LOGGED_OUT'|t) }}*/
/*         {% include 'partials/messages.html.twig' %}*/
/*     </section>*/
/*     {% endblock %}*/
/* {% endembed %}*/
/* */
