<?php

/* _sub_editrelations.twig */
class __TwigTemplate_24abb16874a3235ceeace1fbaa332edc extends Twig_Template
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
        // line 2
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        if (((!twig_test_empty($this->getAttribute($_content_, "relation"))) || $this->getAttribute($_contenttype_, "relations", array(), "any", true, true))) {
            // line 3
            echo "
    <h3>
        Relationships
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"Relationships\"
            data-content=\"By selecting other records as a 'relation', you are actually
            creating a link between this record, and the one you selected. On the
            website, this can by used for 'related articles', 'see also' or to display
            how this record fits into a certain structure.
\">Info</span>
    </h3>

";
        }
        // line 15
        echo "
";
        // line 17
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        if ($this->getAttribute($_contenttype_, "relations", array(), "any", true, true)) {
            // line 18
            echo "
    ";
            // line 19
            if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_contenttype_, "relations"));
            foreach ($context['_seq'] as $context["relcontenttype"] => $context["relation"]) {
                // line 20
                echo "
        <label for='relation-";
                // line 21
                if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                echo twig_escape_filter($this->env, $_relcontenttype_, "html", null, true);
                echo "'><b><span class='left'>
            ";
                // line 22
                if (isset($context["relation"])) { $_relation_ = $context["relation"]; } else { $_relation_ = null; }
                if ($this->getAttribute($_relation_, "label")) {
                    if (isset($context["relation"])) { $_relation_ = $context["relation"]; } else { $_relation_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_relation_, "label"), "html", null, true);
                } else {
                    if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst($_relcontenttype_), "html", null, true);
                }
                echo ":
        </span></b></label>

        ";
                // line 25
                if (isset($context["relation"])) { $_relation_ = $context["relation"]; } else { $_relation_ = null; }
                if (($this->getAttribute($_relation_, "multiple", array(), "any", true, true) && ($this->getAttribute($_relation_, "multiple") == 1))) {
                    // line 26
                    echo "        <select name='relation[";
                    if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                    echo twig_escape_filter($this->env, $_relcontenttype_, "html", null, true);
                    echo "][]' id='relation-";
                    if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                    echo twig_escape_filter($this->env, $_relcontenttype_, "html", null, true);
                    echo "' class='wide' multiple  style=\"width: 70%;\" data-placeholder=\"(none)\">
        ";
                } else {
                    // line 28
                    echo "        <select name='relation[";
                    if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                    echo twig_escape_filter($this->env, $_relcontenttype_, "html", null, true);
                    echo "][]' id='relation-";
                    if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                    echo twig_escape_filter($this->env, $_relcontenttype_, "html", null, true);
                    echo "' class='wide' style=\"width: 70%;\" data-placeholder=\"(none)\">
            <option value=\"\">(none)</option>
        ";
                }
                // line 31
                echo "            ";
                if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                if (isset($context["relation"])) { $_relation_ = $context["relation"]; } else { $_relation_ = null; }
                if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listcontent($_relcontenttype_, $_relation_, $_content_));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 32
                    echo "                <option value=\"";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                    echo "\" ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if ($this->getAttribute($_item_, "selected")) {
                        echo "selected";
                    }
                    echo ">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo " <span>(№ ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                    echo ")</span></option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 34
                echo "
        </select>

        <script>
            \$('#relation-";
                // line 38
                if (isset($context["relcontenttype"])) { $_relcontenttype_ = $context["relcontenttype"]; } else { $_relcontenttype_ = null; }
                echo twig_escape_filter($this->env, $_relcontenttype_, "html", null, true);
                echo "').select2({
                placeholder: \"(none)\",
                allowClear: true
            });
        </script>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['relcontenttype'], $context['relation'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 45
            echo "
";
        }
        // line 47
        echo "
";
        // line 49
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        if (((!twig_test_empty($this->getAttribute($_content_, "relation"))) || $this->getAttribute($_contenttype_, "relations", array(), "any", true, true))) {
            // line 50
            echo "
    ";
            // line 51
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_content_, "relation"));
            foreach ($context['_seq'] as $context["reltype"] => $context["ids"]) {
                // line 52
                echo "        ";
                if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                if (isset($context["reltype"])) { $_reltype_ = $context["reltype"]; } else { $_reltype_ = null; }
                if ((!$this->getAttribute($this->getAttribute($_contenttype_, "relations", array(), "any", false, true), $_reltype_, array(), "array", true, true))) {
                    // line 53
                    echo "            <p>
            ";
                    // line 54
                    if (isset($context["ids"])) { $_ids_ = $context["ids"]; } else { $_ids_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_ids_);
                    foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                        // line 55
                        echo "                ";
                        $template_storage = new Bolt\Storage($context['app']);
                        $context['record'] =                         $template_storage->getContent((($this->getContext($context, "reltype") . "/") . $this->getContext($context, "id")), array (
) );
                        // line 56
                        echo "                ";
                        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                        if ($_record_) {
                            // line 57
                            echo "                    This record is related to ";
                            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_record_, "contenttype"), "singular_name"), "html", null, true);
                            echo " № ";
                            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "id"), "html", null, true);
                            echo " -
                    <strong>";
                            // line 58
                            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_record_, "title"), "html", null, true);
                            echo "</strong> (<a href=\"";
                            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute($_record_, "contenttype"), "slug"), "id" => $this->getAttribute($_record_, "id"))), "html", null, true);
                            echo "\">edit</a>)<br>
                ";
                        }
                        // line 60
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 61
                    echo "            </p>
        ";
                }
                // line 63
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reltype'], $context['ids'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 64
            echo "
