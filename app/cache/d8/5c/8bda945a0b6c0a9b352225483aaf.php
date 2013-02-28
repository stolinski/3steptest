<?php

/* users.twig */
class __TwigTemplate_d85c8bda945a0b6c0a9b352225483aaf extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "settings")));
        // line 2
        echo "

<div class=\"row-fluid\">
    <div class=\"span9\">

        <h1>";
        // line 7
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h1>

    <table class='dashboardlisting'>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Level</th>
            <th>Lastseen</th>
            <th>Actions</th>
        </tr>
        ";
        // line 17
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "
        <tr class=\"";
            // line 19
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "enabled") == 0)) {
                echo "dim";
            }
            echo "\">
            <td class='id'>№ ";
            // line 20
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id"), "html", null, true);
            echo "</td>

            <td><strong>";
            // line 22
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "displayname"), "html", null, true);
            echo "</strong> (";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
            echo ") </td>
            <td>";
            // line 23
            if (isset($context["userlevels"])) { $_userlevels_ = $context["userlevels"]; } else { $_userlevels_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_userlevels_, $this->getAttribute($_user_, "userlevel"), array(), "array"), "html", null, true);
            echo " </td>
            <td>
                ";
            // line 25
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "lastseen") > "1000")) {
                // line 26
                echo "                    <time class=\"moment\" datetime=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "lastseen"), "c"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "lastseen"), "html", null, true);
                echo "\">";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "lastseen"), "html", null, true);
                echo "</time>
                ";
            } else {
                // line 28
                echo "                    -
                ";
            }
            // line 30
            echo "            </td>
            <td class='actions'>

                <div class=\"btn-group\">
                    <button class=\"btn btn-mini uselink\"><a href=\"";
            // line 34
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute($_user_, "id"))), "html", null, true);
            echo "\">
                        <i class=\"icon-edit\"></i> Edit</a>
                    </button>
                    <button class=\"btn dropdown-toggle btn-mini\" data-toggle=\"dropdown\">
                        <i class=\"icon-info-sign\"></i>
                        <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu pull-right\">
                        ";
            // line 42
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if ($this->getAttribute($_user_, "enabled")) {
                // line 43
                echo "                        <li><a href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "disable", "id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\">Disable ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "displayname"), "html", null, true);
                echo "</a></li>
                        ";
            } else {
                // line 45
                echo "                        <li><a href=\"";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "enable", "id" => $this->getAttribute($_user_, "id"))), "html", null, true);
                echo "\">Enable ";
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "displayname"), "html", null, true);
                echo "</a></li>
                        ";
            }
            // line 47
            echo "                        <li><a href=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useraction", array("action" => "delete", "id" => $this->getAttribute($_user_, "id"), "token" => $this->env->getExtension('Bolt')->token())), "html", null, true);
            echo "\" class=\"confirm\" data-confirm=\"Are you sure you want to delete '";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "displayname"), "html", null, true);
            echo "'?\">Delete ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "displayname"), "html", null, true);
            echo "</a></li>
                        <li class=\"divider\"></li>
                        <li><a class=\"nolink\">Last seen: <strong>";
            // line 49
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "lastseen") > "1000")) {
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_user_, "lastseen"), "Y-m-d H:i"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</strong></a></li>
                        <li><a class=\"nolink\">Last known IP: <strong>";
            // line 50
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (($this->getAttribute($_user_, "lastip") != "")) {
                if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_user_, "lastip"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</strong></a></li>
                    </ul>
                </div>

            </td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo "
    </table>

    </div><!-- /span9 -->
    <aside class=\"span3\">

        <section>
            <h2>Actions for Users</h2>
            <a class=\"btn\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => "")), "html", null, true);
        echo "\">New user</a>
        </section>

        <div id=\"latestactivity\">
            ";
        // line 70
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("latestactivity"));
        echo "
        </div>
        <div id=\"latesttemp\" style=\"display:none; visibility: hidden;\"><!-- intentionally left blank --></div>

    </aside>
</div>


";
        // line 78
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 78,  199 => 70,  192 => 66,  182 => 58,  162 => 50,  152 => 49,  139 => 47,  129 => 45,  119 => 43,  116 => 42,  104 => 34,  98 => 30,  94 => 28,  81 => 26,  78 => 25,  71 => 23,  63 => 22,  57 => 20,  50 => 19,  47 => 18,  42 => 17,  28 => 7,  21 => 2,  19 => 1,);
    }
}
