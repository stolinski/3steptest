<?php

/* _sub_pager.twig */
class __TwigTemplate_9f00850b9bbb80b3b3a195361fbdc5c9 extends Twig_Template
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
";
        // line 2
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "all")))) {
            // line 3
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "all"), "filter")) . "&");
        } else {
            // line 5
            echo "    ";
            $context["filter"] = "";
        }
        // line 7
        echo "
";
        // line 8
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (twig_in_filter("order", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "all")))) {
            // line 9
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["order"] = (("order=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "all"), "order")) . "&");
        } else {
            // line 11
            echo "    ";
            $context["order"] = "";
        }
        // line 13
        echo "
";
        // line 14
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        $context["link"] = ((("?" . $_filter_) . $_order_) . "page=");
        // line 15
        echo "
";
        // line 16
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        if (($this->getAttribute($_pager_, "totalpages") > 1)) {
            // line 17
            echo "<div class=\"pagination pagination-centered ";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\">
  <ul>
";
            // line 20
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            if ((($this->getAttribute($_pager_, "current") > 1) && ($_class_ != "narrow"))) {
                // line 21
                echo "    <li><a href=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_pager_, "current") - 1), "html", null, true);
                echo "\">&lsaquo; </a></li>
";
            }
            // line 23
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            if (isset($context["surr"])) { $_surr_ = $context["surr"]; } else { $_surr_ = null; }
            if (($this->getAttribute($_pager_, "current") > ($_surr_ + 1))) {
                // line 24
                echo "    <li><a href=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                echo 1;
                echo "\">&laquo; 1</a></li>
";
            }
            // line 26
            echo "
";
            // line 28
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            if (isset($context["surr"])) { $_surr_ = $context["surr"]; } else { $_surr_ = null; }
            if (($this->getAttribute($_pager_, "current") > ($_surr_ + 2))) {
                // line 29
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 31
            echo "
";
            // line 32
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            if (isset($context["surr"])) { $_surr_ = $context["surr"]; } else { $_surr_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->env->getExtension('Bolt')->max(1, ($this->getAttribute($_pager_, "current") - $_surr_)), $this->env->getExtension('Bolt')->min(($this->getAttribute($_pager_, "current") + $_surr_), $this->getAttribute($_pager_, "totalpages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 33
                echo "    <li ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
                if (($_i_ == $this->getAttribute($_pager_, "current"))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $_i_, "html", null, true);
                echo "\">";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, $_i_, "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 34
            echo "    
    
";
            // line 37
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            if (isset($context["surr"])) { $_surr_ = $context["surr"]; } else { $_surr_ = null; }
            if (($this->getAttribute($_pager_, "current") < (($this->getAttribute($_pager_, "totalpages") - $_surr_) - 1))) {
                // line 38
                echo "    <li class=\"disabled\"><a href=\"#\">...</a></li>
";
            }
            // line 39
            echo "    
    
";
            // line 42
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            if (isset($context["surr"])) { $_surr_ = $context["surr"]; } else { $_surr_ = null; }
            if (($this->getAttribute($_pager_, "current") < ($this->getAttribute($_pager_, "totalpages") - $_surr_))) {
                // line 43
                echo "    <li><a href=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_pager_, "totalpages"), "html", null, true);
                echo "\">";
                if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_pager_, "totalpages"), "html", null, true);
                echo " &raquo; </a></li>
";
            }
            // line 45
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            if ((($this->getAttribute($_pager_, "current") < $this->getAttribute($_pager_, "totalpages")) && ($_class_ != "narrow"))) {
                echo "    
    <li><a href=\"";
                // line 46
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_pager_, "current") + 1), "html", null, true);
                echo "\">&rsaquo;</a></li>
";
            }
            // line 48
            echo "  </ul>
</div>
";
        }
        // line 50
        echo " 
";
    }

    public function getTemplateName()
    {
        return "_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 50,  181 => 48,  167 => 45,  155 => 43,  147 => 39,  143 => 38,  139 => 37,  135 => 34,  114 => 33,  101 => 29,  97 => 28,  86 => 24,  73 => 21,  69 => 20,  62 => 17,  49 => 13,  45 => 11,  25 => 3,  102 => 8,  96 => 7,  82 => 23,  47 => 4,  41 => 3,  39 => 8,  35 => 7,  27 => 3,  22 => 2,  189 => 24,  173 => 46,  169 => 19,  150 => 15,  141 => 14,  130 => 13,  94 => 26,  88 => 9,  72 => 5,  61 => 4,  37 => 8,  172 => 79,  165 => 77,  156 => 75,  131 => 59,  117 => 49,  108 => 32,  99 => 33,  93 => 31,  81 => 6,  59 => 16,  54 => 16,  46 => 15,  40 => 9,  33 => 13,  30 => 5,  162 => 76,  153 => 54,  151 => 42,  140 => 64,  137 => 63,  118 => 38,  115 => 37,  112 => 12,  105 => 31,  98 => 32,  91 => 10,  87 => 30,  84 => 27,  76 => 25,  71 => 24,  68 => 21,  65 => 5,  56 => 15,  52 => 14,  34 => 7,  31 => 14,  21 => 2,  19 => 1,);
    }
}
