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

/* base/components/medallion-icon/layout.html.twig */
class __TwigTemplate_59ee2fa990fe6f0da5b3c6099d7256c2 extends Template
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
        ob_start(function () { return ''; });
        // line 4
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        echo "\" data-role=\"ibo-medallion-icon\">
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetImageUrl", [], "method", false, false, false, 5) != "")) {
            // line 6
            echo "        <img class=\"ibo-medallion-icon--image\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetImageUrl", [], "method", false, false, false, 6), "html", null, true);
            echo "\" />
    ";
        }
        // line 8
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 8) != "")) {
            // line 9
            echo "        <i class=\"ibo-medallion-icon--image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 9), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 11
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 11) != "")) {
            // line 12
            echo "        <div class=\"ibo-medallion-icon--description\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 12), "html", null, true);
            echo "</div>
    ";
        }
        // line 14
        echo "</div>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "base/components/medallion-icon/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 3,  74 => 14,  68 => 12,  65 => 11,  59 => 9,  56 => 8,  50 => 6,  48 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/medallion-icon/layout.html.twig", "/var/www/html/templates/base/components/medallion-icon/layout.html.twig");
    }
}
