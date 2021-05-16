<?php

/* adminwys/menu.twig */
class __TwigTemplate_9b4ed5373d7d9d48a257f7ff8739768c6fd1bc2684c97e8021d4728a25de8ca3 extends Twig_Template
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
        echo "<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <img src=\"assets/adminwys/img/AdminWYSLogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
            style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "build", array(), "array"), "name", array(), "array"), "html", null, true);
        echo "</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                ";
        // line 14
        $context["menu"] = "";
        // line 15
        echo "                ";
        $context["seccion"] = "";
        // line 16
        echo "                ";
        $context["cont"] = 0;
        // line 17
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["menu_user"] ?? null))) {
                // line 18
                echo "                    ";
                if ((($context["menu"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array()))) {
                    // line 19
                    echo "                        ";
                    if ((($context["cont"] ?? null) >= 1)) {
                        // line 20
                        echo "                        </ul>
                    </li>    
                        ";
                    }
                    // line 23
                    echo "                        ";
                    if ((($context["seccion"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "seccion", array()))) {
                        echo " 
                        <li class=\"nav-header\">";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "seccion", array()), "html", null, true);
                        echo "</li>
                        ";
                    }
                    // line 26
                    echo "                    
                    
                        ";
                    // line 28
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["menu_op"] ?? null), "id_menu", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                        // line 29
                        echo "                        <li class=\"nav-item has-treeview menu-open\">
                            <a href=\"#\" class=\"nav-link active\">
                        ";
                    } else {
                        // line 32
                        echo "                        <li class=\"nav-item has-treeview\">
                            <a href=\"#\" class=\"nav-link\">   
                        ";
                    }
                    // line 35
                    echo "                            <i class=\"nav-icon ";
                    echo twig_escape_filter($this->env, (" " . twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "glyphicon", array())), "html", null, true);
                    echo "\"></i>
                            <p>
                                ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_convert_encoding(twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array()), "UTF-8", "ISO-8859-1")), "html", null, true);
                    echo "
                                <i class=\"right fa fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                    ";
                }
                // line 43
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descripcion", array()) != "")) {
                    // line 44
                    echo "                                <li class=\"nav-item\">
                                    ";
                    // line 45
                    if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["menu_op"] ?? null), "id_menu", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["menu_op"] ?? null), "id_submenu", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_submenu", array())))) {
                        // line 46
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                        echo "\" class=\"nav-link active\">
                                    ";
                    } else {
                        // line 48
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                        echo "\" class=\"nav-link\">
                                    ";
                    }
                    // line 50
                    echo "                                    
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descripcion", array()), "html", null, true);
                    echo "</p>
                                    </a>
                                </li>
                            ";
                }
                // line 56
                echo "                    ";
                $context["menu"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array());
                // line 57
                echo "                    ";
                $context["seccion"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "seccion", array());
                // line 58
                echo "                    ";
                $context["cont"] = (($context["cont"] ?? null) + 1);
                echo "    
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                ";
        if ((($context["cont"] ?? null) >= 1)) {
            // line 61
            echo "                        </ul>
                    </li>    
                ";
        }
        // line 64
        echo "                
                <div class=\"user-panel d-flex\">
                    
                </div>

                <li class=\"nav-item\">
                    <a href=\"logout\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-power-off\"></i>
                        <p>
                            Cerrar sesión
                        </p>
                    </a>
                </li>
                      
                
            </ul>
        </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>";
    }

    public function getTemplateName()
    {
        return "adminwys/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 64,  153 => 61,  150 => 60,  140 => 58,  137 => 57,  134 => 56,  127 => 52,  123 => 50,  117 => 48,  111 => 46,  109 => 45,  106 => 44,  103 => 43,  94 => 37,  88 => 35,  83 => 32,  78 => 29,  76 => 28,  72 => 26,  67 => 24,  62 => 23,  57 => 20,  54 => 19,  51 => 18,  45 => 17,  42 => 16,  39 => 15,  37 => 14,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"#\" class=\"brand-link\">
        <img src=\"assets/adminwys/img/AdminWYSLogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
            style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">{{ config['build']['name'] }}</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                {% set menu = \"\" %}
                {% set seccion = \"\" %}
                {% set cont = 0 %}
                {% for m in menu_user if false != menu_user %}
                    {% if menu != m.menu %}
                        {% if cont >= 1 %}
                        </ul>
                    </li>    
                        {% endif %}
                        {% if seccion != m.seccion %} 
                        <li class=\"nav-header\">{{ m.seccion }}</li>
                        {% endif %}
                    
                    
                        {% if menu_op['id_menu'] == m.id_menu %}
                        <li class=\"nav-item has-treeview menu-open\">
                            <a href=\"#\" class=\"nav-link active\">
                        {% else %}
                        <li class=\"nav-item has-treeview\">
                            <a href=\"#\" class=\"nav-link\">   
                        {% endif %}
                            <i class=\"nav-icon {{\" \"~m.glyphicon }}\"></i>
                            <p>
                                {{ m.menu|raw|convert_encoding('UTF-8', 'ISO-8859-1')|upper }}
                                <i class=\"right fa fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                    {% endif %}
                            {% if m.descripcion != \"\" %}
                                <li class=\"nav-item\">
                                    {% if menu_op['id_menu'] == m.id_menu and menu_op['id_submenu'] == m.id_submenu %}
                                        <a href=\"{{ m.url }}\" class=\"nav-link active\">
                                    {% else %}
                                        <a href=\"{{ m.url }}\" class=\"nav-link\">
                                    {% endif %}
                                    
                                        <i class=\"far fa-circle nav-icon\"></i>
                                        <p>{{ m.descripcion }}</p>
                                    </a>
                                </li>
                            {% endif %}
                    {% set menu = m.menu %}
                    {% set seccion = m.seccion %}
                    {% set cont = cont + 1 %}    
                {% endfor %}
                {% if cont >= 1 %}
                        </ul>
                    </li>    
                {% endif %}
                
                <div class=\"user-panel d-flex\">
                    
                </div>

                <li class=\"nav-item\">
                    <a href=\"logout\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-power-off\"></i>
                        <p>
                            Cerrar sesión
                        </p>
                    </a>
                </li>
                      
                
            </ul>
        </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>", "adminwys/menu.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\adminwys\\menu.twig");
    }
}
