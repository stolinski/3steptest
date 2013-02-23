<?php

/* _header.twig */
class __TwigTemplate_b597321f6c3ef302bba4da730bbfc1b7 extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>bolt ";
        // line 7
        if (array_key_exists("title", $context)) {
            echo "- ";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
        }
        echo "</title>

    <script src=\"";
        // line 9
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/jquery-1.9.1.min.js\"></script>
    <script src=\"";
        // line 10
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/underscore-min.js\"></script>
    <script src=\"";
        // line 11
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/backbone-min.js\"></script>
    <script src=\"";
        // line 12
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/jquery-ui-1.10.1.custom.min.js\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/css/smoothness/jquery-ui-1.10.1.custom.min.css\">

    <script src=\"";
        // line 16
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/jquery.plugins.js\"></script>

    <script src=\"";
        // line 18
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/css/bootstrap-responsive.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/css/font-awesome.min.css\">

    <script src=\"";
        // line 23
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/select2/select2.css\">
    <script src=\"";
        // line 27
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/select2/select2.js\"></script>

    <script src=\"";
        // line 29
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/ckeditor/ckeditor.js\"></script>

    <script src=\"";
        // line 31
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/upload/jquery.iframe-transport.js\"></script>
    <script src=\"";
        // line 32
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 33
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload-ui.css\">

    <script src=\"";
        // line 35
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/moment.min.js\"></script>

    <script src=\"";
        // line 37
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/bolt.js\"></script>

    ";
        // line 40
        echo "    <link rel=\"stylesheet\" href=\"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/css/bolt.css\">

    <link rel=\"shortcut icon\" href=\"";
        // line 42
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/img/favicon-bolt.ico\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 43
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/img/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 44
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/img/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 45
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/img/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 46
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/img/apple-touch-icon-144x144.png\">

</head>
<body>

";
        // line 51
        if ((!array_key_exists("active", $context))) {
            $context["active"] = "dashboard";
        }
        // line 52
        echo "
<div class=\"navbar navbar-fixed-top \">
    <div class=\"navbar-bolt navbar-inverse\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
        echo "\">
                <strong>bolt</strong> <span class=\"hidden-phone\"> ";
        // line 60
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config", array(), "any", false, true), "general", array(), "any", false, true), "sitename", array(), "any", true, true)) {
            echo "- ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "sitename"), "html", null, true);
        }
        echo "</span>
            </a>

            ";
        // line 63
        $this->env->loadTemplate("_sub_mainmenu.twig")->display($context);
        // line 64
        echo "
        </div>
    </div>
</div>

<div class=\"container-fluid\">

";
        // line 71
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashBag"), "has", array(0 => "info"), "method")) {
            // line 72
            echo "    <div class=\"alert alert-info\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 74
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashBag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 75
                echo "            ";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $_msg_, "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 77
            echo "    </div>
";
        }
        // line 79
        echo "
";
        // line 80
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashBag"), "has", array(0 => "error"), "method")) {
            // line 81
            echo "    <div class=\"alert alert-error\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 83
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashBag"), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 84
                echo "            ";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $_msg_, "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 86
            echo "    </div>
";
        }
        // line 88
        echo "
";
        // line 89
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashBag"), "has", array(0 => "success"), "method")) {
            // line 90
            echo "    <div class=\"alert alert-success\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 92
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashBag"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 93
                echo "            ";
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $_msg_, "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 95
            echo "    </div>
";
        }
        // line 97
        echo "
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
        return array (  305 => 97,  301 => 95,  291 => 93,  286 => 92,  282 => 90,  276 => 88,  272 => 86,  253 => 81,  250 => 80,  247 => 79,  243 => 77,  233 => 75,  228 => 74,  224 => 72,  221 => 71,  210 => 63,  199 => 60,  195 => 59,  186 => 52,  182 => 51,  173 => 46,  168 => 45,  163 => 44,  153 => 42,  146 => 40,  140 => 37,  134 => 35,  128 => 33,  118 => 31,  112 => 29,  106 => 27,  101 => 26,  90 => 23,  84 => 21,  79 => 20,  69 => 18,  63 => 16,  57 => 14,  46 => 11,  41 => 10,  36 => 9,  27 => 7,  279 => 89,  268 => 84,  262 => 84,  257 => 83,  249 => 73,  234 => 71,  229 => 68,  214 => 66,  212 => 64,  209 => 64,  191 => 63,  180 => 57,  175 => 56,  169 => 54,  164 => 53,  158 => 43,  155 => 50,  152 => 49,  149 => 48,  131 => 47,  127 => 45,  123 => 32,  117 => 42,  110 => 39,  104 => 38,  100 => 37,  95 => 24,  92 => 35,  87 => 32,  81 => 31,  74 => 19,  68 => 27,  64 => 26,  59 => 25,  51 => 12,  48 => 18,  44 => 16,  37 => 12,  32 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
