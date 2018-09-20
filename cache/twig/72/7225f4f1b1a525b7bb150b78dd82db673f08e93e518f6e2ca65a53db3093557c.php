<?php

/* modular/banner.html.twig */
class __TwigTemplate_a66c0c38a2f11ad054c9226918efa937379bb51b1314c5ec6a1db4237b51e8f1 extends Twig_Template
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
        echo "<div class=\"banner\" ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_color", array())) {
            echo " style=\"background-color: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_color", array());
            echo "\"";
        }
        echo " ";
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_color", array())) {
            echo " style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_image", array()), array(), "array"), "cache", array()), "url", array());
            echo ")\"";
        }
        echo " >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "heading", array());
        echo "</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
                <div class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.4s\">";
        // line 7
        echo ($context["content"] ?? null);
        echo "</div>
                ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_url", array())) {
            // line 9
            echo "                <div class=\"button-container\">
                    <a href=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_url", array());
            echo "\" class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.5s\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "button_label", array());
            echo "</a>
                </div>
                ";
        }
        // line 13
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  51 => 10,  48 => 9,  46 => 8,  42 => 7,  37 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"banner\" {% if page.header.header_color %} style=\"background-color: {{ page.header.header_color }}\"{% endif %} {% if not page.header.header_color %} style=\"background-image: url({{ page.media.images[page.header.background_image].cache.url }})\"{% endif %} >
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.2s\">{{ page.header.heading }}</h1>
                <span class=\"line os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.3s\"></span>
                <div class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.4s\">{{ content }}</div>
                {% if page.header.button_url %}
                <div class=\"button-container\">
                    <a href=\"{{ page.header.button_url }}\" class=\"os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.5s\">{{ page.header.button_label }}</a>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "modular/banner.html.twig", "/var/www/public/mache/user/themes/mache/templates/modular/banner.html.twig");
    }
}
