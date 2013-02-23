<?php

/* _sub_editfields.twig */
class __TwigTemplate_c9e67684f4217c323a4c1d27eb63f1de extends Twig_Template
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
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_contenttype_, "fields"));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 2
            echo "
";
            // line 4
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "prefix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_field_, "prefix"))))) {
                // line 5
                echo "<div class='clearfix'>
    ";
                // line 6
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo $this->getAttribute($_field_, "prefix");
                echo "
</div>
";
            }
            // line 9
            echo "

";
            // line 12
            echo "
";
            // line 13
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if ((($this->getAttribute($_field_, "type") == "text") && ((!$this->getAttribute($_field_, "variant", array(), "any", true, true)) || ($this->getAttribute($_field_, "variant") == "")))) {
                // line 14
                echo "<label><b>
    ";
                // line 15
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                // line 16
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 17
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"
    value='";
                // line 18
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                echo "'
    class='";
                // line 19
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 21
            echo "
";
            // line 22
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (((($this->getAttribute($_field_, "type") == "text") && $this->getAttribute($_field_, "variant", array(), "any", true, true)) && ($this->getAttribute($_field_, "variant") == "inline"))) {
                // line 23
                echo "<label><b><span class='left'>
    ";
                // line 24
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                // line 25
                echo "</span></b></label>
<input type=\"text\" name=\"";
                // line 26
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"
    value='";
                // line 27
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                echo "'
    class='";
                // line 28
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo " narrow'>
";
            }
            // line 30
            echo "

";
            // line 33
            echo "
";
            // line 34
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "number")) {
                // line 35
                echo "    <label><b><span class='left'>
        ";
                // line 36
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                // line 37
                echo "    </span></b></label>
    <input type=\"number\" name=\"";
                // line 38
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" step=\"0.000000001\"
           value='";
                // line 39
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, (0 + $this->getAttribute($_content_, "get", array(0 => $_key_), "method")), "html", null, true);
                echo "'
           class='narrow ";
                // line 40
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 42
            echo "
";
            // line 44
            echo "
";
            // line 45
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "float")) {
                // line 46
                echo "    <label><b><span class='left'>
    ";
                // line 47
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                // line 48
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 49
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" step=\"0.00000001\"
           value='";
                // line 50
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, (0 + $this->getAttribute($_content_, "get", array(0 => $_key_), "method")), "html", null, true);
                echo "'
           class='narrow ";
                // line 51
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 53
            echo "
";
            // line 55
            echo "
";
            // line 56
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "integer")) {
                // line 57
                echo "    <label><b><span class='left'>
    ";
                // line 58
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                // line 59
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 60
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" step=\"1\"
           value='";
                // line 61
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, (0 + $this->getAttribute($_content_, "get", array(0 => $_key_), "method")), "html", null, true);
                echo "'
           class='narrow ";
                // line 62
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo "'>
";
            }
            // line 64
            echo "

    ";
            // line 67
            echo "
";
            // line 68
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "slug")) {
                // line 69
                echo "<label class='permalink'>Permalink:
    <code>/";
                // line 70
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_content_, "contenttype"), "singular_slug"), "html", null, true);
                echo "/<span id='show-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "'>";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                echo "</span></code>
    <input type=\"text\" name=\"";
                // line 71
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"  id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" value='";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                echo "' class='editslug'>
    <span class='sluglocker'><i class='icon-lock'></i></span>
</label>


";
                // line 76
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "uses", array(), "any", true, true)) {
                    // line 77
                    echo "<script type=\"text/javascript\">
    \$('.sluglocker').bind('click', function() {
       if (\$('.sluglocker i').hasClass('icon-lock')) {
           \$('.sluglocker i').removeClass('icon-lock').addClass('icon-unlock');
           makeUri('";
                    // line 81
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_content_, "id"), "html", null, true);
                    echo "', '";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "uses"), "html", null, true);
                    echo "', '";
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "', false);
       } else {
           \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
           stopMakeUri('";
                    // line 84
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "uses"), "html", null, true);
                    echo "');
       }
    });
