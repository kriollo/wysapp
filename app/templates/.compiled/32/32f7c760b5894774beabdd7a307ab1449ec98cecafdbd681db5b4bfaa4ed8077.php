<?php

/* home/home.twig */
class __TwigTemplate_50566a07cde1558d91f122a4c2cc7581534b3862731935f7b66fa166d23006d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "home/home.twig", 1);
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
        echo "    <div class=\"login-box\">
        
        <!-- /.login-logo -->
        <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <!-- <p class=\"login-box-msg\">Sign in to start your session</p> -->
            <div class=\"login-logo\">
                
                <div class=\"login-logo\">
                    <img class=\"img-responsive\" src=\"assets/adminwys/img/AdminWYSLogo.png\" alt=\"Logo\">
                </div>
                <b>Admin</b>WYS
            </div>
            
            <form id=\"login_form\" method=\"POST\">
                <div class=\"input-group mb-3\">
                    <input class=\"form-control\" placeholder=\"Email\" name=\"email\" autofocus>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"pass\">
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-8\">
                        <div class=\"icheck-primary\">
                            <input type=\"checkbox\" id=\"remember\">
                            <label for=\"remember\">
                            Recuerdame
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-4\">
                        <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"login\">Iniciar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class=\"mb-1\">
                <a href=\"home/forgot\">Olvidé mi contraseña</a>
            </p>
        </div>
        <!-- /.login-card-body -->
        </div>
    </div>
";
    }

    // line 58
    public function block_appFooter($context, array $blocks = array())
    {
        // line 59
        echo "    <script src=\"assets/adminwys/js/home/home.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 59,  90 => 58,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'overall/layout' %}
{% block appBody %}
    <div class=\"login-box\">
        
        <!-- /.login-logo -->
        <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <!-- <p class=\"login-box-msg\">Sign in to start your session</p> -->
            <div class=\"login-logo\">
                
                <div class=\"login-logo\">
                    <img class=\"img-responsive\" src=\"assets/adminwys/img/AdminWYSLogo.png\" alt=\"Logo\">
                </div>
                <b>Admin</b>WYS
            </div>
            
            <form id=\"login_form\" method=\"POST\">
                <div class=\"input-group mb-3\">
                    <input class=\"form-control\" placeholder=\"Email\" name=\"email\" autofocus>
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-envelope\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"input-group mb-3\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"pass\">
                    <div class=\"input-group-append\">
                        <div class=\"input-group-text\">
                            <span class=\"fas fa-lock\"></span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-8\">
                        <div class=\"icheck-primary\">
                            <input type=\"checkbox\" id=\"remember\">
                            <label for=\"remember\">
                            Recuerdame
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-4\">
                        <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"login\">Iniciar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class=\"mb-1\">
                <a href=\"home/forgot\">Olvidé mi contraseña</a>
            </p>
        </div>
        <!-- /.login-card-body -->
        </div>
    </div>
{% endblock %}
{% block appFooter %}
    <script src=\"assets/adminwys/js/home/home.js\"></script>
{% endblock %}", "home/home.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\home\\home.twig");
    }
}
