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

/* application/object/set/item_renderer.html.twig */
class __TwigTemplate_cc105d64aea86d755ca81596df0b0959 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'additional_content' => [$this, 'block_additional_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"friendlyname\">

    ";
        // line 4
        echo "    <span class=\"object-ref-icon text_decoration\" data-template-condition=\"obsolescence_flag\">
        <span class=\"fas fa-eye-slash object-obsolete fa-1x fa-fw\"></span>
    </span>

    ";
        // line 9
        echo "    <span data-template-text=\"friendlyname\"></span>

    ";
        // line 12
        echo "    ";
        $this->displayBlock('additional_content', $context, $blocks);
        // line 14
        echo "
</div>";
    }

    // line 12
    public function block_additional_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "application/object/set/item_renderer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  55 => 14,  52 => 12,  48 => 9,  42 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/object/set/item_renderer.html.twig", "/var/www/html/templates/application/object/set/item_renderer.html.twig");
    }
}
