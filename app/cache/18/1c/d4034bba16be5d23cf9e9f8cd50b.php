<?php

/* _sub_mainmenu.twig */
class __TwigTemplate_181cd4034bba16be5d23cf9e9f8cd50b extends Twig_Template
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
        echo "<div class=\"nav-collapse\">
    <ul class=\"nav pull-right\">
        ";
        // line 3
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!(null === $this->getAttribute($this->getAttribute($_app_, "session"), "get", array(0 => "user"), "method")))) {
            // line 4
            echo "            <li class=\"";
            if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
            if (twig_in_filter($_active_, array(0 => "", 1 => "dashboard"))) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dashboard"), "html", null, true);
            echo "\">
                <i class=\"icon-home\"></i> Dashboard</a></li>
            <li class=\"";
            // line 6
            if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
            if (($_active_ == "content")) {
                echo "active ";
            }
            echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-sitemap\"></i> Content <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
            // line 11
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "config"), "contenttypes"));
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
            foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
                // line 12
                echo "                        ";
                if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $_slug_))) {
                    // line 13
                    echo "                            <li><a href=\"";
                    if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" => $_slug_)), "html", null, true);
                    echo "\">
                                <i class=\"icon-tasks\"></i> View ";
                    // line 14
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "name"), "html", null, true);
                    echo "</a></li>
                            <li><a href=\"";
                    // line 15
                    if (isset($context["slug"])) { $_slug_ = $context["slug"]; } else { $_slug_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $_slug_, "id" => "")), "html", null, true);
                    echo "\">
                                <i class=\"icon-plus\"></i> New ";
                    // line 16
                    if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
                    echo "</a></li>
                            ";
                    // line 17
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "last"))) {
                        echo "<li class=\"divider\"></li>";
                    }
                    // line 18
                    echo "                        ";
                }
                // line 19
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "
                </ul>
            </li>

            ";
            // line 24
            if ($this->env->getExtension('Bolt')->isAllowed("settings")) {
                // line 25
                echo "            <li class=\"";
                if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
                if (($_active_ == "settings")) {
                    echo "active ";
                }
                echo "dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cogs\"></i> Settings
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                // line 30
                if ($this->env->getExtension('Bolt')->isAllowed("files:config")) {
                    // line 31
                    echo "                        <li class=\"nav-header\">Configuration</li>
                        <li><a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users"), "html", null, true);
                    echo "\"><i class=\"icon-group\"></i> Users</a></li>
                        <li><a href=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/config.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-cog\"></i> Configuration</a></li>
                        <li><a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/contenttypes.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-cog\"></i> Contenttypes</a></li>
                        <li><a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/menu.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-cog\"></i> Menu setup</a></li>
                        <li><a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => "app/config/taxonomy.yml")), "html", null, true);
                    echo "\">
                            <i class=\"icon-tags\"></i> Taxonomy</a></li>
                        <li class=\"divider\"></li>
                    ";
                }
                // line 43
                echo "                    <li class=\"nav-header\">Maintenance</li>
                    ";
                // line 44
                if ($this->env->getExtension('Bolt')->isAllowed("extensions")) {
                    // line 45
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extensions"), "html", null, true);
                    echo "\"><i class=\"icon-briefcase\"></i> Extensions</a></li>
                    ";
                }
                // line 47
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("dbupdate")) {
                    // line 48
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dbupdate"), "html", null, true);
                    echo "\"><i class=\"icon-wrench\"></i> Check database</a></li>
                    ";
                }
                // line 50
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("clearcache")) {
                    // line 51
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clearcache"), "html", null, true);
                    echo "\"><i class=\"icon-magic\"></i> Clear the cache</a></li>
                    ";
                }
                // line 53
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("activitylog")) {
                    // line 54
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activitylog"), "html", null, true);
                    echo "\"><i class=\"icon-file\"></i> Activity log</a></li>
                    ";
                }
                // line 56
                echo "                    <li class=\"divider\"></li>
                    <li class=\"nav-header\">File Management</li>
                    ";
                // line 58
                if ($this->env->getExtension('Bolt')->isAllowed("files:theme")) {
                    // line 59
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => "theme")), "html", null, true);
                    echo "\"><i class=\"icon-hdd\"></i> View / edit Templates</a></li>
                    ";
                }
                // line 61
                echo "                    ";
                if ($this->env->getExtension('Bolt')->isAllowed("files:uploads")) {
                    // line 62
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => "files")), "html", null, true);
                    echo "\"><i class=\"icon-hdd\"></i> Uploaded files</a></li>
                    ";
                }
                // line 64
                echo "
                </ul>
            </li>
            ";
            }
            // line 68
            echo "
            <li class=\"divider-vertical\"></li>

            <li><a href=\"";
            // line 71
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> View site</a></li>
            <li class=\"divider-vertical\"></li>
            <li>
                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\"><i class=\"icon-signout\"></i> Logout ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($_user_, "displayname"), 16);
            echo "</a>
            </li>
        ";
        } else {
            // line 77
            echo "            <li class=\"divider-vertical\"></li>
            <li><a href=\"";
            // line 78
            if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-external-link\"></i> View site</a></li>
            <li class=\"divider-vertical\"></li>
            <li>
                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\"><i class=\"icon-signin\"></i> Login</a>
            </li>
        ";
        }
        // line 84
        echo "    </ul>
</div><!--/.nav-collapse -->
";
    }

    public function getTemplateName()
    {
        return "_sub_mainmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 84,  260 => 81,  241 => 74,  223 => 64,  217 => 62,  208 => 59,  206 => 58,  202 => 56,  196 => 54,  193 => 53,  187 => 51,  184 => 50,  178 => 48,  167 => 44,  157 => 39,  147 => 35,  142 => 33,  138 => 32,  135 => 31,  133 => 30,  121 => 25,  119 => 24,  113 => 20,  99 => 19,  96 => 18,  91 => 17,  86 => 16,  76 => 14,  70 => 13,  66 => 12,  26 => 4,  23 => 3,  305 => 97,  301 => 95,  291 => 93,  286 => 92,  282 => 90,  276 => 88,  272 => 86,  253 => 78,  250 => 77,  247 => 79,  243 => 77,  233 => 75,  228 => 74,  224 => 72,  221 => 71,  210 => 63,  199 => 60,  195 => 59,  186 => 52,  182 => 51,  173 => 46,  168 => 45,  163 => 44,  153 => 42,  146 => 40,  140 => 37,  134 => 35,  128 => 33,  118 => 31,  112 => 29,  106 => 27,  101 => 26,  90 => 23,  84 => 21,  79 => 20,  69 => 18,  63 => 16,  57 => 14,  46 => 11,  41 => 10,  36 => 9,  27 => 7,  279 => 89,  268 => 84,  262 => 84,  257 => 83,  249 => 73,  234 => 71,  229 => 68,  214 => 61,  212 => 64,  209 => 64,  191 => 63,  180 => 57,  175 => 47,  169 => 45,  164 => 43,  158 => 43,  155 => 50,  152 => 37,  149 => 48,  131 => 47,  127 => 45,  123 => 32,  117 => 42,  110 => 39,  104 => 38,  100 => 37,  95 => 24,  92 => 35,  87 => 32,  81 => 15,  74 => 19,  68 => 27,  64 => 26,  59 => 25,  51 => 12,  48 => 11,  44 => 16,  37 => 6,  32 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
