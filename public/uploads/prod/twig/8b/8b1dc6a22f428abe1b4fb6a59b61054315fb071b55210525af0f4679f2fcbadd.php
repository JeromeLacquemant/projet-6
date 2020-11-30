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

/* blog/show.html.twig */
class __TwigTemplate_d0437038e29e26b09cfaf3d56e369753e62fae6227ec3bdca0933cca4d098005 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "message"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "    <div class=\"alert alert-success\" role=\"alert\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "warning"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "    <div class=\"alert alert-warning>\" role=\"alert\">
        ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "danger"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    <article>
        <div class=\"container\">
     
            ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            echo " 
    
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-success\" onclick=\"return window.confirm(`Êtes vous sur de vouloir modifier cet article ?`)\">
                <svg class=\"bi bi-pencil-square\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z\"/>
                <path fill-rule=\"evenodd\" d=\"M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z\" clip-rule=\"evenodd\"/>
            </svg>
            </a>
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return window.confirm(`Êtes vous sur de vouloir supprimer cet article !? (Action irréversible)`)\">
                <svg class=\"bi bi-trash\" width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" fill=\"black\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z\"/>
                    <path fill-rule=\"evenodd\" d=\"M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z\" clip-rule=\"evenodd\"/>
                </svg>
            </a>
                ";
        }
        // line 37
        echo "                </div>
                <div class=\"container\">
                <h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "</h1>
                   
        <p>Auteur : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "figureuser", [], "any", false, false, false, 41), "username", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
       
        <div class=\"metadata\">Ecrit le ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "createdAt", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "createdAt", [], "any", false, false, false, 43), "H:i"), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "categoryfigure", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
        echo "</div>
                </br>
        ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "content", [], "any", false, false, false, 45);
        echo "
        
        </div>
        
        <div class=\"container\">
            <hr>
            <div class=\"row \">  
                <div class=\"card col-lg-12 col-md-12 col-sm-12 box\">
                    <div class=\"card-shadow\">
                        <div class=\"content\">
                            <div class=\"img-container\">
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "images", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 57
            echo "                                    <img class=\"col-lg-3 col-md-3 col-sm-12 py-3\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("public/uploads/figures/" . twig_get_attribute($this->env, $this->source, $context["images"], "name", [], "any", false, false, false, 57))), "html", null, true);
            echo "\" alt=\"Image\" width=\"150\" class=\"lazy img-fluid\">
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            </div>
                        </div>
                    </div>
                </div>
            <hr>
            
            <div class=\"container\">
            <div class=\"row\">
                
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "videos", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["videos"]) {
            // line 69
            echo "                <div class=\"card col-lg-4 col-md-12 col-sm-12 py-3\">
                ";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["videos"], "name", [], "any", false, false, false, 70);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            
            </div>
            </div>
            <hr>
        </div>     
    </article>

    <div class=\"container\">
    <section id=\"boxs\">
        <h3>";
        // line 82
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "comments", [], "any", false, false, false, 82)), "html", null, true);
        echo " Commentaires : </h3>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "comments", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 84
            echo "            <div class=\"box card\">
                <div class=\"row\">
                    <div class=\"col-3\" >
                        ";
            // line 87
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "commentuser", [], "any", false, false, false, 87), "image", [], "any", false, false, false, 87), "avatar.jpg"))) {
                // line 88
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/uploads/user/avatar.jpg"), "html", null, true);
                echo "\" alt=\"Photo of the basic avatar\" width=\"90\">
                        ";
            } else {
                // line 90
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("public/uploads/user/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "commentuser", [], "any", false, false, false, 90), "image", [], "any", false, false, false, 90))), "html", null, true);
                echo "\" alt=\"Photo of the user's avatar\"  width=\"90\">
                        ";
            }
            // line 92
            echo "                    </div>
                    <div class=\"col-3\">
                        ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "commentuser", [], "any", false, false, false, 94), "username", [], "any", false, false, false, 94), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 94), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)
                    </div>
                    <div class=\"col-6\">
                        ";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 97);
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "

        <div class=\"col-md-12 text-center\">
            <div class=\"button\">
                <button id=\"showMore\"><span>Load More</span></button>
            </div>
        </div> 
        
        ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 110)) {
            // line 111
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_start');
            echo "
        ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "content", [], "any", false, false, false, 112), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

        <button type=\"submit\" class=\"btn btn-success\">Commenter !</button>
        ";
            // line 115
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_end');
            echo "

        ";
        } else {
            // line 118
            echo "            <h2>Vous ne pouvez pas commenter si vous n'êtes pas connecté !</h2>
            <a href=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion </a>
        ";
        }
        // line 121
        echo "        
    </section>
            </div>
        
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 121,  307 => 119,  304 => 118,  298 => 115,  292 => 112,  287 => 111,  285 => 110,  275 => 102,  264 => 97,  256 => 94,  252 => 92,  246 => 90,  240 => 88,  238 => 87,  233 => 84,  229 => 83,  225 => 82,  214 => 73,  205 => 70,  202 => 69,  198 => 68,  187 => 59,  178 => 57,  174 => 56,  160 => 45,  151 => 43,  146 => 41,  141 => 39,  137 => 37,  127 => 30,  118 => 24,  113 => 22,  108 => 19,  99 => 16,  96 => 15,  92 => 14,  83 => 11,  80 => 10,  76 => 9,  67 => 6,  64 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog/show.html.twig", "/Users/jerome/Documents/OpenClassRooms/0_Projets/P6_LACQUEMANT_Jérôme/1_Documents de travail/Snowtricks_Netbeans/templates/blog/show.html.twig");
    }
}
