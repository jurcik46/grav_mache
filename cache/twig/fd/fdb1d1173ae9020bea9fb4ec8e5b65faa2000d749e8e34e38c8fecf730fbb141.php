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
        echo "<section class=\"team\" ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_image", array())) {
            // line 2
            echo "                        style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_image", array()), array(), "array"), "cache", array()), "url", array(), "method");
            echo ")\"
                      ";
        }
        // line 3
        echo ">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slider", array())) {
            // line 5
            echo "    <div class=\"container\">
        <div class=\"row\">
      <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">     <div class=\"col-md-8 offset-md-2 col-10 offset-1 mt-5\">
               <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-white\"><strong>";
            // line 8
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "</strong></h2>
               <span class=\"line\"></span>
               <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                   <ol class=\"carousel-indicators\">

                   ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slider", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 14
                echo "                       <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
                echo $this->getAttribute($context["loop"], "index0", array());
                echo "\"

                           ";
                // line 16
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo " class=\"active\"
                            ";
                }
                // line 18
                echo "                       ></li>

                   ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                   </ol>
                   <div class=\"carousel-inner mt-4\">

                   ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slider", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 25
                echo "
                            <div class=\"carousel-item text-center
                                ";
                // line 27
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    // line 28
                    echo "                                         active
                                ";
                }
                // line 29
                echo "  \">
                                <div class=\"img-box p-1 border rounded-circle m-auto\">
                                    <img class=\"d-block w-100 rounded-circle\" src=\"";
                // line 31
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "person_photo", array()), array(), "array"), "cache", array()), "url", array(), "method");
                echo "\" alt=\"Photo\">
                                </div>
                                <h5 class=\"mt-4 mb-0\"><strong class=\"text-danger text-uppercase\">";
                // line 33
                echo $this->getAttribute($context["slide"], "person_name", array());
                echo "</strong></h5>
                                ";
                // line 35
                echo "                                <p class=\"m-0 pt-3 text-white\">";
                echo $this->getAttribute($context["slide"], "person_description", array());
                echo "</p>
                                <div class=\"social\">
                                ";
                // line 37
                if ($this->getAttribute($context["slide"], "person_facebook", array())) {
                    // line 38
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_facebook", array());
                    echo "\">
                                <i class=\"fa fa-facebook fa-lg fa-fw\">  </i>
                                </a>
                                ";
                }
                // line 42
                echo "                                ";
                if ($this->getAttribute($context["slide"], "person_youtube", array())) {
                    // line 43
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_youtube", array());
                    echo "\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                ";
                }
                // line 47
                echo "                                ";
                if ($this->getAttribute($context["slide"], "person_youtube", array())) {
                    // line 48
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_youtube", array());
                    echo "\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                ";
                }
                // line 52
                echo "                                ";
                if ($this->getAttribute($context["slide"], "person_youtube", array())) {
                    // line 53
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_youtube", array());
                    echo "\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                ";
                }
                // line 57
                echo "                                ";
                if ($this->getAttribute($context["slide"], "person_youtube", array())) {
                    // line 58
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_youtube", array());
                    echo "\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                ";
                }
                // line 62
                echo "                                </div>
                            </div>



                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                   </div>


                   <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                       <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                       <span class=\"sr-only\">Previous</span>
                   </a>
                   <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                       <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                       <span class=\"sr-only\">Next</span>
                   </a>
            </div>
           </div></div>
        </div>
    </div>
    ";
        }
        // line 84
        echo "</section>