";
                    // line 87
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    if (twig_test_empty($this->getAttribute($_content_, "get", array(0 => $_key_), "method"))) {
                        // line 88
                        echo "    \$('.sluglocker').trigger('click');
";
                    }
                    // line 90
                    echo "</script>
";
                }
                // line 92
                echo "
";
            }
            // line 94
            echo "
";
            // line 96
            echo "
";
            // line 97
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "select")) {
                // line 98
                echo "    <label><b><span class='left'>";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</span></b></label>
    <select name=\"";
                // line 99
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
        ";
                // line 100
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_field_, "values"));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 101
                    echo "            <option value=\"";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\" ";
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    if (($this->getAttribute($_content_, "get", array(0 => $_key_), "method") == $_value_)) {
                        echo "selected";
                    }
                    echo ">";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 103
                echo "    </select>
";
            }
            // line 105
            echo "
";
            // line 107
            echo "
";
            // line 108
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "templateselect")) {
                // line 109
                echo "<label><b><span class='left'>";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</span></b></label>
    <select name=\"";
                // line 110
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
        <option value=\"\">(default template)</option>
        <option value=\"\" disabled>-----------</option>
        ";
                // line 113
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listtemplates($this->getAttribute($_field_, "filter")));
                foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
                    // line 114
                    echo "            <option value=\"";
                    if (isset($context["filename"])) { $_filename_ = $context["filename"]; } else { $_filename_ = null; }
                    echo twig_escape_filter($this->env, $_filename_, "html", null, true);
                    echo "\" ";
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    if (isset($context["filename"])) { $_filename_ = $context["filename"]; } else { $_filename_ = null; }
                    if (($this->getAttribute($_content_, "get", array(0 => $_key_), "method") == $_filename_)) {
                        echo "selected";
                    }
                    echo ">";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 116
                echo "    </select>
";
            }
            // line 118
            echo "
";
            // line 120
            echo "
";
            // line 121
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "image")) {
                // line 122
                echo "<div class=\"dropzone\" id=\"dropzone-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">

    <div class=\"image-right\">
        <div class='imageholder' id=\"thumbnail-";
                // line 125
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
            ";
                // line 126
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if (($this->getAttribute($_content_, "get", array(0 => $_key_), "method") != "")) {
                    // line 127
                    echo "            <img src=\"";
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute($_content_, "get", array(0 => $_key_), "method"), 120, 120, "c"), "html", null, true);
                    echo "\" width=\"120\" height=\"120\">
            ";
                }
                // line 129
                echo "        </div>
    </div>
    <div class=\"image-container\">

        <label>
            <b>";
                // line 134
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 135
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "\"
                data-content=\"Use this field to upload a photo or image. Click the button to upload a file from your
                computer, or if you're using a recent version of Chrome or Firefox, you can simply drag'n'drop the file
                from your desktop or from a different browser window. <br />
                Alternatively, you can use a previously uploaded image. To select a previously uploaded file, just
                type (part) of the filename in the input area, and it will be autocompleted.\">Info</span>
        </label>

        <input type=\"text\" name=\"";
                // line 143
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"field-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"
            value='";
                // line 144
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                echo "'
            class='";
                // line 145
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo " imageinput wide'>

<!-- The fileinput-button span is used to style the file input field as button -->
        <span class=\"btn btn-info fileinput-button\">
            <i class=\"icon-upload\"></i>
            <span>Upload Image</span>
            <input id=\"fileupload-";
                // line 151
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[]\" data-url=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "classes/upload/\">
        </span>
        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 153
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

";
                // line 157
                if ((!$this->env->getExtension('Bolt')->ismobileclient())) {
                    // line 158
                    echo "
<script type=\"text/javascript\">

bindFileUpload('";
                    // line 161
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "');

\$(\"#field-";
                    // line 163
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "\").autocomplete({
    source: \"";
                    // line 164
                    if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "async"), "html", null, true);
                    echo "filesautocomplete\",
    minLength: 2,
    close: function(){ \$('#thumbnail-";
                    // line 166
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "').html(\"<img src='/thumbs/120x120c/\"+encodeURI( \$('#field-";
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "').val() )+\"' width='120' height='120'>\"); }
});

</script>
";
                }
                // line 171
                echo "
    </div>
