<?php

/* _sub_taxonomylinks.twig */
class __TwigTemplate_c863ba821d2d2c6f0bd52ee6e47e0ab7 extends Twig_Template
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
        if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
        if ($this->getAttribute($_record_, "taxonomy", array(), "any", true, true)) {
            // line 2
            echo "    ";
            if (isset($context["record"])) { $_record_ = $context["record"]; } else { $_record_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_record_, "taxonomy"));
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
            foreach ($context['_seq'] as $context["type"] => $context["values"]) {
                // line 3
                echo "        <em>";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo ":</em>
        ";
                // line 4
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_values_);
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
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 5
                    echo "                <a href=\"";
                    if (isset($context["paths"])) { $_paths_ = $context["paths"]; } else { $_paths_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_paths_, "root"), "html", null, true);
                    if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                    echo twig_escape_filter($this->env, $_type_, "html", null, true);
                    echo "/";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "\">";
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</a>";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ((!$this->getAttribute($_loop_, "last"))) {
                        echo ", ";
                    }
                    // line 6
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 7
                echo "        ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ((!$this->getAttribute($_loop_, "last"))) {
                    echo " - ";
                }
                // line 8
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 8,  96 => 7,  82 => 6,  47 => 4,  41 => 3,  39 => 8,  35 => 7,  27 => 3,  22 => 2,  189 => 24,  173 => 21,  169 => 19,  150 => 15,  141 => 14,  130 => 13,  94 => 11,  88 => 9,  72 => 5,  61 => 4,  37 => 2,  172 => 79,  165 => 77,  156 => 75,  131 => 59,  117 => 49,  108 => 42,  99 => 33,  93 => 31,  81 => 6,  59 => 21,  54 => 16,  46 => 15,  40 => 3,  33 => 13,  30 => 4,  162 => 76,  153 => 54,  151 => 73,  140 => 64,  137 => 63,  118 => 38,  115 => 37,  112 => 12,  105 => 34,  98 => 32,  91 => 10,  87 => 30,  84 => 27,  76 => 25,  71 => 24,  68 => 21,  65 => 5,  56 => 18,  52 => 16,  34 => 15,  31 => 14,  21 => 2,  19 => 1,);
    }
}
