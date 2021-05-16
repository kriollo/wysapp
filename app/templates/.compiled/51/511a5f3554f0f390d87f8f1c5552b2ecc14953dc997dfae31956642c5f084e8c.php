<?php

/* adminwys/header.twig */
class __TwigTemplate_5e22e2001e999e423cb87e6d81d7c0e64b55b01b035eeba1733866edcd0f4d89 extends Twig_Template
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
        echo "<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"portal\" class=\"nav-link\">Home</a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"#\" class=\"nav-link\">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">

        
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-bell\"></i>
                <span class=\"badge badge-warning navbar-badge\">15</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                    <span class=\"float-right text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                    <span class=\"float-right text-muted text-sm\">12 hours</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-file mr-2\"></i> 3 new reports
                    <span class=\"float-right text-muted text-sm\">2 days</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
            </div>
        </li>
        <li class=\"nav-item dropdown user user-menu\">
            <a class=\"nav-link\" href=\"portal/perfil_user\" role=\"button\">
                ";
        // line 51
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "foto", array(), "array") == 1)) {
            // line 52
            echo "                    <img src=\"assets/adminwys/img/avatares/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name_foto", array(), "array"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                ";
        } else {
            // line 54
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->get_gravatar(twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "email", array(), "array")), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                ";
        }
        // line 56
        echo "                <span class=\"hidden-xs\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array")), "html", null, true);
        echo "</span>
            </a>
            
        </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "adminwys/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 56,  79 => 54,  73 => 52,  71 => 51,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"portal\" class=\"nav-link\">Home</a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"#\" class=\"nav-link\">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class=\"navbar-nav ml-auto\">

        
        <!-- Notifications Dropdown Menu -->
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"far fa-bell\"></i>
                <span class=\"badge badge-warning navbar-badge\">15</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                    <span class=\"float-right text-muted text-sm\">3 mins</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                    <span class=\"float-right text-muted text-sm\">12 hours</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"fas fa-file mr-2\"></i> 3 new reports
                    <span class=\"float-right text-muted text-sm\">2 days</span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
            </div>
        </li>
        <li class=\"nav-item dropdown user user-menu\">
            <a class=\"nav-link\" href=\"portal/perfil_user\" role=\"button\">
                {% if owner_user['foto'] == 1 %}
                    <img src=\"assets/adminwys/img/avatares/{{ owner_user['name_foto'] }}\" class=\"user-image\" alt=\"User Image\">
                {% else %}
                    <img src=\"{{ get_gravatar(owner_user['email']) }}\" class=\"user-image\" alt=\"User Image\">
                {% endif %}
                <span class=\"hidden-xs\">{{ owner_user['name']|title  }}</span>
            </a>
            
        </li>
    </ul>
</nav>", "adminwys/header.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\adminwys\\header.twig");
    }
}
