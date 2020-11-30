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

/* @WebProfiler/Icon/menu.svg */
class __TwigTemplate_a7696814492d559be27a39bdbcd690ff7fd1c5fd7d291039bf5c58d95e85a9f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/menu.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M2.6 17.5h18.8c.9 0 1.6.7 1.6 1.6v1.5c0 1-.7 1.6-1.6 1.6H2.6c-.9 0-1.6-.7-1.6-1.6v-1.5c0-.9.7-1.6 1.6-1.6zM1 11.2v1.6c0 .9.7 1.6 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6v-1.6c0-.8-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 11.2zm0-7.8v1.5a1.6 1.6 0 0 0 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6V3.4c0-1-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 3.4z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/menu.svg";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Icon/menu.svg", "/Users/jerome/Documents/OpenClassRooms/0_Projets/P6_LACQUEMANT_Jérôme/1_Documents de travail/Snowtricks_Netbeans/vendor/symfony/web-profiler-bundle/Resources/views/Icon/menu.svg");
    }
}
