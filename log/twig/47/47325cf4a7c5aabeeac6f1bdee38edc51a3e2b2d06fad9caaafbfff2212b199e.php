<?php

/* add.html */
class __TwigTemplate_792d98a839dc2497e0c626f3bb03e6bd99246631ef1ddb78fdbe3ffe64b8586c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "add.html", 2);
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
        echo "<form action=\"/index/save\" method=\"POST\" class=\"form\">
    <fieldset>
        <legend>添加信息</legend>
        <div class=\"am-form-group\">
            <input type=\"text\" name=\"student_id\" class=\"\" placeholder=\"请输入student_id\">
        </div>
        <div class=\"am-form-group\">
            <textarea name=\"partyname\" class=\"\" placeholder=\"请输入partyname\"></textarea>
        </div>
        <p><button type=\"submit\" class=\"am-btnam-btn-default\">提交</button></p>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "add.html";
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
<form action=\"/index/save\" method=\"POST\" class=\"form\">
    <fieldset>
        <legend>添加信息</legend>
        <div class=\"am-form-group\">
            <input type=\"text\" name=\"student_id\" class=\"\" placeholder=\"请输入student_id\">
        </div>
        <div class=\"am-form-group\">
            <textarea name=\"partyname\" class=\"\" placeholder=\"请输入partyname\"></textarea>
        </div>
        <p><button type=\"submit\" class=\"am-btnam-btn-default\">提交</button></p>
    </fieldset>
</form>
{% endblock %}", "add.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\add.html");
    }
}
