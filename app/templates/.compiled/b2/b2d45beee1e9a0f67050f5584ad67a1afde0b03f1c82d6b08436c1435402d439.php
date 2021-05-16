<?php

/* users/gest_perfiles.twig */
class __TwigTemplate_12bc7d3583b19a05dd160f8be79cd87f1a1f5d5208525bbbf0a8388092d446da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminwys/layout", "users/gest_perfiles.twig", 1);
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
                    <h3 class=\"m-0 text-dark\">Gestión de Perfiles</h3>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"portal\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users\">Principal</a></li>
                    <li class=\"breadcrumb-item active\">Gestión de Perfiles</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card \">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"></h3>
                    <label>
                        <select name='select_perfil' id='select_perfil' onchange='mostar_datos_perfil();'>
                            <option>--</option>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 31
                echo "                                <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "</option>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </select>
                    </label>
                    <label>
                        <input type='button' name='Submit' value='Consultar' id='submit' class=\"btn btn-sm btn-success\" onclick=\"mostar_datos_perfil(); return false\"/>
                    </label>
                    <label>
                        <input type='button' name='nuevoperfil' value='Nuevo perfil' id='nuevoperfil' class=\"btn btn-sm btn-success\" data-toggle=\"modal\" data-target=\"#modal_new_perfil\">
                    </label>
                    <label>
                        <input type='button' name='deleteperfil' value='Elimina perfil' id='deleteperfil' class=\"btn btn-sm btn-success\">
                    </label>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-4 offset-md-4\">
                        <form id=\"form_gest_perfil\" name=\"form_gest_perfil\" role=\"form\" method=\"POST\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"perfil\" id=\"perfil\">
                            <button type=\"button\" id='update_get_perfil' class=\"btn btn-sm btn-success\"><i class=\"glyphicon glyphicon-refresh\"></i> Actualizar datos</button>
                            <p>
                            ";
        // line 51
        $context["id"] = 0;
        // line 52
        echo "                            ";
        $context["cont"] = 0;
        // line 53
        echo "                            <ul class=\"nav nav-pills nav-sidebar flex-column\">
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_all_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_all_menu"] ?? null))) {
                // line 55
                echo "                
                                    ";
                // line 56
                if ((($context["id"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                    // line 57
                    echo "                                        ";
                    if ((($context["cont"] ?? null) >= 1)) {
                        // line 58
                        echo "                                        </ul>
                                    </li>
                                        ";
                    }
                    // line 61
                    echo "                                    
                                    <li class=\"nav-item has-treeview\">
                                        <i class='";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "glyphicon", array()), "html", null, true);
                    echo " nav-icon'></i>
                                            <label>
                                                <span>
                                                    ";
                    // line 66
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                    echo "
                                                </span>
                                            </label>
                                        <ul>
                                    ";
                }
                // line 71
                echo "                                    <li class=\"nav-item\">
                                        <div class=\"form-check\">
                                            ";
                // line 73
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descripcion", array()) != "")) {
                    // line 74
                    echo "                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input class=\"form-check-input\" name=\"";
                    // line 75
                    echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                    echo "\" type=\"checkbox\" id=\"";
                    echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                    echo "\">
                                                <label class=\"form-check-label\">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descripcion", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                    echo "</label>
                                            ";
                }
                // line 78
                echo "                                        </div>
                                    </li>
                    
                                    ";
                // line 81
                $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array());
                // line 82
                echo "                                    ";
                $context["cont"] = (($context["cont"] ?? null) + 1);
                // line 83
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </ul>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    <!-- /.container-fluid -->
    </div>

    ";
        // line 93
        $this->loadTemplate("users/modal_new_perfil", "users/gest_perfiles.twig", 93)->display($context);
    }

    // line 95
    public function block_appScript($context, array $blocks = array())
    {
        // line 96
        echo "    <script src=\"assets/jscontrollers/users/gest_perfiles.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "users/gest_perfiles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 96,  194 => 95,  190 => 93,  179 => 84,  172 => 83,  169 => 82,  167 => 81,  162 => 78,  157 => 76,  151 => 75,  148 => 74,  146 => 73,  142 => 71,  134 => 66,  128 => 63,  124 => 61,  119 => 58,  116 => 57,  114 => 56,  111 => 55,  106 => 54,  103 => 53,  100 => 52,  98 => 51,  78 => 33,  66 => 31,  61 => 30,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminwys/layout' %}
{% block appBody %}
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h3 class=\"m-0 text-dark\">Gestión de Perfiles</h3>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"portal\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users\">Principal</a></li>
                    <li class=\"breadcrumb-item active\">Gestión de Perfiles</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card \">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"></h3>
                    <label>
                        <select name='select_perfil' id='select_perfil' onchange='mostar_datos_perfil();'>
                            <option>--</option>
                            {% for p in db_perfiles if false != db_perfiles %}
                                <option value='{{ p.nombre }}'>{{ p.nombre }}</option>
                            {% endfor %}
                        </select>
                    </label>
                    <label>
                        <input type='button' name='Submit' value='Consultar' id='submit' class=\"btn btn-sm btn-success\" onclick=\"mostar_datos_perfil(); return false\"/>
                    </label>
                    <label>
                        <input type='button' name='nuevoperfil' value='Nuevo perfil' id='nuevoperfil' class=\"btn btn-sm btn-success\" data-toggle=\"modal\" data-target=\"#modal_new_perfil\">
                    </label>
                    <label>
                        <input type='button' name='deleteperfil' value='Elimina perfil' id='deleteperfil' class=\"btn btn-sm btn-success\">
                    </label>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-4 offset-md-4\">
                        <form id=\"form_gest_perfil\" name=\"form_gest_perfil\" role=\"form\" method=\"POST\" enctype=\"multipart/form-data\">
                            <input type=\"hidden\" name=\"perfil\" id=\"perfil\">
                            <button type=\"button\" id='update_get_perfil' class=\"btn btn-sm btn-success\"><i class=\"glyphicon glyphicon-refresh\"></i> Actualizar datos</button>
                            <p>
                            {% set id = 0 %}
                            {% set cont = 0 %}
                            <ul class=\"nav nav-pills nav-sidebar flex-column\">
                                {% for m in db_all_menu if false != db_all_menu %}
                
                                    {% if id != m.id_menu %}
                                        {% if cont >= 1 %}
                                        </ul>
                                    </li>
                                        {% endif %}
                                    
                                    <li class=\"nav-item has-treeview\">
                                        <i class='{{ m.glyphicon }} nav-icon'></i>
                                            <label>
                                                <span>
                                                    {{ m.menu|raw|convert_encoding('UTF-8', 'ISO-8859-1')|upper }}
                                                </span>
                                            </label>
                                        <ul>
                                    {% endif %}
                                    <li class=\"nav-item\">
                                        <div class=\"form-check\">
                                            {% if m.descripcion != \"\"  %}
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input class=\"form-check-input\" name=\"{{ '%s%s%s%s%s'|format('check','-',m.id_menu,'-',m.id_submenu) }}\" type=\"checkbox\" id=\"{{ '%s%s%s%s%s'|format('check','-',m.id_menu,'-',m.id_submenu) }}\">
                                                <label class=\"form-check-label\">{{ m.descripcion|raw|convert_encoding('UTF-8', 'ISO-8859-1')|upper }}</label>
                                            {% endif %}
                                        </div>
                                    </li>
                    
                                    {% set id = m.id_menu %}
                                    {% set cont =  cont + 1 %}
                                {% endfor %}
                            </ul>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    <!-- /.container-fluid -->
    </div>

    {% include 'users/modal_new_perfil' %}
{% endblock %}
{% block appScript %}
    <script src=\"assets/jscontrollers/users/gest_perfiles.js\"></script>
{% endblock %}", "users/gest_perfiles.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\gest_perfiles.twig");
    }
}
