<?php

/* _sub_searchbox.twig */
class __TwigTemplate_be0fb747101083be691391ee9d648e67 extends Twig_Template
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
        echo "<li class=\"search\">
    <form method=\"get\" action=\"";
        // line 2
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
        echo "search\" id=\"searchform\" enctype=\"text/plain\">
        <input type=\"search\" value=\"";
        // line 3
        if (isset($context["search"])) { $_search_ = $context["search"]; } else { $_search_ = null; }
        echo twig_escape_filter($this->env, $_search_, "html", null, true);
        echo "\" placeholder=\"Search..\" name=\"search\">
    </form>
</li>


";
    }

    public function getTemplateName()
    {
        return "_sub_searchbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 2,  189 => 24,  173 => 21,  169 => 19,  150 => 15,  141 => 14,  130 => 13,  94 => 11,  88 => 9,  72 => 5,  61 => 4,  37 => 2,  172 => 79,  165 => 77,  156 => 75,  131 => 59,  117 => 49,  108 => 42,  99 => 33,  93 => 31,  81 => 6,  59 => 21,  54 => 16,  46 => 15,  40 => 3,  33 => 13,  30 => 12,  162 => 76,  153 => 54,  151 => 73,  140 => 64,  137 => 63,  118 => 38,  115 => 37,  112 => 12,  105 => 34,  98 => 32,  91 => 10,  87 => 30,  84 => 27,  76 => 25,  71 => 24,  68 => 21,  65 => 22,  56 => 18,  52 => 16,  34 => 15,  31 => 14,  21 => 2,  19 => 1,);
    }
}
