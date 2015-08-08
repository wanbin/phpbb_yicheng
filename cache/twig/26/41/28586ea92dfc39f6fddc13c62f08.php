<?php

/* mcp_queue.html */
class __TwigTemplate_264128586ea92dfc39f6fddc13c62f08 extends Twig_Template
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
<form id=\"mcp\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_MCP_ACTION"])) { $_S_MCP_ACTION_ = $context["S_MCP_ACTION"]; } else { $_S_MCP_ACTION_ = null; }
        echo $_S_MCP_ACTION_;
        echo "\">

<fieldset class=\"forum-selection\">
\t<label for=\"fo\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("FORUM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <select name=\"f\" id=\"fo\">";
        if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
        echo $_S_FORUM_OPTIONS_;
        echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("GO");
        echo "\" class=\"button2\" />
\t";
        // line 8
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>

<h2>";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
        echo "</p>

\t";
        // line 18
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "postrow"))) {
            // line 19
            echo "\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 21
            if (isset($context["TOTAL"])) { $_TOTAL_ = $context["TOTAL"]; } else { $_TOTAL_ = null; }
            echo $_TOTAL_;
            echo "
\t\t\t\t";
            // line 22
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                echo " 
\t\t\t\t\t";
                // line 23
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
                // line 24
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 25
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t</div>
\t\t</div>

\t\t<ul class=\"topiclist missing-column\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 33
            if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
            if ($_S_TOPICS_) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST");
            }
            echo "</div></dt>
\t\t\t\t\t<dd class=\"moderation\"><span>";
            // line 34
            if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
            if ((!$_S_TOPICS_)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " &amp; ";
            }
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</span></dd>
\t\t\t\t\t<dd class=\"mark\">";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist missing-column responsive-show-all\">

\t\t";
            // line 41
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "postrow"));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 42
                echo "
\t\t";
                // line 43
                if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                if ($this->getAttribute($_postrow_, "S_DELETED_TOPIC")) {
                    // line 44
                    echo "\t\t\t<li><p class=\"notopics\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                    echo "</p></li>
\t\t";
                } else {
                    // line 46
                    echo "
\t\t<li class=\"row";
                    // line 47
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    if (($this->getAttribute($_postrow_, "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                    // line 51
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_VIEW_DETAILS");
                    echo "\" class=\"topictitle\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_SUBJECT");
                    echo "</a> ";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t<span>";
                    // line 52
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_AUTHOR_FULL");
                    echo " &raquo; ";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "POST_TIME");
                    echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t<span>
\t\t\t\t\t\t";
                    // line 57
                    if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                    if ($_S_TOPICS_) {
                        echo "<br />";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "U_TOPIC");
                        echo "\">";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "TOPIC_TITLE");
                        echo "</a> <br />";
                    }
                    // line 58
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "U_VIEWFORUM");
                    echo "\">";
                    if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                    echo $this->getAttribute($_postrow_, "FORUM_NAME");
                    echo "</a>
\t\t\t\t\t</span>
\t\t\t\t</dd>


\t\t \t\t<dd class=\"mark\">
\t\t\t\t\t";
                    // line 64
                    if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                    if ($_S_TOPICS_) {
                        // line 65
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "TOPIC_ID");
                        echo "\" />
\t\t\t\t\t";
                    } else {
                        // line 67
                        echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                        if (isset($context["postrow"])) { $_postrow_ = $context["postrow"]; } else { $_postrow_ = null; }
                        echo $this->getAttribute($_postrow_, "POST_ID");
                        echo "\" />
\t\t\t\t\t";
                    }
                    // line 69
                    echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t</li>
\t\t";
                }
                // line 73
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t</ul>

\t\t<fieldset class=\"display-options\">
\t\t\t<label>";
            // line 77
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
            echo $_S_SELECT_SORT_DAYS_;
            echo "</label>
\t\t\t<label>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
            echo $_S_SELECT_SORT_KEY_;
            echo "</label><label>";
            if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
            echo $_S_SELECT_SORT_DIR_;
            echo "</label>
