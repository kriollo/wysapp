<?php

/* users/modal_select_campus_user.twig */
class __TwigTemplate_4e02b8252ec727ae6249209aa6a2e6cd64e2a6febe950701b602f0426ddac83d extends Twig_Template
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
<div id=\"modal_select_campus_user\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Seleccione Campus</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"select_campus_user_form\" method=\"POST\">
                    <input type=\"hidden\" name=\"input_id_user_select_campus_user\" id=\"input_id_user_select_campus_user\">
                    <div class=\"col-md-12\">
                        <label>Seleccione Campus de acceso</label> 
                        <div id=\"carga_select_campus\">
                        
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn_select_campus_user\">Modificar</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "users/modal_select_campus_user.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div id=\"modal_select_campus_user\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Seleccione Campus</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form id=\"select_campus_user_form\" method=\"POST\">
                    <input type=\"hidden\" name=\"input_id_user_select_campus_user\" id=\"input_id_user_select_campus_user\">
                    <div class=\"col-md-12\">
                        <label>Seleccione Campus de acceso</label> 
                        <div id=\"carga_select_campus\">
                        
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class=\"modal-footer justify-content-between\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn_select_campus_user\">Modificar</button>
            </div>
        </div>
    </div>
</div>", "users/modal_select_campus_user.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\modal_select_campus_user.twig");
    }
}
