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
            <a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=scott%2etolinski%40gmail%2ecom&lc=US&item_name=3%20Step%20Test%20Prep&amount=10%2e00&currency_code=USD&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted\" class=\"btn donationdl\" id=\"donationdl\">Download<br /><span>with donation</span></a>
            <a herf=\"#\" class=\"btn freedl\" id=\"freedl\">Download<br /><span>for free</span></a>
        </div>
        <div class=\"paypal-form\">
            <h3>Select Your Donation</h3>
            <input type=\"radio\" name=\"r\" id=\"r1\" onchange=\"disableTxt()\" />\$5<br/>
            <input type=\"radio\" name=\"r\" id=\"r2\" onchange=\"disableTxt()\" />\$10<br/>
            <input type=\"radio\" name=\"r\" id=\"r2\" onchange=\"disableTxt()\" checked=\"checked\" />\$15<br/>
            <input type=\"radio\" name=\"r\" id=\"r2\" onchange=\"disableTxt()\" checked=\"checked\" />\$25<br/>
            <input type=\"radio\" name=\"r\" id=\"r3\" onchange=\"enableTxt()\" /><input placeholder=\"Enter Custom Amount\" type=\"text\" name=\"r\" id=\"other\" disabled=\"disabled\" />
            <a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=scott%2etolinski%40gmail%2ecom&lc=US&item_name=3%20Step%20Test%20Prep&amount=15%2e00&currency_code=USD&no_note=0&cn=Add%20special%20instructions%20to%20the%20seller%3a&no_shipping=2&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted\">Donate</a>
        </div>
    </div>

</div>

<!-- End Main Content and Sidebar -->



";
        // line 33
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
        return array (  58 => 33,  32 => 11,  21 => 2,  19 => 1,);
    }
}
