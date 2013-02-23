<?php

/* dashboard.twig */
class __TwigTemplate_4ae6f7b9158fb6a4c6d661d9f30f7a8b extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span8\">

        <h1>Dashboard</h1>

";
        // line 8
        if (isset($context["suggestloripsum"])) { $_suggestloripsum_ = $context["suggestloripsum"]; } else { $_suggestloripsum_ = null; }
        if ($_suggestloripsum_) {
            // line 9
            echo "
    <div class=\"alert alert-info\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        It seems there's no content in the database. To get started quickly, add some <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prefill"), "html", null, true);
            echo "\">Lorem Ipsum dummy content</a>.
    </div>

";
        }
        // line 16
        echo "
    <div class=\"quicklinks\">
    ";
        // line 18
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "config"), "contenttypes")) > 3)) {
            // line 19
            echo "        <div class=\"btn-group\">
          <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            Add &hellip;
            <span class=\"caret\"></span>
          </a>
        <ul class=\"dropdown-menu\">
            ";
            // line 25
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "config"), "contenttypes"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 26
                echo "            ";
                if (isset($context["contenttypeslug"])) { $_contenttypeslug_ = $context["contenttypeslug"]; } else { $_contenttypeslug_ = null; }
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $_contenttypeslug_))) {
                    // line 27
                    echo "            <li><a href=\"";
                    if (isset($context["contenttypeslug"])) { $_contenttypeslug_ = $context["contenttypeslug"]; } else { $_contenttypeslug_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $_contenttypeslug_, "id" => "")), "html", null, true);
                    echo "\">
                <i class=\"icon-plus\"></i> New ";
                    // line 28
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
                    echo "
            </a></li>
            ";
                }
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "        </ul>
    </div>
    ";
        } else {
            // line 35
            echo "        <div class=\"btn-group\">
        ";
            // line 36
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "config"), "contenttypes"));
            foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
                // line 37
                echo "            ";
                if (isset($context["contenttypeslug"])) { $_contenttypeslug_ = $context["contenttypeslug"]; } else { $_contenttypeslug_ = null; }
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $_contenttypeslug_))) {
                    // line 38
                    echo "            <a class=\"btn\" href=\"";
                    if (isset($context["contenttypeslug"])) { $_contenttypeslug_ = $context["contenttypeslug"]; } else { $_contenttypeslug_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $_contenttypeslug_, "id" => "")), "html", null, true);
                    echo "\">
                <i class=\"icon-plus\"></i> New ";
                    // line 39
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
                    echo "
            </a>
            ";
                }
                // line 42
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "        </div>
    ";
        }
        // line 45
        echo "    </div>

    ";
        // line 47
        if (isset($context["latest"])) { $_latest_ = $context["latest"]; } else { $_latest_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_latest_);
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
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 48
            echo "
        ";
            // line 49
            if (isset($context["multiplecontent"])) { $_multiplecontent_ = $context["multiplecontent"]; } else { $_multiplecontent_ = null; }
            if ($_multiplecontent_) {
                // line 50
                echo "
            <h3>Latest ";
                // line 51
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                echo twig_escape_filter($this->env, $_contenttype_, "html", null, true);
                echo ".
                <span>
                    <a href=\"";
                // line 53
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => $_contenttype_)), "html", null, true);
                echo "\" class='morelink'>
                        More ";
                // line 54
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                echo twig_escape_filter($this->env, $_contenttype_, "html", null, true);
                echo " »
                    </a>
                    <a href=\"";
                // line 56
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $_contenttype_, "id" => "")), "html", null, true);
                echo "\" class='morelink'>
                        New ";
                // line 57
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "contenttypes"), $_contenttype_, array(), "array"), "singular_name"), "html", null, true);
                echo "
                    </a>
                </span>
            </h3>

            <table class='dashboardlisting'>
                ";
                // line 63
                if (isset($context["multiplecontent"])) { $_multiplecontent_ = $context["multiplecontent"]; } else { $_multiplecontent_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_multiplecontent_);
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
                    // line 64
                    echo "
                    ";
                    // line 65
                    $this->env->loadTemplate("_sub_contentrow.twig")->display(array_merge($context, array("excerptlength" => 280, "thumbsize" => 54, "compact" => true)));
                    // line 66
                    echo "
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 68
                echo "            </table>

        ";
            }
            // line 71
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 73
        echo "

    </div><!-- /span8 -->

    <aside class=\"span4\">

    ";
        // line 79
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("dashboardnews"));
        echo "

    ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->widget($this->env, "dashboard", "right_first"), "html", null, true);
        echo "

    <div id=\"latestactivity\">
        ";
        // line 84
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("latestactivity"));
        echo "
    </div>
    <div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>

    </aside><!-- /span4 -->
</div>


";
        // line 92
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 92,  268 => 84,  262 => 81,  257 => 79,  249 => 73,  234 => 71,  229 => 68,  214 => 66,  212 => 65,  209 => 64,  191 => 63,  180 => 57,  175 => 56,  169 => 54,  164 => 53,  158 => 51,  155 => 50,  152 => 49,  149 => 48,  131 => 47,  127 => 45,  123 => 43,  117 => 42,  110 => 39,  104 => 38,  100 => 37,  95 => 36,  92 => 35,  87 => 32,  81 => 31,  74 => 28,  68 => 27,  64 => 26,  59 => 25,  51 => 19,  48 => 18,  44 => 16,  37 => 12,  32 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
