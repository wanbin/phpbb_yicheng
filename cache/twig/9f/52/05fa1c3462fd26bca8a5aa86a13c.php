<?php

/* acp_icons.html */
class __TwigTemplate_9f5205fa1c3462fd26bca8a5aa86a13c extends Twig_Template
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
        if (isset($context["S_EDIT"])) { $_S_EDIT_ = $context["S_EDIT"]; } else { $_S_EDIT_ = null; }
        if (isset($context["S_CHOOSE_PAK"])) { $_S_CHOOSE_PAK_ = $context["S_CHOOSE_PAK"]; } else { $_S_CHOOSE_PAK_ = null; }
        if ($_S_EDIT_) {
            // line 6
            echo "
\t<script type=\"text/javascript\" defer=\"defer\">
\t// <![CDATA[
\t";
            // line 9
            if (isset($context["S_ADD_CODE"])) { $_S_ADD_CODE_ = $context["S_ADD_CODE"]; } else { $_S_ADD_CODE_ = null; }
            if ($_S_ADD_CODE_) {
                // line 10
                echo "
\t\t\tvar smiley = Array();
\t\t\t";
                // line 12
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "smile"));
                foreach ($context['_seq'] as $context["_key"] => $context["smile"]) {
                    // line 13
                    echo "\t\t\t\tsmiley['";
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "SMILEY_URL");
                    echo "'] = Array();
\t\t\t\tsmiley['";
                    // line 14
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "SMILEY_URL");
                    echo "']['code'] = '";
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "CODE");
                    echo "';
\t\t\t\tsmiley['";
                    // line 15
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "SMILEY_URL");
                    echo "']['emotion'] = '";
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "EMOTION");
                    echo "';
\t\t\t\tsmiley['";
                    // line 16
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "SMILEY_URL");
                    echo "']['width'] = ";
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "WIDTH");
                    echo ";
\t\t\t\tsmiley['";
                    // line 17
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "SMILEY_URL");
                    echo "']['height'] = ";
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "HEIGHT");
                    echo ";
\t\t\t\tsmiley['";
                    // line 18
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "SMILEY_URL");
                    echo "']['order'] = ";
                    if (isset($context["smile"])) { $_smile_ = $context["smile"]; } else { $_smile_ = null; }
                    echo $this->getAttribute($_smile_, "ORDER");
                    echo ";
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tvar use_element = smiley[newimage];

\t\t\t\tdocument.getElementById('add_image_src').src = '";
                // line 25
                if (isset($context["ROOT_PATH"])) { $_ROOT_PATH_ = $context["ROOT_PATH"]; } else { $_ROOT_PATH_ = null; }
                echo $_ROOT_PATH_;
                if (isset($context["IMG_PATH"])) { $_IMG_PATH_ = $context["IMG_PATH"]; } else { $_IMG_PATH_ = null; }
                echo $_IMG_PATH_;
                echo "/' + encodeURI(newimage);
\t\t\t\tdocument.getElementById('add_code').value = use_element['code'];
\t\t\t\tdocument.getElementById('add_emotion').value = use_element['emotion'];
\t\t\t\tdocument.getElementById('add_width').value = use_element['width'];
\t\t\t\tdocument.getElementById('add_height').value = use_element['height'];

