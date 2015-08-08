<?php

/* ucp_prefs_post.html */
class __TwigTemplate_5c2772b4c848caf100f439adf98f5cf0 extends Twig_Template
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
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t";
        // line 10
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 11
        echo "\t";
        if (isset($context["ucp_prefs_post_prepend"])) { $_ucp_prefs_post_prepend_ = $context["ucp_prefs_post_prepend"]; } else { $_ucp_prefs_post_prepend_ = null; }
        // line 12
        echo "\t<dl>
\t\t<dt><label for=\"bbcode1\">";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_BBCODE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"bbcode1\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode1\" value=\"1\"";
        // line 15
        if (isset($context["S_BBCODE"])) { $_S_BBCODE_ = $context["S_BBCODE"]; } else { $_S_BBCODE_ = null; }
        if ($_S_BBCODE_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"bbcode0\"><input type=\"radio\" name=\"bbcode\" id=\"bbcode0\" value=\"0\"";
        // line 16
        if (isset($context["S_BBCODE"])) { $_S_BBCODE_ = $context["S_BBCODE"]; } else { $_S_BBCODE_ = null; }
        if ((!$_S_BBCODE_)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"smilies1\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_SMILIES");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"smilies1\"><input type=\"radio\" name=\"smilies\" id=\"smilies1\" value=\"1\"";
        // line 22
        if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
        if ($_S_SMILIES_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"smilies0\"><input type=\"radio\" name=\"smilies\" id=\"smilies0\" value=\"0\"";
        // line 23
        if (isset($context["S_SMILIES"])) { $_S_SMILIES_ = $context["S_SMILIES"]; } else { $_S_SMILIES_ = null; }
        if ((!$_S_SMILIES_)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sig1\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_ADD_SIG");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"sig1\"><input type=\"radio\" name=\"sig\" id=\"sig1\" value=\"1\"";
        // line 29
        if (isset($context["S_SIG"])) { $_S_SIG_ = $context["S_SIG"]; } else { $_S_SIG_ = null; }
        if ($_S_SIG_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"sig0\"><input type=\"radio\" name=\"sig\" id=\"sig0\" value=\"0\"";
        // line 30
        if (isset($context["S_SIG"])) { $_S_SIG_ = $context["S_SIG"]; } else { $_S_SIG_ = null; }
        if ((!$_S_SIG_)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"notify1\">";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("DEFAULT_NOTIFY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"notify1\"><input type=\"radio\" name=\"notify\" id=\"notify1\" value=\"1\"";
        // line 36
        if (isset($context["S_NOTIFY"])) { $_S_NOTIFY_ = $context["S_NOTIFY"]; } else { $_S_NOTIFY_ = null; }
        if ($_S_NOTIFY_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label> 
\t\t\t<label for=\"notify0\"><input type=\"radio\" name=\"notify\" id=\"notify0\" value=\"0\"";
        // line 37
        if (isset($context["S_NOTIFY"])) { $_S_NOTIFY_ = $context["S_NOTIFY"]; } else { $_S_NOTIFY_ = null; }
        if ((!$_S_NOTIFY_)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t";
        // line 40
        if (isset($context["ucp_prefs_post_append"])) { $_ucp_prefs_post_append_ = $context["ucp_prefs_post_append"]; } else { $_ucp_prefs_post_append_ = null; }
        // line 41
        echo "\t</fieldset>
\t
\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 47
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 49
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 53
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
        return "ucp_prefs_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 53,  193 => 49,  189 => 48,  182 => 47,  174 => 41,  172 => 40,  161 => 37,  152 => 36,  146 => 34,  134 => 30,  125 => 29,  119 => 27,  107 => 23,  98 => 22,  92 => 20,  80 => 16,  71 => 15,  65 => 13,  62 => 12,  59 => 11,  51 => 10,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
