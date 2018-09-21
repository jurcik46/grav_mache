<?php

/* modular/sponsors.html.twig */
class __TwigTemplate_61324b0de488f88071a28d5c6021557da5d6c3068a82fd9db02baec167a9b72d extends Twig_Template
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
        echo "<section class=\"sponsors\">
<div class=\"container\">
";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sponsors", array())) {
            // line 4
            echo "
                 <section class=\"customer-logos slider\">
                     <h2>Sponsors</h2>
                     <span class=\"line\"></span>
                    <div class=\"sponsors imgs\"> ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sponsors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
                // line 9
                echo "                                <a href=\"";
                if ($this->getAttribute($context["sponsor"], "link", array())) {
                    echo " ";
                    echo $this->getAttribute($context["sponsor"], "link", array());
                    echo "
                                        ";
                }
                // line 10
                echo "\">
                                    <img src=\"";
                // line 11
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["sponsor"], "icon", array()), array(), "array"), "cache", array()), "url", array(), "method");
                echo "\">
                                </a>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </div>
                 </section>

";
        }
        // line 19
        echo "</div>
</section>
";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "        ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "        ";
        // line 33
        echo "    ";
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "modular/sponsors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  86 => 33,  84 => 32,  82 => 31,  80 => 30,  78 => 29,  76 => 28,  74 => 27,  72 => 26,  70 => 25,  68 => 24,  66 => 23,  62 => 19,  56 => 15,  46 => 11,  43 => 10,  35 => 9,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"sponsors\">
<div class=\"container\">
{% if page.header.sponsors %}

                 <section class=\"customer-logos slider\">
                     <h2>Sponsors</h2>
                     <span class=\"line\"></span>
                    <div class=\"sponsors imgs\"> {% for sponsor in page.header.sponsors %}
                                <a href=\"{% if sponsor.link %} {{ sponsor.link }}
                                        {% endif %}\">
                                    <img src=\"{{page.media.images[sponsor.icon].cache.url()}}\">
                                </a>

                    {% endfor %}
                    </div>
                 </section>

{% endif %}
</div>
</section>
{#<section class=\"sponsors\">#}
{#<div class=\"container\">#}
    {#<h2>Our  Partners</h2>#}
    {#<section class=\"sponsors-logos slider\">#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg\"></div>#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg\"></div>#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg\"></div>#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg\"></div>#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg\"></div>#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg\"></div>#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg\"></div>#}
        {#<div class=\"slide\"><img src=\"https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg\"></div>#}
    {#</section>#}
{#</div>#}
{#</section>#}


", "modular/sponsors.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/sponsors.html.twig");
    }
}
