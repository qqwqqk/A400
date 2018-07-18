<?php

/* show.html */
class __TwigTemplate_d712b269f40bd9b2ed5d0bcbc7d407301e2c118d8148c0adb96b09ca26d4d147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset = UTF-8\">
    <title>YGBA400</title>
    <link href=\"/app/views/style/show.css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>
<body>
<header></header>
<!-- 代码注释 -->
<content>
    <form class=\"form\">
        <fieldset class=\"add-table\">
            <div class=\"letter-one\">
                <div class=\"letter-root-top\"><br/>党<br/>员<br/>介<br/>绍<br/>信<br/>存<br/>根<br/></div>
                <div class=\"letter-root\">
                    <p class=\"number-id\">第";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "student_id", array()), "html", null, true);
        echo "号</p><br/><br/>
                    <p class=\"text-content\">
                        <input type=\"text\" name=\"partyname1\" class=\"input-content-short\" placeholder=\"请输入姓名\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "partyname", array()), "html", null, true);
        echo "\" readonly>同志，
                        系中共<input type=\"text\" name=\"formal1\" class=\"input-content-texts\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "formals", array()), "html", null, true);
        echo "\" readonly>党员，
                        组织关系由<input type=\"text\" name=\"school1\" class=\"input-content-short\" value=\"上海大学\" readonly>
                        转到<input type=\"text\" name=\"superior1\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "superior", array()), "html", null, true);
        echo "\" readonly>。
                    </p>
                    <p class=\"data-content\">
                        <input type=\"text\" name=\"data-y1\" class=\"input-content-year\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_y", array()), "html", null, true);
        echo "\" readonly>年
                        <input type=\"text\" name=\"data-m1\" class=\"input-content-data\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_m", array()), "html", null, true);
        echo "\" readonly>月
                        <input type=\"text\" name=\"data-d1\" class=\"input-content-data\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_d", array()), "html", null, true);
        echo "\" readonly>日
                    </p>
                </div>
                <div class=\"letter-root-right\"><br/>第<br/>一<br/>联<br/></div>
            </div>
            <br/>
            <div class=\"letter-two\">
                <div class=\"letter-content\">
                    <p class=\"number-id\">第";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "student_id", array()), "html", null, true);
        echo "号</p><br/><br/>
                    <p class=\"top-content\"><input type=\"text\" name=\"superior\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "superior", array()), "html", null, true);
        echo "\" readonly></p><br/><br/>
                    <p class=\"text-content\">
                        <input type=\"text\" name=\"partyname\" class=\"input-content-short\" placeholder=\"请输入姓名\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "partyname", array()), "html", null, true);
        echo "\" readonly>同志
                        <input type=\"text\" name=\"sex\" class=\"input-content-text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "sex", array()), "html", null, true);
        echo "\" readonly>，
                        <input type=\"text\" name=\"age\" class=\"input-content-text\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "age", array()), "html", null, true);
        echo "\" readonly>岁，
                        <input type=\"text\" name=\"nationality\" class=\"input-content-texts\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "nationality", array()), "html", null, true);
        echo "\" readonly>族，
                        系中共<input type=\"text\" name=\"formal2\" class=\"input-content-texts\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "formals", array()), "html", null, true);
        echo "\" readonly>党员，
                        身份证号<input type=\"text\" name=\"card_id\" class=\"input-content\" placeholder=\"请输入身份证号\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "card_id", array()), "html", null, true);
        echo "\" readonly>，
                        由<input type=\"text\" name=\"school\" class=\"input-content-short\" value=\"上海大学\" readonly>
                        去<input type=\"text\" name=\"base\" class=\"input-content\" placeholder=\"请输入基层党委名称\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "base", array()), "html", null, true);
        echo "\" readonly>，请接转组织关系，该同志党费已交到
                        <input type=\"text\" name=\"data-y\" class=\"input-content-texts\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "date_y", array()), "html", null, true);
        echo "\" readonly>年
                        <input type=\"text\" name=\"data-m\" class=\"input-content-text\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "date_m", array()), "html", null, true);
        echo "\" readonly>月
                        （有效期<input type=\"text\" name=\"data-d\" class=\"input-content-text\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "date_d", array()), "html", null, true);
        echo "\" readonly>天）
                    </p>
                    <p class=\"data-content\">（盖章)<br/>
                        <input type=\"text\" name=\"data-y2\" class=\"input-content-year\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_y", array()), "html", null, true);
        echo "\" readonly>年
                        <input type=\"text\" name=\"data-m2\" class=\"input-content-data\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_m", array()), "html", null, true);
        echo "\" readonly>月
                        <input type=\"text\" name=\"data-d2\" class=\"input-content-data\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_d", array()), "html", null, true);
        echo "\" readonly>日
                    </p><br/><br/><br/><br/><br/>

                    <div>&nbsp;&nbsp;党员联系电话或其它联系方式：<input type=\"text\" name=\"telephone\" class=\"input-content\" placeholder=\"请输入联系电话\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "telephone", array()), "html", null, true);
        echo "\" readonly></div>
                    <div>&nbsp;&nbsp;党员原所在基层党委通讯地址：<input type=\"text\" name=\"college\" class=\"input-content\" placeholder=\"请输入学院\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "college", array()), "html", null, true);
        echo "\" readonly></div>
                    <div><br/>&nbsp;
                        联系电话：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                        传真：<span class=\"const-receipt\">021-66133796</span>&nbsp;&nbsp;&nbsp;
                        邮编：<span class=\"const-receipt\">200444</span>
                    </div>


                </div>
                <div class=\"letter-content-right\"><br/>第<br/>二<br/>联<br/></div>
            </div>
            <br/>
            <div class=\"letter-three\">
                <div class=\"letter-receipt\">
                    <p class=\"number-id\">第";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "student_id", array()), "html", null, true);
        echo "号</p><br/><br/>
                    <p class=\"top-content\"><input type=\"text\" name=\"school3\" class=\"input-content\" value=\"上海大学（接收方填写）\" readonly></p><br/><br/>
                    <p class=\"text-content\">
                        <input type=\"text\" name=\"partyname3\" class=\"input-content\" value=\"党员姓名(接收方填写)\" readonly>同志的党员组织关系已转达我处，特此回复。
                    </p>
                    <p class=\"data-content\">（盖章)<br/>
                        <input type=\"text\" name=\"data-y3\" class=\"input-content-year\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_y", array()), "html", null, true);
        echo "\" readonly>年
                        <input type=\"text\" name=\"data-m3\" class=\"input-content-data\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_m2", array()), "html", null, true);
        echo "\" readonly>月
                        <input type=\"text\" name=\"data-d3\" class=\"input-content-data\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "current_date_d", array()), "html", null, true);
        echo "\" readonly>日
                    </p><br/><br/><br/>
                    <p>&nbsp;&nbsp;经办人：<span class=\"const-receipt\">（接收方填写）</span> &nbsp; 联系电话：<span class=\"const-receipt\">（接收方填写）</span></p>
                </div>
                <div class=\"letter-receipt-right\"><br/>第<br/>三<br/>联<br/></div>
            </div>
        </fieldset>
    </form>