</div>
";
            }
            // line 175
            echo "


";
            // line 179
            echo "
";
            // line 180
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "file")) {
                // line 181
                echo "<div class=\"dropzone\" id=\"dropzone-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">

    <div class=\"image-container\">

        <label>
            <b>";
                // line 186
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 187
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "\"
                  data-content=\"Use this field to upload a file to include as a download or to use inside a page on the
                   website. Click the button to upload a file from your computer, or if you're using a recent version
                   of Chrome or Firefox, you can simply drag'n'drop the file from your desktop or from a different
                   browser window. <br />
                    Alternatively, you can use a previously uploaded file. To select a previously uploaded file, just
                    type (part) of the filename in the input area, and it will be autocompleted.\">Info</span>
        </label>

        <input type=\"text\" name=\"";
                // line 196
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"field-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"
            value='";
                // line 197
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                echo "'
            class='";
                // line 198
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo " imageinput'>

<!-- The fileinput-button span is used to style the file input field as button -->
        <span class=\"btn btn-info fileinput-button\">
            <i class=\"icon-upload\"></i>
            <span>Upload File</span>
            <input id=\"fileupload-";
                // line 204
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[]\" data-url=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "classes/upload/\">
        </span>
        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 206
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

    ";
                // line 210
                if ((!$this->env->getExtension('Bolt')->ismobileclient())) {
                    // line 211
                    echo "        <div style=\"clear: left;\" class=\"hide-tablet\"><small>Use the button to upload a file. To select a previously uploaded file, you can
        type (part) of the filename in the input area, and it will be autocompleted.</small></div>
        <script type=\"text/javascript\">
            bindFileUpload('";
                    // line 214
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "');

            \$(\"#field-";
                    // line 216
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $_key_, "html", null, true);
                    echo "\").autocomplete({
                source: \"";
                    // line 217
                    if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "async"), "html", null, true);
                    echo "filesautocomplete?ext=";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "extensions"), ","), "html", null, true);
                    echo "\",
                minLength: 2
            });

        </script>
    ";
                }
                // line 223
                echo "
    </div>
</div>
";
            }
            // line 227
            echo "

";
            // line 230
            echo "
";
            // line 231
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "imagelist")) {
                // line 232
                echo "<label>
    <b>
        ";
                // line 234
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                // line 235
                echo "    </b>
    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 236
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "\"
      data-content=\"Use this field to upload a set of photos or image. Click the button to upload a file from your
                computer, or if you're using a recent version of Chrome or Firefox, you can simply drag'n'drop the file
                from your desktop or from a different browser window. <br />
                Alternatively, you can use a previously uploaded image. <br />
                You can rearrange the images using drag'n'drop, and change the descriptions of the images.\">Info</span>
</label>
<div class=\"imagelistholder dropzone\" id=\"imagelist-";
                // line 243
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">
    <div class=\"list\"></div>
    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\" style=\"margin-bottom: 8px;\">
            <i class=\"icon-upload\"></i>
            <span>Upload image</span>
            <input id=\"fileupload-";
                // line 249
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[]\" data-url=\"";
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "classes/upload/\">
        </span>
        <input type=\"button\" data-action=\"imagelist.addExisting()\" value=\"Add existing image\" class=\"btn\">
    </div>
    <textarea name=\"";
                // line 253
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\">";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_content_, "get", array(0 => $_key_), "method", true, true)) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                }
                echo "</textarea>
    <div class='clearfix'></div>
</div>


