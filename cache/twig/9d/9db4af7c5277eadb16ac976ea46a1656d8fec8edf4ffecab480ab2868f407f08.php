<?php

/* modular/cta1.html.twig */
class __TwigTemplate_4222c6c4d659e006037344d619c729782018e4933ecb4be0bf511ab5f41a3535 extends Twig_Template
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
        echo "<div class=\"joinnow\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">
                <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "heading", array());
        echo "</h2> <a href=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_label", array());
        echo "</a>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/cta1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"joinnow\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">
                <h2>{{ page.header.heading }}</h2> <a href=\"{{ page.header.button_url}}\">{{ page.header.button_label}}</a>
            </div>
        </div>
    </div>
</div>
", "modular/cta1.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/cta1.html.twig");
    }
}
