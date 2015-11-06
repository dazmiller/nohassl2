<?php

/* pages.html.twig */
class __TwigTemplate_c668de8cb566163d93ea24c7f6efba5c8a3fe25ae720094d3d5421cc589e95be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
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
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 7
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 8
            $context["mode"] = "new";
        } elseif (        // line 9
(isset($context["context"]) ? $context["context"] : null)) {
            // line 10
            $context["mode"] = "edit";
            // line 11
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 12
                $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()))));
                // line 13
                $context["exists"] = true;
                // line 14
                $context["title"] = (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()))));
            } else {
                // line 16
                $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 19
            $context["mode"] = "list";
        }
        // line 22
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 24
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 26
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) : ("en"));
        // line 28
        $context["page_lang"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "language", array());
        // line 49
        $context["preview_html"] = ((($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) ? (($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) : ("/"));
        // line 50
        $context["preview_link"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "routable", array())) ? ((("<a class=\"preview\" target=\"_blank\" href=\"" . (isset($context["preview_html"]) ? $context["preview_html"] : null)) . "\"><i class=\"fa fa-fw fa-angle-double-right\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 32
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/pages-all.js")), "method");
        // line 39
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/speakingurl.min.js")), "method");
        // line 40
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/slugify.min.js")), "method");
        // line 41
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 42
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
            // line 43
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
            // line 44
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/dropzone.min.js")), "method");
            // line 45
            echo "    ";
        }
        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 107
    public function block_titlebar($context, array $blocks = array())
    {
        // line 108
        echo "
    <div class=\"button-bar\">
        ";
        // line 110
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 111
            echo "            <a class=\"button\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
            // line 112
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</a>
            ";
            // line 113
            if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                // line 114
                echo "            <a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR");
                echo "</a>
            ";
            }
            // line 116
            echo "
            ";
            // line 117
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array())) {
                // line 118
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 121
                $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), (isset($context["admin_lang"]) ? $context["admin_lang"] : null), array(), "array");
                // line 122
                echo "                        ";
                echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                    // line 129
                    echo "                            ";
                    $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                    // line 130
                    echo "                            ";
                    if (($context["langCode"] != (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        // line 131
                        echo "                                <li><a href=\"";
                        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
                        echo $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array());
                        echo "/pages/task";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                        echo "switchlanguage/lang";
                        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                        echo $context["langCode"];
                        echo "\">";
                        echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                        echo "</a></li>
                            ";
                    }
                    // line 133
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                    </ul>

                </div>
            ";
            }
            // line 138
            echo "
        ";
        } elseif ((        // line 139
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 140
            echo "

            <a class=\"button\" href=\"";
            // line 142
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/pages\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            ";
            // line 143
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 144
                echo "                <a class=\"button\" href=\"";
                echo (isset($context["page_url"]) ? $context["page_url"] : null);
                echo "/task";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "copy\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY");
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 145
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE");
                echo "</a>
                ";
                // line 146
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 147
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo (isset($context["page_url"]) ? $context["page_url"] : null);
                    echo "/task";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo "delete\"><i class=\"fa fa-close\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE");
                    echo "</a>
                ";
                } else {
                    // line 149
                    echo "                    <a class=\"button\" href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
                    echo "/task";
                    echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                    echo "delete\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 151
                echo "            ";
            }
            // line 152
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 154
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
            echo "</button>
                ";
            // line 155
            if (((isset($context["exists"]) ? $context["exists"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()))) {
                // line 156
                echo "                    ";
                if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array())) {
                    // line 157
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 161
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 162
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 163
                        echo "                                ";
                        if (($context["langCode"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 164
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo $context["langCode"];
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS");
                            echo " ";
                            echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                            echo "</button>
                                ";
                        }
                        // line 166
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 167
                    echo "                        </ul>
                    ";
                }
                // line 169
                echo "                ";
            }
            // line 170
            echo "            </div>


        ";
        }
        // line 174
        echo "    </div>
    ";
        // line 175
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 176
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</h1>
    ";
        } elseif ((        // line 177
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 178
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 179
            echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ((($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>")) . (isset($context["preview_link"]) ? $context["preview_link"] : null))) : (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>"))));
            echo "
        </h1>
    ";
        } else {
            // line 182
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES");
            echo "</h1>
    ";
        }
    }

    // line 186
    public function block_content($context, array $blocks = array())
    {
        // line 187
        echo "
    ";
        // line 188
        $context["default_site_lang"] = twig_first($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "config", array()), "system", array()), "languages", array())));
        // line 189
        echo "    <div class=\"admin-block clear\">
    ";
        // line 190
        $this->loadTemplate("partials/messages.html.twig", "pages.html.twig", 190)->display($context);
        // line 191
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 192
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 192)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 193
            echo "    ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 194
            echo "        <div class=\"admin-form-wrapper\" data-media-url=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/media/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo ".json\" data-media-local=\"";
            echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
            echo "/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo "\" data-media-types=\"";
            echo (isset($context["media_types"]) ? $context["media_types"] : null);
            echo "\">
            <div id=\"admin-topbar\">

                ";
            // line 197
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()) && (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                // line 198
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 200
                if ((isset($context["exists"]) ? $context["exists"] : null)) {
                    // line 201
                    echo "                                ";
                    echo (isset($context["page_lang"]) ? $context["page_lang"] : null);
                    echo "
                            ";
                } else {
                    // line 203
                    echo "                                ";
                    echo (isset($context["admin_lang"]) ? $context["admin_lang"] : null);
                    echo "
                            ";
                }
                // line 205
                echo "                        </button>
                        ";
                // line 206
                if (((isset($context["exists"]) ? $context["exists"] : null) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array())) > 1))) {
                    // line 207
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 211
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 212
                        echo "                                    ";
                        if (($context["language"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 213
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo $context["language"];
                            echo "\" redirect=\"";
                            echo trim($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/");
                            echo "\" form=\"blueprints\">";
                            echo $context["language"];
                            echo "</button>
                                    ";
                        }
                        // line 215
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "                            </ul>
                        ";
                }
                // line 218
                echo "                    </div>
                ";
            }
            // line 220
            echo "
                ";
            // line 221
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 222
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 224
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 225
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 226
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 227
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 232
            echo "
            </div>

            ";
            // line 235
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 236
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 236)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 237
                echo "            ";
            } else {
                // line 238
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 238)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 239
                echo "            ";
            }
            // line 240
            echo "        </div>
    ";
        } else {
            // line 242
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-template-types=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))), "html_attr");
            echo "\" placeholder=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS");
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 247
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES");
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 250
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL");
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 251
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL");
            echo "</span>
            </div>
        </form>
        <ul class=\"pages-list depth-0\">
            ";
            // line 255
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => 0, 2 => $context), "method");
            echo "
        </ul>
    ";
        }
        // line 258
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 262
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR");
        echo "</h1>
            <div class=\"error-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button remodal-confirm\" href=\"#\">";
        // line 265
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE");
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 270
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 271
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 272
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 272)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 273
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 276
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 276)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/modular_new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 277
            echo "    </div>
    ";
        }
        // line 279
        echo "
    ";
        // line 280
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 281
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 283
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 283)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 284
            echo "    </div>
    ";
        }
        // line 286
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 289
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
              ";
        // line 291
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 295
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 296
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>


    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>";
        // line 304
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 306
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 310
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 311
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 318
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 320
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 324
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button remodal-confirm\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 325
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>
";
    }

    // line 52
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 54
            echo "    ";
            $context["base_url"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_relative", array(), "array");
            // line 55
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_simple", array(), "array");
            // line 56
            echo "    ";
            $context["admin_route"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_route", array(), "array");
            // line 57
            echo "    ";
            $context["admin_lang"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_lang", array(), "array");
            // line 58
            echo "    ";
            $context["warn"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "warn", array(), "array");
            // line 59
            echo "


    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 63
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? ("Folder &bull; ") : ("Page &bull; ")) . (($this->getAttribute(                // line 64
$context["p"], "modular", array())) ? ("Modular &bull; ") : (""))) . (($this->getAttribute(                // line 65
$context["p"], "routable", array())) ? ("Routable &bull; ") : ("Non-Routable &bull; "))) . (($this->getAttribute(                // line 66
$context["p"], "visible", array())) ? ("Visible &bull; ") : ("Non-Visible &bull; "))) . (($this->getAttribute(                // line 67
$context["p"], "published", array())) ? ("Published &bull; ") : ("Non-Published &bull; ")));
                // line 68
                echo "        ";
                $context["page_route"] = trim($this->getAttribute($context["p"], "rawRoute", array()), "/");
                // line 69
                echo "        ";
                if (($this->getAttribute($context["p"], "language", array()) && ($this->getAttribute($context["p"], "language", array()) != (isset($context["admin_lang"]) ? $context["admin_lang"] : null)))) {
                    // line 70
                    echo "            ";
                    $context["page_url"] = (((((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . "/") . $this->getAttribute($context["p"], "language", array())) . "/") . (isset($context["admin_route"]) ? $context["admin_route"] : null)) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 71
                    echo "        ";
                } else {
                    // line 72
                    echo "            ";
                    $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 75
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <div class=\"row\">
                <span ";
                // line 77
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " data-hint=\"";
                echo trim((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\" class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 78
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <a href=\"";
                // line 80
                echo (isset($context["page_url"]) ? $context["page_url"] : null);
                echo "\" class=\"page-edit\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a>

                ";
                // line 82
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 83
                    echo "                    <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo (($this->getAttribute($context["p"], "language", array())) ? ($this->getAttribute($context["p"], "language", array())) : ((isset($context["default_site_lang"]) ? $context["default_site_lang"] : null)));
                    echo "</span>
                ";
                }
                // line 85
                echo "                <span class=\"page-home\">";
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
                <span class=\"page-tools\">

                    ";
                // line 88
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 89
                    echo "                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo (isset($context["page_url"]) ? $context["page_url"] : null);
                    echo "/task";
                    echo (isset($context["separator"]) ? $context["separator"] : null);
                    echo "delete\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 91
                    echo "                    <a href=\"";
                    echo (isset($context["page_url"]) ? $context["page_url"] : null);
                    echo "/task";
                    echo (isset($context["separator"]) ? $context["separator"] : null);
                    echo "delete\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 93
                echo "                </span>
                <p class=\"page-route\">";
                // line 94
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array())));
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo $this->getAttribute($context["p"], "template", array(), "method");
                echo "</p>
            </div>
            ";
                // line 96
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 97
                    echo "
            <ul class=\"depth-";
                    // line 98
                    echo ((isset($context["depth"]) ? $context["depth"] : null) + 1);
                    echo "\" style=\"display:none;\">
                ";
                    // line 99
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 2 => (isset($context["twig_vars"]) ? $context["twig_vars"] : null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 102
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 102,  840 => 99,  836 => 98,  833 => 97,  831 => 96,  824 => 94,  821 => 93,  813 => 91,  805 => 89,  803 => 88,  796 => 85,  786 => 83,  784 => 82,  777 => 80,  770 => 78,  764 => 77,  759 => 75,  756 => 74,  753 => 73,  750 => 72,  747 => 71,  744 => 70,  741 => 69,  738 => 68,  736 => 67,  735 => 66,  734 => 65,  733 => 64,  731 => 63,  727 => 62,  722 => 59,  719 => 58,  716 => 57,  713 => 56,  710 => 55,  707 => 54,  704 => 53,  690 => 52,  681 => 325,  677 => 324,  670 => 320,  665 => 318,  655 => 311,  651 => 310,  644 => 306,  639 => 304,  628 => 296,  624 => 295,  617 => 291,  612 => 289,  607 => 286,  603 => 284,  601 => 283,  597 => 281,  595 => 280,  592 => 279,  588 => 277,  586 => 276,  581 => 273,  579 => 272,  576 => 271,  574 => 270,  566 => 265,  560 => 262,  554 => 258,  548 => 255,  541 => 251,  537 => 250,  531 => 247,  523 => 244,  519 => 242,  515 => 240,  512 => 239,  509 => 238,  506 => 237,  503 => 236,  501 => 235,  496 => 232,  488 => 227,  476 => 226,  472 => 225,  460 => 224,  456 => 222,  454 => 221,  451 => 220,  447 => 218,  443 => 216,  437 => 215,  427 => 213,  424 => 212,  420 => 211,  414 => 207,  412 => 206,  409 => 205,  403 => 203,  397 => 201,  395 => 200,  391 => 198,  389 => 197,  374 => 194,  371 => 193,  368 => 192,  365 => 191,  363 => 190,  360 => 189,  358 => 188,  355 => 187,  352 => 186,  344 => 182,  338 => 179,  335 => 178,  333 => 177,  328 => 176,  326 => 175,  323 => 174,  317 => 170,  314 => 169,  310 => 167,  304 => 166,  294 => 164,  291 => 163,  288 => 162,  284 => 161,  278 => 157,  275 => 156,  273 => 155,  269 => 154,  265 => 152,  262 => 151,  254 => 149,  244 => 147,  242 => 146,  238 => 145,  229 => 144,  227 => 143,  221 => 142,  217 => 140,  215 => 139,  212 => 138,  206 => 134,  200 => 133,  186 => 131,  183 => 130,  180 => 129,  176 => 128,  166 => 122,  164 => 121,  159 => 118,  157 => 117,  154 => 116,  148 => 114,  146 => 113,  142 => 112,  135 => 111,  133 => 110,  129 => 108,  126 => 107,  119 => 46,  116 => 45,  113 => 44,  110 => 43,  107 => 42,  104 => 41,  101 => 40,  98 => 39,  95 => 38,  92 => 37,  85 => 34,  82 => 33,  79 => 32,  76 => 31,  73 => 30,  69 => 1,  67 => 50,  65 => 49,  63 => 28,  61 => 26,  59 => 24,  57 => 22,  54 => 19,  50 => 16,  47 => 14,  45 => 13,  43 => 12,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  33 => 7,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set context = admin.page(true) %}*/
/* {% endif %}*/
/* */
/* {% if uri.param('new') %}*/
/*     {% set mode = 'new' %}*/
/* {%  elseif context %}*/
/*     {% set mode = 'edit' %}*/
/*     {% if context.exists %}*/
/*         {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}*/
/*         {% set exists = true %}*/
/*         {% set title = (context.exists ? "PLUGIN_ADMIN.EDIT"|tu : "PLUGIN_ADMIN.CREATE"|tu ) ~ " " ~ (context.header.title ?: context.title) %}*/
/*     {% else %}*/
/*         {% set title = "PLUGIN_ADMIN.ADD_PAGE"|tu %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set mode = 'list' %}*/
/* {% endif %}*/
/* */
/* {% set modular = context.modular ? 'modular_' : '' %}*/
/* */
/* {% set warn = config.plugins.admin.warnings.delete_page %}*/
/* */
/* {% set admin_lang = admin.session.admin_lang ?: 'en' %}*/
/* */
/* {% set page_lang = context.language %}*/
/* */
/* {% block stylesheets %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/pages-all.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/speakingurl.min.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/slugify.min.js') %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/dropzone.min.js') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}*/
/* {% set preview_link = context.routable ? '<a class="preview" target="_blank" href="' ~ preview_html ~ '"><i class="fa fa-fw fa-angle-double-right"></i></a>' : '' %}*/
/* */
/* {% macro loop(page, depth, twig_vars) %}*/
/*     {% set separator = twig_vars['config'].system.param_sep %}*/
/*     {% set base_url = twig_vars['base_url_relative'] %}*/
/*     {% set base_url_simple = twig_vars['base_url_simple'] %}*/
/*     {% set admin_route = twig_vars['admin_route'] %}*/
/*     {% set admin_lang = twig_vars['admin_lang'] %}*/
/*     {% set warn = twig_vars['warn'] %}*/
/* */
/* */
/* */
/*     {% for p in page.children() %}*/
/*         {% set description = (not p.page ? 'Folder &bull; ' : 'Page &bull; ') ~*/
/*                              (p.modular ? 'Modular &bull; ' : '') ~*/
/*                              (p.routable ? 'Routable &bull; ' : 'Non-Routable &bull; ') ~*/
/*                              (p.visible ? 'Visible &bull; ' : 'Non-Visible &bull; ') ~*/
/*                              (p.published ? 'Published &bull; ' : 'Non-Published &bull; ') %}*/
/*         {% set page_route =  p.rawRoute|trim('/') %}*/
/*         {% if p.language and p.language != admin_lang %}*/
/*             {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}*/
/*         {% else %}*/
/*             {% set page_url = base_url ~ '/pages/' ~ page_route  %}*/
/*         {% endif %}*/
/* */
/*         <li class="page-item" data-nav-id="{{ p.route }}">*/
/*             <div class="row">*/
/*                 <span {{ p.children(0).count > 0 ? 'data-toggle="children"' : ''}} data-hint="{{ description|trim(' &bull; ') }}" class="hint--bottom">*/
/*                 <i class="page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}"></i>*/
/*                 </span>*/
/*                 <a href="{{ page_url }}" class="page-edit">{{ p.title }}</a>*/
/* */
/*                 {% if p.language %}*/
/*                     <span class="badge lang {% if p.language == admin_lang %}info{% endif %}">{{p.language ?: default_site_lang}}</span>*/
/*                 {% endif %}*/
/*                 <span class="page-home">{{ p.home ? '<i class="fa fa-home"></i>' }}</span>*/
/*                 <span class="page-tools">*/
/* */
/*                     {% if warn %}*/
/*                     <a href="#delete" data-remodal-target="delete" data-delete-url="{{ page_url }}/task{{ separator }}delete" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% else %}*/
/*                     <a href="{{ page_url }}/task{{ separator }}delete" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% endif %}*/
/*                 </span>*/
/*                 <p class="page-route">{{ p.header.routes.default ?: p.route }} <span class="spacer"><i class="fa fa-long-arrow-right"></i></span> {{ p.template() }}</p>*/
/*             </div>*/
/*             {% if p.children().count > 0 %}*/
/* */
/*             <ul class="depth-{{ depth + 1 }}" style="display:none;">*/
/*                 {{ _self.loop(p, depth + 1, twig_vars) }}*/
/*             </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* */
/* {% block titlebar %}*/
/* */
/*     <div class="button-bar">*/
/*         {% if mode == 'list' %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="#modal" data-remodal-target="modal"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</a>*/
/*             {% if admin.modularTypes is not empty %}*/
/*             <a class="button" href="#modular" data-remodal-target="modular"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_MODULAR"|tu }}</a>*/
/*             {% endif %}*/
/* */
/*             {% if admin.multilang %}*/
/*                 <div class="button-group">*/
/*                     <button type="button" class="button disabled">*/
/*                         <i class="fa fa-flag-o"></i>*/
/*                         {% set langName = admin.siteLanguages[admin_lang] %}*/
/*                         {{ langName[:1]|upper ~ langName[1:] }}*/
/*                     </button>*/
/*                     <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="fa fa-caret-down"></i>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu language-switcher">*/
/*                         {% for langCode in admin.languages_enabled %}*/
/*                             {% set langName = admin.siteLanguages[langCode] %}*/
/*                             {% if langCode != admin_lang %}*/
/*                                 <li><a href="{{ base_url_relative }}{{ theme.slug }}/pages/task{{ config.system.param_sep }}switchlanguage/lang{{ config.system.param_sep }}{{langCode}}">{{ langName[:1]|upper ~ langName[1:] }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         {% elseif mode == 'edit' %}*/
/* */
/* */
/*             <a class="button" href="{{ base_url }}/pages"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             {% if exists %}*/
/*                 <a class="button" href="{{ page_url }}/task{{ config.system.param_sep }}copy" class="page-copy" ><i class="fa fa-copy"></i> {{ "PLUGIN_ADMIN.COPY"|tu }}</a>*/
/*                 <a class="button" href="#" data-remodal-target="move"><i class="fa fa-arrows"></i> {{ "PLUGIN_ADMIN.MOVE"|tu }}</a>*/
/*                 {% if warn %}*/
/*                     <a class="button" href="#delete" data-remodal-target="delete" data-delete-url="{{ page_url }}/task{{ config.system.param_sep }}delete"><i class="fa fa-close"></i> {{ "PLUGIN_ADMIN.DELETE"|tu }}</a>*/
/*                 {% else %}*/
/*                     <a class="button" href="{{ uri.route(true) }}/task{{ config.system.param_sep }}delete" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="button-group">*/
/*                 <button class="button" name="task" value="save" form="blueprints" type="submit"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*                 {% if exists and admin.multilang %}*/
/*                     {% if context.untranslatedLanguages %}*/
/*                         <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-caret-down"></i>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu lang-switcher">*/
/*                             {% for langCode in context.untranslatedLanguages %}*/
/*                                 {% set langName = admin.siteLanguages[langCode] %}*/
/*                                 {% if langCode != page_lang %}*/
/*                                     <li><button class="button task" name="task" value="saveas" lang="{{langCode}}" form="blueprints" type="submit">{{ "PLUGIN_ADMIN.SAVE_AS"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/* */
/*         {% endif %}*/
/*     </div>*/
/*     {% if mode == 'new' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</h1>*/
/*     {% elseif mode == 'edit' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i>*/
/*             {{ context.exists ? "PLUGIN_ADMIN.EDIT"|tu ~ " <i>#{context.menu}</i>" ~ preview_link : "PLUGIN_ADMIN.CREATE"|tu ~ " <i>#{context.menu}</i>" }}*/
/*         </h1>*/
/*     {% else %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.MANAGE_PAGES"|tu }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set default_site_lang = grav.config.system.languages|first|first %}*/
/*     <div class="admin-block clear">*/
/*     {% include 'partials/messages.html.twig' %}*/
/*     {% if mode == 'new' %}*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}*/
/*     {% elseif mode == 'edit' %}*/
/*         <div class="admin-form-wrapper" data-media-url="{{ base_url }}/media/{{ admin.route|trim('/') }}.json" data-media-local="{{ base_url_relative_frontend }}/{{ admin.route|trim('/') }}" data-media-types="{{ media_types }}">*/
/*             <div id="admin-topbar">*/
/* */
/*                 {% if admin.multilang and page_lang %}*/
/*                     <div id="admin-lang-toggle" class="button-group">*/
/*                         <button type="button" class="button disabled">*/
/*                             {% if exists %}*/
/*                                 {{ page_lang }}*/
/*                             {% else %}*/
/*                                 {{ admin_lang }}*/
/*                             {% endif %}*/
/*                         </button>*/
/*                         {% if exists and context.translatedLanguages|length > 1 %}*/
/*                             <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="fa fa-caret-down"></i>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu language-switcher">*/
/*                                 {% for language, route in context.translatedLanguages %}*/
/*                                     {% if language != page_lang %}*/
/*                                     <li><button class="task" name="task" value="switchlanguage" lang="{{language}}" redirect="{{context.rawRoute|trim('/')}}" form="blueprints">{{ language }}</button>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if context.blueprints.fields %}*/
/*                 <form id="admin-mode-toggle">*/
/*                     <div class="switch-toggle switch-grav">*/
/*                         <input type="radio" value="normal" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal" id="normal" name="mode-switch" class="highlight" {% if admin.session.expert == '0' %} checked="checked"{% endif %}>*/
/*                         <label for="normal">{{ "PLUGIN_ADMIN.NORMAL"|tu }}</label>*/
/*                         <input type="radio" value="expert" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert" id="expert" name="mode-switch" class="highlight" {% if admin.session.expert == '1' %} checked="checked"{% endif %}>*/
/*                         <label for="expert">{{ "PLUGIN_ADMIN.EXPERT"|tu }}</label>*/
/*                         <a></a>*/
/*                     </div>*/
/*                 </form>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {% if context.blueprints.fields and admin.session.expert == '0' %}*/
/*                 {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}*/
/*             {% else %}*/
/*                 {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('pages/'~modular~'raw'), data: context } %}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% else %}*/
/*         <form id="page-filtering">*/
/*             <div class="page-filters">*/
/*                 <input type="text" data-template-types="{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}" placeholder="{{ "PLUGIN_ADMIN.ADD_FILTERS"|tu }}" class="page-filter" name="page-filter" />*/
/*             </div>*/
/*             <div class="page-search">*/
/*                 <input type="text" placeholder="{{ "PLUGIN_ADMIN.SEARCH_PAGES"|tu }}" name="page-search" />*/
/*             </div>*/
/*             <div class="page-shortcuts">*/
/*                 <span class="button button-x-small" data-page-toggleall="expand"><i class="fa fa-fw fa-plus-circle"></i> {{ "PLUGIN_ADMIN.EXPAND_ALL"|tu }}</span>*/
/*                 <span class="button button-x-small" data-page-toggleall="collapse"><i class="fa fa-fw fa-minus-circle"></i> {{ "PLUGIN_ADMIN.COLLAPSE_ALL"|tu }}</span>*/
/*             </div>*/
/*         </form>*/
/*         <ul class="pages-list depth-0">*/
/*             {{ _self.loop(pages, 0, _context) }}*/
/*         </ul>*/
/*     {% endif %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="generic" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.ERROR"|tu }}</h1>*/
/*             <div class="error-content"></div>*/
/*             <div class="button-bar">*/
/*                 <a class="button remodal-confirm" href="#">{{ "PLUGIN_ADMIN.CLOSE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     {% if mode == 'list' %}*/
/*     <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/new'), data: context } %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="modular" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/modular_new'), data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if mode == 'edit' %}*/
/*     <div class="remodal" data-remodal-id="move" data-remodal-options="hashTracking: false">*/
/* */
/*         {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('pages/move'), data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="remodal" data-remodal-id="delete" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*               {{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-delete-action href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="remodal" data-remodal-id="changes">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary" data-leave-action="cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-leave-action="continue" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="delete-media" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button remodal-confirm" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
