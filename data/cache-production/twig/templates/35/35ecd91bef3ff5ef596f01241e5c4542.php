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

/* application/printable/block-print-header/layout.ready.js.twig */
class __TwigTemplate_29a5220b1f9743a4f7d113d1be16edb1 extends Template
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
        $___internal_parse_1_ = ('' === $tmp = "
var sHiddeableChapters = '<ul role=\"tablist\" class=\"ibo-block-print--tablist\">';
for (sId in oHiddeableChapters)
{
\tsHiddeableChapters += '<li tabindex=\"-1\" role=\"tab\" class=\"ibo-block-print--tab hideable-chapter\" chapter-id=\"'+sId+'\"><span class=\"tab ui-tabs-anchor\">' + oHiddeableChapters[sId] + '</span></li>';
\t//alert(oHiddeableChapters[sId]);
}
sHiddeableChapters += '</ul>';

\$('#hiddeable_chapters').html(sHiddeableChapters);

\$('.hideable-chapter').on('click', function(){
\tvar sChapterId = \$(this).attr('chapter-id');
\t\$('#'+sChapterId).toggle();
\t\$(this).toggleClass('strikethrough');

});

\$('fieldset').each(function() {
\tvar jLegend = \$(this).find('legend');
\tjLegend.remove();
\t\$(this).wrapInner('<span></span>').prepend(jLegend);
});

\$('legend').css('cursor', 'pointer').on('click', function(){
\t\$(this).parent('fieldset').toggleClass('not-printable strikethrough');
});

") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_parse_1_);
    }

    public function getTemplateName()
    {
        return "application/printable/block-print-header/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/printable/block-print-header/layout.ready.js.twig", "/var/www/html/templates/application/printable/block-print-header/layout.ready.js.twig");
    }
}
