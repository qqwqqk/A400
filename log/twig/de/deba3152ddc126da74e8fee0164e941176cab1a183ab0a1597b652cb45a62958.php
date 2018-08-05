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
        echo "<script src=\"/app/views/script/admin.js\" type=\"text/javascript\"></script>
<link href=\"/app/views/style/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>

<form action=\"/admin/admin\" method=\"POST\" class=\"form\">
    <fieldset class=\"admin-div\">
        <legend>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array()), "html", null, true);
        echo "您好！ <input type=\"hidden\" name=\"id\" value=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array()), "html", null, true);
        echo "></legend>
        <div class=\"admin-left\">
            <label>学号：</label><input id=\"student_id\" name=\"student_id\" placeholder=\"请输入学号\" class=\"\"/><br/><br/>
            <label>申请状态：</label>
            <select id=\"fulfils\" name=\"fulfil\">
                <option value=\"0\">未申请</option>
                <option value=\"1\">申请中</option>
                <option value=\"2\">待领取</option>
                <option value=\"3\">待回执</option>
                <option value=\"4\">待网转</option>
                <option value=\"5\">已完成</option>
            </select><br/><br/>
            <button class=\"admin-button\">查询</button>
        </div>
        <div class=\"admin-right\">
            <a href=\"/admin/admin/id/";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array()), "html", null, true);
        echo "\">信息处理</a>
            <a href=\"/admin/passwd/id/";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array()), "html", null, true);
        echo "\">信息修改</a>
        </div>
    </fieldset>

    <input type=\"hidden\" id=\"fulfil\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "fulfil", array()), "html", null, true);
        echo "\"/>

    <table class=\"admin-table\" id=\"table\">
        <tr id=\"tr\" class=\"admin-table-top\"></tr>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 33
            echo "        <tr id=\"trs\" class=\"admin-table-tr\">
            <td class=\"admin-table-td\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "student_id", array()), "html", null, true);
            echo "</td>
            <td class=\"admin-table-td\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "partyname", array()), "html", null, true);
            echo "</td>
            <td class=\"admin-table-td\"><a class=\"\" href=\"/show/show/id/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "student_id", array()), "html", null, true);
            echo "\" target=\"_blank\">预览</a></td>
            <td class=\"admin-table-td\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "time_apply", array()), "html", null, true);
            echo "</td>
            <td class=\"admin-table-td\"><a class=\"\" id=\"handle_";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "student_id", array()), "html", null, true);
            echo "\" name=\"handles\" href=\"/admin/handle/id/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "student_id", array()), "html", null, true);
            echo "/fulfil/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "fulfil", array()), "html", null, true);
            echo "\">办理</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </table>
</form>

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
        return array (  112 => 41,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  80 => 33,  76 => 32,  69 => 28,  62 => 24,  58 => 23,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
<script src=\"/app/views/script/admin.js\" type=\"text/javascript\"></script>
<link href=\"/app/views/style/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>

<form action=\"/admin/admin\" method=\"POST\" class=\"form\">
    <fieldset class=\"admin-div\">
        <legend>{{admin.id}}您好！ <input type=\"hidden\" name=\"id\" value={{admin.id}}></legend>
        <div class=\"admin-left\">
            <label>学号：</label><input id=\"student_id\" name=\"student_id\" placeholder=\"请输入学号\" class=\"\"/><br/><br/>
            <label>申请状态：</label>
            <select id=\"fulfils\" name=\"fulfil\">
                <option value=\"0\">未申请</option>
                <option value=\"1\">申请中</option>
                <option value=\"2\">待领取</option>
                <option value=\"3\">待回执</option>
                <option value=\"4\">待网转</option>
                <option value=\"5\">已完成</option>
            </select><br/><br/>
            <button class=\"admin-button\">查询</button>
        </div>
        <div class=\"admin-right\">
            <a href=\"/admin/admin/id/{{admin.id}}\">信息处理</a>
            <a href=\"/admin/passwd/id/{{admin.id}}\">信息修改</a>
        </div>
    </fieldset>

    <input type=\"hidden\" id=\"fulfil\" value=\"{{ admin.fulfil }}\"/>

    <table class=\"admin-table\" id=\"table\">
        <tr id=\"tr\" class=\"admin-table-top\"></tr>
        {% for val in info %}
        <tr id=\"trs\" class=\"admin-table-tr\">
            <td class=\"admin-table-td\">{{ val.student_id }}</td>
            <td class=\"admin-table-td\">{{ val.partyname }}</td>
            <td class=\"admin-table-td\"><a class=\"\" href=\"/show/show/id/{{val.student_id}}\" target=\"_blank\">预览</a></td>
            <td class=\"admin-table-td\">{{ val.time_apply }}</td>
            <td class=\"admin-table-td\"><a class=\"\" id=\"handle_{{val.student_id}}\" name=\"handles\" href=\"/admin/handle/id/{{val.student_id}}/fulfil/{{val.fulfil}}\">办理</a></td>
        </tr>
        {% endfor %}
    </table>
</form>

{% endblock %}
", "admin.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\admin.html");
    }
}
