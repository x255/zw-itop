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

/* itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig */
class __TwigTemplate_f23ace7756b1039c789c8450e12b3720 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pPageBodyClass' => [$this, 'block_pPageBodyClass'],
            'pMainHeaderTitle' => [$this, 'block_pMainHeaderTitle'],
            'pMainContentHolder' => [$this, 'block_pMainContentHolder'],
            'pUserProfileWrapper' => [$this, 'block_pUserProfileWrapper'],
            'pUserProfilePictureFormContainer' => [$this, 'block_pUserProfilePictureFormContainer'],
            'pUserProfilePreferencesFormContainer' => [$this, 'block_pUserProfilePreferencesFormContainer'],
            'pUserProfilePasswordFormContainer' => [$this, 'block_pUserProfilePasswordFormContainer'],
            'pUserProfileFormButtons' => [$this, 'block_pUserProfileFormButtons'],
            'pPageReadyScripts' => [$this, 'block_pPageReadyScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "itop-portal-base/portal/templates/bricks/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["oContactForm"] = twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "contact", [], "any", false, false, false, 5);
        // line 6
        $context["oPreferencesForm"] = twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "preferences", [], "any", false, false, false, 6);
        // line 7
        $context["oPasswordForm"] = twig_get_attribute($this->env, $this->source, ($context["forms"] ?? null), "password", [], "any", false, false, false, 7);
        // line 3
        $this->parent = $this->loadTemplate("itop-portal-base/portal/templates/bricks/layout.html.twig", "itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_pPageBodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("pPageBodyClass", $context, $blocks);
        echo " page_user-profile_brick";
    }

    // line 11
    public function block_pMainHeaderTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetTitle", [], "method", false, false, false, 12)), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_pMainContentHolder($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t";
        if (($context["bDemoMode"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"alert alert-warning\">
\t\t\t<span class=\"fas fa-info fa-2x\" style=\"margin-right: 10px; vertical-align: sub;\"></span>
\t\t\tUser profile edition is not available in demo mode.
\t\t</div>
\t";
        }
        // line 22
        echo "
\t<div id=\"user-profile-wrapper\">
\t\t";
        // line 24
        $this->displayBlock('pUserProfileWrapper', $context, $blocks);
        // line 144
        echo "\t</div>
";
    }

    // line 24
    public function block_pUserProfileWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:PersonalInformations:Title"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<form id=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "\" class=\"\" method=\"POST\" action=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "renderer", [], "any", false, false, false, 32), "GetEndpoint", [], "method", false, false, false, 32);
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"transaction_id\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "transaction_id", [], "any", false, false, false, 33), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form_fields\">
\t\t\t\t\t\t\t\t\t";
        // line 40
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "renderer", [], "any", false, false, false, 40), "GetBaseLayout", [], "method", false, false, false, 40);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetShowPictureForm", [], "method", false, false, false, 47)) {
            // line 48
            echo "\t\t\t\t\t\t";
            $this->displayBlock('pUserProfilePictureFormContainer', $context, $blocks);
            // line 83
            echo "\t\t\t\t\t";
        }
        // line 84
        echo "
            \t\t";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetShowPreferencesForm", [], "method", false, false, false, 85)) {
            // line 86
            echo "\t\t\t\t\t\t";
            $this->displayBlock('pUserProfilePreferencesFormContainer', $context, $blocks);
            // line 105
            echo "\t\t\t\t\t";
        }
        // line 106
        echo "
\t\t\t\t\t";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["oBrick"] ?? null), "GetShowPasswordForm", [], "method", false, false, false, 107)) {
            // line 108
            echo "\t\t\t\t\t\t";
            $this->displayBlock('pUserProfilePasswordFormContainer', $context, $blocks);
            // line 131
            echo "\t\t\t\t\t";
        }
        // line 132
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form_buttons\">
\t\t\t\t";
        // line 135
        $this->displayBlock('pUserProfileFormButtons', $context, $blocks);
        // line 142
        echo "\t\t\t</div>
\t\t";
    }

    // line 48
    public function block_pUserProfilePictureFormContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "\t\t\t\t\t\t\t<div class=\"panel panel-default user_profile_picture\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Photo:Title"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" style=\"position: relative;\">
