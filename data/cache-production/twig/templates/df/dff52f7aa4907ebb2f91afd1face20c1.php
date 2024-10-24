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

/* base/components/input/file-select/layout.html.twig */
class __TwigTemplate_7dfa5dfebc8570f8df17c203c3861c51 extends Template
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
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        echo "-container\"
         class=\"ibo-input-file-select--container ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 5)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 5), "html", null, true);
        }
        // line 6
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 6)) {
            echo " ibo-is-hidden";
        }
        echo "\">
        <label class=\"ibo-input-file-select\">
            <input id=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 8), "html", null, true);
        echo "\" class=\"ibo-input-file-select--file-input\" type=\"file\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 8), "html", null, true);
        echo "\">
            <span class=\"ibo-button ibo-is-regular ibo-is-primary\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetButtonText", [], "method", false, false, false, 9), "html", null, true);
        echo "</span>
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowFilename", [], "method", false, false, false, 10)) {
            // line 11
            echo "            <span id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
            echo "-file-name\" class=\"ibo-input-file-select--file-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetFileName", [], "method", false, false, false, 11), "html", null, true);
            echo "</span>
            ";
        }
        // line 13
        echo "        </label>
    </div>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "base/components/input/file-select/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 3,  76 => 13,  68 => 11,  66 => 10,  62 => 9,  56 => 8,  48 => 6,  44 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/file-select/layout.html.twig", "/var/www/html/templates/base/components/input/file-select/layout.html.twig");
    }
}
