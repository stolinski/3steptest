<?php

/* entry.twig */
class __TwigTemplate_63765fd0405c9fb22e824e5150099041 extends Twig_Template
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

<div class=\"row\">

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
        if (($this->getAttribute($_record_, "image") != "")) {
            // line 15
            echo "                <div class=\"four columns imageholder\">
                    <a href=\"";
            // line 16
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($_record_, "image")), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 17
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($_record_, "image"), 400, 260), "html", null, true);
            echo "\">
                    </a>
                </div>
            ";
        }
        // line 21
        echo "
            ";
        // line 23
        echo "            ";
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        if ($this->getAttribute($_record_, "introduction")) {
            // line 24
            echo "            ";
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "introduction"), "html", null, true);
            echo "
            ";
        } elseif ($this->getAttribute($_record_, "teaser")) {
            // line 26
            echo "                ";
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "teaser"), "html", null, true);
            echo "
            ";
        } else {
            // line 28
            echo "                <p>";
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "excerpt", array(0 => 1000), "method"), "html", null, true);
            echo "</p>
            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_record_, "body"), "html", null, true);
        echo "

            ";
        // line 33
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $this->env->loadTemplate("_recordfooter.twig")->display(array_merge($context, array("record" => $_record_)));
        // line 34
        echo "
            <p class=\"meta\">
                ";
        // line 36
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $context["previous"] = $this->getAttribute($_record_, "previous", array(0 => "id"), "method");
        // line 37
        echo "                ";
        if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
        if ($_previous_) {
            // line 38
            echo "                    <a href=\"";
            if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_previous_, "link"), "html", null, true);
            echo "\">&laquo; ";
            if (isset($context["previous"])) { $_previous_ = $context["previous"]; } else { $_previous_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_previous_, "title"), "html", null, true);
            echo "</a>
                ";
        }
        // line 40
        echo "                -
                ";
        // line 41
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        $context["next"] = $this->getAttribute($_record_, "next", array(0 => "id"), "method");
        // line 42
        echo "                ";
        if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
        if ($_next_) {
            // line 43
            echo "                    <a href=\"";
            if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_next_, "link"), "html", null, true);
            echo "\">";
            if (isset($context["next"])) { $_next_ = $context["next"]; } else { $_next_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_next_, "title"), "html", null, true);
            echo " &raquo;</a>
                ";
        }
        // line 45
        echo "            </p>

        </article>


    </div>

    <!-- End Main Content -->

    ";
        // line 54
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 55
        echo "
</div>

<!-- End Main Content and Sidebar -->



";
        // line 62
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "entry.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 62,  152 => 55,  150 => 54,  139 => 45,  129 => 43,  125 => 42,  122 => 41,  119 => 40,  109 => 38,  105 => 37,  102 => 36,  98 => 34,  95 => 33,  89 => 31,  86 => 30,  79 => 28,  72 => 26,  65 => 24,  61 => 23,  58 => 21,  50 => 17,  45 => 16,  42 => 15,  39 => 14,  33 => 12,  21 => 2,  19 => 1,);
    }
}
