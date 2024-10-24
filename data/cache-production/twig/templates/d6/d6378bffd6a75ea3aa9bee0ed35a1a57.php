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

/* application/object/set/option_renderer.html.twig */
class __TwigTemplate_a415f4a6d6575fa011938b58d43f1716 extends Template
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
        echo "<div class=\"option ibo-input-select--autocomplete-item\" role=\"option\" >

    ";
        // line 4
        echo "    <span class=\"ibo-input-select--autocomplete-item-image\" data-template-condition=\"has_image\" data-template-css-background-image=\"picture_url\" data-template-text=\"initials\"></span>

    ";
        // line 7
        echo "    <span class=\"ibo-input-select--autocomplete-item-txt\">

        ";
        // line 10
        echo "\t\t<span class=\"object-ref-icon text_decoration\" data-template-condition=\"obsolescence_flag\">
            <span class=\"fas fa-eye-slash object-obsolete fa-1x fa-fw\"></span>
        </span>

        ";
        // line 15
        echo "\t\t<span data-template-text=\"friendlyname\"></span>

        ";
        // line 18
        echo "        ";
        $this->displayBlock('additional_content', $context, $blocks);
        // line 20
        echo "
        ";
        // line 22
        echo "\t\t<div data-template-condition=\"has_additional_field\">
\t\t\t<i data-template-text=\"additional_field\"></i>
\t\t</div>

\t</span>


</div>";
    }

    // line 18
    public function block_additional_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "application/object/set/option_renderer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  77 => 18,  66 => 22,  63 => 20,  60 => 18,  56 => 15,  50 => 10,  46 => 7,  42 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/object/set/option_renderer.html.twig", "/var/www/html/templates/application/object/set/option_renderer.html.twig");
    }
}
