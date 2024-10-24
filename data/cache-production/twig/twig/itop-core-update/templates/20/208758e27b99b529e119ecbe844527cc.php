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

/* SelectUpdateFile.html.twig */
class __TwigTemplate_483732291222649bae37fe54ebb5c7a2 extends Template
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
";
        // line 5
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-update-core"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694e621880231835 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694e621880231835, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694e621880231835, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694e621880231835);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694e621880231835);
        ob_start();
        // line 6
        echo "
    ";
        // line 7
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sTitle" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:PageTitle")];
        if (!isset($aParams['sTitle'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sTitle for UITitle at line 7');
        }
        $sTitle = $aParams['sTitle'];
        $sId = $aParams['sId'] ?? NULL;
        $oTitle_6718a6694e6ad158316475 = Combodo\iTop\Application\UI\Base\Component\Title\TitleUIBlockFactory::MakeForPage(        $sTitle        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oTitle_6718a6694e6ad158316475, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oTitle_6718a6694e6ad158316475, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oTitle_6718a6694e6ad158316475);
        array_push($context['UIBlockParent'], $oTitle_6718a6694e6ad158316475);
        ob_start();
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 8
        echo "
    <div class=\"ibo-v-spacer\">&nbsp;</div>

    ";
        // line 11
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "display_block", 1 => "display-files"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694e734648687818 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694e734648687818, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694e734648687818, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694e734648687818);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694e734648687818);
        ob_start();
        // line 12
        echo "        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:Status")];
        if (!isset($aParams['sLegend'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 12');
        }
        $sLegend = $aParams['sLegend'];
        $sId = $aParams['sId'] ?? NULL;
        $oFieldSet_6718a6694e778835037008 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(        $sLegend        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFieldSet_6718a6694e778835037008, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFieldSet_6718a6694e778835037008, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFieldSet_6718a6694e778835037008);
        array_push($context['UIBlockParent'], $oFieldSet_6718a6694e778835037008);
        ob_start();
        // line 13
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "header-requirements", "IsCollapsible" => false, "IsClosable" => false];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_6718a6694e7c9709109344 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_6718a6694e7c9709109344, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_6718a6694e7c9709109344, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_6718a6694e7c9709109344);
        array_push($context['UIBlockParent'], $oAlert_6718a6694e7c9709109344);
        ob_start();
        // line 14
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-update-core-header-requirements"], "sId" => "can-core-update"];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694e822760031456 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694e822760031456, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694e822760031456, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694e822760031456);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694e822760031456);
        ob_start();
        // line 15
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CanCoreUpdate:Loading"), "html", null, true);
        echo "
                    ";
        // line 16
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_6718a6694e88c265217703 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_6718a6694e88c265217703, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_6718a6694e88c265217703, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_6718a6694e88c265217703);
        ob_start();
        // line 17
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 18
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "header-requirements-details", "sTitle" => $this->env->getFilter('dict_s')->getCallable()("UI:Details+"), "IsCollapsible" => true, "IsClosable" => false, "AddCSSClass" => "ibo-is-hidden"];
        if (!isset($aParams['sTitle'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sTitle for UICollapsibleSection at line 18');
        }
        $sTitle = $aParams['sTitle'];
        $sId = $aParams['sId'] ?? NULL;
        $oCollapsibleSection_6718a6694e8fc238231295 = Combodo\iTop\Application\UI\Base\Component\CollapsibleSection\CollapsibleSectionUIBlockFactory::MakeStandard(        $sTitle        ,         $sId        );
        $aSetters = ['OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oCollapsibleSection_6718a6694e8fc238231295, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oCollapsibleSection_6718a6694e8fc238231295, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oCollapsibleSection_6718a6694e8fc238231295);
        array_push($context['UIBlockParent'], $oCollapsibleSection_6718a6694e8fc238231295);
        ob_start();
        // line 19
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-update-core-header-requirements"], "sId" => "can-core-update-details"];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694e958164327316 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694e958164327316, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694e958164327316, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694e958164327316);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694e958164327316);
        ob_start();
        // line 20
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 21
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 22
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 23
        echo "
            ";
        // line 24
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CurrentVersion")];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $sDescription = $aParams['sDescription'] ?? '';
        $oField_6718a6694e9d4867689534 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        ,         $sDescription        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_6718a6694e9d4867689534, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_6718a6694e9d4867689534, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_6718a6694e9d4867689534);
        array_push($context['UIBlockParent'], $oField_6718a6694e9d4867689534);
        ob_start();
        // line 25
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("UI:iTopVersion:Long", twig_constant("ITOP_APPLICATION"), twig_constant("ITOP_VERSION"), twig_constant("ITOP_REVISION"), twig_constant("ITOP_BUILD_DATE")), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 27
        echo "
            ";
        // line 28
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DiskFreeSpace")];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $sDescription = $aParams['sDescription'] ?? '';
        $oField_6718a6694eaac479259070 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        ,         $sDescription        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_6718a6694eaac479259070, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_6718a6694eaac479259070, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_6718a6694eaac479259070);
        array_push($context['UIBlockParent'], $oField_6718a6694eaac479259070);
        ob_start();
        // line 29
        echo "                ";
        echo twig_escape_filter($this->env, ($context["sDiskFreeSpace"] ?? null), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 31
        echo "
            ";
        // line 32
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:ItopDiskSpace"), "ValueId" => "itop-disk-space"];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $sDescription = $aParams['sDescription'] ?? '';
        $oField_6718a6694eb32761953743 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        ,         $sDescription        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_6718a6694eb32761953743, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_6718a6694eb32761953743, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_6718a6694eb32761953743);
        array_push($context['UIBlockParent'], $oField_6718a6694eb32761953743);
        ob_start();
        // line 33
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_6718a6694eba5194696788 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_6718a6694eba5194696788, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_6718a6694eba5194696788, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_6718a6694eba5194696788);
        ob_start();
        // line 34
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 35
        echo "
            ";
        // line 36
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DBDiskSpace"), "ValueId" => "db-disk-space"];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $sDescription = $aParams['sDescription'] ?? '';
        $oField_6718a6694ebe9331545528 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        ,         $sDescription        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_6718a6694ebe9331545528, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_6718a6694ebe9331545528, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_6718a6694ebe9331545528);
        array_push($context['UIBlockParent'], $oField_6718a6694ebe9331545528);
        ob_start();
        // line 37
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_6718a6694ec42356202769 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_6718a6694ec42356202769, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_6718a6694ec42356202769, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_6718a6694ec42356202769);
        ob_start();
        // line 38
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 39
        echo "
            ";
        // line 40
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:FileUploadMaxSize")];
        $sLabel = $aParams['sLabel'] ?? '';
        $sLayout = $aParams['sLayout'] ?? 'small';
        $sId = $aParams['sId'] ?? NULL;
        $sDescription = $aParams['sDescription'] ?? '';
        $oField_6718a6694ec7e956438431 = Combodo\iTop\Application\UI\Base\Component\Field\FieldUIBlockFactory::MakeStandard(        $sLabel        ,         $sLayout        ,         $sId        ,         $sDescription        );
        $aSetters = ['Layout','AttCode','AttType','AttLabel','IsReadOnly','IsMandatory','MustChange','MustPrompt','IsSlave','ValueRaw','Label','Value','Comments','ValueId','InputId','InputType','Description','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oField_6718a6694ec7e956438431, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oField_6718a6694ec7e956438431, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oField_6718a6694ec7e956438431);
        array_push($context['UIBlockParent'], $oField_6718a6694ec7e956438431);
        ob_start();
        // line 41
        echo "                ";
        echo twig_escape_filter($this->env, ($context["sFileUploadMaxSize"] ?? null), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 43
        echo "
        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 45
        echo "
        ";
        // line 46
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SelectUpdateFile"), "sId" => "form-update-outer"];
        if (!isset($aParams['sLegend'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 46');
        }
        $sLegend = $aParams['sLegend'];
        $sId = $aParams['sId'] ?? NULL;
        $oFieldSet_6718a6694ed14746116069 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(        $sLegend        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFieldSet_6718a6694ed14746116069, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFieldSet_6718a6694ed14746116069, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFieldSet_6718a6694ed14746116069);
        array_push($context['UIBlockParent'], $oFieldSet_6718a6694ed14746116069);
        ob_start();
        // line 47
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = [];
        $sId = $aParams['sId'] ?? NULL;
        $oForm_6718a6694ed5f436152047 = Combodo\iTop\Application\UI\Base\Component\Form\FormUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['OnSubmitJsCode','Action','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oForm_6718a6694ed5f436152047, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oForm_6718a6694ed5f436152047, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oForm_6718a6694ed5f436152047);
        array_push($context['UIBlockParent'], $oForm_6718a6694ed5f436152047);
        ob_start();
        // line 48
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sName" => "route", "sValue" => "core_update.confirm_update"];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 48');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 48');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_6718a6694ed93694004271 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeForHidden(        $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_6718a6694ed93694004271, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_6718a6694ed93694004271, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_6718a6694ed93694004271);
        ob_start();
        // line 49
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sName" => "transaction_id", "sValue" => ($context["sTransactionId"] ?? null)];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 49');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 49');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_6718a6694edfc261887999 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeForHidden(        $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_6718a6694edfc261887999, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_6718a6694edfc261887999, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_6718a6694edfc261887999);
        ob_start();
        // line 50
        echo "
                ";
        // line 51
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "header-file-size", "IsHidden" => true];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_6718a6694ee53601846864 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForFailure(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_6718a6694ee53601846864, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_6718a6694ee53601846864, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_6718a6694ee53601846864);
        array_push($context['UIBlockParent'], $oAlert_6718a6694ee53601846864);
        ob_start();
        // line 52
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-file-size-error"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694ee9d791114981 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694ee9d791114981, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694ee9d791114981, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694ee9d791114981);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694ee9d791114981);
        ob_start();
        // line 53
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:Error:FileUploadMaxSizeTooSmall"), "html", null, true);
        echo "
                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 55
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-file-size-error"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694ef15779458875 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694ef15779458875, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694ef15779458875, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694ef15779458875);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694ef15779458875);
        ob_start();
        // line 56
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("iTopUpdate:UI:PostMaxSize", ($context["sPostMaxSize"] ?? null)), "html", null, true);
        echo "
                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 58
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-file-size-error"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694ef85541767259 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694ef85541767259, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694ef85541767259, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694ef85541767259);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694ef85541767259);
        ob_start();
        // line 59
        echo "                        ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_format')->getCallable()("iTopUpdate:UI:UploadMaxFileSize", ($context["sUploadMaxSize"] ?? null)), "html", null, true);
        echo "
                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 61
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 62
        echo "
            ";
        // line 63
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "check-in-progress", "IsHidden" => false];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_6718a6694f000300585068 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForInformation(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_6718a6694f000300585068, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_6718a6694f000300585068, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_6718a6694f000300585068);
        array_push($context['UIBlockParent'], $oAlert_6718a6694f000300585068);
        ob_start();
        // line 64
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CheckInProgress"), "html", null, true);
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 66
        echo "
                ";
        // line 67
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sName" => "file", "sId" => "file", "AddCSSClass" => "ibo-is-hidden"];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIFileSelect at line 67');
        }
        $sName = $aParams['sName'];
        $sId = $aParams['sId'] ?? NULL;
        $oFileSelect_6718a6694f076327620514 = Combodo\iTop\Application\UI\Base\Component\Input\FileSelect\FileSelectUIBlockFactory::MakeStandard(        $sName        ,         $sId        );
        $aSetters = ['FileName','ButtonText','ShowFilename','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFileSelect_6718a6694f076327620514, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFileSelect_6718a6694f076327620514, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFileSelect_6718a6694f076327620514);
        ob_start();
        // line 68
        echo "
                ";
        // line 69
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "dobackup-warning", "IsHidden" => true];
        $sTitle = $aParams['sTitle'] ?? '';
        $sContent = $aParams['sContent'] ?? '';
        $sId = $aParams['sId'] ?? NULL;
        $oAlert_6718a6694f0c4642001959 = Combodo\iTop\Application\UI\Base\Component\Alert\AlertUIBlockFactory::MakeForWarning(        $sTitle        ,         $sContent        ,         $sId        );
        $aSetters = ['Title','Content','Color','IsClosable','IsCollapsible','OpenedByDefault','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oAlert_6718a6694f0c4642001959, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oAlert_6718a6694f0c4642001959, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oAlert_6718a6694f0c4642001959);
        array_push($context['UIBlockParent'], $oAlert_6718a6694f0c4642001959);
        ob_start();
        // line 70
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DoBackup:Warning"), "html", null, true);
        echo "
                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 72
        echo "
                ";
        // line 73
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-font-ral-nor-150"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694f144520759919 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694f144520759919, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694f144520759919, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694f144520759919);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694f144520759919);
        ob_start();
        // line 74
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sType" => "checkbox", "sId" => "doBackup", "sName" => "doBackup", "sValue" => "1", "IsChecked" => true, "CSSClasses" => [0 => "ibo-input-checkbox", 1 => "ibo-input--label-left"], "Label" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DoBackup:Label")];
        if (!isset($aParams['sType'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sType for UIInput at line 74');
        }
        $sType = $aParams['sType'];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 74');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 74');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_6718a6694f18e034058590 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeStandard(        $sType        ,         $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_6718a6694f18e034058590, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_6718a6694f18e034058590, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_6718a6694f18e034058590);
        ob_start();
        // line 75
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 76
        echo "
                ";
        // line 77
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo-font-ral-nor-150"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694f229326764676 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694f229326764676, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694f229326764676, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694f229326764676);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694f229326764676);
        ob_start();
        // line 78
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sType" => "checkbox", "sId" => "doFilesArchive", "sName" => "doFilesArchive", "sValue" => "1", "IsChecked" => true, "CSSClasses" => [0 => "ibo-input-checkbox", 1 => "ibo-input--label-left"], "Label" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:DoFilesArchive")];
        if (!isset($aParams['sType'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sType for UIInput at line 78');
        }
        $sType = $aParams['sType'];
        if (!isset($aParams['sName'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sName for UIInput at line 78');
        }
        $sName = $aParams['sName'];
        if (!isset($aParams['sValue'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sValue for UIInput at line 78');
        }
        $sValue = $aParams['sValue'];
        $sId = $aParams['sId'] ?? NULL;
        $oInput_6718a6694f26d912316164 = Combodo\iTop\Application\UI\Base\Component\Input\InputUIBlockFactory::MakeStandard(        $sType        ,         $sName        ,         $sValue        ,         $sId        );
        $aSetters = ['Type','IsChecked','IsDisabled','IsReadonly','Label','Name','Value','Placeholder','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oInput_6718a6694f26d912316164, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oInput_6718a6694f26d912316164, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oInput_6718a6694f26d912316164);
        ob_start();
        // line 79
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 80
        echo "
                ";
        // line 81
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["aContainerClasses" => [0 => "ibo_check_update_submit"]];
        $sId = $aParams['sId'] ?? NULL;
        $aContainerClasses = $aParams['aContainerClasses'] ?? array (
);
        $oUIContentBlock_6718a6694f2f1395931705 = Combodo\iTop\Application\UI\Base\Layout\UIContentBlockUIBlockFactory::MakeStandard(        $sId        ,         $aContainerClasses        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oUIContentBlock_6718a6694f2f1395931705, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oUIContentBlock_6718a6694f2f1395931705, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oUIContentBlock_6718a6694f2f1395931705);
        array_push($context['UIBlockParent'], $oUIContentBlock_6718a6694f2f1395931705);
        ob_start();
        // line 82
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:CheckUpdate"), "sId" => "check-update", "bIsSubmit" => true, "IsDisabled" => true];
        if (!isset($aParams['sLabel'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLabel for UIButton at line 82');
        }
        $sLabel = $aParams['sLabel'];
        $sName = $aParams['sName'] ?? NULL;
        $sValue = $aParams['sValue'] ?? NULL;
        $bIsSubmit = $aParams['bIsSubmit'] ?? false;
        $sId = $aParams['sId'] ?? NULL;
        $oButton_6718a6694f338873148442 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeForPrimaryAction(        $sLabel        ,         $sName        ,         $sValue        ,         $bIsSubmit        ,         $sId        );
        $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oButton_6718a6694f338873148442, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oButton_6718a6694f338873148442, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oButton_6718a6694f338873148442);
        ob_start();
        // line 83
        echo "                    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sId" => "submit-wait", "IsHidden" => true];
        $sId = $aParams['sId'] ?? NULL;
        $oSpinner_6718a6694f39f968894834 = Combodo\iTop\Application\UI\Base\Component\Spinner\SpinnerUIBlockFactory::MakeStandard(        $sId        );
        $aSetters = ['Description','Size','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oSpinner_6718a6694f39f968894834, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oSpinner_6718a6694f39f968894834, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oSpinner_6718a6694f39f968894834);
        ob_start();
        // line 84
        echo "                ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 85
        echo "
            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 87
        echo "
        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 89
        echo "
    ";
        // line 90
        if (($context["bIsSetupLaunchButtonEnabled"] ?? null)) {
            // line 91
            echo "        ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:Setup")];
            if (!isset($aParams['sLegend'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 91');
            }
            $sLegend = $aParams['sLegend'];
            $sId = $aParams['sId'] ?? NULL;
            $oFieldSet_6718a6694f411493476304 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(            $sLegend            ,             $sId            );
            $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oFieldSet_6718a6694f411493476304, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oFieldSet_6718a6694f411493476304, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oFieldSet_6718a6694f411493476304);
            array_push($context['UIBlockParent'], $oFieldSet_6718a6694f411493476304);
            ob_start();
            // line 92
            echo "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sId" => "launch-setup-form", "Action" => ($context["sLaunchSetupUrl"] ?? null)];
            $sId = $aParams['sId'] ?? NULL;
            $oForm_6718a6694f457064942862 = Combodo\iTop\Application\UI\Base\Component\Form\FormUIBlockFactory::MakeStandard(            $sId            );
            $aSetters = ['OnSubmitJsCode','Action','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oForm_6718a6694f457064942862, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oForm_6718a6694f457064942862, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oForm_6718a6694f457064942862);
            array_push($context['UIBlockParent'], $oForm_6718a6694f457064942862);
            ob_start();
            // line 93
            echo "                ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            $aParams = ["sLabel" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:SetupLaunch"), "sName" => "launch-setup", "sValue" => "launch-setup", "bIsSubmit" => true, "sId" => "launch-setup"];
            if (!isset($aParams['sLabel'])) {
                throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLabel for UIButton at line 93');
            }
            $sLabel = $aParams['sLabel'];
            $sName = $aParams['sName'] ?? NULL;
            $sValue = $aParams['sValue'] ?? NULL;
            $bIsSubmit = $aParams['bIsSubmit'] ?? false;
            $sId = $aParams['sId'] ?? NULL;
            $oButton_6718a6694f4a4577412517 = Combodo\iTop\Application\UI\Base\Component\Button\ButtonUIBlockFactory::MakeForDestructiveAction(            $sLabel            ,             $sName            ,             $sValue            ,             $bIsSubmit            ,             $sId            );
            $aSetters = ['Label','Tooltip','IconClass','ActionType','Color','OnClickJsCode','JsCode','IsDisabled','CSSClasses','DataAttributes','IsHidden'];
            foreach ($aSetters as $sSetter) {
                if (isset($aParams["{$sSetter}"])) {
                    $sCmd = "Set{$sSetter}";
                    call_user_func([$oButton_6718a6694f4a4577412517, $sCmd], $aParams["{$sSetter}"]);
                }
            }
            $aAdders = ['AddHtml','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
            foreach ($aAdders as $sAdder) {
                if (isset($aParams["{$sAdder}"])) {
                    call_user_func([$oButton_6718a6694f4a4577412517, $sAdder], $aParams["{$sAdder}"]);
                }
            }
            end($context['UIBlockParent'])->AddSubBlock($oButton_6718a6694f4a4577412517);
            ob_start();
            // line 94
            echo "            ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 95
            echo "        ";
            $sHtml = trim(ob_get_contents());
            ob_end_clean();
            if (strlen($sHtml) > 0) {
                end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
            }
            array_pop($context['UIBlockParent']);
            ob_start();
            // line 96
            echo "    ";
        }
        // line 97
        echo "
        ";
        // line 98
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sLegend" => $this->env->getFilter('dict_s')->getCallable()("iTopUpdate:UI:History")];
        if (!isset($aParams['sLegend'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sLegend for UIFieldSet at line 98');
        }
        $sLegend = $aParams['sLegend'];
        $sId = $aParams['sId'] ?? NULL;
        $oFieldSet_6718a6694f51a587347634 = Combodo\iTop\Application\UI\Base\Component\FieldSet\FieldSetUIBlockFactory::MakeStandard(        $sLegend        ,         $sId        );
        $aSetters = ['SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oFieldSet_6718a6694f51a587347634, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oFieldSet_6718a6694f51a587347634, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oFieldSet_6718a6694f51a587347634);
        array_push($context['UIBlockParent'], $oFieldSet_6718a6694f51a587347634);
        ob_start();
        // line 99
        echo "            ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        $aParams = ["sListId" => "iboupdatehistory", "oSet" => ($context["oSet"] ?? null)];
        if (!isset($aParams['sListId'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter sListId for UIDataTable at line 99');
        }
        $sListId = $aParams['sListId'];
        if (!isset($aParams['oSet'])) {
            throw new Exception('SelectUpdateFile.html.twig: Missing parameter oSet for UIDataTable at line 99');
        }
        $oSet = $aParams['oSet'];
        $aExtraParams = $aParams['aExtraParams'] ?? array (
);
        $oDataTable_6718a6694f57c831636214 = Combodo\iTop\Application\UI\Base\Component\DataTable\DataTableUIBlockFactory::MakeForRendering(        $sListId        ,         $oSet        ,         $aExtraParams        );
        $aSetters = ['AjaxUrl','AjaxData','DisplayColumns','ResultColumns','Options','InitDisplayData','ModalCreationHandler','SubBlocks','DeferredBlocks','HasForcedDiv','CSSClasses','DataAttributes','IsHidden','JSRefresh','RowActions'];
        foreach ($aSetters as $sSetter) {
            if (isset($aParams["{$sSetter}"])) {
                $sCmd = "Set{$sSetter}";
                call_user_func([$oDataTable_6718a6694f57c831636214, $sCmd], $aParams["{$sSetter}"]);
            }
        }
        $aAdders = ['AddHtml','AddSubBlock','AddDeferredBlock','AddJsFileRelPath','AddMultipleJsFilesRelPaths','AddCssFileRelPath','AddMultipleCssFilesRelPaths','AddCSSClass','AddCSSClasses'];
        foreach ($aAdders as $sAdder) {
            if (isset($aParams["{$sAdder}"])) {
                call_user_func([$oDataTable_6718a6694f57c831636214, $sAdder], $aParams["{$sAdder}"]);
            }
        }
        end($context['UIBlockParent'])->AddSubBlock($oDataTable_6718a6694f57c831636214);
        array_push($context['UIBlockParent'], $oDataTable_6718a6694f57c831636214);
        ob_start();
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 100
        echo "        ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 101
        echo "
    ";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        // line 103
        echo "
";
        $sHtml = trim(ob_get_contents());
        ob_end_clean();
        if (strlen($sHtml) > 0) {
            end($context['UIBlockParent'])->AddSubBlock(new \Combodo\iTop\Application\UI\Base\Component\Html\Html($sHtml));
        }
        array_pop($context['UIBlockParent']);
        ob_start();
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "SelectUpdateFile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1502 => 3,  1491 => 103,  1481 => 101,  1472 => 100,  1430 => 99,  1401 => 98,  1398 => 97,  1395 => 96,  1386 => 95,  1377 => 94,  1345 => 93,  1319 => 92,  1289 => 91,  1287 => 90,  1284 => 89,  1274 => 87,  1264 => 85,  1255 => 84,  1230 => 83,  1198 => 82,  1171 => 81,  1168 => 80,  1159 => 79,  1122 => 78,  1095 => 77,  1092 => 76,  1083 => 75,  1046 => 74,  1019 => 73,  1016 => 72,  1004 => 70,  977 => 69,  974 => 68,  946 => 67,  943 => 66,  931 => 64,  904 => 63,  901 => 62,  892 => 61,  880 => 59,  852 => 58,  840 => 56,  812 => 55,  800 => 53,  772 => 52,  745 => 51,  742 => 50,  709 => 49,  676 => 48,  650 => 47,  621 => 46,  618 => 45,  608 => 43,  596 => 41,  568 => 40,  565 => 39,  556 => 38,  531 => 37,  503 => 36,  500 => 35,  491 => 34,  466 => 33,  438 => 32,  435 => 31,  423 => 29,  395 => 28,  392 => 27,  380 => 25,  352 => 24,  349 => 23,  340 => 22,  331 => 21,  322 => 20,  294 => 19,  264 => 18,  255 => 17,  231 => 16,  226 => 15,  198 => 14,  170 => 13,  140 => 12,  113 => 11,  108 => 8,  72 => 7,  69 => 6,  42 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "SelectUpdateFile.html.twig", "/var/www/html/env-production/itop-core-update/templates/SelectUpdateFile.html.twig");
    }
}
