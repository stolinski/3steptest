<?php

/* editconfig.twig */
class __TwigTemplate_e382ff59a80a57185be8251bdd5c4c12 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "settings")));
        // line 2
        echo "

<h1>";
        // line 4
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h1>


<form action=\"#\" method=\"post\" class=\"form-inline\" autocomplete=\"off\">

<div>
<textarea id=\"form_contents\" name=\"form[contents]\" required=\"required\" class=\"CodeMirror-scroll\" style=\"width: 98%\">";
        // line 10
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_form_, "vars"), "value"), "contents"), "html", null, true);
        echo "</textarea>
</div>

    ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "_token"), 'row');
        echo "
<br />
    <input type=\"submit\" name=\"submit\" value=\"Save\" class=\"btn btn-primary\" ";
        // line 15
        if (isset($context["writeallowed"])) { $_writeallowed_ = $context["writeallowed"]; } else { $_writeallowed_ = null; }
        if ((!$_writeallowed_)) {
            echo "disabled";
        }
        echo " />
</form>

";
        // line 18
        if ((!$this->env->getExtension('Bolt')->ismobileclient())) {
            // line 19
            echo "    <link rel=\"stylesheet\" href=\"";
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
            echo "view/lib/codemirror/codemirror.css\">
    <script src=\"";
            // line 20
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
            echo "view/lib/codemirror/codemirror.min.js\"></script>
    ";
            // line 21
            if (isset($context["filetype"])) { $_filetype_ = $context["filetype"]; } else { $_filetype_ = null; }
            if (twig_in_filter($_filetype_, array(0 => "twig", 1 => "html", 2 => "htm"))) {
                // line 22
                echo "    <script src=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/xml.js\"></script>
    <script src=\"";
                // line 23
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/javascript.js\"></script>
    <script src=\"";
                // line 24
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/css.js\"></script>
    <script src=\"";
                // line 25
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/htmlmixed.js\"></script>
    ";
            } elseif (($_filetype_ == "yml")) {
                // line 27
                echo "    <script src=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/yaml.js\"></script>
    ";
            } elseif (($_filetype_ == "md")) {
                // line 29
                echo "    <script src=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/markdown.js\"></script>
    ";
            } elseif (twig_in_filter($_filetype_, array(0 => "css", 1 => "less"))) {
                // line 31
                echo "    <script src=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/css.js\"></script>
    ";
            } elseif (($_filetype_ == "js")) {
                // line 33
                echo "    <script src=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/lib/codemirror/javascript.js\"></script>
    ";
            }
            // line 35
            echo "    
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById(\"form_contents\"), { 
            lineNumbers: true, 
            autofocus: true, 
            tabSize: 4,
            indentUnit: 4,
            indentWithTabs: false
        });
    
        editor.setSize(null, \$(window).height() - 276);
    
    </script>
";
        }
        // line 49
        echo "
";
        // line 50
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "editconfig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  139 => 49,  123 => 35,  116 => 33,  109 => 31,  102 => 29,  95 => 27,  89 => 25,  84 => 24,  79 => 23,  73 => 22,  70 => 21,  65 => 20,  59 => 19,  57 => 18,  48 => 15,  42 => 13,  35 => 10,  25 => 4,  21 => 2,  19 => 1,);
    }
}