";
        // line 87
        echo "    ";
        // line 88
        echo "        ";
        // line 89
        echo "            ";
        // line 90
        echo "            ";
        // line 91
        echo "            ";
        // line 92
        echo "                ";
        // line 93
        echo "                    ";
        // line 94
        echo "                    ";
        // line 95
        echo "                    ";
        // line 96
        echo "                ";
        // line 97
        echo "                ";
        // line 98
        echo "                    ";
        // line 99
        echo "                        ";
        // line 100
        echo "                            ";
        // line 101
        echo "                        ";
        // line 102
        echo "                        ";
        // line 103
        echo "                        ";
        // line 104
        echo "                        ";
        // line 105
        echo "                    ";
        // line 106
        echo "                    ";
        // line 107
        echo "                        ";
        // line 108
        echo "                            ";
        // line 109
        echo "                        ";
        // line 110
        echo "                        ";
        // line 111
        echo "                        ";
        // line 112
        echo "                        ";
        // line 113
        echo "                    ";
        // line 114
        echo "                    ";
        // line 115
        echo "                        ";
        // line 116
        echo "                            ";
        // line 117
        echo "                        ";
        // line 118
        echo "                        ";
        // line 119
        echo "                        ";
        // line 120
        echo "                        ";
        // line 121
        echo "                    ";
        // line 122
        echo "                ";
        // line 123
        echo "


                ";
        // line 127
        echo "                    ";
        // line 128
        echo "                    ";
        // line 129
        echo "                ";
        // line 130
        echo "                ";
        // line 131
        echo "                    ";
        // line 132
        echo "                    ";
        // line 133
        echo "                ";
        // line 134
        echo "            ";
        // line 135
        echo "        ";
        // line 136
        echo "    ";
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
        return array (  331 => 136,  329 => 135,  327 => 134,  325 => 133,  323 => 132,  321 => 131,  319 => 130,  317 => 129,  315 => 128,  313 => 127,  308 => 123,  306 => 122,  304 => 121,  302 => 120,  300 => 119,  298 => 118,  296 => 117,  294 => 116,  292 => 115,  290 => 114,  288 => 113,  286 => 112,  284 => 111,  282 => 110,  280 => 109,  278 => 108,  276 => 107,  274 => 106,  272 => 105,  270 => 104,  268 => 103,  266 => 102,  264 => 101,  262 => 100,  260 => 99,  258 => 98,  256 => 97,  254 => 96,  252 => 95,  250 => 94,  248 => 93,  246 => 92,  244 => 91,  242 => 90,  240 => 89,  238 => 88,  236 => 87,  232 => 84,  214 => 68,  195 => 62,  187 => 58,  184 => 57,  176 => 53,  173 => 52,  165 => 48,  162 => 47,  154 => 43,  151 => 42,  143 => 38,  141 => 37,  135 => 35,  131 => 33,  126 => 31,  122 => 29,  118 => 28,  116 => 27,  112 => 25,  95 => 24,  90 => 21,  74 => 18,  69 => 16,  63 => 14,  46 => 13,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"team\" {%if page.header.background_image %}
                        style=\"background-image: url({{ page.media.images[page.header.background_image].cache.url() }})\"
                      {% endif %}>
    {% if page.header.slider %}
    <div class=\"container\">
        <div class=\"row\">
      <div class=\"col-lg-12 os-animation\" data-os-animation=\"fadeIn\" data-os-animation-delay=\"0.4s\">     <div class=\"col-md-8 offset-md-2 col-10 offset-1 mt-5\">
               <h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-white\"><strong>{{ page.header.title }}</strong></h2>
               <span class=\"line\"></span>
               <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                   <ol class=\"carousel-indicators\">

                   {% for slide in page.header.slider %}
                       <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\"

                           {% if loop.index0 == 0 %} class=\"active\"
                            {% endif %}
                       ></li>

                   {% endfor %}
                   </ol>
                   <div class=\"carousel-inner mt-4\">

                   {% for slide in page.header.slider %}

                            <div class=\"carousel-item text-center
                                {% if loop.index0 == 0 %}
                                         active
                                {% endif %}  \">
                                <div class=\"img-box p-1 border rounded-circle m-auto\">
                                    <img class=\"d-block w-100 rounded-circle\" src=\"{{ page.media.images[slide.person_photo].cache.url() }}\" alt=\"Photo\">
                                </div>
                                <h5 class=\"mt-4 mb-0\"><strong class=\"text-danger text-uppercase\">{{ slide.person_name }}</strong></h5>
                                {#<h6 class=\"text-dark m-0\">Web Developer</h6>#}
                                <p class=\"m-0 pt-3 text-white\">{{ slide.person_description }}</p>
                                <div class=\"social\">
                                {%if slide.person_facebook %}
                                <a href=\"{{ slide.person_facebook }}\">
                                <i class=\"fa fa-facebook fa-lg fa-fw\">  </i>
                                </a>
                                {% endif %}
                                {%if slide.person_youtube %}
                                <a href=\"{{ slide.person_youtube }}\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                {% endif %}
                                {%if slide.person_youtube %}
                                <a href=\"{{ slide.person_youtube }}\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                {% endif %}
                                {%if slide.person_youtube %}
                                <a href=\"{{ slide.person_youtube }}\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                {% endif %}
                                {%if slide.person_youtube %}
                                <a href=\"{{ slide.person_youtube }}\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                {% endif %}
                                </div>
                            </div>



                    {% endfor %}
                   </div>


                   <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                       <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                       <span class=\"sr-only\">Previous</span>
                   </a>
                   <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                       <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                       <span class=\"sr-only\">Next</span>
                   </a>
            </div>
           </div></div>
        </div>
    </div>
    {% endif %}
</section>

{#<section class=\"team\"><div class=\"container\">#}
    {#<div class=\"row\">#}
        {#<div class=\"col-md-8 offset-md-2 col-10 offset-1 mt-5\">#}
            {#<h2 class=\"text-center mt-5 mb-5 pb-2 text-uppercase text-dark\"><strong>Inštruktori</strong></h2>#}
            {#<span class=\"line\"></span>#}
            {#<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">#}
                {#<ol class=\"carousel-indicators\">#}
                    {#<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>#}
                    {#<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>#}
                    {#<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>#}
                {#</ol>#}
                {#<div class=\"carousel-inner mt-4\">#}
                    {#<div class=\"carousel-item text-center active\">#}
                        {#<div class=\"img-box p-1 border rounded-circle m-auto\">#}
                            {#<img class=\"d-block w-100 rounded-circle\" src=\"http://nicesnippets.com/demo/profile-1.jpg\" alt=\"First slide\">#}
                        {#</div>#}
                        {#<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Paul Mitchel</strong></h5>#}
                        {#<h6 class=\"text-dark m-0\">Web Developer</h6>#}
                        {#<p class=\"m-0 pt-3 text-white\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>#}
                    {#</div>#}
                    {#<div class=\"carousel-item text-center\">#}
                        {#<div class=\"img-box p-1 border rounded-circle m-auto\">#}
                            {#<img class=\"d-block w-100 rounded-circle\" src=\"http://nicesnippets.com/demo/profile-3.jpg\" alt=\"First slide\">#}
                        {#</div>#}
                        {#<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Steve Fonsi</strong></h5>#}
                        {#<h6 class=\"text-dark m-0\">Web Designer</h6>#}
                        {#<p class=\"m-0 pt-3 text-white\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>#}
                    {#</div>#}
                    {#<div class=\"carousel-item text-center\">#}
                        {#<div class=\"img-box p-1 border rounded-circle m-auto\">#}
                            {#<img class=\"d-block w-100 rounded-circle\" src=\"http://nicesnippets.com/demo/profile-7.jpg\" alt=\"First slide\">#}
                        {#</div>#}
                        {#<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Daniel vebar</strong></h5>#}
                        {#<h6 class=\"text-dark m-0\">Seo Analyst</h6>#}
                        {#<p class=\"m-0 pt-3 text-white\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>#}
                    {#</div>#}
                {#</div>#}



                {#<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">#}
                    {#<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>#}
                    {#<span class=\"sr-only\">Previous</span>#}
                {#</a>#}
                {#<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">#}
                    {#<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>#}
                    {#<span class=\"sr-only\">Next</span>#}
                {#</a>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}
{#</div></section>#}
", "modular/slider.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/slider.html.twig");
    }
}