\t\t\t\telement = document.getElementById('add_order');
\t\t\t\tfor (var i = 0; i < element.length; i++)
\t\t\t\t{
\t\t\t\t\tif (element.options[i].value == use_element['order'])
\t\t\t\t\t{
\t\t\t\t\t\tdocument.getElementById('add_order').options.selectedIndex = i;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t";
            }
            // line 42
            echo "

\tfunction toggle_select(icon, display, select)
\t{
\t\tvar disp = document.getElementById('order_disp_' + select);
\t\tvar nodisp = document.getElementById('order_no_disp_' + select);
\t\tdisp.disabled = !display;
\t\tnodisp.disabled = display;
\t\tif (display)
\t\t{
\t\t\tdocument.getElementById('order_' + select).selectedIndex = 0;
\t\t\tnodisp.className = 'disabled-options';
\t\t\tdisp.className = '';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('order_' + select).selectedIndex = ";
            // line 58
            if (isset($context["S_ORDER_LIST_DISPLAY_COUNT"])) { $_S_ORDER_LIST_DISPLAY_COUNT_ = $context["S_ORDER_LIST_DISPLAY_COUNT"]; } else { $_S_ORDER_LIST_DISPLAY_COUNT_ = null; }
            echo $_S_ORDER_LIST_DISPLAY_COUNT_;
            echo ";
\t\t\tdisp.className = 'disabled-options';
\t\t\tnodisp.className = '';
\t\t}
\t}
\t// ]]>
\t</script>

\t<a href=\"";
            // line 66
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 72
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table\" id=\"smilies\">
\t<thead>
\t<tr>
\t\t<th colspan=\"";
            // line 80
            if (isset($context["COLSPAN"])) { $_COLSPAN_ = $context["COLSPAN"]; } else { $_COLSPAN_ = null; }
            echo $_COLSPAN_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("CONFIG");
            echo "</th>
\t</tr>
\t";
            // line 82
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (isset($context["S_ADD_CODE"])) { $_S_ADD_CODE_ = $context["S_ADD_CODE"]; } else { $_S_ADD_CODE_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "items")) || $_S_ADD_CODE_)) {
                // line 83
                echo "\t<tr class=\"row3\">
\t\t<td>";
                // line 84
                echo $this->env->getExtension('phpbb')->lang("URL");
                echo "</td>
\t\t<td>";
                // line 85
                echo $this->env->getExtension('phpbb')->lang("LOCATION");
                echo "</td>
\t";
                // line 86
                if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
                if ($_S_SMILIES_) {
                    // line 87
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("SMILIES_CODE");
                    echo "</td>
\t\t<td>";
                    // line 88
                    echo $this->env->getExtension('phpbb')->lang("SMILIES_EMOTION");
                    echo "</td>
\t";
                }
                // line 90
                echo "\t\t<td>";
                echo $this->env->getExtension('phpbb')->lang("WIDTH");
                echo "</td>
\t\t<td>";
                // line 91
                echo $this->env->getExtension('phpbb')->lang("HEIGHT");
                echo "</td>
\t\t<td>";
                // line 92
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_POSTING");
                echo "</td>
\t";
                // line 93
                if (isset($context["ID"])) { $_ID_ = $context["ID"]; } else { $_ID_ = null; }
                if (isset($context["S_ADD"])) { $_S_ADD_ = $context["S_ADD"]; } else { $_S_ADD_ = null; }
                if (($_ID_ || $_S_ADD_)) {
                    // line 94
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("ORDER");
                    echo "</td>
\t";
                }
                // line 96
                echo "\t";
                if (isset($context["S_ADD"])) { $_S_ADD_ = $context["S_ADD"]; } else { $_S_ADD_ = null; }
                if ($_S_ADD_) {
                    // line 97
                    echo "\t\t<td>";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo " <a href=\"#\" onclick=\"marklist('smilies', 'add_img', true); return false;\">(";
                    echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                    echo ")</a></td>
\t";
                }
                // line 99
                echo "\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 102
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                    // line 103
                    echo "\t\t<tr>

\t\t<td style=\"text-align: center;\"><img src=\"";
                    // line 105
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "IMG_SRC");
                    echo "\" alt=\"\" title=\"\" /><input type=\"hidden\" name=\"image[";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "IMG");
                    echo "]\" value=\"1\" /></td>
\t\t<td style=\"vertical-align: top;\">[";
                    // line 106
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "IMG");
                    echo "]</td>
