<?php

/* mcp_forum.html */
class __TwigTemplate_2ac1910dc317746e2be28027713419bf extends Twig_Template
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
        if (isset($context["CUSTOM_FIELDSET_CLASS"])) { $_CUSTOM_FIELDSET_CLASS_ = $context["CUSTOM_FIELDSET_CLASS"]; } else { $_CUSTOM_FIELDSET_CLASS_ = null; }
        $value = "forum-selection2";
        $context['definition']->set('CUSTOM_FIELDSET_CLASS', $value);
        // line 4
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 5
        echo "
<h2><a href=\"";
        // line 6
        if (isset($context["U_VIEW_FORUM"])) { $_U_VIEW_FORUM_ = $context["U_VIEW_FORUM"]; } else { $_U_VIEW_FORUM_ = null; }
        echo $_U_VIEW_FORUM_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        if (isset($context["FORUM_NAME"])) { $_FORUM_NAME_ = $context["FORUM_NAME"]; } else { $_FORUM_NAME_ = null; }
        echo $_FORUM_NAME_;
        echo "</a></h2>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 8
        if (isset($context["S_MCP_ACTION"])) { $_S_MCP_ACTION_ = $context["S_MCP_ACTION"]; } else { $_S_MCP_ACTION_ = null; }
        echo $_S_MCP_ACTION_;
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar top\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 15
        if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
        echo $_TOTAL_TOPICS_;
        echo "
\t\t\t";
        // line 16
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
            echo " 
\t\t\t\t";
            // line 17
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
            // line 18
            echo "\t\t\t";
        } else {
            echo " 
\t\t\t\t &bull; ";
            // line 19
            if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
            echo $_PAGE_NUMBER_;
            echo "
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t</div>

\t";
        // line 24
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow"))) {
            // line 25
            echo "\t\t<ul class=\"topiclist";
            if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
            if ($_S_MERGE_SELECT_) {
                echo " missing-column";
            }
            echo "\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("TOPICS");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("REPLIES");
            echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t\t";
            // line 31
            if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
            if ((!$_S_MERGE_SELECT_)) {
                echo "<dd class=\"mark\">";
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>";
            }
            // line 32
            echo "\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist";
            // line 35
            if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
            if ($_S_MERGE_SELECT_) {
                echo " missing-column";
            }
            echo "\">

\t\t";
            // line 37
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topicrow"));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 38
                echo "\t\t<li class=\"row";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (($this->getAttribute($_topicrow_, "S_ROW_COUNT") % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED")) {
                    echo " reported";
                }
                echo "\">
\t\t\t<dl class=\"icon ";
                // line 39
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "TOPIC_IMG_STYLE");
                echo "\">
\t\t\t\t<dt ";
                // line 40
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "TOPIC_ICON_IMG")) {
                    echo "style=\"background-image: url(";
                    if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                    echo $_T_ICONS_PATH_;
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "TOPIC_ICON_IMG");
                    echo "); background-repeat: no-repeat;\"";
                }
                echo ">
\t\t\t\t\t";
                // line 41
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "S_UNREAD_TOPIC")) {
                    echo "<a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_NEWEST_POST");
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 42
                echo "\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t";
                // line 44
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "S_SELECT_TOPIC")) {
                    echo "<a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_SELECT_TOPIC");
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb')->lang("SELECT_MERGE");
                    echo " ]</a>&nbsp;&nbsp; ";
                }
                // line 45
                echo "\t\t\t\t\t<a href=\"";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "U_VIEW_TOPIC");
                echo "\" class=\"topictitle\">";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "TOPIC_TITLE");
                echo "</a>
\t\t\t\t\t";
                // line 46
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (($this->getAttribute($_topicrow_, "S_TOPIC_UNAPPROVED") || $this->getAttribute($_topicrow_, "S_POSTS_UNAPPROVED"))) {
                    echo "<a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_MCP_QUEUE");
                    echo "\">";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "UNAPPROVED_IMG");
                    echo "</a> ";
                }
                // line 47
                echo "\t\t\t\t\t";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (($this->getAttribute($_topicrow_, "S_TOPIC_DELETED") || $this->getAttribute($_topicrow_, "S_POSTS_DELETED"))) {
                    echo "<a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_MCP_QUEUE");
                    echo "\">";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "DELETED_IMG");
                    echo "</a> ";
                }
                // line 48
                echo "\t\t\t\t\t";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED")) {
                    echo "<a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_MCP_REPORT");
                    echo "\">";
                    if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
                    echo $_REPORTED_IMG_;
                    echo "</a>";
                }
                // line 49
                echo "\t\t\t\t\t";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (isset($context["S_CAN_DELETE"])) { $_S_CAN_DELETE_ = $context["S_CAN_DELETE"]; } else { $_S_CAN_DELETE_ = null; }
                if (($this->getAttribute($_topicrow_, "S_MOVED_TOPIC") && $_S_CAN_DELETE_)) {
                    echo "&nbsp;<a href=\"";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "U_DELETE_TOPIC");
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_SHADOW_TOPIC");
                    echo " ]</a>";
                }
                // line 50
                echo "\t\t\t\t\t<br />

