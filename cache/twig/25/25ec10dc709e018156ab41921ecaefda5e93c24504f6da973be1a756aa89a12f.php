<?php

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_da452bdda12dd88f0472fc43bbb414d521bf203738b3d454af039554d1408e42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        var captchaOnloadCallback = function captchaOnloadCallback() {
            grecaptcha.render('g-recaptcha', {
                'sitekey': \"";
        // line 7
        echo (($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", array())) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", array())) : ((($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", array())) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "recaptcha", array()), "site_key", array())))));
        echo "\",
                'callback': captchaValidatedCallback,
                'expired-callback': captchaExpiredCallback
            });
        };

        var captchaValidatedCallback = function captchaValidatedCallback() {

        };

        var captchaExpiredCallback = function captchaExpiredCallback() {
            grecaptcha.reset();
        };

        \$('form').submit(function(event) {
            if (\$(this).has(\"#g-recaptcha-response\").length && \$(\"#g-recaptcha-response\").val() === '') {
                event.preventDefault();
                alert(\"";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "translate", array(0 => "PLUGIN_FORM.ERROR_VALIDATING_CAPTCHA"), "method");
        echo "\");
            }
        });
    ";
        $context["inlinejs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => ($context["inlinejs"] ?? null), 1 => array("group" => "bottom")), "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => ("https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=" . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "language", array())), 1 => array("loading" => "async defer", "group" => "bottom")), "method");
        // line 30
        echo "    <div class=\"g-recaptcha\" id=\"g-recaptcha\"></div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 30,  68 => 29,  65 => 28,  58 => 24,  38 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block input %}
    {% set inlinejs %}
        var captchaOnloadCallback = function captchaOnloadCallback() {
            grecaptcha.render('g-recaptcha', {
                'sitekey': \"{{field.recaptcha_site_key ?: field.recaptcha_site_key ?: config.plugins.form.recaptcha.site_key }}\",
                'callback': captchaValidatedCallback,
                'expired-callback': captchaExpiredCallback
            });
        };

        var captchaValidatedCallback = function captchaValidatedCallback() {

        };

        var captchaExpiredCallback = function captchaExpiredCallback() {
            grecaptcha.reset();
        };

        \$('form').submit(function(event) {
            if (\$(this).has(\"#g-recaptcha-response\").length && \$(\"#g-recaptcha-response\").val() === '') {
                event.preventDefault();
                alert(\"{{grav.language.translate('PLUGIN_FORM.ERROR_VALIDATING_CAPTCHA')}}\");
            }
        });
    {% endset %}
    {% do assets.addInlineJs(inlinejs, {'group':'bottom'}) %}
    {% do assets.addJs(\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback&render=explicit&hl=\" ~  grav.language.language, {'loading': 'async defer', 'group':'bottom'}) %}
    <div class=\"g-recaptcha\" id=\"g-recaptcha\"></div>
{% endblock %}
", "forms/fields/captcha/captcha.html.twig", "/var/www/public/mache/user/themes/mache/templates/forms/fields/captcha/captcha.html.twig");
    }
}