\t\t";
                    // line 107
                    if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
                    if ($_S_SMILIES_) {
                        // line 108
                        echo "\t\t\t<td><input class=\"text post\" type=\"text\" name=\"code[";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "IMG");
                        echo "]\" value=\"";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "CODE");
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t\t<td><input class=\"text post\" type=\"text\" name=\"emotion[";
                        // line 109
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "IMG");
                        echo "]\" value=\"";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "EMOTION");
                        echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t";
                    }
                    // line 111
                    echo "\t\t<td><input class=\"text post\" type=\"number\" size=\"3\" name=\"width[";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "IMG");
                    echo "]\" value=\"";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "WIDTH");
                    echo "\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" size=\"3\" name=\"height[";
                    // line 112
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "IMG");
                    echo "]\" value=\"";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "HEIGHT");
                    echo "\" /></td>
\t\t<td>
\t\t\t<input type=\"checkbox\" class=\"radio\" name=\"display_on_posting[";
                    // line 114
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "IMG");
                    echo "]\"";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "POSTING_CHECKED");
                    echo " onclick=\"toggle_select('";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "A_IMG");
                    echo "', this.checked, '";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "S_ROW_COUNT");
                    echo "');\"/>
\t\t\t";
                    // line 115
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    if ($this->getAttribute($_items_, "S_ID")) {
                        // line 116
                        echo "\t\t\t\t<input type=\"hidden\" name=\"id[";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "IMG");
                        echo "]\" value=\"";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "ID");
                        echo "\" />
\t\t\t";
                    }
                    // line 118
                    echo "\t\t</td>
\t\t";
                    // line 119
                    if (isset($context["ID"])) { $_ID_ = $context["ID"]; } else { $_ID_ = null; }
                    if (isset($context["S_ADD"])) { $_S_ADD_ = $context["S_ADD"]; } else { $_S_ADD_ = null; }
                    if (($_ID_ || $_S_ADD_)) {
                        // line 120
                        echo "\t\t\t<td><select id=\"order_";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "S_ROW_COUNT");
                        echo "\" name=\"order[";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "IMG");
                        echo "]\">
\t\t\t\t<optgroup id=\"order_disp_";
                        // line 121
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "S_ROW_COUNT");
                        echo "\" label=\"";
                        echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING");
                        echo "\" ";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        if ((!$this->getAttribute($_items_, "POSTING_CHECKED"))) {
                            echo "disabled=\"disabled\" class=\"disabled-options\" ";
                        }
                        echo ">";
                        if (isset($context["S_ORDER_LIST_DISPLAY"])) { $_S_ORDER_LIST_DISPLAY_ = $context["S_ORDER_LIST_DISPLAY"]; } else { $_S_ORDER_LIST_DISPLAY_ = null; }
                        echo $_S_ORDER_LIST_DISPLAY_;
                        echo "</optgroup>
\t\t\t\t<optgroup id=\"order_no_disp_";
                        // line 122
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "S_ROW_COUNT");
                        echo "\" label=\"";
                        echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING_NO");
                        echo "\" ";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        if ($this->getAttribute($_items_, "POSTING_CHECKED")) {
                            echo "disabled=\"disabled\" class=\"disabled-options\" ";
                        }
                        echo ">";
                        if (isset($context["S_ORDER_LIST_UNDISPLAY"])) { $_S_ORDER_LIST_UNDISPLAY_ = $context["S_ORDER_LIST_UNDISPLAY"]; } else { $_S_ORDER_LIST_UNDISPLAY_ = null; }
                        echo $_S_ORDER_LIST_UNDISPLAY_;
                        echo "</optgroup>
