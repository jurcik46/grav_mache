<?php

/* modular/prices.html.twig */
class __TwigTemplate_60c09449d4949cf785282e1f10d94dcb040a7fb2c25ff617af825065187af86c extends Twig_Template
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
        echo "<div class=\"price\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.4s\">
                <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-black\"><strong>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</strong></h2>
                <span class=\"line\"></span>
                <div class=\"top\">";
        // line 7
        echo ($context["content"] ?? null);
        echo "</div>
            </div>
        </div>

        ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "prices", array())) {
            // line 12
            echo "        <div class=\"row\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "prices", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 14
                echo "            <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"slideInLeft\" data-os-animation-delay=\"0.5s\">
                <div class=\"price-container\">
                    <div class=\"black\">
                        <h2><span>";
                // line 17
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "currency", array());
                echo "</span>";
                echo $this->getAttribute($context["price"], "amount", array());
                echo "</h2>
                        <p>";
                // line 18
                echo $this->getAttribute($context["price"], "interval", array());
                echo "</p>
                    </div>
                    <h4>";
                // line 20
                echo $this->getAttribute($context["price"], "title", array());
                echo "</h4>
                    ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["price"], "features", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 22
                    echo "                    <p>";
                    echo $this->getAttribute($context["feature"], "title", array());
                    echo "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                    <a href=\"";
                echo $this->getAttribute($context["price"], "buy_button_url", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buy_button_label", array());
                echo "</a>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
        ";
        }
        // line 30
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/prices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  92 => 28,  79 => 24,  70 => 22,  66 => 21,  62 => 20,  57 => 18,  51 => 17,  46 => 14,  42 => 13,  39 => 12,  37 => 11,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"price\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"zoomIn\" data-os-animation-delay=\"0.4s\">
                <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-black\"><strong>{{ page.header.title }}</strong></h2>
                <span class=\"line\"></span>
                <div class=\"top\">{{ content }}</div>
            </div>
        </div>

        {% if page.header.prices %}
        <div class=\"row\">
            {% for price in page.header.prices %}
            <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"slideInLeft\" data-os-animation-delay=\"0.5s\">
                <div class=\"price-container\">
                    <div class=\"black\">
                        <h2><span>{{ page.header.currency }}</span>{{ price.amount }}</h2>
                        <p>{{ price.interval }}</p>
                    </div>
                    <h4>{{ price.title }}</h4>
                    {% for feature in price.features %}
                    <p>{{ feature.title }}</p>
                    {% endfor %}
                    <a href=\"{{ price.buy_button_url }}\">{{ page.header.buy_button_label }}</a>
                </div>
            </div>
            {% endfor %}
        </div>
        {% endif %}
    </div>
</div>
", "modular/prices.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/prices.html.twig");
    }
}
