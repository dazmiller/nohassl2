<?php

/* partials/nav.html.twig */
class __TwigTemplate_5862cfc09257454355f6cb4563e49edbb12c2c4b3f24adbf2be2902b30aa9ddd extends Twig_Template
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
        echo "<nav id=\"admin-sidebar\">
    <div id=\"admin-logo\">
        <h3><a href=\"";
        // line 3
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_ADMIN");
        echo "</a> <a target=\"_blank\" href=\"";
        echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
        echo "\"><i class=\"fa fa-fw fa-angle-double-right\"></i></a></h3>
    </div>

    ";
        // line 7
        echo "    <div id=\"admin-user-details\">
        <a href=\"";
        // line 8
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/users/";
        echo $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "username", array());
        echo "\">
            <img src=\"http://www.gravatar.com/avatar/";
        // line 9
        echo $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "email", array()));
        echo "?s=32\" />

            <div class=\"admin-user-names\">
                <h4>";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "fullname", array());
        echo "</h4>
                <h5>";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "user", array()), "title", array());
        echo "</h5>
            </div>
        </a>
    </div>
    ";
        // line 18
        echo "
    <ul id=\"admin-menu\">
        <li class=\"";
        // line 20
        echo ((((isset($context["location"]) ? $context["location"] : null) == "dashboard")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 21
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "\"><i class=\"fa fa-fw fa-th\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        echo "</a>
        </li>
        ";
        // line 23
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.configuration", 1 => "admin.super"))) {
            // line 24
            echo "            <li class=\"";
            echo (((((isset($context["location"]) ? $context["location"] : null) == "system") || ((isset($context["location"]) ? $context["location"] : null) == "site"))) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 25
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/system\"><i class=\"fa fa-fw fa-wrench\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION");
            echo "</a>
            </li>
        ";
        }
        // line 28
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
            // line 29
            echo "            <li class=\"";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "pages")) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 30
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/pages\">
                    <i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 31
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
            echo "
                    <span class=\"badges\">
                        <span class=\"badge count\">";
            // line 33
            echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "countPages", array());
            echo "</span>
                    </span>
                </a>
            </li>
        ";
        }
        // line 38
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array())) {
            // line 39
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array()));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 40
                echo "                ";
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => ("admin." . $this->getAttribute($context["item"], "route", array())), 1 => "admin.super"))) {
                    // line 41
                    echo "                    <li class=\"";
                    echo ((((isset($context["location"]) ? $context["location"] : null) == $this->getAttribute($context["item"], "route", array()))) ? ("selected") : (""));
                    echo "\">
                        <a href=\"";
                    // line 42
                    echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                    echo "/";
                    echo $this->getAttribute($context["item"], "route", array());
                    echo "\">
                            <i class=\"fa fa-fw ";
                    // line 43
                    echo $this->getAttribute($context["item"], "icon", array());
                    echo "\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter($context["label"]);
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 47
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        }
        // line 49
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.plugins", 1 => "admin.super"))) {
            // line 50
            echo "            <li class=\"";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "plugins")) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 51
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/plugins\">
                    <i class=\"fa fa-fw fa-plug\"></i> ";
            // line 52
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS");
            echo "
                    <span class=\"badges\">
                        <span class=\"badge updates\"></span>
                        <span class=\"badge count\">";
            // line 55
            echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "plugins", array()));
            echo "</span>

                    </span>
                </a>
            </li>
        ";
        }
        // line 61
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.themes", 1 => "admin.super"))) {
            // line 62
            echo "            <li class=\"";
            echo ((((isset($context["location"]) ? $context["location"] : null) == "themes")) ? ("selected") : (""));
            echo "\">
                <a href=\"";
            // line 63
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/themes\">
                    <i class=\"fa fa-fw fa-tint\"></i> ";
            // line 64
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            echo "
                    <span class=\"badges\">
                        <span class=\"badge updates\"></span>
                        <span class=\"badge count\">";
            // line 67
            echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array()));
            echo "</span>
                    </span>
                </a>
            </li>
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        try {
            $this->loadTemplate("nav-pro.html.twig", "partials/nav.html.twig", 73)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 74
        echo "
        <!-- <li class=\"";
        // line 75
        echo ((((isset($context["location"]) ? $context["location"] : null) == "logs")) ? ("selected") : (""));
        echo "\">
            <a href=\"";
        // line 76
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/logs\">
                <i class=\"fa fa-fw fa-warning\"></i> Error Logs
                <span class=\"badges\">
                    <span class=\"badge count\">";
        // line 79
        echo twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "logs", array()));
        echo "</span>
                </span>
            </a>
        </li> -->
        <li>
            <a href=\"";
        // line 84
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/task";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
        echo "logout\"><i class=\"fa fa-fw fa-sign-out\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT");
        echo "</a>
        </li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 84,  230 => 79,  224 => 76,  220 => 75,  217 => 74,  210 => 73,  207 => 72,  199 => 67,  193 => 64,  189 => 63,  184 => 62,  181 => 61,  172 => 55,  166 => 52,  162 => 51,  157 => 50,  154 => 49,  151 => 48,  145 => 47,  136 => 43,  130 => 42,  125 => 41,  122 => 40,  117 => 39,  114 => 38,  106 => 33,  101 => 31,  97 => 30,  92 => 29,  89 => 28,  81 => 25,  76 => 24,  74 => 23,  67 => 21,  63 => 20,  59 => 18,  52 => 13,  48 => 12,  42 => 9,  36 => 8,  33 => 7,  23 => 3,  19 => 1,);
    }
}
/* <nav id="admin-sidebar">*/
/*     <div id="admin-logo">*/
/*         <h3><a href="{{ base_url_relative }}">{{ "PLUGIN_ADMIN.GRAV_ADMIN"|tu }}</a> <a target="_blank" href="{{ base_url_relative_frontend }}"><i class="fa fa-fw fa-angle-double-right"></i></a></h3>*/
/*     </div>*/
/* */
/*     {#{% if admin.authorize %}#}*/
/*     <div id="admin-user-details">*/
/*         <a href="{{ base_url_relative }}/users/{{ admin.user.username }}">*/
/*             <img src="http://www.gravatar.com/avatar/{{ admin.user.email|md5 }}?s=32" />*/
/* */
/*             <div class="admin-user-names">*/
/*                 <h4>{{ admin.user.fullname }}</h4>*/
/*                 <h5>{{ admin.user.title }}</h5>*/
/*             </div>*/
/*         </a>*/
/*     </div>*/
/*     {#{% endif %}#}*/
/* */
/*     <ul id="admin-menu">*/
/*         <li class="{{ (location == 'dashboard') ? 'selected' : '' }}">*/
/*             <a href="{{ base_url_relative }}"><i class="fa fa-fw fa-th"></i> {{ "PLUGIN_ADMIN.DASHBOARD"|tu }}</a>*/
/*         </li>*/
/*         {% if authorize(['admin.configuration', 'admin.super']) %}*/
/*             <li class="{{ (location == 'system' or location == 'site') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/system"><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }}</a>*/
/*             </li>*/
/*         {% endif %}*/
/*         {% if authorize(['admin.pages', 'admin.super']) %}*/
/*             <li class="{{ (location == 'pages') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/pages">*/
/*                     <i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.PAGES"|tu }}*/
/*                     <span class="badges">*/
/*                         <span class="badge count">{{ admin.countPages }}</span>*/
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*         {% if grav.twig.plugins_hooked_nav %}*/
/*             {% for label, item in grav.twig.plugins_hooked_nav %}*/
/*                 {% if authorize(['admin.' ~ item.route, 'admin.super']) %}*/
/*                     <li class="{{ (location == item.route) ? 'selected' : '' }}">*/
/*                         <a href="{{ base_url_relative }}/{{ item.route }}">*/
/*                             <i class="fa fa-fw {{ item.icon }}"></i> {{ label|tu }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         {% if authorize(['admin.plugins', 'admin.super']) %}*/
/*             <li class="{{ (location == 'plugins') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/plugins">*/
/*                     <i class="fa fa-fw fa-plug"></i> {{ "PLUGIN_ADMIN.PLUGINS"|tu }}*/
/*                     <span class="badges">*/
/*                         <span class="badge updates"></span>*/
/*                         <span class="badge count">{{ admin.plugins|length }}</span>*/
/* */
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*         {% if authorize(['admin.themes', 'admin.super']) %}*/
/*             <li class="{{ (location == 'themes') ? 'selected' : '' }}">*/
/*                 <a href="{{ base_url_relative }}/themes">*/
/*                     <i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEMES"|tu }}*/
/*                     <span class="badges">*/
/*                         <span class="badge updates"></span>*/
/*                         <span class="badge count">{{ admin.themes|length }}</span>*/
/*                     </span>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% include 'nav-pro.html.twig' ignore missing %}*/
/* */
/*         <!-- <li class="{{ (location == 'logs') ? 'selected' : '' }}">*/
/*             <a href="{{ base_url_relative }}/logs">*/
/*                 <i class="fa fa-fw fa-warning"></i> Error Logs*/
/*                 <span class="badges">*/
/*                     <span class="badge count">{{ admin.logs|length }}</span>*/
/*                 </span>*/
/*             </a>*/
/*         </li> -->*/
/*         <li>*/
/*             <a href="{{ base_url_relative }}/task{{ config.system.param_sep }}logout"><i class="fa fa-fw fa-sign-out"></i> {{ "PLUGIN_ADMIN.LOGOUT"|tu }}</a>*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
/* */