\t\t\t</select></td>
\t\t";
                    }
                    // line 125
                    echo "\t\t";
                    if (isset($context["S_ADD"])) { $_S_ADD_ = $context["S_ADD"]; } else { $_S_ADD_ = null; }
                    if ($_S_ADD_) {
                        // line 126
                        echo "\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_img[";
                        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                        echo $this->getAttribute($_items_, "IMG");
                        echo "]\" value=\"1\" /></td>
\t\t";
                    }
                    // line 128
                    echo "\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "\t";
                if (isset($context["S_ADD_CODE"])) { $_S_ADD_CODE_ = $context["S_ADD_CODE"]; } else { $_S_ADD_CODE_ = null; }
                if ($_S_ADD_CODE_) {
                    // line 131
                    echo "\t<tr>
\t\t<th colspan=\"";
                    // line 132
                    if (isset($context["COLSPAN"])) { $_COLSPAN_ = $context["COLSPAN"]; } else { $_COLSPAN_ = null; }
                    echo $_COLSPAN_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD_SMILEY_CODE");
                    echo "</th>
\t</tr>
\t<tr class=\"row1\">
\t\t<td style=\"text-align: center;\"><select name=\"add_image\" id=\"add_image\" onchange=\"update_image(this.options[selectedIndex].value);\">";
                    // line 135
                    if (isset($context["S_IMG_OPTIONS"])) { $_S_IMG_OPTIONS_ = $context["S_IMG_OPTIONS"]; } else { $_S_IMG_OPTIONS_ = null; }
                    echo $_S_IMG_OPTIONS_;
                    echo "</select></td>
\t\t<td style=\"vertical-align: top;\"><img src=\"";
                    // line 136
                    if (isset($context["IMG_SRC"])) { $_IMG_SRC_ = $context["IMG_SRC"]; } else { $_IMG_SRC_ = null; }
                    echo $_IMG_SRC_;
                    echo "\" id=\"add_image_src\" alt=\"\" title=\"\" /></td>
\t\t<td><input class=\"text post\" type=\"text\" name=\"add_code\" id=\"add_code\" value=\"";
                    // line 137
                    if (isset($context["CODE"])) { $_CODE_ = $context["CODE"]; } else { $_CODE_ = null; }
                    echo $_CODE_;
                    echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t<td><input class=\"text post\" type=\"text\" name=\"add_emotion\" id=\"add_emotion\" value=\"";
                    // line 138
                    if (isset($context["EMOTION"])) { $_EMOTION_ = $context["EMOTION"]; } else { $_EMOTION_ = null; }
                    echo $_EMOTION_;
                    echo "\" size=\"10\" maxlength=\"50\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" size=\"3\" name=\"add_width\" id=\"add_width\" value=\"";
                    // line 139
                    if (isset($context["WIDTH"])) { $_WIDTH_ = $context["WIDTH"]; } else { $_WIDTH_ = null; }
                    echo $_WIDTH_;
                    echo "\" /></td>
\t\t<td><input class=\"text post\" type=\"number\" size=\"3\" name=\"add_height\" id=\"add_height\" value=\"";
                    // line 140
                    if (isset($context["HEIGHT"])) { $_HEIGHT_ = $context["HEIGHT"]; } else { $_HEIGHT_ = null; }
                    echo $_HEIGHT_;
                    echo "\" /></td>
\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_display_on_posting\" checked=\"checked\" onclick=\"toggle_select('add', this.checked, 'add_order');\"/></td>
 \t\t<td><select id=\"order_add_order\" name=\"add_order\">
\t\t\t\t<optgroup id=\"order_disp_add_order\" label=\"";
                    // line 143
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING");
                    echo "\">";
                    if (isset($context["S_ADD_ORDER_LIST_DISPLAY"])) { $_S_ADD_ORDER_LIST_DISPLAY_ = $context["S_ADD_ORDER_LIST_DISPLAY"]; } else { $_S_ADD_ORDER_LIST_DISPLAY_ = null; }
                    echo $_S_ADD_ORDER_LIST_DISPLAY_;
                    echo "</optgroup>
\t\t\t\t<optgroup id=\"order_no_disp_add_order\" label=\"";
                    // line 144
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTING_NO");
                    echo "\" disabled=\"disabled\" class=\"disabled-options\" >";
                    if (isset($context["S_ADD_ORDER_LIST_UNDISPLAY"])) { $_S_ADD_ORDER_LIST_UNDISPLAY_ = $context["S_ADD_ORDER_LIST_UNDISPLAY"]; } else { $_S_ADD_ORDER_LIST_UNDISPLAY_ = null; }
                    echo $_S_ADD_ORDER_LIST_UNDISPLAY_;
                    echo "</optgroup>
\t\t</select></td>
\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add_additional_code\" value=\"1\" /></td>
\t</tr>
\t";
                }
                // line 149
                echo "\t";
            } else {
                // line 150
                echo "\t</thead>
\t<tbody>
\t<tr class=\"row3\">
\t\t<td colspan=\"";
                // line 153
                if (isset($context["COLSPAN"])) { $_COLSPAN_ = $context["COLSPAN"]; } else { $_COLSPAN_ = null; }
                echo $_COLSPAN_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NO_ICONS");
                echo "</td>
\t</tr>
\t";
            }
            // line 156
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 160
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 161
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 163
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_CHOOSE_PAK_) {
            // line 168
            echo "
\t<a href=\"";
            // line 169
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 171
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 173
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 175
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 178
            echo $this->env->getExtension('phpbb')->lang("IMPORT");
            echo "</legend>

\t";
            // line 180
            if (isset($context["S_PAK_OPTIONS"])) { $_S_PAK_OPTIONS_ = $context["S_PAK_OPTIONS"]; } else { $_S_PAK_OPTIONS_ = null; }
            if ((!$_S_PAK_OPTIONS_)) {
                // line 181
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("NO_PAK_OPTIONS");
                echo "</p>

\t";
            } else {
                // line 184
                echo "\t\t<dl>
\t\t\t<dt><label for=\"pak\">";
                // line 185
                echo $this->env->getExtension('phpbb')->lang("SELECT_PACKAGE");
                echo "</label></dt>
\t\t\t<dd><select id=\"pak\" name=\"pak\">";
                // line 186
                if (isset($context["S_PAK_OPTIONS"])) { $_S_PAK_OPTIONS_ = $context["S_PAK_OPTIONS"]; } else { $_S_PAK_OPTIONS_ = null; }
                echo $_S_PAK_OPTIONS_;
                echo "</select></dd>
\t\t</dl>
\t\t\t<dt><label for=\"current\">";
                // line 188
                echo $this->env->getExtension('phpbb')->lang("CURRENT");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("CURRENT_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"current\" name=\"current\" value=\"keep\" checked=\"checked\" /> ";
                // line 189
                echo $this->env->getExtension('phpbb')->lang("KEEP_ALL");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"current\" value=\"replace\" /> ";
                // line 190
                echo $this->env->getExtension('phpbb')->lang("REPLACE_MATCHES");
                echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"current\" value=\"delete\" /> ";
                // line 191
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                echo "</label></dd>
\t\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"import\" name=\"import\" value=\"";
                // line 195
                echo $this->env->getExtension('phpbb')->lang("IMPORT_SUBMIT");
                echo "\" />
\t</p>
\t";
            }
            // line 198
            echo "\t";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 203
            echo "
\t<h1>";
            // line 204
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 206
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 208
            if (isset($context["NOTICE"])) { $_NOTICE_ = $context["NOTICE"]; } else { $_NOTICE_ = null; }
            if ($_NOTICE_) {
                // line 209
                echo "\t\t<div class=\"successbox\">
\t\t\t<h3>";
                // line 210
                echo $this->env->getExtension('phpbb')->lang("NOTIFY");
                echo "</h3>
\t\t\t<p>";
                // line 211
                if (isset($context["NOTICE"])) { $_NOTICE_ = $context["NOTICE"]; } else { $_NOTICE_ = null; }
                echo $_NOTICE_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 214
            echo "
\t<form id=\"acp_icons\" method=\"post\" action=\"";
            // line 215
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<div style=\"text-align: right;\"><a href=\"";
            // line 217
            if (isset($context["U_IMPORT"])) { $_U_IMPORT_ = $context["U_IMPORT"]; } else { $_U_IMPORT_ = null; }
            echo $_U_IMPORT_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("IMPORT");
            echo "</a> | <a href=\"";
            if (isset($context["U_EXPORT"])) { $_U_EXPORT_ = $context["U_EXPORT"]; } else { $_U_EXPORT_ = null; }
            echo $_U_EXPORT_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EXPORT");
            echo "</a></div>

\t<fieldset class=\"tabulated\">

\t<legend>";
            // line 221
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 226
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</th>
\t\t";
            // line 227
            if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
            if ($_S_SMILIES_) {
                // line 228
                echo "\t\t<th>";
                echo $this->env->getExtension('phpbb')->lang("CODE");
                echo "</th>
\t\t<th>";
                // line 229
                echo $this->env->getExtension('phpbb')->lang("EMOTION");
                echo "</th>
\t\t";
            }
            // line 231
            echo "\t\t<th>";
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 235
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "items"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 236
                echo "\t\t";
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                if ($this->getAttribute($_items_, "S_SPACER")) {
                    // line 237
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"row3\" colspan=\"";
                    // line 238
                    if (isset($context["COLSPAN"])) { $_COLSPAN_ = $context["COLSPAN"]; } else { $_COLSPAN_ = null; }
                    echo $_COLSPAN_;
                    echo "\" style=\"text-align: center;\">";
                    echo $this->env->getExtension('phpbb')->lang("NOT_DISPLAYED");
                    echo "</td>
\t\t\t</tr>
\t\t";
                }
                // line 241
                echo "\t\t<tr>
\t\t\t<td style=\"width: 85%; text-align: center;\"><img src=\"";
                // line 242
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "IMG_SRC");
                echo "\" width=\"";
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "WIDTH");
                echo "\" height=\"";
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "HEIGHT");
                echo "\" alt=\"";
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "ALT_TEXT");
                echo "\" title=\"";
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "ALT_TEXT");
                echo "\" /></td>
