<?php

/* acp_words.html */
class __TwigTemplate_d877a8bcbb63160e15f44b842e1b1617 extends Twig_Template
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
        if (isset($context["S_EDIT_WORD"])) { $_S_EDIT_WORD_ = $context["S_EDIT_WORD"]; } else { $_S_EDIT_WORD_ = null; }
        if ($_S_EDIT_WORD_) {
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
            echo $this->env->getExtension('phpbb')->lang("ACP_WORDS");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("ACP_WORDS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_words\" method=\"post\" action=\"";
            // line 13
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("EDIT_WORD");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"word\">";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("WORD");
            echo "</label></dt>
\t\t\t<dd><input id=\"word\" type=\"text\" name=\"word\" value=\"";
            // line 19
            if (isset($context["WORD"])) { $_WORD_ = $context["WORD"]; } else { $_WORD_ = null; }
            echo $_WORD_;
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"replacement\">";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("REPLACEMENT");
            echo "</label></dt>
\t\t\t<dd><input id=\"replacement\" type=\"text\" name=\"replacement\" value=\"";
            // line 23
            if (isset($context["REPLACEMENT"])) { $_REPLACEMENT_ = $context["REPLACEMENT"]; } else { $_REPLACEMENT_ = null; }
            echo $_REPLACEMENT_;
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t";
            // line 25
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"save\" value=\"";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 30
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 36
            echo "
\t<h1>";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("ACP_WORDS");
            echo "</h1>

\t<p>";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("ACP_WORDS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_words\" method=\"post\" action=\"";
            // line 41
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("ACP_WORDS");
            echo "</legend>
\t<p class=\"quick\">
\t\t";
            // line 46
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("ADD_WORD");
            echo "\" />
\t</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 53
            echo $this->env->getExtension('phpbb')->lang("WORD");
            echo "</th>
\t\t<th>";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("REPLACEMENT");
            echo "</th>
\t\t<th>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 59
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "words"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["words"]) {
                // line 60
                echo "\t<tr>
\t\t<td style=\"text-align: center;\">";
                // line 61
                if (isset($context["words"])) { $_words_ = $context["words"]; } else { $_words_ = null; }
                echo $this->getAttribute($_words_, "WORD");
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 62
                if (isset($context["words"])) { $_words_ = $context["words"]; } else { $_words_ = null; }
                echo $this->getAttribute($_words_, "REPLACEMENT");
                echo "</td>
\t\t<td>&nbsp;<a href=\"";
                // line 63
                if (isset($context["words"])) { $_words_ = $context["words"]; } else { $_words_ = null; }
                echo $this->getAttribute($_words_, "U_EDIT");
                echo "\">";
                if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                echo $_ICON_EDIT_;
                echo "</a>&nbsp;&nbsp;<a href=\"";
                if (isset($context["words"])) { $_words_ = $context["words"]; } else { $_words_ = null; }
                echo $this->getAttribute($_words_, "U_DELETE");
                echo "\" data-ajax=\"row_delete\">";
                if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                echo $_ICON_DELETE_;
                echo "</a>&nbsp;</td>
\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 66
                echo "\t<tr class=\"row3\">
\t\t<td colspan=\"3\">";
                // line 67
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['words'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t</tbody>
\t</table>
\t";
            // line 72
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>
";
        }
        // line 76
        echo "
";
        // line 77
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
        return "acp_words.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 77,  236 => 76,  228 => 72,  224 => 70,  215 => 67,  212 => 66,  194 => 63,  189 => 62,  184 => 61,  181 => 60,  175 => 59,  168 => 55,  164 => 54,  160 => 53,  151 => 47,  146 => 46,  141 => 44,  134 => 41,  129 => 39,  124 => 37,  121 => 36,  111 => 30,  107 => 29,  103 => 28,  96 => 25,  90 => 23,  86 => 22,  79 => 19,  75 => 18,  70 => 16,  63 => 13,  58 => 11,  53 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
