<?php

/* login.html */
class __TwigTemplate_5f5f78c22bb36c18280caf1217db57e31e5ad05a4c389e7b9ad28b840691110f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "login.html", 2);
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
<script src=\"/app/views/script/script.js\" type=\"text/javascript\"></script>
<input type=\"button\" value=\"开始游戏\" onclick=\"attackEnemy()\"/>
<form action=\"/index/login\" method=\"POST\" class=\"form\">
    <fieldset class=\"login-table\">
        <legend>用户登录</legend>
        <div class=\"login-div\">
            <label>帐号：</label>
            <input type=\"text\" name=\"student_id\" class=\"\" placeholder=\"请输入学号\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"login-div\">
            <label>密码：</label>
            <input type=\"password\" name=\"password\" class=\"\" placeholder=\"请输入密码\">
        </div>
        <div class=\"login-div\">
            <input type=\"radio\" value=\"0\" name=\"admin\" checked=\"checked\"/><label>普通用户</label>
            <input type=\"radio\" value=\"1\" name=\"admin\"/><label>授权用户</label>
        </div>
        <div class=\"login-div\">
            <span class=\"error-info\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "error", array()), "html", null, true);
        echo "</span>
            <button type=\"submit\" class=\"login-submit\">登录</button>
        </div>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  42 => 13,  31 => 4,  28 => 3,  11 => 2,);
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
<script src=\"/app/views/script/script.js\" type=\"text/javascript\"></script>
<input type=\"button\" value=\"开始游戏\" onclick=\"attackEnemy()\"/>
<form action=\"/index/login\" method=\"POST\" class=\"form\">
    <fieldset class=\"login-table\">
        <legend>用户登录</legend>
        <div class=\"login-div\">
            <label>帐号：</label>
            <input type=\"text\" name=\"student_id\" class=\"\" placeholder=\"请输入学号\" value=\"{{ data.id }}\">
        </div>
        <div class=\"login-div\">
            <label>密码：</label>
            <input type=\"password\" name=\"password\" class=\"\" placeholder=\"请输入密码\">
        </div>
        <div class=\"login-div\">
            <input type=\"radio\" value=\"0\" name=\"admin\" checked=\"checked\"/><label>普通用户</label>
            <input type=\"radio\" value=\"1\" name=\"admin\"/><label>授权用户</label>
        </div>
        <div class=\"login-div\">
            <span class=\"error-info\">{{ data.error }}</span>
            <button type=\"submit\" class=\"login-submit\">登录</button>
        </div>
    </fieldset>
</form>
{% endblock %}", "login.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\login.html");
    }
}
