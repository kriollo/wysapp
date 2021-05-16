<?php

/* users/modal_new_perfil.twig */
class __TwigTemplate_6b9743cd44899528ff8f4e652e5e06bc4d0b7012e5f2d1cc9b011aca9f085422 extends Twig_Template
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
<div id=\"modal_new_perfil\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Seleccione Campus</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"new_perfil_form\" class=\"form-signin\" method=\"POST\">
                    <input type=\"text\" name=\"new_perfil\" id=\"new_perfil\" class=\"form-control\" placeholder=\"Ingrese Nombre nuevo perfil\">
                </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn_new_perfil\">Modificar</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "users/modal_new_perfil.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div id=\"modal_new_perfil\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Seleccione Campus</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"new_perfil_form\" class=\"form-signin\" method=\"POST\">
                    <input type=\"text\" name=\"new_perfil\" id=\"new_perfil\" class=\"form-control\" placeholder=\"Ingrese Nombre nuevo perfil\">
                </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn_new_perfil\">Modificar</button>
            </div>
        </div>
    </div>
</div>", "users/modal_new_perfil.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\modal_new_perfil.twig");
    }
}