</content>
<footer></footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 79,  176 => 78,  172 => 77,  163 => 71,  146 => 57,  142 => 56,  136 => 53,  132 => 52,  128 => 51,  122 => 48,  118 => 47,  114 => 46,  110 => 45,  105 => 43,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  85 => 38,  80 => 36,  76 => 35,  65 => 27,  61 => 26,  57 => 25,  51 => 22,  46 => 20,  42 => 19,  37 => 17,  19 => 1,);
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
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset = UTF-8\">
    <title>YGBA400</title>
    <link href=\"/app/views/style/show.css\" rel=\"stylesheet\" type=\"text/css\"/>
</head>
<body>
<header></header>
<!-- 代码注释 -->
<content>
    <form class=\"form\">
        <fieldset class=\"add-table\">
            <div class=\"letter-one\">
                <div class=\"letter-root-top\"><br/>党<br/>员<br/>介<br/>绍<br/>信<br/>存<br/>根<br/></div>
                <div class=\"letter-root\">
                    <p class=\"number-id\">第{{info.student_id}}号</p><br/><br/>
                    <p class=\"text-content\">
                        <input type=\"text\" name=\"partyname1\" class=\"input-content-short\" placeholder=\"请输入姓名\" value=\"{{info.partyname}}\" readonly>同志，
                        系中共<input type=\"text\" name=\"formal1\" class=\"input-content-texts\" value=\"{{info.formals}}\" readonly>党员，
                        组织关系由<input type=\"text\" name=\"school1\" class=\"input-content-short\" value=\"上海大学\" readonly>
                        转到<input type=\"text\" name=\"superior1\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\" value=\"{{info.superior}}\" readonly>。
                    </p>
                    <p class=\"data-content\">
                        <input type=\"text\" name=\"data-y1\" class=\"input-content-year\" value=\"{{info.current_date_y}}\" readonly>年
                        <input type=\"text\" name=\"data-m1\" class=\"input-content-data\" value=\"{{info.current_date_m}}\" readonly>月
                        <input type=\"text\" name=\"data-d1\" class=\"input-content-data\" value=\"{{info.current_date_d}}\" readonly>日
                    </p>
                </div>
                <div class=\"letter-root-right\"><br/>第<br/>一<br/>联<br/></div>
            </div>
            <br/>
            <div class=\"letter-two\">
                <div class=\"letter-content\">
                    <p class=\"number-id\">第{{info.student_id}}号</p><br/><br/>
                    <p class=\"top-content\"><input type=\"text\" name=\"superior\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\" value=\"{{info.superior}}\" readonly></p><br/><br/>
                    <p class=\"text-content\">
                        <input type=\"text\" name=\"partyname\" class=\"input-content-short\" placeholder=\"请输入姓名\" value=\"{{info.partyname}}\" readonly>同志
                        <input type=\"text\" name=\"sex\" class=\"input-content-text\" value=\"{{info.sex}}\" readonly>，
                        <input type=\"text\" name=\"age\" class=\"input-content-text\" value=\"{{info.age}}\" readonly>岁，
                        <input type=\"text\" name=\"nationality\" class=\"input-content-texts\" value=\"{{info.nationality}}\" readonly>族，
                        系中共<input type=\"text\" name=\"formal2\" class=\"input-content-texts\" value=\"{{info.formals}}\" readonly>党员，
                        身份证号<input type=\"text\" name=\"card_id\" class=\"input-content\" placeholder=\"请输入身份证号\" value=\"{{info.card_id}}\" readonly>，
                        由<input type=\"text\" name=\"school\" class=\"input-content-short\" value=\"上海大学\" readonly>
                        去<input type=\"text\" name=\"base\" class=\"input-content\" placeholder=\"请输入基层党委名称\" value=\"{{info.base}}\" readonly>，请接转组织关系，该同志党费已交到
                        <input type=\"text\" name=\"data-y\" class=\"input-content-texts\" value=\"{{info.date_y}}\" readonly>年
                        <input type=\"text\" name=\"data-m\" class=\"input-content-text\" value=\"{{info.date_m}}\" readonly>月
                        （有效期<input type=\"text\" name=\"data-d\" class=\"input-content-text\" value=\"{{info.date_d}}\" readonly>天）
                    </p>
                    <p class=\"data-content\">（盖章)<br/>
                        <input type=\"text\" name=\"data-y2\" class=\"input-content-year\" value=\"{{info.current_date_y}}\" readonly>年
                        <input type=\"text\" name=\"data-m2\" class=\"input-content-data\" value=\"{{info.current_date_m}}\" readonly>月
                        <input type=\"text\" name=\"data-d2\" class=\"input-content-data\" value=\"{{info.current_date_d}}\" readonly>日
                    </p><br/><br/><br/><br/><br/>

                    <div>&nbsp;&nbsp;党员联系电话或其它联系方式：<input type=\"text\" name=\"telephone\" class=\"input-content\" placeholder=\"请输入联系电话\" value=\"{{info.telephone}}\" readonly></div>
                    <div>&nbsp;&nbsp;党员原所在基层党委通讯地址：<input type=\"text\" name=\"college\" class=\"input-content\" placeholder=\"请输入学院\" value=\"{{info.college}}\" readonly></div>
                    <div><br/>&nbsp;
                        联系电话：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                        传真：<span class=\"const-receipt\">021-66133796</span>&nbsp;&nbsp;&nbsp;
                        邮编：<span class=\"const-receipt\">200444</span>
                    </div>


                </div>
                <div class=\"letter-content-right\"><br/>第<br/>二<br/>联<br/></div>
            </div>
            <br/>
            <div class=\"letter-three\">
                <div class=\"letter-receipt\">
                    <p class=\"number-id\">第{{info.student_id}}号</p><br/><br/>
                    <p class=\"top-content\"><input type=\"text\" name=\"school3\" class=\"input-content\" value=\"上海大学（接收方填写）\" readonly></p><br/><br/>
                    <p class=\"text-content\">
                        <input type=\"text\" name=\"partyname3\" class=\"input-content\" value=\"党员姓名(接收方填写)\" readonly>同志的党员组织关系已转达我处，特此回复。
                    </p>
                    <p class=\"data-content\">（盖章)<br/>
                        <input type=\"text\" name=\"data-y3\" class=\"input-content-year\" value=\"{{info.current_date_y}}\" readonly>年
                        <input type=\"text\" name=\"data-m3\" class=\"input-content-data\" value=\"{{info.current_date_m2}}\" readonly>月
                        <input type=\"text\" name=\"data-d3\" class=\"input-content-data\" value=\"{{info.current_date_d}}\" readonly>日
                    </p><br/><br/><br/>
                    <p>&nbsp;&nbsp;经办人：<span class=\"const-receipt\">（接收方填写）</span> &nbsp; 联系电话：<span class=\"const-receipt\">（接收方填写）</span></p>
                </div>
                <div class=\"letter-receipt-right\"><br/>第<br/>三<br/>联<br/></div>
            </div>
        </fieldset>
    </form>
</content>
<footer></footer>
</body>
</html>", "show.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\show.html");
    }
}
