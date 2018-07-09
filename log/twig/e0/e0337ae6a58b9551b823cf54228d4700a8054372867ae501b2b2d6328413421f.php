<?php

/* layout.html */
class __TwigTemplate_00c56c4124b1c1ec8a439a371b8746ee6c525d3f346f1ad761ebe7908aa1b4fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>YGBA400</title>
</head>
<body>
<header>
    <a class=\"am-btn-default\" href=\"/\">所有信息</a>
    <a class=\"am-btn-default\" href=\"/index/add\">添加信息</a>
</header>
<content>
    ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "</content>
<footer>footer</footer>
</body>
</html>";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  43 => 13,  36 => 16,  34 => 13,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>YGBA400</title>
</head>
<body>
<header>
    <a class=\"am-btn-default\" href=\"/\">所有信息</a>
    <a class=\"am-btn-default\" href=\"/index/add\">添加信息</a>
</header>
<content>
    {% block content %}

    {% endblock %}
</content>
<footer>footer</footer>
</body>
</html>", "layout.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\layout.html");
    }
}
