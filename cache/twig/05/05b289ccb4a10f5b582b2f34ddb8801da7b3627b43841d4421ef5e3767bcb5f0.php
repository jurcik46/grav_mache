<?php

/* modular/map.html.twig */
class __TwigTemplate_7c4bbf75d21264e95fd85cade0d72614e4af37ffc6b7eaf3c970795ef933f0b0 extends Twig_Template
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
        echo "<section class=\"map\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">

            <div class=\"col-sm-4\">
                <div class=\"row\">

                    <div class=\"col-md-12 col-sm-6\">
                        <div class=\"widget\">
                            <h3 class=\"widget-title\">";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "name", array());
        echo "</h3>
                            <div class=\"widget-content\">
                                <p>
                                    ";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "address", array());
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-6\">
                        <div class=\"widget\">
                            <h3 class=\"widget-title\">";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "contact_titile", array());
        echo "</h3>
                            <div class=\"widget-content\"><p>
                                    E-mail:     <a href=\"mailto:";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "contact_email", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "contact_email", array());
        echo "</a>
                                    <br>
                                    Telefon:    ";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "contact_phone", array());
        echo "
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8 col-12 mb-5\">
               <div class=\"map-container \">
                    <div id=\"googleMaps\"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<script>
    function initMap() {
        var myLatLng = {lat: ";
        // line 42
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "latitude", array()), 0);
        echo ", lng: ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "longitude", array()), 0);
        echo "};

        var map = new google.maps.Map(document.getElementById('googleMaps'), {
            zoom: ";
        // line 45
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "zoom", array()), 10);
        echo ",
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            ";
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "marker_icon", array())) {
            // line 53
            echo "            icon: '";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "marker_icon", array()), array(), "array"), "cache", array()), "url", array());
            echo "'
            ";
        }
        // line 55
        echo "        });
    }
</script>
<script src=\"http://maps.google.com/maps/api/js?key=";
        // line 58
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "google_maps_api_key", array());
        echo "&callback=initMap\"></script>
";
    }

    public function getTemplateName()
    {
        return "modular/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 58,  105 => 55,  99 => 53,  97 => 52,  87 => 45,  79 => 42,  58 => 24,  51 => 22,  46 => 20,  37 => 14,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"map\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.5s\">

            <div class=\"col-sm-4\">
                <div class=\"row\">

                    <div class=\"col-md-12 col-sm-6\">
                        <div class=\"widget\">
                            <h3 class=\"widget-title\">{{ page.header.name }}</h3>
                            <div class=\"widget-content\">
                                <p>
                                    {{ page.header.address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-6\">
                        <div class=\"widget\">
                            <h3 class=\"widget-title\">{{ page.header.contact_titile }}</h3>
                            <div class=\"widget-content\"><p>
                                    E-mail:     <a href=\"mailto:{{ page.header.contact_email }}\">{{ page.header.contact_email }}</a>
                                    <br>
                                    Telefon:    {{ page.header.contact_phone }}
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8 col-12 mb-5\">
               <div class=\"map-container \">
                    <div id=\"googleMaps\"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<script>
    function initMap() {
        var myLatLng = {lat: {{ page.header.latitude|defined(0) }}, lng: {{ page.header.longitude|defined(0) }}};

        var map = new google.maps.Map(document.getElementById('googleMaps'), {
            zoom: {{ page.header.zoom|defined(10) }},
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            {% if page.header.marker_icon %}
            icon: '{{ page.media.images[page.header.marker_icon].cache.url }}'
            {% endif %}
        });
    }
</script>
<script src=\"http://maps.google.com/maps/api/js?key={{ page.header.google_maps_api_key }}&callback=initMap\"></script>
", "modular/map.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/map.html.twig");
    }
}