\t\t\t";
                // line 243
                if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
                if ($_S_SMILIES_) {
                    // line 244
                    echo "\t\t\t\t<td style=\"text-align: center;\">";
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "CODE");
                    echo "</td>
\t\t\t\t<td style=\"text-align: center;\">";
                    // line 245
                    if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                    echo $this->getAttribute($_items_, "EMOTION");
                    echo "</td>
\t\t\t";
                }
                // line 247
                echo "\t\t\t<td class=\"actions\" style=\"text-align: right;\">
\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 248
                if (isset($context["ICON_MOVE_UP_DISABLED"])) { $_ICON_MOVE_UP_DISABLED_ = $context["ICON_MOVE_UP_DISABLED"]; } else { $_ICON_MOVE_UP_DISABLED_ = null; }
                echo $_ICON_MOVE_UP_DISABLED_;
                echo "</span>
\t\t\t\t<span class=\"up\"><a href=\"";
                // line 249
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "U_MOVE_UP");
                echo "\" data-ajax=\"row_up\">";
                if (isset($context["ICON_MOVE_UP"])) { $_ICON_MOVE_UP_ = $context["ICON_MOVE_UP"]; } else { $_ICON_MOVE_UP_ = null; }
                echo $_ICON_MOVE_UP_;
                echo "</a></span>
