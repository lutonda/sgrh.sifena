<?php

/* sifenasifenaBundle:Acesso:login.html.twig */
class __TwigTemplate_ea29fe2af4e2a85de6ee762e89c94563bb6e1bd4278d281710678bfc105d1856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Sifena </title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Custom styles -->
        <style type=\"text/css\">
            .signin-content {
                max-width: 360px;
                margin: 0 auto 20px;
            }
        </style>

        <!-- Le styles -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/lib/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/lib/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/boo-extension.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/boo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/boo-coloring.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/boo-utility.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    </head>

    <body class=\"signin signin-vertical\">
        <div class=\"page-container\">
            <div id=\"header-container\">
                <div id=\"header\">
                    <div class=\"navbar-inverse navbar-fixed-top\">
                        <div class=\"navbar-inner\">
                            <div class=\"container\"> </div>
                        </div>
                    </div>
                    <!-- // navbar -->

                    <div class=\"header-drawer\" style=\"height:3px\"> </div>
                    <!-- // breadcrumbs --> 
                </div>
                <!-- // drawer --> 
            </div>
            <!-- // header-container -->

            <div id=\"main-container\">
                <div id=\"main-content\" class=\"main-content container\">
                    <div class=\"signin-content\">
                        <h1 class=\"welcome text-center\" style=\"line-height: 0.6;\"><span style=\"margin-left: -45px;\">Bem-vindo ao</span><br />
                            Sifena<small>*Sifena*</small></h1>
                        <div class=\"well well-black well-impressed\">
                            <div class=\"tab-content overflow\">
                                <div class=\"tab-pane fade in active\" id=\"login\">
                                    <h3 class=\"no-margin-top\"><i class=\"fontello-icon-user-4\"></i> Informe as credenciais</h3>

                                    ";
        // line 65
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 66
            echo "                                        <span class=\"badge badge-negative\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo " <i class=\"ficon-down-dir f-16\"></i></span>
                                        ";
        }
        // line 68
        echo "                                    <form class=\"form-tied margin-00\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" name=\"login_form\">
                                        <fieldset>
                                            <legend class=\"two\"><span>Acesso</span></legend>
                                            <ul>
                                                <li>
                                                    <input id=\"idLogin\" class=\"input-block-level\" type=\"text\" name=\"_username\" placeholder=\"Nome de utilizador\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                                                </li>
                                                <li>
                                                    <input id=\"idPassword\" class=\"input-block-level\" type=\"password\" name=\"_password\" placeholder=\"Palavra-passe\">
                                                </li>
                                            </ul>
                                            <button type=\"submit\" class=\"btn btn-yellow btn-block btn-large\">ENTRAR</button>
                                            <hr class=\"margin-xm\">
                                            <label class=\"checkbox pull-left\">
                                                <input id=\"remember\" class=\"checkbox\" type=\"checkbox\">
                                                Lembrar-me </label>
                                            <a href=\"#forgot\" class=\"pull-right link\" data-toggle=\"tab\">Esqueceu a password?</a>
                                        </fieldset>
                                    </form>
                                    <!-- // form --> 

                                </div>


                            </div>
                        </div>



                        <div class=\"web-description\">
                            <h5>Copyright &copy; ";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</h5>
                        </div>


                    </div>

                </div>

            </div>

        </div>

        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery.cookie.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery.date.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery.load-image.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap-toggle-button/js/bootstrap-toggle-button.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/lib/jquery.cookie.js"), "html", null, true);
        echo "\"></script> 
        <!-- Plugins Custom - Form -->
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/counter/jquery.counter.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/elastic/jquery.elastic.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/inputmask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/inputmask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/duallistbox/jquery.duallistbox.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Plugins Custom - Gallery --> 
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-gallery/nailthumb/jquery.nailthumb.1.1.min.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-gallery/nailthumb/showLoading/js/jquery.showLoading.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-gallery/wookmark/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-gallery/wookmark/jquery.wookmark.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/pl-form/validate/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script> 




        ";
        // line 141
        $this->displayBlock('javascript', $context, $blocks);
        // line 188
        echo "        <!-- main js --> 
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/core.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/application.js"), "html", null, true);
        echo "\"></script> 



        <script>
                \$(document).ready(function () {

                });

        </script>
    </body>

