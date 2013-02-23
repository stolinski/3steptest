<?php

/* dashboard-activity.twig */
class __TwigTemplate_d3f41586bc30e24131989f3e00feb8e5 extends Twig_Template
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
        echo "
<section class=\"news\">
    <h2>Latest activity</h2>
    <ul class='activity'>
";
        // line 5
        if (isset($context["activity"])) { $_activity_ = $context["activity"]; } else { $_activity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_activity_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 6
            echo "    ";
            $context["username"] = "unknown";
            // line 7
            echo "    ";
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ($this->getAttribute($_users_, $this->getAttribute($_log_, "username"), array(), "any", true, true)) {
                // line 8
                echo "        ";
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                $context["username"] = $this->getAttribute($this->getAttribute($_users_, $this->getAttribute($_log_, "username")), "displayname");
                // line 9
                echo "    ";
            }
            // line 10
            echo "    <li>
        ";
            // line 11
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "code") == "save content")) {
                // line 12
                echo "            Saved ";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "contenttypes"), $this->getAttribute($_log_, "contenttype"), array(), "array"), "singular_name"), "html", null, true);
                echo "
            \"<strong>";
                // line 13
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "</strong>\" by <em>";
                if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
                echo twig_escape_filter($this->env, $_username_, "html", null, true);
                echo "</em>
        ";
            } elseif (($this->getAttribute($_log_, "code") == "login")) {
                // line 15
                echo "            <em>";
                if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
                echo twig_escape_filter($this->env, $_username_, "html", null, true);
                echo "</em> logged in
        ";
            } elseif (($this->getAttribute($_log_, "code") == "logout")) {
                // line 17
                echo "            <em>";
                if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
                echo twig_escape_filter($this->env, $_username_, "html", null, true);
                echo "</em> logged out
        ";
            } elseif (($this->getAttribute($_log_, "code") == "fixme")) {
                // line 19
                echo "            <b>Fixme:</b> ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
        ";
            } elseif (($this->getAttribute($_log_, "code") == "user")) {
                // line 21
                echo "            <b>";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "</b> by ";
                if (isset($context["username"])) { $_username_ = $context["username"]; } else { $_username_ = null; }
                echo twig_escape_filter($this->env, $_username_, "html", null, true);
                echo "
        ";
            } else {
                // line 23
                echo "            ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
        ";
            }
            // line 25
            echo "        <small>(<time class=\"moment\" datetime=\"";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_log_, "date"), "c"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "date"), "html", null, true);
            echo "\">";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "date"), "html", null, true);
            echo "</time>)</small>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "    </ul>

    <p style='text-align: right;'><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitylog"), "html", null, true);
        echo "\">more activity »</a></p>

</section>

";
    }

    public function getTemplateName()
    {
        return "dashboard-activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  82 => 19,  52 => 12,  49 => 11,  43 => 9,  38 => 8,  33 => 7,  30 => 6,  25 => 5,  333 => 89,  327 => 88,  321 => 86,  314 => 85,  308 => 83,  297 => 81,  292 => 80,  287 => 79,  281 => 77,  275 => 75,  251 => 69,  240 => 67,  218 => 61,  205 => 57,  198 => 55,  192 => 53,  183 => 51,  177 => 49,  170 => 44,  162 => 40,  159 => 39,  156 => 38,  148 => 34,  141 => 32,  115 => 28,  109 => 26,  98 => 23,  78 => 16,  75 => 17,  54 => 10,  22 => 2,  266 => 73,  260 => 71,  241 => 74,  223 => 62,  217 => 62,  208 => 59,  206 => 58,  202 => 56,  196 => 54,  193 => 53,  187 => 51,  184 => 50,  178 => 48,  167 => 44,  157 => 39,  147 => 35,  142 => 33,  138 => 31,  135 => 31,  133 => 30,  121 => 25,  119 => 24,  113 => 20,  99 => 23,  96 => 18,  91 => 17,  86 => 16,  76 => 14,  70 => 13,  66 => 12,  26 => 4,  23 => 3,  305 => 97,  301 => 82,  291 => 93,  286 => 92,  282 => 90,  276 => 88,  272 => 86,  253 => 78,  250 => 77,  247 => 79,  243 => 68,  233 => 64,  228 => 63,  224 => 72,  221 => 71,  210 => 63,  199 => 60,  195 => 59,  186 => 52,  182 => 51,  173 => 46,  168 => 45,  163 => 44,  153 => 42,  146 => 40,  140 => 37,  134 => 35,  128 => 33,  118 => 29,  112 => 27,  106 => 25,  101 => 24,  90 => 20,  84 => 21,  79 => 20,  69 => 18,  63 => 16,  57 => 11,  46 => 10,  41 => 7,  36 => 6,  27 => 7,  279 => 89,  268 => 84,  262 => 84,  257 => 83,  249 => 73,  234 => 71,  229 => 68,  214 => 61,  212 => 60,  209 => 64,  191 => 63,  180 => 50,  175 => 47,  169 => 45,  164 => 43,  158 => 43,  155 => 50,  152 => 36,  149 => 48,  131 => 47,  127 => 30,  123 => 28,  117 => 42,  110 => 39,  104 => 38,  100 => 37,  95 => 24,  92 => 35,  87 => 19,  81 => 15,  74 => 19,  68 => 15,  64 => 26,  59 => 13,  51 => 12,  48 => 8,  44 => 16,  37 => 6,  32 => 9,  29 => 5,  21 => 2,  19 => 1,);
    }
}