\t\t\t";
            // line 79
            if (isset($context["TOPIC_ID"])) { $_TOPIC_ID_ = $context["TOPIC_ID"]; } else { $_TOPIC_ID_ = null; }
            if ($_TOPIC_ID_) {
                echo "<label><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"";
                if (isset($context["TOPIC_ID"])) { $_TOPIC_ID_ = $context["TOPIC_ID"]; } else { $_TOPIC_ID_ = null; }
                echo $_TOPIC_ID_;
                echo "\" checked=\"checked\" />&nbsp; <strong>";
                echo $this->env->getExtension('phpbb')->lang("ONLY_TOPIC");
                echo "</strong></label>";
            }
            // line 80
            echo "\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t\t<hr />

\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 87
            if (isset($context["TOTAL"])) { $_TOTAL_ = $context["TOTAL"]; } else { $_TOTAL_ = null; }
            echo $_TOTAL_;
            echo "
\t\t\t\t";
            // line 88
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                echo " 
\t\t\t\t\t";
                // line 89
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
                // line 90
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 91
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 93
            echo "\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 97
            echo "\t\t<p class=\"notopics\"><strong>
\t\t\t";
            // line 98
            if (isset($context["S_RESTORE"])) { $_S_RESTORE_ = $context["S_RESTORE"]; } else { $_S_RESTORE_ = null; }
            if ($_S_RESTORE_) {
                // line 99
                echo "\t\t\t\t";
                if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                if ($_S_TOPICS_) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_DELETED");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_DELETED");
                }
                // line 100
                echo "\t\t\t";
            } else {
                // line 101
                echo "\t\t\t\t";
                if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
                if ($_S_TOPICS_) {
                    echo $this->env->getExtension('phpbb')->lang("NO_TOPICS_QUEUE");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS_QUEUE");
                }
                // line 102
                echo "\t\t\t";
            }
            // line 103
            echo "\t\t</strong></p>
\t";
        }
        // line 105
        echo "
\t</div>
</div>

";
        // line 109
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "postrow"))) {
            // line 110
            echo "\t<fieldset class=\"display-actions\">
\t\t";
            // line 111
            if (isset($context["S_RESTORE"])) { $_S_RESTORE_ = $context["S_RESTORE"]; } else { $_S_RESTORE_ = null; }
            if ($_S_RESTORE_) {
                // line 112
                echo "\t\t<input class=\"button2\" type=\"submit\" name=\"action[delete]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[restore]\" value=\"";
                // line 113
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" />
\t\t";
            } else {
                // line 115
                echo "\t\t<input class=\"button2\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 116
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" />
\t\t";
            }
            // line 118
            echo "\t\t<div>
\t\t\t";
            // line 119
            if (isset($context["S_TOPICS"])) { $_S_TOPICS_ = $context["S_TOPICS"]; } else { $_S_TOPICS_ = null; }
            if ($_S_TOPICS_) {
                // line 120
                echo "\t\t\t\t<a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t";
            } else {
                // line 122
                echo "\t\t\t\t<a href=\"#\" onclick=\"marklist('mcp', 'post_id_list', true); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'post_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t";
            }
            // line 124
            echo "\t\t</div>
\t</fieldset>
";
        }
        // line 127
        echo "</form>

";
        // line 129
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
        return "mcp_queue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 129,  445 => 127,  440 => 124,  432 => 122,  424 => 120,  421 => 119,  418 => 118,  413 => 116,  408 => 115,  403 => 113,  398 => 112,  395 => 111,  392 => 110,  389 => 109,  383 => 105,  379 => 103,  376 => 102,  368 => 101,  365 => 100,  357 => 99,  354 => 98,  351 => 97,  345 => 93,  339 => 91,  334 => 90,  322 => 89,  317 => 88,  312 => 87,  301 => 80,  291 => 79,  281 => 78,  273 => 77,  268 => 74,  262 => 73,  256 => 69,  249 => 67,  242 => 65,  239 => 64,  222 => 58,  207 => 57,  191 => 52,  180 => 51,  168 => 47,  165 => 46,  159 => 44,  156 => 43,  153 => 42,  148 => 41,  139 => 35,  130 => 34,  121 => 33,  113 => 27,  107 => 25,  102 => 24,  90 => 23,  85 => 22,  80 => 21,  76 => 19,  73 => 18,  68 => 16,  60 => 11,  53 => 8,  49 => 7,  41 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
