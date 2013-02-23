<?php

/* _footer.twig */
class __TwigTemplate_f679c121ba6f45626360dcdce1e35ad1 extends Twig_Template
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
    </div><!-- /container-fluid -->
</div> <!-- /container -->

<br><br>

<footer id=\"bolt-footer\" class=\"hidden-phone\">
    <i class=\"icon-cog\"></i> <b>Bolt ";
        // line 8
        if (isset($context["bolt_version"])) { $_bolt_version_ = $context["bolt_version"]; } else { $_bolt_version_ = null; }
        echo twig_escape_filter($this->env, $_bolt_version_, "html", null, true);
        echo "</b>: Sophisticated, lightweight & simple CMS -
    <i class=\"icon-heart\"></i > <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about"), "html", null, true);
        echo "\">About</a> -
    <i class=\"icon-external-link\"> </i><a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
</footer>

</body>

<script>
    var path = \"";
        // line 16
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "bolt"), "html", null, true);
        echo "\"; var asyncpath = \"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "async"), "html", null, true);
        echo "\"; var apppath = \"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "\";
    var wysiwyg = { images: ";
        // line 17
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_config_, "general"), "wysiwyg_images")), "html", null, true);
        echo ", tables: ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_config_, "general"), "wysiwyg_tables")), "html", null, true);
        echo ", anchor: ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_config_, "general"), "wysiwyg_anchor")), "html", null, true);
        echo ", fontcolor: ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_config_, "general"), "wysiwyg_fontcolor")), "html", null, true);
        echo ", align: ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_config_, "general"), "wysiwyg_align")), "html", null, true);
        echo ", subsuper: ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_config_, "general"), "wysiwyg_subsuper")), "html", null, true);
        echo ", embed: ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_config_, "general"), "wysiwyg_embed")), "html", null, true);
        echo " };
</script>

</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  89 => 21,  82 => 19,  52 => 12,  49 => 11,  43 => 16,  38 => 8,  33 => 9,  30 => 6,  25 => 5,  333 => 89,  327 => 88,  321 => 86,  314 => 85,  308 => 83,  297 => 81,  292 => 80,  287 => 79,  281 => 77,  275 => 75,  251 => 69,  240 => 67,  218 => 61,  205 => 57,  198 => 55,  192 => 53,  183 => 51,  177 => 49,  170 => 44,  162 => 40,  159 => 39,  156 => 38,  148 => 34,  141 => 32,  115 => 28,  109 => 26,  98 => 23,  78 => 16,  75 => 17,  54 => 17,  22 => 2,  266 => 73,  260 => 71,  241 => 74,  223 => 62,  217 => 62,  208 => 59,  206 => 58,  202 => 56,  196 => 54,  193 => 53,  187 => 51,  184 => 50,  178 => 48,  167 => 44,  157 => 39,  147 => 35,  142 => 33,  138 => 31,  135 => 31,  133 => 30,  121 => 25,  119 => 24,  113 => 20,  99 => 23,  96 => 18,  91 => 17,  86 => 16,  76 => 14,  70 => 13,  66 => 12,  26 => 4,  23 => 3,  305 => 97,  301 => 82,  291 => 93,  286 => 92,  282 => 90,  276 => 88,  272 => 86,  253 => 78,  250 => 77,  247 => 79,  243 => 68,  233 => 64,  228 => 63,  224 => 72,  221 => 71,  210 => 63,  199 => 60,  195 => 59,  186 => 52,  182 => 51,  173 => 46,  168 => 45,  163 => 44,  153 => 42,  146 => 40,  140 => 37,  134 => 35,  128 => 33,  118 => 29,  112 => 27,  106 => 25,  101 => 24,  90 => 20,  84 => 21,  79 => 20,  69 => 18,  63 => 16,  57 => 11,  46 => 10,  41 => 7,  36 => 6,  27 => 7,  279 => 89,  268 => 84,  262 => 84,  257 => 83,  249 => 73,  234 => 71,  229 => 68,  214 => 61,  212 => 60,  209 => 64,  191 => 63,  180 => 50,  175 => 47,  169 => 45,  164 => 43,  158 => 43,  155 => 50,  152 => 36,  149 => 48,  131 => 47,  127 => 30,  123 => 28,  117 => 42,  110 => 39,  104 => 38,  100 => 37,  95 => 24,  92 => 35,  87 => 19,  81 => 15,  74 => 19,  68 => 15,  64 => 26,  59 => 13,  51 => 12,  48 => 8,  44 => 16,  37 => 6,  32 => 9,  29 => 5,  21 => 2,  19 => 1,);
    }
}
