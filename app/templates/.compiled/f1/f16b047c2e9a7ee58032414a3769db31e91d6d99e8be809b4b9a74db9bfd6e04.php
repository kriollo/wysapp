<?php

/* adminwys/layout.twig */
class __TwigTemplate_94fe32ba607b0d02bd4705f092e6d9dd526a8be5a520bcdec713321063f66a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'apphead' => array($this, 'block_apphead'),
            'appmenu' => array($this, 'block_appmenu'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <link href=\"assets/adminwys/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
        ";
        // line 11
        echo "        <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "build", array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</title>
        <link rel=\"stylesheet\" href=\"assets/framework/main.min.css\" />
        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/fontawesome-free/css/all.min.css\">
        <!-- IonIcons -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/ionicons/ionicons.min.css\">
        
        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
        <!-- SweetAlert2 -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css\">
        <!-- Toastr -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/toastr/toastr.min.css\">
         <!-- Pace style -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/pace-progress/themes/blue/pace-theme-loading-bar.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"assets/vendor/dist/css/adminlte.min.css\">
        <!-- Alertas -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.css\">
        ";
        // line 30
        $this->displayBlock('appStylos', $context, $blocks);
        // line 32
        echo "
        
    </head>

    <body class=\"hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed accent-primary\">
        <div class=\"wrapper\">
            <div style=\"display: none;\" id=\"cargador\" align=\"center\">
                <br>
                <label style=\"color:#FFF; background-color:#ABB6BA; text-align:center\">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>
    
                <img src=\"assets/img/cargando.gif\" align=\"middle\" alt=\"cargador\"> &nbsp;<label style=\"color:#ABB6BA\">Realizando tarea solicitada ...</label>
    
                <br>
                <hr style=\"color:#003\" width=\"30%\">
                <br>
            </div>
            <!-- Navbar -->
            ";
        // line 49
        $this->displayBlock('apphead', $context, $blocks);
        // line 52
        echo "            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            ";
        // line 55
        $this->displayBlock('appmenu', $context, $blocks);
        // line 58
        echo "
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                ";
        // line 61
        $this->displayBlock('appBody', $context, $blocks);
        // line 63
        echo "            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            ";
        // line 67
        $this->displayBlock('appFooter', $context, $blocks);
        // line 70
        echo "        </div>

       
         ";
        // line 74
        echo "        <!-- // <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>  -->
        <!-- jQuery -->
        <script src=\"assets/vendor/plugins/jquery/jquery.min.js\"></script>
        <!-- Bootstrap -->
        <script src=\"assets/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <!-- AdminLTE -->
        <script src=\"assets/vendor/dist/js/adminlte.js\"></script>

        <!-- Toastr -->
        <script src=\"assets/vendor/plugins/toastr/toastr.min.js\"></script>
        <!-- SweetAlert2 -->
        <script src=\"assets/vendor/plugins/sweetalert2/sweetalert2.min.js\"></script>

        <!-- OPTIONAL SCRIPTS -->
        <!-- // <script src=\"assets/vendor/dist/js/demo.js\"></script> -->
        
        <!-- PACE -->
        <script src=\"assets/vendor/plugins/pace-progress/pace.min.js\"></script>
        <!-- // <script src=\"assets/vendor/plugins/jquery/jquery.min.js\"></script> -->
        <script src=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.js\"></script>

        <!--Moments-->
        <script src=\"assets/vendor/plugins/moment/moment-with-locales.min.js\"></script>
        <!--accounting-->
        <script src=\"assets/vendor/plugins/accounting/accounting.min.js\"></script>
        
        ";
        // line 101
        echo "        <script>
            var width = \$(document).width();
            if(width > 770){
                \$('body').addClass('sidebar-collapse');
            }
            \$(window).resize(function(){
                if(width <= 770){
                    \$('body').removeClass('sidebar-collapse');
                }
            })
    
            \$(document).ajaxStart(function() { Pace.restart(); });

            moment.locale('es-us');
            
            accounting.settings.number.decimal = \",\";
            accounting.settings.number.thousand = \".\";
            
        </script>

        ";
        // line 122
        echo "        ";
        $this->displayBlock('appScript', $context, $blocks);
        // line 124
        echo "    </body>
</html>";
    }

    // line 30
    public function block_appStylos($context, array $blocks = array())
    {
        // line 31
        echo "        ";
    }

    // line 49
    public function block_apphead($context, array $blocks = array())
    {
        // line 50
        echo "                ";
        $this->loadTemplate("adminwys/header", "adminwys/layout.twig", 50)->display($context);
        // line 51
        echo "            ";
    }

    // line 55
    public function block_appmenu($context, array $blocks = array())
    {
        // line 56
        echo "                ";
        $this->loadTemplate("adminwys/menu", "adminwys/layout.twig", 56)->display($context);
        // line 57
        echo "            ";
    }

    // line 61
    public function block_appBody($context, array $blocks = array())
    {
        // line 62
        echo "                ";
    }

    // line 67
    public function block_appFooter($context, array $blocks = array())
    {
        // line 68
        echo "                ";
        $this->loadTemplate("adminwys/footer", "adminwys/layout.twig", 68)->display($context);
        // line 69
        echo "            ";
    }

    // line 122
    public function block_appScript($context, array $blocks = array())
    {
        // line 123
        echo "        ";
    }

    public function getTemplateName()
    {
        return "adminwys/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 123,  214 => 122,  210 => 69,  207 => 68,  204 => 67,  200 => 62,  197 => 61,  193 => 57,  190 => 56,  187 => 55,  183 => 51,  180 => 50,  177 => 49,  173 => 31,  170 => 30,  165 => 124,  162 => 122,  140 => 101,  112 => 74,  107 => 70,  105 => 67,  99 => 63,  97 => 61,  92 => 58,  90 => 55,  85 => 52,  83 => 49,  64 => 32,  62 => 30,  39 => 11,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        {{ base_assets()|raw }}
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

        <link href=\"assets/adminwys/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
        {# Título #}
        <title>{{ config['build']['name'] }}</title>
        <link rel=\"stylesheet\" href=\"assets/framework/main.min.css\" />
        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/fontawesome-free/css/all.min.css\">
        <!-- IonIcons -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/ionicons/ionicons.min.css\">
        
        <!-- Google Font: Source Sans Pro -->
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
        <!-- SweetAlert2 -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css\">
        <!-- Toastr -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/toastr/toastr.min.css\">
         <!-- Pace style -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/pace-progress/themes/blue/pace-theme-loading-bar.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"assets/vendor/dist/css/adminlte.min.css\">
        <!-- Alertas -->
        <link rel=\"stylesheet\" href=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.css\">
        {% block appStylos %}
        {% endblock %}

        
    </head>

    <body class=\"hold-transition sidebar-mini sidebar-collapse layout-navbar-fixed accent-primary\">
        <div class=\"wrapper\">
            <div style=\"display: none;\" id=\"cargador\" align=\"center\">
                <br>
                <label style=\"color:#FFF; background-color:#ABB6BA; text-align:center\">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>
    
                <img src=\"assets/img/cargando.gif\" align=\"middle\" alt=\"cargador\"> &nbsp;<label style=\"color:#ABB6BA\">Realizando tarea solicitada ...</label>
    
                <br>
                <hr style=\"color:#003\" width=\"30%\">
                <br>
            </div>
            <!-- Navbar -->
            {% block apphead %}
                {% include 'adminwys/header' %}
            {% endblock %}
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            {% block appmenu %}
                {% include 'adminwys/menu' %}
            {% endblock %}

            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                {% block appBody %}
                {% endblock %}
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            {% block appFooter %}
                {% include 'adminwys/footer' %}
            {% endblock %}
        </div>

       
         {# Sólamente necesario para facilitar las peticiones AJAX del generador, puede eliminarse #}
        <!-- // <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>  -->
        <!-- jQuery -->
        <script src=\"assets/vendor/plugins/jquery/jquery.min.js\"></script>
        <!-- Bootstrap -->
        <script src=\"assets/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <!-- AdminLTE -->
        <script src=\"assets/vendor/dist/js/adminlte.js\"></script>

        <!-- Toastr -->
        <script src=\"assets/vendor/plugins/toastr/toastr.min.js\"></script>
        <!-- SweetAlert2 -->
        <script src=\"assets/vendor/plugins/sweetalert2/sweetalert2.min.js\"></script>

        <!-- OPTIONAL SCRIPTS -->
        <!-- // <script src=\"assets/vendor/dist/js/demo.js\"></script> -->
        
        <!-- PACE -->
        <script src=\"assets/vendor/plugins/pace-progress/pace.min.js\"></script>
        <!-- // <script src=\"assets/vendor/plugins/jquery/jquery.min.js\"></script> -->
        <script src=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.js\"></script>

        <!--Moments-->
        <script src=\"assets/vendor/plugins/moment/moment-with-locales.min.js\"></script>
        <!--accounting-->
        <script src=\"assets/vendor/plugins/accounting/accounting.min.js\"></script>
        
        {# Formato de Pantalla #}
        <script>
            var width = \$(document).width();
            if(width > 770){
                \$('body').addClass('sidebar-collapse');
            }
            \$(window).resize(function(){
                if(width <= 770){
                    \$('body').removeClass('sidebar-collapse');
                }
            })
    
            \$(document).ajaxStart(function() { Pace.restart(); });

            moment.locale('es-us');
            
            accounting.settings.number.decimal = \",\";
            accounting.settings.number.thousand = \".\";
            
        </script>

        {# Scripts globales #}
        {% block appScript %}
        {% endblock %}
    </body>
</html>", "adminwys/layout.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\adminwys\\layout.twig");
    }
}