<script>
jQuery(function(\$) {
    imagelist = new ImagelistHolder({id: '";
                // line 260
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "'});
});
</script>

";
            }
            // line 265
            echo "
";
            // line 267
            echo "
";
            // line 268
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "video")) {
                // line 269
                echo "
";
                // line 270
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                $context["video"] = $this->getAttribute($_content_, "get", array(0 => $_key_), "method");
                // line 271
                echo "<div class=\"dropzone\">

    <div class=\"video-right hide-phone\">
        <div class='imageholder' id=\"thumbnail-";
                // line 274
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" style=\"width: 160px;\">
            ";
                // line 275
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                if (($this->getAttribute($_video_, "thumbnail") != "")) {
                    // line 276
                    echo "                <img src=\"";
                    if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_video_, "thumbnail"), "html", null, true);
                    echo "\" width=\"160\" height=\"120\">
            ";
                }
                // line 278
                echo "        </div>
    </div>

    <div class=\"video-container\">
        <label>
            <b>";
                // line 283
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b>
            (<span id=\"video-";
                // line 284
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-text\">";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                if ($this->getAttribute($_video_, "title")) {
                    echo "\"";
                    if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute($_video_, "title"), 18);
                    echo "\" by ";
                    if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute($_video_, "authorname"), 18);
                }
                echo "</span>)
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 285
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "\"
                  data-content=\"Use this field to embed a video inside a page on the website. Just copy/paste the
                  URL of a video-page on Youtube, Vimeo or almost any other video sharing website. <br>
                  Bolt will automatically fetch the &amp;lt;embed&amp;gt;-code, with the correct width, height and the original
                  title. If you change the width or height, the other value will change accordingly, to maintain the
                  aspect ratio. \">Info</span>
        </label>
        <label>URL: <input type=\"text\" name=\"";
                // line 292
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[url]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\"
               value='";
                // line 293
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "url"), "html", null, true);
                echo "' style='width: 60%;'>
        </label>

        <label>Size: <input type=\"number\" name=\"";
                // line 296
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[width]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-width\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "width"), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
        x <input type=\"number\" name=\"";
                // line 297
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[height]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-height\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "height"), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
            pixels.
            <span class=\"hide-tablet\"><a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\" style='float: right;'>Preview video</a></span>
        </label>

        <input type=\"hidden\" name=\"";
                // line 302
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[ratio]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-ratio\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "ratio"), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 303
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[title]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-title\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "title"), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 304
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[authorname]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-author_name\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "authorname"), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 305
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[authorurl]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-author_url\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "authorurl"), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 306
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[html]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-html\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "html"));
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 307
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[thumbnail]\" id=\"video-";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-thumbnail\" value=\"";
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_video_, "thumbnail"), "html", null, true);
                echo "\">

        <script type=\"text/javascript\">
            bindVideoEmbed('";
                // line 310
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "');
        </script>
    </div>
</div>

<!-- Modal video preview -->
<div class=\"modal hide\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

    <div class=\"modal-body\">
        ";
                // line 319
                if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                if ($this->getAttribute($_video_, "html")) {
                    // line 320
                    echo "        ";
                    if (isset($context["video"])) { $_video_ = $context["video"]; } else { $_video_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_video_, "html"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 322
                    echo "        <p>No video url is set, no video to show.</p>
        ";
                }
                // line 324
                echo "    </div>
    <div class=\"modal-footer\">
        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
    </div>
</div>


";
            }
            // line 332
            echo "




";
            // line 338
            echo "
    ";
            // line 339
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "geolocation")) {
                // line 340
                echo "
        ";
                // line 341
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                $context["geolocation"] = $this->getAttribute($_content_, "get", array(0 => $_key_), "method");
                // line 342
                echo "        <div class=\"dropzone geolocation\">

            <div class=\"map-right hide-phone\">
                <div class='mapholder' id=\"map-";
                // line 345
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" style=\"width: 200px;\">
                    ";
                // line 346
                if (isset($context["geo"])) { $_geo_ = $context["geo"]; } else { $_geo_ = null; }
                if (($this->getAttribute($_geo_, "map") != "")) {
                    // line 347
                    echo "                        <img src=\"";
                    if (isset($context["geo"])) { $_geo_ = $context["geo"]; } else { $_geo_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_geo_, "map"), "html", null, true);
                    echo "\" width=\"200\" height=\"200\">
                    ";
                }
                // line 349
                echo "                </div>
            </div>

            <div class=\"map-container\">
                <label>
                    <b>";
                // line 354
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b>
                    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 355
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "\"
                          data-content=\"Use this field to get the geolocation of any address, or place the marker
                          manually by dragging the pin. First, enter an (approximate) address in the 'address'-field,
                          and the corresponding latitude and longitude will be retrieved using the Google Maps API,
                          together with the closest matching address, according to Google. <br>
                          If you want to move the marker to a different location, just drag'n'drop the pin on the
                          mini-map. The latitide and longitude will be updated automatically. \">Info</span>
                </label>
                <label>Address lookup: <input type=\"text\" name=\"";
                // line 363
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[address]\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-address\"
                    value='";
                // line 364
                if (isset($context["geolocation"])) { $_geolocation_ = $context["geolocation"]; } else { $_geolocation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_geolocation_, "address"), "html", null, true);
                echo "' style='width: 60%;'>
                </label>
                <label>Latitude: <input type=\"text\" name=\"";
                // line 366
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[latitude]\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-latitude\"
                    value='";
                // line 367
                if (isset($context["geolocation"])) { $_geolocation_ = $context["geolocation"]; } else { $_geolocation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_geolocation_, "latitude"), "html", null, true);
                echo "' style='width: 30%;'>
                 - Longitude: <input type=\"text\" name=\"";
                // line 368
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[longitude]\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-longitude\"
                    value='";
                // line 369
                if (isset($context["geolocation"])) { $_geolocation_ = $context["geolocation"]; } else { $_geolocation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_geolocation_, "longitude"), "html", null, true);
                echo "' style='width: 30%;'>
                </label>
                <p>Matched address:
                <span id=\"";
                // line 372
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-reversegeo\"> ";
                if (isset($context["geolocation"])) { $_geolocation_ = $context["geolocation"]; } else { $_geolocation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_geolocation_, "formatted_address"), "html", null, true);
                echo "</span></p>
                <input type=\"hidden\" name=\"";
                // line 373
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "[formatted_address]\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-formatted_address\"
                       value='";
                // line 374
                if (isset($context["geolocation"])) { $_geolocation_ = $context["geolocation"]; } else { $_geolocation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_geolocation_, "formatted_address"), "html", null, true);
                echo "' style='width: 30%;'>
                <script type=\"text/javascript\">
                    \$(function() {
                        bindGeolocation('";
                // line 377
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "', '";
                if (isset($context["geolocation"])) { $_geolocation_ = $context["geolocation"]; } else { $_geolocation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_geolocation_, "latitude"), "html", null, true);
                echo "', '";
                if (isset($context["geolocation"])) { $_geolocation_ = $context["geolocation"]; } else { $_geolocation_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_geolocation_, "longitude"), "html", null, true);
                echo "');
                    });
                </script>
            </div>
        </div>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script type=\"text/javascript\" src=\"";
                // line 383
                if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "app"), "html", null, true);
                echo "view/js/jquery.gomap-1.3.2.min.js\"></script>

    ";
            }
            // line 386
            echo "





