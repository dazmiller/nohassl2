<?php

/* dashboard.html.twig */
class __TwigTemplate_6c1e83955b2c83357ef85a180ace94a7072de5aa1aa2e674bdcfcb5bce8ce34b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlebar($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"button-bar\">
        ";
        // line 5
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 6
            echo "            <div class=\"button-group\">
                <button data-clear-cache=\"";
            // line 7
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/cache.json/task";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "clearCache\" class=\"button\"><i class=\"fa fa-trash\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE");
            echo "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache=\"";
            // line 12
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/cache.json/task";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "clearCache/cleartype";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "all\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE");
            echo "</a></li>
                    <li><a data-clear-cache=\"";
            // line 13
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/cache.json/task";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "clearCache/cleartype";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "assets-only\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY");
            echo "</a></li>
                    <li><a data-clear-cache=\"";
            // line 14
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/cache.json/task";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "clearCache/cleartype";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "images-only\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY");
            echo "</a></li>
                    <li><a data-clear-cache=\"";
            // line 15
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/cache.json/task";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "clearCache/cleartype";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "cache-only\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY");
            echo "</a></li>
                </ul>
            </div>

            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            // line 19
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES");
            echo "</button>
        ";
        }
        // line 21
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 22
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        echo "</h1>
";
    }

    // line 25
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 27
    public function block_content_top($context, array $blocks = array())
    {
        // line 28
        echo "
    ";
        // line 29
        $context["gpm"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array(), "method");
        // line 30
        echo "    ";
        $context["updatable"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "getUpdatablePlugins", array(), "method");
        // line 31
        echo "    ";
        $context["backup"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "lastBackup", array(), "method");
        // line 32
        echo "
    <div id=\"admin-dashboard\">
        ";
        // line 34
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 35
            echo "            <div id=\"updates\" class=\"dashboard-item dashboard-left\">
                <div class=\"tertiary-accent default-box-shadow\">
                    <h1>";
            // line 37
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MAINTENANCE");
            echo "</h1>
                    <div class=\"admin-update-charts\">
                        <div class=\"updates-chart\">
                            <div class=\"chart-wrapper\">
                                <div class=\"ct-chart\"></div>
                                <span class=\"numeric hidden\"><span>-</span><em>";
            // line 42
            echo twig_lower_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATED"));
            echo "</em></span>
                            </div>
                            <p class=\"js__updates-available-description\">&nbsp;</p>
                        </div>
                        <div class=\"backups-chart\">
                            <div class=\"chart-wrapper\">
                                <div class=\"ct-chart\"></div>
                                <script>
                                    var data = {
                                      series: [";
            // line 51
            echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "chart_fill", array());
            echo ", ";
            echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "chart_empty", array());
            echo "]
                                    };
                                    var options = {
                                      donut: true,
                                      donutWidth: 10,
                                      startAngle: 0,
                                      total: 100,
                                      showLabel: false,
                                      height: 150,
                                      chartPadding: !isFirefox ? 5 : 10
                                    };
                                    Chartist.Pie('.backups-chart .ct-chart', data, options);
                                </script>
                                <span class=\"numeric\">";
            // line 64
            echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "days", array());
            echo "<em>";
            echo twig_lower_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DAYS"));
            echo "</em></span>
                            </div>
                            <p>";
            // line 66
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LAST_BACKUP");
            echo "</p>
                        </div>
                    </div>
                    <div class=\"flush-bottom button-bar\">
                        <button data-maintenance-update=\"";
            // line 70
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/update.json/task";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "update\" class=\"button\"><i class=\"fa fa-cloud-download\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATE");
            echo "</button>
                        <button data-ajax=\"";
            // line 71
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/backup.json/task";
            echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
            echo "backup\" class=\"button\"><i class=\"fa fa-database\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUP");
            echo "</button>
                    </div>
                </div>
            </div>
        ";
        }
        // line 76
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.statistics", 1 => "admin.super"))) {
            // line 77
            echo "            <div id=\"popularity\" class=\"dashboard-item dashboard-right\">
                <div class=\"secondary-accent default-box-shadow\">
                    <h1>";
            // line 79
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.STATISTICS");
            echo "</h1>
                    <div class=\"ct-chart\"></div>
                    <script>
                        var data = {
                            labels: ";
            // line 83
            echo $this->getAttribute($this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyChartData", array()), "labels", array(), "array");
            echo ",
                            series: [
                                ";
            // line 85
            echo $this->getAttribute($this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyChartData", array()), "data", array(), "array");
            echo "
                            ]
                        };
                        var options = {
                            height: 164,
                            chartPadding: !isFirefox ? 5 : 25,

                            axisX: {
                                showGrid: false,
                                labelOffset: {
                                    x: 0,
                                    y: 5
                                }
                            },
                            axisY: {
                                offset: 15,
                                showLabel: true,
                                showGrid: true,
                                labelOffset: {
                                    x: 5,
                                    y: 5
                                },
                                scaleMinSpace: 20
                            }
                        };
                        Chartist.Bar('#popularity .ct-chart', data, options);
                    </script>
                    <div class=\"flush-bottom button-bar stats-bar\">
                        <span class=\"stat\">
                            <b>";
            // line 114
            echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyTotal", array());
            echo "</b>
                            <i>";
            // line 115
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TODAY");
            echo "</i>
                        </span>
                        <span class=\"stat\">
                            <b>";
            // line 118
            echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getWeeklyTotal", array());
            echo "</b>
                            <i>";
            // line 119
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.WEEK");
            echo "</i>
                        </span>
                        <span class=\"stat\">
                            <b>";
            // line 122
            echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getMonthlyTotal", array());
            echo "</b>
                            <i>";
            // line 123
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MONTH");
            echo "</i>
                        </span>
                    </div>
                </div>
            </div>
        ";
        }
        // line 129
        echo "    </div>
";
    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        // line 133
        echo "
    ";
        // line 134
        $this->loadTemplate("partials/messages.html.twig", "dashboard.html.twig", 134)->display($context);
        // line 135
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "show_beta_msg", array())) {
            // line 136
            echo "        <div class=\"error alert\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_BETA_MSG");
            echo "</div>
    ";
        }
        // line 138
        echo "    ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
            // line 139
            echo "        <div id=\"latest\">
            <div class=\"button-bar\">
                <a class=\"button\" href=\"";
            // line 141
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
            echo "/pages\"><i class=\"fa fa-fw fa-file-text-o\"></i>";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES");
            echo "</a>
            </div>
            <h1>";
            // line 143
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LATEST_PAGE_UPDATES");
            echo "</h1>
            <table>
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "latestPages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                // line 146
                echo "                <tr><td class=\"double page-title\"><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute($context["latest"], "route", array()), "/");
                echo "\"><i class=\"fa fa-fw fa-file-o\"></i> ";
                echo $this->getAttribute($context["latest"], "title", array());
                echo "</a></td><td class=\"double page-route\">";
                echo $this->getAttribute($context["latest"], "route", array());
                echo "</td><td><b class=\"last-modified\">";
                echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute($context["latest"], "modified", array()));
                echo "</b></td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "            </table>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 148,  341 => 146,  337 => 145,  332 => 143,  325 => 141,  321 => 139,  318 => 138,  312 => 136,  309 => 135,  307 => 134,  304 => 133,  301 => 132,  296 => 129,  287 => 123,  283 => 122,  277 => 119,  273 => 118,  267 => 115,  263 => 114,  231 => 85,  226 => 83,  219 => 79,  215 => 77,  212 => 76,  200 => 71,  192 => 70,  185 => 66,  178 => 64,  160 => 51,  148 => 42,  140 => 37,  136 => 35,  134 => 34,  130 => 32,  127 => 31,  124 => 30,  122 => 29,  119 => 28,  116 => 27,  111 => 25,  105 => 22,  102 => 21,  97 => 19,  84 => 15,  74 => 14,  64 => 13,  54 => 12,  42 => 7,  39 => 6,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*             <div class="button-group">*/
