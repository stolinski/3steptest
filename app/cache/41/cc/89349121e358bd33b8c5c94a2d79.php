<?php

/* _aside.twig */
class __TwigTemplate_41cc89349121e358bd33b8c5c94a2d79 extends Twig_Template
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
        echo "<!-- Sidebar -->

<aside class=\"four columns\">

    <div class=\"panel\">
        ";
        // line 8
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['about'] =         $template_storage->getContent("page/about", array (
) );
        // line 9
        echo "
        ";
        // line 12
        echo "        ";
        if (isset($context["about"])) { $_about_ = $context["about"]; } else { $_about_ = null; }
        if ($this->getAttribute($_about_, "title", array(), "any", true, true)) {
            // line 13
            echo "
            <h5>";
            // line 14
            if (isset($context["about"])) { $_about_ = $context["about"]; } else { $_about_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_about_, "title"), "html", null, true);
            echo "</h5>
            ";
            // line 15
            if (isset($context["about"])) { $_about_ = $context["about"]; } else { $_about_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_about_, "teaser"), "html", null, true);
            echo "

            <a href=\"";
            // line 17
            if (isset($context["about"])) { $_about_ = $context["about"]; } else { $_about_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_about_, "link"), "html", null, true);
            echo "\">Read more &raquo;</a>

        ";
        } else {
            // line 20
            echo "
            <h5>Alas, no about!</h5>

            <p>If there was a Page with 'about' for a slug, it would've been shown
                here. But there isn't one, so that's why you're seeing this
                placeholder.</p>

        ";
        }
        // line 28
        echo "
    </div>

    ";
        // line 39
        echo "
    ";
        // line 40
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "config"), "contenttypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["ct"]) {
            // line 41
            echo "
        ";
            // line 42
            $template_storage = new Bolt\Storage($context['app']);
            $context['records'] =             $template_storage->getContent(($this->getAttribute($this->getContext($context, "ct"), "slug") . "/latest/5"), array (
) );
            // line 43
            echo "
        <h5>Recent ";
            // line 44
            if (isset($context["ct"])) { $_ct_ = $context["ct"]; } else { $_ct_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_ct_, "name"), "html", null, true);
            echo "</h5>
        <ul>
            ";
            // line 46
            if (isset($context["records"])) { $_records_ = $context["records"]; } else { $_records_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_records_);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 47
                echo "                <li><a href=\"";
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_record_, "link"), "html", null, true);
                echo "\">";
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_record_, "title"), "html", null, true);
                echo "</a></li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 49
                echo "                <li>No recent ";
                if (isset($context["ct"])) { $_ct_ = $context["ct"]; } else { $_ct_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_ct_, "name"), "html", null, true);
                echo ".</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "        </ul>
        <p><a href=\"";
            // line 52
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
            if (isset($context["ct"])) { $_ct_ = $context["ct"]; } else { $_ct_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_ct_, "slug"), "html", null, true);
            echo "\">";
            if (isset($context["ct"])) { $_ct_ = $context["ct"]; } else { $_ct_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_ct_, "name"), "html", null, true);
            echo " overview &raquo;</a></p>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ct'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "

</aside>

<!-- End Sidebar -->
";
    }

    public function getTemplateName()
    {
        return "_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  129 => 52,  126 => 51,  116 => 49,  104 => 47,  92 => 44,  89 => 43,  85 => 42,  77 => 40,  74 => 39,  38 => 13,  26 => 8,  186 => 50,  181 => 48,  167 => 45,  155 => 43,  147 => 39,  143 => 38,  139 => 37,  135 => 34,  114 => 33,  101 => 29,  97 => 28,  86 => 24,  73 => 21,  69 => 28,  62 => 17,  49 => 13,  45 => 11,  25 => 3,  102 => 8,  96 => 7,  82 => 41,  47 => 4,  41 => 14,  39 => 8,  35 => 7,  27 => 3,  22 => 2,  189 => 24,  173 => 46,  169 => 19,  150 => 15,  141 => 14,  130 => 13,  94 => 26,  88 => 9,  72 => 5,  61 => 4,  37 => 8,  172 => 79,  165 => 77,  156 => 75,  131 => 59,  117 => 49,  108 => 32,  99 => 33,  93 => 31,  81 => 6,  59 => 20,  54 => 16,  46 => 15,  40 => 9,  33 => 13,  30 => 5,  162 => 76,  153 => 54,  151 => 42,  140 => 64,  137 => 63,  118 => 38,  115 => 37,  112 => 12,  105 => 31,  98 => 46,  91 => 10,  87 => 30,  84 => 27,  76 => 25,  71 => 24,  68 => 21,  65 => 5,  56 => 15,  52 => 17,  34 => 12,  31 => 9,  21 => 2,  19 => 1,);
    }
}
