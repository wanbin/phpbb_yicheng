<?php

/* navbar_footer.html */
class __TwigTemplate_26cd4b147a7be7a82133446816ab9d83 extends Twig_Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo "<span class=\"crumb\"><a href=\"";
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t";
        if (isset($context["overall_footer_breadcrumb_prepend"])) { $_overall_footer_breadcrumb_prepend_ = $context["overall_footer_breadcrumb_prepend"]; } else { $_overall_footer_breadcrumb_prepend_ = null; }
        // line 8
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 9
        if (isset($context["overall_footer_breadcrumb_append"])) { $_overall_footer_breadcrumb_append_ = $context["overall_footer_breadcrumb_append"]; } else { $_overall_footer_breadcrumb_append_ = null; }
        // line 10
        echo "\t\t</li>
\t\t";
        // line 11
        if (isset($context["U_WATCH_FORUM_LINK"])) { $_U_WATCH_FORUM_LINK_ = $context["U_WATCH_FORUM_LINK"]; } else { $_U_WATCH_FORUM_LINK_ = null; }
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (($_U_WATCH_FORUM_LINK_ && (!$_S_IS_BOT_))) {
            echo "<li class=\"small-icon icon-";
            if (isset($context["S_WATCHING_FORUM"])) { $_S_WATCHING_FORUM_ = $context["S_WATCHING_FORUM"]; } else { $_S_WATCHING_FORUM_ = null; }
            if ($_S_WATCHING_FORUM_) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            if (isset($context["U_WATCH_FORUM_LINK"])) { $_U_WATCH_FORUM_LINK_ = $context["U_WATCH_FORUM_LINK"]; } else { $_U_WATCH_FORUM_LINK_ = null; }
            echo $_U_WATCH_FORUM_LINK_;
            echo "\" title=\"";
            if (isset($context["S_WATCH_FORUM_TITLE"])) { $_S_WATCH_FORUM_TITLE_ = $context["S_WATCH_FORUM_TITLE"]; } else { $_S_WATCH_FORUM_TITLE_ = null; }
            echo $_S_WATCH_FORUM_TITLE_;
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if (isset($context["S_WATCHING_FORUM"])) { $_S_WATCHING_FORUM_ = $context["S_WATCHING_FORUM"]; } else { $_S_WATCHING_FORUM_ = null; }
            if ((!$_S_WATCHING_FORUM_)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            if (isset($context["S_WATCH_FORUM_TOGGLE"])) { $_S_WATCH_FORUM_TOGGLE_ = $context["S_WATCH_FORUM_TOGGLE"]; } else { $_S_WATCH_FORUM_TOGGLE_ = null; }
            echo $_S_WATCH_FORUM_TOGGLE_;
            echo "\" data-toggle-url=\"";
            if (isset($context["U_WATCH_FORUM_TOGGLE"])) { $_U_WATCH_FORUM_TOGGLE_ = $context["U_WATCH_FORUM_TOGGLE"]; } else { $_U_WATCH_FORUM_TOGGLE_ = null; }
            echo $_U_WATCH_FORUM_TOGGLE_;
            echo "\">";
            if (isset($context["S_WATCH_FORUM_TITLE"])) { $_S_WATCH_FORUM_TITLE_ = $context["S_WATCH_FORUM_TITLE"]; } else { $_S_WATCH_FORUM_TITLE_ = null; }
            echo $_S_WATCH_FORUM_TITLE_;
            echo "</a></li>";
        }
        // line 12
        echo "
\t\t";
        // line 13
        if (isset($context["overall_footer_timezone_before"])) { $_overall_footer_timezone_before_ = $context["overall_footer_timezone_before"]; } else { $_overall_footer_timezone_before_ = null; }
        // line 14
        echo "\t\t<li class=\"rightside\">";
        if (isset($context["S_TIMEZONE"])) { $_S_TIMEZONE_ = $context["S_TIMEZONE"]; } else { $_S_TIMEZONE_ = null; }
        echo $_S_TIMEZONE_;
        echo "</li>
\t\t";
        // line 15
        if (isset($context["overall_footer_timezone_after"])) { $_overall_footer_timezone_after_ = $context["overall_footer_timezone_after"]; } else { $_overall_footer_timezone_after_ = null; }
        // line 16
        echo "\t\t";
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if ((!$_S_IS_BOT_)) {
            // line 17
            echo "\t\t\t<li class=\"small-icon icon-delete-cookies rightside\"><a href=\"";
            if (isset($context["U_DELETE_COOKIES"])) { $_U_DELETE_COOKIES_ = $context["U_DELETE_COOKIES"]; } else { $_U_DELETE_COOKIES_ = null; }
            echo $_U_DELETE_COOKIES_;
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t";
            // line 18
            if (isset($context["S_DISPLAY_MEMBERLIST"])) { $_S_DISPLAY_MEMBERLIST_ = $context["S_DISPLAY_MEMBERLIST"]; } else { $_S_DISPLAY_MEMBERLIST_ = null; }
            if ($_S_DISPLAY_MEMBERLIST_) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                if (isset($context["U_MEMBERLIST"])) { $_U_MEMBERLIST_ = $context["U_MEMBERLIST"]; } else { $_U_MEMBERLIST_ = null; }
                echo $_U_MEMBERLIST_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        if (isset($context["overall_footer_teamlink_before"])) { $_overall_footer_teamlink_before_ = $context["overall_footer_teamlink_before"]; } else { $_overall_footer_teamlink_before_ = null; }
        // line 21
        echo "\t\t";
        if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
        if ($_U_TEAM_) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
            echo $_U_TEAM_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 22
        echo "\t\t";
        if (isset($context["overall_footer_teamlink_after"])) { $_overall_footer_teamlink_after_ = $context["overall_footer_teamlink_after"]; } else { $_overall_footer_teamlink_after_ = null; }
        // line 23
        echo "\t\t";
        if (isset($context["U_CONTACT_US"])) { $_U_CONTACT_US_ = $context["U_CONTACT_US"]; } else { $_U_CONTACT_US_ = null; }
        if ($_U_CONTACT_US_) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            if (isset($context["U_CONTACT_US"])) { $_U_CONTACT_US_ = $context["U_CONTACT_US"]; } else { $_U_CONTACT_US_ = null; }
            echo $_U_CONTACT_US_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 24
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 24,  144 => 23,  141 => 22,  127 => 20,  124 => 19,  112 => 18,  100 => 16,  98 => 15,  92 => 14,  90 => 13,  87 => 12,  47 => 9,  39 => 8,  219 => 51,  217 => 50,  211 => 48,  191 => 45,  188 => 44,  173 => 43,  158 => 42,  149 => 41,  138 => 40,  133 => 39,  129 => 37,  85 => 16,  66 => 14,  63 => 13,  56 => 12,  48 => 10,  44 => 8,  32 => 7,  28 => 5,  494 => 111,  483 => 109,  479 => 108,  476 => 107,  468 => 104,  462 => 103,  460 => 102,  442 => 101,  439 => 100,  434 => 99,  423 => 98,  407 => 96,  404 => 95,  401 => 94,  397 => 93,  392 => 90,  389 => 89,  386 => 88,  377 => 86,  372 => 85,  362 => 84,  359 => 83,  343 => 80,  333 => 79,  327 => 78,  323 => 77,  311 => 74,  308 => 73,  305 => 72,  302 => 71,  300 => 70,  288 => 66,  284 => 64,  282 => 63,  272 => 61,  260 => 59,  258 => 58,  255 => 57,  245 => 56,  228 => 52,  225 => 51,  223 => 50,  215 => 49,  212 => 48,  209 => 47,  196 => 47,  183 => 45,  181 => 44,  164 => 43,  162 => 42,  156 => 38,  154 => 37,  150 => 35,  147 => 34,  136 => 33,  126 => 32,  123 => 36,  118 => 30,  115 => 29,  107 => 27,  99 => 25,  83 => 22,  68 => 19,  64 => 18,  52 => 11,  49 => 10,  46 => 13,  43 => 12,  41 => 11,  34 => 7,  26 => 6,  474 => 106,  471 => 105,  461 => 113,  457 => 111,  451 => 110,  446 => 107,  444 => 106,  440 => 104,  427 => 103,  425 => 102,  420 => 97,  411 => 94,  402 => 93,  396 => 92,  387 => 91,  381 => 89,  378 => 88,  373 => 87,  371 => 86,  365 => 83,  360 => 82,  355 => 81,  334 => 80,  324 => 72,  322 => 71,  310 => 69,  306 => 67,  304 => 66,  298 => 64,  295 => 63,  293 => 62,  283 => 59,  279 => 57,  269 => 55,  266 => 54,  263 => 60,  253 => 51,  250 => 50,  241 => 48,  236 => 47,  230 => 46,  213 => 31,  210 => 30,  200 => 22,  193 => 46,  190 => 19,  187 => 18,  163 => 16,  143 => 15,  130 => 21,  117 => 13,  104 => 17,  91 => 24,  77 => 21,  74 => 15,  38 => 7,  33 => 6,  103 => 18,  89 => 18,  86 => 15,  81 => 12,  65 => 11,  60 => 10,  55 => 16,  50 => 11,  36 => 7,  22 => 2,  19 => 1,);
    }
}
