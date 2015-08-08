<?php

/* mcp_header.html */
class __TwigTemplate_648656514697c0b32c1933da37888487 extends Twig_Template
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
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("MCP");
        echo "</h2>

";
        // line 5
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ($_U_MCP_) {
            // line 6
            echo "\t<p class=\"linkmcp responsive-center\">
\t\t[";
            // line 7
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            if ($_U_ACP_) {
                echo "&nbsp;<a href=\"";
                if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
                echo $_U_ACP_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "\" data-responsive-text=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "</a>&nbsp;|";
            }
            echo "&nbsp;<a href=\"";
            if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
            echo $_U_MCP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" data-responsive-text=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "</a>";
            if (isset($context["U_MCP_FORUM"])) { $_U_MCP_FORUM_ = $context["U_MCP_FORUM"]; } else { $_U_MCP_FORUM_ = null; }
            if ($_U_MCP_FORUM_) {
                echo "&nbsp;|&nbsp;<a href=\"";
                if (isset($context["U_MCP_FORUM"])) { $_U_MCP_FORUM_ = $context["U_MCP_FORUM"]; } else { $_U_MCP_FORUM_ = null; }
                echo $_U_MCP_FORUM_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
                echo "</a>";
            }
            if (isset($context["U_MCP_TOPIC"])) { $_U_MCP_TOPIC_ = $context["U_MCP_TOPIC"]; } else { $_U_MCP_TOPIC_ = null; }
            if ($_U_MCP_TOPIC_) {
                echo "&nbsp;|&nbsp;<a href=\"";
                if (isset($context["U_MCP_TOPIC"])) { $_U_MCP_TOPIC_ = $context["U_MCP_TOPIC"]; } else { $_U_MCP_TOPIC_ = null; }
                echo $_U_MCP_TOPIC_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_TOPIC");
                echo "</a>";
            }
            if (isset($context["U_MCP_POST"])) { $_U_MCP_POST_ = $context["U_MCP_POST"]; } else { $_U_MCP_POST_ = null; }
            if ($_U_MCP_POST_) {
                echo "&nbsp;|&nbsp;<a href=\"";
                if (isset($context["U_MCP_POST"])) { $_U_MCP_POST_ = $context["U_MCP_POST"]; } else { $_U_MCP_POST_ = null; }
                echo $_U_MCP_POST_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATE_POST");
                echo "</a>";
            }
            echo "&nbsp;]
\t</p>
";
        }
        // line 10
        echo "
<div id=\"tabs\">
\t<ul>
\t\t";
        // line 13
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "l_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 14
            echo "\t\t<li class=\"tab";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            if ($this->getAttribute($_l_block1_, "S_SELECTED")) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            echo $this->getAttribute($_l_block1_, "U_TITLE");
            echo "\">";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            echo $this->getAttribute($_l_block1_, "L_TITLE");
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\">
\t\t<div id=\"navigation\" role=\"navigation\">
\t\t\t<ul>
\t\t\t";
        // line 27
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "l_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 28
            echo "\t\t\t";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            if ($this->getAttribute($_l_block1_, "S_SELECTED")) {
                // line 29
                echo "\t\t\t\t";
                if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_l_block1_, "l_block2"));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 30
                    echo "\t\t\t\t";
                    if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                    if ($this->getAttribute($_l_block2_, "S_SELECTED")) {
                        // line 31
                        echo "\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "U_TITLE");
                        echo "\"><span>";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "L_TITLE");
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        if ($this->getAttribute($_l_block2_, "ADD_ITEM")) {
                            echo " (";
                            if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                            echo $this->getAttribute($_l_block2_, "ADD_ITEM");
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t<li><a href=\"";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "U_TITLE");
                        echo "\"><span>";
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "L_TITLE");
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        if ($this->getAttribute($_l_block2_, "ADD_ITEM")) {
                            echo " (";
                            if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                            echo $this->getAttribute($_l_block2_, "ADD_ITEM");
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t";
            }
            // line 37
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div id=\"cp-main\" class=\"mcp-main panel-container\">
\t\t";
        // line 43
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        if ($_MESSAGE_) {
            // line 44
            echo "\t\t<div class=\"content\">
\t\t\t<h2 class=\"message-title\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 46
            if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
            echo $_MESSAGE_;
            echo "</p>
\t\t\t<p>";
            // line 47
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "return_links"));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                if (isset($context["return_links"])) { $_return_links_ = $context["return_links"]; } else { $_return_links_ = null; }
                echo $this->getAttribute($_return_links_, "MESSAGE_LINK");
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 47,  222 => 45,  219 => 44,  216 => 43,  209 => 38,  200 => 36,  194 => 35,  177 => 33,  160 => 31,  156 => 30,  150 => 29,  141 => 27,  128 => 16,  110 => 14,  105 => 13,  100 => 10,  45 => 7,  42 => 6,  39 => 5,  650 => 146,  641 => 142,  634 => 140,  630 => 139,  627 => 138,  622 => 136,  617 => 135,  613 => 134,  605 => 133,  597 => 132,  589 => 131,  579 => 130,  571 => 129,  563 => 128,  555 => 127,  547 => 126,  540 => 125,  536 => 124,  533 => 123,  530 => 122,  521 => 115,  515 => 113,  510 => 112,  498 => 111,  493 => 110,  488 => 109,  478 => 102,  473 => 101,  466 => 100,  458 => 99,  454 => 97,  448 => 94,  445 => 93,  441 => 91,  433 => 88,  429 => 86,  414 => 85,  411 => 84,  408 => 83,  395 => 81,  388 => 80,  373 => 75,  366 => 74,  362 => 72,  357 => 69,  351 => 68,  339 => 66,  333 => 64,  324 => 63,  320 => 62,  315 => 61,  311 => 59,  308 => 58,  299 => 56,  285 => 54,  278 => 53,  273 => 50,  261 => 49,  249 => 48,  237 => 47,  226 => 46,  217 => 45,  207 => 44,  203 => 37,  195 => 41,  183 => 40,  178 => 39,  164 => 38,  159 => 37,  151 => 35,  146 => 28,  139 => 31,  135 => 30,  131 => 29,  127 => 28,  117 => 25,  114 => 24,  109 => 21,  103 => 19,  98 => 18,  86 => 17,  81 => 16,  76 => 15,  65 => 8,  53 => 6,  50 => 5,  38 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
