<?php

/* modular/slider.html.twig */
class __TwigTemplate_5fd4984afa836874b70c6082311a71cd5c2dacb1dc15032be63bce2145c0599c extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slider", array())) {
            // line 2
            echo "<div class=\"testimonials\"";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_image", array())) {
                echo " style=\"background-image: url(";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_image", array()), array(), "array"), "cache", array()), "url", array(), "method");
                echo ")\"";
            }
            echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
                <ul class=\"bxslider\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slider", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 8
                echo "                    <li>
                        <img src=\"";
                // line 9
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "person_photo", array()), array(), "array"), "cache", array()), "url", array(), "method");
                echo "\">
                        <p>";
                // line 10
                echo $this->getAttribute($context["slide"], "person_name", array());
                echo "</p>
                        <p>";
                // line 11
                echo $this->getAttribute($context["slide"], "person_description", array());
                echo "</p>
                        <ul>
                            ";
                // line 13
                if ($this->getAttribute($context["slide"], "person_facebook", array())) {
                    // line 14
                    echo "                            <li>
                                <p>";
                    // line 15
                    echo $this->getAttribute($context["slide"], "person_facebook", array());
                    echo "</p>
                            </li>
                            ";
                }
                // line 18
                echo "                            ";
                if ($this->getAttribute($context["slide"], "person_youtube", array())) {
                    // line 19
                    echo "                                <li>
                                    <p>";
                    // line 20
                    echo $this->getAttribute($context["slide"], "person_youtube", array());
                    echo "</p>
                                </li>
                            ";
                }
                // line 23
                echo "                        </ul>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                </ul>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modular/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  77 => 23,  71 => 20,  68 => 19,  65 => 18,  59 => 15,  56 => 14,  54 => 13,  49 => 11,  45 => 10,  41 => 9,  38 => 8,  34 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.header.slider %}
<div class=\"testimonials\"{%if page.header.background_image %} style=\"background-image: url({{ page.media.images[page.header.background_image].cache.url() }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">
                <ul class=\"bxslider\">
                    {% for slide in page.header.slider %}
                    <li>
                        <img src=\"{{ page.media.images[slide.person_photo].cache.url() }}\">
                        <p>{{ slide.person_name }}</p>
                        <p>{{ slide.person_description }}</p>
                        <ul>
                            {%if slide.person_facebook %}
                            <li>
                                <p>{{ slide.person_facebook }}</p>
                            </li>
                            {% endif %}
                            {%if slide.person_youtube %}
                                <li>
                                    <p>{{ slide.person_youtube }}</p>
                                </li>
                            {% endif %}
                        </ul>
                    </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endif %}
", "modular/slider.html.twig", "/var/www/public/mache/user/themes/mache/templates/modular/slider.html.twig");
    }
}
