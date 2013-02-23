<?php

/* dashboard-news.twig */
class __TwigTemplate_ac1501a1be15db4058a030956b823391 extends Twig_Template
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
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        if ($this->getAttribute($_news_, "title", array(), "any", true, true)) {
            // line 2
            echo "    <section class=\"news\">
    <h2>";
            // line 3
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_news_, "title"), "html", null, true);
            echo "</h2>
    ";
            // line 4
            if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
            echo $this->getAttribute($_news_, "teaser");
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "dashboard-news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 3,  333 => 89,  327 => 88,  321 => 86,  314 => 85,  308 => 83,  297 => 81,  292 => 80,  287 => 79,  281 => 77,  275 => 75,  251 => 69,  240 => 67,  218 => 61,  205 => 57,  198 => 55,  192 => 53,  183 => 51,  177 => 49,  170 => 44,  162 => 40,  159 => 39,  156 => 38,  148 => 34,  141 => 32,  115 => 28,  109 => 26,  98 => 23,  78 => 16,  75 => 15,  54 => 10,  22 => 2,  266 => 73,  260 => 71,  241 => 74,  223 => 62,  217 => 62,  208 => 59,  206 => 58,  202 => 56,  196 => 54,  193 => 53,  187 => 51,  184 => 50,  178 => 48,  167 => 44,  157 => 39,  147 => 35,  142 => 33,  138 => 31,  135 => 31,  133 => 30,  121 => 25,  119 => 24,  113 => 20,  99 => 19,  96 => 18,  91 => 17,  86 => 16,  76 => 14,  70 => 13,  66 => 12,  26 => 4,  23 => 3,  305 => 97,  301 => 82,  291 => 93,  286 => 92,  282 => 90,  276 => 88,  272 => 86,  253 => 78,  250 => 77,  247 => 79,  243 => 68,  233 => 64,  228 => 63,  224 => 72,  221 => 71,  210 => 63,  199 => 60,  195 => 59,  186 => 52,  182 => 51,  173 => 46,  168 => 45,  163 => 44,  153 => 42,  146 => 40,  140 => 37,  134 => 35,  128 => 33,  118 => 29,  112 => 27,  106 => 27,  101 => 24,  90 => 20,  84 => 21,  79 => 20,  69 => 18,  63 => 16,  57 => 11,  46 => 11,  41 => 7,  36 => 6,  27 => 7,  279 => 89,  268 => 84,  262 => 84,  257 => 83,  249 => 73,  234 => 71,  229 => 68,  214 => 61,  212 => 60,  209 => 64,  191 => 63,  180 => 50,  175 => 47,  169 => 45,  164 => 43,  158 => 43,  155 => 50,  152 => 36,  149 => 48,  131 => 47,  127 => 45,  123 => 32,  117 => 42,  110 => 39,  104 => 38,  100 => 37,  95 => 24,  92 => 35,  87 => 19,  81 => 15,  74 => 19,  68 => 27,  64 => 26,  59 => 25,  51 => 12,  48 => 8,  44 => 16,  37 => 6,  32 => 9,  29 => 5,  21 => 2,  19 => 1,);
    }
}
