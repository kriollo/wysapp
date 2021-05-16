<?php

/* adminwys/footer.twig */
class __TwigTemplate_afbb608c6425c55f5f5bde040ead979d6645cc76b933b9506a0275d6da041fdf extends Twig_Template
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
        echo "<footer class=\"main-footer\">
    <strong>Copyright &copy; 2008-";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://www.wys.cl\">WYS Soluciones Informaticas</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
        <b>Version</b> 3.0.5
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "adminwys/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"main-footer\">
    <strong>Copyright &copy; 2008-{{ \"now\"|date(\"Y\") }} <a href=\"http://www.wys.cl\">WYS Soluciones Informaticas</a>.</strong>
    All rights reserved.
    <div class=\"float-right d-none d-sm-inline-block\">
        <b>Version</b> 3.0.5
    </div>
</footer>", "adminwys/footer.twig", "C:\\Users\\TelQway\\ownCloud\\htdocs\\proyectos\\wysapp\\app\\templates\\adminwys\\footer.twig");
    }
}
