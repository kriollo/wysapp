<?php

/* overall/layout.twig */
class __TwigTemplate_81f64f0e0e4a5a4a2ecad0397a086cbf829b23320fcb70bcaa75d015e7a7263b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        echo "    ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <link href=\"assets/adminwys/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />

    ";
        // line 13
        echo "    ";
        // line 14
        echo "    <link rel=\"stylesheet\" href=\"assets/framework/main.min.css\" />


    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/ionicons/ionicons.min.css\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"assets/vendor/dist/css/adminlte.min.css\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

    <!-- Alertas -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.css\">

    ";
        // line 31
        $this->displayBlock('appHeader', $context, $blocks);
        // line 33
        echo "
    <title>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "build", array()), "name", array()), "html", null, true);
        echo "</title>
</head>
<body class=\"hold-transition login-page\">
    <img alt=\"\" id=\"backgroundimage\" src=\"assets/adminwys/img/bluegreenLights.jpg\">

    ";
        // line 39
        $this->displayBlock('appBody', $context, $blocks);
        // line 41
        echo "
    <div class=\"login-logo\">
        <img class=\"img-responsive\" src=\"assets/adminwys/img/logo.png\" alt=\"Logo\">
    </div>


    <div style=\"display: none;\" id=\"cargador\" align=\"center\">
        <br>
        <label style=\"color:#FFF; background-color:#ABB6BA; text-align:center\">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

        <img src=\"assets/adminwys/img/cargando.gif\" align=\"middle\" alt=\"cargador\"> &nbsp;<label style=\"color:#ABB6BA\">Realizando tarea solicitada ...</label>

        <br>
        <hr style=\"color:#003\" width=\"30%\">
        <br>
    </div>

    ";
        // line 59
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script> 

    <!-- jquery -->
    <!-- // <script src=\"assets/vendor/plugins/jquery/jquery.min.js\"></script> -->
    <script src=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
    
    <!-- Bootstrap 4 -->
    <script src=\"assets/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"assets/vendor/dist/js/adminlte.min.js\"></script>

    ";
        // line 70
        $this->displayBlock('appFooter', $context, $blocks);
        // line 72
        echo "</body>
</html>";
    }

    // line 31
    public function block_appHeader($context, array $blocks = array())
    {
        // line 32
        echo "    ";
    }

    // line 39
    public function block_appBody($context, array $blocks = array())
    {
        // line 40
        echo "    ";
    }

    // line 70
    public function block_appFooter($context, array $blocks = array())
    {
        // line 71
        echo "    ";
    }

    public function getTemplateName()
    {
        return "overall/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 71,  127 => 70,  123 => 40,  120 => 39,  116 => 32,  113 => 31,  108 => 72,  106 => 70,  93 => 59,  74 => 41,  72 => 39,  64 => 34,  61 => 33,  59 => 31,  40 => 14,  38 => 13,  27 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {# Formato #}
    {{ base_assets()|raw }}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <link href=\"assets/adminwys/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />

    {# Estilo definido por defecto para presentar el framework #}
    {# No es necesaria la existencia de este archivo, puede ser borrado #}
    <link rel=\"stylesheet\" href=\"assets/framework/main.min.css\" />


    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/fontawesome-free/css/all.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/ionicons/ionicons.min.css\">
    <!-- icheck bootstrap -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"assets/vendor/dist/css/adminlte.min.css\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

    <!-- Alertas -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.css\">

    {% block appHeader %}
    {% endblock %}

    <title>{{ config.build.name }}</title>
</head>
<body class=\"hold-transition login-page\">
    <img alt=\"\" id=\"backgroundimage\" src=\"assets/adminwys/img/bluegreenLights.jpg\">

    {% block appBody %}
    {% endblock %}

    <div class=\"login-logo\">
        <img class=\"img-responsive\" src=\"assets/adminwys/img/logo.png\" alt=\"Logo\">
    </div>


    <div style=\"display: none;\" id=\"cargador\" align=\"center\">
        <br>
        <label style=\"color:#FFF; background-color:#ABB6BA; text-align:center\">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

        <img src=\"assets/adminwys/img/cargando.gif\" align=\"middle\" alt=\"cargador\"> &nbsp;<label style=\"color:#ABB6BA\">Realizando tarea solicitada ...</label>

        <br>
        <hr style=\"color:#003\" width=\"30%\">
        <br>
    </div>

    {# Sólamente necesario para facilitar las peticiones AJAX del generador, puede eliminarse #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script> 

    <!-- jquery -->
    <!-- // <script src=\"assets/vendor/plugins/jquery/jquery.min.js\"></script> -->
    <script src=\"assets/vendor/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
    
    <!-- Bootstrap 4 -->
    <script src=\"assets/vendor/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"assets/vendor/dist/js/adminlte.min.js\"></script>

    {% block appFooter %}
    {% endblock %}
</body>
</html>", "overall/layout.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\overall\\layout.twig");
    }
}
