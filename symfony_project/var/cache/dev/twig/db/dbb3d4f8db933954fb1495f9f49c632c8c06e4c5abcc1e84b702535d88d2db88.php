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

/* movie/show.html.twig */
class __TwigTemplate_6174ef9518d784f036546e71558b2275d8cca224df48e18b629222b807f0ec09 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movie/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movie/show.html.twig"));

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
<div class=\"container mt-3 ml-10\">
        <h2 style=\"color: rgb(167, 54, 54)\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 6, $this->source); })()), "title", []), "html", null, true);
        echo "</h2>
    ";
        // line 7
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 7, $this->source); })()), "backdrop_path", []))) {
            // line 8
            echo "        <img  src=\"http://image.tmdb.org/t/p/w1280";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 8, $this->source); })()), "backdrop_path", []), "html", null, true);
            echo "\">
    ";
        } else {
            // line 10
            echo "    <img src=\"https://media.koreus.com/201801/maya-chat-drole-tete.jpg\" alt=\"\">
    ";
        }
        // line 12
        echo "        <h5>
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 13, $this->source); })()), "title", []), "html", null, true);
        echo " <br>
            Genres: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 14, $this->source); })()), "genres", []), 0, []), "name", []), "html", null, true);
        echo "<br>
            Date: ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 15, $this->source); })()), "release_date", []), "d/m/Y"), "html", null, true);
        echo "<br>
            Actors: ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 16, $this->source); })()), "cast", []), 0, []), "name", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 16, $this->source); })()), "cast", []), 1, []), "name", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 16, $this->source); })()), "cast", []), 2, []), "name", []), "html", null, true);
        echo "
            <h5 class=\"rating\" style=\"font-size: 35px\">Note : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 17, $this->source); })()), "vote_average", []), "html", null, true);
        echo "/10</h5>

        </h5>
    <img src=\"http://image.tmdb.org/t/p/w185";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 20, $this->source); })()), "cast", []), 0, []), "profile_path", []), "html", null, true);
        echo "\" alt=\"\">
    <img src=\"http://image.tmdb.org/t/p/w185";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 21, $this->source); })()), "cast", []), 1, []), "profile_path", []), "html", null, true);
        echo "\" alt=\"\">
    <img src=\"http://image.tmdb.org/t/p/w185";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 22, $this->source); })()), "cast", []), 2, []), "profile_path", []), "html", null, true);
        echo "\" alt=\"\">

    <hr class=\"my-4\">
        <p style=\"font-weight: bold; font-size: large\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 25, $this->source); })()), "overview", []), "html", null, true);
        echo "</p>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["trailers"] ?? null), "youtube", [], "any", false, true), 0, [], "any", false, true), "source", [], "any", true, true)) {
            // line 27
            echo "        <iframe width=\"1280\" height=\"720\"
            src=\"https://www.youtube.com/embed/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trailers"]) || array_key_exists("trailers", $context) ? $context["trailers"] : (function () { throw new RuntimeError('Variable "trailers" does not exist.', 28, $this->source); })()), "youtube", []), 0, []), "source", []), "html", null, true);
            echo "\" allowfullscreen>
        </iframe>
    ";
        } else {
            // line 31
            echo "    <p>No Trailer</p>
    ";
        }
        // line 33
        echo "    
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  143 => 31,  137 => 28,  134 => 27,  132 => 26,  128 => 25,  122 => 22,  118 => 21,  114 => 20,  108 => 17,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  85 => 12,  81 => 10,  75 => 8,  73 => 7,  69 => 6,  65 => 4,  56 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container mt-3 ml-10\">
        <h2 style=\"color: rgb(167, 54, 54)\">{{movie.title}}</h2>
    {% if movie.backdrop_path is not null %}
        <img  src=\"http://image.tmdb.org/t/p/w1280{{ movie.backdrop_path }}\">
    {% else %}
    <img src=\"https://media.koreus.com/201801/maya-chat-drole-tete.jpg\" alt=\"\">
    {% endif %}
        <h5>
            {{movie.title}} <br>
            Genres: {{movie.genres.0.name}}<br>
            Date: {{movie.release_date  | date('d/m/Y')}}<br>
            Actors: {{credits.cast.0.name}}, {{credits.cast.1.name}}, {{credits.cast.2.name}}
            <h5 class=\"rating\" style=\"font-size: 35px\">Note : {{ movie.vote_average }}/10</h5>

        </h5>
    <img src=\"http://image.tmdb.org/t/p/w185{{credits.cast.0.profile_path}}\" alt=\"\">
    <img src=\"http://image.tmdb.org/t/p/w185{{credits.cast.1.profile_path}}\" alt=\"\">
    <img src=\"http://image.tmdb.org/t/p/w185{{credits.cast.2.profile_path}}\" alt=\"\">

    <hr class=\"my-4\">
        <p style=\"font-weight: bold; font-size: large\">{{movie.overview}}</p>
        {% if  trailers.youtube.0.source is defined %}
        <iframe width=\"1280\" height=\"720\"
            src=\"https://www.youtube.com/embed/{{trailers.youtube.0.source}}\" allowfullscreen>
        </iframe>
    {% else %}
    <p>No Trailer</p>
    {% endif %}
    
</div>

{% endblock %}
", "movie/show.html.twig", "/home/titi/Rendu/symfony_project/symfony_project/templates/movie/show.html.twig");
    }
}