\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 250
                if (isset($context["ICON_MOVE_DOWN_DISABLED"])) { $_ICON_MOVE_DOWN_DISABLED_ = $context["ICON_MOVE_DOWN_DISABLED"]; } else { $_ICON_MOVE_DOWN_DISABLED_ = null; }
                echo $_ICON_MOVE_DOWN_DISABLED_;
                echo "</span>
\t\t\t\t<span class=\"down\"><a href=\"";
                // line 251
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "U_MOVE_DOWN");
                echo "\" data-ajax=\"row_down\">";
                if (isset($context["ICON_MOVE_DOWN"])) { $_ICON_MOVE_DOWN_ = $context["ICON_MOVE_DOWN"]; } else { $_ICON_MOVE_DOWN_ = null; }
                echo $_ICON_MOVE_DOWN_;
                echo "</a></span>
\t\t\t\t<a href=\"";
                // line 252
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "U_EDIT");
                echo "\">";
                if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                echo $_ICON_EDIT_;
                echo "</a> <a href=\"";
                if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
                echo $this->getAttribute($_items_, "U_DELETE");
                echo "\" data-ajax=\"row_delete\">";
                if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                echo $_ICON_DELETE_;
                echo "</a>
\t\t\t</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 256
                echo "\t\t<tr class=\"row3\">
