<?php

/* overview.twig */
class __TwigTemplate_d32783fbe967e870db9c74260e654d0d extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "content")));
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span9\">

        <h1>Overview » ";
        // line 6
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "name"), "html", null, true);
        echo " <span>";
        if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
        if ((array_key_exists("pages", $context) && ($this->getAttribute($_pager_, "totalpages") > 1))) {
            echo "Page: ";
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pager_, "current"), "html", null, true);
            echo "/";
            if (isset($context["pager"])) { $_pager_ = $context["pager"]; } else { $_pager_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_pager_, "totalpages"), "html", null, true);
        }
        echo "</span></h1>

        ";
        // line 8
        $context["lastgroup"] = "----";
        // line 9
        echo "
    <table class='dashboardlisting'>

        ";
        // line 12
        if (isset($context["multiplecontent"])) { $_multiplecontent_ = $context["multiplecontent"]; } else { $_multiplecontent_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_multiplecontent_);
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 13
            echo "
            ";
            // line 15
            echo "            ";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if (isset($context["lastgroup"])) { $_lastgroup_ = $context["lastgroup"]; } else { $_lastgroup_ = null; }
            if ((($this->getAttribute($_content_, "group", array(), "any", true, true) && (!($this->getAttribute($_content_, "group") === false))) && ($this->getAttribute($_content_, "group") != $_lastgroup_))) {
                // line 16
                echo "                <tr class=\"grouping\"><th colspan=\"5\"><h3>";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if ($this->getAttribute($_content_, "group")) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_content_, "group"), "html", null, true);
                } else {
                    echo "(no group)";
                }
                echo "</h3></th></tr>
            ";
            }
            // line 18
            echo "
            ";
            // line 20
            echo "            ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if (isset($context["lastgroup"])) { $_lastgroup_ = $context["lastgroup"]; } else { $_lastgroup_ = null; }
            if (($this->getAttribute($_loop_, "first") || ($this->getAttribute($_content_, "group", array(), "any", true, true) && ($this->getAttribute($_content_, "group") != $_lastgroup_)))) {
                // line 21
                echo "                ";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                $context["lastgroup"] = $this->getAttribute($_content_, "group");
                // line 22
                echo "                ";
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "all")))) {
                    // line 23
                    echo "                    ";
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "all"), "filter")) . "&");
                    // line 24
                    echo "                ";
                } else {
                    // line 25
                    echo "                    ";
                    $context["filter"] = "";
                    // line 26
                    echo "                ";
                }
                // line 27
                echo "
                ";
                // line 28
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                $context["link"] = (("?" . $_filter_) . "order=");
                // line 29
                echo "                <tr>
                    <th class=\"hide-phone\"><a href='";
                // line 30
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                echo "id ";
                if (($this->env->getExtension('Bolt')->request("order") == "id ASC")) {
                    echo "DESC";
                } else {
                    echo "ASC";
                }
                echo "'>#</a></th>

                    <th style=\"width:80%\"><a href='";
                // line 32
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                echo "title ";
                if (($this->env->getExtension('Bolt')->request("order") == "title ASC")) {
                    echo "DESC";
                } else {
                    echo "ASC";
                }
                echo "'>Title / Excerpt</a></th>
                    <th>&nbsp;</th>
                    <th class='username hide-phone'><a href='";
                // line 34
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo twig_escape_filter($this->env, $_link_, "html", null, true);
                echo "datecreated ";
                if (($this->env->getExtension('Bolt')->request("order") == "datecreated ASC")) {
                    echo "DESC";
                } else {
                    echo "ASC";
                }
                echo "'>Meta</a></th>
                    <th><a href='?'>Actions</a></th>
                </tr>
            ";
            }
            // line 38
            echo "
            ";
            // line 39
            $this->env->loadTemplate("_sub_contentrow.twig")->display(array_merge($context, array("excerptlength" => 380, "thumbsize" => 80, "compact" => false)));
            // line 40
            echo "
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            No ";
            if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "name"), "html", null, true);
            echo " available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "    </table>

    ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "

    </div><!-- /span9 -->
    <aside class=\"span3\">

    <section>
    <h2>Actions for ";
        // line 52
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "name"), "html", null, true);
        echo ":</h2>

    <a class=\"btn\" href=\"";
        // line 54
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($_contenttype_, "slug"), "id" => "")), "html", null, true);
        echo "\">
        <i class=\"icon-plus\"></i> New ";
        // line 55
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
        echo "
    </a>
    ";
        // line 57
        if (($this->env->getExtension('Bolt')->request("filter") || $this->env->getExtension('Bolt')->request("order"))) {
            // line 58
            echo "    <a class=\"btn\" href=\"?\">Clear sort/filter</a>
    ";
        }
        // line 60
        echo "
    <h2>Filtering:</h2>

<form class=\"form-inline\">
  <input type=\"text\" class=\"input-small\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->request("filter"), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\">
  <button type=\"submit\" class=\"btn\">Filter</button>
      ";
        // line 66
        if ($this->env->getExtension('Bolt')->request("filter")) {
            echo "<p><a href=\"?\">Clear filter</a></p>";
        }
        // line 67
        echo "</form>


    </section>

";
        // line 72
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $this->getAttribute($_contenttype_, "slug"))));
        echo "




    </aside>
</div>


";
        // line 81
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 81,  253 => 72,  246 => 67,  242 => 66,  237 => 64,  231 => 60,  227 => 58,  225 => 57,  219 => 55,  214 => 54,  208 => 52,  199 => 46,  195 => 44,  185 => 42,  171 => 40,  169 => 39,  166 => 38,  152 => 34,  140 => 32,  128 => 30,  125 => 29,  122 => 28,  119 => 27,  116 => 26,  113 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  92 => 20,  89 => 18,  77 => 16,  72 => 15,  69 => 13,  50 => 12,  45 => 9,  43 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
