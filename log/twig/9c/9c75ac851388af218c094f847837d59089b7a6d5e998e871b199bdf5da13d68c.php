<?php

/* registration.html */
class __TwigTemplate_4e3994415d15d2bbc6456544d9068144646e4cf97c691babbe6f4b7ad4b957a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "registration.html", 2);
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
        echo "<a class=\"test-css\" href=\"/\">登录界面</a>
<a class=\"test-css\" href=\"/index/registration\">帐号申请</a>

<form action=\"/index/rlogin\" method=\"POST\" class=\"form\">
    <fieldset class=\"login-table\">
        <legend>新用户注册</legend>
        <div class=\"login-div\">
            <label>帐号：</label>
            <input type=\"text\" name=\"student_id\" class=\"\" placeholder=\"请输入学号\">
        </div>
        <div class=\"login-div\">
            <label>密码：</label>
            <input type=\"password\" name=\"password\" class=\"\" placeholder=\"请输入密码\">
        </div>
        <div class=\"login-div\">
            <label>确认：</label>
            <input type=\"password\" name=\"password2\" class=\"\" placeholder=\"请再次输入密码\">
        </div>
        <div class=\"login-div\">
            <button type=\"submit\" class=\"registration-submit\">注册并登录</button>
        </div>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "registration.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
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
<a class=\"test-css\" href=\"/\">登录界面</a>
<a class=\"test-css\" href=\"/index/registration\">帐号申请</a>

<form action=\"/index/rlogin\" method=\"POST\" class=\"form\">
    <fieldset class=\"login-table\">
        <legend>新用户注册</legend>
        <div class=\"login-div\">
            <label>帐号：</label>
            <input type=\"text\" name=\"student_id\" class=\"\" placeholder=\"请输入学号\">
        </div>
        <div class=\"login-div\">
            <label>密码：</label>
            <input type=\"password\" name=\"password\" class=\"\" placeholder=\"请输入密码\">
        </div>
        <div class=\"login-div\">
            <label>确认：</label>
            <input type=\"password\" name=\"password2\" class=\"\" placeholder=\"请再次输入密码\">
        </div>
        <div class=\"login-div\">
            <button type=\"submit\" class=\"registration-submit\">注册并登录</button>
        </div>
    </fieldset>
</form>
{% endblock %}", "registration.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\registration.html");
    }
}
