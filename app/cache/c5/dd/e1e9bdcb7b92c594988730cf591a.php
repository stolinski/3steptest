<?php

/* _sub_contentrow.twig */
class __TwigTemplate_c5dde1e9bdcb7b92c594988730cf591a extends Twig_Template
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
        echo "
";
        // line 3
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        $context["editable"] = (($this->getAttribute($_user_, "username") == $this->getAttribute($_content_, "username")) || $this->env->getExtension('Bolt')->isAllowed("editcontent:all"));
        // line 4
        echo "
<tr ";
        // line 5
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") != "published")) {
            echo "class=\"dim\"";
        }
        echo ">
    <td class='id hide-phone'>№ ";
        // line 6
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "id"), "html", null, true);
        echo "</td>
    <td class='excerpt ";
        // line 7
        if (isset($context["compact"])) { $_compact_ = $context["compact"]; } else { $_compact_ = null; }
        if ((!$_compact_)) {
            echo "large";
        }
        echo "'><span>
        <strong class=\"show-phone\">№ ";
        // line 8
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "id"), "html", null, true);
        echo ". </strong>
        <strong>
            ";
        // line 10
        if (isset($context["editable"])) { $_editable_ = $context["editable"]; } else { $_editable_ = null; }
        if ($_editable_) {
            // line 11
            echo "            <a href=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "id" => $this->getAttribute($_content_, "id"))), "html", null, true);
            echo "\" title=\"Slug: ";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "slug"), "html", null, true);
            echo "\">
                ";
            // line 12
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "getTitle"), "html", null, true);
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "name"), "html", null, true);
            echo "
            </a>
            ";
        } else {
            // line 15
            echo "            <strong>
                ";
            // line 16
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "getTitle"), "html", null, true);
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "name"), "html", null, true);
            echo "
            </strong>
            ";
        }
        // line 19
        echo "        </strong>
        ";
        // line 20
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (isset($context["excerptlength"])) { $_excerptlength_ = $context["excerptlength"]; } else { $_excerptlength_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "excerpt", array(0 => $_excerptlength_), "method"), "html", null, true);
        echo "
                    </span></td>
    <td class='listthumb'>
        ";
        // line 23
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ((!twig_test_empty($this->getAttribute($_content_, "getImage")))) {
            // line 24
            echo "            ";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if (isset($context["thumbsize"])) { $_thumbsize_ = $context["thumbsize"]; } else { $_thumbsize_ = null; }
            echo $this->env->getExtension('Bolt')->fancybox($this->getAttribute($_content_, "getImage"), $_thumbsize_, ($_thumbsize_ * 0.75), "c");
            echo "
        ";
        }
        // line 26
        echo "    </td>
    ";
        // line 27
        if (isset($context["compact"])) { $_compact_ = $context["compact"]; } else { $_compact_ = null; }
        if ((!$_compact_)) {
            // line 28
            echo "    <td class='username hide-phone'>
        <i class=\"icon-user\"></i> ";
            // line 29
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if ($this->getAttribute($_users_, $this->getAttribute($_content_, "username"), array(), "array", true, true)) {
                if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_users_, $this->getAttribute($_content_, "username"), array(), "array"), "displayname"), "html", null, true);
            } else {
                echo "<s>";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "username"), "html", null, true);
                echo "</s>";
            }
            echo "<br>
        <i class=\"icon-calendar\"></i> ";
            // line 30
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datepublish"), "d/m/Y"), "html", null, true);
            echo "<br>
        ";
            // line 31
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if (($this->getAttribute($_content_, "sortorder", array(), "any", true, true) && (!($this->getAttribute($_content_, "sortorder") === false)))) {
                // line 32
                echo "            <i class=\"icon-sort\"></i> Order: ";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_content_, "sortorder"), "html", null, true);
                echo " <br>
        ";
            }
            // line 34
            echo "    </td>
    ";
        }
        // line 36
        echo "    <td class='actions'>
        <div class=\"btn-group\">
            ";
        // line 38
        if (isset($context["editable"])) { $_editable_ = $context["editable"]; } else { $_editable_ = null; }
        if ($_editable_) {
            // line 39
            echo "            <button class=\"btn btn-mini uselink\">
                <a href=\"";
            // line 40
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "id" => $this->getAttribute($_content_, "id"))), "html", null, true);
            echo "\">
                <i class=\"icon-edit\"></i> Edit</a>
            </button>
            ";
        }
        // line 44
        echo "            <button class=\"btn dropdown-toggle btn-mini\" data-toggle=\"dropdown\">
                <i class=\"icon-info-sign\"></i>
                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu pull-right\">
            ";
        // line 49
        if (isset($context["editable"])) { $_editable_ = $context["editable"]; } else { $_editable_ = null; }
        if ($_editable_) {
            // line 50
            echo "
                ";
            // line 51
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            if (($this->getAttribute($_content_, "status") != "published")) {
                // line 52
                echo "                    <li><a href=\"";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "publish", "contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "id" => $this->getAttribute($_content_, "id"))), "html", null, true);
                echo "\">
                        <i class=\"icon-star-empty\"></i> Publish ";
                // line 53
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
                echo "</a></li>
                ";
            } else {
                // line 55
                echo "                    <li><a href=\"";
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "held", "contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "id" => $this->getAttribute($_content_, "id"))), "html", null, true);
                echo "\">
                        <i class=\"icon-star\"></i> Change status to 'held'</a></li>
                    <li><a href=\"";
                // line 57
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "draft", "contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "id" => $this->getAttribute($_content_, "id"))), "html", null, true);
                echo "\">
                        <i class=\"icon-pencil\"></i> Change status to 'draft'</a></li>
                ";
            }
            // line 60
            echo "                <li><a href=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "id" => $this->getAttribute($_content_, "id"), "duplicate" => 1)), "html", null, true);
            echo "\">
                    <i class=\"icon-copy\"></i> Duplicate ";
            // line 61
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_content_, "contenttype"), "singular_name"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 62
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contentaction", array("action" => "delete", "contenttypeslug" => $this->getAttribute($this->getAttribute($_content_, "contenttype"), "slug"), "id" => $this->getAttribute($_content_, "id"), "token" => $this->env->getExtension('Bolt')->token())), "html", null, true);
            echo "\"
                       data-confirm=\"Are you sure you want to delete '";
            // line 63
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "getTitle"), "html", null, true);
            echo "'?\" class=\"confirm\">
                    <i class=\"icon-trash\"></i> Delete ";
            // line 64
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_content_, "contenttype"), "singular_name"), "html", null, true);
            echo "</a></li>
                <li class=\"divider\"></li>
            ";
        }
        // line 67
        echo "                <li><a class=\"nolink\">Author: <strong><i class=\"icon-user\"></i>
                    ";
        // line 68
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ($this->getAttribute($_users_, $this->getAttribute($_content_, "username"), array(), "array", true, true)) {
            if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_users_, $this->getAttribute($_content_, "username"), array(), "array"), "displayname"), "html", null, true);
        } else {
            // line 69
            echo "                        <s>";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "username"), "html", null, true);
            echo "</s>";
        }
        echo "</strong></a></li>
                <li><a class=\"nolink\">Current status:
                    <strong>";
        // line 71
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "status"), "html", null, true);
        echo "</strong></a></li>
                <li><a class=\"nolink\">Slug:
                    <code title=\"";
        // line 73
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "slug"), "html", null, true);
        echo "\">";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute($_content_, "slug"), 30);
        echo "</code></a></li>
                <li><a class=\"nolink\">Created on:
                    <strong><i class=\"icon-asterisk\"></i> ";
        // line 75
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datecreated"), "Y-m-d H:i"), "html", null, true);
        echo "</strong></a></li>
                <li><a class=\"nolink\">Published on:
                    <strong><i class=\"icon-calendar\"></i> ";
        // line 77
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datepublish"), "Y-m-d H:i"), "html", null, true);
        echo "</strong></a></li>
                <li><a class=\"nolink\">Last edited on:
                    <strong><i class=\"icon-refresh\"></i> ";
        // line 79
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datechanged"), "Y-m-d H:i"), "html", null, true);
        echo "</strong></a></li>
                ";
        // line 80
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_content_, "taxonomy"));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 81
            echo "                    ";
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            if ((twig_length_filter($this->env, $_values_) > 1)) {
                // line 82
                echo "                        <li><a class=\"nolink\">";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if (isset($context["taxonomyslug"])) { $_taxonomyslug_ = $context["taxonomyslug"]; } else { $_taxonomyslug_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_config_, "taxonomy"), $_taxonomyslug_, array(), "array"), "name"), "html", null, true);
                echo ":
                            <strong><i class=\"icon-tag\"></i> ";
                // line 83
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($_values_, ", "), "html", null, true);
                echo "</strong></a></li>
                    ";
            } else {
                // line 85
                echo "                        <li><a class=\"nolink\">";
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if (isset($context["taxonomyslug"])) { $_taxonomyslug_ = $context["taxonomyslug"]; } else { $_taxonomyslug_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_config_, "taxonomy"), $_taxonomyslug_, array(), "array"), "singular_name"), "html", null, true);
                echo ":
                            <strong><i class=\"icon-tag\"></i> ";
                // line 86
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_values_, 0), "html", null, true);
                echo "</strong></a></li>
                    ";
            }
            // line 88
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo "            </ul>
        </div>

    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "_sub_contentrow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 89,  327 => 88,  321 => 86,  314 => 85,  308 => 83,  297 => 81,  292 => 80,  287 => 79,  281 => 77,  275 => 75,  251 => 69,  240 => 67,  218 => 61,  205 => 57,  198 => 55,  192 => 53,  183 => 51,  177 => 49,  170 => 44,  162 => 40,  159 => 39,  156 => 38,  148 => 34,  141 => 32,  115 => 28,  109 => 26,  98 => 23,  78 => 16,  75 => 15,  54 => 10,  22 => 3,  266 => 73,  260 => 71,  241 => 74,  223 => 62,  217 => 62,  208 => 59,  206 => 58,  202 => 56,  196 => 54,  193 => 53,  187 => 51,  184 => 50,  178 => 48,  167 => 44,  157 => 39,  147 => 35,  142 => 33,  138 => 31,  135 => 31,  133 => 30,  121 => 25,  119 => 24,  113 => 20,  99 => 19,  96 => 18,  91 => 17,  86 => 16,  76 => 14,  70 => 13,  66 => 12,  26 => 4,  23 => 3,  305 => 97,  301 => 82,  291 => 93,  286 => 92,  282 => 90,  276 => 88,  272 => 86,  253 => 78,  250 => 77,  247 => 79,  243 => 68,  233 => 64,  228 => 63,  224 => 72,  221 => 71,  210 => 63,  199 => 60,  195 => 59,  186 => 52,  182 => 51,  173 => 46,  168 => 45,  163 => 44,  153 => 42,  146 => 40,  140 => 37,  134 => 35,  128 => 33,  118 => 29,  112 => 27,  106 => 27,  101 => 24,  90 => 20,  84 => 21,  79 => 20,  69 => 18,  63 => 16,  57 => 11,  46 => 11,  41 => 7,  36 => 6,  27 => 7,  279 => 89,  268 => 84,  262 => 84,  257 => 83,  249 => 73,  234 => 71,  229 => 68,  214 => 61,  212 => 60,  209 => 64,  191 => 63,  180 => 50,  175 => 47,  169 => 45,  164 => 43,  158 => 43,  155 => 50,  152 => 36,  149 => 48,  131 => 47,  127 => 45,  123 => 32,  117 => 42,  110 => 39,  104 => 38,  100 => 37,  95 => 24,  92 => 35,  87 => 19,  81 => 15,  74 => 19,  68 => 27,  64 => 26,  59 => 25,  51 => 12,  48 => 8,  44 => 16,  37 => 6,  32 => 9,  29 => 5,  21 => 2,  19 => 1,);
    }
}
