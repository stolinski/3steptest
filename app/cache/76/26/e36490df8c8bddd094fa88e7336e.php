<?php

/* _footer.twig */
class __TwigTemplate_7626e36490df8c8bddd094fa88e7336e extends Twig_Template
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
<!-- Footer -->

<footer class=\"row\">
    <div class=\"twelve columns\">
        <hr />
        <div class=\"row\">
            <div class=\"six columns\">
                <p>This website is <a href=\"http://bolt.cm\" target=\"_blank\" title=\"Sophisticated, lightweight & simple CMS.\">
                    Built with Bolt</a>.</p>
            </div>
            <div class=\"six columns\">
                <ul class=\"link-list right\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->menu($this->env), "html", null, true);
        echo "
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- End Footer -->




</div>

</body>
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
        return array (  145 => 56,  129 => 52,  126 => 51,  116 => 49,  104 => 47,  92 => 44,  89 => 43,  85 => 42,  77 => 40,  74 => 39,  38 => 13,  26 => 8,  186 => 50,  181 => 48,  167 => 45,  155 => 43,  147 => 39,  143 => 38,  139 => 37,  135 => 34,  114 => 33,  101 => 29,  97 => 28,  86 => 24,  73 => 21,  69 => 28,  62 => 17,  49 => 13,  45 => 11,  25 => 3,  102 => 8,  96 => 7,  82 => 41,  47 => 4,  41 => 14,  39 => 8,  35 => 7,  27 => 3,  22 => 2,  189 => 24,  173 => 46,  169 => 19,  150 => 15,  141 => 14,  130 => 13,  94 => 26,  88 => 9,  72 => 5,  61 => 4,  37 => 8,  172 => 79,  165 => 77,  156 => 75,  131 => 59,  117 => 49,  108 => 32,  99 => 33,  93 => 31,  81 => 6,  59 => 20,  54 => 16,  46 => 15,  40 => 9,  33 => 13,  30 => 5,  162 => 76,  153 => 54,  151 => 42,  140 => 64,  137 => 63,  118 => 38,  115 => 37,  112 => 12,  105 => 31,  98 => 46,  91 => 10,  87 => 30,  84 => 27,  76 => 25,  71 => 24,  68 => 21,  65 => 5,  56 => 15,  52 => 17,  34 => 14,  31 => 9,  21 => 2,  19 => 1,);
    }
}