/*                 <button data-clear-cache="{{ base_url_relative }}/cache.json/task{{ config.system.param_sep }}clearCache" class="button"><i class="fa fa-trash"></i> {{ "PLUGIN_ADMIN.CLEAR_CACHE"|tu }}</button>*/
/*                 <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="fa fa-caret-down"></i>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a data-clear-cache="{{ base_url_relative }}/cache.json/task{{ config.system.param_sep }}clearCache/cleartype{{ config.system.param_sep }}all" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"|tu }}</a></li>*/
/*                     <li><a data-clear-cache="{{ base_url_relative }}/cache.json/task{{ config.system.param_sep }}clearCache/cleartype{{ config.system.param_sep }}assets-only" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache="{{ base_url_relative }}/cache.json/task{{ config.system.param_sep }}clearCache/cleartype{{ config.system.param_sep }}images-only" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache="{{ base_url_relative }}/cache.json/task{{ config.system.param_sep }}clearCache/cleartype{{ config.system.param_sep }}cache-only" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"|tu }}</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*         {% endif %}*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-th"></i> {{ "PLUGIN_ADMIN.DASHBOARD"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block messages %}{% endblock %}*/
/* */
/* {% block content_top %}*/
/* */
/*     {% set gpm = admin.gpm() %}*/
/*     {% set updatable = gpm.getUpdatablePlugins() %}*/
/*     {% set backup = admin.lastBackup() %}*/
/* */
/*     <div id="admin-dashboard">*/
/*         {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*             <div id="updates" class="dashboard-item dashboard-left">*/
/*                 <div class="tertiary-accent default-box-shadow">*/
/*                     <h1>{{ "PLUGIN_ADMIN.MAINTENANCE"|tu }}</h1>*/
/*                     <div class="admin-update-charts">*/
/*                         <div class="updates-chart">*/
/*                             <div class="chart-wrapper">*/
/*                                 <div class="ct-chart"></div>*/
/*                                 <span class="numeric hidden"><span>-</span><em>{{ "PLUGIN_ADMIN.UPDATED"|tu|lower }}</em></span>*/
/*                             </div>*/
/*                             <p class="js__updates-available-description">&nbsp;</p>*/
/*                         </div>*/
/*                         <div class="backups-chart">*/
/*                             <div class="chart-wrapper">*/
/*                                 <div class="ct-chart"></div>*/
/*                                 <script>*/
/*                                     var data = {*/
/*                                       series: [{{ backup.chart_fill }}, {{ backup.chart_empty }}]*/
/*                                     };*/
/*                                     var options = {*/
/*                                       donut: true,*/
/*                                       donutWidth: 10,*/
/*                                       startAngle: 0,*/
/*                                       total: 100,*/
/*                                       showLabel: false,*/
/*                                       height: 150,*/
/*                                       chartPadding: !isFirefox ? 5 : 10*/
/*                                     };*/
/*                                     Chartist.Pie('.backups-chart .ct-chart', data, options);*/
/*                                 </script>*/
/*                                 <span class="numeric">{{ backup.days }}<em>{{ "PLUGIN_ADMIN.DAYS"|tu|lower }}</em></span>*/
/*                             </div>*/
/*                             <p>{{ "PLUGIN_ADMIN.LAST_BACKUP"|tu }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="flush-bottom button-bar">*/
/*                         <button data-maintenance-update="{{ base_url_relative }}/update.json/task{{ config.system.param_sep }}update" class="button"><i class="fa fa-cloud-download"></i> {{ "PLUGIN_ADMIN.UPDATE"|tu }}</button>*/
/*                         <button data-ajax="{{ base_url_relative }}/backup.json/task{{ config.system.param_sep }}backup" class="button"><i class="fa fa-database"></i> {{ "PLUGIN_ADMIN.BACKUP"|tu }}</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if authorize(['admin.statistics', 'admin.super']) %}*/
/*             <div id="popularity" class="dashboard-item dashboard-right">*/
/*                 <div class="secondary-accent default-box-shadow">*/
/*                     <h1>{{ "PLUGIN_ADMIN.STATISTICS"|tu }}</h1>*/
/*                     <div class="ct-chart"></div>*/
/*                     <script>*/
/*                         var data = {*/
/*                             labels: {{ popularity.getDailyChartData['labels'] }},*/
/*                             series: [*/
/*                                 {{ popularity.getDailyChartData['data'] }}*/
/*                             ]*/
/*                         };*/
/*                         var options = {*/
/*                             height: 164,*/
/*                             chartPadding: !isFirefox ? 5 : 25,*/
/* */
/*                             axisX: {*/
/*                                 showGrid: false,*/
/*                                 labelOffset: {*/
/*                                     x: 0,*/
/*                                     y: 5*/
/*                                 }*/
/*                             },*/
/*                             axisY: {*/
/*                                 offset: 15,*/
/*                                 showLabel: true,*/
/*                                 showGrid: true,*/
/*                                 labelOffset: {*/
/*                                     x: 5,*/
/*                                     y: 5*/
/*                                 },*/
/*                                 scaleMinSpace: 20*/
/*                             }*/
/*                         };*/
/*                         Chartist.Bar('#popularity .ct-chart', data, options);*/
/*                     </script>*/
/*                     <div class="flush-bottom button-bar stats-bar">*/
/*                         <span class="stat">*/
/*                             <b>{{ popularity.getDailyTotal }}</b>*/
/*                             <i>{{ "PLUGIN_ADMIN.TODAY"|tu }}</i>*/
/*                         </span>*/
/*                         <span class="stat">*/
/*                             <b>{{ popularity.getWeeklyTotal }}</b>*/
/*                             <i>{{ "PLUGIN_ADMIN.WEEK"|tu }}</i>*/
/*                         </span>*/
/*                         <span class="stat">*/
/*                             <b>{{ popularity.getMonthlyTotal }}</b>*/
/*                             <i>{{ "PLUGIN_ADMIN.MONTH"|tu }}</i>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% include 'partials/messages.html.twig' %}*/
/*     {% if config.plugins.admin.show_beta_msg %}*/
/*         <div class="error alert"><i class="fa fa-exclamation-circle"></i> {{ 'PLUGIN_ADMIN.ADMIN_BETA_MSG'|tu }}</div>*/
/*     {% endif %}*/
/*     {% if authorize(['admin.pages', 'admin.super']) %}*/
/*         <div id="latest">*/
/*             <div class="button-bar">*/
/*                 <a class="button" href="{{ uri.route(true) }}/pages"><i class="fa fa-fw fa-file-text-o"></i>{{ "PLUGIN_ADMIN.MANAGE_PAGES"|tu }}</a>*/
/*             </div>*/
/*             <h1>{{ "PLUGIN_ADMIN.LATEST_PAGE_UPDATES"|tu }}</h1>*/
/*             <table>*/
/*             {% for latest in admin.latestPages %}*/
/*                 <tr><td class="double page-title"><a href="{{ base_url }}/pages/{{ latest.route|trim('/') }}"><i class="fa fa-fw fa-file-o"></i> {{ latest.title }}</a></td><td class="double page-route">{{ latest.route }}</td><td><b class="last-modified">{{ latest.modified|nicetime }}</b></td></tr>*/
/*             {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
