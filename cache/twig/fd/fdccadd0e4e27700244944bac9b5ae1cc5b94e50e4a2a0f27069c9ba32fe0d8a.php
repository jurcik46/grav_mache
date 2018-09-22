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
                     <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-dark\"><strong>";
            // line 6
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "</strong></h2>
                     <span class=\"line\"></span>
                    <div class=\"sponsors imgs\"> ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sponsors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
                // line 9
                echo "                        <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">

                        <a href=\"";
                // line 11
                if ($this->getAttribute($context["sponsor"], "link", array())) {
                    echo " ";
                    echo $this->getAttribute($context["sponsor"], "link", array());
                    echo "
                                        ";
                }
                // line 12
                echo "\">
                                    <img src=\"";
                // line 13
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["sponsor"], "icon", array()), array(), "array"), "cache", array()), "url", array(), "method");
                echo "\">
                                </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                    </div>
                 </section>

";
        }
        // line 21
        echo "</div>
</section>



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
        return array (  68 => 21,  62 => 17,  52 => 13,  49 => 12,  42 => 11,  38 => 9,  34 => 8,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
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
                     <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-dark\"><strong>{{ page.header.title }}</strong></h2>
                     <span class=\"line\"></span>
                    <div class=\"sponsors imgs\"> {% for sponsor in page.header.sponsors %}
                        <div class=\"col-lg-3 col-sm-6 col-md-3 os-animation\" data-os-animation=\"fadeInLeft\" data-os-animation-delay=\"0.4s\">

                        <a href=\"{% if sponsor.link %} {{ sponsor.link }}
                                        {% endif %}\">
                                    <img src=\"{{page.media.images[sponsor.icon].cache.url()}}\">
                                </a>
                        </div>
                    {% endfor %}
                    </div>
                 </section>

{% endif %}
</div>
</section>



", "modular/sponsors.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/sponsors.html.twig");
    }
}