\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t";
                // line 53
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "ATTACH_ICON_IMG")) {
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "ATTACH_ICON_IMG");
                    echo " ";
                }
                // line 54
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL");
                echo " &laquo; ";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_TIME");
                echo "<br />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "REPLIES");
                echo "</strong></span>

\t\t\t\t\t";
                // line 58
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_topicrow_, "pagination"))) {
                    // line 59
                    echo "\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                    // line 61
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_topicrow_, "pagination"));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 62
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                        if ($this->getAttribute($_pagination_, "S_IS_PREV")) {
                            // line 63
                            echo "\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($_pagination_, "S_IS_CURRENT")) {
                            echo "<li class=\"active\"><span>";
                            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                            echo $this->getAttribute($_pagination_, "PAGE_NUMBER");
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($_pagination_, "S_IS_ELLIPSIS")) {
                            // line 64
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($_pagination_, "S_IS_NEXT")) {
                            // line 66
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                            echo $this->getAttribute($_pagination_, "PAGE_URL");
                            echo "\">";
                            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                            echo $this->getAttribute($_pagination_, "PAGE_NUMBER");
                            echo "</a></li>
\t\t\t\t\t\t\t";
                        }
                        // line 68
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 72
                echo "
\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t";
                // line 74
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                if ($this->getAttribute($_topicrow_, "ATTACH_ICON_IMG")) {
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    echo $this->getAttribute($_topicrow_, "ATTACH_ICON_IMG");
                    echo " ";
                }
                // line 75
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "TOPIC_AUTHOR_FULL");
                echo " &raquo; ";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "FIRST_POST_TIME");
                echo "
\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
                // line 80
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "REPLIES");
                echo " <dfn>";
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 81
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL");
                echo "<br />";
                if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                echo $this->getAttribute($_topicrow_, "LAST_POST_TIME");
                echo "</span>
\t\t\t\t</dd>
\t\t\t\t";
                // line 83
                if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
                if ((!$_S_MERGE_SELECT_)) {
                    // line 84
                    echo "\t\t\t\t<dd class=\"mark\">
\t\t\t\t\t";
                    // line 85
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    if ((!$this->getAttribute($_topicrow_, "S_MOVED_TOPIC"))) {
                        echo "<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_ID");
                        echo "\"";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if ($this->getAttribute($_topicrow_, "S_TOPIC_CHECKED")) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "&nbsp;";
                    }
                    // line 86
                    echo "\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 88
                echo "\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t</ul>
\t";
        } else {
            // line 93
            echo "\t\t<ul class=\"topiclist\">
\t\t\t<li><p class=\"notopics\">";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
            echo "</p></li>
\t\t</ul>
\t";
        }
        // line 97
        echo "
\t<fieldset class=\"display-options\">
\t\t<label>";
        // line 99
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_TOPICS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
        echo $_S_SELECT_SORT_DAYS_;
        echo "</label>
\t\t<label>";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo " ";
        if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
        echo $_S_SELECT_SORT_KEY_;
        echo "</label>
\t\t<label>";
        // line 101
        if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
        echo $_S_SELECT_SORT_DIR_;
        echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"button2\" />
\t</fieldset>

\t<hr />

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 109
        if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
        echo $_TOTAL_TOPICS_;
        echo "
\t\t\t";
        // line 110
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
            echo " 
\t\t\t\t";
            // line 111
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
            // line 112
            echo "\t\t\t";
        } else {
            echo " 
\t\t\t\t &bull; ";
            // line 113
            if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
            echo $_PAGE_NUMBER_;
            echo "
\t\t\t";
        }
        // line 115
        echo "\t\t</div>
\t</div>

\t</div>
</div>

