<?php

/* mcp_logs.html */
class __TwigTemplate_8771da4bbffa1f8ec802eb6e7592463f extends Twig_Template
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
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 5
        if (isset($context["U_POST_ACTION"])) { $_U_POST_ACTION_ = $context["U_POST_ACTION"]; } else { $_U_POST_ACTION_ = null; }
        echo $_U_POST_ACTION_;
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar top\">
\t\t";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <input type=\"search\" class=\"inputbox autowidth\" name=\"keywords\" value=\"";
        if (isset($context["S_KEYWORDS"])) { $_S_KEYWORDS_ = $context["S_KEYWORDS"]; } else { $_S_KEYWORDS_ = null; }
        echo $_S_KEYWORDS_;
        echo "\" />&nbsp;<input type=\"submit\" class=\"button2\" name=\"filter\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" />
\t\t<div class=\"pagination\">
\t\t\t";
        // line 13
        if (isset($context["TOTAL"])) { $_TOTAL_ = $context["TOTAL"]; } else { $_TOTAL_ = null; }
        echo $_TOTAL_;
        echo "
\t\t\t";
        // line 14
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
            echo " 
\t\t\t\t";
            // line 15
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
            // line 16
            echo "\t\t\t";
        } else {
            echo " 
\t\t\t\t &bull; ";
            // line 17
            if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
            echo $_PAGE_NUMBER_;
            echo "
\t\t\t";
        }
        // line 19
        echo "\t\t</div>
\t</div>

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th class=\"name\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "</th>
\t\t<th class=\"center\">";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("IP");
        echo "</th>
\t\t<th class=\"center\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("TIME");
        echo "</th>
\t\t<th class=\"name\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("ACTION");
        echo "</th>
\t\t";
        // line 29
        if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
        if ($_S_CLEAR_ALLOWED_) {
            echo "<th>";
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>";
        }
        // line 30
        echo "\t</tr>
\t</thead>
\t\t<tbody>
\t";
        // line 33
        if (isset($context["S_LOGS"])) { $_S_LOGS_ = $context["S_LOGS"]; } else { $_S_LOGS_ = null; }
        if ($_S_LOGS_) {
            // line 34
            echo "\t\t";
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "log"));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 35
                echo "\t\t";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (($this->getAttribute($_log_, "S_ROW_COUNT") % 2 == 0)) {
                    echo "<tr class=\"bg1\">";
                } else {
                    echo "<tr class=\"bg2\">";
                }
                // line 36
                echo "\t\t\t<td>";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "USERNAME");
                echo "</td>
\t\t\t<td class=\"center\">";
                // line 37
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "IP");
                echo "</td>
\t\t\t<td class=\"center\">";
                // line 38
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "DATE");
                echo "</td>
\t\t\t<td>";
                // line 39
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "ACTION");
                echo "<br />
\t\t\t";
                // line 40
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "DATA");
                echo "
\t\t</td>
\t\t\t";
                // line 42
                if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
                if ($_S_CLEAR_ALLOWED_) {
                    echo "<td style=\"width: 5%\" align=\"center\"><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "ID");
                    echo "\" /></td>";
                }
                // line 43
                echo "\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t";
        } else {
            // line 46
            echo "\t\t<tr>
\t\t\t<td class=\"bg1\" colspan=\"";
            // line 47
            if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
            if ($_S_CLEAR_ALLOWED_) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\" align=\"center\"><span class=\"gen\">";
            echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
            echo "</span></td>
\t\t</tr>
\t";
        }
        // line 50
        echo "\t</tbody>
\t</table>

\t";
        // line 53
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "log"))) {
            // line 54
            echo "\t\t<fieldset class=\"display-options\">
\t\t\t<label>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
            echo $_S_SELECT_SORT_DAYS_;
            echo "</label>
\t\t\t<label>";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
            echo $_S_SELECT_SORT_KEY_;
            echo "</label>
\t\t\t<label>";
            // line 57
            if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
            echo $_S_SELECT_SORT_DIR_;
            echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t</fieldset>

\t\t<hr />

\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 65
            if (isset($context["TOTAL"])) { $_TOTAL_ = $context["TOTAL"]; } else { $_TOTAL_ = null; }
            echo $_TOTAL_;
            echo "
\t\t\t\t";
            // line 66
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                echo " 
\t\t\t\t\t";
                // line 67
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
                // line 68
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 69
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 71
            echo "\t\t\t</div>
\t\t</div>

\t\t";
            // line 74
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t</div>
\t</div>

\t\t";
            // line 78
            if (isset($context["S_CLEAR_ALLOWED"])) { $_S_CLEAR_ALLOWED_ = $context["S_CLEAR_ALLOWED"]; } else { $_S_CLEAR_ALLOWED_ = null; }
            if ($_S_CLEAR_ALLOWED_) {
                // line 79
                echo "\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                // line 80
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL");
                echo "\" />
\t\t\t\t&nbsp;<input class=\"button1\" type=\"submit\" value=\"";
                // line 81
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" name=\"action[del_marked]\" />

\t\t\t\t<div><a href=\"#\" onclick=\"marklist('mcp', 'mark', true); return false;\">";
                // line 83
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'mark', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t\t</fieldset>
\t\t";
            }
            // line 86
            echo "\t";
        } else {
            // line 87
            echo "\t\t\t";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 91
        echo "</form>

<br />

";
        // line 95
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
        return "mcp_logs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 95,  329 => 91,  320 => 87,  317 => 86,  309 => 83,  304 => 81,  300 => 80,  297 => 79,  294 => 78,  286 => 74,  281 => 71,  275 => 69,  270 => 68,  258 => 67,  253 => 66,  248 => 65,  238 => 58,  233 => 57,  226 => 56,  218 => 55,  215 => 54,  212 => 53,  207 => 50,  194 => 47,  191 => 46,  188 => 45,  181 => 43,  173 => 42,  167 => 40,  162 => 39,  157 => 38,  152 => 37,  146 => 36,  138 => 35,  132 => 34,  129 => 33,  124 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  93 => 19,  87 => 17,  82 => 16,  70 => 15,  65 => 14,  60 => 13,  49 => 11,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
