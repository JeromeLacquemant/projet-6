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

/* blog/create.html.twig */
class __TwigTemplate_8bbfd63ec083d066504ee730523d8ccb8dccaa7a599d09f82bf970aef8610817 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "message"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "warning"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <div class=\"alert alert-warning>\" role=\"alert\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "danger"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <h1>
        ";
        // line 22
        if (($context["editMode"] ?? null)) {
            // line 23
            echo "            Modification d'une figure
        ";
        } else {
            // line 25
            echo "            Création d'une nouvelle figure !
        ";
        }
        // line 27
        echo "    </h1>

    ";
        // line 30
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formFigure"] ?? null), 'form_start');
        echo " 

    
    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formFigure"] ?? null), "name", [], "any", false, false, false, 33), 'row', ["attr" => ["placeholder" => "Titre de la figure"]]);
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formFigure"] ?? null), "content", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "Description de la figure"]]);
        echo "
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formFigure"] ?? null), "category_figure", [], "any", false, false, false, 35), 'row');
        echo "

    <h2>Images</h2>
    <p>Veuillez utiliser des images avec les dimensions suivantes : 300px * 300px.</p>
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"image_list\" data-prototype=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formFigure"] ?? null), "images", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "prototype", [], "any", false, false, false, 41), 'widget'), "html_attr");
        echo "\">
               ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "images", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 43
            echo "                    <div class=\"\">
                        <img  class=\"col-lg-4 col-md-4 col-sm-12\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("public/uploads/figures/" . twig_get_attribute($this->env, $this->source, $context["images"], "name", [], "any", false, false, false, 44))), "html", null, true);
            echo "\" alt=\"Image\" class=\"custom-input-value\">
                        <a class=\"my-3 stylebutton\" href = \"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("figure_delete_image", ["id" => twig_get_attribute($this->env, $this->source, $context["images"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"
                            data-delete data-token=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["images"], "id", [], "any", false, false, false, 46))), "html", null, true);
            echo "\">Supprimer l'image</a>   
                    </div>
                    </br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
        </div>    
    </div>
    <hr>

    <h2>Videos</h2>
    <p>Veuillez utiliser sur Youtube le bouton \"Partager\". Cliquez ensuite sur \"Intégrer\". Copier, puis coller le code dans le fomulaire ci-dessous.\"</p>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-offset-2 video-button\" id=\"video_list\" data-prototype=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formFigure"] ?? null), "videos", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "prototype", [], "any", false, false, false, 59), 'widget'), "html_attr");
        echo "\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "videos", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["videos"]) {
            // line 61
            echo "                    <div>
                        ";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["videos"], "name", [], "any", false, false, false, 62);
            echo "
                            <a class=\"my-3 stylebutton\" href = \"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("figure_delete_video", ["id" => twig_get_attribute($this->env, $this->source, $context["videos"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\"
                            data-delete data-token=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["videos"], "id", [], "any", false, false, false, 64))), "html", null, true);
            echo "\">Supprimer la vidéo</a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-success\">
        ";
        // line 72
        if (($context["editMode"] ?? null)) {
            // line 73
            echo "            Enregistrer les modifications
        ";
        } else {
            // line 75
            echo "            Ajouter la figure
        ";
        }
        // line 77
        echo "    </button>

    ";
        // line 80
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formFigure"] ?? null), 'form_end');
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/js/element_deletion.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/js/image.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/js/video.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 87,  267 => 86,  262 => 85,  255 => 84,  244 => 80,  240 => 77,  236 => 75,  232 => 73,  230 => 72,  223 => 67,  214 => 64,  210 => 63,  206 => 62,  203 => 61,  199 => 60,  195 => 59,  184 => 50,  174 => 46,  170 => 45,  166 => 44,  163 => 43,  159 => 42,  155 => 41,  146 => 35,  142 => 34,  138 => 33,  131 => 30,  127 => 27,  123 => 25,  119 => 23,  117 => 22,  113 => 20,  104 => 17,  101 => 16,  96 => 15,  87 => 12,  84 => 11,  79 => 10,  70 => 7,  67 => 6,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/create.html.twig", "/Users/jerome/Documents/OpenClassRooms/0_Projets/P6_LACQUEMANT_Jérôme/1_Documents de travail/Snowtricks_Netbeans/templates/blog/create.html.twig");
    }
}
