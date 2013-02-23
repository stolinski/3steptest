<?php

/* _footer.twig */
class __TwigTemplate_91ab7254b6f63f5db8b0e4c5740eedc3 extends Twig_Template
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
        return array (  145 => 56,  126 => 51,  116 => 49,  104 => 47,  92 => 44,  85 => 42,  82 => 41,  77 => 40,  74 => 39,  69 => 28,  52 => 17,  41 => 14,  38 => 13,  34 => 14,  31 => 9,  26 => 8,  35 => 7,  27 => 3,  22 => 3,  189 => 24,  173 => 21,  169 => 19,  141 => 14,  130 => 13,  112 => 12,  94 => 11,  91 => 10,  88 => 9,  37 => 2,  172 => 79,  165 => 77,  162 => 76,  156 => 75,  151 => 73,  140 => 64,  137 => 63,  131 => 59,  117 => 49,  108 => 42,  99 => 33,  93 => 31,  87 => 30,  81 => 6,  76 => 25,  71 => 24,  59 => 20,  54 => 16,  46 => 15,  40 => 3,  30 => 4,  161 => 62,  152 => 55,  150 => 15,  139 => 45,  129 => 52,  125 => 42,  122 => 41,  119 => 40,  109 => 38,  105 => 37,  102 => 36,  98 => 46,  95 => 33,  89 => 43,  86 => 30,  79 => 28,  72 => 5,  65 => 22,  61 => 4,  58 => 21,  50 => 17,  45 => 16,  42 => 15,  39 => 8,  33 => 13,  21 => 2,  19 => 1,);
    }
}
