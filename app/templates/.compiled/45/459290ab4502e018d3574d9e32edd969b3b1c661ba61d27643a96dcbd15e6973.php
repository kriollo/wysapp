<?php

/* adminwys/portal.twig */
class __TwigTemplate_e6ae86f901b58351b75e2f4635f8a200f03f8cf80d4b335136c96f02bcba7319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminwys/layout", "adminwys/portal.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminwys/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"content\">
        <div class=\"container-fluid\">
            <input type=\"file\" name=\"foto\" id=\"foto\" class=\"SubirFoto\" accept=\"image/*\" capture=\"camera\" onchange=\"updateFotoCamara();\"/>

            <div id=\"dfoto\">
                
            </div>
        </div>
    <!-- /.container-fluid -->
    </div>
";
    }

    // line 14
    public function block_appScript($context, array $blocks = array())
    {
        // line 15
        echo "    <script>
        function updateFotoCamara(){
            var FormD = new FormData();
            
            FormD.append(\"foto\", document.getElementById('foto').files[0]);
            \$(\"#dfoto\").html(\"\");
            \$.ajax({
                type: \"POST\",
                url : 'api/updateFotoCamara',
                contentType:false,
                processData:false,
                data : FormD,
                success : function(json) {
                    if (json.success == 1){
                        \$(document).Toasts('create', {
                            class: 'bg-success', 
                            title: 'Success',
                            subtitle: '',
                            body: json.message,
                            autohide: true,
                            delay: 2000
                        })
                        \$(\"#dfoto\").html(json.html);
                    }else{
                        \$(document).Toasts('create', {
                            class: 'bg-warning', 
                            title: 'Alerta',
                            subtitle: '',
                            body: json.message,
                            autohide: true,
                            delay: 3000
                        })
                    }
                },
                error : function(xhr, status) {
                    \$(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Warning',
                        subtitle: '',
                        body: xhr.responseText,
                        autohide: true,
                        delay: 5000
                    })
                }
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "adminwys/portal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  46 => 14,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminwys/layout' %}
{% block appBody %}
    <div class=\"content\">
        <div class=\"container-fluid\">
            <input type=\"file\" name=\"foto\" id=\"foto\" class=\"SubirFoto\" accept=\"image/*\" capture=\"camera\" onchange=\"updateFotoCamara();\"/>

            <div id=\"dfoto\">
                
            </div>
        </div>
    <!-- /.container-fluid -->
    </div>
{% endblock %}
{% block appScript %}
    <script>
        function updateFotoCamara(){
            var FormD = new FormData();
            
            FormD.append(\"foto\", document.getElementById('foto').files[0]);
            \$(\"#dfoto\").html(\"\");
            \$.ajax({
                type: \"POST\",
                url : 'api/updateFotoCamara',
                contentType:false,
                processData:false,
                data : FormD,
                success : function(json) {
                    if (json.success == 1){
                        \$(document).Toasts('create', {
                            class: 'bg-success', 
                            title: 'Success',
                            subtitle: '',
                            body: json.message,
                            autohide: true,
                            delay: 2000
                        })
                        \$(\"#dfoto\").html(json.html);
                    }else{
                        \$(document).Toasts('create', {
                            class: 'bg-warning', 
                            title: 'Alerta',
                            subtitle: '',
                            body: json.message,
                            autohide: true,
                            delay: 3000
                        })
                    }
                },
                error : function(xhr, status) {
                    \$(document).Toasts('create', {
                        class: 'bg-danger', 
                        title: 'Warning',
                        subtitle: '',
                        body: xhr.responseText,
                        autohide: true,
                        delay: 5000
                    })
                }
            });
        }
    </script>
{% endblock %}", "adminwys/portal.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\adminwys\\portal.twig");
    }
}
