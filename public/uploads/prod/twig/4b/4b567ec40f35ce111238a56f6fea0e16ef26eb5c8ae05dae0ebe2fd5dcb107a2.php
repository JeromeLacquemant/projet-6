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

/* @WebProfiler/Collector/http_client.html.twig */
class __TwigTemplate_b1343a03193676126faa6fe44a4555d59bc021f334ced3df88d726f36c38db5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/http_client.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            ob_start(function () { return ''; });
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/http-client.svg");
            echo "
            ";
            // line 7
            $context["status_color"] = "";
            // line 8
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 8), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 10
            echo "
        ";
            // line 11
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 16
        echo "<span class=\"label ";
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 16), 0))) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">";
        // line 17
        echo twig_include($this->env, $context, "@WebProfiler/Icon/http-client.svg");
        echo "</span>
    <strong>HTTP Client</strong>
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 19)) {
            // line 20
            echo "        <span class=\"count\">
            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 21), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 24
        echo "</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <h2>HTTP Client</h2>
    ";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 29), 0))) {
            // line 30
            echo "        <div class=\"empty\">
            <p>No HTTP requests were made.</p>
        </div>
    ";
        } else {
            // line 34
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestCount", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "errorCount", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "clients", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["name"] => $context["client"]) {
                // line 47
                echo "                <div class=\"tab ";
                echo (((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 47)), 0))) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 48
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 48)), "html", null, true);
                echo "</span></h3>
                    <div class=\"tab-content\">
                        ";
                // line 50
                if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 50)), 0))) {
                    // line 51
                    echo "                            <div class=\"empty\">
                                <p>No requests were made with the \"";
                    // line 52
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" service.</p>
                            </div>
                        ";
                } else {
                    // line 55
                    echo "                            <h4>Requests</h4>
                            ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 57
                        echo "                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"label\">";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "method", [], "any", false, false, false, 61), "html", null, true);
                        echo "</span>
                                        </th>
                                        <th class=\"full-width\">
                                            ";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "url", [], "any", false, false, false, 64), "html", null, true);
                        echo "
                                            ";
                        // line 65
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 65))) {
                            // line 66
                            echo "                                                ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 66), 1);
                            echo "
                                            ";
                        }
                        // line 68
                        echo "                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            ";
                        // line 74
                        if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 74), 500))) {
                            // line 75
                            echo "                                                ";
                            $context["responseStatus"] = "error";
                            // line 76
                            echo "                                            ";
                        } elseif ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 76), 400))) {
                            // line 77
                            echo "                                                ";
                            $context["responseStatus"] = "warning";
                            // line 78
                            echo "                                            ";
                        } else {
                            // line 79
                            echo "                                                ";
                            $context["responseStatus"] = "success";
                            // line 80
                            echo "                                            ";
                        }
                        // line 81
                        echo "                                            <span class=\"label status-";
                        echo twig_escape_filter($this->env, ($context["responseStatus"] ?? null), "html", null, true);
                        echo "\">
                                                ";
                        // line 82
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 82), "html", null, true);
                        echo "
                                            </span>
                                        </th>
                                        <td>
                                            ";
                        // line 86
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, false, 86), 1);
                        echo "
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "                        ";
                }
                // line 93
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        ";
        }
        // line 97
        echo "    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/http_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 97,  288 => 96,  280 => 93,  277 => 92,  265 => 86,  258 => 82,  253 => 81,  250 => 80,  247 => 79,  244 => 78,  241 => 77,  238 => 76,  235 => 75,  233 => 74,  225 => 68,  219 => 66,  217 => 65,  213 => 64,  207 => 61,  201 => 57,  197 => 56,  194 => 55,  188 => 52,  185 => 51,  183 => 50,  176 => 48,  171 => 47,  167 => 46,  158 => 40,  151 => 36,  147 => 34,  141 => 30,  139 => 29,  136 => 28,  129 => 27,  121 => 24,  115 => 21,  112 => 20,  110 => 19,  105 => 17,  100 => 16,  93 => 15,  83 => 11,  80 => 10,  74 => 8,  72 => 7,  67 => 6,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/http_client.html.twig", "/Users/jerome/Documents/OpenClassRooms/0_Projets/P6_LACQUEMANT_Jérôme/1_Documents de travail/Snowtricks_Netbeans/vendor/symfony/web-profiler-bundle/Resources/views/Collector/http_client.html.twig");
    }
}
