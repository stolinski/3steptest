<?php

/* debugbar.twig */
class __TwigTemplate_7b460647af3907a2c7488e3d3bbfe831 extends Twig_Template
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
        echo "<div id='bolt-nipple'></div>

<div id='bolt-debugbar'>
    <ul>
        <li id='pd-bolt'><strong><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
        echo "\">Bolt ";
        if (isset($context["bolt_version"])) { $_bolt_version_ = $context["bolt_version"]; } else { $_bolt_version_ = null; }
        echo twig_escape_filter($this->env, $_bolt_version_, "html", null, true);
        echo "</a></strong><small>";
        if (isset($context["bolt_name"])) { $_bolt_name_ = $context["bolt_name"]; } else { $_bolt_name_ = null; }
        if ((array_key_exists("bolt_name", $context) && ($_bolt_name_ != ""))) {
            echo " - ";
            if (isset($context["bolt_name"])) { $_bolt_name_ = $context["bolt_name"]; } else { $_bolt_name_ = null; }
            echo twig_escape_filter($this->env, $_bolt_name_, "html", null, true);
        }
        echo "</small></li>
        <li id='pd-variables'><a href=\"#\" data-for=\"bolt-varpanel\">";
        // line 6
        if (isset($context["timetaken"])) { $_timetaken_ = $context["timetaken"]; } else { $_timetaken_ = null; }
        echo twig_escape_filter($this->env, $_timetaken_, "html", null, true);
        echo " s<span class='narrow'>ec / ";
        if (isset($context["maxmemtaken"])) { $_maxmemtaken_ = $context["maxmemtaken"]; } else { $_maxmemtaken_ = null; }
        echo twig_escape_filter($this->env, $_maxmemtaken_, "html", null, true);
        echo "</span></a></li>
        ";
        // line 7
        if (isset($context["editlink"])) { $_editlink_ = $context["editlink"]; } else { $_editlink_ = null; }
        if ((array_key_exists("frontend", $context) && ($_editlink_ != ""))) {
            // line 9
            echo "        <li id='pd-edit'><a href=\"";
            if (isset($context["editlink"])) { $_editlink_ = $context["editlink"]; } else { $_editlink_ = null; }
            echo twig_escape_filter($this->env, $_editlink_, "html", null, true);
            echo "\" data-for=\"bolt-editpanel\">Edit</a></li>
        ";
        }
        // line 11
        echo "
        <li id='pd-log'><a href=\"#\" data-for=\"bolt-logpanel\">Log<span class='narrow'> entries</span></a>
            <small>(";
        // line 13
        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $_log_), "html", null, true);
        echo ")</small></li>
        <li id='pd-server'><a href=\"#\" data-for=\"bolt-serverpanel\"><span class='narrow'>bolt.localhost</span><span class='narrowonly'>srv</span></a> <small>(";
        // line 14
        if (isset($context["servervars"])) { $_servervars_ = $context["servervars"]; } else { $_servervars_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_servervars_, "statuscode"), "html", null, true);
        echo ")</small></li>
        <li id='pd-queries'>
            ";
        // line 16
        if (isset($context["querycount"])) { $_querycount_ = $context["querycount"]; } else { $_querycount_ = null; }
        if (($_querycount_ == 0)) {
            // line 17
            echo "                No Q<span class='narrow'>ueries</span>
                ";
        } elseif (($_querycount_ == 1)) {
            // line 19
            echo "                <a href=\"#\" data-for=\"bolt-queriespanel\">1 Q<span class='narrow'>uery</span></a> <small>(";
            if (isset($context["querytime"])) { $_querytime_ = $context["querytime"]; } else { $_querytime_ = null; }
            echo twig_escape_filter($this->env, $_querytime_, "html", null, true);
            echo " sec)</small>
            ";
        } else {
            // line 21
            echo "                <a href=\"#\" data-for=\"bolt-queriespanel\">";
            if (isset($context["querycount"])) { $_querycount_ = $context["querycount"]; } else { $_querycount_ = null; }
            echo twig_escape_filter($this->env, $_querycount_, "html", null, true);
            echo " Q<span class='narrow'>ueries</span></a> <small>(";
            if (isset($context["querytime"])) { $_querytime_ = $context["querytime"]; } else { $_querytime_ = null; }
            echo twig_escape_filter($this->env, $_querytime_, "html", null, true);
            echo " sec)</small>
            ";
        }
        // line 22
        echo "</li>
    </ul>
</div>

";
        // line 31
        echo "
<div id='bolt-varpanel' class='bolt-debugpanel'>
<pre>
<strong>Time taken:</strong> ";
        // line 34
        if (isset($context["timetaken"])) { $_timetaken_ = $context["timetaken"]; } else { $_timetaken_ = null; }
        echo twig_escape_filter($this->env, $_timetaken_, "html", null, true);
        echo " sec. / <strong>Memory:</strong> ";
        if (isset($context["maxmemtaken"])) { $_maxmemtaken_ = $context["maxmemtaken"]; } else { $_maxmemtaken_ = null; }
        echo twig_escape_filter($this->env, $_maxmemtaken_, "html", null, true);
        echo " (peak) / ";
        if (isset($context["memtaken"])) { $_memtaken_ = $context["memtaken"]; } else { $_memtaken_ = null; }
        echo twig_escape_filter($this->env, $_memtaken_, "html", null, true);
        echo " (current).

