<?php

/* editcontent.twig */
class __TwigTemplate_14a88ab14a06522ec2f4454fb688b2e0 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "content")));
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span9\">

    <h2>";
        // line 6
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</h2>

    <form method=\"post\" id=\"editcontent\" enctype=\"multipart/form-data\">

        ";
        // line 10
        $this->env->loadTemplate("_sub_editfields.twig")->display($context);
        // line 11
        echo "
        <hr>

        ";
        // line 14
        $this->env->loadTemplate("_sub_editrelations.twig")->display($context);
        // line 15
        echo "
        ";
        // line 16
        $this->env->loadTemplate("_sub_edittaxonomies.twig")->display($context);
        // line 17
        echo "
        <label><b><span class='left'>Id:</span></b>
        <input type='text' readonly=readonly name='id' value='";
        // line 19
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_content_, "id"), "html", null, true);
        echo "' class=\"narrow\">
        </label>

        <label><b><span class='left'>Publication date:</span></b>
        </label>
            <input type=\"text\" name=\"datepublish-dateformatted\" id=\"datepublish-date\"
                   value='";
        // line 25
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datepublish"), "l, d F Y"), "html", null, true);
        echo "' class='datepicker'>
            <input type=\"text\" name=\"datepublish-timeformatted\" id=\"datepublish-time\"
                   value='";
        // line 27
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datepublish"), "H:i"), "html", null, true);
        echo "' class='timepicker'>

        ";
        // line 29
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "datecreated") > "1970-01-01 01:01:01")) {
            // line 30
            echo "        <br>This ";
            if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
            echo " was created
        <time class=\"moment\" datetime=\"";
            // line 31
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datecreated"), "c"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "datecreated"), "html", null, true);
            echo "\">";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "datecreated"), "html", null, true);
            echo "</time>
        and edited
        <time class=\"moment\" datetime=\"";
            // line 33
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_content_, "datechanged"), "c"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "datechanged"), "html", null, true);
            echo "\">";
            if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_content_, "datechanged"), "html", null, true);
            echo "</time>.
        ";
        }
        // line 35
        echo "

        <label><b><span class='left'>Status:</span></b>
        <select name=\"status\">
            <option value=\"published\" ";
        // line 39
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") == "published")) {
            echo "selected";
        }
        echo ">Published</option>
            <option value=\"held\" ";
        // line 40
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") == "held")) {
            echo "selected";
        }
        echo ">Not published</option>
            <option value=\"timed\" ";
        // line 41
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") == "timed")) {
            echo "selected";
        }
        echo ">Timed publish</option>
            <option value=\"draft\" ";
        // line 42
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if (($this->getAttribute($_content_, "status") == "draft")) {
            echo "selected";
        }
        echo ">Draft</option>

        </select>
        </label>

        <label><b><span class='left'>Owner:</span></b>
        <select name=\"username\">
            ";
        // line 49
        if (isset($context["users"])) { $_users_ = $context["users"]; } else { $_users_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_users_);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 50
            echo "                <option value=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "username"), "html", null, true);
            echo "\" ";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (isset($context["contentowner"])) { $_contentowner_ = $context["contentowner"]; } else { $_contentowner_ = null; }
            if (($this->getAttribute($_user_, "username") == $_contentowner_)) {
                echo "selected";
            }
            echo ">";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_user_, "displayname"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "        </select>
        </label>

        <button type=\"submit\" class=\"btn btn-primary\" id=\"savebutton\" style=\"margin-right: 8px;\">
            <i class=\"icon-flag\"></i> Save ";
        // line 56
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
        echo "
        </button>

        <button type=\"button\" class=\"btn btn-info\" id=\"previewbutton\">
            <i class=\"icon-external-link\"></i> Preview ";
        // line 60
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
        echo "
        </button>


    </form>


    </div><!-- /span9 -->
    <aside class=\"span3\">

    <section>
    <h2>Actions for this ";
        // line 71
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
        echo "</h2>

    <button type=\"submit\" class=\"btn btn-primary\" id=\"sidebarsavebutton\" style=\"margin-right: 8px;\"><i class=\"icon-flag\"></i> Save ";
        // line 73
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_name"), "html", null, true);
        echo "</a>

    <button type=\"button\" class=\"btn btn-info\" id=\"sidebarpreviewbutton\"><i class=\"icon-external-link\"></i> Preview </a>

    <script>
        // Save the page..
        \$('#savebutton, #sidebarsavebutton').bind('click', function(e){
            e.preventDefault();
            \$('#editcontent').attr('action', '').attr('target', \"_self\").submit();
        });

        // To preview the page, we set the target of the form to a new URL, and open it in a new window.
        \$('#previewbutton, #sidebarpreviewbutton').bind('click', function(e){
            e.preventDefault();
            var link = \"";
        // line 87
        if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
        echo "\" + \"preview\" + \"/";
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_contenttype_, "singular_slug"), "html", null, true);
        echo "\";
            \$('#editcontent').attr('action', link).attr('target', \"_blank\").submit();

        });
    </script>

    </section>

";
        // line 95
        if (isset($context["contenttype"])) { $_contenttype_ = $context["contenttype"]; } else { $_contenttype_ = null; }
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $this->getAttribute($_contenttype_, "slug"))));
        echo "

    </aside>
</div>


";
        // line 101
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 101,  240 => 95,  225 => 87,  207 => 73,  201 => 71,  186 => 60,  178 => 56,  172 => 52,  153 => 50,  148 => 49,  135 => 42,  128 => 41,  121 => 40,  114 => 39,  108 => 35,  96 => 33,  84 => 31,  78 => 30,  75 => 29,  69 => 27,  63 => 25,  53 => 19,  49 => 17,  47 => 16,  44 => 15,  42 => 14,  37 => 11,  35 => 10,  27 => 6,  21 => 2,  19 => 1,);
    }
}