";
            // line 393
            echo "
";
            // line 394
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "html")) {
                // line 395
                echo "<label><b>";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 396
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" class='";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo " ckeditor'
    style='";
                // line 397
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "height", array(), "any", true, true)) {
                    echo "height: ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "height"), "html", null, true);
                }
                echo "'>
    ";
                // line 398
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_content_, "get", array(0 => $_key_), "method", true, true)) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                }
                // line 399
                echo "</textarea>
";
            }
            // line 401
            echo "
";
            // line 403
            echo "
";
            // line 404
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "textarea")) {
                // line 405
                echo "<label><b>";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 406
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" class='";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo "'
    style='";
                // line 407
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "height", array(), "any", true, true)) {
                    echo "height: ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "height"), "html", null, true);
                }
                echo "'>";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_content_, "get", array(0 => $_key_), "method", true, true)) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                }
                echo "</textarea>
";
            }
            // line 409
            echo "

";
            // line 412
            echo "
";
            // line 413
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "markdown")) {
                // line 414
                echo "    <label>
        <b>";
                // line 415
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b>
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 416
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "\"
              data-content=\"Markdown is a text-to-HTML conversion tool for web writers.
Markdown allows you to write using an easy-to-read, easy-to-write plain text format,
which is then converted to structurally valid HTML.</p>

<p><strong>Quick reference:</strong><br>
# This is an &amp;lt;h1&amp;gt; tag<br>
## This is an &amp;lt;h2&amp;gt; tag<br>
###### This is an &amp;lt;h6&amp;gt; tag</p>

<p>This _<em>is italic</em>_, this __<strong>is bold</strong>__, and this
___<em><strong>is both</strong></em>___. You can also use asterixes: This *<em>is italic</em>*,
this **<strong>is bold</strong>**.

<p>Create <a href='#'>links</a> like this:<br>
An [exciting website](http://example.org/ &amp;quot;Title of link&amp;quot;)</p>

<p>&nbsp; * This is an unordered list<br>
&nbsp; * Item 2</p>

<p>&nbsp; 1 This is an ordered list<br>
&nbsp; 2 Item 2</p>

\">Info</span>

    </label>
    <textarea id=\"";
                // line 442
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" name=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" class='";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo "'
              style='";
                // line 443
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "height", array(), "any", true, true)) {
                    echo "height: ";
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "height"), "html", null, true);
                    echo " !important;";
                }
                echo "'>";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_content_, "get", array(0 => $_key_), "method", true, true)) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "html", null, true);
                }
                echo "</textarea>

    <textarea id=\"jquery-catchpaste-textarea\" style=\"position: absolute; width: 0 !important; height: 0; left: -10000px;\"></textarea>

