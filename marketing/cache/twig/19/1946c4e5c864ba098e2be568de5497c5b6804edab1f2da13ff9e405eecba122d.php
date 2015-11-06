<?php

/* partials/base.html.twig */
class __TwigTemplate_18e69b9297bd26d1126a2290a45653b0141f5c19ee157e2115c927a83ad94c56 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
        
        <div id=\"preloader\">      
            <div id=\"status\">
                <img src=\"";
        // line 29
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
            </div>
        </div>

        ";
        // line 33
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 44
        echo "        
        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
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
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" />

         ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        <script src=\"";
        // line 22
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/modernizr.js\"></script>
        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/default.css"), "method");
        // line 16
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layout.css"), "method");
        // line 17
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/media-queries.css"), "method");
        // line 18
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 19
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/prettyPhoto.css"), "method");
        // line 20
        echo "        ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 34)->display($context);
        // line 35
        echo "        ";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "        ";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 42)->display($context);
        // line 43
        echo "        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 47
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.min.js"), "method");
        // line 48
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 49
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.js"), "method");
        // line 50
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fittext.js"), "method");
        // line 51
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fitvids.js"), "method");
        // line 52
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imagelightbox.js"), "method");
        // line 53
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.prettyPhoto.js"), "method");
        // line 54
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 55
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
        return array (  200 => 55,  197 => 54,  194 => 53,  191 => 52,  188 => 51,  185 => 50,  182 => 49,  179 => 48,  176 => 47,  173 => 46,  170 => 45,  166 => 43,  163 => 42,  160 => 41,  155 => 38,  151 => 39,  148 => 38,  145 => 37,  141 => 35,  138 => 34,  135 => 33,  131 => 20,  128 => 19,  125 => 18,  122 => 17,  119 => 16,  116 => 15,  113 => 14,  107 => 22,  102 => 21,  100 => 14,  95 => 12,  92 => 11,  90 => 10,  82 => 9,  79 => 8,  76 => 7,  67 => 57,  65 => 45,  62 => 44,  60 => 41,  57 => 40,  55 => 37,  52 => 36,  50 => 33,  43 => 29,  36 => 24,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->*/
/* <!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->*/
/* <!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->*/
/* <!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png" />*/
/* */
/*          {% block stylesheets %}*/
/*                 {% do assets.addCss('theme://css/default.css') %}*/
/*                 {% do assets.addCss('theme://css/layout.css') %}*/
/*                 {% do assets.addCss('theme://css/media-queries.css') %}*/
/*                 {% do assets.addCss('theme://css/animate.css') %}*/
/*                 {% do assets.addCss('theme://css/prettyPhoto.css') %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/*         <script src="{{ theme_url }}/js/modernizr.js"></script>*/
/*         {% endblock head%}*/
/*     </head>*/
/*     <body>*/
/*         */
/*         <div id="preloader">      */
/*             <div id="status">*/
/*                 <img src="{{ theme_url }}/images/preloader.gif" height="64" width="64" alt="">*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% block header %}*/
/*              {% include 'partials/header.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/*             {% block content %}{% endblock %}*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*              {% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/*         */
/*         {% block javascripts %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.addJs('theme://js/jquery-migrate-1.2.1.min.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.flexslider.js') %}*/
/*             {% do assets.addJs('theme://js/waypoints.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.fittext.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.fitvids.js') %}*/
/*             {% do assets.addJs('theme://js/imagelightbox.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.prettyPhoto.js') %}*/
/*             {% do assets.addJs('theme://js/main.js') %}*/
/* */
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/*     </body>*/
/* </html>*/
/* */
