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
    <fieldset class=\"add-table\">
        <legend>
            <input type=\"radio\" value=\"0\" name=\"field\" checked=\"checked\"/><label>市内</label>
            <input type=\"radio\" value=\"1\" name=\"field\"/><label>市外</label>
        </legend>
        <div class=\"letter-one\">
            <div class=\"letter-root-top\"><br/>党<br/>员<br/>介<br/>绍<br/>信<br/>存<br/>根<br/></div>
            <div class=\"letter-root\">
                <p class=\"number-id\">第XXX号</p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname1\" class=\"input-content-short\" placeholder=\"请输入姓名\">同志，
                    系中共<select name=\"formal1\" class=\"select-content\"><option value=\"1\" selected=\"selected\">正式</option><option value=\"0\">预备</option></select>党员，
                    组织关系由<input type=\"text\" name=\"school1\" class=\"input-content-short\" value=\"上海大学\">
                    转到<input type=\"text\" name=\"superior1\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\">。
                </p>
                <p class=\"data-content\">
                    <input type=\"text\" name=\"data-y1\" class=\"input-content-year\" value=\"2018\">年
                    <input type=\"text\" name=\"data-m1\" class=\"input-content-data\" value=\"7\">月
                    <input type=\"text\" name=\"data-d1\" class=\"input-content-data\" value=\"10\">日
                </p>
            </div>
            <div class=\"letter-root-right\"><br/>第<br/>一<br/>联<br/></div>
        </div>
        <br/>
        <div class=\"letter-two\">
            <div class=\"letter-content\">
                <p class=\"number-id\">第XXX号</p><br/><br/>
                <p class=\"top-content\"><input type=\"text\" name=\"superior\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\"></p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname\" class=\"input-content-short\" placeholder=\"请输入姓名\">同志
                    <select name=\"sex\" class=\"select-content\"><option value=\"1\" selected=\"selected\">男</option><option value=\"0\">女</option></select>，
                    <input type=\"text\" name=\"old\" class=\"input-content-text\" value=\"25\">岁，
                    <input type=\"text\" name=\"nationality\" class=\"input-content-text\" value=\"汉\">族，
                    系中共<select name=\"formal\" class=\"select-content\"><option value=\"1\" selected=\"selected\">正式</option><option value=\"0\">预备</option></select>党员，
                    身份证号<input type=\"text\" name=\"card_id\" class=\"input-content\" placeholder=\"请输入身份证号\">，
                    由<input type=\"text\" name=\"school\" class=\"input-content-short\" value=\"上海大学\">
                    去<input type=\"text\" name=\"base\" class=\"input-content\" placeholder=\"请输入基层党委名称\">，请接转组织关系，
                    该同志党费已交到<input type=\"text\" name=\"data-y\" class=\"input-content-text\" value=\"2018\">年<input type=\"text\" name=\"data-m\" class=\"input-content-text\" value=\"6\">月
                    （有效期<input type=\"text\" name=\"data-d\" class=\"input-content-text\" value=\"30\">天）
                </p>
                <p class=\"data-content\">（盖章)<br/>
                    <input type=\"text\" name=\"data-y3\" class=\"input-content-year\" value=\"2018\">年
                    <input type=\"text\" name=\"data-m3\" class=\"input-content-data\" value=\"7\">月
                    <input type=\"text\" name=\"data-d3\" class=\"input-content-data\" value=\"10\">日
                </p><br/><br/><br/><br/><br/>
                <table class=\"const-table\">
                    <tr>
                        <td class=\"const-table-td\">党员联系电话或其它联系方式：</td>
                        <td><input type=\"text\" name=\"telephone\" class=\"input-content\" placeholder=\"请输入联系电话\"></td>
                        <td class=\"const-table-td-short\"></td>
                    </tr>
                    <tr>
                        <td class=\"const-table-td\">党员原所在基层党委通讯地址：</td>
                        <td class=\"const-receipt-bottom\">上大路99号</td>
                        <td class=\"const-table-td-short\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\">&nbsp;
                            联系电话：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                            传真：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                            邮编：<span class=\"const-receipt\">200444</span></td>
                    </tr>
                </table>
            </div>
            <div class=\"letter-content-right\"><br/>第<br/>二<br/>联<br/></div>
        </div>
        <br/>
        <div class=\"letter-three\">
            <div class=\"letter-receipt\">
                <p class=\"number-id\">第XXX号</p><br/><br/>
                <p class=\"top-content\"><input type=\"text\" name=\"school3\" class=\"input-content\" placeholder=\"上海大学（接收方填写）\"></p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname3\" class=\"input-content\" placeholder=\"党员姓名(接收方填写)\">同志的党员组织关系已转达我处，特此回复。
                </p>
                <p class=\"data-content\">（盖章)<br/>
                    <input type=\"text\" name=\"data-y3\" class=\"input-content-year\" placeholder=\"2018\">年
                    <input type=\"text\" name=\"data-m3\" class=\"input-content-data\" placeholder=\"8\">月
                    <input type=\"text\" name=\"data-d3\" class=\"input-content-data\" placeholder=\"10\">日
                </p><br/><br/><br/>
                <p>&nbsp;&nbsp;经办人：<span class=\"const-receipt\">（接收方填写）</span> &nbsp; 联系电话：<span class=\"const-receipt\">（接收方填写）</span></p>
            </div>
            <div class=\"letter-receipt-right\"><br/>第<br/>三<br/>联<br/></div>
        </div>
        <br/><br/>

        <p><button type=\"submit\" class=\"registration-submit\">提交</button></p>
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
    <fieldset class=\"add-table\">
        <legend>
            <input type=\"radio\" value=\"0\" name=\"field\" checked=\"checked\"/><label>市内</label>
            <input type=\"radio\" value=\"1\" name=\"field\"/><label>市外</label>
        </legend>
        <div class=\"letter-one\">
            <div class=\"letter-root-top\"><br/>党<br/>员<br/>介<br/>绍<br/>信<br/>存<br/>根<br/></div>
            <div class=\"letter-root\">
                <p class=\"number-id\">第XXX号</p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname1\" class=\"input-content-short\" placeholder=\"请输入姓名\">同志，
                    系中共<select name=\"formal1\" class=\"select-content\"><option value=\"1\" selected=\"selected\">正式</option><option value=\"0\">预备</option></select>党员，
                    组织关系由<input type=\"text\" name=\"school1\" class=\"input-content-short\" value=\"上海大学\">
                    转到<input type=\"text\" name=\"superior1\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\">。
                </p>
                <p class=\"data-content\">
                    <input type=\"text\" name=\"data-y1\" class=\"input-content-year\" value=\"2018\">年
                    <input type=\"text\" name=\"data-m1\" class=\"input-content-data\" value=\"7\">月
                    <input type=\"text\" name=\"data-d1\" class=\"input-content-data\" value=\"10\">日
                </p>
            </div>
            <div class=\"letter-root-right\"><br/>第<br/>一<br/>联<br/></div>
        </div>
        <br/>
        <div class=\"letter-two\">
            <div class=\"letter-content\">
                <p class=\"number-id\">第XXX号</p><br/><br/>
                <p class=\"top-content\"><input type=\"text\" name=\"superior\" class=\"input-content-long\" placeholder=\"请输入转入党委名称\"></p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname\" class=\"input-content-short\" placeholder=\"请输入姓名\">同志
                    <select name=\"sex\" class=\"select-content\"><option value=\"1\" selected=\"selected\">男</option><option value=\"0\">女</option></select>，
                    <input type=\"text\" name=\"old\" class=\"input-content-text\" value=\"25\">岁，
                    <input type=\"text\" name=\"nationality\" class=\"input-content-text\" value=\"汉\">族，
                    系中共<select name=\"formal\" class=\"select-content\"><option value=\"1\" selected=\"selected\">正式</option><option value=\"0\">预备</option></select>党员，
                    身份证号<input type=\"text\" name=\"card_id\" class=\"input-content\" placeholder=\"请输入身份证号\">，
                    由<input type=\"text\" name=\"school\" class=\"input-content-short\" value=\"上海大学\">
                    去<input type=\"text\" name=\"base\" class=\"input-content\" placeholder=\"请输入基层党委名称\">，请接转组织关系，
                    该同志党费已交到<input type=\"text\" name=\"data-y\" class=\"input-content-text\" value=\"2018\">年<input type=\"text\" name=\"data-m\" class=\"input-content-text\" value=\"6\">月
                    （有效期<input type=\"text\" name=\"data-d\" class=\"input-content-text\" value=\"30\">天）
                </p>
                <p class=\"data-content\">（盖章)<br/>
                    <input type=\"text\" name=\"data-y3\" class=\"input-content-year\" value=\"2018\">年
                    <input type=\"text\" name=\"data-m3\" class=\"input-content-data\" value=\"7\">月
                    <input type=\"text\" name=\"data-d3\" class=\"input-content-data\" value=\"10\">日
                </p><br/><br/><br/><br/><br/>
                <table class=\"const-table\">
                    <tr>
                        <td class=\"const-table-td\">党员联系电话或其它联系方式：</td>
                        <td><input type=\"text\" name=\"telephone\" class=\"input-content\" placeholder=\"请输入联系电话\"></td>
                        <td class=\"const-table-td-short\"></td>
                    </tr>
                    <tr>
                        <td class=\"const-table-td\">党员原所在基层党委通讯地址：</td>
                        <td class=\"const-receipt-bottom\">上大路99号</td>
                        <td class=\"const-table-td-short\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"3\">&nbsp;
                            联系电话：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                            传真：<span class=\"const-receipt\">021-66132343</span>&nbsp;&nbsp;&nbsp;
                            邮编：<span class=\"const-receipt\">200444</span></td>
                    </tr>
                </table>
            </div>
            <div class=\"letter-content-right\"><br/>第<br/>二<br/>联<br/></div>
        </div>
        <br/>
        <div class=\"letter-three\">
            <div class=\"letter-receipt\">
                <p class=\"number-id\">第XXX号</p><br/><br/>
                <p class=\"top-content\"><input type=\"text\" name=\"school3\" class=\"input-content\" placeholder=\"上海大学（接收方填写）\"></p><br/><br/>
                <p class=\"text-content\">
                    <input type=\"text\" name=\"partyname3\" class=\"input-content\" placeholder=\"党员姓名(接收方填写)\">同志的党员组织关系已转达我处，特此回复。
                </p>
                <p class=\"data-content\">（盖章)<br/>
                    <input type=\"text\" name=\"data-y3\" class=\"input-content-year\" placeholder=\"2018\">年
                    <input type=\"text\" name=\"data-m3\" class=\"input-content-data\" placeholder=\"8\">月
                    <input type=\"text\" name=\"data-d3\" class=\"input-content-data\" placeholder=\"10\">日
                </p><br/><br/><br/>
                <p>&nbsp;&nbsp;经办人：<span class=\"const-receipt\">（接收方填写）</span> &nbsp; 联系电话：<span class=\"const-receipt\">（接收方填写）</span></p>
            </div>
            <div class=\"letter-receipt-right\"><br/>第<br/>三<br/>联<br/></div>
        </div>
        <br/><br/>

        <p><button type=\"submit\" class=\"registration-submit\">提交</button></p>
    </fieldset>
</form>
{% endblock %}", "add.html", "E:\\qqwqqk\\GitHub\\A400\\app\\views\\add.html");
    }
}