\t\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form id=\"picture-form\" method=\"POST\" action=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["app"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["url_generator"] ?? null) : null), "generate", [0 => "p_user_profile_brick"], "method", false, false, false, 59), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"current_values[form_type]\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_constant("\\Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController::ENUM_FORM_TYPE_PICTURE"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"operation\" value=\"submit\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"preview\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["sUserPhotoUrl"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t\t<span type=\"button\" class=\"btn btn-default btn_edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fas fa-pencil-alt fa-fw\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"picture\" type=\"file\" name=\"picture\" />
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 86
    public function block_pUserProfilePreferencesFormContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Class:appUserPreferences/Attribute:preferences"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<form id=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "id", [], "any", false, false, false, 92), "html", null, true);
        echo "\" class=\"\" method=\"POST\" action=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "renderer", [], "any", false, false, false, 92), "GetEndpoint", [], "method", false, false, false, 92);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form_fields\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 99
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "renderer", [], "any", false, false, false, 99), "GetBaseLayout", [], "method", false, false, false, 99);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 108
    public function block_pUserProfilePasswordFormContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Brick:Portal:UserProfile:Password:Title"), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
        // line 114
        if ( !(null === ($context["oPasswordForm"] ?? null))) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t<form id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "id", [], "any", false, false, false, 115), "html", null, true);
            echo "\" class=\"\" method=\"POST\" action=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "renderer", [], "any", false, false, false, 115), "GetEndpoint", [], "method", false, false, false, 115);
            echo "\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form_alerts\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-success\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-error alert-danger\" role=\"alert\" style=\"display: none;\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form_fields\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 122
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "renderer", [], "any", false, false, false, 122), "GetBaseLayout", [], "method", false, false, false, 122);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("Brick:Portal:UserProfile:Password:CantChangeContactAdministrator", twig_constant("ITOP_APPLICATION_SHORT")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
    }

    // line 135
    public function block_pUserProfileFormButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "\t\t\t\t\t<div class=\"form_btn_regular\">
\t\t\t\t\t\t";
        // line 137
        if ((($context["sFormMode"] ?? null) == twig_constant("\\Combodo\\iTop\\Portal\\Helper\\ObjectFormHandlerHelper::ENUM_MODE_EDIT"))) {
            // line 138
            echo "\t\t\t\t\t\t\t<input class=\"btn btn-primary form_btn_submit\" type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("Portal:Button:Submit"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 147
    public function block_pPageReadyScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "\t";
        $this->displayParentBlock("pPageReadyScripts", $context, $blocks);
        echo "

\t// Personal informations form
\tvar oContactFormFieldSet = \$('#";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "id", [], "any", false, false, false, 151), "html", null, true);
        echo " > .form_fields').field_set(";
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "fieldset", [], "any", false, false, false, 151));
        echo ");
\t\$('#";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "id", [], "any", false, false, false, 152), "html", null, true);
        echo "').portal_form_handler({
\t\tformmanager_class: \"";
        // line 153
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "formmanager_class", [], "any", false, false, false, 153), "js"), "html", null, true);
        echo "\",
\t\tformmanager_data: ";
        // line 154
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "formmanager_data", [], "any", false, false, false, 154));
        echo ",
\t\tfield_set: oContactFormFieldSet,
\t\tendpoint: \"";
        // line 156
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "renderer", [], "any", false, false, false, 156), "GetEndpoint", [], "method", false, false, false, 156);
        echo "\"
\t});

\t// Preferences form
\tvar oPreferencesFormFieldSet = \$('#";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "id", [], "any", false, false, false, 160), "html", null, true);
        echo " > .form_fields').field_set(";
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "fieldset", [], "any", false, false, false, 160));
        echo ");
\t\$('#";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "id", [], "any", false, false, false, 161), "html", null, true);
        echo "').portal_form_handler({
\t\tformmanager_class: \"";
        // line 162
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "formmanager_class", [], "any", false, false, false, 162), "js"), "html", null, true);
        echo "\",
\t\tformmanager_data: ";
        // line 163
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "formmanager_data", [], "any", false, false, false, 163));
        echo ",
\t\tfield_set: oPreferencesFormFieldSet,
\t\tendpoint: \"";
        // line 165
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "renderer", [], "any", false, false, false, 165), "GetEndpoint", [], "method", false, false, false, 165);
        echo "\"
\t});

\t";
        // line 168
        if ( !(null === ($context["oPasswordForm"] ?? null))) {
            // line 169
            echo "\t\t// Password form
\t\tvar oPasswordFormFieldSet = \$('#";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "id", [], "any", false, false, false, 170), "html", null, true);
            echo " > .form_fields').field_set(";
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "fieldset", [], "any", false, false, false, 170));
            echo ");
\t\t\$('#";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "id", [], "any", false, false, false, 171), "html", null, true);
            echo "').portal_form_handler({
\t\t\tformmanager_class: \"";
            // line 172
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "formmanager_class", [], "any", false, false, false, 172), "js"), "html", null, true);
            echo "\",
\t\t\tformmanager_data: ";
            // line 173
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "formmanager_data", [], "any", false, false, false, 173));
            echo ",
\t\t\tfield_set: oPasswordFormFieldSet,
\t\t\tendpoint: \"";
            // line 175
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "renderer", [], "any", false, false, false, 175), "GetEndpoint", [], "method", false, false, false, 175);
            echo "\"
\t\t});
\t";
        }
        // line 178
        echo "
