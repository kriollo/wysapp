<?php

/* users/master_user.twig */
class __TwigTemplate_faafc133a15ae8cbac8c3f613ef0cd1990ab3687d427dfe240372e6ca43fbb91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminwys/layout", "users/master_user.twig", 1);
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
        echo "    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h3 class=\"m-0 text-dark\">Maestro de Usuarios</h3>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users\">Principal</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users/usuarios\">Listar Usuarios</a></li>
                    <li class=\"breadcrumb-item active\">Maestro de Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"content\">
        <div class=\"container-fluid\">
            ";
        // line 23
        if ((($context["id_user"] ?? null) == "")) {
            // line 24
            echo "            <div class=\"card card-success\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Registrar Usuario</h3>
                </div>
            ";
        } else {
            // line 29
            echo "            <div class=\"card card-info\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Actualizar Usuario</h3>
                </div>
            ";
        }
        // line 34
        echo "            
                <form id=\"register_user_form\"  action=\"\" method=\"POST\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4 offset-md-2\">
                                <input id=\"id_user\" type=\"hidden\" value='";
        // line 39
        echo twig_escape_filter($this->env, ($context["id_user"] ?? null), "html", null, true);
        echo "'>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" required v-bind:value=\"name\" />
                                    ";
        // line 42
        if ((($context["id_user"] ?? null) == "")) {
            // line 43
            echo "                                        <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required v-bind:value=\"email\" />
                                    ";
        } else {
            // line 45
            echo "                                        <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required v-bind:value=\"email\" disabled/>
                                    ";
        }
        // line 47
        echo "
                                </div>
                                ";
        // line 49
        if ((($context["id_user"] ?? null) == "")) {
            // line 50
            echo "                                    <div class=\"form-group\">
                                        <input class=\"form-control\" name=\"pass\"        id=\"pass\"        type=\"password\" placeholder=\"Password\" required autocomplete=\"new-password\"/>
                                        <input class=\"form-control\" name=\"pass_repeat\" id=\"pass_repeat\" type=\"password\" placeholder=\"Repita Password\" required autocomplete=\"new-password\"/>
                                    </div>
                                ";
        }
        // line 55
        echo "                                <div class=\"form-group\">Perfil Asignado
                                    <select name='perfil' id='perfil' class='form-control' v-bind:value=\"perfil\" >
                                        <option v-for=\"option in array_perfiles\" v-bind:value=\"option.value\">
                                            \${ option.text }
                                        </option>                                
                                    </select>
                                </div>
                                <div class=\"form-group\">Pagina de Inicio
                                    <select name='pagina_inicio' id='pagina_inicio' class='form-control' v-bind:value=\"pagina_inicio\" >
                                        <option value='portal'>HOME</option>
                                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["menu_user"] ?? null))) {
                // line 66
                echo "                                            <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                echo "</option>
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                    </select>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"rol\" id=\"rol\" v-bind:checked=\"rol\">
                                    <label class=\"form-check-label\">Usuario Administrador?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!-- /.card-body -->
  
                    <div class=\"card-footer text-center\">
                        ";
        // line 80
        if ((($context["id_user"] ?? null) == "")) {
            // line 81
            echo "                            <button type=\"button\" id=\"register\" class=\"btn btn-default\" @click=\"registeruser\">Registrar</button>
                            <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                        ";
        } else {
            // line 84
            echo "                            <button type=\"button\" id=\"register\" class=\"btn btn-default\" @click=\"updateuser\">Actualizar</button>
                        ";
        }
        // line 86
        echo "                        
                    </div>
                </form>
            </div>
        </div>    
    </div>
";
    }

    // line 93
    public function block_appScript($context, array $blocks = array())
    {
        // line 94
        echo "    <!-- VUE -->
    <script src=\"assets/vendor/vue/vue.js\"></script>
    <script src=\"assets/jscontrollers/users/users.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "users/master_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 94,  170 => 93,  160 => 86,  156 => 84,  151 => 81,  149 => 80,  135 => 68,  123 => 66,  118 => 65,  106 => 55,  99 => 50,  97 => 49,  93 => 47,  89 => 45,  85 => 43,  83 => 42,  77 => 39,  70 => 34,  63 => 29,  56 => 24,  54 => 23,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminwys/layout' %}
{% block appBody %}
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h3 class=\"m-0 text-dark\">Maestro de Usuarios</h3>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users\">Principal</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users/usuarios\">Listar Usuarios</a></li>
                    <li class=\"breadcrumb-item active\">Maestro de Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"content\">
        <div class=\"container-fluid\">
            {% if id_user == \"\" %}
            <div class=\"card card-success\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Registrar Usuario</h3>
                </div>
            {% else %}
            <div class=\"card card-info\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Actualizar Usuario</h3>
                </div>
            {% endif %}
            
                <form id=\"register_user_form\"  action=\"\" method=\"POST\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4 offset-md-2\">
                                <input id=\"id_user\" type=\"hidden\" value='{{ id_user }}'>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" required v-bind:value=\"name\" />
                                    {% if id_user == \"\" %}
                                        <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required v-bind:value=\"email\" />
                                    {% else %}
                                        <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required v-bind:value=\"email\" disabled/>
                                    {% endif %}

                                </div>
                                {% if id_user == \"\" %}
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" name=\"pass\"        id=\"pass\"        type=\"password\" placeholder=\"Password\" required autocomplete=\"new-password\"/>
                                        <input class=\"form-control\" name=\"pass_repeat\" id=\"pass_repeat\" type=\"password\" placeholder=\"Repita Password\" required autocomplete=\"new-password\"/>
                                    </div>
                                {% endif %}
                                <div class=\"form-group\">Perfil Asignado
                                    <select name='perfil' id='perfil' class='form-control' v-bind:value=\"perfil\" >
                                        <option v-for=\"option in array_perfiles\" v-bind:value=\"option.value\">
                                            \${ option.text }
                                        </option>                                
                                    </select>
                                </div>
                                <div class=\"form-group\">Pagina de Inicio
                                    <select name='pagina_inicio' id='pagina_inicio' class='form-control' v-bind:value=\"pagina_inicio\" >
                                        <option value='portal'>HOME</option>
                                        {% for m in menu_user if false != menu_user %}
                                            <option value='{{ m.url }}'>{{ m.url }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"rol\" id=\"rol\" v-bind:checked=\"rol\">
                                    <label class=\"form-check-label\">Usuario Administrador?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!-- /.card-body -->
  
                    <div class=\"card-footer text-center\">
                        {% if id_user == \"\" %}
                            <button type=\"button\" id=\"register\" class=\"btn btn-default\" @click=\"registeruser\">Registrar</button>
                            <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                        {% else %}
                            <button type=\"button\" id=\"register\" class=\"btn btn-default\" @click=\"updateuser\">Actualizar</button>
                        {% endif %}
                        
                    </div>
                </form>
            </div>
        </div>    
    </div>
{% endblock %} 
{% block appScript %}
    <!-- VUE -->
    <script src=\"assets/vendor/vue/vue.js\"></script>
    <script src=\"assets/jscontrollers/users/users.js\"></script>
{% endblock %}", "users/master_user.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\master_user.twig");
    }
}