<script type=\"text/javascript\">
    bindMarkdown('";
                // line 448
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "');
</script>

";
            }
            // line 452
            echo "

";
            // line 455
            echo "
";
            // line 456
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "date")) {
                // line 457
                echo "<label><b>";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 458
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-dateformatted\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-date\"
    value='";
                // line 459
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_content_, "get", array(0 => $_key_), "method")) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 460
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo " datepicker'>
";
            }
            // line 462
            echo "

";
            // line 465
            echo "
";
            // line 466
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "type") == "datetime")) {
                // line 467
                echo "<label><b>";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "label", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label"), "html", null, true);
                } else {
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_key_), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 468
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-dateformatted\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-date\"
    value='";
                // line 469
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_content_, "get", array(0 => $_key_), "method")) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 470
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"text\" name=\"";
                // line 471
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-timeformatted\" id=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "-time\"
    value='";
                // line 472
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_content_, "get", array(0 => $_key_), "method")) {
                    if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                    if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "get", array(0 => $_key_), "method"), "H:i"), "html", null, true);
                }
                echo "'
    class='";
                // line 473
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if ($this->getAttribute($_field_, "class", array(), "any", true, true)) {
                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_field_, "class"), "html", null, true);
                }
                echo " timepicker'>
";
            }
            // line 475
            echo "

";
            // line 478
            echo "
";
            // line 479
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "postfix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_field_, "postfix"))))) {
                // line 480
                echo "    <div class='clearfix'>
        ";
                // line 481
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo $this->getAttribute($_field_, "postfix");
                echo "
    </div>
";
            }
            // line 484
            echo "
";
            // line 485
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "separator", array(), "any", true, true) && ($this->getAttribute($_field_, "separator") == true))) {
                // line 486
                echo "    <hr>
";
            }
            // line 488
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 491
        echo "
