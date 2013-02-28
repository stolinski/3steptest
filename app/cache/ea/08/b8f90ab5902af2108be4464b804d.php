<?php

/* _sub_extension.twig */
class __TwigTemplate_ea08b8f90ab5902af2108be4464b804d extends Twig_Template
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
        echo "<div class='extension'>

            <span style=\"float: right; margin-top: 4px;\">
                ";
        // line 4
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        if ($this->getAttribute($_extension_, "readme")) {
            // line 5
            echo "                    <a data-target=\"#myModal\" href=\"";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("readme", array("extension" => $this->getAttribute($_extension_, "namespace"))), "html", null, true);
            echo "\" class=\"btn btn-mini\"
                       type=\"button\" data-toggle=\"modal\" >View Readme</a>
                ";
        }
        // line 8
        echo "                ";
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        if ($this->getAttribute($_extension_, "config")) {
            // line 9
            echo "                    ";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            if ($this->getAttribute($_extension_, "config_writable")) {
                // line 10
                echo "                        <a href=\"";
                if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => ("app/extensions/" . $this->getAttribute($_extension_, "config")))), "html", null, true);
                echo "\" class=\"btn btn-mini\"
                           type=\"button\">Edit Config</a>
                    ";
            } else {
                // line 13
                echo "                        <a class=\"btn btn-mini disabled\" type=\"button\">Config not writable</a>
                    ";
            }
            // line 15
            echo "                ";
        }
        // line 16
        echo "            </span>

    <h3>";
        // line 18
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "name"), "html", null, true);
        echo "</h3>

    <p>";
        // line 20
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        echo $this->getAttribute($_extension_, "description");
        echo "</p>

    <p>Author: <strong>";
        // line 22
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "author"), "html", null, true);
        echo "</strong><br/>
        Released: ";
        // line 23
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_extension_, "first_releasedate"), "Y-m-d"), "html", null, true);
        echo ",
        latest update: ";
        // line 24
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_extension_, "latest_releasedate"), "Y-m-d"), "html", null, true);
        echo " </p>

    <span class=\"label\">Name: ";
        // line 26
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "namespace"), "html", null, true);
        echo "</span>
    ";
        // line 27
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        if ($this->getAttribute($_extension_, "version")) {
            echo "<span class=\"label\">Version ";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "version"), "html", null, true);
            echo "</span>";
        }
        // line 28
        echo "    ";
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        if ($this->getAttribute($_extension_, "required_bolt_version")) {
            echo "<span class=\"label ";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            if ((!$this->getAttribute($_extension_, "version_ok"))) {
                echo "label-important";
            }
            echo "\"
                                                  title=\"";
            // line 29
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            if ($this->getAttribute($_extension_, "highest_bolt_version")) {
                echo "Tested in Bolt ";
                if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "highest_bolt_version"), "html", null, true);
                echo ".";
            }
            echo "\"
            >Req. Bolt ";
            // line 30
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "required_bolt_version"), "html", null, true);
            echo "</span>";
        }
        // line 31
        echo "
    ";
        // line 32
        if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
        if ($this->getAttribute($_extension_, "type")) {
            echo "<span class=\"label\">";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "type"), "html", null, true);
            echo "</span>";
        }
        // line 33
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "_sub_extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 33,  132 => 32,  129 => 31,  124 => 30,  114 => 29,  103 => 28,  95 => 27,  90 => 26,  84 => 24,  79 => 23,  74 => 22,  68 => 20,  62 => 18,  58 => 16,  55 => 15,  51 => 13,  43 => 10,  39 => 9,  35 => 8,  27 => 5,  24 => 4,  157 => 68,  119 => 32,  112 => 30,  102 => 28,  99 => 27,  96 => 26,  82 => 25,  73 => 18,  66 => 16,  56 => 14,  53 => 13,  50 => 12,  36 => 11,  25 => 4,  21 => 2,  19 => 1,);
    }
}
