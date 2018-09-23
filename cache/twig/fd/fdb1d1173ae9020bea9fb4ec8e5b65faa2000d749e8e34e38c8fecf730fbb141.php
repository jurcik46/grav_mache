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

                   <div class=\"carousel-inner mt-4\">

                   ";
            // line 14
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
                // line 15
                echo "
                            <div class=\"carousel-item text-center
                                ";
                // line 17
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    // line 18
                    echo "                                         active
                                ";
                }
                // line 19
                echo "  \">
                                <div class=\"img-box p-1 border rounded-circle m-auto\">
                                    <img class=\"d-block w-100 rounded-circle\" src=\"";
                // line 21
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "person_photo", array()), array(), "array"), "cache", array()), "url", array(), "method");
                echo "\" alt=\"Photo\">
                                </div>
                                <h5 class=\"mt-4 mb-0\"><strong class=\"text-danger text-uppercase\">";
                // line 23
                echo $this->getAttribute($context["slide"], "person_name", array());
                echo "</strong></h5>
                                ";
                // line 25
                echo "                                <p class=\"m-0 pt-3 text-white\">";
                echo $this->getAttribute($context["slide"], "person_description", array());
                echo "</p>
                                <div class=\"social\">
                                ";
                // line 27
                if ($this->getAttribute($context["slide"], "person_facebook", array())) {
                    // line 28
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_facebook", array());
                    echo "\">
                                <i class=\"fa fa-facebook fa-lg fa-fw\">  </i>
                                </a>
                                ";
                }
                // line 32
                echo "                                ";
                if ($this->getAttribute($context["slide"], "person_youtube", array())) {
                    // line 33
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_youtube", array());
                    echo "\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
                                </a>
                                ";
                }
                // line 37
                echo "                                ";
                if ($this->getAttribute($context["slide"], "person_youtube", array())) {
                    // line 38
                    echo "                                <a href=\"";
                    echo $this->getAttribute($context["slide"], "person_youtube", array());
                    echo "\">
                                <i class=\"fa fa-youtube fa-lg fa-fw\">  </i>
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
            // line 58
            echo "                   </div>


                   <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                       <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                       <span class=\"sr-only\">Previous</span>
                   </a>
                   <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                       <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                       <span class=\"sr-only\">Next</span>
                   </a>

                   <ol class=\"carousel-indicators\">

                       ";
            // line 72
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
                // line 73
                echo "                           <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
                echo $this->getAttribute($context["loop"], "index0", array());
                echo "\"

                                   ";
                // line 75
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo " class=\"active\"
                                   ";
                }
                // line 77
                echo "                           ></li>

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
            // line 80
            echo "                   </ol>
            </div>
           </div></div>
        </div>
    </div>
    ";
        }
        // line 86
        echo "</section>


";
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
        return array (  234 => 86,  226 => 80,  210 => 77,  205 => 75,  199 => 73,  182 => 72,  166 => 58,  147 => 52,  139 => 48,  136 => 47,  128 => 43,  125 => 42,  117 => 38,  114 => 37,  106 => 33,  103 => 32,  95 => 28,  93 => 27,  87 => 25,  83 => 23,  78 => 21,  74 => 19,  70 => 18,  68 => 17,  64 => 15,  47 => 14,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
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

                   <ol class=\"carousel-indicators\">

                       {% for slide in page.header.slider %}
                           <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\"

                                   {% if loop.index0 == 0 %} class=\"active\"
                                   {% endif %}
                           ></li>

                       {% endfor %}
                   </ol>
            </div>
           </div></div>
        </div>
    </div>
    {% endif %}
</section>


", "modular/slider.html.twig", "/var/www/public/grav_mache/user/themes/mache/templates/modular/slider.html.twig");
    }
}
