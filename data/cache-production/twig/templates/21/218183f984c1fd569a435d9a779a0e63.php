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

/* base/components/datatable/static/layout.html.twig */
class __TwigTemplate_d703bae1e76b14cf2581960799d947df extends Template
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
";
        // line 4
        $context["columns"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumns", [], "method", false, false, false, 4);
        // line 5
        echo "<table id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 5), "html", null, true);
        echo "\" width=\"100%\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 5), "html", null, true);
        echo " listResults";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 5)) {
            echo " ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-datatable\" data-status=\"loading\">
    <thead>
    <tr>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 9
            echo "            <th class=\"ibo-datatable-header\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "description", [], "any", false, false, false, 9), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 9), "html", null, true);
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetData", [], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 15
            echo "       
        <tr ";
            // line 16
            if ( !twig_test_empty((($__internal_compile_0 = $context["data"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["@id"] ?? null) : null))) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["data"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["@id"] ?? null) : null), "html", null, true);
                echo "\" ";
            }
            // line 17
            echo "            ";
            if ( !twig_test_empty((($__internal_compile_2 = $context["data"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["@class"] ?? null) : null))) {
                echo " class=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["data"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["@class"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            // line 18
            echo "            ";
            if ( !twig_test_empty((($__internal_compile_4 = $context["data"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["@meta"] ?? null) : null))) {
                echo " ";
                echo (($__internal_compile_5 = $context["data"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["@meta"] ?? null) : null);
            }
            echo ">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["column"]) {
                // line 20
                echo "            <td ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["column"], "class", [], "any", false, false, false, 20))) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "class", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" ";
                }
                // line 21
                echo "                    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["column"], "metadata", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "metadata", [], "any", false, false, false, 22));
                    foreach ($context['_seq'] as $context["prop"] => $context["value"]) {
                        // line 23
                        echo "                            data-";
                        echo twig_escape_filter($this->env, twig_replace_filter($context["prop"], ["_" => "-"]), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['prop'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                    ";
                }
                // line 26
                echo "                    ";
                $context["cellValueHtml"] = "";
                // line 27
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["data"]);
                foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
                    // line 28
                    echo "                        ";
                    if (($context["cellName"] == $context["name"])) {
                        // line 29
                        echo "                            ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cellValue"], "value_raw", [], "any", false, false, false, 29))) {
                            // line 30
                            echo "                                ";
                            $context["cellValueHtml"] = $context["cellValue"];
                            // line 31
                            echo "                            ";
                        } else {
                            // line 32
                            echo "                                data-value-raw=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cellValue"], "value_raw", [], "any", false, false, false, 32), "html", null, true);
                            echo "\"
                                ";
                            // line 33
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["cellValue"], "value_html", [], "any", false, false, false, 33))) {
                                // line 34
                                echo "                                    ";
                                $context["cellValueHtml"] = twig_get_attribute($this->env, $this->source, $context["cellValue"], "value_html", [], "any", false, false, false, 34);
                                // line 35
                                echo "                                ";
                            }
                            // line 36
                            echo "                            ";
                        }
                        // line 37
                        echo "                        ";
                    }
                    // line 38
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['cellName'], $context['cellValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    ";
                if (twig_test_empty(($context["cellValueHtml"] ?? null))) {
                    // line 40
                    echo "                        ";
                    $context["cellValueHtml"] = "&nbsp;";
                    // line 41
                    echo "                    ";
                }
                // line 42
                echo "            >";
                echo ($context["cellValueHtml"] ?? null);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
</table>

";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 49)) {
            // line 50
            echo "    ";
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowActionsTemplate", [], "method", false, false, false, 50));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 50,  213 => 49,  208 => 46,  201 => 44,  192 => 42,  189 => 41,  186 => 40,  183 => 39,  177 => 38,  174 => 37,  171 => 36,  168 => 35,  165 => 34,  163 => 33,  158 => 32,  155 => 31,  152 => 30,  149 => 29,  146 => 28,  141 => 27,  138 => 26,  135 => 25,  124 => 23,  119 => 22,  116 => 21,  109 => 20,  105 => 19,  97 => 18,  90 => 17,  84 => 16,  81 => 15,  77 => 14,  72 => 11,  61 => 9,  57 => 8,  42 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/layout.html.twig", "/var/www/html/templates/base/components/datatable/static/layout.html.twig");
    }
}
