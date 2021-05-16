<?php

/* users/principal.twig */
class __TwigTemplate_8206db367c00ddc173402e4f6639fbff98532d5e78f253d38f7045bcdedb4a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("adminwys/layout", "users/principal.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
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
                    <h1 class=\"m-0 text-dark\">Principa Usuarios</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Principa Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-md-3 col-2\">
                    <div class=\"small-box bg-info\">
                        <div class=\"inner\">
                            <h3>";
        // line 27
        echo twig_escape_filter($this->env, ($context["q_users"] ?? null), "html", null, true);
        echo "</h3>
                            <p>Usuarios</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-user\"></i>
                        </div>
                        <a href=\"users/usuarios\" class=\"small-box-footer\" title=\"Ver Usuarios\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class=\"col-md-3 col-2\">
                    <div class=\"small-box bg-success\">
                        <div class=\"inner\">
                        <h3>";
        // line 39
        echo twig_escape_filter($this->env, ($context["q_perfiles"] ?? null), "html", null, true);
        echo "</h3>
                        <p>Perfiles</p>
                        </div>
                        <div class=\"icon\">
                        <i class=\"fa fa-pencil-square-o\"></i>
                        </div>
                        <a href=\"users/perfiles\" class=\"small-box-footer\" title=\"Ver Perfiles\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class=\"col-md-3 col-4\">
                    <div class=\"small-box bg-warning\">
                        <div class=\"inner\">
                        <h3>Agregar</h3>
                        <p>Nuevo Usuario</p>
                        </div>
                        <div class=\"icon\">
                        <i class=\"fa fa-plus\"></i>
                        </div>
                        <a href=\"users/register_user\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class=\"col-md-3 col-4\">
                    <div class=\"small-box bg-purple\">
                        <div class=\"inner\">
                        <h3>";
        // line 63
        echo twig_escape_filter($this->env, ($context["q_users_online"] ?? null), "html", null, true);
        echo "</h3>
                        <p>Usuario On-line</p>
                        </div>
                        <div class=\"icon\">
                        <i class=\"fa fa-eye\"></i>
                        </div>
                        <a href=\"users/principal\" class=\"small-box-footer\" title=\"\" data-toggle=\"tooltip\"><i class=\"fa fa-arrow-down\"></i></a>
                    </div>
                </div><!-- ./col -->
            </div>
            <div class=\"row mb-2\">
                <div class=\"col-md-6\">
                    <p><strong>Últimos Usuarios Registrados</strong></p>
                    <table class=\"table table-borderless table-responsive-md\">
                        <thead>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>E-Mail</th>
                            <th>perfil</th>
                        </thead>
                        <tbody>
                            ";
        // line 84
        $context["No"] = 1;
        // line 85
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["last_user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["last_user"] ?? null))) {
                // line 86
                echo "                                <tr>
                                <td>";
                // line 87
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "email", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "perfil", array()), "html", null, true);
                echo "</td>
                                </tr>
                                ";
                // line 92
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 93
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Usuarios On-line</strong></p>
                    <table class=\"table table-borderless table-responsive-md\">
                        <thead>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>E-Mail</th>
                            <th>perfil</th>
                        </thead>
                        <tbody>
                            ";
        // line 107
        $context["No"] = 1;
        // line 108
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_user_online"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_user_online"] ?? null))) {
                // line 109
                echo "                            <tr>
                                <td>";
                // line 110
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                <td>";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "email", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "perfil", array()), "html", null, true);
                echo "</td>
                            </tr>
                            ";
                // line 115
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 116
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "users/principal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 117,  205 => 116,  203 => 115,  198 => 113,  194 => 112,  190 => 111,  186 => 110,  183 => 109,  177 => 108,  175 => 107,  160 => 94,  153 => 93,  151 => 92,  146 => 90,  142 => 89,  138 => 88,  134 => 87,  131 => 86,  125 => 85,  123 => 84,  99 => 63,  72 => 39,  57 => 27,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminwys/layout' %}
{% block appBody %}
    <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-sm-6\">
                    <h1 class=\"m-0 text-dark\">Principa Usuarios</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                    <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Principa Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
                <div class=\"col-md-3 col-2\">
                    <div class=\"small-box bg-info\">
                        <div class=\"inner\">
                            <h3>{{ q_users }}</h3>
                            <p>Usuarios</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-user\"></i>
                        </div>
                        <a href=\"users/usuarios\" class=\"small-box-footer\" title=\"Ver Usuarios\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class=\"col-md-3 col-2\">
                    <div class=\"small-box bg-success\">
                        <div class=\"inner\">
                        <h3>{{ q_perfiles }}</h3>
                        <p>Perfiles</p>
                        </div>
                        <div class=\"icon\">
                        <i class=\"fa fa-pencil-square-o\"></i>
                        </div>
                        <a href=\"users/perfiles\" class=\"small-box-footer\" title=\"Ver Perfiles\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class=\"col-md-3 col-4\">
                    <div class=\"small-box bg-warning\">
                        <div class=\"inner\">
                        <h3>Agregar</h3>
                        <p>Nuevo Usuario</p>
                        </div>
                        <div class=\"icon\">
                        <i class=\"fa fa-plus\"></i>
                        </div>
                        <a href=\"users/register_user\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class=\"col-md-3 col-4\">
                    <div class=\"small-box bg-purple\">
                        <div class=\"inner\">
                        <h3>{{ q_users_online }}</h3>
                        <p>Usuario On-line</p>
                        </div>
                        <div class=\"icon\">
                        <i class=\"fa fa-eye\"></i>
                        </div>
                        <a href=\"users/principal\" class=\"small-box-footer\" title=\"\" data-toggle=\"tooltip\"><i class=\"fa fa-arrow-down\"></i></a>
                    </div>
                </div><!-- ./col -->
            </div>
            <div class=\"row mb-2\">
                <div class=\"col-md-6\">
                    <p><strong>Últimos Usuarios Registrados</strong></p>
                    <table class=\"table table-borderless table-responsive-md\">
                        <thead>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>E-Mail</th>
                            <th>perfil</th>
                        </thead>
                        <tbody>
                            {% set No = 1 %}
                            {% for d in last_user if false != last_user %}
                                <tr>
                                <td>{{ No }}</td>
                                <td>{{ d.name|raw|title }}</td>
                                <td>{{ d.email }}</td>
                                <td>{{ d.perfil }}</td>
                                </tr>
                                {% set No =  No + 1 %}
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Usuarios On-line</strong></p>
                    <table class=\"table table-borderless table-responsive-md\">
                        <thead>
                            <th>No</th>
                            <th>Nombre</th>
                            <th>E-Mail</th>
                            <th>perfil</th>
                        </thead>
                        <tbody>
                            {% set No = 1 %}
                            {% for d in db_user_online if false != db_user_online %}
                            <tr>
                                <td>{{ No }}</td>
                                <td>{{ d.name|raw|title }}</td>
                                <td>{{ d.email }}</td>
                                <td>{{ d.perfil }}</td>
                            </tr>
                            {% set No =  No + 1 %}
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- /.container-fluid -->
    </div>
{% endblock %}", "users/principal.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\users\\principal.twig");
    }
}
