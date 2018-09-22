<?php

/* modular/services.html.twig */
class __TwigTemplate_4560a4f8429a6f15230ce9f918b07c3ec0f3dc05eb46ea8d7275c0c327bddda0 extends Twig_Template
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
        echo "<div class=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.3s\">
                <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-black\"><strong>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</strong></h2>
                <span class=\"line\"></span>
            ";
        // line 7
        echo ($context["content"] ?? null);
        echo "
        </div>
        </div>
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "services", array())) {
            // line 11
            echo "        <div class=\"row\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "services", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 13
                echo "            <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
                ";
                // line 14
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["service"], "icon", array()), array(), "array"), "cache", array()), "html", array(), "method");
                echo "
                <h3>";
                // line 15
                echo $this->getAttribute($context["service"], "title", array());
                echo "</h3>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
        ";
        }
        // line 20
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  61 => 18,  52 => 15,  48 => 14,  45 => 13,  41 => 12,  38 => 11,  36 => 10,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.3s\">
                <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-black\"><strong>{{ page.header.title }}</strong></h2>
                <span class=\"line\"></span>
            {{ content }}
        </div>
        </div>
        {% if page.header.services %}
        <div class=\"row\">
            {% for service in page.header.services %}
            <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">
                {{ page.media.images[service.icon].cache.html() }}
                <h3>{{ service.title }}</h3>
            </div>
            {% endfor %}
        </div>
        {% endif %}
    </div>
</div>
", "modular/services.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/services.html.twig");
    }
}