";
    }

    public function getTemplateName()
    {
        return "_sub_editfields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1643 => 491,  1635 => 488,  1631 => 486,  1628 => 485,  1625 => 484,  1618 => 481,  1615 => 480,  1612 => 479,  1609 => 478,  1605 => 475,  1596 => 473,  1586 => 472,  1578 => 471,  1570 => 470,  1560 => 469,  1552 => 468,  1540 => 467,  1537 => 466,  1534 => 465,  1530 => 462,  1521 => 460,  1511 => 459,  1503 => 458,  1491 => 457,  1488 => 456,  1485 => 455,  1481 => 452,  1473 => 448,  1451 => 443,  1437 => 442,  1401 => 416,  1390 => 415,  1387 => 414,  1384 => 413,  1381 => 412,  1377 => 409,  1359 => 407,  1348 => 406,  1336 => 405,  1333 => 404,  1330 => 403,  1327 => 401,  1323 => 399,  1315 => 398,  1306 => 397,  1295 => 396,  1283 => 395,  1280 => 394,  1277 => 393,  1269 => 386,  1262 => 383,  1246 => 377,  1239 => 374,  1231 => 373,  1223 => 372,  1216 => 369,  1208 => 368,  1203 => 367,  1195 => 366,  1189 => 364,  1181 => 363,  1163 => 355,  1152 => 354,  1145 => 349,  1138 => 347,  1135 => 346,  1130 => 345,  1125 => 342,  1121 => 341,  1118 => 340,  1115 => 339,  1112 => 338,  1105 => 332,  1095 => 324,  1091 => 322,  1084 => 320,  1081 => 319,  1068 => 310,  1055 => 307,  1044 => 306,  1033 => 305,  1022 => 304,  1011 => 303,  1000 => 302,  985 => 297,  974 => 296,  967 => 293,  959 => 292,  942 => 285,  927 => 284,  916 => 283,  909 => 278,  902 => 276,  899 => 275,  894 => 274,  889 => 271,  885 => 270,  882 => 269,  879 => 268,  876 => 267,  873 => 265,  864 => 260,  842 => 253,  828 => 249,  818 => 243,  801 => 236,  798 => 235,  789 => 234,  785 => 232,  782 => 231,  779 => 230,  775 => 227,  769 => 223,  756 => 217,  751 => 216,  745 => 214,  740 => 211,  738 => 210,  730 => 206,  718 => 204,  705 => 198,  699 => 197,  691 => 196,  672 => 187,  661 => 186,  651 => 181,  648 => 180,  645 => 179,  640 => 175,  634 => 171,  622 => 166,  616 => 164,  611 => 163,  605 => 161,  600 => 158,  598 => 157,  590 => 153,  578 => 151,  565 => 145,  559 => 144,  551 => 143,  533 => 135,  522 => 134,  515 => 129,  507 => 127,  503 => 126,  498 => 125,  490 => 122,  487 => 121,  484 => 120,  481 => 118,  477 => 116,  457 => 114,  452 => 113,  442 => 110,  430 => 109,  427 => 108,  424 => 107,  421 => 105,  417 => 103,  397 => 101,  392 => 100,  384 => 99,  372 => 98,  369 => 97,  366 => 96,  363 => 94,  359 => 92,  355 => 90,  351 => 88,  347 => 87,  340 => 84,  324 => 81,  318 => 77,  315 => 76,  299 => 71,  287 => 70,  284 => 69,  281 => 68,  278 => 67,  274 => 64,  265 => 62,  259 => 61,  251 => 60,  248 => 59,  239 => 58,  236 => 57,  233 => 56,  230 => 55,  227 => 53,  218 => 51,  212 => 50,  204 => 49,  192 => 47,  189 => 46,  183 => 44,  180 => 42,  171 => 40,  165 => 39,  157 => 38,  154 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  132 => 30,  123 => 28,  117 => 27,  109 => 26,  106 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  79 => 19,  73 => 18,  65 => 17,  62 => 16,  50 => 14,  40 => 9,  33 => 6,  30 => 5,  24 => 2,  250 => 101,  240 => 95,  225 => 87,  207 => 73,  201 => 48,  186 => 45,  178 => 56,  172 => 52,  153 => 50,  148 => 49,  135 => 42,  128 => 41,  121 => 40,  114 => 39,  108 => 35,  96 => 33,  84 => 31,  78 => 30,  75 => 29,  69 => 27,  63 => 25,  53 => 15,  49 => 17,  47 => 13,  44 => 12,  42 => 14,  37 => 11,  35 => 10,  27 => 4,  21 => 2,  19 => 1,);
    }
}
