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

/* base/layouts/object/object-summary/layout.html.twig */
class __TwigTemplate_844f7aba812f823615681fd56c4e3e36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'iboPanelHeaderOuter' => [$this, 'block_iboPanelHeaderOuter'],
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
            'iboPanelHeader' => [$this, 'block_iboPanelHeader'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base/layouts/object/object-details/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/object/object-details/layout.html.twig", "base/layouts/object/object-summary/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_iboPanelHeaderOuter($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 8
    public function block_iboPanelBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <div class=\"ibo-object-summary--header\">
    ";
        // line 10
        $this->displayBlock('iboPanelHeader', $context, $blocks);
        // line 13
        echo "    </div>
    <div class=\"ibo-object-summary--body\">
        <div class=\"ibo-object-summary--content--attributes\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisplayValues", [], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["attcode"] => $context["attval"]) {
            // line 17
            echo "            <div class=\"ibo-object-summary--content--attribute ibo-field ibo-field-small\">
                <span class=\"ibo-object-summary--content--attributes--code ibo-field--label\">";
            // line 18
            echo $context["attcode"];
            echo "</span>
                <span class=\"ibo-object-summary--content--attributes--value ibo-field--value\">";
            // line 19
            echo $context["attval"];
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attcode'], $context['attval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>
";
    }

    // line 10
    public function block_iboPanelHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        $this->displayParentBlock("iboPanelHeader", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/object/object-summary/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 11,  94 => 10,  88 => 22,  79 => 19,  75 => 18,  72 => 17,  68 => 16,  63 => 13,  61 => 10,  58 => 9,  54 => 8,  48 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/object/object-summary/layout.html.twig", "/var/www/html/templates/base/layouts/object/object-summary/layout.html.twig");
    }
}
