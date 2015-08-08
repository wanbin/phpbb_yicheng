<?php

/* mcp_warn_front.html */
class __TwigTemplate_decf1e3a9f0a7bc1256c2a0442ff13c0 extends Twig_Template
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
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        if (isset($context["U_POST_ACTION"])) { $_U_POST_ACTION_ = $context["U_POST_ACTION"]; } else { $_U_POST_ACTION_ = null; }
        echo $_U_POST_ACTION_;
        echo "\">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("SELECT_USER");
        echo "</h3>

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"username\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("SELECT_USER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><input name=\"username\" id=\"username\" type=\"text\" class=\"inputbox\" /></dd>
\t\t<dd><strong><a href=\"";
        // line 16
        if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
        echo $_U_FIND_USERNAME_;
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a></strong></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t<input type=\"reset\" value=\"";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"submituser\" value=\"";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 26
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("MOST_WARNINGS");
        echo "</h3>

\t";
        // line 35
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "highest"))) {
            // line 36
            echo "\t\t<table class=\"table1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
            // line 39
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("LATEST_WARNING_TIME");
            echo "</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t";
            // line 47
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "highest"));
            foreach ($context['_seq'] as $context["_key"] => $context["highest"]) {
                // line 48
                echo "\t\t\t<tr class=\"";
                if (isset($context["highest"])) { $_highest_ = $context["highest"]; } else { $_highest_ = null; }
                if (($this->getAttribute($_highest_, "S_ROW_COUNT") % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t\t<td>";
                // line 49
                if (isset($context["highest"])) { $_highest_ = $context["highest"]; } else { $_highest_ = null; }
                echo $this->getAttribute($_highest_, "USERNAME_FULL");
                echo "</td>
\t\t\t\t<td>";
                // line 50
                if (isset($context["highest"])) { $_highest_ = $context["highest"]; } else { $_highest_ = null; }
                echo $this->getAttribute($_highest_, "WARNINGS");
                echo "</td>
\t\t\t\t<td>";
                // line 51
                if (isset($context["highest"])) { $_highest_ = $context["highest"]; } else { $_highest_ = null; }
                echo $this->getAttribute($_highest_, "WARNING_TIME");
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 52
                if (isset($context["highest"])) { $_highest_ = $context["highest"]; } else { $_highest_ = null; }
                echo $this->getAttribute($_highest_, "U_NOTES");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                echo "</a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['highest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 58
            echo "\t\t<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_WARNINGS");
            echo "</strong></p>
\t";
        }
        // line 60
        echo "
\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("LATEST_WARNINGS");
        echo "</h3>

\t";
        // line 69
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "latest"))) {
            // line 70
            echo "\t\t<table class=\"table1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("TOTAL_WARNINGS");
            echo "</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 80
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "latest"));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                // line 81
                echo "\t\t\t<tr class=\"";
                if (isset($context["latest"])) { $_latest_ = $context["latest"]; } else { $_latest_ = null; }
                if (($this->getAttribute($_latest_, "S_ROW_COUNT") % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t\t<td>";
                // line 82
                if (isset($context["latest"])) { $_latest_ = $context["latest"]; } else { $_latest_ = null; }
                echo $this->getAttribute($_latest_, "USERNAME_FULL");
                echo "</td>
\t\t\t\t<td>";
                // line 83
                if (isset($context["latest"])) { $_latest_ = $context["latest"]; } else { $_latest_ = null; }
                echo $this->getAttribute($_latest_, "WARNING_TIME");
                echo "</td>
\t\t\t\t<td>";
                // line 84
                if (isset($context["latest"])) { $_latest_ = $context["latest"]; } else { $_latest_ = null; }
                echo $this->getAttribute($_latest_, "WARNINGS");
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 85
                if (isset($context["latest"])) { $_latest_ = $context["latest"]; } else { $_latest_ = null; }
                echo $this->getAttribute($_latest_, "U_NOTES");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                echo "</a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 91
            echo "\t\t<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_WARNINGS");
            echo "</strong></p>
\t";
        }
        // line 93
        echo "
\t</div>
</div>

";
        // line 97
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
        return "mcp_warn_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 97,  268 => 93,  262 => 91,  257 => 88,  245 => 85,  240 => 84,  235 => 83,  230 => 82,  220 => 81,  215 => 80,  207 => 75,  203 => 74,  199 => 73,  194 => 70,  191 => 69,  186 => 67,  177 => 60,  171 => 58,  166 => 55,  154 => 52,  149 => 51,  144 => 50,  139 => 49,  129 => 48,  124 => 47,  115 => 41,  111 => 40,  107 => 39,  102 => 36,  99 => 35,  94 => 33,  83 => 26,  79 => 25,  75 => 24,  61 => 16,  55 => 14,  48 => 10,  40 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
