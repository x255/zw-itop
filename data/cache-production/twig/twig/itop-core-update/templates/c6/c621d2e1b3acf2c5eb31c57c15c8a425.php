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

/* SelectUpdateFile.ready.js.twig */
class __TwigTemplate_4cb5721b7d809655b74bb5ddc0a7697e extends Template
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
var iDiskFreeSpace = ";
        // line 4
        echo twig_escape_filter($this->env, ($context["iDiskFreeSpace"] ?? null), "html", null, true);
        echo ";

\$.ajax({
    method: \"POST\",
    url: \"";
        // line 8
        echo ($context["sAjaxURL"] ?? null);
        echo "\",
    data: {
        route: \"core_update_ajax.can_update_core\",
        maintenance: true
    },
    dataType: \"json\",
    success: function (data) {
        var oRequirements = \$(\"#header-requirements\");
        var oCanCoreUpdate = \$(\"#can-core-update\");
        oCanCoreUpdate.html(data.sMessage);
        if(data.sMessageDetails){
            \$(\"#header-requirements-details\").removeClass(\"ibo-is-hidden\");
            \$('#can-core-update-details').html(data.sMessageDetails);
            \$(\"#toggle-requirements-details\").click( function() { \$(\"#can-core-update-details\").toggle(); } );
        }
        oRequirements.removeClass(\"ibo-is-information\");
        if (data.bStatus) {
            oRequirements.addClass(\"ibo-is-success\");
            \$(\"#check-update\").prop(\"disabled\", false);
            \$(\"#file\").prop(\"disabled\", false);
            \$(\"#file-container\").removeClass(\"ibo-is-hidden\");
            \$(\"#check-in-progress\").addClass(\"ibo-is-hidden\");
        } else {
            \$(\"#check-update\").prop(\"disabled\", true);
            \$(\"#file\").prop(\"disabled\", true);
            \$('#form-update-outer').slideUp(600);
            oRequirements.addClass(\"ibo-is-failure\");
        }
    }
});

var oGetItopDiskSpace = \$.ajax({
    method: \"POST\",
    url: \"";
        // line 41
        echo ($context["sAjaxURL"] ?? null);
        echo "\",
    data: {
        route: \"core_update_ajax.get_itop_disk_space\",
        maintenance: true
    },
    dataType: \"json\",
    success: function(data)
    {
        var oRequirement = \$(\"#itop-disk-space\");
        oRequirement.html(data.sItopDiskSpace);
    }
});

var oGetDBDiskSpace = \$.ajax({
    method: \"POST\",
    url: \"";
        // line 56
        echo ($context["sAjaxURL"] ?? null);
        echo "\",
    data: {
        route: \"core_update_ajax.get_d_b_disk_space\",
        maintenance: true
    },
    dataType: \"json\",
    success: function(data)
    {
        var oRequirement = \$(\"#db-disk-space\");
        oRequirement.html(data.sDBDiskSpace);
    }
});

\$.when(oGetItopDiskSpace, oGetDBDiskSpace).then(
    function(data1, data2)
    {
        var iItopDiskSpace = data1[0].iItopDiskSpace;
        var iDBDiskSpace = data2[0].iDBDiskSpace;
        if ((2 * (iItopDiskSpace + iDBDiskSpace)) > iDiskFreeSpace)
        {
            \$(\"#dobackup-warning\").removeClass(\"ibo-is-hidden\");
        }
    }
);

\$(\"#file\").on(\"change\", function(e) {
    var selectedFile = \$('#file').get(0).files[0];
    var errorMsg = \$(\"#header-file-size\");
    var submitButton = \$(\"#check-update\");
    if (selectedFile)
    {
        if (selectedFile.size > ";
        // line 87
        echo twig_escape_filter($this->env, ($context["iFileUploadMaxSize"] ?? null), "html", null, true);
        echo ")
        {
            errorMsg.removeClass(\"ibo-is-hidden\");
            submitButton.prop(\"disabled\", true);
            return;
        }
    }
    errorMsg.addClass(\"ibo-is-hidden\");
    submitButton.prop(\"disabled\", false);
});

\$(\"#check-update\").on(\"click\", function(e) {
    \$(\"#submit-wait\").removeClass(\"ibo-is-hidden\");
    \$(this).prop(\"disabled\", true);
    \$(\".ajax-spin\").removeClass(\"fa-sync-alt\").removeClass(\"fa-spin\").addClass(\"fa-times\");
    \$(this).parents('form').submit();
    e.preventDefault();
    e.stopPropagation();
    return false;
});

\$(\"#launch-setup-form\").on(\"submit\", function () {
    return window.confirm(\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SetupLaunchConfirm"), "html", null, true);
        echo "\");
});";
    }

    public function getTemplateName()
    {
        return "SelectUpdateFile.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 109,  135 => 87,  101 => 56,  83 => 41,  47 => 8,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "SelectUpdateFile.ready.js.twig", "/var/www/html/env-production/itop-core-update/templates/SelectUpdateFile.ready.js.twig");
    }
}
