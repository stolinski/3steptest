<?php

/* _header.twig */
class __TwigTemplate_ca3f0026fed655ace437a7c021e64899 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 12
        echo "    <title>
      ";
        // line 13
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        if ($this->getAttribute($_record_, "title", array(), "any", true, true)) {
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($_record_, "title")), "html", null, true);
            echo " | ";
        }
        // line 14
        echo "      ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "sitename"), "html", null, true);
        echo "
      ";
        // line 15
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (((!$this->getAttribute($_record_, "title", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config", array(), "any", false, true), "general", array(), "any", false, true), "payoff", array(), "any", true, true))) {
            echo " | ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "payoff"), "html", null, true);
        }
        // line 16
        echo "    </title>

    <link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    ";
        // line 21
        echo "       <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "stylesheets/foundation.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "stylesheets/app.css\">

    <script src=\"";
        // line 25
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/modernizr.foundation.js\"></script>
    <script src=\"";
        // line 26
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/jquery-1.9.1.min.js\"></script>
    <script src=\"";
        // line 27
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/jquery.foundation.topbar.js\"></script>

    ";
        // line 31
        echo "    <script src=\"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">
    <script src=\"";
        // line 34
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/app.js\"></script>
    <script src=\"";
        // line 35
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/script.js\"></script>

</head>
<body>

";
        // line 44
        echo "
<div class=\"container\">

    <!-- Positioning the Top Bar -->

    <nav class=\"top-bar\">
        <ul>
            <li class=\"name\"><h1><a href=\"";
        // line 51
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
        echo "\">";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "sitename"), "html", null, true);
        echo "</a></h1></li>
            <li class=\"toggle-topbar\"><a href=\"#\"></a></li>
        </ul>
        <section>

            <ul class=\"right\">

                ";
        // line 61
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->menu($this->env), "html", null, true);
        echo "

            </ul>

        </section>
    </nav>

    <!-- Header bar -->

    <!-- End header -->
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  124 => 51,  115 => 44,  106 => 35,  101 => 34,  96 => 33,  89 => 31,  83 => 27,  78 => 26,  73 => 25,  67 => 23,  62 => 22,  59 => 21,  54 => 16,  46 => 15,  40 => 14,  33 => 13,  30 => 12,  58 => 33,  32 => 11,  21 => 2,  19 => 1,);
    }
}
