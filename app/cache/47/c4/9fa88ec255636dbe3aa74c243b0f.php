<?php

/* listing.twig */
class __TwigTemplate_47c49fa88ec255636dbe3aa74c243b0f extends Twig_Template
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

\t";
        // line 14
        echo "
    ";
        // line 15
        if (isset($context["records"])) { $_records_ = $context["records"]; } else { $_records_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_records_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "    <article>

        <h2><a href=\"";
            // line 18
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "link"), "html", null, true);
            echo "\">";
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "title"), "html", null, true);
            echo "</a></h2>

        ";
            // line 20
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            if (($this->getAttribute($_record_, "image") != "")) {
                // line 21
                echo "        <div class=\"four columns imageholder\">
            <a href=\"";
                // line 22
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute($_record_, "image")), "html", null, true);
                echo "\">
                <img src=\"";
                // line 23
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($_record_, "image"), 400, 260), "html", null, true);
                echo "\">
            </a>
        </div>
        ";
            }
            // line 27
            echo "
        ";
            // line 29
            echo "        ";
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            if ($this->getAttribute($_record_, "introduction")) {
                // line 30
                echo "          ";
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_record_, "introduction"), "html", null, true);
                echo "
        ";
            } elseif ($this->getAttribute($_record_, "teaser")) {
                // line 32
                echo "          ";
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_record_, "teaser"), "html", null, true);
                echo "
        ";
            } else {
                // line 34
                echo "          <p>";
                if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_record_, "excerpt", array(0 => 300), "method"), "html", null, true);
                echo "</p>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            $this->env->loadTemplate("_recordfooter.twig")->display(array_merge($context, array("record" => $_record_)));
            // line 38
            echo "
    </article>

    <hr>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "
    ";
        // line 46
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->

    ";
        // line 53
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 54
        echo "
  </div>

  <!-- End Main Content and Sidebar -->



";
        // line 61
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  153 => 54,  151 => 53,  140 => 46,  137 => 44,  118 => 38,  115 => 37,  112 => 36,  105 => 34,  98 => 32,  91 => 30,  87 => 29,  84 => 27,  76 => 23,  71 => 22,  68 => 21,  65 => 20,  56 => 18,  52 => 16,  34 => 15,  31 => 14,  21 => 2,  19 => 1,);
    }
}