<fieldset class=\"display-actions\">
\t";
        // line 122
        if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
        if ((!$_S_MERGE_SELECT_)) {
            // line 123
            echo "\t<select name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("SELECT_ACTION");
            echo "</option>
\t\t";
            // line 125
            if (isset($context["S_CAN_DELETE"])) { $_S_CAN_DELETE_ = $context["S_CAN_DELETE"]; } else { $_S_CAN_DELETE_ = null; }
            if ($_S_CAN_DELETE_) {
                echo "<option value=\"delete_topic\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</option>";
            }
            // line 126
            echo "\t\t";
            if (isset($context["S_CAN_RESTORE"])) { $_S_CAN_RESTORE_ = $context["S_CAN_RESTORE"]; } else { $_S_CAN_RESTORE_ = null; }
            if ($_S_CAN_RESTORE_) {
                echo "<option value=\"restore_topic\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "</option>";
            }
            // line 127
            echo "\t\t";
            if (isset($context["S_CAN_MERGE"])) { $_S_CAN_MERGE_ = $context["S_CAN_MERGE"]; } else { $_S_CAN_MERGE_ = null; }
            if ($_S_CAN_MERGE_) {
                echo "<option value=\"merge_topics\">";
                echo $this->env->getExtension('phpbb')->lang("MERGE");
                echo "</option>";
            }
            // line 128
            echo "\t\t";
            if (isset($context["S_CAN_MOVE"])) { $_S_CAN_MOVE_ = $context["S_CAN_MOVE"]; } else { $_S_CAN_MOVE_ = null; }
            if ($_S_CAN_MOVE_) {
                echo "<option value=\"move\">";
                echo $this->env->getExtension('phpbb')->lang("MOVE");
                echo "</option>";
            }
            // line 129
            echo "\t\t";
            if (isset($context["S_CAN_FORK"])) { $_S_CAN_FORK_ = $context["S_CAN_FORK"]; } else { $_S_CAN_FORK_ = null; }
            if ($_S_CAN_FORK_) {
                echo "<option value=\"fork\">";
                echo $this->env->getExtension('phpbb')->lang("FORK");
                echo "</option>";
            }
            // line 130
            echo "\t\t";
            if (isset($context["S_CAN_LOCK"])) { $_S_CAN_LOCK_ = $context["S_CAN_LOCK"]; } else { $_S_CAN_LOCK_ = null; }
            if ($_S_CAN_LOCK_) {
                echo "<option value=\"lock\">";
                echo $this->env->getExtension('phpbb')->lang("LOCK");
                echo "</option><option value=\"unlock\">";
                echo $this->env->getExtension('phpbb')->lang("UNLOCK");
                echo "</option>";
            }
            // line 131
            echo "\t\t";
            if (isset($context["S_CAN_SYNC"])) { $_S_CAN_SYNC_ = $context["S_CAN_SYNC"]; } else { $_S_CAN_SYNC_ = null; }
            if ($_S_CAN_SYNC_) {
                echo "<option value=\"resync\">";
                echo $this->env->getExtension('phpbb')->lang("RESYNC");
                echo "</option>";
            }
            // line 132
            echo "\t\t";
            if (isset($context["S_CAN_MAKE_NORMAL"])) { $_S_CAN_MAKE_NORMAL_ = $context["S_CAN_MAKE_NORMAL"]; } else { $_S_CAN_MAKE_NORMAL_ = null; }
            if ($_S_CAN_MAKE_NORMAL_) {
                echo "<option value=\"make_normal\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_NORMAL");
                echo "</option>";
            }
            // line 133
            echo "\t\t";
            if (isset($context["S_CAN_MAKE_STICKY"])) { $_S_CAN_MAKE_STICKY_ = $context["S_CAN_MAKE_STICKY"]; } else { $_S_CAN_MAKE_STICKY_ = null; }
            if ($_S_CAN_MAKE_STICKY_) {
                echo "<option value=\"make_sticky\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_STICKY");
                echo "</option>";
            }
            // line 134
            echo "\t\t";
            if (isset($context["S_CAN_MAKE_ANNOUNCE"])) { $_S_CAN_MAKE_ANNOUNCE_ = $context["S_CAN_MAKE_ANNOUNCE"]; } else { $_S_CAN_MAKE_ANNOUNCE_ = null; }
            if ($_S_CAN_MAKE_ANNOUNCE_) {
                // line 135
                echo "\t\t\t<option value=\"make_announce\">";
                echo $this->env->getExtension('phpbb')->lang("MAKE_ANNOUNCE");
                echo "</option>
\t\t\t<option value=\"make_global\">";
                // line 136
                echo $this->env->getExtension('phpbb')->lang("MAKE_GLOBAL");
                echo "</option>
\t\t";
            }
            // line 138
            echo "\t</select>
\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 139
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t";
        }
        // line 142
        echo "\t";
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 146
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
        return "mcp_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 146,  641 => 142,  634 => 140,  630 => 139,  627 => 138,  622 => 136,  617 => 135,  613 => 134,  605 => 133,  597 => 132,  589 => 131,  579 => 130,  571 => 129,  563 => 128,  555 => 127,  547 => 126,  540 => 125,  536 => 124,  533 => 123,  530 => 122,  521 => 115,  515 => 113,  510 => 112,  498 => 111,  493 => 110,  488 => 109,  478 => 102,  473 => 101,  466 => 100,  458 => 99,  454 => 97,  448 => 94,  445 => 93,  441 => 91,  433 => 88,  429 => 86,  414 => 85,  411 => 84,  408 => 83,  395 => 81,  388 => 80,  373 => 75,  366 => 74,  362 => 72,  357 => 69,  351 => 68,  339 => 66,  333 => 64,  324 => 63,  320 => 62,  315 => 61,  311 => 59,  308 => 58,  299 => 56,  285 => 54,  278 => 53,  273 => 50,  261 => 49,  249 => 48,  237 => 47,  226 => 46,  217 => 45,  207 => 44,  203 => 42,  195 => 41,  183 => 40,  178 => 39,  164 => 38,  159 => 37,  151 => 35,  146 => 32,  139 => 31,  135 => 30,  131 => 29,  127 => 28,  117 => 25,  114 => 24,  109 => 21,  103 => 19,  98 => 18,  86 => 17,  81 => 16,  76 => 15,  65 => 8,  53 => 6,  50 => 5,  38 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
