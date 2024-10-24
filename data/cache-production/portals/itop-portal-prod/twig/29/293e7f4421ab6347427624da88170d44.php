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

/* itop-portal-base/portal/templates/helpers/loader.html.twig */
class __TwigTemplate_2b382c58ec6bbab906ac9318dc512be5 extends Template
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
        echo "<div class=\"content_loader\">
\t<div class=\"icon glyphicon glyphicon-refresh\"></div>
\t<div class=\"message\">
\t\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Page:PleaseWait"), "html", null, true);
        echo "
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/helpers/loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/helpers/loader.html.twig", "/var/www/html/env-production/itop-portal-base/portal/templates/helpers/loader.html.twig");
    }
}
