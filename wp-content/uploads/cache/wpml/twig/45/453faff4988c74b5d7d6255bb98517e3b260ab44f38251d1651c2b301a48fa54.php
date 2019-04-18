<?php

/* pointer-ui.twig */
class __TwigTemplate_0cd17f8cd5ee35739980d97fdb474957da34c1b3610e225de31053bfa8c14e04 extends Twig_Template
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
        echo "<div class=\"wcml-pointer-block\" data-selector=\"";
        echo twig_escape_filter($this->env, ($context["selector"] ?? null), "html", null, true);
        echo "\" data-insert-method=\"";
        echo twig_escape_filter($this->env, ($context["insert_method"] ?? null), "html", null, true);
        echo "\" style=\"display:none;\">
    <a id=\"wcml-pointer-target-";
        // line 2
        echo twig_escape_filter($this->env, ($context["pointer"] ?? null), "html", null, true);
        echo "\" href=\"javascript:void(0)\" class=\"otgs-ico-wpml wcml-pointer-link\"
        data-wcml-open-pointer=\"wcml-pointer-";
        // line 3
        echo twig_escape_filter($this->env, ($context["pointer"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["description"] ?? null), "trnsl_title", array()));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["description"] ?? null), "trnsl_title", array()));
        echo "</a>

    <div id=\"wcml-pointer-";
        // line 5
        echo twig_escape_filter($this->env, ($context["pointer"] ?? null), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"wcml-pointer-inner\">
            <div class=\"wcml-message-content wcml-table-cell\">
                <p class=\"wcml-information-paragraph\">
                    ";
        // line 9
        echo $this->getAttribute(($context["description"] ?? null), "content", array());
        echo "
                </p>
                <p class=\"wcml-information-link\">
                    <a class=\"wcml-external-link\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["description"] ?? null), "doc_link", array()), "html", null, true);
        echo "\" target=\"_blank\">
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["description"] ?? null), "doc_link_text", array()), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "pointer-ui.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  52 => 12,  46 => 9,  39 => 5,  30 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pointer-ui.twig", "/Users/emil/projects/layv/wp-content/plugins/woocommerce-multilingual/templates/pointer-ui.twig");
    }
}
