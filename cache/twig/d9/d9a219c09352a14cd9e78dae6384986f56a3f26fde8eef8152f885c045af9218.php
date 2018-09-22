<?php

/* modular/features.html.twig */
class __TwigTemplate_8f2d0b4f1cd9d2b8b1f344c2cc80356a1c50d5c8c70a2abaf4bb3381ff134c2a extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array())) {
            // line 2
            echo "<section class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 6
                echo "            <div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"bounceIn\" data-os-animation-delay=\"0.3s\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-4 col-md-4\">
                        ";
                // line 9
                if ($this->getAttribute($context["feature"], "icon", array())) {
                    // line 10
                    echo "                        ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["feature"], "icon", array()), array(), "array"), "cache", array()), "html", array());
                    echo "
                        ";
                }
                // line 12
                echo "                    </div>
                    <div class=\"col-lg-9 col-sm-8 col-md-8\">
                        <h3>";
                // line 14
                echo $this->getAttribute($context["feature"], "title", array());
                echo "</h3>
                        <p>";
                // line 15
                echo $this->getAttribute($context["feature"], "description", array());
                echo "</p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  51 => 15,  47 => 14,  43 => 12,  37 => 10,  35 => 9,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.features %}
<section class=\"features\">
    <div class=\"container\">
        <div class=\"row\">
            {% for feature in page.header.features %}
            <div class=\"col-lg-4 col-sm-4 col-md-4 os-animation\" data-os-animation=\"bounceIn\" data-os-animation-delay=\"0.3s\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-4 col-md-4\">
                        {% if feature.icon %}
                        {{ page.media.images[feature.icon].cache.html }}
                        {% endif %}
                    </div>
                    <div class=\"col-lg-9 col-sm-8 col-md-8\">
                        <h3>{{ feature.title }}</h3>
                        <p>{{ feature.description }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>
{% endif %}
", "modular/features.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/features.html.twig");
    }
}
