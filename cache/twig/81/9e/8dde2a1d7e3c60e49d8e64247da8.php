<?php

/* profilefields/string.html */
class __TwigTemplate_819e8dde2a1d7e3c60e49d8e64247da8 extends Twig_Template
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
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "string"));
        foreach ($context['_seq'] as $context["_key"] => $context["string"]) {
            // line 2
            echo "<input type=\"text\" class=\"inputbox autowidth\" name=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_IDENT");
            echo "\" id=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_IDENT");
            echo "\" size=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_LENGTH");
            echo "\" maxlength=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_MAXLEN");
            echo "\" value=\"";
            if (isset($context["string"])) { $_string_ = $context["string"]; } else { $_string_ = null; }
            echo $this->getAttribute($_string_, "FIELD_VALUE");
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['string'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/string.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
