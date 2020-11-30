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

/* @WebProfiler/Icon/no-gray.svg */
class __TwigTemplate_9300c564ddef5a64ca38924d006a4862fb9350a03e566348472cf170db7823ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/no-gray.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\"><path fill=\"#999\" d=\"M10.4 8.4L8 6l2.4-2.4c.8-.8.7-1.6.2-2.2-.6-.5-1.4-.6-2.2.2L6 4 3.6 1.6C2.8.8 2 .9 1.4 1.4c-.5.6-.6 1.4.2 2.2L4 6 1.6 8.4c-.8.8-.7 1.6-.2 2.2.6.6 1.4.6 2.2-.2L6 8l2.4 2.4c.8.8 1.6.7 2.2.2.5-.6.6-1.4-.2-2.2z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/no-gray.svg";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Icon/no-gray.svg", "/Users/jerome/Documents/OpenClassRooms/0_Projets/P6_LACQUEMANT_Jérôme/1_Documents de travail/Snowtricks_Netbeans/vendor/symfony/web-profiler-bundle/Resources/views/Icon/no-gray.svg");
    }
}
