<?php

/* error.twig */
class __TwigTemplate_7c187527f40a94114ca654492a754c1d extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <title>Bolt - Fatal error.</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/css/bootstrap.min.css\" />
</head>
<body style=\"padding: 20px;\">

    <div style=\"max-width: 530px; margin: auto;\">

    <h1>Bolt - Fatal error.</h1>

    <ul>
        <li>Class: ";
        // line 15
        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
        echo twig_escape_filter($this->env, $_class_, "html", null, true);
        echo "</li>
        <li>Message: ";
        // line 16
        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
        echo twig_escape_filter($this->env, $_message_, "html", null, true);
        echo "</li>
        <li>Code: ";
        // line 17
        if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
        echo twig_escape_filter($this->env, $_code_, "html", null, true);
        echo "</li>
    </ul>

    ";
        // line 20
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "debug")) {
            // line 21
            echo "        ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_trace_);
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "            ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (($this->getAttribute($_i_, "line", array(), "any", true, true) && $this->getAttribute($_i_, "class", array(), "any", true, true))) {
                    // line 23
                    echo "                <p>
                    <strong>";
                    // line 24
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "class"), "html", null, true);
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "type"), "html", null, true);
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "function"), "html", null, true);
                    echo "()</strong><br>
                    <em>";
                    // line 25
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "file"), "html", null, true);
                    echo ", line ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_i_, "line"), "html", null, true);
                    echo "</em>
                    ";
                    // line 26
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if ($this->getAttribute($_i_, "args", array(), "any", true, true)) {
                        // line 27
                        echo "                        ";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo $this->env->getExtension('Bolt')->printDump($this->getAttribute($_i_, "args"));
                        echo "
                    ";
                    }
                    // line 29
                    echo "                </p>
            ";
                }
                // line 31
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    </div>
    <hr>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  109 => 32,  103 => 31,  99 => 29,  92 => 27,  89 => 26,  81 => 25,  72 => 24,  69 => 23,  65 => 22,  59 => 21,  56 => 20,  49 => 17,  44 => 16,  39 => 15,  26 => 6,  19 => 1,);
    }
}
