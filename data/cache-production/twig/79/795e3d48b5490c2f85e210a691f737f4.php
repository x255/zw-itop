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

/* templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig */
class __TwigTemplate_e28cdb67d218a2a83a90a7c718689a96 extends Template
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
        echo "\$('#welcome_popup').dialog( { width:'60%', height: 'auto', title: '";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:WelcomeMenu:Title"), "html", null, true);
        echo "', autoOpen: true, modal:true,
    close: function() {
        var bDisplay = \$('#display_welcome_popup:checked').length;
        SetUserPreference('welcome_popup', bDisplay, true);
    },
    buttons: [{
        text: \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Ok"), "html", null, true);
        echo "\", click: function() {
            \$(this).dialog( \"close\" ); \$(this).remove();
        }}],
});
if (\$('#welcome_popup').height() > (\$(window).height()-70))
{
    \$('#welcome_popup').height(\$(window).height()-70);
}
";
    }

    public function getTemplateName()
    {
        return "templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig", "/var/www/html/templates/pages/backoffice/welcome_popup/welcome_popup.ready.js.twig");
    }
}
