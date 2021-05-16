<?php

/* home/forgot.twig */
class __TwigTemplate_cb316105dbe7a88c0d35f92e19aef637e6009a23553738da0eadaef512e145c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "home/forgot.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"login-box\">
    
    <div class=\"card\">
      <div class=\"card-body login-card-body\">
        <div class=\"login-logo\">
          <div class=\"login-logo\">
            <img class=\"img-responsive\" src=\"assets/adminwys/img/AdminWYSLogo.png\" alt=\"Logo\">
          </div>
          <b>Admin</b>WYS
        </div>
  
        <form id=\"lostpass_form\" method=\"POST\" >
          <div class=\"input-group mb-3\">
            <input class=\"form-control\" placeholder=\"Email\" name=\"email\" type=\"email\" autofocus>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <span class=\"fas fa-envelope\"></span>
                </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"recover_pass\">Recuperar Nueva Contraseña</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        
        <div id=\"cargando\"></div>
        <p class=\"mt-3 mb-1\">
          <a href=\"home\">Login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
";
    }

    // line 40
    public function block_appFooter($context, array $blocks = array())
    {
        // line 41
        echo "    <script src=\"assets/adminwys/js/home/home.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "home/forgot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 41,  72 => 40,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'overall/layout' %}
{% block appBody %}
<div class=\"login-box\">
    
    <div class=\"card\">
      <div class=\"card-body login-card-body\">
        <div class=\"login-logo\">
          <div class=\"login-logo\">
            <img class=\"img-responsive\" src=\"assets/adminwys/img/AdminWYSLogo.png\" alt=\"Logo\">
          </div>
          <b>Admin</b>WYS
        </div>
  
        <form id=\"lostpass_form\" method=\"POST\" >
          <div class=\"input-group mb-3\">
            <input class=\"form-control\" placeholder=\"Email\" name=\"email\" type=\"email\" autofocus>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <span class=\"fas fa-envelope\"></span>
                </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"recover_pass\">Recuperar Nueva Contraseña</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        
        <div id=\"cargando\"></div>
        <p class=\"mt-3 mb-1\">
          <a href=\"home\">Login</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
{% endblock %}
{% block appFooter %}
    <script src=\"assets/adminwys/js/home/home.js\"></script>
{% endblock %}", "home/forgot.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\home\\forgot.twig");
    }
}
