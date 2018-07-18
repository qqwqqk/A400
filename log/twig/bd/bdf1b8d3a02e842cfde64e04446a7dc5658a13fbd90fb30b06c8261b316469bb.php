<?php

/* save.html */
class __TwigTemplate_8aa5c4029e6baf2a5c38c1e438c760075141b11eaed36253eb98e0535e58b629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "save.html", 1);
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
        echo "<script src=\"/app/views/script/user_save.js\" type=\"text/javascript\"></script>
<link href=\"/app/views/style/user.css\" rel=\"stylesheet\" type=\"text/css\"/>

<form action=\"/user/save\" method=\"POST\" class=\"form\">
    <fieldset class=\"add-table\">
        <legend>
            <input type=\"radio\"  value=\"1\" id=\"fields_1\" name=\"fields\" onchange=\"fieldChange()\"/><label>市内</label>
            <input type=\"radio\"  value=\"0\" id=\"fields_0\" name=\"fields\" onchange=\"fieldChange()\"/><label>市外</label>
        </legend>
        <div>
            <input type=\"hidden\" id=\"field\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "field", array()), "html", null, true);
        echo "\" name=\"field\" />
            <input type=\"hidden\" id=\"sex\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "sex", array()), "html", null, true);
        echo "\" name=\"sex\" />
            <input type=\"hidden\" id=\"formal\"  value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "formal", array()), "html", null, true);
        echo "\" name=\"formal\" />
            <input type=\"hidden\" id=\"college\"  value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "college", array()), "html", null, true);
        echo "\" name=\"college\" />
            <input type=\"hidden\" id=\"nationality\"  value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "nationality", array()), "html", null, true);
        echo "\" name=\"nationality\" />
            <input type=\"hidden\" id=\"year\"  value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "date_y", array()), "html", null, true);
        echo "\" name=\"year\" />
            <input type=\"hidden\" id=\"month\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "date_m", array()), "html", null, true);
        echo "\" name=\"month\" />
        </div>
        <div class=\"letter-two\">
            <div class=\"letter-content\">
                <p class=\"number-id\">第";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "student_id", array()), "html", null, true);
        echo "号<input type=\"hidden\" name=\"user_id\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "student_id", array()), "html", null, true);
        echo "\"/></p><br/><br/>
                <p class=\"top-content\"><input type=\"text\" name=\"superior\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "superior", array()), "html", null, true);
        echo "\"></p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname\" class=\"input-content-short\" placeholder=\"请输入姓名\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "partyname", array()), "html", null, true);
        echo "\">同志
                    <select id=\"sexes\" name=\"sexes\" class=\"select-content\"><option value=\"1\" selected=\"selected\">男</option><option value=\"0\">女</option></select>，
                    <input type=\"text\" name=\"age\" class=\"input-content-text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "age", array()), "html", null, true);
        echo "\">岁，
                    <select id=\"nationalities\" class=\"select-content\" name=\"nationalities\"></select>族，系中共
                    <select id=\"formals\" name=\"formals\" class=\"select-contents\"><option value=\"1\" selected=\"selected\">正式</option><option value=\"0\">预备</option></select>党员，
                    身份证号<input type=\"text\" name=\"card_id\" class=\"input-content\" placeholder=\"请输入身份证号\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "card_id", array()), "html", null, true);
        echo "\">，
                    由<input type=\"text\" name=\"school\" class=\"input-content-short\" value=\"上海大学\" readonly>
                    去<input type=\"text\" name=\"base\" id=\"base\" class=\"input-content\" placeholder=\"请输入基层党委名称\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "base", array()), "html", null, true);
        echo "\">，请接转组织关系，
                    该同志党费已交到<select id=\"years\" name=\"years\" class=\"select-contents\"></select>年<select id=\"months\" name=\"months\" class=\"select-content\"></select>月
                    （有效期<input type=\"text\" id=\"data-d\" name=\"data-d\" class=\"input-content-text\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "date_d", array()), "html", null, true);
        echo "\" readonly>天）
                </p>
                <p class=\"data-content\">（盖章)<br/>
                    <input type=\"text\" name=\"data-y2\" class=\"input-content-year\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_y", array()), "html", null, true);
        echo "\" readonly>年
                    <input type=\"text\" name=\"data-m2\" class=\"input-content-data\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_m", array()), "html", null, true);
        echo "\" readonly>月
                    <input type=\"text\" name=\"data-d2\" class=\"input-content-data\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_d", array()), "html", null, true);
        echo "\" readonly>日
                </p><br/><br/><br/><br/><br/>

                <div>&nbsp;&nbsp;党员联系电话或其它联系方式：<input type=\"text\" name=\"telephone\" class=\"input-content\" placeholder=\"请输入联系电话\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "telephone", array()), "html", null, true);
        echo "\"></div>
                <div>&nbsp;&nbsp;党员原所在基层党委通讯地址：<select id=\"colleges\" name=\"colleges\" class=\"select-content-long\"></select></div>
                <div><br/>&nbsp;
                    联系电话：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                    传真：<span class=\"const-receipt\">021-66133796</span>&nbsp;&nbsp;&nbsp;
                    邮编：<span class=\"const-receipt\">200444</span>
                </div>
            </div>
            <div class=\"letter-content-right\"><br/>第<br/>二<br/>联<br/></div>
        </div>
        <div class=\"login-div\">
            <button type=\"submit\" class=\"login-submit\">保存</button>
            <a class=\"\" href=\"/show/show/id/";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "student_id", array()), "html", null, true);
        echo "\" target=\"_blank\">预览</a>
        </div>
    </fieldset>
