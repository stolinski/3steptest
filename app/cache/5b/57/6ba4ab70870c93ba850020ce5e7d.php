<?php

/* _recordfooter.twig */
class __TwigTemplate_5b576ba4ab70870c93ba850020ce5e7d extends Twig_Template
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
        return array (  39 => 8,  35 => 7,  27 => 3,  22 => 3,  189 => 24,  173 => 21,  169 => 19,  150 => 15,  141 => 14,  130 => 13,  94 => 11,  88 => 9,  72 => 5,  61 => 4,  37 => 2,  172 => 79,  165 => 77,  156 => 75,  131 => 59,  117 => 49,  108 => 42,  99 => 33,  93 => 31,  81 => 6,  59 => 21,  54 => 16,  46 => 15,  40 => 3,  33 => 13,  30 => 4,  162 => 76,  153 => 54,  151 => 73,  140 => 64,  137 => 63,  118 => 38,  115 => 37,  112 => 12,  105 => 34,  98 => 32,  91 => 10,  87 => 30,  84 => 27,  76 => 25,  71 => 24,  68 => 21,  65 => 22,  56 => 18,  52 => 16,  34 => 15,  31 => 14,  21 => 2,  19 => 2,);
    }
}
