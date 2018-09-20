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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sponsors", array())) {
            // line 2
            echo "
                        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sponsors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
                // line 4
                echo "                            <p> ";
                echo $this->getAttribute($context["sponsor"], "name", array());
                echo " </p>
                            <img src=\"";
                // line 5
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["sponsor"], "icon", array()), array(), "array"), "cache", array()), "url", array(), "method");
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sponsor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "
";
        }
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
        return array (  41 => 7,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.sponsors %}

                        {% for sponsor in page.header.sponsors %}
                            <p> {{sponsor.name}} </p>
                            <img src=\"{{page.media.images[sponsor.icon].cache.url()}}\">
                        {% endfor %}

{% endif %}", "modular/sponsors.html.twig", "/var/www/public/mache/user/themes/mache/templates/modular/sponsors.html.twig");
    }
}
