<?php

/* jumpbox.html */
class __TwigTemplate_beb4ae1095838b6b3dd894559852f215 extends Twig_Template
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
        echo "
";
        // line 2
        if (isset($context["S_VIEWTOPIC"])) { $_S_VIEWTOPIC_ = $context["S_VIEWTOPIC"]; } else { $_S_VIEWTOPIC_ = null; }
        if (isset($context["S_VIEWFORUM"])) { $_S_VIEWFORUM_ = $context["S_VIEWFORUM"]; } else { $_S_VIEWFORUM_ = null; }
        if (isset($context["SEARCH_TOPIC"])) { $_SEARCH_TOPIC_ = $context["SEARCH_TOPIC"]; } else { $_SEARCH_TOPIC_ = null; }
        if (isset($context["S_SEARCH_ACTION"])) { $_S_SEARCH_ACTION_ = $context["S_SEARCH_ACTION"]; } else { $_S_SEARCH_ACTION_ = null; }
        if ($_S_VIEWTOPIC_) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            if (isset($context["U_VIEW_FORUM"])) { $_U_VIEW_FORUM_ = $context["U_VIEW_FORUM"]; } else { $_U_VIEW_FORUM_ = null; }
            echo $_U_VIEW_FORUM_;
            echo "\" class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif ($_S_VIEWFORUM_) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
            echo $_U_INDEX_;
            echo "\" class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif ($_SEARCH_TOPIC_) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH_TOPIC"])) { $_U_SEARCH_TOPIC_ = $context["U_SEARCH_TOPIC"]; } else { $_U_SEARCH_TOPIC_ = null; }
            echo $_U_SEARCH_TOPIC_;
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif ($_S_SEARCH_ACTION_) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if (isset($context["S_DISPLAY_JUMPBOX"])) { $_S_DISPLAY_JUMPBOX_ = $context["S_DISPLAY_JUMPBOX"]; } else { $_S_DISPLAY_JUMPBOX_ = null; }
        if ($_S_DISPLAY_JUMPBOX_) {
            // line 13
            echo "
\t<div class=\"dropdown-container dropdown-container-";
            // line 14
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
            if ((!$_S_IN_MCP_)) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 15
            if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
            if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
            if (($_S_IN_MCP_ && $_S_MERGE_SELECT_)) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ($_S_IN_MCP_) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t";
            // line 16
            if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
            if (isset($context["S_MERGE_SELECT"])) { $_S_MERGE_SELECT_ = $context["S_MERGE_SELECT"]; } else { $_S_MERGE_SELECT_ = null; }
            if (($_S_IN_MCP_ && $_S_MERGE_SELECT_)) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ($_S_IN_MCP_) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            // line 17
            echo "\t\t</span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 21
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "jumpbox_forums"));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                if (($this->getAttribute($_jumpbox_forums_, "FORUM_ID") != (-1))) {
                    // line 23
                    echo "\t\t\t\t\t<li>";
                    if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_jumpbox_forums_, "level"));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                    echo $this->getAttribute($_jumpbox_forums_, "LINK");
                    echo "\">";
                    if (isset($context["jumpbox_forums"])) { $_jumpbox_forums_ = $context["jumpbox_forums"]; } else { $_jumpbox_forums_ = null; }
                    echo $this->getAttribute($_jumpbox_forums_, "FORUM_NAME");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

