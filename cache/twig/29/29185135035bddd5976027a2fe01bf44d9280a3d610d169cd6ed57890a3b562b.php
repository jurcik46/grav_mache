<?php

/* partials/form-messages.html.twig */
class __TwigTemplate_2b85130f5798ad34662b721799455ed76f1f7d769057e0e1e7f49f67c48d8d7e extends Twig_Template
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
        if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
            // line 2
            echo "    ";
            $context["status_mapping"] = array("success" => "green", "error" => "red", "warning" => "yellow");
            // line 3
            echo "    ";
            $context["message"] = ((($this->getAttribute(($context["form"] ?? null), "inline_errors", array()) && $this->getAttribute(($context["form"] ?? null), "messages", array()))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("FORM.VALIDATION_FAIL")) : ($this->getAttribute(($context["form"] ?? null), "message", array())));
            // line 4
            echo "    <div id=\"formMessage\" class=\"notices ";
            echo $this->getAttribute(($context["form"] ?? null), "status", array());
            echo " ";
            echo (($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", array()), array(), "array")) ? ($this->getAttribute(($context["status_mapping"] ?? null), $this->getAttribute(($context["form"] ?? null), "status", array()), array(), "array")) : ("green"));
            echo "\"><p>";
            echo ($context["message"] ?? null);
            echo "</p></div>
";
            // line 5
            $context["js"] = ('' === $tmp = "\$(document).ready(function() {
    \$('html, body').animate({
        scrollTop: \$('#formMessage').offset().top - 100
    }, 2000);
})
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => ($context["js"] ?? null), 1 => array("group" => "bottom")), "method");
        }
    }

    public function getTemplateName()
    {
        return "partials/form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  36 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.message %}
    {% set status_mapping = {'success':'green', 'error': 'red', 'warning': 'yellow'} %}
    {% set message = form.inline_errors and form.messages ? \"FORM.VALIDATION_FAIL\"|t : form.message %}
    <div id=\"formMessage\" class=\"notices {{ form.status }} {{ status_mapping[form.status] ?: 'green' }}\"><p>{{ message|raw }}</p></div>
{% set js %}
\$(document).ready(function() {
    \$('html, body').animate({
        scrollTop: \$('#formMessage').offset().top - 100
    }, 2000);
})
{% endset %}
{% do assets.addInlineJs(js, {'group': 'bottom'}) %}
{% endif %}
", "partials/form-messages.html.twig", "/var/www/public/mache/user/themes/mache/templates/partials/form-messages.html.twig");
    }
}
