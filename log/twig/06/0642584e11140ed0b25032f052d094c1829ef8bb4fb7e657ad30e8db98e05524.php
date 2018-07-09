<?php

/* index.html */
class __TwigTemplate_aaddcf15c862dd4679ea70652a8ce5491ec58625bf52fc84d6a6ab1ba1be3e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "index.html", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 6
            echo "    <li class=\"am-u-sm-3\">
        <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "student_id", array()), "html", null, true);
            echo "</h1>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "partyname", array()), "html", null, true);
            echo "</p>
        <p><span>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "data", array()), "html", null, true);
            echo "</span></p>
        <a class=\"\" href=\"/index/info/id/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">详细信息</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"layout.html\" %}
{% block content %}
<ul>
    {% for val in data%}
    <li class=\"am-u-sm-3\">
        <h1>{{ val.student_id }}</h1>
        <p>{{ val.partyname }}</p>
        <p><span>{{ val.data }}</span></p>
        <a class=\"\" href=\"/index/info/id/{{ val.id }}\">详细信息</a>
    </li>
    {% endfor %}

</ul>
{% endblock %}", "index.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\index.html");
    }
}