";
        // line 36
        if (isset($context["logvalues"])) { $_logvalues_ = $context["logvalues"]; } else { $_logvalues_ = null; }
        if ((array_key_exists("frontend", $context) && $this->getAttribute($_logvalues_, "templatechosen", array(), "any", true, true))) {
            // line 37
            echo "<strong>Primary template: ";
            if (isset($context["logvalues"])) { $_logvalues_ = $context["logvalues"]; } else { $_logvalues_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_logvalues_, "templatechosen"), "html", null, true);
            echo "</strong>
";
            // line 38
            if (isset($context["logvalues"])) { $_logvalues_ = $context["logvalues"]; } else { $_logvalues_ = null; }
            if ($this->getAttribute($_logvalues_, "templateerror", array(), "any", true, true)) {
                if (isset($context["logvalues"])) { $_logvalues_ = $context["logvalues"]; } else { $_logvalues_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_logvalues_, "templateerror"), "html", null, true);
                echo "
";
            }
        }
        // line 41
        echo "
<strong>Used templates:</strong>
<pre>";
        // line 43
        if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_templates_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 44
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo ". ";
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            echo twig_escape_filter($this->env, $_template_, "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "
<strong>Route:</strong> ";
        // line 47
        if (isset($context["route"])) { $_route_ = $context["route"]; } else { $_route_ = null; }
        echo twig_escape_filter($this->env, $_route_, "html", null, true);
        echo "
<strong>Request URI:</strong> ";
        // line 48
        if (isset($context["servervars"])) { $_servervars_ = $context["servervars"]; } else { $_servervars_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_servervars_, "server <small>(\$_SERVER)</small>", array(), "array"), "REQUEST_URI", array(), "array"), "html", null, true);
        echo "
<strong>Parameters:</strong> ";
        // line 49
        if (isset($context["route_params"])) { $_route_params_ = $context["route_params"]; } else { $_route_params_ = null; }
        echo $this->env->getExtension('Bolt')->printDump($_route_params_);
        echo "
</pre>
</div>


<div id='bolt-queriespanel' class='bolt-debugpanel'>
<pre>";
        // line 55
        if (isset($context["queries"])) { $_queries_ = $context["queries"]; } else { $_queries_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_queries_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
            // line 56
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, sprintf("%03d", $this->getAttribute($_loop_, "index")), "html", null, true);
            echo ". <small ";
            if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
            if (($this->getAttribute($_query_, "duration") > 0.1)) {
                echo "class='longquery'";
            } elseif (($this->getAttribute($_query_, "duration") < 0.03)) {
                echo "class='fastquery'";
            }
            echo ">(";
            if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_query_, "duration"), "html", null, true);
            echo " sec.)</small> - ";
            if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_query_, "query"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "</pre>
</div>

<div id='bolt-logpanel' class='bolt-debugpanel'>
<pre>";
        // line 62
        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_log_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "<span class='level-";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "level", array(), "any", true, true)) {
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "level"), "html", null, true);
            } else {
                echo "unknown";
            }
            echo "'>";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo ". <b>";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "message"), "html", null, true);
            echo "</b></span>
in: ";
            // line 64
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "file"), "html", null, true);
            echo "::";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "line"), "html", null, true);
            echo " <small>(";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "username", array(), "any", true, true)) {
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "username"), "html", null, true);
                echo " -";
            }
            echo " ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_item_, "date"), "H:i:s"), "html", null, true);
            echo ")</small>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 66
        echo "</pre>
</div>


<div id='bolt-serverpanel' class='bolt-debugpanel'>
<pre>";
        // line 71
        if (isset($context["servervars"])) { $_servervars_ = $context["servervars"]; } else { $_servervars_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_servervars_);
        foreach ($context['_seq'] as $context["key"] => $context["var"]) {
            // line 72
            echo "<strong>";
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo $_key_;
            echo ":</strong>
";
            // line 73
            if (isset($context["var"])) { $_var_ = $context["var"]; } else { $_var_ = null; }
            echo $this->env->getExtension('Bolt')->printDump($_var_);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 75
        echo "</pre>
</div>

";
        // line 78
        if (array_key_exists("frontend", $context)) {
            // line 79
            echo "<script type=\"text/javascript\">!window.jQuery && document.write('<script src=\"";
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
            echo "view/js/jquery-1.9.1.min.js\"><\\/script>')</script>
";
        }
        // line 81
        echo "<script src=\"";
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/js/debugbar.js\"></script>
<link rel='stylesheet' href='";
        // line 82
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
        echo "view/css/debugbar.css' />
";
    }

    public function getTemplateName()
    {
        return "debugbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 82,  362 => 81,  355 => 79,  353 => 78,  348 => 75,  339 => 73,  333 => 72,  328 => 71,  321 => 66,  291 => 64,  274 => 63,  256 => 62,  250 => 58,  220 => 56,  202 => 55,  192 => 49,  187 => 48,  182 => 47,  179 => 46,  159 => 44,  141 => 43,  137 => 41,  128 => 38,  122 => 37,  119 => 36,  107 => 34,  102 => 31,  96 => 22,  86 => 21,  79 => 19,  75 => 17,  72 => 16,  66 => 14,  61 => 13,  57 => 11,  50 => 9,  47 => 7,  39 => 6,  25 => 5,  19 => 1,);
    }
}