\t\t\t<td colspan=\"";
                // line 257
                if (isset($context["COLSPAN"])) { $_COLSPAN_ = $context["COLSPAN"]; } else { $_COLSPAN_ = null; }
                echo $_COLSPAN_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "\t</tbody>
\t</table>
\t<div class=\"pagination\">
\t";
            // line 263
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                // line 264
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("pagination.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 265
                echo "\t";
            }
            // line 266
            echo "\t</div>
\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 268
            echo $this->env->getExtension('phpbb')->lang("ICON_ADD");
            echo "\" />&nbsp; &nbsp;<input class=\"button2\" type=\"submit\" name=\"edit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("ICON_EDIT");
            echo "\" />
\t</p>
\t";
            // line 270
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 275
        echo "
";
        // line 276
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
        return "acp_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  890 => 276,  887 => 275,  878 => 270,  871 => 268,  867 => 266,  864 => 265,  851 => 264,  848 => 263,  843 => 260,  831 => 257,  828 => 256,  809 => 252,  801 => 251,  796 => 250,  788 => 249,  783 => 248,  780 => 247,  774 => 245,  768 => 244,  765 => 243,  748 => 242,  745 => 241,  736 => 238,  733 => 237,  729 => 236,  723 => 235,  715 => 231,  710 => 229,  705 => 228,  702 => 227,  698 => 226,  690 => 221,  675 => 217,  669 => 215,  666 => 214,  659 => 211,  655 => 210,  652 => 209,  649 => 208,  644 => 206,  639 => 204,  636 => 203,  626 => 198,  620 => 195,  613 => 191,  609 => 190,  605 => 189,  599 => 188,  593 => 186,  589 => 185,  586 => 184,  579 => 181,  576 => 180,  571 => 178,  564 => 175,  559 => 173,  554 => 171,  543 => 169,  540 => 168,  531 => 163,  526 => 161,  522 => 160,  516 => 156,  507 => 153,  502 => 150,  499 => 149,  488 => 144,  481 => 143,  474 => 140,  469 => 139,  464 => 138,  459 => 137,  454 => 136,  449 => 135,  440 => 132,  437 => 131,  433 => 130,  426 => 128,  419 => 126,  415 => 125,  398 => 122,  383 => 121,  374 => 120,  370 => 119,  367 => 118,  357 => 116,  354 => 115,  340 => 114,  331 => 112,  322 => 111,  313 => 109,  304 => 108,  301 => 107,  296 => 106,  288 => 105,  284 => 103,  279 => 102,  274 => 99,  266 => 97,  262 => 96,  256 => 94,  252 => 93,  248 => 92,  244 => 91,  239 => 90,  234 => 88,  229 => 87,  226 => 86,  222 => 85,  218 => 84,  215 => 83,  211 => 82,  203 => 80,  195 => 75,  188 => 72,  183 => 70,  178 => 68,  167 => 66,  155 => 58,  137 => 42,  114 => 25,  107 => 20,  95 => 18,  87 => 17,  79 => 16,  71 => 15,  63 => 14,  57 => 13,  52 => 12,  48 => 10,  45 => 9,  40 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
