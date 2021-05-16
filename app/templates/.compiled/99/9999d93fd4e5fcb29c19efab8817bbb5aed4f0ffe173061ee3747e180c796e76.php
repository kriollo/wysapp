<?php

/* users/update_perfil_user.twig */
class __TwigTemplate_48162455ae231103d9144ea5dab6a65d639d41e516d227da1b17c4877eb78559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminwys/layout", "users/update_perfil_user.twig", 1);
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
                    <h3 class=\"m-0 text-dark\">Editar perfil de Usuario</h3>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users\">Principal</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users/usuarios\">Listar Usuarios</a></li>
                    <li class=\"breadcrumb-item active\">Editar perfil de Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card card-success\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"></h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-4 offset-md-4\">
                        <form id=\"form_user_perfil\" name=\"form_user_perfil\" role=\"form\" method=\"POST\" enctype=\"multipart/form-data\">
                            
                            <button type=\"button\" id='update_perfil_user' class=\"btn btn-sm btn-success\"><i class=\"glyphicon glyphicon-refresh\"></i> Actualizar datos</button>
                            <p>
                            <input type='hidden' name='id_user' id='id_user' value='";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_users"] ?? null), "id_user", array()), "html", null, true);
        echo "'>
                            ";
        // line 36
        $context["id"] = 0;
        // line 37
        echo "                            ";
        $context["cont"] = 0;
        // line 38
        echo "                            <ul class=\"nav nav-pills nav-sidebar flex-column\">
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_all_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_all_menu"] ?? null))) {
                // line 40
                echo "                
                                    ";
                // line 41
                if ((($context["id"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                    // line 42
                    echo "                                        ";
                    if ((($context["cont"] ?? null) >= 1)) {
                        // line 43
                        echo "                                        </ul>
                                    </li>
                                        ";
                    }
                    // line 46
                    echo "                                    
                                    <li class=\"nav-item has-treeview\">
                                        <i class='";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "glyphicon", array()), "html", null, true);
                    echo " nav-icon'></i>
                                            <label>
                                                <span>
                                                    ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                    echo "
                                                </span>
                                            </label>
                                        <ul>
                                    ";
                }
                // line 56
                echo "                                    <li class=\"nav-item\">
                                        <div class=\"form-check\">
                                            ";
                // line 58
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descripcion", array()) != "")) {
                    // line 59
                    echo "                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                ";
                    // line 60
                    $context["flat"] = 0;
                    // line 61
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["db_menu_user"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["mu"]) {
                        if ((false != ($context["db_menu_user"] ?? null))) {
                            // line 62
                            echo "                                                ";
                            if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["mu"], "id_menu", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["mu"], "id_submenu", array())))) {
                                // line 63
                                echo "                                                    ";
                                $context["flat"] = 1;
                                // line 64
                                echo "                                                    <input class=\"form-check-input\" name=\"";
                                echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                                echo "\" type=\"checkbox\" id=\"";
                                echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                                echo "\" checked='checked'>
                                                ";
                            }
                            // line 66
                            echo "                                                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "                                                ";
                    if ((($context["flat"] ?? null) == 0)) {
                        // line 68
                        echo "                                                    <input class=\"form-check-input\" name=\"";
                        echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                        echo "\" type=\"checkbox\" id=\"";
                        echo twig_escape_filter($this->env, sprintf("%s%s%s%s%s", "check", "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()), "-", twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())), "html", null, true);
                        echo "\">
                                                ";
                    }
                    // line 70
                    echo "                                                <label class=\"form-check-label\">";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descripcion", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                    echo "</label>
                                            ";
                }
                // line 72
                echo "                                        </div>
                                    </li>
                    
                                    ";
                // line 75
                $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array());
                // line 76
                echo "                                    ";
                $context["cont"] = (($context["cont"] ?? null) + 1);
                // line 77
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </ul>
                        </form>
                    </div>
                </div>
            </div>           
        </div>
    </div>
";
    }

    // line 86
    public function block_appScript($context, array $blocks = array())
    {
        // line 87
        echo "    <!-- VUE -->
    <script src=\"assets/vendor/vue/vue.js\"></script>
    <script src=\"assets/jscontrollers/users/update_perfil_user.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "users/update_perfil_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 87,  197 => 86,  186 => 78,  179 => 77,  176 => 76,  174 => 75,  169 => 72,  163 => 70,  155 => 68,  152 => 67,  145 => 66,  137 => 64,  134 => 63,  131 => 62,  125 => 61,  123 => 60,  120 => 59,  118 => 58,  114 => 56,  106 => 51,  100 => 48,  96 => 46,  91 => 43,  88 => 42,  86 => 41,  83 => 40,  78 => 39,  75 => 38,  72 => 37,  70 => 36,  66 => 35,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminwys/layout' %}
{% block appBody %}
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h3 class=\"m-0 text-dark\">Editar perfil de Usuario</h3>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users\">Principal</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"users/usuarios\">Listar Usuarios</a></li>
                    <li class=\"breadcrumb-item active\">Editar perfil de Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"card card-success\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"></h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"col-md-4 offset-md-4\">
                        <form id=\"form_user_perfil\" name=\"form_user_perfil\" role=\"form\" method=\"POST\" enctype=\"multipart/form-data\">
                            
                            <button type=\"button\" id='update_perfil_user' class=\"btn btn-sm btn-success\"><i class=\"glyphicon glyphicon-refresh\"></i> Actualizar datos</button>
                            <p>
                            <input type='hidden' name='id_user' id='id_user' value='{{ db_users.id_user }}'>
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
                                                {% set flat = 0 %}
                                                {% for mu in db_menu_user if false != db_menu_user %}
                                                {% if m.id_menu == mu.id_menu and m.id_submenu == mu.id_submenu %}
                                                    {% set flat = 1 %}
                                                    <input class=\"form-check-input\" name=\"{{ '%s%s%s%s%s'|format('check','-',m.id_menu,'-',m.id_submenu) }}\" type=\"checkbox\" id=\"{{ '%s%s%s%s%s'|format('check','-',m.id_menu,'-',m.id_submenu) }}\" checked='checked'>
                                                {% endif %}
                                                {% endfor %}
                                                {% if flat == 0 %}
                                                    <input class=\"form-check-input\" name=\"{{ '%s%s%s%s%s'|format('check','-',m.id_menu,'-',m.id_submenu) }}\" type=\"checkbox\" id=\"{{ '%s%s%s%s%s'|format('check','-',m.id_menu,'-',m.id_submenu) }}\">
                                                {% endif %}
                                                <label class=\"form-check-label\">{{ m.descripcion|raw|convert_encoding('UTF-8', 'ISO-8859-1')|upper }}</label>
                                            {% endif %}
                                        </div>
                                    </li>
                    
                                    {% set id=m.id_menu %}
                                    {% set cont =  cont + 1 %}
                                {% endfor %}
                            </ul>
                        </form>
                    </div>
                </div>
            </div>           
        </div>
    </div>
{% endblock %}
{% block appScript %}
    <!-- VUE -->
    <script src=\"assets/vendor/vue/vue.js\"></script>
    <script src=\"assets/jscontrollers/users/update_perfil_user.js\"></script>
{% endblock %}", "users/update_perfil_user.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\update_perfil_user.twig");
    }
}
