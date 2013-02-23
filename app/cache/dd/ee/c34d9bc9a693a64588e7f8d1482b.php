<?php

/* _sub_pager.twig */
class __TwigTemplate_ddeec34d9bc9a693a64588e7f8d1482b extends Twig_Template
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
                echo "\"><i class=\"icon-angle-left\" style=\"font-weight: bold;\"></i></a></li>
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
                echo "\"><i class=\"icon-double-angle-left\" style=\"font-weight: bold;\"></i> 1</a></li>
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
                echo " <i class=\"icon-double-angle-right\" style=\"font-weight: bold;\"></i></a></li>
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
                echo "\"><i class=\"icon-angle-right\" style=\"font-weight: bold;\"></i></a></li>
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
        return array (  186 => 50,  181 => 48,  173 => 46,  167 => 45,  155 => 43,  151 => 42,  147 => 39,  143 => 38,  139 => 37,  135 => 34,  114 => 33,  108 => 32,  105 => 31,  101 => 29,  97 => 28,  94 => 26,  86 => 24,  82 => 23,  73 => 21,  62 => 17,  59 => 16,  56 => 15,  52 => 14,  49 => 13,  40 => 9,  37 => 8,  34 => 7,  30 => 5,  25 => 3,  22 => 2,  266 => 81,  253 => 72,  246 => 67,  242 => 66,  237 => 64,  231 => 60,  227 => 58,  225 => 57,  219 => 55,  214 => 54,  208 => 52,  199 => 46,  195 => 44,  185 => 42,  171 => 40,  169 => 39,  166 => 38,  152 => 34,  140 => 32,  128 => 30,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  92 => 20,  89 => 18,  77 => 16,  72 => 15,  69 => 20,  50 => 12,  45 => 11,  43 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
