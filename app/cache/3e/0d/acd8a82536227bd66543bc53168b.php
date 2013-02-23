<?php

/* index.twig */
class __TwigTemplate_3e0dacd8a82536227bd66543bc53168b extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->



<div class=\"row\">

    <!-- Main Blog Content -->
    <div class=\"twelve columns\" role=\"content\">
        <h1 class=\"site-title\">";
        // line 11
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "sitename"), "html", null, true);
        echo "</h1>
    <a class=\"download\" id=\"donationdl\">Download with donation!</a>
    <a class=\"download\" id=\"freedl\">Download for free!</a>

    </div>

</div>

<!-- End Main Content and Sidebar -->



";
        // line 23
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 23,  32 => 11,  21 => 2,  19 => 1,);
    }
}
