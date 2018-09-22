<?php

/* partials/navigation.html.twig */
class __TwigTemplate_ddb37871a7abbe88ef625e918b9c01bb51ff151338ccf53840aa86a0d75ef22b extends Twig_Template
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
        echo "<ul>
";
        // line 2
        if (($this->getAttribute(($context["page"] ?? null), "template", array()) == "modular")) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "menu", array())) {
                    // line 4
                    echo "    <li class=\"menu-item";
                    if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                        echo " active";
                    }
                    echo "\">
        <a href=\"#";
                    // line 5
                    echo twig_trim_filter($this->getAttribute($context["module"], "folder", array()), "_");
                    echo "\" data-scroll>";
                    echo $this->getAttribute($this->getAttribute($context["module"], "header", array()), "menu", array());
                    echo "</a>
    </li>

    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 11
                echo "        <li class=\"menu-item";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 12
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "    <li class=\"menu-item\">
        <a href=\"/grav_mache\">Home</a>
    </li>
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 20
                echo "    ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? (" active") : (""));
                // line 21
                echo "    <li class=\"menu-item";
                echo ($context["current_page"] ?? null);
                echo "\">
        <a href=\"";
                // line 22
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  100 => 22,  95 => 21,  92 => 20,  88 => 19,  83 => 16,  71 => 12,  66 => 11,  62 => 10,  59 => 9,  43 => 5,  36 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
{% if page.template == 'modular' %}
    {% for module in page.collection() if module.header.menu %}
    <li class=\"menu-item{% if loop.index == 1 %} active{% endif %}\">
        <a href=\"#{{ module.folder|trim('_') }}\" data-scroll>{{ module.header.menu }}</a>
    </li>

    {% endfor %}

    {% for p in pages.children.visible %}
        <li class=\"menu-item{{ current_page }}\">
            <a href=\"{{ p.url }}\">{{ p.menu }}</a>
        </li>
    {% endfor %}
{% else %}
    <li class=\"menu-item\">
        <a href=\"/grav_mache\">Home</a>
    </li>
    {% for p in pages.children.visible %}
    {% set current_page = (p.active or p.activeChild) ? ' active' : '' %}
    <li class=\"menu-item{{ current_page }}\">
        <a href=\"{{ p.url }}\">{{ p.menu }}</a>
    </li>
    {% endfor %}
{% endif %}
</ul>
", "partials/navigation.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/partials/navigation.html.twig");
    }
}
