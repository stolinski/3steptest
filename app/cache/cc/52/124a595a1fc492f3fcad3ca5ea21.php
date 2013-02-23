<?php

/* _sub_edittaxonomies.twig */
class __TwigTemplate_cc52124a595a1fc492f3fcad3ca5ea21 extends Twig_Template
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
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        if ($this->getAttribute($_contenttype_, "taxonomy", array(), "any", true, true)) {
            // line 4
            if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
            $context["taxonomies"] = $this->getAttribute($_contenttype_, "taxonomy");
            // line 5
            echo "
    <h3>
        Taxonomy
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"Taxonomy\"
                  data-content=\"By selecting one or more taxonomies for this record,
                  you are classifying this record to have those properties. On the
                  website this can be used to group certain records together, or
                  to automatically create links to records that share a
                  classification.
    \">Info</span>
    </h3>

";
            // line 17
            if (isset($context["taxonomies"])) { $_taxonomies_ = $context["taxonomies"]; } else { $_taxonomies_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_taxonomies_);
            foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
                // line 18
                echo "
    ";
                // line 19
                if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                if (isset($context["taxonomyslug"])) { $_taxonomyslug_ = $context["taxonomyslug"]; } else { $_taxonomyslug_ = null; }
                if ($this->getAttribute($this->getAttribute($_config_, "taxonomy", array(), "any", false, true), $_taxonomyslug_, array(), "array", true, true)) {
                    // line 20
                    echo "
        ";
                    // line 21
                    if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
                    if (isset($context["taxonomyslug"])) { $_taxonomyslug_ = $context["taxonomyslug"]; } else { $_taxonomyslug_ = null; }
                    $context["taxonomy"] = $this->getAttribute($this->getAttribute($_config_, "taxonomy"), $_taxonomyslug_, array(), "array");
                    // line 22
                    echo "

        ";
                    // line 25
                    echo "
        ";
                    // line 26
                    if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                    if (($this->getAttribute($_taxonomy_, "behaves_like") == "tags")) {
                        // line 27
                        echo "
            <label for='taxonomy-";
                        // line 28
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "name"), "html", null, true);
                        echo ":</span></b></label>

            ";
                        // line 30
                        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        if ($this->getAttribute($this->getAttribute($_content_, "taxonomy", array(), "any", false, true), $this->getAttribute($_taxonomy_, "slug"), array(), "array", true, true)) {
                            // line 31
                            echo "                ";
                            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            $context["tags"] = twig_join_filter($this->getAttribute($this->getAttribute($_content_, "taxonomy"), $this->getAttribute($_taxonomy_, "slug"), array(), "array"), ",");
                            // line 32
                            echo "            ";
                        } else {
                            // line 33
                            echo "                ";
                            $context["tags"] = "";
                            // line 34
                            echo "            ";
                        }
                        // line 35
                        echo "
            <input type='text' name='taxonomy[";
                        // line 36
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "]' id='taxonomy-";
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "' value=\"";
                        if (isset($context["tags"])) { $_tags_ = $context["tags"]; } else { $_tags_ = null; }
                        echo twig_escape_filter($this->env, $_tags_, "html", null, true);
                        echo "\" style=\"width: 70%;\" />

            <script>
            \$('#taxonomy-";
                        // line 39
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "').select2({
                tags:[], // Todo: automatically supply most often-used tags.
                tokenSeparators: [\",\", \" \"]
            });
            </script>

        ";
                    }
                    // line 46
                    echo "
        ";
                    // line 48
                    echo "
        ";
                    // line 49
                    if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                    if (($this->getAttribute($_taxonomy_, "behaves_like") == "categories")) {
                        // line 50
                        echo "
            <label for='taxonomy-";
                        // line 51
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "name"), "html", null, true);
                        echo ":</span></b></label>

            ";
                        // line 53
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        if (($this->getAttribute($_taxonomy_, "multiple", array(), "any", true, true) && ($this->getAttribute($_taxonomy_, "multiple") == 1))) {
                            // line 54
                            echo "            <select name='taxonomy[";
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                            echo "' multiple>
            ";
                        } else {
                            // line 56
                            echo "            <select name='taxonomy[";
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                            echo "][]' id='taxonomy-";
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                            echo "'>
                <option value=\"\">(no category)</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        }
                        // line 60
                        echo "
            ";
                        // line 61
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_taxonomy_, "options"));
                        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                            // line 62
                            echo "                <option value='";
                            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                            echo twig_escape_filter($this->env, $_cat_, "html", null, true);
                            echo "' ";
                            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                            if (($this->getAttribute($this->getAttribute($_content_, "taxonomy", array(), "any", false, true), $this->getAttribute($_taxonomy_, "slug"), array(), "array", true, true) && twig_in_filter($_cat_, $this->getAttribute($this->getAttribute($_content_, "taxonomy"), $this->getAttribute($_taxonomy_, "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                            echo twig_escape_filter($this->env, $_cat_, "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 64
                        echo "
            </select>

        ";
                    }
                    // line 68
                    echo "
        ";
                    // line 70
                    echo "
        ";
                    // line 71
                    if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                    if (($this->getAttribute($_taxonomy_, "behaves_like") == "grouping")) {
                        // line 72
                        echo "
            <label for='taxonomy-";
                        // line 73
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "'><b><span class='left'>";
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "name"), "html", null, true);
                        echo ":</span></b></label>

            <select name='taxonomy[";
                        // line 75
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "][]' id='taxonomy-";
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                        echo "'>
                <option value=\"\">(no group)</option>
                <option value=\"\" disabled>-----------</option>
            ";
                        // line 78
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_taxonomy_, "options"));
                        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                            // line 79
                            echo "                <option value='";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $_group_, "html", null, true);
                            echo "' ";
                            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            if (($this->getAttribute($this->getAttribute($_content_, "taxonomy", array(), "any", false, true), $this->getAttribute($_taxonomy_, "slug"), array(), "array", true, true) && twig_in_filter($_group_, $this->getAttribute($this->getAttribute($_content_, "taxonomy"), $this->getAttribute($_taxonomy_, "slug"), array(), "array")))) {
                                echo "selected";
                            }
                            echo ">";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo twig_escape_filter($this->env, $_group_, "html", null, true);
                            echo "</option>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 81
                        echo "            </select>

            ";
                        // line 83
                        if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                        if (($this->getAttribute($_taxonomy_, "has_sortorder", array(), "any", true, true) && ($this->getAttribute($_taxonomy_, "has_sortorder") == true))) {
                            // line 84
                            echo "                <label for=\"taxonomy-order-";
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                            echo "\" style='display: inline;'>- Order:</label>
                <input type=\"number\" name=\"taxonomy-order[";
                            // line 85
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                            echo "]\" id=\"taxonomy-order-";
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_taxonomy_, "slug"), "html", null, true);
                            echo "\" step=\"1\"
                       value='";
                            // line 86
                            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                            if (isset($context["taxonomy"])) { $_taxonomy_ = $context["taxonomy"]; } else { $_taxonomy_ = null; }
                            echo twig_escape_filter($this->env, (0 + $this->getAttribute($this->getAttribute($_content_, "taxonomyorder"), $this->getAttribute($_taxonomy_, "slug"), array(), "array")), "html", null, true);
                            echo "' class='verynarrow'>
            ";
                        }
                        // line 88
                        echo "
        ";
                    }
                    // line 90
                    echo "
    ";
                }
                // line 92
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 94
            echo "<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_edittaxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 94,  300 => 92,  296 => 90,  292 => 88,  285 => 86,  277 => 85,  271 => 84,  268 => 83,  264 => 81,  244 => 79,  229 => 75,  220 => 73,  214 => 71,  211 => 70,  208 => 68,  202 => 64,  182 => 62,  177 => 61,  174 => 60,  149 => 53,  140 => 51,  137 => 50,  131 => 48,  104 => 36,  101 => 35,  98 => 34,  95 => 33,  92 => 32,  87 => 31,  83 => 30,  74 => 28,  71 => 27,  68 => 26,  61 => 22,  28 => 5,  25 => 4,  234 => 68,  223 => 64,  217 => 72,  213 => 61,  198 => 58,  185 => 56,  175 => 54,  167 => 52,  162 => 56,  159 => 50,  155 => 49,  152 => 54,  134 => 49,  107 => 32,  99 => 31,  57 => 21,  54 => 20,  46 => 18,  43 => 17,  26 => 3,  22 => 3,  1643 => 491,  1635 => 488,  1631 => 486,  1628 => 485,  1625 => 484,  1618 => 481,  1615 => 480,  1612 => 479,  1609 => 478,  1605 => 475,  1596 => 473,  1586 => 472,  1578 => 471,  1570 => 470,  1560 => 469,  1552 => 468,  1540 => 467,  1537 => 466,  1534 => 465,  1530 => 462,  1521 => 460,  1511 => 459,  1503 => 458,  1491 => 457,  1488 => 456,  1485 => 455,  1481 => 452,  1473 => 448,  1451 => 443,  1437 => 442,  1401 => 416,  1390 => 415,  1387 => 414,  1384 => 413,  1381 => 412,  1377 => 409,  1359 => 407,  1348 => 406,  1336 => 405,  1333 => 404,  1330 => 403,  1327 => 401,  1323 => 399,  1315 => 398,  1306 => 397,  1295 => 396,  1283 => 395,  1280 => 394,  1277 => 393,  1269 => 386,  1262 => 383,  1246 => 377,  1239 => 374,  1231 => 373,  1223 => 372,  1216 => 369,  1208 => 368,  1203 => 367,  1195 => 366,  1189 => 364,  1181 => 363,  1163 => 355,  1152 => 354,  1145 => 349,  1138 => 347,  1135 => 346,  1130 => 345,  1125 => 342,  1121 => 341,  1118 => 340,  1115 => 339,  1112 => 338,  1105 => 332,  1095 => 324,  1091 => 322,  1084 => 320,  1081 => 319,  1068 => 310,  1055 => 307,  1044 => 306,  1033 => 305,  1022 => 304,  1011 => 303,  1000 => 302,  985 => 297,  974 => 296,  967 => 293,  959 => 292,  942 => 285,  927 => 284,  916 => 283,  909 => 278,  902 => 276,  899 => 275,  894 => 274,  889 => 271,  885 => 270,  882 => 269,  879 => 268,  876 => 267,  873 => 265,  864 => 260,  842 => 253,  828 => 249,  818 => 243,  801 => 236,  798 => 235,  789 => 234,  785 => 232,  782 => 231,  779 => 230,  775 => 227,  769 => 223,  756 => 217,  751 => 216,  745 => 214,  740 => 211,  738 => 210,  730 => 206,  718 => 204,  705 => 198,  699 => 197,  691 => 196,  672 => 187,  661 => 186,  651 => 181,  648 => 180,  645 => 179,  640 => 175,  634 => 171,  622 => 166,  616 => 164,  611 => 163,  605 => 161,  600 => 158,  598 => 157,  590 => 153,  578 => 151,  565 => 145,  559 => 144,  551 => 143,  533 => 135,  522 => 134,  515 => 129,  507 => 127,  503 => 126,  498 => 125,  490 => 122,  487 => 121,  484 => 120,  481 => 118,  477 => 116,  457 => 114,  452 => 113,  442 => 110,  430 => 109,  427 => 108,  424 => 107,  421 => 105,  417 => 103,  397 => 101,  392 => 100,  384 => 99,  372 => 98,  369 => 97,  366 => 96,  363 => 94,  359 => 92,  355 => 90,  351 => 88,  347 => 87,  340 => 84,  324 => 81,  318 => 77,  315 => 76,  299 => 71,  287 => 70,  284 => 69,  281 => 68,  278 => 67,  274 => 64,  265 => 62,  259 => 61,  251 => 60,  248 => 59,  239 => 78,  236 => 57,  233 => 56,  230 => 67,  227 => 66,  218 => 51,  212 => 50,  204 => 49,  192 => 47,  189 => 57,  183 => 44,  180 => 55,  171 => 40,  165 => 39,  157 => 38,  154 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  132 => 30,  123 => 28,  117 => 39,  109 => 26,  106 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 28,  79 => 19,  73 => 18,  65 => 25,  62 => 22,  50 => 19,  40 => 15,  33 => 6,  30 => 5,  24 => 2,  250 => 101,  240 => 95,  225 => 87,  207 => 60,  201 => 48,  186 => 45,  178 => 56,  172 => 53,  153 => 50,  148 => 45,  135 => 42,  128 => 46,  121 => 40,  114 => 39,  108 => 35,  96 => 33,  84 => 31,  78 => 26,  75 => 25,  69 => 27,  63 => 25,  53 => 15,  49 => 19,  47 => 18,  44 => 12,  42 => 17,  37 => 11,  35 => 10,  27 => 4,  21 => 2,  19 => 1,);
    }
}
