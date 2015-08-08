<?php

/* report_body.html */
class __TwigTemplate_9614e75959b4fede6aba9363f96e32fc extends Twig_Template
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
<h2 class=\"titlespace\">";
        // line 3
        if (isset($context["S_REPORT_POST"])) { $_S_REPORT_POST_ = $context["S_REPORT_POST"]; } else { $_S_REPORT_POST_ = null; }
        if ($_S_REPORT_POST_) {
            echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
        } else {
            echo $this->env->getExtension('phpbb')->lang("REPORT_MESSAGE");
        }
        echo "</h2>

<form method=\"post\" action=\"";
        // line 5
        if (isset($context["S_REPORT_ACTION"])) { $_S_REPORT_ACTION_ = $context["S_REPORT_ACTION"]; } else { $_S_REPORT_ACTION_ = null; }
        echo $_S_REPORT_ACTION_;
        echo "\" id=\"report\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<p>";
        // line 10
        if (isset($context["S_REPORT_POST"])) { $_S_REPORT_POST_ = $context["S_REPORT_POST"]; } else { $_S_REPORT_POST_ = null; }
        if ($_S_REPORT_POST_) {
            echo $this->env->getExtension('phpbb')->lang("REPORT_POST_EXPLAIN");
        } else {
            echo $this->env->getExtension('phpbb')->lang("REPORT_MESSAGE_EXPLAIN");
        }
        echo "</p>
\t\t
\t\t<fieldset>
\t\t";
        // line 13
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<dl><dd class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</dd></dl>";
        }
        // line 14
        echo "\t\t<dl class=\"fields2\">
\t\t\t<dt><label for=\"reason_id\">";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("REASON");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><select name=\"reason_id\" id=\"reason_id\" class=\"full\">";
        // line 16
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "reason"));
        foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
            echo "<option value=\"";
            if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
            echo $this->getAttribute($_reason_, "ID");
            echo "\"";
            if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
            if ($this->getAttribute($_reason_, "S_SELECTED")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            if (isset($context["reason"])) { $_reason_ = $context["reason"]; } else { $_reason_ = null; }
            echo $this->getAttribute($_reason_, "DESCRIPTION");
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></dd>
\t\t</dl>
\t\t";
        // line 18
        if (isset($context["S_CAN_NOTIFY"])) { $_S_CAN_NOTIFY_ = $context["S_CAN_NOTIFY"]; } else { $_S_CAN_NOTIFY_ = null; }
        if ($_S_CAN_NOTIFY_) {
            // line 19
            echo "\t\t\t<dl class=\"fields2\">
\t\t\t\t<dt><label for=\"notify1\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("REPORT_NOTIFY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("REPORT_NOTIFY_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<label for=\"notify1\"><input type=\"radio\" name=\"notify\" id=\"notify1\" value=\"1\" ";
            // line 22
            if (isset($context["S_NOTIFY"])) { $_S_NOTIFY_ = $context["S_NOTIFY"]; } else { $_S_NOTIFY_ = null; }
            if ((!$_S_NOTIFY_)) {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t\t\t<label for=\"notify0\"><input type=\"radio\" name=\"notify\" id=\"notify0\" value=\"0\" ";
            // line 23
            if (isset($context["S_NOTIFY"])) { $_S_NOTIFY_ = $context["S_NOTIFY"]; } else { $_S_NOTIFY_ = null; }
            if ($_S_NOTIFY_) {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
        }
        // line 27
        echo "\t\t<dl class=\"fields2\">
\t\t\t<dt><label for=\"report_text\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("MORE_INFO");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CAN_LEAVE_BLANK");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"report_text\" id=\"report_text\" rows=\"10\" cols=\"76\" class=\"inputbox\">";
        // line 29
        if (isset($context["REPORT_TEXT"])) { $_REPORT_TEXT_ = $context["REPORT_TEXT"]; } else { $_REPORT_TEXT_ = null; }
        echo $_REPORT_TEXT_;
        echo "</textarea></dd>
\t\t</dl>
\t\t";
        // line 31
        if (isset($context["CAPTCHA_TEMPLATE"])) { $_CAPTCHA_TEMPLATE_ = $context["CAPTCHA_TEMPLATE"]; } else { $_CAPTCHA_TEMPLATE_ = null; }
        if ($_CAPTCHA_TEMPLATE_) {
            // line 32
            echo "\t\t\t";
            if (isset($context["CAPTCHA_TEMPLATE"])) { $_CAPTCHA_TEMPLATE_ = $context["CAPTCHA_TEMPLATE"]; } else { $_CAPTCHA_TEMPLATE_ = null; }
            $location = (("" . $_CAPTCHA_TEMPLATE_) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $template = $this->env->resolveTemplate((("" . $_CAPTCHA_TEMPLATE_) . ""));
            $template->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 33
            echo "\t\t";
        }
        // line 34
        echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" name=\"submit\" class=\"button1\" value=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"cancel\" class=\"button2\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("CANCEL");
        echo "\" />
\t\t\t";
        // line 47
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t\t</fieldset>
\t</div>

\t</div>
</div>
</form>

";
        // line 55
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
        return "report_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 55,  197 => 47,  193 => 46,  189 => 45,  176 => 34,  173 => 33,  158 => 32,  155 => 31,  149 => 29,  142 => 28,  139 => 27,  127 => 23,  118 => 22,  110 => 20,  107 => 19,  104 => 18,  80 => 16,  75 => 15,  72 => 14,  64 => 13,  53 => 10,  44 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
