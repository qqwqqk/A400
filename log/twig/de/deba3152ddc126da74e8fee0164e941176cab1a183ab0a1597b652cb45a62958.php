<?php

/* admin.html */
class __TwigTemplate_c479b0cc795c2cb3162547b1739ef6f2bc8804f312371285c4c31af96087859a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "admin.html", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1> admin </h1>
<input type=\"hidden\" name=\"id\" value=\"0\">
<table>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 7
            echo "    <tr>
        <td>学号：";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "student_id", array()), "html", null, true);
            echo "</td>
        <td>姓名：";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "partyname", array()), "html", null, true);
            echo "</td>
        <td>状态码：";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "stream", array()), "html", null, true);
            echo "</td>
        <td>日期：";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "data", array()), "html", null, true);
            echo "</td>
        <td><a class=\"\" href=\"/show/show/id/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "student_id", array()), "html", null, true);
            echo "\" target=\"_blank\">预览</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}
<h1> admin </h1>
<input type=\"hidden\" name=\"id\" value=\"0\">
<table>
    {% for val in info %}
    <tr>
        <td>学号：{{ val.student_id }}</td>
        <td>姓名：{{ val.partyname }}</td>
        <td>状态码：{{ val.stream }}</td>
        <td>日期：{{ val.data }}</td>
        <td><a class=\"\" href=\"/show/show/id/{{val.student_id}}\" target=\"_blank\">预览</a></td>
    </tr>
    {% endfor %}
</table>

{% endblock %}", "admin.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\admin.html");
    }
}
