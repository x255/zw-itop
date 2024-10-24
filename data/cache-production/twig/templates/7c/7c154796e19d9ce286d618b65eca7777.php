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

/* base/components/input/set/layout.html.twig */
class __TwigTemplate_3789601b0f29719ddf29b0eec7d6a7ab extends Template
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
        echo "
";
        // line 5
        echo "<select
    id=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 6), "html", null, true);
        echo "\"
    name=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 7), "html", null, true);
        echo "\"
    multiple
    style=\"display: none;\"
>
</select>

";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasOptionsTemplate", [], "method", false, false, false, 14)) {
            // line 15
            echo "    <template id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 15), "html", null, true);
            echo "_options_template\">
        ";
            // line 16
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptionsTemplate", [], "method", false, false, false, 16), "base/components/input/set/layout.html.twig", 16)->display($context);
            // line 17
            echo "    </template>
";
        }
        // line 19
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasItemsTemplate", [], "method", false, false, false, 21)) {
            // line 22
            echo "    <template id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 22), "html", null, true);
            echo "_items_template\">
        ";
            // line 23
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetItemsTemplate", [], "method", false, false, false, 23), "base/components/input/set/layout.html.twig", 23)->display($context);
            // line 24
            echo "    </template>
";
        }
        // line 26
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/components/input/set/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  81 => 24,  79 => 23,  74 => 22,  72 => 21,  69 => 19,  65 => 17,  63 => 16,  58 => 15,  56 => 14,  47 => 7,  43 => 6,  40 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/set/layout.html.twig", "/var/www/html/templates/base/components/input/set/layout.html.twig");
    }
}
