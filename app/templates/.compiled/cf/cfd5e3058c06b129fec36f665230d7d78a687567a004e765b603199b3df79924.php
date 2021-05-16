<?php

/* users/listar_users.twig */
class __TwigTemplate_e2bb3eaa88034bf715ad471d790ee629857020e54bca3f6f62de3f48df318709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminwys/layout", "users/listar_users.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
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
    public function block_appStylos($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
";
    }

    // line 7
    public function block_appBody($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1 class=\"m-0 text-dark\">Listado de Usuarios</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"users\">Principa Usuarios</a></li>
                        <li class=\"breadcrumb-item active\">Listado de Usuario</li>
                        <li class=\"breadcrumb-item\"></li>
                        <a class=\"btn btn-info btn-sm btn-flat\" href=\"users/register_user\" title=\"Agregar\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-plus\"></i> Agregar Usuario
                        </a>
                        <li class=\"breadcrumb-item\"></li>
                    </ol>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"col col-md-12\">
                <table id=\"table_listar_users\" class=\"table table-responsive-md table-bordered\">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>E-Mail</th>
                            <th>Perfil</th>
                            <th>Inicio</th>
                            <th>ROL</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 49
        $context["No"] = 1;
        // line 50
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_users"] ?? null))) {
                // line 51
                echo "                            <tr>
                                <td>";
                // line 52
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "email", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "perfil", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "pagina_inicio", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 57
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rol", array())) ? ("Admin") : ("Usuario"));
                echo "</td>
                                <td class='text-center'>
                                    
                                    
                                    ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 1)) {
                    // line 62
                    echo "                                        <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"users/update_user/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                                            <i class='fa fa-edit'></i>
                                        </a>
                                        <button type=\"button\" id=\"btn_reset_pass\" title='Reset Pass' class=\"btn btn-info btn-sm\" data-toggle=\"modal\" onclick=\"carga_modal_reset_pass('";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "')\">
                                            <i class='fa fa-cog'></i>
                                        </button>
                                        <a data-toggle='tooltip' data-placement='top' title='Revisar Perfil de Usuario' class='btn btn-info btn-sm' href=\"users/editar_perfil_user/";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                                        <i class='fa fa-list-alt'></i>
                                        </a>
                                        <a data-toggle='tooltip' data-placement='top' title='Suspender' class='btn btn-danger btn-sm' href=\"users/estado_user/";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                                        <i class='fa fa-power-off'></i>
                                        </a>
                                    ";
                } else {
                    // line 75
                    echo "                                        <a data-toggle='tooltip' data-placement='top' title='Activar' class='btn btn-warning btn-sm' href=\"users/estado_user/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                                        <i class='fa fa-check'></i>
                                        </a>
                                    ";
                }
                // line 79
                echo "                                </td>
                            </tr>
                        ";
                // line 81
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 82
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </tbody>
                </table>
            </div>
        </div>    
    </div>

    ";
        // line 89
        $this->loadTemplate("users/modal_reset_pass_user", "users/listar_users.twig", 89)->display($context);
        // line 90
        echo "    ";
        $this->loadTemplate("users/modal_select_campus_user", "users/listar_users.twig", 90)->display($context);
        // line 91
        echo "
";
    }

    // line 93
    public function block_appScript($context, array $blocks = array())
    {
        // line 94
        echo "    <!-- DataTables -->
    <script src=\"assets/vendor/plugins/datatables/jquery.dataTables.min.js\"></script>
    <script src=\"assets/vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"assets/vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
    <script src=\"assets/vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
    
    <script src=\"assets/jscontrollers/users/listar_users.js\"></script>
    
";
    }

    public function getTemplateName()
    {
        return "users/listar_users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 94,  191 => 93,  186 => 91,  183 => 90,  181 => 89,  173 => 83,  166 => 82,  164 => 81,  160 => 79,  152 => 75,  145 => 71,  139 => 68,  133 => 65,  126 => 62,  124 => 61,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  101 => 53,  97 => 52,  94 => 51,  88 => 50,  86 => 49,  43 => 8,  40 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminwys/layout' %}
{% block appStylos %}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
{% endblock %}
{% block appBody %}
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1 class=\"m-0 text-dark\">Listado de Usuarios</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"users\">Principa Usuarios</a></li>
                        <li class=\"breadcrumb-item active\">Listado de Usuario</li>
                        <li class=\"breadcrumb-item\"></li>
                        <a class=\"btn btn-info btn-sm btn-flat\" href=\"users/register_user\" title=\"Agregar\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-plus\"></i> Agregar Usuario
                        </a>
                        <li class=\"breadcrumb-item\"></li>
                    </ol>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"col col-md-12\">
                <table id=\"table_listar_users\" class=\"table table-responsive-md table-bordered\">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>E-Mail</th>
                            <th>Perfil</th>
                            <th>Inicio</th>
                            <th>ROL</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% set No = 1 %}
                        {% for d in db_users if false != db_users %}
                            <tr>
                                <td>{{ No }}</td>
                                <td>{{ d.name|raw|title }}</td>
                                <td>{{ d.email }}</td>
                                <td>{{ d.perfil  }}</td>
                                <td>{{ d.pagina_inicio  }}</td>
                                <td>{{ d.rol ? \"Admin\":\"Usuario\"  }}</td>
                                <td class='text-center'>
                                    
                                    
                                    {% if d.estado == 1 %}
                                        <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"users/update_user/{{ d.id_user }}\">
                                            <i class='fa fa-edit'></i>
                                        </a>
                                        <button type=\"button\" id=\"btn_reset_pass\" title='Reset Pass' class=\"btn btn-info btn-sm\" data-toggle=\"modal\" onclick=\"carga_modal_reset_pass('{{ d.id_user }}')\">
                                            <i class='fa fa-cog'></i>
                                        </button>
                                        <a data-toggle='tooltip' data-placement='top' title='Revisar Perfil de Usuario' class='btn btn-info btn-sm' href=\"users/editar_perfil_user/{{ d.id_user }}\">
                                        <i class='fa fa-list-alt'></i>
                                        </a>
                                        <a data-toggle='tooltip' data-placement='top' title='Suspender' class='btn btn-danger btn-sm' href=\"users/estado_user/{{ d.id_user }}\">
                                        <i class='fa fa-power-off'></i>
                                        </a>
                                    {% else %}
                                        <a data-toggle='tooltip' data-placement='top' title='Activar' class='btn btn-warning btn-sm' href=\"users/estado_user/{{ d.id_user }}\">
                                        <i class='fa fa-check'></i>
                                        </a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% set No =  No + 1 %}
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>    
    </div>

    {% include 'users/modal_reset_pass_user' %}
    {% include 'users/modal_select_campus_user' %}

{% endblock %}
{% block appScript %}
    <!-- DataTables -->
    <script src=\"assets/vendor/plugins/datatables/jquery.dataTables.min.js\"></script>
    <script src=\"assets/vendor/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"assets/vendor/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
    <script src=\"assets/vendor/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
    
    <script src=\"assets/jscontrollers/users/listar_users.js\"></script>
    
{% endblock %}
", "users/listar_users.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\listar_users.twig");
    }
}
