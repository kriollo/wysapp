<?php

/* users/modal_reset_pass_user.twig */
class __TwigTemplate_1fb14f3170344e316c8594e976916f550c16088f47100c64bc71eb5e135cac91 extends Twig_Template
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
        echo "
<div id=\"modal_reset_pass_user\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Cambiar Contraseña</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
            <form id=\"reset_pass_user_form\" class=\"form-signin\" method=\"POST\">
                <input type=\"hidden\" id=\"id_user\" name=\"id_user\" class=\"form-control\" value=\"\">
                <input type=\"password\" name=\"pass_new\" class=\"form-control\" placeholder=\"Ingrese Password nueva\" autofocus>
                <input type=\"password\" name=\"repass_new\" class=\"form-control\" placeholder=\"Re-ingrese Password nueva\">
            </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn_reset_pass_user\">Modificar</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "users/modal_reset_pass_user.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div id=\"modal_reset_pass_user\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Cambiar Contraseña</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
            <form id=\"reset_pass_user_form\" class=\"form-signin\" method=\"POST\">
                <input type=\"hidden\" id=\"id_user\" name=\"id_user\" class=\"form-control\" value=\"\">
                <input type=\"password\" name=\"pass_new\" class=\"form-control\" placeholder=\"Ingrese Password nueva\" autofocus>
                <input type=\"password\" name=\"repass_new\" class=\"form-control\" placeholder=\"Re-ingrese Password nueva\">
            </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn_reset_pass_user\">Modificar</button>
            </div>
        </div>
    </div>
</div>", "users/modal_reset_pass_user.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\modal_reset_pass_user.twig");
    }
}
