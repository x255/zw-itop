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

/* application/printable/block-print-header/layout.live.js.twig */
class __TwigTemplate_5758344ad89e4689fbcc82a8a005a2fa extends Template
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
        // line 3
        $___internal_parse_0_ = ('' === $tmp = "
var oHiddeableChapters = {};

") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "application/printable/block-print-header/layout.live.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/printable/block-print-header/layout.live.js.twig", "/var/www/html/templates/application/printable/block-print-header/layout.live.js.twig");
    }
}
