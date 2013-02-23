<?php

/* _recordfooter.twig */
class __TwigTemplate_2dfecd23cf87fe071f6cca7481649d38 extends Twig_Template
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
        // line 2
        echo "<h6>
    Written by <em>";
        // line 3
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_record_, "user"), "displayname"), "html", null, true);
        echo "</em> on ";
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        echo $this->env->getExtension('Bolt')->localedatetime($this->getAttribute($_record_, "datepublish"), "%A %B %e, %Y");
        echo " <br>
    <a href=\"";
        // line 4
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_record_, "link"), "html", null, true);
        echo "\">Permalink</a> -
    ";
        // line 7
        echo "    ";
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $this->env->loadTemplate("_sub_taxonomylinks.twig")->display(array_merge($context, array("record" => $_record_)));
        // line 8
        echo "</h6>
";
    }

    public function getTemplateName()
    {
        return "_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  27 => 3,  22 => 3,  189 => 24,  173 => 21,  169 => 19,  141 => 14,  130 => 13,  112 => 12,  94 => 11,  91 => 10,  88 => 9,  37 => 2,  172 => 79,  165 => 77,  162 => 76,  156 => 75,  151 => 73,  140 => 64,  137 => 63,  131 => 59,  117 => 49,  108 => 42,  99 => 33,  93 => 31,  87 => 30,  81 => 6,  76 => 25,  71 => 24,  59 => 21,  54 => 16,  46 => 15,  40 => 3,  30 => 4,  161 => 62,  152 => 55,  150 => 15,  139 => 45,  129 => 43,  125 => 42,  122 => 41,  119 => 40,  109 => 38,  105 => 37,  102 => 36,  98 => 34,  95 => 33,  89 => 31,  86 => 30,  79 => 28,  72 => 5,  65 => 22,  61 => 4,  58 => 21,  50 => 17,  45 => 16,  42 => 15,  39 => 8,  33 => 13,  21 => 2,  19 => 2,);
    }
}