\t// Picture form
\t// - JQuery upload widget
\t\$('#picture-form #picture').fileupload({
\t\tdataType: 'json',
\t\tacceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
\t\tdisableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent)
\t})
\t.on('fileuploadsend', function(oEvent, oData){
\t\t\$('.user_profile_picture .form_alerts .alert-error').hide()
\t\t\$('#page_overlay .overlay_content .content_loader').clone().prependTo('.user_profile_picture .panel-body');
\t})
\t.on('fileuploadalways', function(oEvent, oData){
\t\t\$('.user_profile_picture .content_loader').remove();
\t})
\t.on('fileuploaddone', function(oEvent, oData){
\t\tif( (oData._response.result.form !== undefined) && (oData._response.result.form.validation.valid === true) )
\t\t{
\t\t\t// Retrieving picture url
\t\t\tvar sPictureUrl = oData._response.result.form.picture_url;
\t\t\t// Replacing form preview image
\t\t\t\$('#picture-form .preview img').attr('src', sPictureUrl);
\t\t\t// Replacing menu image
\t\t\t\$('#topbar .user_photo, #sidebar .user_photo').css('background-image', 'url(\"' + sPictureUrl + '\")');
\t\t}
\t})
\t.on('fileuploadfail', function(oEvent, oData){
\t\tif( (oData._response.jqXHR.responseJSON !== undefined) && (oData._response.jqXHR.responseJSON.error_message !== undefined) )
\t\t{
\t\t\t\$('.user_profile_picture .form_alerts .alert-error').show().text(oData._response.jqXHR.responseJSON.error_message);
\t\t}
\t});
\t// - Undo button
\t/*\$('#user-profile-wrapper .actions .btn_undo').on('click', function(oEvent){
\t\t//console.log('Picture undo trigger');
\t});*/
\t// - Reset button
\t\$('#user-profile-wrapper .actions .btn_reset').on('click', function(oEvent){
\t\t//console.log('Picture reset trigger');
\t});

\t// Submit button
\t\$('#user-profile-wrapper .form_buttons .form_btn_submit').off('click').on('click', function(oEvent){
\t\toEvent.preventDefault();

\t\t// Resetting feedback
\t\t\$('#user-profile-wrapper .form_alerts .alert').hide();
\t\t\$('#user-profile-wrapper .form_alerts .alert > p').remove();
\t\t\$('#user-profile-wrapper .form_field').removeClass('has-error');
\t\t\$('#user-profile-wrapper .form_field .help-block > p').remove();

\t\t// Submiting contact form through AJAX
        \$('#";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oContactForm"] ?? null), "id", [], "any", false, false, false, 230), "html", null, true);
        echo "').portal_form_handler('submit', oEvent);

\t\t// Submiting preferences form through AJAX
        \$('#";
        // line 233
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPreferencesForm"] ?? null), "id", [], "any", false, false, false, 233), "html", null, true);
        echo "').portal_form_handler('submit', oEvent);

\t\t";
        // line 235
        if ( !(null === ($context["oPasswordForm"] ?? null))) {
            // line 236
            echo "\t\t\t// Submiting password form through AJAX
\t\t\t// Only if fields are filled
\t\t\t\$('#";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "id", [], "any", false, false, false, 238), "html", null, true);
            echo " :password').each(function(iIndex, oElem){
\t\t\t\tif(\$(oElem).val() !== '')
\t\t\t\t{
\t\t\t\t\t\$('#";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oPasswordForm"] ?? null), "id", [], "any", false, false, false, 241), "html", null, true);
            echo "').portal_form_handler('submit', oEvent);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t";
        }
        // line 246
        echo "\t});
";
    }

    public function getTemplateName()
    {
        return "itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 246,  511 => 241,  505 => 238,  501 => 236,  499 => 235,  494 => 233,  488 => 230,  434 => 178,  428 => 175,  423 => 173,  419 => 172,  415 => 171,  409 => 170,  406 => 169,  404 => 168,  398 => 165,  393 => 163,  389 => 162,  385 => 161,  379 => 160,  372 => 156,  367 => 154,  363 => 153,  359 => 152,  353 => 151,  346 => 148,  342 => 147,  337 => 140,  331 => 138,  329 => 137,  326 => 136,  322 => 135,  316 => 128,  310 => 126,  303 => 122,  290 => 115,  288 => 114,  282 => 111,  278 => 109,  274 => 108,  264 => 99,  252 => 92,  246 => 89,  242 => 87,  238 => 86,  229 => 77,  219 => 64,  212 => 60,  208 => 59,  197 => 51,  193 => 49,  189 => 48,  184 => 142,  182 => 135,  177 => 132,  174 => 131,  171 => 108,  169 => 107,  166 => 106,  163 => 105,  160 => 86,  158 => 85,  155 => 84,  152 => 83,  149 => 48,  147 => 47,  137 => 40,  127 => 33,  121 => 32,  115 => 29,  109 => 25,  105 => 24,  100 => 144,  98 => 24,  94 => 22,  87 => 17,  84 => 16,  80 => 15,  73 => 12,  69 => 11,  61 => 9,  56 => 3,  54 => 7,  52 => 6,  50 => 5,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig", "/var/www/html/env-production/itop-portal-base/portal/templates/bricks/user-profile/layout.html.twig");
    }
}
