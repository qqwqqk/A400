<?php

/* user.html */
class __TwigTemplate_d7020e893c584c780fb97fe3d19f3947a8bbbc13c4f63f9a50d6d403e6c1e943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "user.html", 1);
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
        echo "<link href=\"/app/views/style/user.css\" rel=\"stylesheet\" type=\"text/css\"/>

<h1>user</h1>
<form action=\"/user/revise\" method=\"POST\" class=\"form\">
    <fieldset class=\"user-table\">
        <legend>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo "您好！<input type=\"hidden\" name=\"user_id\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo "\" /></legend>
        <div class=\"user-div\">
            <label>目前您的党组织转移情况是：</label>
            <textarea class=\"stream-show\" readonly>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "stream", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"user-div\">
            <button type=\"submit\" class=\"user-submit\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "next", array()), "html", null, true);
        echo "</button>
        </div>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 11,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
<link href=\"/app/views/style/user.css\" rel=\"stylesheet\" type=\"text/css\"/>

<h1>user</h1>
<form action=\"/user/revise\" method=\"POST\" class=\"form\">
    <fieldset class=\"user-table\">
        <legend>{{info.id}}您好！<input type=\"hidden\" name=\"user_id\" value=\"{{info.id}}\" /></legend>
        <div class=\"user-div\">
            <label>目前您的党组织转移情况是：</label>
            <textarea class=\"stream-show\" readonly>{{info.stream}}</textarea>
        </div>
        <div class=\"user-div\">
            <button type=\"submit\" class=\"user-submit\">{{ info.next }}</button>
        </div>
    </fieldset>
</form>
{% endblock %}", "user.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\user.html");
    }
}
