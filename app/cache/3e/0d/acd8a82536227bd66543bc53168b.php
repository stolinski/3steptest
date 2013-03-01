<?php

/* index.twig */
class __TwigTemplate_3e0dacd8a82536227bd66543bc53168b extends Twig_Template
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
    <div class=\"twelve columns\" role=\"content\">
        <h1 class=\"site-title\">";
        // line 11
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "config"), "general"), "sitename"), "html", null, true);
        echo "</h1>
        <div class=\"downloads\">
            <a href=\"#\" class=\"btn donationdl\" id=\"donationdl\">Download<br /><span>with donation</span></a>
            <span class=\"or\"><em>or</em></span>
            <a herf=\"#\" class=\"btn freedl\" id=\"freedl\">Download<br /><span>for free</span></a>
        </div>
        <div class=\"paypal-form\">
            <h3>Select Your Donation</h3>
            <div class=\"donation-fields\">
                <div class=\"value\">
                    <input value=\"5\" type=\"radio\" name=\"r\" id=\"r1\" onchange=\"disableTxt()\" />\$5
                </div>
                <div class=\"value\">
                    <input value=\"10\"  type=\"radio\" name=\"r\" id=\"r2\" onchange=\"disableTxt()\" />\$10
                </div>
                <div class=\"value\">
                    <input value=\"15\" type=\"radio\" name=\"r\" id=\"r2\" onchange=\"disableTxt()\" checked=\"checked\" />\$15
                </div>
                <div class=\"value\">
                    <input value=\"25\"  type=\"radio\" name=\"r\" id=\"r2\" onchange=\"disableTxt()\" />\$25
                </div>
                <div class=\"value\">
                     <input value=\"5\" type=\"radio\" name=\"r\" id=\"r3\" onchange=\"enableTxt()\" /><input placeholder=\"Enter Custom Amount\" type=\"text\" name=\"r\" id=\"other\" disabled=\"disabled\" />
                </div>
                    <a class=\"btn donationdl\" id=\"donate\" href=\"#\">Donate &amp; Download</a>
            </div>
        </div>
    </div>

</div>

<!-- End Main Content and Sidebar -->



";
        // line 46
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 46,  32 => 11,  21 => 2,  19 => 1,);
    }
}
