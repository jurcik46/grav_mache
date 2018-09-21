<?php

/* partials/base.html.twig */
class __TwigTemplate_a02ca6aab85aa73a26f865fed907b871fdc49a0678f1d69067926e2c34a5e4a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 3
        $context["favicon"] = "";
        // line 4
        $context["logo"] = "";
        // line 5
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", array())) > 0)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "favicon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                $context["favicon"] = $this->getAttribute($context["item"], "name", array());
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "logo", array())) > 0)) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "logo", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "        ";
                $context["logo"] = $this->getAttribute($context["item"], "name", array());
                // line 13
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 16
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 20
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
        ";
        // line 21
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "        <meta name=\"viewport\" content=\"width=device-width initial-scale=1.0\">

        ";
        // line 24
        if (($context["favicon"] ?? null)) {
            // line 25
            echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . ($context["favicon"] ?? null)));
            echo "\" />
        ";
        }
        // line 27
        echo "
        <link rel=\"canonical\" href=\"";
        // line 28
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>



    </head>

    <body>
        <div class=\"se-pre-con\">
            <div class=\"box loading\"></div>
        </div>

        <header>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"logo\">
                            ";
        // line 66
        if (($context["logo"] ?? null)) {
            // line 67
            echo "                            <a href=\"";
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\"><img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . ($context["logo"] ?? null)));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array()), "html");
            echo "\"/></a>
                            ";
        }
        // line 69
        echo "                        </div>

                        <nav class=\"nav-collapse\">
                            ";
        // line 72
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "                        </nav>
                    </div>
                </div>
            </div>
        </header>

        ";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        ";
        // line 87
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["theme_config"] ?? null), "left_footer", array()));
        echo "
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        <div class=\"rightside\">";
        // line 90
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["theme_config"] ?? null), "right_footer", array()));
        echo "</div>
                    </div>
                </div>
            </div>
        </footer>

        ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
        ";
        // line 104
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
    </body>
</html>
";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 31
        echo "            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link href='https://fonts.googleapis.com/css?family=Lato:100,400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\">
            <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,latin-ext\">

            ";
        // line 36
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/grid.css"), "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 38
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/menu.css"), "method");
        // line 39
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/jquery.bxslider.css"), "method");
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/responsive.css"), "method");
        // line 41
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 42
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 43
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.bxslider.js"), "method");
        // line 44
        echo "
        ";
    }

    // line 79
    public function block_content($context, array $blocks = array())
    {
        // line 80
        echo "            ";
        echo ($context["content"] ?? null);
        echo "
        ";
    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        // line 97
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 98
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.bxslider.js"), "method");
        // line 99
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/script.js"), "method");
        // line 100
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/fixed-responsive-nav.js"), "method");
        // line 101
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 102
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 102,  256 => 101,  253 => 100,  250 => 99,  247 => 98,  244 => 97,  241 => 96,  234 => 80,  231 => 79,  226 => 44,  223 => 43,  220 => 42,  217 => 41,  214 => 40,  211 => 39,  208 => 38,  205 => 37,  203 => 36,  196 => 31,  193 => 30,  185 => 104,  180 => 103,  178 => 96,  169 => 90,  163 => 87,  156 => 82,  154 => 79,  146 => 73,  144 => 72,  139 => 69,  129 => 67,  127 => 66,  103 => 46,  101 => 30,  96 => 28,  93 => 27,  87 => 25,  85 => 24,  81 => 22,  79 => 21,  71 => 20,  65 => 16,  57 => 13,  54 => 12,  49 => 11,  47 => 10,  40 => 8,  37 => 7,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set favicon = '' %}
{% set logo = '' %}
{% if theme_config.favicon|length > 0 %}
    {% for item in theme_config.favicon %}
        {% set favicon = item.name %}
    {% endfor %}
{% endif %}
{% if theme_config.logo|length > 0 %}
    {% for item in theme_config.logo %}
        {% set logo = item.name %}
    {% endfor %}
{% endif %}
{% endspaceless %}
<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width initial-scale=1.0\">

        {% if favicon %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/' ~ favicon) }}\" />
        {% endif %}

        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link href='https://fonts.googleapis.com/css?family=Lato:100,400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
            <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\">
            <link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,latin-ext\">

            {% do assets.addCss('theme://css/grid.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/menu.css') %}
            {% do assets.addCss('theme://css/jquery.bxslider.css') %}
            {% do assets.addCss('theme://css/responsive.css') %}
            {% do assets.addCss('theme://css/animate.css') %}
\t\t\t{% do assets.addCss('theme://css/custom.css') %}
\t\t\t{% do assets.addJs('theme://js/jquery.bxslider.js') %}

        {% endblock %}
        {{ assets.css() }}

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>



    </head>

    <body>
        <div class=\"se-pre-con\">
            <div class=\"box loading\"></div>
        </div>

        <header>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"logo\">
                            {% if logo %}
                            <a href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ url('theme://images/' ~ logo) }}\" alt=\"{{ config.site.title|e('html') }}\"/></a>
                            {% endif %}
                        </div>

                        <nav class=\"nav-collapse\">
                            {% include 'partials/navigation.html.twig' %}
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        {% block content %}
            {{ content}}
        {% endblock %}

        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        {{ theme_config.left_footer|markdown }}
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-md-6\">
                        <div class=\"rightside\">{{ theme_config.right_footer|markdown }}</div>
                    </div>
                </div>
            </div>
        </footer>

        {% block javascripts %}
            {% do assets.addJs('jquery', 101) %}
            {% do assets.addJs('theme://js/jquery.bxslider.js') %}
            {% do assets.addJs('theme://js/script.js') %}
            {% do assets.addJs('theme://js/fixed-responsive-nav.js') %}
            {% do assets.addJs('theme://js/waypoints.min.js') %}
        {% endblock %}
        {{ assets.js() }}
        {{ assets.js('bottom') }}
    </body>
</html>
", "partials/base.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/partials/base.html.twig");
    }
}
