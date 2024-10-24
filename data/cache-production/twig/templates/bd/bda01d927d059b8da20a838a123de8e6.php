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

/* application/object/set/set_renderer.html.twig */
class __TwigTemplate_6f2520fa33efa895fcd797a942b54558 extends Template
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
        // line 1
        echo "<span data-template-attr-title=\"friendlyname\">

    ";
        // line 4
        echo "    ";
        if (($context["obsolescence_flag"] ?? null)) {
            // line 5
            echo "    <span class=\"object-ref-icon text_decoration\">
        <span class=\"fas fa-eye-slash object-obsolete fa-1x fa-fw\"></span>
    </span>
    ";
        }
        // line 9
        echo "
    ";
        // line 11
        echo "    <span data-template-text=\"friendlyname\">";
        echo twig_escape_filter($this->env, ($context["friendlyname"] ?? null), "html", null, true);
        echo "</span>

</span>";
    }

    public function getTemplateName()
    {
        return "application/object/set/set_renderer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 9,  44 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/object/set/set_renderer.html.twig", "/var/www/html/templates/application/object/set/set_renderer.html.twig");
    }
}