";
        }
        // line 66
        echo "
";
        // line 67
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        if (((!twig_test_empty($this->getAttribute($_content_, "relation"))) || $this->getAttribute($_contenttype_, "relations", array(), "any", true, true))) {
            // line 68
            echo "
    <hr>

";
        }
    }

    public function getTemplateName()
    {
        return "_sub_editrelations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 68,  223 => 64,  217 => 63,  213 => 61,  198 => 58,  185 => 56,  175 => 54,  167 => 52,  162 => 51,  159 => 50,  155 => 49,  152 => 47,  134 => 38,  107 => 32,  99 => 31,  57 => 21,  54 => 20,  46 => 18,  43 => 17,  26 => 3,  22 => 2,  1643 => 491,  1635 => 488,  1631 => 486,  1628 => 485,  1625 => 484,  1618 => 481,  1615 => 480,  1612 => 479,  1609 => 478,  1605 => 475,  1596 => 473,  1586 => 472,  1578 => 471,  1570 => 470,  1560 => 469,  1552 => 468,  1540 => 467,  1537 => 466,  1534 => 465,  1530 => 462,  1521 => 460,  1511 => 459,  1503 => 458,  1491 => 457,  1488 => 456,  1485 => 455,  1481 => 452,  1473 => 448,  1451 => 443,  1437 => 442,  1401 => 416,  1390 => 415,  1387 => 414,  1384 => 413,  1381 => 412,  1377 => 409,  1359 => 407,  1348 => 406,  1336 => 405,  1333 => 404,  1330 => 403,  1327 => 401,  1323 => 399,  1315 => 398,  1306 => 397,  1295 => 396,  1283 => 395,  1280 => 394,  1277 => 393,  1269 => 386,  1262 => 383,  1246 => 377,  1239 => 374,  1231 => 373,  1223 => 372,  1216 => 369,  1208 => 368,  1203 => 367,  1195 => 366,  1189 => 364,  1181 => 363,  1163 => 355,  1152 => 354,  1145 => 349,  1138 => 347,  1135 => 346,  1130 => 345,  1125 => 342,  1121 => 341,  1118 => 340,  1115 => 339,  1112 => 338,  1105 => 332,  1095 => 324,  1091 => 322,  1084 => 320,  1081 => 319,  1068 => 310,  1055 => 307,  1044 => 306,  1033 => 305,  1022 => 304,  1011 => 303,  1000 => 302,  985 => 297,  974 => 296,  967 => 293,  959 => 292,  942 => 285,  927 => 284,  916 => 283,  909 => 278,  902 => 276,  899 => 275,  894 => 274,  889 => 271,  885 => 270,  882 => 269,  879 => 268,  876 => 267,  873 => 265,  864 => 260,  842 => 253,  828 => 249,  818 => 243,  801 => 236,  798 => 235,  789 => 234,  785 => 232,  782 => 231,  779 => 230,  775 => 227,  769 => 223,  756 => 217,  751 => 216,  745 => 214,  740 => 211,  738 => 210,  730 => 206,  718 => 204,  705 => 198,  699 => 197,  691 => 196,  672 => 187,  661 => 186,  651 => 181,  648 => 180,  645 => 179,  640 => 175,  634 => 171,  622 => 166,  616 => 164,  611 => 163,  605 => 161,  600 => 158,  598 => 157,  590 => 153,  578 => 151,  565 => 145,  559 => 144,  551 => 143,  533 => 135,  522 => 134,  515 => 129,  507 => 127,  503 => 126,  498 => 125,  490 => 122,  487 => 121,  484 => 120,  481 => 118,  477 => 116,  457 => 114,  452 => 113,  442 => 110,  430 => 109,  427 => 108,  424 => 107,  421 => 105,  417 => 103,  397 => 101,  392 => 100,  384 => 99,  372 => 98,  369 => 97,  366 => 96,  363 => 94,  359 => 92,  355 => 90,  351 => 88,  347 => 87,  340 => 84,  324 => 81,  318 => 77,  315 => 76,  299 => 71,  287 => 70,  284 => 69,  281 => 68,  278 => 67,  274 => 64,  265 => 62,  259 => 61,  251 => 60,  248 => 59,  239 => 58,  236 => 57,  233 => 56,  230 => 67,  227 => 66,  218 => 51,  212 => 50,  204 => 49,  192 => 47,  189 => 57,  183 => 44,  180 => 55,  171 => 40,  165 => 39,  157 => 38,  154 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  132 => 30,  123 => 28,  117 => 27,  109 => 26,  106 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 28,  79 => 19,  73 => 18,  65 => 17,  62 => 22,  50 => 14,  40 => 15,  33 => 6,  30 => 5,  24 => 2,  250 => 101,  240 => 95,  225 => 87,  207 => 60,  201 => 48,  186 => 45,  178 => 56,  172 => 53,  153 => 50,  148 => 45,  135 => 42,  128 => 34,  121 => 40,  114 => 39,  108 => 35,  96 => 33,  84 => 31,  78 => 26,  75 => 25,  69 => 27,  63 => 25,  53 => 15,  49 => 19,  47 => 13,  44 => 12,  42 => 14,  37 => 11,  35 => 10,  27 => 4,  21 => 2,  19 => 1,);
    }
}
