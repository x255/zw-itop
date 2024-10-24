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

/* base/layouts/activity-panel/caselog-entry-form/layout.html.twig */
class __TwigTemplate_051d4f8efdead22f423c841a52f5427b extends Template
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
        ob_start(function () { return ''; });
        // line 2
        echo "<form id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 2), "html", null, true);
        echo "\"
      class=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsSubmitAutonomous", [], "method", false, false, false, 3) && (($context["bInitOpened"] ?? null) == false))) {
            echo "ibo-is-closed";
        }
        echo "\"
      data-role=\"ibo-caselog-entry-form\"
      data-object-class=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectClass", [], "method", false, false, false, 5), "html", null, true);
        echo "\"
      data-object-id=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectId", [], "method", false, false, false, 6), "html", null, true);
        echo "\"
      data-attribute-code=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttCode", [], "method", false, false, false, 7), "html", null, true);
        echo "\"
      data-attribute-label=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttLabel", [], "method", false, false, false, 8), "html", null, true);
        echo "\"
      data-attribute-type=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttType", [], "method", false, false, false, 9), "html", null, true);
        echo "\"
      data-input-type=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_constant("cmdbAbstractObject::ENUM_INPUT_TYPE_HTML_EDITOR"), "html", null, true);
        echo "\"
      data-input-id=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTextInput", [], "method", false, false, false, 11), "GetId", [], "method", false, false, false, 11), "html", null, true);
        echo "\"
      data-submit-mode=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubmitMode", [], "method", false, false, false, 12), "html", null, true);
        echo "\"
      method=\"post\">
    <div class=\"ibo-caselog-entry-form--actions\">
        <div class=\"ibo-caselog-entry-form--action-buttons--extra-actions\"
             data-role=\"ibo-caselog-entry-form--action-buttons--extra-actions\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetExtraActionButtons", [], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["TextInputActionButton"]) {
            // line 18
            echo "                ";
            echo $this->env->getFunction('render_block')->getCallable()($context["TextInputActionButton"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TextInputActionButton'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
        <div class=\"ibo-caselog-entry-form--action-buttons--main-actions\" data-role=\"ibo-caselog-entry-form--action-buttons--main-actions\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMainActionButtons", [], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["FormActionButton"]) {
            // line 23
            echo "                ";
            echo $this->env->getFunction('render_block')->getCallable()($context["FormActionButton"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FormActionButton'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </div>
    </div>
    <div class=\"ibo-caselog-entry-form--text-input\" data-role=\"ibo-caselog-entry-form--text-input\">
        ";
        // line 28
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTextInput", [], "method", false, false, false, 28), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
    </div>
    <div class=\"ibo-caselog-entry-form--extra-inputs\" data-role=\"ibo-caselog-entry-form--extra-inputs\">
    </div>
    <div class=\"ibo-caselog-entry-form--lock-indicator ibo-is-hidden\" data-role=\"ibo-caselog-entry-form--lock-indicator\">
        <span class=\"ibo-caselog-entry-form--lock-icon\" data-role=\"ibo-caselog-entry-form--lock-icon\">
            <span class=\"fas fa-lock\"></span>
        </span>
        <span class=\"ibo-caselog-entry-form--lock-message\" data-role=\"ibo-caselog-entry-form--lock-message\"></span>
    </div>
</form>
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_1_);
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/caselog-entry-form/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 1,  126 => 28,  121 => 25,  112 => 23,  108 => 22,  104 => 20,  95 => 18,  91 => 17,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/caselog-entry-form/layout.html.twig", "/var/www/html/templates/base/layouts/activity-panel/caselog-entry-form/layout.html.twig");
    }
}
