<?php

/* _sub_searchbox.twig */
class __TwigTemplate_13c5e5df385e298af9569ae3aca2538d extends Twig_Template
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
        return array (  27 => 3,  22 => 2,  189 => 24,  173 => 21,  169 => 19,  141 => 14,  130 => 13,  112 => 12,  94 => 11,  91 => 10,  88 => 9,  37 => 2,  172 => 79,  165 => 77,  162 => 76,  156 => 75,  151 => 73,  140 => 64,  137 => 63,  131 => 59,  117 => 49,  108 => 42,  99 => 33,  93 => 31,  87 => 30,  81 => 6,  76 => 25,  71 => 24,  59 => 21,  54 => 16,  46 => 15,  40 => 3,  30 => 12,  161 => 62,  152 => 55,  150 => 15,  139 => 45,  129 => 43,  125 => 42,  122 => 41,  119 => 40,  109 => 38,  105 => 37,  102 => 36,  98 => 34,  95 => 33,  89 => 31,  86 => 30,  79 => 28,  72 => 5,  65 => 22,  61 => 4,  58 => 21,  50 => 17,  45 => 16,  42 => 15,  39 => 14,  33 => 13,  21 => 2,  19 => 1,);
    }
}
