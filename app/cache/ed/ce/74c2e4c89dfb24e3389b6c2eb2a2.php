<?php

/* extensions.twig */
class __TwigTemplate_edce74c2e4c89dfb24e3389b6c2eb2a2 extends Twig_Template
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

<h1>";
        // line 4
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h1>

<div class=\"row-fluid\">

    <div class=\"span6\">
        <h2>Enabled extensions</h2>

        ";
        // line 11
        if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_extensions_);
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            if ($this->getAttribute($_extension_, "enabled")) {
                // line 12
                echo "
            ";
                // line 13
                if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
                $this->env->loadTemplate("_sub_extension.twig")->display(array_merge($context, array("extension" => $_extension_)));
                // line 14
                echo "
        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 16
            echo "            <p>No enabled extensions..</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "
    </div>


    <div class=\"span6\">
        <h2>Disabled extensions</h2>

        ";
        // line 25
        if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_extensions_);
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            if ((!$this->getAttribute($_extension_, "enabled"))) {
                // line 26
                echo "
            ";
                // line 27
                if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
                $this->env->loadTemplate("_sub_extension.twig")->display(array_merge($context, array("extension" => $_extension_)));
                // line 28
                echo "
        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 30
            echo "        <p>No disabled extensions..</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "

    </div>

</div>

    <div class=\"row-fluid\">

        <div class=\"span6\">
            <h4>Enabling extensions:</h4>
            <p>To enable extensions, add them to the <code>enabled_extensions</code> array in
                <code>config.yml</code>. You must use the exact name of the extension, as
                shown in the first label on the bottom row of its tile. Note that the names
                are <em>case sensitive</em>, to eliminate issues with the filesystem. </p>

            example:

            <pre><code>enabled_extensions: [ HelloWorld, GoogleAnalytics ]</code></pre>

        </div>

    </div>



    <div class=\"modal hide\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-body\">
            <p>&nbsp;</p>
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
        </div>
    </div>



";
        // line 68
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 68,  119 => 32,  112 => 30,  102 => 28,  99 => 27,  96 => 26,  82 => 25,  73 => 18,  66 => 16,  56 => 14,  53 => 13,  50 => 12,  36 => 11,  25 => 4,  21 => 2,  19 => 1,);
    }
}