</html>
";
    }

    // line 141
    public function block_javascript($context, array $blocks = array())
    {
        // line 142
        echo "
            <script type=\"text/javascript\">

                \$('#login_form').validate({
                    ignore: \"\",
                    rules: {
                        _username: {
                            required: true,
                            minlength: 8,
                            maxlength: 20
                        },
                        _password: {
                            required: true,
                            sminlength: 8,
                            maxlength: 20
                        }
                    },
                    messages: {
                        _username: {
                            required: \"Please enter a First Name\",
                            minlength: \"First Name must be at least 4 characters\",
                            maxlength: \"First Name must be no more than 20 characters\"
                        },
                        _password: {
                            required: \"Please enter a Last Name\",
                            minlength: \"Last Name must be at least 4 characters\",
                            maxlength: \"Last Name must be no more than 20 characters\"
                        }
                    },
                    highlight: function (label) {
                        \$(label).closest('.control-group').addClass('error');
                    },
                    success: function (label) {
                        \$(label).text('Ok!').addClass('valid')
                                .closest('.control-group').addClass('success');
                    },
                    errorPlacement: function (error, label) {
                        \$(label).closest('.controls').append(error);
                    }
                });


            </script>


        ";
    }

    public function getTemplateName()
    {
        return "sifenasifenaBundle:Acesso:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 142,  309 => 141,  291 => 190,  287 => 189,  284 => 188,  282 => 141,  274 => 136,  270 => 135,  266 => 134,  262 => 133,  258 => 132,  252 => 129,  248 => 128,  244 => 127,  240 => 126,  236 => 125,  232 => 124,  228 => 123,  223 => 121,  219 => 120,  215 => 119,  210 => 117,  206 => 116,  202 => 115,  198 => 114,  194 => 113,  190 => 112,  186 => 111,  182 => 110,  167 => 98,  139 => 73,  130 => 68,  124 => 66,  122 => 65,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  66 => 27,  62 => 26,  58 => 25,  54 => 24,  50 => 23,  46 => 22,  42 => 21,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Sifena </title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Custom styles -->
        <style type=\"text/css\">
            .signin-content {
                max-width: 360px;
                margin: 0 auto 20px;
            }
        </style>

        <!-- Le styles -->
        <link href=\"{{ asset('assets/css/lib/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/lib/bootstrap-responsive.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/boo-extension.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/boo.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/boo-coloring.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/boo-utility.css') }}\" rel=\"stylesheet\">

        <!-- Le fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"{{ asset('assets/ico/favicon.ico') }}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}\">
    </head>

    <body class=\"signin signin-vertical\">
        <div class=\"page-container\">
            <div id=\"header-container\">
                <div id=\"header\">
                    <div class=\"navbar-inverse navbar-fixed-top\">
                        <div class=\"navbar-inner\">
                            <div class=\"container\"> </div>
                        </div>
                    </div>
                    <!-- // navbar -->

                    <div class=\"header-drawer\" style=\"height:3px\"> </div>
                    <!-- // breadcrumbs --> 
                </div>
                <!-- // drawer --> 
            </div>
            <!-- // header-container -->

            <div id=\"main-container\">
                <div id=\"main-content\" class=\"main-content container\">
                    <div class=\"signin-content\">
                        <h1 class=\"welcome text-center\" style=\"line-height: 0.6;\"><span style=\"margin-left: -45px;\">Bem-vindo ao</span><br />
                            Sifena<small>*Sifena*</small></h1>
                        <div class=\"well well-black well-impressed\">
                            <div class=\"tab-content overflow\">
                                <div class=\"tab-pane fade in active\" id=\"login\">
                                    <h3 class=\"no-margin-top\"><i class=\"fontello-icon-user-4\"></i> Informe as credenciais</h3>

                                    {% if error %}
                                        <span class=\"badge badge-negative\"> {{ error.message }} <i class=\"ficon-down-dir f-16\"></i></span>
                                        {% endif %}
                                    <form class=\"form-tied margin-00\" method=\"post\" action=\"{{ path('login_check') }}\" name=\"login_form\">
                                        <fieldset>
                                            <legend class=\"two\"><span>Acesso</span></legend>
                                            <ul>
                                                <li>
                                                    <input id=\"idLogin\" class=\"input-block-level\" type=\"text\" name=\"_username\" placeholder=\"Nome de utilizador\" value=\"{{ last_username }}\">
                                                </li>
                                                <li>
                                                    <input id=\"idPassword\" class=\"input-block-level\" type=\"password\" name=\"_password\" placeholder=\"Palavra-passe\">
                                                </li>
                                            </ul>
                                            <button type=\"submit\" class=\"btn btn-yellow btn-block btn-large\">ENTRAR</button>
                                            <hr class=\"margin-xm\">
                                            <label class=\"checkbox pull-left\">
                                                <input id=\"remember\" class=\"checkbox\" type=\"checkbox\">
                                                Lembrar-me </label>
                                            <a href=\"#forgot\" class=\"pull-right link\" data-toggle=\"tab\">Esqueceu a password?</a>
                                        </fieldset>
                                    </form>
                                    <!-- // form --> 

                                </div>


                            </div>
                        </div>



                        <div class=\"web-description\">
                            <h5>Copyright &copy; {{ \"now\"|date(\"Y\")}}</h5>
                        </div>


                    </div>

                </div>

            </div>

        </div>

        <script src=\"{{ asset('assets/js/lib/jquery.js') }}\"></script> 
        <script src=\"{{ asset('assets/js/lib/jquery-ui.js') }}\"></script>
        <script src=\"{{ asset('assets/js/lib/jquery.cookie.js') }}\"></script> 
        <script src=\"{{ asset('assets/js/lib/jquery.date.js') }}\"></script> 
        <script src=\"{{ asset('assets/js/lib/jquery.mousewheel.js') }}\"></script> 
        <script src=\"{{ asset('assets/js/lib/jquery.load-image.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/lib/bootstrap/bootstrap.js') }}\"></script> 
        <script src=\"{{ asset('assets/plugins/bootstrap-toggle-button/js/bootstrap-toggle-button.js') }}\"></script>

        <script src=\"{{ asset('assets/js/lib/jquery.js') }}\"></script> 
        <script src=\"{{ asset('assets/js/lib/jquery-ui.js') }}\"></script>
        <script src=\"{{ asset('assets/js/lib/jquery.cookie.js') }}\"></script> 
        <!-- Plugins Custom - Form -->
        <script src=\"{{ asset('assets/plugins/pl-form/uniform/jquery.uniform.min.js') }}\"></script> 
        <script src=\"{{ asset('assets/plugins/pl-form/select2/select2.min.js') }}\"></script>
        <script src=\"{{ asset('assets/plugins/pl-form/counter/jquery.counter.js') }}\"></script> 
        <script src=\"{{ asset('assets/plugins/pl-form/elastic/jquery.elastic.js') }}\"></script> 
        <script src=\"{{ asset('assets/plugins/pl-form/inputmask/jquery.inputmask.js') }}\"></script> 
        <script src=\"{{ asset('assets/plugins/pl-form/inputmask/jquery.inputmask.extensions.js') }}\"></script> 
        <script src=\"{{ asset('assets/plugins/pl-form/duallistbox/jquery.duallistbox.min.js') }}\"></script>

        <!-- Plugins Custom - Gallery --> 
        <script src=\"{{ asset('assets/plugins/pl-gallery/nailthumb/jquery.nailthumb.1.1.min.js') }}\"></script> 
        <script src=\"{{ asset('assets/plugins/pl-gallery/nailthumb/showLoading/js/jquery.showLoading.min.js') }}\"></script>
        <script src=\"{{ asset('assets/plugins/pl-gallery/wookmark/jquery.imagesloaded.js') }}\"></script>
        <script src=\"{{ asset('assets/plugins/pl-gallery/wookmark/jquery.wookmark.min.js') }}\"></script>
        <script src=\"{{ asset('assets/plugins/pl-form/validate/js/jquery.validate.min.js') }}\"></script> 




        {% block javascript %}

            <script type=\"text/javascript\">

                \$('#login_form').validate({
                    ignore: \"\",
                    rules: {
                        _username: {
                            required: true,
                            minlength: 8,
                            maxlength: 20
                        },
                        _password: {
                            required: true,
                            sminlength: 8,
                            maxlength: 20
                        }
                    },
                    messages: {
                        _username: {
                            required: \"Please enter a First Name\",
                            minlength: \"First Name must be at least 4 characters\",
                            maxlength: \"First Name must be no more than 20 characters\"
                        },
                        _password: {
                            required: \"Please enter a Last Name\",
                            minlength: \"Last Name must be at least 4 characters\",
                            maxlength: \"Last Name must be no more than 20 characters\"
                        }
                    },
                    highlight: function (label) {
                        \$(label).closest('.control-group').addClass('error');
                    },
                    success: function (label) {
                        \$(label).text('Ok!').addClass('valid')
                                .closest('.control-group').addClass('success');
                    },
                    errorPlacement: function (error, label) {
                        \$(label).closest('.controls').append(error);
                    }
                });


            </script>


        {% endblock %}
        <!-- main js --> 
        <script src=\"{{ asset('assets/js/core.js') }}\"></script> 
        <script src=\"{{ asset('assets/js/application.js') }}\"></script> 



        <script>
                \$(document).ready(function () {

                });

        </script>
    </body>

</html>
";
    }
}