";
        } else {
            // line 31
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 31,  162 => 26,  156 => 25,  136 => 23,  127 => 21,  121 => 17,  111 => 16,  99 => 15,  81 => 12,  78 => 11,  52 => 7,  22 => 2,  144 => 22,  141 => 21,  128 => 20,  115 => 19,  102 => 18,  87 => 14,  84 => 13,  80 => 13,  54 => 10,  44 => 9,  40 => 5,  38 => 7,  28 => 3,  1716 => 402,  1713 => 401,  1706 => 398,  1692 => 397,  1689 => 396,  1686 => 395,  1683 => 394,  1671 => 393,  1669 => 392,  1664 => 389,  1660 => 387,  1653 => 385,  1650 => 384,  1637 => 383,  1634 => 382,  1629 => 381,  1626 => 380,  1622 => 379,  1619 => 378,  1613 => 374,  1595 => 372,  1589 => 371,  1584 => 370,  1575 => 366,  1566 => 365,  1563 => 364,  1560 => 363,  1548 => 362,  1544 => 360,  1542 => 359,  1539 => 358,  1535 => 356,  1528 => 355,  1508 => 354,  1504 => 353,  1501 => 352,  1499 => 351,  1495 => 349,  1493 => 348,  1490 => 347,  1484 => 343,  1479 => 341,  1469 => 340,  1460 => 339,  1457 => 338,  1450 => 336,  1446 => 335,  1443 => 334,  1429 => 332,  1426 => 331,  1423 => 330,  1417 => 328,  1406 => 322,  1400 => 318,  1398 => 317,  1395 => 316,  1383 => 315,  1380 => 314,  1372 => 313,  1369 => 312,  1365 => 310,  1354 => 309,  1349 => 308,  1346 => 307,  1342 => 305,  1331 => 304,  1326 => 303,  1323 => 302,  1319 => 301,  1311 => 300,  1309 => 299,  1306 => 298,  1302 => 296,  1292 => 294,  1287 => 293,  1282 => 291,  1278 => 289,  1275 => 288,  1269 => 286,  1266 => 285,  1257 => 282,  1254 => 281,  1251 => 280,  1248 => 279,  1240 => 275,  1235 => 274,  1231 => 273,  1227 => 272,  1223 => 271,  1216 => 269,  1208 => 265,  1203 => 264,  1199 => 263,  1195 => 262,  1191 => 261,  1184 => 259,  1181 => 258,  1178 => 257,  1176 => 256,  1151 => 255,  1149 => 254,  1146 => 253,  1143 => 252,  1140 => 251,  1136 => 249,  1133 => 248,  1122 => 245,  1119 => 244,  1115 => 243,  1104 => 240,  1101 => 239,  1097 => 238,  1086 => 235,  1083 => 234,  1079 => 233,  1068 => 230,  1065 => 229,  1061 => 228,  1050 => 225,  1047 => 224,  1043 => 223,  1032 => 220,  1029 => 219,  1025 => 218,  1023 => 217,  1020 => 216,  1016 => 215,  1012 => 214,  1010 => 213,  980 => 211,  968 => 209,  965 => 208,  958 => 205,  953 => 204,  947 => 203,  940 => 200,  935 => 199,  929 => 198,  925 => 197,  922 => 196,  916 => 192,  913 => 191,  906 => 186,  900 => 185,  896 => 183,  892 => 182,  883 => 180,  859 => 179,  855 => 177,  851 => 176,  844 => 175,  840 => 174,  835 => 173,  824 => 169,  818 => 167,  815 => 166,  810 => 165,  808 => 164,  805 => 163,  802 => 162,  796 => 161,  782 => 159,  778 => 158,  772 => 157,  770 => 156,  767 => 155,  757 => 153,  754 => 152,  751 => 151,  748 => 150,  736 => 149,  724 => 148,  702 => 147,  699 => 146,  685 => 145,  681 => 143,  678 => 142,  666 => 141,  664 => 140,  661 => 139,  658 => 138,  655 => 137,  638 => 136,  634 => 135,  632 => 134,  615 => 132,  605 => 131,  570 => 128,  558 => 126,  554 => 125,  551 => 124,  546 => 123,  543 => 122,  533 => 116,  528 => 115,  521 => 111,  518 => 110,  509 => 107,  505 => 105,  502 => 104,  499 => 103,  493 => 100,  489 => 98,  486 => 97,  476 => 94,  468 => 92,  465 => 91,  459 => 90,  457 => 89,  441 => 87,  414 => 86,  380 => 85,  364 => 84,  342 => 83,  339 => 82,  334 => 81,  317 => 78,  310 => 77,  299 => 71,  296 => 70,  292 => 68,  289 => 67,  285 => 65,  278 => 63,  275 => 62,  262 => 61,  259 => 60,  244 => 59,  241 => 58,  237 => 57,  234 => 56,  225 => 51,  216 => 50,  210 => 49,  206 => 48,  200 => 46,  197 => 45,  194 => 44,  191 => 43,  179 => 42,  175 => 40,  173 => 39,  170 => 38,  166 => 36,  159 => 35,  139 => 34,  135 => 33,  132 => 22,  130 => 31,  124 => 27,  118 => 23,  112 => 21,  107 => 20,  98 => 18,  95 => 17,  85 => 14,  82 => 13,  79 => 12,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  47 => 5,  34 => 3,  31 => 3,  19 => 1,);
    }
}
