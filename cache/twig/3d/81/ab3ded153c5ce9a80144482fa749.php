<?php

/* mcp_post.html */
class __TwigTemplate_3d81ab3ded153c5ce9a80144482fa749 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
        if ($_S_MCP_REPORT_) {
            // line 4
            echo "\t";
            if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
            if ($_S_PM_) {
                // line 5
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("PM_REPORT_DETAILS");
                echo "</h2>
\t";
            } else {
                // line 7
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb')->lang("REPORT_DETAILS");
                echo "</h2>
\t";
            }
            // line 9
            echo "
\t<div id=\"report\" class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\">
\t\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("REPORT_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["REPORT_REASON_TITLE"])) { $_REPORT_REASON_TITLE_ = $context["REPORT_REASON_TITLE"]; } else { $_REPORT_REASON_TITLE_ = null; }
            echo $_REPORT_REASON_TITLE_;
            echo "</h3>
\t\t\t<p class=\"author\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("REPORTED");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["REPORTER_FULL"])) { $_REPORTER_FULL_ = $context["REPORTER_FULL"]; } else { $_REPORTER_FULL_ = null; }
            echo $_REPORTER_FULL_;
            echo " &laquo; ";
            if (isset($context["REPORT_DATE"])) { $_REPORT_DATE_ = $context["REPORT_DATE"]; } else { $_REPORT_DATE_ = null; }
            echo $_REPORT_DATE_;
            echo "</p>
\t\t";
            // line 16
            if (isset($context["S_REPORT_CLOSED"])) { $_S_REPORT_CLOSED_ = $context["S_REPORT_CLOSED"]; } else { $_S_REPORT_CLOSED_ = null; }
            if ($_S_REPORT_CLOSED_) {
                // line 17
                echo "\t\t\t<p class=\"post-notice reported\">";
                echo $this->env->getExtension('phpbb')->lang("REPORT_CLOSED");
                echo "</p>
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 20
            if (isset($context["REPORT_TEXT"])) { $_REPORT_TEXT_ = $context["REPORT_TEXT"]; } else { $_REPORT_TEXT_ = null; }
            if ($_REPORT_TEXT_) {
                // line 21
                echo "\t\t\t\t";
                if (isset($context["REPORT_TEXT"])) { $_REPORT_TEXT_ = $context["REPORT_TEXT"]; } else { $_REPORT_TEXT_ = null; }
                echo $_REPORT_TEXT_;
                echo "
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                if (isset($context["REPORT_REASON_DESCRIPTION"])) { $_REPORT_REASON_DESCRIPTION_ = $context["REPORT_REASON_DESCRIPTION"]; } else { $_REPORT_REASON_DESCRIPTION_ = null; }
                echo $_REPORT_REASON_DESCRIPTION_;
                echo "
\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>

\t\t</div>
\t</div>

\t<form method=\"post\" id=\"mcp_report\" action=\"";
            // line 31
            if (isset($context["S_CLOSE_ACTION"])) { $_S_CLOSE_ACTION_ = $context["S_CLOSE_ACTION"]; } else { $_S_CLOSE_ACTION_ = null; }
            echo $_S_CLOSE_ACTION_;
            echo "\">

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 34
            if (isset($context["S_REPORT_CLOSED"])) { $_S_REPORT_CLOSED_ = $context["S_REPORT_CLOSED"]; } else { $_S_REPORT_CLOSED_ = null; }
            if ((!$_S_REPORT_CLOSED_)) {
                // line 35
                echo "\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" /> &nbsp;
\t\t";
            }
            // line 37
            echo "\t\t<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" />
\t\t<input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            // line 38
            if (isset($context["REPORT_ID"])) { $_REPORT_ID_ = $context["REPORT_ID"]; } else { $_REPORT_ID_ = null; }
            echo $_REPORT_ID_;
            echo "\" />
\t\t";
            // line 39
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 44
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
            echo "</h2>
";
        }
        // line 46
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"postbody\">
\t\t<h3><a href=\"";
        // line 51
        if (isset($context["U_VIEW_POST"])) { $_U_VIEW_POST_ = $context["U_VIEW_POST"]; } else { $_U_VIEW_POST_ = null; }
        echo $_U_VIEW_POST_;
        echo "\">";
        if (isset($context["POST_SUBJECT"])) { $_POST_SUBJECT_ = $context["POST_SUBJECT"]; } else { $_POST_SUBJECT_ = null; }
        echo $_POST_SUBJECT_;
        echo "</a></h3>

\t\t<ul class=\"post-buttons\">
\t\t\t<li id=\"expand\">
\t\t\t\t<a href=\"#post_details\" onclick=\"viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '";
        // line 55
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'; } else if (rev_text.data.trim() == '";
        echo addslashes($this->env->getExtension('phpbb')->lang("COLLAPSE_VIEW"));
        echo "'){rev_text.data = '";
        echo addslashes($this->env->getExtension('phpbb')->lang("EXPAND_VIEW"));
        echo "';} return false;\">
\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("EXPAND_VIEW");
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 59
        if (isset($context["U_EDIT"])) { $_U_EDIT_ = $context["U_EDIT"]; } else { $_U_EDIT_ = null; }
        if ($_U_EDIT_) {
            // line 60
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 61
            if (isset($context["U_EDIT"])) { $_U_EDIT_ = $context["U_EDIT"]; } else { $_U_EDIT_ = null; }
            echo $_U_EDIT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
            echo "\" class=\"button icon-button edit-icon\">
\t\t\t\t\t\t<span>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 66
        echo "\t\t</ul>

\t\t";
        // line 68
        if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
        if ($_S_PM_) {
            // line 69
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("SENT_AT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            if (isset($context["POST_DATE"])) { $_POST_DATE_ = $context["POST_DATE"]; } else { $_POST_DATE_ = null; }
            echo $_POST_DATE_;
            echo "
\t\t\t<br /><strong>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("PM_FROM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            if (isset($context["POST_AUTHOR_FULL"])) { $_POST_AUTHOR_FULL_ = $context["POST_AUTHOR_FULL"]; } else { $_POST_AUTHOR_FULL_ = null; }
            echo $_POST_AUTHOR_FULL_;
            echo "
\t\t\t";
            // line 72
            if (isset($context["S_TO_RECIPIENT"])) { $_S_TO_RECIPIENT_ = $context["S_TO_RECIPIENT"]; } else { $_S_TO_RECIPIENT_ = null; }
            if ($_S_TO_RECIPIENT_) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("TO");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "to_recipient"));
                foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                    if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                    if ($this->getAttribute($_to_recipient_, "NAME_FULL")) {
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        echo $this->getAttribute($_to_recipient_, "NAME_FULL");
                    } else {
                        echo "<a href=\"";
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        echo $this->getAttribute($_to_recipient_, "U_VIEW");
                        echo "\" style=\"color:";
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        if ($this->getAttribute($_to_recipient_, "COLOUR")) {
                            if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                            echo $this->getAttribute($_to_recipient_, "COLOUR");
                        } elseif ($this->getAttribute($_to_recipient_, "IS_GROUP")) {
                            echo "#0000FF";
                        }
                        echo ";\">";
                        if (isset($context["to_recipient"])) { $_to_recipient_ = $context["to_recipient"]; } else { $_to_recipient_ = null; }
                        echo $this->getAttribute($_to_recipient_, "NAME");
                        echo "</a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 73
            echo "\t\t\t";
            if (isset($context["S_BCC_RECIPIENT"])) { $_S_BCC_RECIPIENT_ = $context["S_BCC_RECIPIENT"]; } else { $_S_BCC_RECIPIENT_ = null; }
            if ($_S_BCC_RECIPIENT_) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("BCC");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "bcc_recipient"));
                foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                    if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                    if ($this->getAttribute($_bcc_recipient_, "NAME_FULL")) {
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        echo $this->getAttribute($_bcc_recipient_, "NAME_FULL");
                    } else {
                        echo "<a href=\"";
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        echo $this->getAttribute($_bcc_recipient_, "U_VIEW");
                        echo "\" style=\"color:";
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        if ($this->getAttribute($_bcc_recipient_, "COLOUR")) {
                            if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                            echo $this->getAttribute($_bcc_recipient_, "COLOUR");
                        } elseif ($this->getAttribute($_bcc_recipient_, "IS_GROUP")) {
                            echo "#0000FF";
                        }
                        echo ";\">";
                        if (isset($context["bcc_recipient"])) { $_bcc_recipient_ = $context["bcc_recipient"]; } else { $_bcc_recipient_ = null; }
                        echo $this->getAttribute($_bcc_recipient_, "NAME");
                        echo "</a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 74
            echo "\t\t</p>
\t\t";
        } else {
            // line 76
            echo "\t\t<p class=\"author\">";
            if (isset($context["MINI_POST_IMG"])) { $_MINI_POST_IMG_ = $context["MINI_POST_IMG"]; } else { $_MINI_POST_IMG_ = null; }
            echo $_MINI_POST_IMG_;
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POSTED");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            if (isset($context["POST_AUTHOR_FULL"])) { $_POST_AUTHOR_FULL_ = $context["POST_AUTHOR_FULL"]; } else { $_POST_AUTHOR_FULL_ = null; }
            echo $_POST_AUTHOR_FULL_;
            echo " &raquo; ";
            if (isset($context["POST_DATE"])) { $_POST_DATE_ = $context["POST_DATE"]; } else { $_POST_DATE_ = null; }
            echo $_POST_DATE_;
            echo "</p>
\t\t";
        }
        // line 78
        echo "
\t\t";
        // line 79
        if (isset($context["S_POST_UNAPPROVED"])) { $_S_POST_UNAPPROVED_ = $context["S_POST_UNAPPROVED"]; } else { $_S_POST_UNAPPROVED_ = null; }
        if (isset($context["S_POST_DELETED"])) { $_S_POST_DELETED_ = $context["S_POST_DELETED"]; } else { $_S_POST_DELETED_ = null; }
        if ($_S_POST_UNAPPROVED_) {
            // line 80
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            if (isset($context["U_APPROVE_ACTION"])) { $_U_APPROVE_ACTION_ = $context["U_APPROVE_ACTION"]; } else { $_U_APPROVE_ACTION_ = null; }
            echo $_U_APPROVE_ACTION_;
            echo "\">

\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("APPROVE");
            echo "\" name=\"action[approve]\" />
\t\t\t\t";
            // line 85
            if (isset($context["S_FIRST_POST"])) { $_S_FIRST_POST_ = $context["S_FIRST_POST"]; } else { $_S_FIRST_POST_ = null; }
            if ((!$_S_FIRST_POST_)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 86
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            if (isset($context["POST_ID"])) { $_POST_ID_ = $context["POST_ID"]; } else { $_POST_ID_ = null; }
            echo $_POST_ID_;
            echo "\" />
\t\t\t\t";
            // line 87
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        } elseif ($_S_POST_DELETED_) {
            // line 91
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            if (isset($context["U_APPROVE_ACTION"])) { $_U_APPROVE_ACTION_ = $context["U_APPROVE_ACTION"]; } else { $_U_APPROVE_ACTION_ = null; }
            echo $_U_APPROVE_ACTION_;
            echo "\">

\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("DELETE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("RESTORE");
            echo "\" name=\"action[restore]\" />
\t\t\t\t";
            // line 96
            if (isset($context["S_FIRST_POST"])) { $_S_FIRST_POST_ = $context["S_FIRST_POST"]; } else { $_S_FIRST_POST_ = null; }
            if ((!$_S_FIRST_POST_)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 97
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            if (isset($context["POST_ID"])) { $_POST_ID_ = $context["POST_ID"]; } else { $_POST_ID_ = null; }
            echo $_POST_ID_;
            echo "\" />
\t\t\t\t";
            // line 98
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        }
        // line 102
        echo "
\t\t";
        // line 103
        if (isset($context["S_MESSAGE_REPORTED"])) { $_S_MESSAGE_REPORTED_ = $context["S_MESSAGE_REPORTED"]; } else { $_S_MESSAGE_REPORTED_ = null; }
        if ($_S_MESSAGE_REPORTED_) {
            // line 104
            echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t";
            // line 105
            if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
            echo $_REPORTED_IMG_;
            echo " <a href=\"";
            if (isset($context["U_MCP_REPORT"])) { $_U_MCP_REPORT_ = $context["U_MCP_REPORT"]; } else { $_U_MCP_REPORT_ = null; }
            echo $_U_MCP_REPORT_;
            echo "\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 108
        echo "
\t\t<div class=\"content\" id=\"post_details\">
\t\t\t";
        // line 110
        if (isset($context["POST_PREVIEW"])) { $_POST_PREVIEW_ = $context["POST_PREVIEW"]; } else { $_POST_PREVIEW_ = null; }
        echo $_POST_PREVIEW_;
        echo "
\t\t</div>

\t\t";
        // line 113
        if (isset($context["S_HAS_ATTACHMENTS"])) { $_S_HAS_ATTACHMENTS_ = $context["S_HAS_ATTACHMENTS"]; } else { $_S_HAS_ATTACHMENTS_ = null; }
        if ($_S_HAS_ATTACHMENTS_) {
            // line 114
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 116
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "attachment"));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 117
                echo "\t\t\t\t\t<dd>";
                if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT");
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t</dl>
\t\t";
        }
        // line 121
        echo "
\t\t";
        // line 122
        if (isset($context["DELETED_MESSAGE"])) { $_DELETED_MESSAGE_ = $context["DELETED_MESSAGE"]; } else { $_DELETED_MESSAGE_ = null; }
        if (isset($context["DELETE_REASON"])) { $_DELETE_REASON_ = $context["DELETE_REASON"]; } else { $_DELETE_REASON_ = null; }
        if (($_DELETED_MESSAGE_ || $_DELETE_REASON_)) {
            // line 123
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 124
            if (isset($context["DELETED_MESSAGE"])) { $_DELETED_MESSAGE_ = $context["DELETED_MESSAGE"]; } else { $_DELETED_MESSAGE_ = null; }
            echo $_DELETED_MESSAGE_;
            echo "
\t\t\t\t";
            // line 125
            if (isset($context["DELETE_REASON"])) { $_DELETE_REASON_ = $context["DELETE_REASON"]; } else { $_DELETE_REASON_ = null; }
            if ($_DELETE_REASON_) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <em>";
                if (isset($context["DELETE_REASON"])) { $_DELETE_REASON_ = $context["DELETE_REASON"]; } else { $_DELETE_REASON_ = null; }
                echo $_DELETE_REASON_;
                echo "</em>";
            }
            // line 126
            echo "\t\t\t</div>
\t\t";
        }
        // line 128
        echo "
\t\t";
        // line 129
        if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
        if ($_SIGNATURE_) {
            // line 130
            echo "\t\t\t<div id=\"sig";
            if (isset($context["POST_ID"])) { $_POST_ID_ = $context["POST_ID"]; } else { $_POST_ID_ = null; }
            echo $_POST_ID_;
            echo "\" class=\"signature\">";
            if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
            echo $_SIGNATURE_;
            echo "</div>
\t\t";
        }
        // line 132
        echo "
\t\t";
        // line 133
        if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
        if (isset($context["S_CAN_VIEWIP"])) { $_S_CAN_VIEWIP_ = $context["S_CAN_VIEWIP"]; } else { $_S_CAN_VIEWIP_ = null; }
        if (($_S_MCP_REPORT_ && $_S_CAN_VIEWIP_)) {
            // line 134
            echo "\t\t\t<hr />
\t\t\t<div>";
            // line 135
            if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
            if ($_S_PM_) {
                echo $this->env->getExtension('phpbb')->lang("THIS_PM_IP");
            } else {
                echo $this->env->getExtension('phpbb')->lang("THIS_POST_IP");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
            if ($_U_WHOIS_) {
                // line 136
                echo "\t\t\t\t<a href=\"";
                if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
                echo $_U_WHOIS_;
                echo "\">";
                if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                if ($_POST_IPADDR_) {
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    echo $_POST_IPADDR_;
                } else {
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                }
                echo "</a> (";
                if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                if ($_POST_IPADDR_) {
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                } else {
                    echo "<a href=\"";
                    if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                    echo $_U_LOOKUP_IP_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                    echo "</a>";
                }
                echo ")
\t\t\t";
            } else {
                // line 138
                echo "\t\t\t\t";
                if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                if ($_POST_IPADDR_) {
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    echo $_POST_IPADDR_;
                    echo " (";
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                    echo ")";
                } else {
                    if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                    echo $_POST_IP_;
                    if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                    if ($_U_LOOKUP_IP_) {
                        echo " (<a href=\"";
                        if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                        echo $_U_LOOKUP_IP_;
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                }
                // line 139
                echo "\t\t\t";
            }
            echo "</div>
\t\t";
        }
        // line 141
        echo "
\t</div>

\t</div>
</div>

";
        // line 147
        if (isset($context["S_CAN_LOCK_POST"])) { $_S_CAN_LOCK_POST_ = $context["S_CAN_LOCK_POST"]; } else { $_S_CAN_LOCK_POST_ = null; }
        if (isset($context["S_CAN_DELETE_POST"])) { $_S_CAN_DELETE_POST_ = $context["S_CAN_DELETE_POST"]; } else { $_S_CAN_DELETE_POST_ = null; }
        if (isset($context["S_CAN_CHGPOSTER"])) { $_S_CAN_CHGPOSTER_ = $context["S_CAN_CHGPOSTER"]; } else { $_S_CAN_CHGPOSTER_ = null; }
        if (isset($context["S_MCP_POST_ADDITIONAL_OPTS"])) { $_S_MCP_POST_ADDITIONAL_OPTS_ = $context["S_MCP_POST_ADDITIONAL_OPTS"]; } else { $_S_MCP_POST_ADDITIONAL_OPTS_ = null; }
        if (((($_S_CAN_LOCK_POST_ || $_S_CAN_DELETE_POST_) || $_S_CAN_CHGPOSTER_) || $_S_MCP_POST_ADDITIONAL_OPTS_)) {
            // line 148
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 151
            echo $this->env->getExtension('phpbb')->lang("MOD_OPTIONS");
            echo "</h3>
\t\t";
            // line 152
            if (isset($context["S_CAN_CHGPOSTER"])) { $_S_CAN_CHGPOSTER_ = $context["S_CAN_CHGPOSTER"]; } else { $_S_CAN_CHGPOSTER_ = null; }
            if ($_S_CAN_CHGPOSTER_) {
                // line 153
                echo "\t\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                if (isset($context["U_POST_ACTION"])) { $_U_POST_ACTION_ = $context["U_POST_ACTION"]; } else { $_U_POST_ACTION_ = null; }
                echo $_U_POST_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 157
                echo $this->env->getExtension('phpbb')->lang("CHANGE_POSTER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 158
                if (isset($context["S_USER_SELECT"])) { $_S_USER_SELECT_ = $context["S_USER_SELECT"]; } else { $_S_USER_SELECT_ = null; }
                if ($_S_USER_SELECT_) {
                    echo "<dd><select name=\"u\">";
                    if (isset($context["S_USER_SELECT"])) { $_S_USER_SELECT_ = $context["S_USER_SELECT"]; } else { $_S_USER_SELECT_ = null; }
                    echo $_S_USER_SELECT_;
                    echo "</select> <input type=\"submit\" class=\"button2\" name=\"action[chgposter_ip]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                    echo "\" /></dd>";
                }
                // line 159
                echo "\t\t\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t\t<input class=\"inputbox autowidth\" type=\"text\" name=\"username\" value=\"\" />
\t\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposter]\" value=\"";
                // line 161
                echo $this->env->getExtension('phpbb')->lang("CONFIRM");
                echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<span>[ <a href=\"";
                // line 163
                if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
                echo $_U_FIND_USERNAME_;
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> ]</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 166
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 170
            echo "
\t\t";
            // line 171
            if (isset($context["mcp_post_additional_options"])) { $_mcp_post_additional_options_ = $context["mcp_post_additional_options"]; } else { $_mcp_post_additional_options_ = null; }
            // line 172
            echo "
\t\t";
            // line 173
            if (isset($context["S_CAN_LOCK_POST"])) { $_S_CAN_LOCK_POST_ = $context["S_CAN_LOCK_POST"]; } else { $_S_CAN_LOCK_POST_ = null; }
            if (isset($context["S_CAN_DELETE_POST"])) { $_S_CAN_DELETE_POST_ = $context["S_CAN_DELETE_POST"]; } else { $_S_CAN_DELETE_POST_ = null; }
            if (($_S_CAN_LOCK_POST_ || $_S_CAN_DELETE_POST_)) {
                // line 174
                echo "\t\t\t<form method=\"post\" id=\"mcp\" action=\"";
                if (isset($context["U_MCP_ACTION"])) { $_U_MCP_ACTION_ = $context["U_MCP_ACTION"]; } else { $_U_MCP_ACTION_ = null; }
                echo $_U_MCP_ACTION_;
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 178
                echo $this->env->getExtension('phpbb')->lang("MOD_OPTIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"action\">
\t\t\t\t\t";
                // line 180
                if (isset($context["S_CAN_LOCK_POST"])) { $_S_CAN_LOCK_POST_ = $context["S_CAN_LOCK_POST"]; } else { $_S_CAN_LOCK_POST_ = null; }
                if ($_S_CAN_LOCK_POST_) {
                    if (isset($context["S_POST_LOCKED"])) { $_S_POST_LOCKED_ = $context["S_POST_LOCKED"]; } else { $_S_POST_LOCKED_ = null; }
                    if ($_S_POST_LOCKED_) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb')->lang("UNLOCK_POST_EXPLAIN");
                        echo "]</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                        echo "]</option>";
                    }
                }
                // line 181
                echo "\t\t\t\t\t";
                if (isset($context["S_CAN_DELETE_POST"])) { $_S_CAN_DELETE_POST_ = $context["S_CAN_DELETE_POST"]; } else { $_S_CAN_DELETE_POST_ = null; }
                if ($_S_CAN_DELETE_POST_) {
                    echo "<option value=\"delete_post\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 182
                echo "\t\t\t\t\t</select> <input class=\"button2\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 185
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 189
            echo "
\t\t</div>
\t</div>
";
        }
        // line 193
        echo "

";
        // line 195
        if (isset($context["S_MCP_QUEUE"])) { $_S_MCP_QUEUE_ = $context["S_MCP_QUEUE"]; } else { $_S_MCP_QUEUE_ = null; }
        if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
        if (isset($context["RETURN_TOPIC"])) { $_RETURN_TOPIC_ = $context["RETURN_TOPIC"]; } else { $_RETURN_TOPIC_ = null; }
        if ((($_S_MCP_QUEUE_ || $_S_MCP_REPORT_) || $_RETURN_TOPIC_)) {
            // line 196
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 199
            if (isset($context["S_MCP_QUEUE"])) { $_S_MCP_QUEUE_ = $context["S_MCP_QUEUE"]; } else { $_S_MCP_QUEUE_ = null; }
            if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
            if ($_S_MCP_QUEUE_) {
                if (isset($context["RETURN_QUEUE"])) { $_RETURN_QUEUE_ = $context["RETURN_QUEUE"]; } else { $_RETURN_QUEUE_ = null; }
                echo $_RETURN_QUEUE_;
                echo " | ";
                if (isset($context["RETURN_TOPIC_SIMPLE"])) { $_RETURN_TOPIC_SIMPLE_ = $context["RETURN_TOPIC_SIMPLE"]; } else { $_RETURN_TOPIC_SIMPLE_ = null; }
                echo $_RETURN_TOPIC_SIMPLE_;
                echo " | ";
                if (isset($context["RETURN_POST"])) { $_RETURN_POST_ = $context["RETURN_POST"]; } else { $_RETURN_POST_ = null; }
                echo $_RETURN_POST_;
            } elseif ($_S_MCP_REPORT_) {
                if (isset($context["RETURN_REPORTS"])) { $_RETURN_REPORTS_ = $context["RETURN_REPORTS"]; } else { $_RETURN_REPORTS_ = null; }
                echo $_RETURN_REPORTS_;
                if (isset($context["S_PM"])) { $_S_PM_ = $context["S_PM"]; } else { $_S_PM_ = null; }
                if ((!$_S_PM_)) {
                    echo " | <a href=\"";
                    if (isset($context["U_VIEW_POST"])) { $_U_VIEW_POST_ = $context["U_VIEW_POST"]; } else { $_U_VIEW_POST_ = null; }
                    echo $_U_VIEW_POST_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_POST");
                    echo "</a> | <a href=\"";
                    if (isset($context["U_VIEW_TOPIC"])) { $_U_VIEW_TOPIC_ = $context["U_VIEW_TOPIC"]; } else { $_U_VIEW_TOPIC_ = null; }
                    echo $_U_VIEW_TOPIC_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "</a> | <a href=\"";
                    if (isset($context["U_VIEW_FORUM"])) { $_U_VIEW_FORUM_ = $context["U_VIEW_FORUM"]; } else { $_U_VIEW_FORUM_ = null; }
                    echo $_U_VIEW_FORUM_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                if (isset($context["RETURN_TOPIC"])) { $_RETURN_TOPIC_ = $context["RETURN_TOPIC"]; } else { $_RETURN_TOPIC_ = null; }
                echo $_RETURN_TOPIC_;
            }
            echo "</p>

\t\t</div>
\t</div>
";
        }
        // line 204
        echo "
";
        // line 205
        if (isset($context["S_MCP_QUEUE"])) { $_S_MCP_QUEUE_ = $context["S_MCP_QUEUE"]; } else { $_S_MCP_QUEUE_ = null; }
        if ($_S_MCP_QUEUE_) {
        } else {
            // line 207
            echo "
\t";
            // line 208
            if (isset($context["S_SHOW_USER_NOTES"])) { $_S_SHOW_USER_NOTES_ = $context["S_SHOW_USER_NOTES"]; } else { $_S_SHOW_USER_NOTES_ = null; }
            if ($_S_SHOW_USER_NOTES_) {
                // line 209
                echo "\t\t<div class=\"panel\" id=\"usernotes\">
\t\t\t<div class=\"inner\">

\t\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 212
                if (isset($context["U_POST_ACTION"])) { $_U_POST_ACTION_ = $context["U_POST_ACTION"]; } else { $_U_POST_ACTION_ = null; }
                echo $_U_POST_ACTION_;
                echo "\">

\t\t\t";
                // line 214
                if (isset($context["S_USER_NOTES"])) { $_S_USER_NOTES_ = $context["S_USER_NOTES"]; } else { $_S_USER_NOTES_ = null; }
                if ($_S_USER_NOTES_) {
                    // line 215
                    echo "\t\t\t\t<h3>";
                    echo $this->env->getExtension('phpbb')->lang("FEEDBACK");
                    echo "</h3>

\t\t\t\t";
                    // line 217
                    if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "usernotes"));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 218
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->env->getExtension('phpbb')->lang("REPORTED_BY");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                        echo $this->getAttribute($_usernotes_, "REPORT_BY");
                        echo " &laquo; ";
                        if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                        echo $this->getAttribute($_usernotes_, "REPORT_AT");
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 219
                        if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
                        if ($_S_CLEAR_ALLOWED_) {
                            echo "<div class=\"right-box\"><input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                            echo $this->getAttribute($_usernotes_, "ID");
                            echo "\" /></div>";
                        }
                        // line 220
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        if (isset($context["usernotes"])) { $_usernotes_ = $context["usernotes"]; } else { $_usernotes_ = null; }
                        echo $this->getAttribute($_usernotes_, "ACTION");
                        echo "</div>

\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "
\t\t\t\t";
                    // line 225
                    if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
                    if ($_S_CLEAR_ALLOWED_) {
                        // line 226
                        echo "\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 227
                        echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                        echo "\" />&nbsp;
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 228
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                        echo "\" />
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 231
                    echo "\t\t\t";
                }
                // line 232
                echo "
\t\t\t<h3>";
                // line 233
                echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 234
                echo $this->env->getExtension('phpbb')->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"inputbox\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 241
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" value=\"";
                // line 242
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 243
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 250
            echo "
\t";
            // line 251
            if (isset($context["S_SHOW_REPORTS"])) { $_S_SHOW_REPORTS_ = $context["S_SHOW_REPORTS"]; } else { $_S_SHOW_REPORTS_ = null; }
            if ($_S_SHOW_REPORTS_) {
                // line 252
                echo "\t\t<div class=\"panel\" id=\"reports\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
                // line 255
                echo $this->env->getExtension('phpbb')->lang("MCP_POST_REPORTS");
                echo "</h3>

\t\t\t";
                // line 257
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "reports"));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 258
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_BY");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    if ($this->getAttribute($_reports_, "U_REPORTER")) {
                        echo "<a href=\"";
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "U_REPORTER");
                        echo "\">";
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "REPORTER");
                        echo "</a>";
                    } else {
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "REPORTER");
                    }
                    echo " &laquo; ";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    echo $this->getAttribute($_reports_, "REPORT_TIME");
                    echo "</strong></span>
\t\t\t\t<p><em>";
                    // line 259
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    echo $this->getAttribute($_reports_, "REASON_TITLE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    echo $this->getAttribute($_reports_, "REASON_DESC");
                    echo "</em>";
                    if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                    if ($this->getAttribute($_reports_, "REPORT_TEXT")) {
                        echo "<br />";
                        if (isset($context["reports"])) { $_reports_ = $context["reports"]; } else { $_reports_ = null; }
                        echo $this->getAttribute($_reports_, "REPORT_TEXT");
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 265
            echo "
\t";
            // line 266
            if (isset($context["S_CAN_VIEWIP"])) { $_S_CAN_VIEWIP_ = $context["S_CAN_VIEWIP"]; } else { $_S_CAN_VIEWIP_ = null; }
            if (isset($context["S_MCP_REPORT"])) { $_S_MCP_REPORT_ = $context["S_MCP_REPORT"]; } else { $_S_MCP_REPORT_ = null; }
            if (($_S_CAN_VIEWIP_ && (!$_S_MCP_REPORT_))) {
                // line 267
                echo "\t\t<div class=\"panel\" id=\"ip\">
\t\t\t<div class=\"inner\">

\t\t\t<p>";
                // line 270
                echo $this->env->getExtension('phpbb')->lang("THIS_POST_IP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
                if ($_U_WHOIS_) {
                    // line 271
                    echo "\t\t\t\t<a href=\"";
                    if (isset($context["U_WHOIS"])) { $_U_WHOIS_ = $context["U_WHOIS"]; } else { $_U_WHOIS_ = null; }
                    echo $_U_WHOIS_;
                    echo "\">";
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    if ($_POST_IPADDR_) {
                        if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                        echo $_POST_IPADDR_;
                    } else {
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                    }
                    echo "</a> (";
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    if ($_POST_IPADDR_) {
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                    } else {
                        echo "<a href=\"";
                        if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                        echo $_U_LOOKUP_IP_;
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo ")
\t\t\t";
                } else {
                    // line 273
                    echo "\t\t\t\t";
                    if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                    if ($_POST_IPADDR_) {
                        if (isset($context["POST_IPADDR"])) { $_POST_IPADDR_ = $context["POST_IPADDR"]; } else { $_POST_IPADDR_ = null; }
                        echo $_POST_IPADDR_;
                        echo " (";
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                        echo ")";
                    } else {
                        if (isset($context["POST_IP"])) { $_POST_IP_ = $context["POST_IP"]; } else { $_POST_IP_ = null; }
                        echo $_POST_IP_;
                        if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                        if ($_U_LOOKUP_IP_) {
                            echo " (<a href=\"";
                            if (isset($context["U_LOOKUP_IP"])) { $_U_LOOKUP_IP_ = $context["U_LOOKUP_IP"]; } else { $_U_LOOKUP_IP_ = null; }
                            echo $_U_LOOKUP_IP_;
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                            echo "</a>)";
                        }
                    }
                    // line 274
                    echo "\t\t\t";
                }
                echo "</p>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 279
                echo $this->env->getExtension('phpbb')->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 280
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 284
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "userrow"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 285
                    echo "\t\t\t<tr class=\"";
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    if (($this->getAttribute($_userrow_, "S_ROW_COUNT") % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 286
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    if ($this->getAttribute($_userrow_, "U_PROFILE")) {
                        echo "<a href=\"";
                        if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                        echo $this->getAttribute($_userrow_, "U_PROFILE");
                        echo "\">";
                        if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                        echo $this->getAttribute($_userrow_, "USERNAME");
                        echo "</a>";
                    } else {
                        if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                        echo $this->getAttribute($_userrow_, "USERNAME");
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\"><a href=\"";
                    // line 287
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    echo $this->getAttribute($_userrow_, "U_SEARCHPOSTS");
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_POSTS_BY");
                    echo " ";
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    echo $this->getAttribute($_userrow_, "USERNAME");
                    echo "\">";
                    if (isset($context["userrow"])) { $_userrow_ = $context["userrow"]; } else { $_userrow_ = null; }
                    echo $this->getAttribute($_userrow_, "NUM_POSTS");
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 290
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 291
                    echo $this->env->getExtension('phpbb')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 294
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 300
                echo $this->env->getExtension('phpbb')->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 301
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 305
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "iprow"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 306
                    echo "\t\t\t<tr class=\"";
                    if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                    if (($this->getAttribute($_iprow_, "S_ROW_COUNT") % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 307
                    if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                    if ($this->getAttribute($_iprow_, "HOSTNAME")) {
                        echo "<a href=\"";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "U_WHOIS");
                        echo "\">";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "HOSTNAME");
                        echo "</a> (";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "IP");
                        echo ")";
                    } else {
                        echo "<a href=\"";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "U_WHOIS");
                        echo "\">";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "IP");
                        echo "</a> (<a href=\"";
                        if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                        echo $this->getAttribute($_iprow_, "U_LOOKUP_IP");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 308
                    if (isset($context["iprow"])) { $_iprow_ = $context["iprow"]; } else { $_iprow_ = null; }
                    echo $this->getAttribute($_iprow_, "NUM_POSTS");
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 311
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 312
                    echo $this->env->getExtension('phpbb')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<p><a href=\"";
                // line 318
                if (isset($context["U_LOOKUP_ALL"])) { $_U_LOOKUP_ALL_ = $context["U_LOOKUP_ALL"]; } else { $_U_LOOKUP_ALL_ = null; }
                echo $_U_LOOKUP_ALL_;
                echo "#ip\">";
                echo $this->env->getExtension('phpbb')->lang("LOOKUP_ALL");
                echo "</a></p>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 323
            echo "
";
        }
        // line 325
        echo "
";
        // line 326
        if (isset($context["S_TOPIC_REVIEW"])) { $_S_TOPIC_REVIEW_ = $context["S_TOPIC_REVIEW"]; } else { $_S_TOPIC_REVIEW_ = null; }
        if ($_S_TOPIC_REVIEW_) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("posting_topic_review.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 327
        echo "
";
        // line 328
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1282 => 328,  1279 => 327,  1264 => 326,  1261 => 325,  1257 => 323,  1246 => 318,  1241 => 315,  1232 => 312,  1229 => 311,  1220 => 308,  1191 => 307,  1181 => 306,  1175 => 305,  1168 => 301,  1164 => 300,  1156 => 294,  1147 => 291,  1144 => 290,  1127 => 287,  1111 => 286,  1101 => 285,  1095 => 284,  1088 => 280,  1084 => 279,  1075 => 274,  1052 => 273,  1023 => 271,  1017 => 270,  1012 => 267,  1008 => 266,  1005 => 265,  999 => 261,  979 => 259,  956 => 258,  951 => 257,  946 => 255,  941 => 252,  938 => 251,  935 => 250,  924 => 243,  920 => 242,  916 => 241,  906 => 234,  902 => 233,  899 => 232,  896 => 231,  890 => 228,  886 => 227,  883 => 226,  880 => 225,  877 => 224,  865 => 220,  857 => 219,  845 => 218,  840 => 217,  834 => 215,  831 => 214,  825 => 212,  820 => 209,  817 => 208,  814 => 207,  810 => 205,  807 => 204,  763 => 199,  758 => 196,  753 => 195,  749 => 193,  743 => 189,  735 => 185,  728 => 182,  720 => 181,  702 => 180,  696 => 178,  687 => 174,  683 => 173,  680 => 172,  678 => 171,  675 => 170,  667 => 166,  658 => 163,  653 => 161,  649 => 159,  639 => 158,  634 => 157,  625 => 153,  622 => 152,  618 => 151,  613 => 148,  607 => 147,  599 => 141,  593 => 139,  570 => 138,  541 => 136,  530 => 135,  527 => 134,  523 => 133,  520 => 132,  510 => 130,  507 => 129,  504 => 128,  500 => 126,  489 => 125,  484 => 124,  481 => 123,  477 => 122,  474 => 121,  470 => 119,  460 => 117,  455 => 116,  451 => 115,  448 => 114,  445 => 113,  438 => 110,  434 => 108,  422 => 105,  419 => 104,  416 => 103,  413 => 102,  405 => 98,  399 => 97,  394 => 96,  390 => 95,  386 => 94,  378 => 91,  370 => 87,  364 => 86,  359 => 85,  355 => 84,  351 => 83,  343 => 80,  339 => 79,  336 => 78,  319 => 76,  315 => 74,  276 => 73,  238 => 72,  230 => 71,  222 => 70,  219 => 69,  216 => 68,  212 => 66,  205 => 62,  198 => 61,  195 => 60,  192 => 59,  186 => 56,  176 => 55,  165 => 51,  158 => 46,  152 => 44,  143 => 39,  138 => 38,  133 => 37,  127 => 35,  124 => 34,  117 => 31,  109 => 25,  102 => 23,  95 => 21,  92 => 20,  89 => 19,  83 => 17,  80 => 16,  68 => 15,  60 => 14,  53 => 9,  47 => 7,  41 => 5,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
