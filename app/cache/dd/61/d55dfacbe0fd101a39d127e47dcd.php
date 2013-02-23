<?php

/* _header.twig */
class __TwigTemplate_dd61d55dfacbe0fd101a39d127e47dcd extends Twig_Template
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
        echo "    <link rel=\"stylesheet\" href=\"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "stylesheets/foundation.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "stylesheets/app.css\">

    <script src=\"";
        // line 24
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/modernizr.foundation.js\"></script>
    <script src=\"";
        // line 25
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/jquery-1.9.1.min.js\"></script>
    <script src=\"";
        // line 26
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/jquery.foundation.topbar.js\"></script>

    ";
        // line 30
        echo "    <script src=\"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <script src=\"";
        // line 33
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "theme"), "html", null, true);
        echo "javascripts/app.js\"></script>

</head>
<body>

";
        // line 42
        echo "
<div class=\"container\">

    <!-- Positioning the Top Bar -->

    <nav class=\"top-bar\">
        <ul>
            <li class=\"name\"><h1><a href=\"";
        // line 49
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
        // line 59
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->menu($this->env), "html", null, true);
        echo "

                ";
        // line 63
        echo "                ";
        $this->env->loadTemplate("_sub_searchbox.twig")->display($context);
        // line 64
        echo "
            </ul>

        </section>
    </nav>

    <!-- Header bar -->

    <div class=\"headerphoto\">
        <img src=\"";
        // line 73
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
        echo "theme/base-2013/images/header_3.jpg\" width=\"1200\" height=\"350\" />
        ";
        // line 75
        echo "        <p><span>";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "sitename"), "html", null, true);
        echo "</span>
            ";
        // line 76
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config", array(), "any", false, true), "general", array(), "any", false, true), "payoff", array(), "any", true, true)) {
            // line 77
            echo "                <br><small>";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "payoff"), "html", null, true);
            echo "</small>
            ";
        }
        // line 79
        echo "        </p>
    </div>

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
        return array (  172 => 79,  165 => 77,  156 => 75,  131 => 59,  117 => 49,  108 => 42,  99 => 33,  93 => 31,  81 => 26,  59 => 21,  54 => 16,  46 => 15,  40 => 14,  33 => 13,  30 => 12,  162 => 76,  153 => 54,  151 => 73,  140 => 64,  137 => 63,  118 => 38,  115 => 37,  112 => 36,  105 => 34,  98 => 32,  91 => 30,  87 => 30,  84 => 27,  76 => 25,  71 => 24,  68 => 21,  65 => 22,  56 => 18,  52 => 16,  34 => 15,  31 => 14,  21 => 2,  19 => 1,);
    }
}
