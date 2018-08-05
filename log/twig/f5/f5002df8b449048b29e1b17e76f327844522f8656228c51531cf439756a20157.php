<?php

/* passwd.html */
class __TwigTemplate_cf80d383ed1bc7f1de815e8a5dfc902fba9b54e1f7627e3940301612b4060860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "passwd.html", 1);
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

<form action=\"/admin/passwd\" method=\"POST\" class=\"form\">
    <fieldset class=\"admin-div\">
        <legend>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["admin"]) ? $context["admin"] : null), "html", null, true);
        echo "您好！ <input type=\"hidden\" name=\"id\" value=";
        echo twig_escape_filter($this->env, (isset($context["admin"]) ? $context["admin"] : null), "html", null, true);
        echo "></legend>
        <div class=\"admin-left\">
            <label>学号：</label><input id=\"student_id\" name=\"student_id\" placeholder=\"请输入学号\" class=\"\"/><br/><br/>
            <label>密码：</label><input type=\"password\" id=\"password\" name=\"password\" placeholder=\"请输入新密码\" class=\"\"/><br/><br/>
            <button class=\"admin-button\">修改</button>
        </div>
        <div class=\"admin-right\">
            <a href=\"/admin/admin/id/";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["admin"]) ? $context["admin"] : null), "html", null, true);
        echo "\">信息处理</a>
            <a href=\"/admin/passwd/id/";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["admin"]) ? $context["admin"] : null), "html", null, true);
        echo "\">信息修改</a>
        </div>
    </fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "passwd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 15,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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

<form action=\"/admin/passwd\" method=\"POST\" class=\"form\">
    <fieldset class=\"admin-div\">
        <legend>{{admin}}您好！ <input type=\"hidden\" name=\"id\" value={{admin}}></legend>
        <div class=\"admin-left\">
            <label>学号：</label><input id=\"student_id\" name=\"student_id\" placeholder=\"请输入学号\" class=\"\"/><br/><br/>
            <label>密码：</label><input type=\"password\" id=\"password\" name=\"password\" placeholder=\"请输入新密码\" class=\"\"/><br/><br/>
            <button class=\"admin-button\">修改</button>
        </div>
        <div class=\"admin-right\">
            <a href=\"/admin/admin/id/{{admin}}\">信息处理</a>
            <a href=\"/admin/passwd/id/{{admin}}\">信息修改</a>
        </div>
    </fieldset>
</form>

{% endblock %}
", "passwd.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\passwd.html");
    }
}
