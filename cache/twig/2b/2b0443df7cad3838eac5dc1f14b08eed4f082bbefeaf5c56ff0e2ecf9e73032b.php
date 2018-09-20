<?php

/* error.html.twig */
class __TwigTemplate_c90d52753830913fb98b06dd84d8438353d165d96a3767c58721f9cab6a24399 extends Twig_Template
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
        $this->loadTemplate("error.html.twig", "error.html.twig", 1, "1264261887")->display($context);
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% block content %}
{% set image = '' %}
{% if theme_config.default_background_image|length > 0 %}
    {% for item in theme_config.default_background_image %}
        {% set image = item.name %}
    {% endfor %}
{% endif %}

<div class=\"banner\"{% if image %} style=\"background-image: url({{ url('theme://images/' ~ image) }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>
                <span class=\"line\"></span>
                <p class=\"top\">{{ page.content }}</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% endembed %}
", "error.html.twig", "/var/www/public/mache/user/themes/mache/templates/error.html.twig");
    }
}


/* error.html.twig */
class __TwigTemplate_c90d52753830913fb98b06dd84d8438353d165d96a3767c58721f9cab6a24399_1264261887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["image"] = "";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "default_background_image", array())) > 0)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "default_background_image", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                $context["image"] = $this->getAttribute($context["item"], "name", array());
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        echo "
<div class=\"banner\"";
        // line 11
        if (($context["image"] ?? null)) {
            echo " style=\"background-image: url(";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . ($context["image"] ?? null)));
            echo ")\"";
        }
        echo ">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("ERROR");
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "http_response_code", array());
        echo "</h1>
                <span class=\"line\"></span>
                <p class=\"top\">";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 17,  131 => 15,  120 => 11,  117 => 10,  110 => 8,  107 => 7,  102 => 6,  100 => 5,  98 => 4,  95 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% block content %}
{% set image = '' %}
{% if theme_config.default_background_image|length > 0 %}
    {% for item in theme_config.default_background_image %}
        {% set image = item.name %}
    {% endfor %}
{% endif %}

<div class=\"banner\"{% if image %} style=\"background-image: url({{ url('theme://images/' ~ image) }})\"{% endif %}>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>
                <span class=\"line\"></span>
                <p class=\"top\">{{ page.content }}</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% endembed %}
", "error.html.twig", "/var/www/public/mache/user/themes/mache/templates/error.html.twig");
    }
}
