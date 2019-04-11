<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* movie/search.html.twig */
class __TwigTemplate_4df238bbe8e2e7f5643619ba46dbf426d1e5c5ffb37df8debc7c0d089e67a5b4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movie/search.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container mt-5\">
        <div class=\"row mt-4 mb-5\">

            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bytitles"]) || array_key_exists("bytitles", $context) ? $context["bytitles"] : (function () { throw new RuntimeError('Variable "bytitles" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bytitle"]) {
            // line 9
            echo "
                <div class=\"col-sm-3 d-flex col-lg-3 col-md-6 d-flex\">
                    <div class=\"card border-dark h-150 mt-3\">
                        <img class=\"card-img-top\" src=\"http://image.tmdb.org/t/p/original";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bytitle"], "poster_path", []), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bytitle"], "title", []), "html", null, true);
            echo "</h4>
                            <h6>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bytitle"], "release_date", []), "d/m/Y"), "html", null, true);
            echo "</h6>
                            <h5 class=\"rating\">Note : ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bytitle"], "vote_average", []), "html", null, true);
            echo "/10</h5>
                            <p class=\"card-text\">";
            // line 17
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["bytitle"], "overview", []), 0, 100), "html", null, true);
            echo "...</p>
                        </div>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_movie", ["id" => twig_get_attribute($this->env, $this->source, $context["bytitle"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Lire la suite</a>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bytitle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movie/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  102 => 19,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  80 => 12,  75 => 9,  71 => 8,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"row mt-4 mb-5\">

            {% for bytitle in bytitles %}

                <div class=\"col-sm-3 d-flex col-lg-3 col-md-6 d-flex\">
                    <div class=\"card border-dark h-150 mt-3\">
                        <img class=\"card-img-top\" src=\"http://image.tmdb.org/t/p/original{{ bytitle.poster_path }}\" alt=\"\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">{{ bytitle.title }}</h4>
                            <h6>{{ bytitle.release_date|date(\"d/m/Y\") }}</h6>
                            <h5 class=\"rating\">Note : {{ bytitle.vote_average }}/10</h5>
                            <p class=\"card-text\">{{ bytitle.overview | slice(0,100)}}...</p>
                        </div>
                        <a href=\"{{ path('show_movie', {'id': bytitle.id } ) }}\" class=\"btn btn-primary\">Lire la suite</a>
                    </div>
                </div>

            {% endfor %}

        </div>
    </div>

{% endblock %}", "movie/search.html.twig", "/home/titi/Rendu/symfony_project/symfony_project/templates/movie/search.html.twig");
    }
}
