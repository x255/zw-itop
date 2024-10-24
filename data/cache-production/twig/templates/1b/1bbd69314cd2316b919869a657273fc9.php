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

/* application/links/indirect/block-object-picker-dialog/layout.ready.js.twig */
class __TwigTemplate_6bb9dee3290aae415852f116d2988e25 extends Template
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
        echo "
\$('#dlg_";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 5), "GetLinkedSetId", [], "method", false, false, false, 5), "html", null, true);
        echo "').dialog({
    width: \$(window).width()*0.8,
    height: \$(window).height()*0.8,
    title:\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("UI:AddObjectsOf_Class_LinkedWith_Class", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 8), "GetLinkedClass", [], "method", false, false, false, 8), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 8), "GetClass", [], "method", false, false, false, 8)), "html", null, true);
        echo "\" ,
    autoOpen: false,
    modal: true,
    resizeStop: oWidget";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 11), "GetInputId", [], "method", false, false, false, 11), "html", null, true);
        echo ".UpdateSizes,
    buttons: [
        { 
            text: \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Cancel"), "html", null, true);
        echo "\",
            class: \"ibo-is-alternative ibo-is-neutral\",
            click: function() {
                \$(this).dialog('close');
            } 
        },
        { 
            text:  \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Add"), "html", null, true);
        echo "\",
            class: \"ibo-is-regular ibo-is-primary\",
            id: \"btn_ok_";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 23), "GetLinkedSetId", [], "method", false, false, false, 23), "html", null, true);
        echo "\",
            click: function() {
                return oWidget";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 25), "GetInputId", [], "method", false, false, false, 25), "html", null, true);
        echo ".DoAddObjects();
            } 
        },
    ],

});

\$('#SearchFormToAdd_";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 32), "GetLinkedSetId", [], "method", false, false, false, 32), "html", null, true);
        echo " form').bind('submit.uilinksWizard', oWidget";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 32), "GetInputId", [], "method", false, false, false, 32), "html", null, true);
        echo ".SearchObjectsToAdd);
\$('#SearchFormToAdd_";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 33), "GetLinkedSetId", [], "method", false, false, false, 33), "html", null, true);
        echo "').resize(oWidget";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 33), "GetInputId", [], "method", false, false, false, 33), "html", null, true);
        echo ".UpdateSizes);

";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "application/links/indirect/block-object-picker-dialog/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 3,  96 => 33,  90 => 32,  80 => 25,  75 => 23,  70 => 21,  60 => 14,  54 => 11,  48 => 8,  42 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/links/indirect/block-object-picker-dialog/layout.ready.js.twig", "/var/www/html/templates/application/links/indirect/block-object-picker-dialog/layout.ready.js.twig");
    }
}
