<?php

/* acp_reasons.html */
class __TwigTemplate_41249ec26edd8b0853087008b14bd4cd extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_EDIT_REASON"])) { $_S_EDIT_REASON_ = $context["S_EDIT_REASON"]; } else { $_S_EDIT_REASON_ = null; }
        if ($_S_EDIT_REASON_) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("REASON_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 13
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t";
            // line 20
            if (isset($context["S_TRANSLATED"])) { $_S_TRANSLATED_ = $context["S_TRANSLATED"]; } else { $_S_TRANSLATED_ = null; }
            if ((!$_S_TRANSLATED_)) {
                // line 21
                echo "\t\t<h3>";
                echo $this->env->getExtension('phpbb')->lang("AVAILABLE_TITLES");
                echo "</h3>

\t\t<p>";
                // line 23
                if (isset($context["S_AVAILABLE_TITLES"])) { $_S_AVAILABLE_TITLES_ = $context["S_AVAILABLE_TITLES"]; } else { $_S_AVAILABLE_TITLES_ = null; }
                echo $_S_AVAILABLE_TITLES_;
                echo "</p>
\t";
            }
            // line 25
            echo "
\t<form id=\"acp_reasons\" method=\"post\" action=\"";
            // line 26
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>
\t\t<p>";
            // line 30
            if (isset($context["S_TRANSLATED"])) { $_S_TRANSLATED_ = $context["S_TRANSLATED"]; } else { $_S_TRANSLATED_ = null; }
            if ($_S_TRANSLATED_) {
                echo $this->env->getExtension('phpbb')->lang("IS_TRANSLATED_EXPLAIN");
            } else {
                echo $this->env->getExtension('phpbb')->lang("IS_NOT_TRANSLATED_EXPLAIN");
            }
            echo "</p>
\t<dl>
\t\t<dt><label for=\"reason_title\">";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("REASON_TITLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"reason_title\" type=\"text\" id=\"reason_title\" value=\"";
            // line 33
            if (isset($context["REASON_TITLE"])) { $_REASON_TITLE_ = $context["REASON_TITLE"]; } else { $_REASON_TITLE_ = null; }
            echo $_REASON_TITLE_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t";
            // line 35
            if (isset($context["S_TRANSLATED"])) { $_S_TRANSLATED_ = $context["S_TRANSLATED"]; } else { $_S_TRANSLATED_ = null; }
            if ($_S_TRANSLATED_) {
                // line 36
                echo "\t<dl>
\t\t<dt>";
                // line 37
                echo $this->env->getExtension('phpbb')->lang("REASON_TITLE_TRANSLATED");
                echo "</dt>
\t\t<dd>";
                // line 38
                if (isset($context["TRANSLATED_TITLE"])) { $_TRANSLATED_TITLE_ = $context["TRANSLATED_TITLE"]; } else { $_TRANSLATED_TITLE_ = null; }
                echo $_TRANSLATED_TITLE_;
                echo "</dd>
\t</dl>
\t";
            }
            // line 41
            echo "\t<dl>
\t\t<dt><label for=\"reason_description\">";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("REASON_DESCRIPTION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea name=\"reason_description\" id=\"reason_description\" rows=\"8\" cols=\"80\">";
            // line 43
            if (isset($context["REASON_DESCRIPTION"])) { $_REASON_DESCRIPTION_ = $context["REASON_DESCRIPTION"]; } else { $_REASON_DESCRIPTION_ = null; }
            echo $_REASON_DESCRIPTION_;
            echo "</textarea></dd>
\t</dl>
\t";
            // line 45
            if (isset($context["S_TRANSLATED"])) { $_S_TRANSLATED_ = $context["S_TRANSLATED"]; } else { $_S_TRANSLATED_ = null; }
            if ($_S_TRANSLATED_) {
                // line 46
                echo "\t<dl>
\t\t<dt>";
                // line 47
                echo $this->env->getExtension('phpbb')->lang("REASON_DESC_TRANSLATED");
                echo "</dt>
\t\t<dd>";
                // line 48
                if (isset($context["TRANSLATED_DESCRIPTION"])) { $_TRANSLATED_DESCRIPTION_ = $context["TRANSLATED_DESCRIPTION"]; } else { $_TRANSLATED_DESCRIPTION_ = null; }
                echo $_TRANSLATED_DESCRIPTION_;
                echo "</dd>
\t</dl>
\t";
            }
            // line 51
            echo "
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 53
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 55
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 61
            echo "
\t<h1>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("ACP_REASONS");
            echo "</h1>

\t<p>";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("ACP_REASONS_EXPLAIN");
            echo "</p>

\t<form id=\"reasons\" method=\"post\" action=\"";
            // line 66
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("ACP_REASONS");
            echo "</legend>

\t";
            // line 70
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "reasons"))) {
                // line 71
                echo "\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo "</th>
\t\t\t<th>";
                // line 76
                echo $this->env->getExtension('phpbb')->lang("USED_IN_REPORTS");
                echo "</th>
\t\t\t<th>";
                // line 77
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 81
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "reasons"));
                foreach ($context['_seq'] as $context["_key"] => $context["reasons"]) {
                    // line 82
                    echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<i style=\"float: ";
                    // line 84
                    if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                    echo $_S_CONTENT_FLOW_END_;
                    echo "; font-size: .9em;\">";
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    if ($this->getAttribute($_reasons_, "S_TRANSLATED")) {
                        echo $this->env->getExtension('phpbb')->lang("IS_TRANSLATED");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("IS_NOT_TRANSLATED");
                    }
                    echo "</i>
\t\t\t\t\t<strong>";
                    // line 85
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    echo $this->getAttribute($_reasons_, "REASON_TITLE");
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    if ($this->getAttribute($_reasons_, "S_OTHER_REASON")) {
                        echo " *";
                    }
                    echo "</strong>
\t\t\t\t\t<br /><span>";
                    // line 86
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    echo $this->getAttribute($_reasons_, "REASON_DESCRIPTION");
                    echo "</span>
\t\t\t\t</td>
\t\t\t\t<td style=\"width: 100px;\">";
                    // line 88
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    echo $this->getAttribute($_reasons_, "REASON_COUNT");
                    echo "</td>
\t\t\t\t<td class=\"actions\" style=\"width: 80px;\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 90
                    if (isset($context["ICON_MOVE_UP_DISABLED"])) { $_ICON_MOVE_UP_DISABLED_ = $context["ICON_MOVE_UP_DISABLED"]; } else { $_ICON_MOVE_UP_DISABLED_ = null; }
                    echo $_ICON_MOVE_UP_DISABLED_;
                    echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 91
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    echo $this->getAttribute($_reasons_, "U_MOVE_UP");
                    echo "\" data-ajax=\"row_up\">";
                    if (isset($context["ICON_MOVE_UP"])) { $_ICON_MOVE_UP_ = $context["ICON_MOVE_UP"]; } else { $_ICON_MOVE_UP_ = null; }
                    echo $_ICON_MOVE_UP_;
                    echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 92
                    if (isset($context["ICON_MOVE_DOWN_DISABLED"])) { $_ICON_MOVE_DOWN_DISABLED_ = $context["ICON_MOVE_DOWN_DISABLED"]; } else { $_ICON_MOVE_DOWN_DISABLED_ = null; }
                    echo $_ICON_MOVE_DOWN_DISABLED_;
                    echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 93
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    echo $this->getAttribute($_reasons_, "U_MOVE_DOWN");
                    echo "\" data-ajax=\"row_down\">";
                    if (isset($context["ICON_MOVE_DOWN"])) { $_ICON_MOVE_DOWN_ = $context["ICON_MOVE_DOWN"]; } else { $_ICON_MOVE_DOWN_ = null; }
                    echo $_ICON_MOVE_DOWN_;
                    echo "</a></span>
\t\t\t\t\t<a href=\"";
                    // line 94
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    echo $this->getAttribute($_reasons_, "U_EDIT");
                    echo "\">";
                    if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                    echo $_ICON_EDIT_;
                    echo "</a> 
\t\t\t\t\t";
                    // line 95
                    if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                    if ($this->getAttribute($_reasons_, "U_DELETE")) {
                        // line 96
                        echo "\t\t\t\t\t\t<a href=\"";
                        if (isset($context["reasons"])) { $_reasons_ = $context["reasons"]; } else { $_reasons_ = null; }
                        echo $this->getAttribute($_reasons_, "U_DELETE");
                        echo "\" data-ajax=\"row_delete\">";
                        if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                        echo $_ICON_DELETE_;
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 98
                        echo "\t\t\t\t\t\t";
                        if (isset($context["ICON_DELETE_DISABLED"])) { $_ICON_DELETE_DISABLED_ = $context["ICON_DELETE_DISABLED"]; } else { $_ICON_DELETE_DISABLED_ = null; }
                        echo $_ICON_DELETE_DISABLED_;
                        echo "
\t\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reasons'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "\t\t</tbody>
\t\t</table>

\t";
            }
            // line 107
            echo "
\t<p class=\"quick\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />

\t\t<input type=\"text\" name=\"reason_title\" /> 
\t\t<input class=\"button2\" name=\"addreason\" type=\"submit\" value=\"";
            // line 112
            echo $this->env->getExtension('phpbb')->lang("ADD_NEW_REASON");
            echo "\" />
\t\t";
            // line 113
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</p>
\t</fieldset>
\t
\t</form>

";
        }
        // line 120
        echo "
";
        // line 121
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_reasons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 121,  383 => 120,  372 => 113,  368 => 112,  361 => 107,  355 => 103,  347 => 100,  340 => 98,  330 => 96,  327 => 95,  319 => 94,  311 => 93,  306 => 92,  298 => 91,  293 => 90,  287 => 88,  281 => 86,  272 => 85,  260 => 84,  256 => 82,  251 => 81,  244 => 77,  240 => 76,  236 => 75,  230 => 71,  227 => 70,  222 => 68,  216 => 66,  211 => 64,  206 => 62,  203 => 61,  193 => 55,  189 => 54,  185 => 53,  181 => 51,  174 => 48,  170 => 47,  167 => 46,  164 => 45,  158 => 43,  153 => 42,  150 => 41,  143 => 38,  139 => 37,  136 => 36,  133 => 35,  127 => 33,  122 => 32,  112 => 30,  108 => 29,  101 => 26,  98 => 25,  92 => 23,  86 => 21,  83 => 20,  80 => 19,  73 => 16,  69 => 15,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
