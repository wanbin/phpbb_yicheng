<?php

/* ucp_footer.html */
class __TwigTemplate_a6999e12f3a60fc40fe58ada3fa071f3 extends Twig_Template
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
\t\t</div>

\t</div>
\t</div>
</div>
";
        // line 7
        if (isset($context["S_COMPOSE_PM"])) { $_S_COMPOSE_PM_ = $context["S_COMPOSE_PM"]; } else { $_S_COMPOSE_PM_ = null; }
        if ($_S_COMPOSE_PM_) {
            // line 8
            echo "<div>";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "</div>
</form>
";
        }
        // line 11
        echo "
";
        // line 12
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 13
        echo "
";
        // line 14
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
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  38 => 11,  30 => 8,  27 => 7,  245 => 61,  231 => 56,  215 => 54,  212 => 53,  206 => 52,  195 => 51,  179 => 48,  172 => 46,  169 => 45,  163 => 41,  151 => 40,  141 => 35,  130 => 31,  124 => 28,  116 => 27,  111 => 26,  105 => 23,  97 => 22,  87 => 18,  79 => 17,  73 => 14,  65 => 13,  61 => 12,  58 => 11,  53 => 13,  49 => 8,  40 => 7,  32 => 3,  406 => 98,  399 => 93,  371 => 90,  367 => 89,  361 => 85,  358 => 84,  326 => 76,  321 => 75,  318 => 74,  291 => 72,  286 => 71,  281 => 69,  275 => 65,  272 => 64,  267 => 61,  258 => 59,  248 => 57,  238 => 58,  234 => 54,  229 => 53,  224 => 52,  220 => 50,  216 => 48,  210 => 47,  204 => 46,  183 => 49,  162 => 42,  158 => 41,  152 => 40,  143 => 37,  137 => 34,  133 => 34,  123 => 32,  113 => 30,  110 => 29,  107 => 28,  102 => 27,  96 => 26,  93 => 21,  82 => 16,  72 => 14,  64 => 10,  46 => 8,  41 => 12,  516 => 134,  503 => 132,  500 => 131,  493 => 128,  489 => 127,  484 => 126,  477 => 125,  469 => 124,  466 => 123,  463 => 122,  457 => 118,  452 => 115,  446 => 113,  441 => 112,  429 => 111,  424 => 110,  419 => 109,  407 => 102,  398 => 101,  385 => 100,  382 => 99,  379 => 98,  376 => 91,  372 => 95,  366 => 93,  363 => 92,  355 => 83,  351 => 90,  348 => 78,  343 => 86,  331 => 82,  312 => 81,  301 => 80,  296 => 77,  280 => 76,  264 => 75,  261 => 60,  255 => 72,  251 => 71,  241 => 59,  236 => 67,  228 => 55,  225 => 65,  221 => 63,  213 => 62,  202 => 61,  197 => 60,  181 => 59,  176 => 47,  166 => 56,  159 => 52,  155 => 51,  150 => 48,  147 => 39,  144 => 36,  134 => 33,  131 => 42,  128 => 41,  125 => 40,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  100 => 29,  95 => 27,  83 => 19,  75 => 15,  69 => 13,  62 => 9,  57 => 8,  54 => 7,  51 => 6,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
