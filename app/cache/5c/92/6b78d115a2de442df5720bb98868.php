<?php

/* record.twig */
class __TwigTemplate_5c926b78d115a2de442df5720bb98868 extends Twig_Template
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
<!-- Main Page Content and Sidebar -->

<div class=\"row\" xmlns=\"http://www.w3.org/1999/html\">

    <!-- Main Blog Content -->
    <div class=\"eight columns\" role=\"content\">

        <article>

            <h2>";
        // line 12
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_record_, "title"), "html", null, true);
        echo "</h2>

            ";
        // line 14
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        if ($this->getAttribute($_record_, "subtitle")) {
            // line 15
            echo "                <h3>";
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "subtitle"), "html", null, true);
            echo "</h3>
            ";
        }
        // line 17
        echo "


            ";
        // line 20
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_record_, "values"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 21
            echo "
            ";
            // line 22
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if (!twig_in_filter($_key_, array(0 => "id", 1 => "slug", 2 => "datecreated", 3 => "datechanged", 4 => "datepublish", 5 => "username", 6 => "status", 7 => "title", 8 => "subtitle"))) {
                // line 23
                echo "
            ";
                // line 24
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if ((($this->getAttribute($_record_, "fieldtype", array(0 => $_key_), "method") == "image") && ($_value_ != ""))) {
                    // line 25
                    echo "
                ";
                    // line 26
                    if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                    if (($this->getAttribute($_record_, "image") != "")) {
                        // line 27
                        echo "                    <div class=\"six columns imageholder\">
                        <a href=\"";
                        // line 28
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($_value_), "html", null, true);
                        echo "\">
                            <img src=\"";
                        // line 29
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($_value_, 600, 480), "html", null, true);
                        echo "\">
                        </a>
                    </div>
                ";
                    }
                    // line 33
                    echo "

            ";
                } elseif ((($this->getAttribute($_record_, "fieldtype", array(0 => $_key_), "method") == "imagelist") && ($_value_ != ""))) {
                    // line 36
                    echo "
                ";
                    // line 41
                    echo "
                ";
                    // line 42
                    if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    $context["list"] = $this->getAttribute($_record_, $_key_);
                    // line 43
                    echo "
                ";
                    // line 44
                    if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_list_);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 45
                        echo "                    <a href=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($_item_, "filename")), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 46
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($_item_, "filename"), 100, 100), "html", null, true);
                        echo "\" alt=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                        echo "\" title=\"";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                        echo "\">
                    </a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 49
                    echo "
            ";
                } elseif ((($this->getAttribute($_record_, "fieldtype", array(0 => $_key_), "method") == "video") && ($this->getAttribute($_value_, "responsive") != ""))) {
                    // line 51
                    echo "
                ";
                    // line 52
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "responsive"), "html", null, true);
                    echo "

            ";
                } elseif ((($this->getAttribute($_record_, "fieldtype", array(0 => $_key_), "method") == "geolocation") && ($this->getAttribute($_value_, "latitude") != ""))) {
                    // line 55
                    echo "
                <div class='imageholder-wide'>
                    <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
                    // line 57
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "latitude"), "html", null, true);
                    echo ",";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "longitude"), "html", null, true);
                    echo "&zoom=14&size=617x300&sensor=false&markers=";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "latitude"), "html", null, true);
                    echo ",";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "longitude"), "html", null, true);
                    echo "\">
                </div>
                <p>";
                    // line 59
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_value_, "formatted_address"), "html", null, true);
                    echo "</p>

            ";
                } elseif (twig_in_filter($this->getAttribute($_record_, "fieldtype", array(0 => $_key_), "method"), array(0 => "html", 1 => "markdown", 2 => "textarea"))) {
                    // line 62
                    echo "
                ";
                    // line 63
                    if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_record_, $_key_), "html", null, true);
                    echo "

            ";
                } elseif ((!twig_in_filter($this->getAttribute($_record_, "fieldtype", array(0 => $_key_), "method"), array(0 => "templateselect")) && ($_value_ != ""))) {
                    // line 66
                    echo "
                <p><strong>";
                    // line 67
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo ": </strong>
                    ";
                    // line 68
                    if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_record_, $_key_), "html", null, true);
                    echo "
                </p>

            ";
                }
                // line 72
                echo "

            ";
            }
            // line 75
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
        echo "
            ";
        // line 78
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $this->env->loadTemplate("_recordfooter.twig")->display(array_merge($context, array("record" => $_record_)));
        // line 79
        echo "
            <p class=\"meta\">
                ";
        // line 81
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $context["previous"] = $this->getAttribute($_record_, "previous", array(0 => "id"), "method");
        // line 82
        echo "                ";
        if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
        if ($_previous_) {
            // line 83
            echo "                    <a href=\"";
            if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_previous_, "link"), "html", null, true);
            echo "\">&laquo; ";
            if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_previous_, "title"), "html", null, true);
            echo "</a>
                ";
        }
        // line 85
        echo "                -
                ";
        // line 86
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $context["next"] = $this->getAttribute($_record_, "next", array(0 => "id"), "method");
        // line 87
        echo "                ";
        if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
        if ($_next_) {
            // line 88
            echo "                    <a href=\"";
            if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_next_, "link"), "html", null, true);
            echo "\">";
            if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_next_, "title"), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 90
        echo "            </p>

        </article>


    </div>

    <!-- End Main Content -->

    ";
        // line 99
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 100
        echo "
</div>

<!-- End Main Content and Sidebar -->



";
        // line 107
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 107,  280 => 100,  278 => 99,  267 => 90,  257 => 88,  253 => 87,  250 => 86,  247 => 85,  237 => 83,  233 => 82,  230 => 81,  226 => 79,  223 => 78,  220 => 77,  213 => 75,  208 => 72,  199 => 68,  194 => 67,  191 => 66,  183 => 63,  180 => 62,  173 => 59,  158 => 57,  154 => 55,  147 => 52,  144 => 51,  140 => 49,  124 => 46,  118 => 45,  113 => 44,  110 => 43,  106 => 42,  103 => 41,  100 => 36,  95 => 33,  87 => 29,  82 => 28,  79 => 27,  76 => 26,  73 => 25,  68 => 24,  65 => 23,  62 => 22,  59 => 21,  54 => 20,  49 => 17,  42 => 15,  39 => 14,  33 => 12,  21 => 2,  19 => 1,);
    }
}
