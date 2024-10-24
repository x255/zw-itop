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

/* itop-portal-base/portal/templates/bricks/manage/layout.html.twig */
class __TwigTemplate_058e0d5b43d131f1cd4dced0a182da53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainHeaderActions' => [$this, 'block_pMainHeaderActions'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "itop-portal-base/portal/templates/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/layout.html.twig", "itop-portal-base/portal/templates/bricks/manage/layout.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetTitle", [], "method", false, false, false, 4)), "html", null, true);
        echo " ";
        if ((($context["iCount"] ?? null) >= 0)) {
            echo " (";
            echo twig_escape_filter($this->env, ($context["iCount"] ?? null), "html", null, true);
            echo ")";
        }
        echo " ";
    }

    // line 6
    public function block_pMainHeaderActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetAvailablesDisplayModes", [], "any", false, false, false, 7)) > 1)) {
            // line 8
            echo "\t\t<div class=\"btn-group btn_group_explicit\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetAvailablesDisplayModes", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["sDisplay"]) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "url_generator", [], "any", false, false, false, 10), "generate", [0 => "p_manage_brick_display_as", 1 => ["sBrickId" => ($context["sBrickId"] ?? null), "sDisplayMode" => $context["sDisplay"]]], "method", false, false, false, 10), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "combodo.portal.instance.routes", [], "array", false, true, false, 10), twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetRouteName", [], "any", false, false, false, 10), [], "array", false, true, false, 10), "hash", [], "array", true, true, false, 10)) {
                    echo "#";
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = (($__internal_compile_2 = ($context["app"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["combodo.portal.instance.routes"] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetRouteName", [], "any", false, false, false, 10)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["hash"] ?? null) : null), "html", null, true);
                }
                echo "\"
\t\t\t\t   id=\"btn_tab_for_";
                // line 11
                echo twig_escape_filter($this->env, $context["sDisplay"], "html", null, true);
                echo "\"
\t\t\t\t   class=\"btn btn-default ";
                // line 12
                if (($context["sDisplay"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetPresentationDataForTileMode", [0 => ($context["sDisplayMode"] ?? null)], "method", false, false, false, 12), "layoutDisplayMode", [], "any", false, false, false, 12))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(("Brick:Portal:Manage:DisplayMode:" . $context["sDisplay"])), "html", null, true);
                echo "
\t\t\t\t</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sDisplay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</div>
    ";
        }
    }

    // line 20
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "
    ";
        // line 22
        $this->loadTemplate("itop-portal-base/portal/templates/helpers/tagset_clic_handler.js.twig", "itop-portal-base/portal/templates/bricks/manage/layout.html.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/manage/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  114 => 21,  110 => 20,  104 => 16,  95 => 13,  89 => 12,  85 => 11,  76 => 10,  72 => 9,  69 => 8,  66 => 7,  62 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/manage/layout.html.twig", "/var/www/html/env-production/itop-portal-base/portal/templates/bricks/manage/layout.html.twig");
    }
}
