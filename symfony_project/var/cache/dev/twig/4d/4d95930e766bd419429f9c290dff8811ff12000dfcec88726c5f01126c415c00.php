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

/* home/index.html.twig */
class __TwigTemplate_de69d0b93eab46f596c2f5e08a8d72a5f42f36e486cf0ebd7fbbdd6f9553eb0c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page d'accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container mt-4 text-center\">
    <h1>Bienvenue sur la page d'accueil !</h1>
</div>
    <div class=\"container mt-4\">
        <div class=\"row\">

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["upcoming"]) || array_key_exists("upcoming", $context) ? $context["upcoming"] : (function () { throw new RuntimeError('Variable "upcoming" does not exist.', 10, $this->source); })()), "results", []));
        foreach ($context['_seq'] as $context["_key"] => $context["upcome"]) {
            // line 11
            echo "
                    <div class=\"col-sm-3 d-flex\">
                        <div class=\"card h-150 mt-3\">
                            <img class=\"card-img-top\" src=\"http://image.tmdb.org/t/p/w200";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upcome"], "poster_path", []), "html", null, true);
            echo "\" alt=\"\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\" style=\"text-align: center;\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upcome"], "title", []), "html", null, true);
            echo "</h4>
                                    <h6 style=\"color: blue; text-align: center\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upcome"], "release_date", []), "d/m/Y"), "html", null, true);
            echo "</h6>
                                    <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["upcome"], "overview", []), 0, 100), "html", null, true);
            echo "...</p>
                                    <h5 class=\"rating\">Note : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["upcome"], "vote_average", []), "html", null, true);
            echo "/10</h5>
                                </div>
                            <form action=\"\" method=\"post\">
                                <a href=\"#\" class=\"btn btn-primary\">Lire la suite</a>
                            </form>
                        </div>
                    </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upcome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        </div>
    </div>
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  101 => 14,  96 => 11,  92 => 10,  84 => 4,  75 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Page d'accueil{% endblock %}
{% block body %}
<div class=\"container mt-4 text-center\">
    <h1>Bienvenue sur la page d'accueil !</h1>
</div>
    <div class=\"container mt-4\">
        <div class=\"row\">

            {% for upcome in upcoming.results %}

                    <div class=\"col-sm-3 d-flex\">
                        <div class=\"card h-150 mt-3\">
                            <img class=\"card-img-top\" src=\"http://image.tmdb.org/t/p/w200{{ upcome.poster_path }}\" alt=\"\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\" style=\"text-align: center;\">{{ upcome.title }}</h4>
                                    <h6 style=\"color: blue; text-align: center\">{{ upcome.release_date | date(\"d/m/Y\") }}</h6>
                                    <p class=\"card-text\">{{ upcome.overview | slice(0,100) }}...</p>
                                    <h5 class=\"rating\">Note : {{ upcome.vote_average }}/10</h5>
                                </div>
                            <form action=\"\" method=\"post\">
                                <a href=\"#\" class=\"btn btn-primary\">Lire la suite</a>
                            </form>
                        </div>
                    </div>

            {% endfor %}

        </div>
    </div>
    <br>
{% endblock %}", "home/index.html.twig", "/home/titi/Rendu/symfony_project/symfony_project/templates/home/index.html.twig");
    }
}
