<?php

/* ucp_profile_profile_info.html */
class __TwigTemplate_c8058ef4c1c5e641ddc80c35b2bf4f0a extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo " <span class=\"small\">[ <a href=\"";
        if (isset($context["U_USER_PROFILE"])) { $_U_USER_PROFILE_ = $context["U_USER_PROFILE"]; } else { $_U_USER_PROFILE_ = null; }
        echo $_U_USER_PROFILE_;
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("VIEW_PROFILE");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("VIEW_PROFILE");
        echo "</a> ]</span></h2>

<div class=\"panel\">
\t<div class=\"inner\">
\t<p>";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("PROFILE_INFO_NOTICE");
        echo "</p>

\t<fieldset>
\t";
        // line 12
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 13
        echo "\t";
        if (isset($context["ucp_profile_profile_info_before"])) { $_ucp_profile_profile_info_before_ = $context["ucp_profile_profile_info_before"]; } else { $_ucp_profile_profile_info_before_ = null; }
        // line 14
        echo "\t";
        if (isset($context["S_BIRTHDAYS_ENABLED"])) { $_S_BIRTHDAYS_ENABLED_ = $context["S_BIRTHDAYS_ENABLED"]; } else { $_S_BIRTHDAYS_ENABLED_ = null; }
        if ($_S_BIRTHDAYS_ENABLED_) {
            // line 15
            echo "\t\t<dl>
\t\t\t<dt><label for=\"bday_day\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"bday_day\">";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_day\" id=\"bday_day\">";
            if (isset($context["S_BIRTHDAY_DAY_OPTIONS"])) { $_S_BIRTHDAY_DAY_OPTIONS_ = $context["S_BIRTHDAY_DAY_OPTIONS"]; } else { $_S_BIRTHDAY_DAY_OPTIONS_ = null; }
            echo $_S_BIRTHDAY_DAY_OPTIONS_;
            echo "</select></label>
\t\t\t\t<label for=\"bday_month\">";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("MONTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_month\" id=\"bday_month\">";
            if (isset($context["S_BIRTHDAY_MONTH_OPTIONS"])) { $_S_BIRTHDAY_MONTH_OPTIONS_ = $context["S_BIRTHDAY_MONTH_OPTIONS"]; } else { $_S_BIRTHDAY_MONTH_OPTIONS_ = null; }
            echo $_S_BIRTHDAY_MONTH_OPTIONS_;
            echo "</select></label>
\t\t\t\t<label for=\"bday_year\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("YEAR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_year\" id=\"bday_year\">";
            if (isset($context["S_BIRTHDAY_YEAR_OPTIONS"])) { $_S_BIRTHDAY_YEAR_OPTIONS_ = $context["S_BIRTHDAY_YEAR_OPTIONS"]; } else { $_S_BIRTHDAY_YEAR_OPTIONS_ = null; }
            echo $_S_BIRTHDAY_YEAR_OPTIONS_;
            echo "</select></label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 24
        echo "\t";
        if (isset($context["S_JABBER_ENABLED"])) { $_S_JABBER_ENABLED_ = $context["S_JABBER_ENABLED"]; } else { $_S_JABBER_ENABLED_ = null; }
        if ($_S_JABBER_ENABLED_) {
            // line 25
            echo "\t\t<dl>
\t\t\t<dt><label for=\"jabber\">";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("UCP_JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"email\" name=\"jabber\" id=\"jabber\" maxlength=\"255\" value=\"";
            // line 27
            if (isset($context["JABBER"])) { $_JABBER_ = $context["JABBER"]; } else { $_JABBER_ = null; }
            echo $_JABBER_;
            echo "\" class=\"inputbox\" /></dd>
\t\t</dl>
\t";
        }
        // line 30
        echo "\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "profile_fields"));
        foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
            // line 31
            echo "\t\t<dl>
\t\t\t<dt><label";
            // line 32
            if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
            if ($this->getAttribute($_profile_fields_, "FIELD_ID")) {
                echo " for=\"";
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                echo $this->getAttribute($_profile_fields_, "FIELD_ID");
                echo "\"";
            }
            echo ">";
            if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
            echo $this->getAttribute($_profile_fields_, "LANG_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
            if ($this->getAttribute($_profile_fields_, "S_REQUIRED")) {
                echo " *";
            }
            echo "</label>
\t\t\t";
            // line 33
            if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
            if ($this->getAttribute($_profile_fields_, "LANG_EXPLAIN")) {
                echo "<br /><span>";
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                echo $this->getAttribute($_profile_fields_, "LANG_EXPLAIN");
                echo "</span>";
            }
            echo "</dt>
\t\t\t";
            // line 34
            if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
            if ($this->getAttribute($_profile_fields_, "ERROR")) {
                echo "<dd class=\"error\">";
                if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
                echo $this->getAttribute($_profile_fields_, "ERROR");
                echo "</dd>";
            }
            // line 35
            echo "\t\t\t<dd>";
            if (isset($context["profile_fields"])) { $_profile_fields_ = $context["profile_fields"]; } else { $_profile_fields_ = null; }
            echo $this->getAttribute($_profile_fields_, "FIELD");
            echo "</dd>
\t\t</dl>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t";
        if (isset($context["ucp_profile_profile_info_after"])) { $_ucp_profile_profile_info_after_ = $context["ucp_profile_profile_info_after"]; } else { $_ucp_profile_profile_info_after_ = null; }
        // line 39
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 45
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 47
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 51
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_profile_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 51,  213 => 47,  209 => 46,  202 => 45,  194 => 39,  191 => 38,  180 => 35,  172 => 34,  162 => 33,  144 => 32,  141 => 31,  135 => 30,  128 => 27,  123 => 26,  120 => 25,  116 => 24,  105 => 20,  97 => 19,  89 => 18,  81 => 16,  78 => 15,  74 => 14,  71 => 13,  63 => 12,  57 => 9,  43 => 5,  34 => 3,  31 => 2,  24 => 2,  19 => 1,);
    }
}
