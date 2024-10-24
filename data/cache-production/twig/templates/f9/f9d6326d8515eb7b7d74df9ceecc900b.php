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

/* application/printable/block-print-header/layout.html.twig */
class __TwigTemplate_a6abf0a471c9254a769135dc277cbb7f extends Template
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
\t<div class=\"explain-printable not-printable\">
\t\t<p>";
        // line 6
        echo $this->env->getFilter('dict_format')->getCallable()("UI:ExplainPrintable", "<i class=\"fas fa-eye\"></i>");
        echo "</p>
\t\t<div id=\"hiddeable_chapters\"></div>
\t\t<button class=\"ibo-button ibo-is-regular ibo-is-primary action\" onclick=\"window.print()\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:GoPrint"), "html", null, true);
        echo "</button>&#160;&#160;
\t\t<button class=\"ibo-button ibo-is-regular ibo-is-secondary cancel\" onclick=\"window.close()\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Button:Cancel"), "html", null, true);
        echo "</button>&#160;&#160;

\t\t<select name=\"text\" onchange='\$(\".printable-content\").width(this.value);'>
\t\t\t<option value='100%'>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:PrintResolution:FullSize"), "html", null, true);
        echo "</option>
\t\t\t<option value='19cm'>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:PrintResolution:A4Portrait"), "html", null, true);
        echo "</option>
\t\t\t<option value='27.7cm' selected>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:PrintResolution:A4Landscape"), "html", null, true);
        echo "</option>
\t\t\t<option value='19.6cm'>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:PrintResolution:LetterPortrait"), "html", null, true);
        echo "</option>
\t\t\t<option value='25.9cm'>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:PrintResolution:LetterLandscape"), "html", null, true);
        echo "</option>
\t\t</select>

\t</div>

";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_2_);
    }

    public function getTemplateName()
    {
        return "application/printable/block-print-header/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 3,  74 => 16,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  52 => 9,  48 => 8,  43 => 6,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/printable/block-print-header/layout.html.twig", "/var/www/html/templates/application/printable/block-print-header/layout.html.twig");
    }
}