</form>




";
    }

    public function getTemplateName()
    {
        return "save.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 55,  126 => 43,  120 => 40,  116 => 39,  112 => 38,  106 => 35,  101 => 33,  96 => 31,  90 => 28,  85 => 26,  80 => 24,  74 => 23,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
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
<script src=\"/app/views/script/user_save.js\" type=\"text/javascript\"></script>
<link href=\"/app/views/style/user.css\" rel=\"stylesheet\" type=\"text/css\"/>

<form action=\"/user/save\" method=\"POST\" class=\"form\">
    <fieldset class=\"add-table\">
        <legend>
            <input type=\"radio\"  value=\"1\" id=\"fields_1\" name=\"fields\" onchange=\"fieldChange()\"/><label>市内</label>
            <input type=\"radio\"  value=\"0\" id=\"fields_0\" name=\"fields\" onchange=\"fieldChange()\"/><label>市外</label>
        </legend>
        <div>
            <input type=\"hidden\" id=\"field\" value=\"{{info.field}}\" name=\"field\" />
            <input type=\"hidden\" id=\"sex\" value=\"{{info.sex}}\" name=\"sex\" />
            <input type=\"hidden\" id=\"formal\"  value=\"{{info.formal}}\" name=\"formal\" />
            <input type=\"hidden\" id=\"college\"  value=\"{{info.college}}\" name=\"college\" />
            <input type=\"hidden\" id=\"nationality\"  value=\"{{info.nationality}}\" name=\"nationality\" />
            <input type=\"hidden\" id=\"year\"  value=\"{{info.date_y}}\" name=\"year\" />
            <input type=\"hidden\" id=\"month\"  value=\"{{info.date_m}}\" name=\"month\" />
        </div>
        <div class=\"letter-two\">
            <div class=\"letter-content\">
                <p class=\"number-id\">第{{ info.student_id }}号<input type=\"hidden\" name=\"user_id\" value=\"{{info.student_id}}\"/></p><br/><br/>
                <p class=\"top-content\"><input type=\"text\" name=\"superior\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\" value=\"{{info.superior}}\"></p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname\" class=\"input-content-short\" placeholder=\"请输入姓名\" value=\"{{info.partyname}}\">同志
                    <select id=\"sexes\" name=\"sexes\" class=\"select-content\"><option value=\"1\" selected=\"selected\">男</option><option value=\"0\">女</option></select>，
                    <input type=\"text\" name=\"age\" class=\"input-content-text\" value=\"{{info.age}}\">岁，
                    <select id=\"nationalities\" class=\"select-content\" name=\"nationalities\"></select>族，系中共
                    <select id=\"formals\" name=\"formals\" class=\"select-contents\"><option value=\"1\" selected=\"selected\">正式</option><option value=\"0\">预备</option></select>党员，
                    身份证号<input type=\"text\" name=\"card_id\" class=\"input-content\" placeholder=\"请输入身份证号\" value=\"{{info.card_id}}\">，
                    由<input type=\"text\" name=\"school\" class=\"input-content-short\" value=\"上海大学\" readonly>
                    去<input type=\"text\" name=\"base\" id=\"base\" class=\"input-content\" placeholder=\"请输入基层党委名称\" value=\"{{info.base}}\">，请接转组织关系，
                    该同志党费已交到<select id=\"years\" name=\"years\" class=\"select-contents\"></select>年<select id=\"months\" name=\"months\" class=\"select-content\"></select>月
                    （有效期<input type=\"text\" id=\"data-d\" name=\"data-d\" class=\"input-content-text\" value=\"{{info.date_d}}\" readonly>天）
                </p>
                <p class=\"data-content\">（盖章)<br/>
                    <input type=\"text\" name=\"data-y2\" class=\"input-content-year\" value=\"{{info.current_date_y}}\" readonly>年
                    <input type=\"text\" name=\"data-m2\" class=\"input-content-data\" value=\"{{info.current_date_m}}\" readonly>月
                    <input type=\"text\" name=\"data-d2\" class=\"input-content-data\" value=\"{{info.current_date_d}}\" readonly>日
                </p><br/><br/><br/><br/><br/>

                <div>&nbsp;&nbsp;党员联系电话或其它联系方式：<input type=\"text\" name=\"telephone\" class=\"input-content\" placeholder=\"请输入联系电话\" value=\"{{info.telephone}}\"></div>
                <div>&nbsp;&nbsp;党员原所在基层党委通讯地址：<select id=\"colleges\" name=\"colleges\" class=\"select-content-long\"></select></div>
                <div><br/>&nbsp;
                    联系电话：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                    传真：<span class=\"const-receipt\">021-66133796</span>&nbsp;&nbsp;&nbsp;
                    邮编：<span class=\"const-receipt\">200444</span>
                </div>
            </div>
            <div class=\"letter-content-right\"><br/>第<br/>二<br/>联<br/></div>
        </div>
        <div class=\"login-div\">
            <button type=\"submit\" class=\"login-submit\">保存</button>
            <a class=\"\" href=\"/show/show/id/{{info.student_id}}\" target=\"_blank\">预览</a>
        </div>
    </fieldset>
</form>




{% endblock %}", "save.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\save.html");
    }
}
