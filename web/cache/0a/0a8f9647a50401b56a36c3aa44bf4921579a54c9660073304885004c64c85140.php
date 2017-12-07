<?php

/* layout-designer-page.twig */
class __TwigTemplate_a62c0c2f98983c64a82bc37a4f911c0e01546012a30b08808b38867e4ea4bcb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "layout-designer-page.twig", 9);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
            'javaScript' => array($this, 'block_javaScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "layout-designer-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        $context["designerScale"] = min(($this->getAttribute((isset($context["resolution"]) ? $context["resolution"] : null), "designerWidth", array()) / $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "width", array())), ($this->getAttribute((isset($context["resolution"]) ? $context["resolution"] : null), "designerHeight", array()) / $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "height", array())));
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "schemaVersion", array()) > 1)) {
            // line 18
            echo "        ";
            $context["designerScale"] = ((isset($context["designerScale"]) ? $context["designerScale"] : null) * (isset($context["zoom"]) ? $context["zoom"] : null));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 22
        echo "    ";
        $context["width"] = ($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "width", array()) * (isset($context["designerScale"]) ? $context["designerScale"] : null));
        // line 23
        echo "    ";
        $context["height"] = ($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "height", array()) * (isset($context["designerScale"]) ? $context["designerScale"] : null));
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        if (($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "backgroundImageId", array()) == 0)) {
            // line 27
            echo "        ";
            $context["backgroundCss"] = $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "backgroundColor", array());
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        ";
            ob_start();
            echo "url('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.download.background", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
            echo "?preview=1&width=";
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
            echo "&height=";
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "&proportional=0&layoutBackgroundId=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "backgroundImageId", array()), "html", null, true);
            echo "') top center no-repeat; background-color: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "backgroundColor", array()), "html", null, true);
            $context["backgroundCss"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            echo "    ";
        }
        // line 31
        echo "

    <div class=\"layout-toolbox row\">
        <div class=\"col-md-12\">
            <div class=\"panel bttm-fix with-nav-tabs panel-primary\">
                <div class=\"panel-heading\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active tab-design\">
                            <a class=\"text-center\" id=\"designer-tab\" href=\"#tab1primary\" data-toggle=\"tab\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>  ";
        // line 39
        echo __("Designer");
        echo "</a>
                        </li>
                        <li class=\"tab-design\">
                            <a class=\"text-center\" id=\"action-tab\" href=\"#tab2primary\" data-toggle=\"tab\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i>   ";
        // line 42
        echo __("Actions");
        echo "</a>
                        </li>
                        <div class=\"pull-right\">
                            <span class=\"text-center\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-title=\"";
        // line 45
        echo __("Layout Duration: Duration may change depending on the exact number of items in ticker/twitter media items.");
        echo "\">
                                <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> ";
        // line 46
        echo __("");
        // line 47
        echo "                                <span id=\"layout-duration\" class=\"label label-success big-duration\"></span></span>
                            <span>| <b>Currently Editing</b></span>
                            <select id=\"layoutJumpList\" data-live-search=\"true\" data-width=\"auto\">
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.designer", array("id" => $this->getAttribute($context["item"], "layoutId", array()))), "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["item"], "layoutId", array()) == $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "layout", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </select>
                        </div>
                    </ul>
                </div>
                <div class=\"panel-body\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane no-pad fade in active\" id=\"tab1primary\">
                            <div class=\"col-md-3 text-center\">

                                <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"XiboFormButton btn btn-default btn-sm\" role=\"button\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.edit.form", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "\" title=\"";
        echo __("Edit the Layout Properties");
        echo "\"><span><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i> ";
        echo __("Background");
        echo "</span></a>
                                    </div>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-info btn-sm\" id=\"regionAddButton\" role=\"button\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.add", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "\"><span><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        echo __("Region");
        echo "</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-2 text-center\">
                                ";
        // line 73
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/user"), "method")) {
            // line 74
            echo "                                <div class=\"designer-control-panel-checkbox override-layout\">
                                    <input type=\"checkbox\" class=\"switch-check-box\" name=\"lockPosition\"  data-size=\"small\" data-off-color=\"danger\" data-on-color=\"success\" data-label-width=\"100\" data-label-text=\"";
            // line 75
            echo __("Lock Positions");
            echo "\" ";
            if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getOptionValue", array(0 => "lockPosition", 1 => "false"), "method") == "true")) {
                echo "checked=\"checked\"";
            }
            // line 76
            echo "                                           data-on-text=\"";
            echo __("On");
            echo "\" data-off-text=\"";
            echo __("Off");
            echo "\"/>
                                </div>
                                ";
        }
        // line 79
        echo "                            </div>
                            <div class=\"col-md-2 text-center\">
                                ";
        // line 81
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "routeViewable", array(0 => "/user"), "method")) {
            // line 82
            echo "                                <div class=\"designer-control-panel-checkbox override-layout\">
                                    <input type=\"checkbox\"  data-size=\"small\" data-off-color=\"danger\" data-on-color=\"success\" class=\"switch-check-box\" data-label-text=\"";
            // line 83
            echo __("Hide Controls");
            echo "\" data-label-width=\"100\" name=\"hideControls\" ";
            if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getOptionValue", array(0 => "hideControls", 1 => "false"), "method") == "true")) {
                echo "checked=\"checked\"";
            }
            // line 84
            echo "                                           data-on-text=\"";
            echo __("On");
            echo "\" data-off-text=\"";
            echo __("Off");
            echo "\"/>
                                </div>
                                ";
        }
        // line 87
        echo "                            </div>
                            <div class=\"col-md-2 text-center\">
                                <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
                                    <div class=\"btn-group\" role=\"group\">

                                        <a class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 92
        echo __("Decrease the canvas size");
        echo "\" role=\"button\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.designer", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "?zoom=";
        echo twig_escape_filter($this->env, ((isset($context["zoom"]) ? $context["zoom"] : null) - 0.3), "html", null, true);
        echo "\" ><span><i class=\"fa fa-search-minus\"  aria-hidden=\"true\"></i>";
        echo __("");
        echo "</span> </a>
                                    </div>
                                    <div class=\"btn-group\" role=\"group\">

                                        <a class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 96
        echo __("Increase the canvas size");
        echo "\" role=\"button\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.designer", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "?zoom=";
        echo twig_escape_filter($this->env, ((isset($context["zoom"]) ? $context["zoom"] : null) + 0.3), "html", null, true);
        echo "\"><span><i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i> ";
        echo __("");
        echo "</span></a>
                                    </div>
                                    <div class=\"btn-group\" role=\"group\">
                                        <button id=\"saveDesignerSize\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 99
        echo __("Save canvas size as default");
        echo "\" class=\"btn btn-success btn-sm \" role=\"button\" data-designer-size=\"";
        echo twig_escape_filter($this->env, (isset($context["zoom"]) ? $context["zoom"] : null), "html", null, true);
        echo "\">
                                            <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-3 text-center\">
                                <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
                                <div class=\"btn-group\" role=\"group\">
                                    <button id=\"layout-revert\" class=\"btn btn-warning btn-sm disabled btn-block\">
                                        <i class=\"fa fa-undo\" aria-hidden=\"true\"></i> ";
        // line 109
        echo __("Undo");
        echo "</button>
                                </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <button id=\"layout-save-all\" class=\"btn btn-success btn-sm disabled btn-block\">
                                        <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> ";
        // line 113
        echo __("Save Region Positions");
        // line 114
        echo "                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"tab-pane no-pad fade\" id=\"tab2primary\">
                        <div class=\"col-md-6\">
                            <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-success btn-sm\" role=\"button\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.preview", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
        echo __("Preview Layout");
        echo "</span></a>
                                </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"XiboFormButton btn btn-info btn-sm\" id=\"schedule-btn\" role=\"button\" href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.now.form", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "campaignId", array()), "from" => "Campaign")), "html", null, true);
        echo "\"><span><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> ";
        echo __("Schedule Now");
        echo "</span></a>
                                </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"XiboFormButton btn btn-warning btn-sm\" role=\"button\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("template.from.layout.form", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "\"><span><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> ";
        echo __("Save Template");
        echo "</span></a>
                                </div>
                                ";
        // line 132
        if (($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "schemaVersion", array()) < 2)) {
            // line 133
            echo "                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"XiboFormButton btn btn-warning btn-sm\" role=\"button\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.upgrade.form", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
            echo "\"><span><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> ";
            echo __("Upgrade Layout");
            echo "</span></a>
                                    </div>
                                ";
        }
        // line 137
        echo "                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 140
        if ((isset($context["isTemplate"]) ? $context["isTemplate"] : null)) {
            // line 141
            echo "                                <div class=\"alert no-pad alert-info text-right\">";
            echo __("Editing a Template will only affect future Layouts.");
            echo "</div>
                            ";
        } else {
            // line 143
            echo "                                <div id=\"layout-status\" class=\"alert no-pad text-center\" style=\"margin-bottom: 0px;\"></div>
                            ";
        }
        // line 145
        echo "                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"layout\" zoom=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["zoom"]) ? $context["zoom"] : null), "html", null, true);
        echo "\" tip_scale=\"1\" designer_scale=\"";
        echo twig_escape_filter($this->env, (isset($context["designerScale"]) ? $context["designerScale"] : null), "html", null, true);
        echo "\" class=\"layout center-block\" layoutid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
        echo "\" data-background-color=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "backgroundColor", array()), "html", null, true);
        echo "\" data-status-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("layout.status", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "\" data-position-all-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.position.all", array("id" => $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()))), "html", null, true);
        echo "\" style=\"position:relative; width:";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px; height:";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "px; background:";
        echo twig_escape_filter($this->env, (isset($context["backgroundCss"]) ? $context["backgroundCss"] : null), "html", null, true);
        echo ";\">

                ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "regions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 159
            echo "                    ";
            $context["regionWidth"] = ($this->getAttribute($context["region"], "width", array()) * (isset($context["designerScale"]) ? $context["designerScale"] : null));
            // line 160
            echo "                    ";
            $context["regionHeight"] = ($this->getAttribute($context["region"], "height", array()) * (isset($context["designerScale"]) ? $context["designerScale"] : null));
            // line 161
            echo "                    ";
            $context["regionLeft"] = ($this->getAttribute($context["region"], "left", array()) * (isset($context["designerScale"]) ? $context["designerScale"] : null));
            // line 162
            echo "                    ";
            $context["regionTop"] = ($this->getAttribute($context["region"], "top", array()) * (isset($context["designerScale"]) ? $context["designerScale"] : null));
            // line 163
            echo "
                    ";
            // line 165
            echo "                    ";
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $context["region"]), "method")) {
                // line 166
                echo "                        ";
                $context["disabledCss"] = "region";
                // line 167
                echo "                        ";
                $context["trasparencyCss"] = "";
                // line 168
                echo "                    ";
            } else {
                // line 169
                echo "                        ";
                $context["disabledCss"] = "regionDis";
                // line 170
                echo "                        ";
                $context["trasparencyCss"] = "regionDisabled";
                // line 171
                echo "                    ";
            }
            // line 172
            echo "
                    ";
            // line 173
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkViewable", array(0 => $context["region"]), "method")) {
                // line 174
                echo "                        ";
                $context["previewCss"] = "regionPreview";
                // line 175
                echo "                    ";
            } else {
                // line 176
                echo "                        ";
                $context["previewCss"] = "";
                // line 177
                echo "                    ";
            }
            // line 178
            echo "
                    <div id=\"region_";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionId", array()), "html", null, true);
            echo "\" regionEnabled=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $context["region"]), "method"), "html", null, true);
            echo "\" regionid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "regionId", array()), "html", null, true);
            echo "\" layoutid=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "layoutId", array()), "html", null, true);
            echo "\" zindex=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "zIndex", array()), "html", null, true);
            echo "\" tip_scale=\"1\" designer_scale=\"";
            echo twig_escape_filter($this->env, (isset($context["designerScale"]) ? $context["designerScale"] : null), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "width", array()), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "height", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.timeline.form", array("id" => $this->getAttribute($context["region"], "regionId", array()))), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $context["region"]), "method")) {
                echo "ondblclick=\"XiboFormRender(\$(this))\"";
            }
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["disabledCss"]) ? $context["disabledCss"] : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["previewCss"]) ? $context["previewCss"] : null), "html", null, true);
            echo "\" data-preview-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.preview", array("id" => $this->getAttribute($context["region"], "regionId", array()))), "html", null, true);
            echo "\" style=\"position:absolute; width:";
            echo twig_escape_filter($this->env, (isset($context["regionWidth"]) ? $context["regionWidth"] : null), "html", null, true);
            echo "px; height:";
            echo twig_escape_filter($this->env, (isset($context["regionHeight"]) ? $context["regionHeight"] : null), "html", null, true);
            echo "px; top: ";
            echo twig_escape_filter($this->env, (isset($context["regionTop"]) ? $context["regionTop"] : null), "html", null, true);
            echo "px; left:";
            echo twig_escape_filter($this->env, (isset($context["regionLeft"]) ? $context["regionLeft"] : null), "html", null, true);
            echo "px; z-index: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "zIndex", array()), "html", null, true);
            echo ";\">
                        <div class=\"regionTransparency ";
            // line 180
            echo twig_escape_filter($this->env, (isset($context["transparencyCss"]) ? $context["transparencyCss"] : null), "html", null, true);
            echo "\" style=\"width:100%; height:100%;\"></div>

                        ";
            // line 182
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkEditable", array(0 => $context["region"]), "method")) {
                // line 183
                echo "                            <div class=\"btn-group regionInfo pull-right\">
                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"region-tip\">";
                // line 185
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "width", array())), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "height", array())), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "left", array())), "html", null, true);
                echo " ,";
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "top", array())), "html", null, true);
                echo ")</span> <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a class=\"XiboFormButton\" href=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.timeline.form", array("id" => $this->getAttribute($context["region"], "regionId", array()))), "html", null, true);
                echo "\">";
                echo __("Edit Timeline");
                echo "</a>
                                    </li>
                                    <li>
                                        <a class=\"RegionOptionsMenuItem\" href=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.edit.form", array("id" => $this->getAttribute($context["region"], "regionId", array()))), "html", null, true);
                echo "\">";
                echo __("Options");
                echo "</a>
                                    </li>
                                    <li>
                                        <a class=\"XiboFormButton\" href=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("region.delete.form", array("id" => $this->getAttribute($context["region"], "regionId", array()))), "html", null, true);
                echo "\">";
                echo __("Delete");
                echo "</a>
                                    </li>
                                    <li>
                                        <a class=\"XiboFormButton\" href=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("user.permissions.form", array("entity" => "Region", "id" => $this->getAttribute($context["region"], "regionId", array()))), "html", null, true);
                echo "\">";
                echo __("Permissions");
                echo "</a>
                                    </li>
                                </ul>
                            </div>
                        ";
            } elseif ((($this->getAttribute(            // line 202
(isset($context["layout"]) ? $context["layout"] : null), "schemaVersion", array()) >= 2) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "checkViewable", array(0 => $context["region"]), "method"))) {
                // line 203
                echo "                            <div class=\"regionInfo\">
                                <span class=\"region-tip\">";
                // line 204
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "width", array())), "html", null, true);
                echo " x ";
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "height", array())), "html", null, true);
                echo "
                                    (";
                // line 205
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "left", array())), "html", null, true);
                echo "
                                    ,";
                // line 206
                echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["region"], "top", array())), "html", null, true);
                echo ")</span>
                            </div>
                        ";
            }
            // line 209
            echo "                        <div class=\"preview\">
                            <div class=\"previewContent\">

                            </div>
                            <div class=\"previewNav label label-info\"></div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "            </div>
        </div>

    </div>
    ";
        // line 221
        if (($this->getAttribute((isset($context["layout"]) ? $context["layout"] : null), "schemaVersion", array()) < 2)) {
            // line 222
            echo "        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"alert alert-danger\">";
            // line 224
            echo __("This is an old format layout, please consider upgrading using Actions tab");
            echo "</p>
            </div>
        </div>
    ";
        }
        // line 228
        echo "    ";
        if (((isset($context["designerScale"]) ? $context["designerScale"] : null) < 0.41)) {
            // line 229
            echo "        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"alert alert-danger\">";
            // line 231
            echo __("This Layout is very large, so we have disabled region drag and drop. You could enlarge the designer from the options menu or use Region Options to Manually Position your regions.");
            echo "</p>
            </div>
        </div>
    ";
        }
    }

    // line 237
    public function block_javaScript($context, array $blocks = array())
    {
        // line 238
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "uri", array(0 => "js/xibo-layout-designer.js"), "method"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            var translation = {
                savePositionsFirst: \"";
        // line 241
        echo twig_escape_filter($this->env, __("Please save the pending position changes first by clicking Save Positions or cancel by clicking Undo."), "js", null, true);
        echo "\"
            };

            // Callback for the media form
            function mediaFormCallBack(dialog) {
                
                \$(dialog).closest(\".modal\").addClass(\"modal-big\");
                
                // prevent filter form submit
                \$(\"#libraryAssignFilterOptions\").find(\"form\").on(\"submit\", function(e) {
                    e.preventDefault();
                    return false;
                });

                var mediaTable = \$(\"#mediaAssignments\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true, stateSave: true,
                    searchDelay: 3000,
                    \"order\": [[1, \"asc\"]],
                    \"filter\": false,
                    ajax: {
                        url: \"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.search"), "html", null, true);
        echo "\",
                        \"data\": function (d) {
                            \$.extend(d, \$(\"#libraryAssignFilterOptions\").find(\"form\").serializeObject());
                        }
                    },
                    \"columns\": [
                        {\"data\": \"mediaId\"},
                        {\"data\": \"name\"},
                        {\"data\": \"mediaType\"},
                        {
                            \"name\": \"mediaId\",
                            \"data\": null,
                            \"render\": function (data, type, row, meta) {
                                if (type === \"display\") {
                                    // Return only the image part of the data
                                    if (data.thumbnailUrl === '')
                                        return '';
                                    else
                                        return '<img src=\"' + data.thumbnailUrl + '\"/>';
                                    return data;
                                } else {
                                    return row.mediaId;
                                }
                            }
                        },
                        {
                            \"sortable\": false,
                            \"data\": function (data, type, row, meta) {
                                if (type !== \"display\")
                                    return \"\";

                                // Create a click-able span
                                return \"<a href=\\\"#\\\" class=\\\"assignItem\\\"><span class=\\\"glyphicon glyphicon-plus-sign\\\"></a>\";
                            }
                        }
                    ]
                });

                mediaTable.on('draw', function (e, settings) {
                    dataTableDraw(e, settings);

                    // Clicky on the +spans
                    \$(\".assignItem\", \"#mediaAssignments\").click(function () {
                        // Get the row that this is in.
                        var data = mediaTable.row(\$(this).closest(\"tr\")).data();

                        // Construct a new list item for the lower list and append it.
                        var newItem = \$(\"<li/>\", {
                            \"text\": \" \" + data.name,
                            \"data-media-id\": data.mediaId,
                            \"class\": \"li-sortable\",
                            \"dblclick\": function () {
                                \$(this).remove();
                            }
                        });

                        newItem.appendTo(\"#LibraryAssignSortable\");

                        // Add a span to that new item
                        \$(\"<span/>\", {
                            \"class\": \"glyphicon glyphicon-minus-sign\",
                            click: function () {
                                \$(this).parent().remove();
                            }
                        }).prependTo(newItem);
                    });
                });
                mediaTable.on('processing.dt', dataTableProcessing);

                // Make our little list sortable
                \$(\"#LibraryAssignSortable\").sortable();

                // Bind the filter form
                \$(\"#libraryAssignFilterOptions\").find(\"input, select\").change(function () {
                    mediaTable.ajax.reload();
                });
            }

            /**
             * Open Upload Form
             */
            function openUploadForm(templateOptions, buttons) {

                // Close the current dialog
                XiboDialogClose();

                var template = Handlebars.compile(\$(\"#template-file-upload\").html());

                // Handle bars and open a dialog
                bootbox.dialog({
                    message: template(templateOptions),
                    title: \"";
        // line 353
        echo __("Upload media");
        echo "\",
                    buttons: buttons,
                    animate: false,
                    updateInAllChecked: ";
        // line 356
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", array()) == "Checked")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    deleteOldRevisionsChecked: ";
        // line 357
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "LIBRARY_MEDIA_DELETEOLDVER_CHECKB", array()) == "Checked")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 358
        echo "                });

                openUploadFormModelShown(\$(\".modal-body\").find(\"form\"));
            }

            /**
             * Modal shown
             */
            function openUploadFormModelShown(form) {
                // Configure the upload form
                var url = \"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("library.add"), "html", null, true);
        echo "\";

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true
                });

                // Upload server status check for browsers with CORS support:
                if (\$.support.cors) {
                    \$.ajax({
                        url: url,
                        type: 'HEAD'
                    }).fail(function () {
                        \$('<span class=\"alert alert-error\"/>')
                            .text('Upload server currently unavailable - ' + new Date())
                            .appendTo(form);
                    });
                }

                // Enable iframe cross-domain access via redirect option:
                form.fileupload(
                    'option',
                    'redirect',
                    window.location.href.replace(
                        /\\/[^\\/]*\$/,
                        '/cors/result.html?%s'
                    )
                );

                form.bind('fileuploadsubmit', function (e, data) {
                    var inputs = data.context.find(':input');
                    if (inputs.filter('[required][value=\"\"]').first().focus().length) {
                        return false;
                    }
                    data.formData = inputs.serializeArray().concat(form.serializeArray());

                    inputs.filter(\"input\").prop(\"disabled\", true);
                });
            }

            // Click Handler for Library Upload Buttons (image, video, powerpoint, flash)
            function libraryUploadClick(e) {
                e.preventDefault();

                var validExt = \$(this).data().validExt.replace(/,/g, \"|\");
                var playlistId = \$(this).data().playlistId;

                openUploadForm({
                    trans: {
                        addFiles: \"";
        // line 418
        echo __("Add files");
        echo "\",
                        startUpload: \"";
        // line 419
        echo __("Start upload");
        echo "\",
                        cancelUpload: \"";
        // line 420
        echo __("Cancel upload");
        echo "\"
                    },
                    upload: {
                        maxSize: ";
        // line 423
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSize", array()), "html", null, true);
        echo ",
                        maxSizeMessage: \"";
        // line 424
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSizeMessage", array()), "html", null, true);
        echo "\",
                        validExt: validExt
                    },
                    playlistId: playlistId
                }, {
                    library: {
                        label: \"";
        // line 430
        echo __("View Library");
        echo "\",
                        callback: function () {
                            XiboFormRender(\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.library.assign.form"), "html", null, true);
        echo "\".replace(\":id\", playlistId));
                        }
                    },
                    main: {
                        label: \"";
        // line 436
        echo __("Done");
        echo "\",
                        className: \"btn-primary\",
                        callback: function () {
                            XiboFormRender(timelineForm.url, timelineForm.value);
                        }
                    }
                });
            }

            /**
             * Media Edit form
             */
            function mediaEditFormOpen(dialog) {

                if (dialog.find(\"form\").data().mediaEditable != 1)
                    return;

                // Create a new button
                var footer = dialog.find(\".modal-footer\");
                var mediaId = dialog.find(\"form\").data().mediaId;
                var widgetId = dialog.find(\"form\").data().widgetId;
                var validExtensions = dialog.find(\"form\").data().validExtensions;

                // Append
                var replaceButton = \$('<button class=\"btn btn-warning\">').html(\"";
        // line 460
        echo __("Replace");
        echo "\");
                replaceButton.click(function (e) {
                    e.preventDefault();

                    // Open the upload dialog with our options.
                    openUploadForm({
                        oldMediaId: mediaId,
                        widgetId: widgetId,
                        ";
        // line 468
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "LIBRARY_MEDIA_UPDATEINALL_CHECKB", array()) == "Checked")) {
            // line 469
            echo "                        updateInAllChecked: true,
                        ";
        } else {
            // line 471
            echo "                        updateInAllChecked: false,
                        ";
        }
        // line 473
        echo "                        trans: {
                            addFiles: \"";
        // line 474
        echo __("Add Replacement");
        echo "\",
                            startUpload: \"";
        // line 475
        echo __("Start Replace");
        echo "\",
                            cancelUpload: \"";
        // line 476
        echo __("Cancel Replace");
        echo "\",
                            updateInLayouts: {
                                title: \"";
        // line 478
        echo __("Update this media in all layouts it is assigned to?");
        echo "\",
                                helpText: \"";
        // line 479
        echo __("Note: It will only be updated in layouts you have permission to edit.");
        echo "\"
                            },
                            deleteOldRevisions: {
                                title: \"";
        // line 482
        echo __("Delete the old version?");
        echo "\",
                                helpText: \"";
        // line 483
        echo __("Completely remove the old version of this media item if a new file is being uploaded.");
        echo "\"
                            }
                        },
                        upload: {
                            maxSize: ";
        // line 487
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSize", array()), "html", null, true);
        echo ",
                            maxSizeMessage: \"";
        // line 488
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libraryUpload"]) ? $context["libraryUpload"] : null), "maxSizeMessage", array()), "html", null, true);
        echo "\",
                            validExt: validExtensions
                        }
                    }, {
                        main: {
                            label: \"";
        // line 493
        echo __("Done");
        echo "\",
                            className: \"btn-primary\",
                            callback: function () {
                                XiboFormRender(timelineForm.url, timelineForm.value);
                            }
                        }
                    });
                });

                footer.find(\".btn-primary\").before(replaceButton);
            }

            function timelineGridCallback(dialog) {

                dialog.addClass(\"modal-big\");

                var timelineWidgetTabel = \$(\"#timelineWidgets\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true, stateSave: true,
                    filter: false,
                    searchDelay: 3000,
                    \"order\": [[0, \"asc\"]],
                    ajax: {
                        url: \"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("playlist.widget.search"), "html", null, true);
        echo "\",
                        \"data\": function (d) {
                            \$.extend(d, \$(\"#timelineWidgets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                        }
                    },
                    \"columns\": [
                        {\"data\": \"displayOrder\"},
                        {\"data\": \"name\", \"orderable\": false},
                        {\"data\": \"type\"},
                        {\"data\": \"duration\"},
                        {\"data\": \"transition\"},
                        {
                            \"orderable\": false,
                            \"data\": dataTableButtonsColumn
                        }
                    ]
                });

                timelineWidgetTabel.on('draw', dataTableDraw);
                timelineWidgetTabel.on('processing.dt', dataTableProcessing);

                // Hook up the library Upload Buttons
                \$(\".libraryUploadForm\").click(libraryUploadClick);
            }

            function DeleteRegion(form, regionId) {
                \$.ajax({
                    type: form.attr(\"method\"),
                    url: form.attr(\"action\"),
                    cache: false,
                    dataType: \"json\",
                    data: form.serialize(),
                    success: function (xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success)
                            \$(\"#region_\" + regionId).remove();
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        SystemMessage(xhr.responseText, false);
                    }
                });
            }

            // Bind to the add button when we load
            \$(document).ready(function () {

                // Add region button
                \$(\"#regionAddButton\").click(function (e) {
                    e.preventDefault();
                    \$.ajax({
                        type: \"post\",
                        url: \$(this).attr(\"href\"),
                        cache: false,
                        dataType: \"json\",
                        success: function (xhr, textStatus, error) {

                            XiboSubmitResponse(xhr);

                            if (xhr.success) {
                                // Reload the designer
                                window.location.reload();
                            }
                        }
                    });
                });
            });

            \$(\"[name='my-checkbox']\").bootstrapSwitch();



        </script>


        ";
        // line 592
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 593
            echo "            ";
            if (($this->getAttribute($context["module"], "layoutDesignerJavaScript", array(), "method") != "")) {
                // line 594
                echo "                ";
                $this->loadTemplate(($this->getAttribute($context["module"], "layoutDesignerJavaScript", array(), "method") . ".twig"), "layout-designer-page.twig", 594)->display($context);
                // line 595
                echo "            ";
            }
            // line 596
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 597
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout-designer-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1097 => 597,  1083 => 596,  1080 => 595,  1077 => 594,  1074 => 593,  1057 => 592,  978 => 516,  952 => 493,  944 => 488,  940 => 487,  933 => 483,  929 => 482,  923 => 479,  919 => 478,  914 => 476,  910 => 475,  906 => 474,  903 => 473,  899 => 471,  895 => 469,  893 => 468,  882 => 460,  855 => 436,  848 => 432,  843 => 430,  834 => 424,  830 => 423,  824 => 420,  820 => 419,  816 => 418,  763 => 368,  751 => 358,  745 => 357,  737 => 356,  731 => 353,  637 => 262,  613 => 241,  604 => 238,  601 => 237,  592 => 231,  588 => 229,  585 => 228,  578 => 224,  574 => 222,  572 => 221,  566 => 217,  553 => 209,  547 => 206,  543 => 205,  537 => 204,  534 => 203,  532 => 202,  523 => 198,  515 => 195,  507 => 192,  499 => 189,  486 => 185,  482 => 183,  480 => 182,  475 => 180,  435 => 179,  432 => 178,  429 => 177,  426 => 176,  423 => 175,  420 => 174,  418 => 173,  415 => 172,  412 => 171,  409 => 170,  406 => 169,  403 => 168,  400 => 167,  397 => 166,  394 => 165,  391 => 163,  388 => 162,  385 => 161,  382 => 160,  379 => 159,  375 => 158,  354 => 156,  341 => 145,  337 => 143,  331 => 141,  329 => 140,  324 => 137,  316 => 134,  313 => 133,  311 => 132,  304 => 130,  296 => 127,  288 => 124,  276 => 114,  274 => 113,  267 => 109,  252 => 99,  240 => 96,  227 => 92,  220 => 87,  211 => 84,  205 => 83,  202 => 82,  200 => 81,  196 => 79,  187 => 76,  181 => 75,  178 => 74,  176 => 73,  165 => 67,  155 => 64,  142 => 53,  127 => 51,  123 => 50,  118 => 47,  116 => 46,  112 => 45,  106 => 42,  100 => 39,  90 => 31,  87 => 30,  73 => 29,  70 => 28,  67 => 27,  64 => 26,  61 => 24,  58 => 23,  55 => 22,  52 => 20,  49 => 19,  46 => 18,  43 => 17,  40 => 15,  37 => 14,  35 => 13,  32 => 12,  28 => 9,  26 => 10,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/*
 * Spring Signage Ltd - http://www.springsignage.com
 * Copyright (C) 2015 Spring Signage Ltd
 * (\${FILE_NAME})
 */
#}

{% extends \"authed.twig\" %}
{% import \"inline.twig\" as inline %}

{% block pageContent %}
    {# Get the display width / height #}
    {% set designerScale = min((resolution.designerWidth / layout.width), (resolution.designerHeight / layout.height)) %}

    {# Version 2 layout can support zooming? #}
    {% if layout.schemaVersion > 1 %}
        {% set designerScale = designerScale * zoom %}
    {% endif %}

    {# Reset the designer width / height based on the zoom #}
    {% set width = layout.width * designerScale %}
    {% set height = layout.height * designerScale %}

    {# Layout Background #}
    {% if layout.backgroundImageId == 0 %}
        {% set backgroundCss = layout.backgroundColor %}
    {% else %}
        {% set backgroundCss %}url('{{ urlFor(\"layout.download.background\", {id: layout.layoutId}) }}?preview=1&width={{ width }}&height={{ height }}&proportional=0&layoutBackgroundId={{ layout.backgroundImageId }}') top center no-repeat; background-color: {{ layout.backgroundColor }}{% endset %}
    {% endif %}


    <div class=\"layout-toolbox row\">
        <div class=\"col-md-12\">
            <div class=\"panel bttm-fix with-nav-tabs panel-primary\">
                <div class=\"panel-heading\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active tab-design\">
                            <a class=\"text-center\" id=\"designer-tab\" href=\"#tab1primary\" data-toggle=\"tab\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>  {% trans \"Designer\" %}</a>
                        </li>
                        <li class=\"tab-design\">
                            <a class=\"text-center\" id=\"action-tab\" href=\"#tab2primary\" data-toggle=\"tab\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i>   {% trans \"Actions\" %}</a>
                        </li>
                        <div class=\"pull-right\">
                            <span class=\"text-center\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-title=\"{% trans \"Layout Duration: Duration may change depending on the exact number of items in ticker/twitter media items.\" %}\">
                                <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> {% trans \"\" %}
                                <span id=\"layout-duration\" class=\"label label-success big-duration\"></span></span>
                            <span>| <b>Currently Editing</b></span>
                            <select id=\"layoutJumpList\" data-live-search=\"true\" data-width=\"auto\">
                                {% for item in layouts %}
                                    <option value=\"{{ urlFor(\"layout.designer\", {id: item.layoutId}) }}\"{% if item.layoutId == layout.layoutId %} selected{% endif %}>{{ item.layout }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </ul>
                </div>
                <div class=\"panel-body\">
                    <div class=\"tab-content\">
                        <div class=\"tab-pane no-pad fade in active\" id=\"tab1primary\">
                            <div class=\"col-md-3 text-center\">

                                <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"XiboFormButton btn btn-default btn-sm\" role=\"button\" href=\"{{ urlFor(\"layout.edit.form\", {id: layout.layoutId}) }}\" title=\"{% trans \"Edit the Layout Properties\" %}\"><span><i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i> {% trans \"Background\" %}</span></a>
                                    </div>
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-info btn-sm\" id=\"regionAddButton\" role=\"button\" href=\"{{ urlFor(\"region.add\", {id: layout.layoutId}) }}\"><span><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {% trans \"Region\" %}</span></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-2 text-center\">
                                {% if currentUser.routeViewable(\"/user\") %}
                                <div class=\"designer-control-panel-checkbox override-layout\">
                                    <input type=\"checkbox\" class=\"switch-check-box\" name=\"lockPosition\"  data-size=\"small\" data-off-color=\"danger\" data-on-color=\"success\" data-label-width=\"100\" data-label-text=\"{% trans \"Lock Positions\" %}\" {% if currentUser.getOptionValue(\"lockPosition\", \"false\") == \"true\" %}checked=\"checked\"{% endif %}
                                           data-on-text=\"{% trans \"On\" %}\" data-off-text=\"{% trans \"Off\" %}\"/>
                                </div>
                                {% endif %}
                            </div>
                            <div class=\"col-md-2 text-center\">
                                {% if currentUser.routeViewable(\"/user\") %}
                                <div class=\"designer-control-panel-checkbox override-layout\">
                                    <input type=\"checkbox\"  data-size=\"small\" data-off-color=\"danger\" data-on-color=\"success\" class=\"switch-check-box\" data-label-text=\"{% trans \"Hide Controls\" %}\" data-label-width=\"100\" name=\"hideControls\" {% if currentUser.getOptionValue(\"hideControls\", \"false\") == \"true\" %}checked=\"checked\"{% endif %}
                                           data-on-text=\"{% trans \"On\" %}\" data-off-text=\"{% trans \"Off\" %}\"/>
                                </div>
                                {% endif %}
                            </div>
                            <div class=\"col-md-2 text-center\">
                                <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
                                    <div class=\"btn-group\" role=\"group\">

                                        <a class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{% trans \"Decrease the canvas size\" %}\" role=\"button\" href=\"{{ urlFor(\"layout.designer\", {id: layout.layoutId}) }}?zoom={{ zoom - 0.3 }}\" ><span><i class=\"fa fa-search-minus\"  aria-hidden=\"true\"></i>{% trans \"\" %}</span> </a>
                                    </div>
                                    <div class=\"btn-group\" role=\"group\">

                                        <a class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{% trans \"Increase the canvas size\" %}\" role=\"button\" href=\"{{ urlFor(\"layout.designer\", {id: layout.layoutId}) }}?zoom={{ zoom + 0.3 }}\"><span><i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i> {% trans \"\" %}</span></a>
                                    </div>
                                    <div class=\"btn-group\" role=\"group\">
                                        <button id=\"saveDesignerSize\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{% trans \"Save canvas size as default\" %}\" class=\"btn btn-success btn-sm \" role=\"button\" data-designer-size=\"{{ zoom }}\">
                                            <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-3 text-center\">
                                <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
                                <div class=\"btn-group\" role=\"group\">
                                    <button id=\"layout-revert\" class=\"btn btn-warning btn-sm disabled btn-block\">
                                        <i class=\"fa fa-undo\" aria-hidden=\"true\"></i> {% trans \"Undo\" %}</button>
                                </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <button id=\"layout-save-all\" class=\"btn btn-success btn-sm disabled btn-block\">
                                        <i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> {% trans \"Save Region Positions\" %}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"tab-pane no-pad fade\" id=\"tab2primary\">
                        <div class=\"col-md-6\">
                            <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"btn btn-success btn-sm\" role=\"button\" href=\"{{ urlFor(\"layout.preview\", {id: layout.layoutId}) }}\" target=\"_blank\"><span><i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {% trans \"Preview Layout\" %}</span></a>
                                </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"XiboFormButton btn btn-info btn-sm\" id=\"schedule-btn\" role=\"button\" href=\"{{ urlFor(\"schedule.now.form\", {id: layout.campaignId, from: \"Campaign\"}) }}\"><span><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> {% trans \"Schedule Now\" %}</span></a>
                                </div>
                                <div class=\"btn-group\" role=\"group\">
                                    <a class=\"XiboFormButton btn btn-warning btn-sm\" role=\"button\" href=\"{{ urlFor(\"template.from.layout.form\", {id: layout.layoutId}) }}\"><span><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> {% trans \"Save Template\" %}</span></a>
                                </div>
                                {% if layout.schemaVersion < 2 %}
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"XiboFormButton btn btn-warning btn-sm\" role=\"button\" href=\"{{ urlFor(\"layout.upgrade.form\", {id: layout.layoutId}) }}\"><span><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> {% trans \"Upgrade Layout\" %}</span></a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            {% if isTemplate %}
                                <div class=\"alert no-pad alert-info text-right\">{% trans \"Editing a Template will only affect future Layouts.\" %}</div>
                            {% else %}
                                <div id=\"layout-status\" class=\"alert no-pad text-center\" style=\"margin-bottom: 0px;\"></div>
                            {% endif %}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div id=\"layout\" zoom=\"{{ zoom }}\" tip_scale=\"1\" designer_scale=\"{{ designerScale }}\" class=\"layout center-block\" layoutid=\"{{ layout.layoutId }}\" data-background-color=\"{{ layout.backgroundColor }}\" data-status-url=\"{{ urlFor(\"layout.status\", {id: layout.layoutId}) }}\" data-position-all-url=\"{{ urlFor(\"region.position.all\", {id: layout.layoutId}) }}\" style=\"position:relative; width:{{ width }}px; height:{{ height }}px; background:{{ backgroundCss }};\">

                {% for region in layout.regions %}
                    {% set regionWidth = region.width * designerScale %}
                    {% set regionHeight = region.height * designerScale %}
                    {% set regionLeft = region.left * designerScale %}
                    {% set regionTop = region.top * designerScale %}

                    {# Disabled / Enabled CSS #}
                    {% if currentUser.checkEditable(region) %}
                        {% set disabledCss = \"region\" %}
                        {% set trasparencyCss = \"\" %}
                    {% else %}
                        {% set disabledCss = \"regionDis\" %}
                        {% set trasparencyCss = \"regionDisabled\" %}
                    {% endif %}

                    {% if currentUser.checkViewable(region) %}
                        {% set previewCss = \"regionPreview\" %}
                    {% else %}
                        {% set previewCss = \"\" %}
                    {% endif %}

                    <div id=\"region_{{ region.regionId }}\" regionEnabled=\"{{ currentUser.checkEditable(region) }}\" regionid=\"{{ region.regionId }}\" layoutid=\"{{ layout.layoutId }}\" zindex=\"{{ region.zIndex }}\" tip_scale=\"1\" designer_scale=\"{{ designerScale }}\" width=\"{{ region.width }}\" height=\"{{ region.height }}\" href=\"{{ urlFor(\"region.timeline.form\", {id: region.regionId}) }}\" {% if currentUser.checkEditable(region) %}ondblclick=\"XiboFormRender(\$(this))\"{% endif %} class=\"{{ disabledCss }} {{ previewCss }}\" data-preview-url=\"{{ urlFor(\"region.preview\", {id: region.regionId}) }}\" style=\"position:absolute; width:{{ regionWidth }}px; height:{{ regionHeight }}px; top: {{ regionTop }}px; left:{{ regionLeft }}px; z-index: {{ region.zIndex }};\">
                        <div class=\"regionTransparency {{ transparencyCss }}\" style=\"width:100%; height:100%;\"></div>

                        {% if currentUser.checkEditable(region) %}
                            <div class=\"btn-group regionInfo pull-right\">
                                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"region-tip\">{{ region.width|round }} x {{ region.height|round }} ({{ region.left|round }} ,{{ region.top|round }})</span> <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a class=\"XiboFormButton\" href=\"{{ urlFor(\"region.timeline.form\", {id: region.regionId}) }}\">{% trans \"Edit Timeline\" %}</a>
                                    </li>
                                    <li>
                                        <a class=\"RegionOptionsMenuItem\" href=\"{{ urlFor(\"region.edit.form\", {id: region.regionId}) }}\">{% trans \"Options\" %}</a>
                                    </li>
                                    <li>
                                        <a class=\"XiboFormButton\" href=\"{{ urlFor(\"region.delete.form\", {id: region.regionId}) }}\">{% trans \"Delete\" %}</a>
                                    </li>
                                    <li>
                                        <a class=\"XiboFormButton\" href=\"{{ urlFor(\"user.permissions.form\", {entity: \"Region\", id: region.regionId}) }}\">{% trans \"Permissions\" %}</a>
                                    </li>
                                </ul>
                            </div>
                        {% elseif layout.schemaVersion >= 2 and currentUser.checkViewable(region) %}
                            <div class=\"regionInfo\">
                                <span class=\"region-tip\">{{ region.width|round }} x {{ region.height|round }}
                                    ({{ region.left|round }}
                                    ,{{ region.top|round }})</span>
                            </div>
                        {% endif %}
                        <div class=\"preview\">
                            <div class=\"previewContent\">

                            </div>
                            <div class=\"previewNav label label-info\"></div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>

    </div>
    {% if layout.schemaVersion < 2 %}
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"alert alert-danger\">{% trans \"This is an old format layout, please consider upgrading using Actions tab\" %}</p>
            </div>
        </div>
    {% endif %}
    {% if designerScale < 0.41 %}
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"alert alert-danger\">{% trans \"This Layout is very large, so we have disabled region drag and drop. You could enlarge the designer from the options menu or use Region Options to Manually Position your regions.\" %}</p>
            </div>
        </div>
    {% endif %}
{% endblock %}

    {% block javaScript %}
        <script src=\"{{ theme.uri(\"js/xibo-layout-designer.js\") }}?{{ version }}\"></script>
        <script type=\"text/javascript\">
            var translation = {
                savePositionsFirst: \"{% autoescape \"js\" %}{{ \"Please save the pending position changes first by clicking Save Positions or cancel by clicking Undo.\"|trans }}{% endautoescape %}\"
            };

            // Callback for the media form
            function mediaFormCallBack(dialog) {
                
                \$(dialog).closest(\".modal\").addClass(\"modal-big\");
                
                // prevent filter form submit
                \$(\"#libraryAssignFilterOptions\").find(\"form\").on(\"submit\", function(e) {
                    e.preventDefault();
                    return false;
                });

                var mediaTable = \$(\"#mediaAssignments\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true, stateSave: true,
                    searchDelay: 3000,
                    \"order\": [[1, \"asc\"]],
                    \"filter\": false,
                    ajax: {
                        url: \"{{ urlFor(\"library.search\") }}\",
                        \"data\": function (d) {
                            \$.extend(d, \$(\"#libraryAssignFilterOptions\").find(\"form\").serializeObject());
                        }
                    },
                    \"columns\": [
                        {\"data\": \"mediaId\"},
                        {\"data\": \"name\"},
                        {\"data\": \"mediaType\"},
                        {
                            \"name\": \"mediaId\",
                            \"data\": null,
                            \"render\": function (data, type, row, meta) {
                                if (type === \"display\") {
                                    // Return only the image part of the data
                                    if (data.thumbnailUrl === '')
                                        return '';
                                    else
                                        return '<img src=\"' + data.thumbnailUrl + '\"/>';
                                    return data;
                                } else {
                                    return row.mediaId;
                                }
                            }
                        },
                        {
                            \"sortable\": false,
                            \"data\": function (data, type, row, meta) {
                                if (type !== \"display\")
                                    return \"\";

                                // Create a click-able span
                                return \"<a href=\\\"#\\\" class=\\\"assignItem\\\"><span class=\\\"glyphicon glyphicon-plus-sign\\\"></a>\";
                            }
                        }
                    ]
                });

                mediaTable.on('draw', function (e, settings) {
                    dataTableDraw(e, settings);

                    // Clicky on the +spans
                    \$(\".assignItem\", \"#mediaAssignments\").click(function () {
                        // Get the row that this is in.
                        var data = mediaTable.row(\$(this).closest(\"tr\")).data();

                        // Construct a new list item for the lower list and append it.
                        var newItem = \$(\"<li/>\", {
                            \"text\": \" \" + data.name,
                            \"data-media-id\": data.mediaId,
                            \"class\": \"li-sortable\",
                            \"dblclick\": function () {
                                \$(this).remove();
                            }
                        });

                        newItem.appendTo(\"#LibraryAssignSortable\");

                        // Add a span to that new item
                        \$(\"<span/>\", {
                            \"class\": \"glyphicon glyphicon-minus-sign\",
                            click: function () {
                                \$(this).parent().remove();
                            }
                        }).prependTo(newItem);
                    });
                });
                mediaTable.on('processing.dt', dataTableProcessing);

                // Make our little list sortable
                \$(\"#LibraryAssignSortable\").sortable();

                // Bind the filter form
                \$(\"#libraryAssignFilterOptions\").find(\"input, select\").change(function () {
                    mediaTable.ajax.reload();
                });
            }

            /**
             * Open Upload Form
             */
            function openUploadForm(templateOptions, buttons) {

                // Close the current dialog
                XiboDialogClose();

                var template = Handlebars.compile(\$(\"#template-file-upload\").html());

                // Handle bars and open a dialog
                bootbox.dialog({
                    message: template(templateOptions),
                    title: \"{% trans \"Upload media\" %}\",
                    buttons: buttons,
                    animate: false,
                    updateInAllChecked: {% if settings.LIBRARY_MEDIA_UPDATEINALL_CHECKB == \"Checked\" %}true{% else %}false{% endif %},
                    deleteOldRevisionsChecked: {% if settings.LIBRARY_MEDIA_DELETEOLDVER_CHECKB == \"Checked\" %}true{% else %}false{% endif %}
                });

                openUploadFormModelShown(\$(\".modal-body\").find(\"form\"));
            }

            /**
             * Modal shown
             */
            function openUploadFormModelShown(form) {
                // Configure the upload form
                var url = \"{{ urlFor(\"library.add\") }}\";

                // Initialize the jQuery File Upload widget:
                form.fileupload({
                    url: url,
                    disableImageResize: true
                });

                // Upload server status check for browsers with CORS support:
                if (\$.support.cors) {
                    \$.ajax({
                        url: url,
                        type: 'HEAD'
                    }).fail(function () {
                        \$('<span class=\"alert alert-error\"/>')
                            .text('Upload server currently unavailable - ' + new Date())
                            .appendTo(form);
                    });
                }

                // Enable iframe cross-domain access via redirect option:
                form.fileupload(
                    'option',
                    'redirect',
                    window.location.href.replace(
                        /\\/[^\\/]*\$/,
                        '/cors/result.html?%s'
                    )
                );

                form.bind('fileuploadsubmit', function (e, data) {
                    var inputs = data.context.find(':input');
                    if (inputs.filter('[required][value=\"\"]').first().focus().length) {
                        return false;
                    }
                    data.formData = inputs.serializeArray().concat(form.serializeArray());

                    inputs.filter(\"input\").prop(\"disabled\", true);
                });
            }

            // Click Handler for Library Upload Buttons (image, video, powerpoint, flash)
            function libraryUploadClick(e) {
                e.preventDefault();

                var validExt = \$(this).data().validExt.replace(/,/g, \"|\");
                var playlistId = \$(this).data().playlistId;

                openUploadForm({
                    trans: {
                        addFiles: \"{% trans \"Add files\" %}\",
                        startUpload: \"{% trans \"Start upload\" %}\",
                        cancelUpload: \"{% trans \"Cancel upload\" %}\"
                    },
                    upload: {
                        maxSize: {{ libraryUpload.maxSize }},
                        maxSizeMessage: \"{{ libraryUpload.maxSizeMessage }}\",
                        validExt: validExt
                    },
                    playlistId: playlistId
                }, {
                    library: {
                        label: \"{% trans \"View Library\" %}\",
                        callback: function () {
                            XiboFormRender(\"{{ urlFor(\"playlist.library.assign.form\") }}\".replace(\":id\", playlistId));
                        }
                    },
                    main: {
                        label: \"{% trans \"Done\" %}\",
                        className: \"btn-primary\",
                        callback: function () {
                            XiboFormRender(timelineForm.url, timelineForm.value);
                        }
                    }
                });
            }

            /**
             * Media Edit form
             */
            function mediaEditFormOpen(dialog) {

                if (dialog.find(\"form\").data().mediaEditable != 1)
                    return;

                // Create a new button
                var footer = dialog.find(\".modal-footer\");
                var mediaId = dialog.find(\"form\").data().mediaId;
                var widgetId = dialog.find(\"form\").data().widgetId;
                var validExtensions = dialog.find(\"form\").data().validExtensions;

                // Append
                var replaceButton = \$('<button class=\"btn btn-warning\">').html(\"{% trans \"Replace\" %}\");
                replaceButton.click(function (e) {
                    e.preventDefault();

                    // Open the upload dialog with our options.
                    openUploadForm({
                        oldMediaId: mediaId,
                        widgetId: widgetId,
                        {% if config.LIBRARY_MEDIA_UPDATEINALL_CHECKB == \"Checked\" %}
                        updateInAllChecked: true,
                        {% else %}
                        updateInAllChecked: false,
                        {% endif %}
                        trans: {
                            addFiles: \"{% trans \"Add Replacement\" %}\",
                            startUpload: \"{% trans \"Start Replace\" %}\",
                            cancelUpload: \"{% trans \"Cancel Replace\" %}\",
                            updateInLayouts: {
                                title: \"{% trans \"Update this media in all layouts it is assigned to?\" %}\",
                                helpText: \"{% trans \"Note: It will only be updated in layouts you have permission to edit.\" %}\"
                            },
                            deleteOldRevisions: {
                                title: \"{% trans \"Delete the old version?\" %}\",
                                helpText: \"{% trans \"Completely remove the old version of this media item if a new file is being uploaded.\" %}\"
                            }
                        },
                        upload: {
                            maxSize: {{ libraryUpload.maxSize }},
                            maxSizeMessage: \"{{ libraryUpload.maxSizeMessage }}\",
                            validExt: validExtensions
                        }
                    }, {
                        main: {
                            label: \"{% trans \"Done\" %}\",
                            className: \"btn-primary\",
                            callback: function () {
                                XiboFormRender(timelineForm.url, timelineForm.value);
                            }
                        }
                    });
                });

                footer.find(\".btn-primary\").before(replaceButton);
            }

            function timelineGridCallback(dialog) {

                dialog.addClass(\"modal-big\");

                var timelineWidgetTabel = \$(\"#timelineWidgets\").DataTable({
                    \"language\": dataTablesLanguage,
                    serverSide: true, stateSave: true,
                    filter: false,
                    searchDelay: 3000,
                    \"order\": [[0, \"asc\"]],
                    ajax: {
                        url: \"{{ urlFor(\"playlist.widget.search\") }}\",
                        \"data\": function (d) {
                            \$.extend(d, \$(\"#timelineWidgets\").closest(\".XiboGrid\").find(\".FilterDiv form\").serializeObject());
                        }
                    },
                    \"columns\": [
                        {\"data\": \"displayOrder\"},
                        {\"data\": \"name\", \"orderable\": false},
                        {\"data\": \"type\"},
                        {\"data\": \"duration\"},
                        {\"data\": \"transition\"},
                        {
                            \"orderable\": false,
                            \"data\": dataTableButtonsColumn
                        }
                    ]
                });

                timelineWidgetTabel.on('draw', dataTableDraw);
                timelineWidgetTabel.on('processing.dt', dataTableProcessing);

                // Hook up the library Upload Buttons
                \$(\".libraryUploadForm\").click(libraryUploadClick);
            }

            function DeleteRegion(form, regionId) {
                \$.ajax({
                    type: form.attr(\"method\"),
                    url: form.attr(\"action\"),
                    cache: false,
                    dataType: \"json\",
                    data: form.serialize(),
                    success: function (xhr, textStatus, error) {

                        XiboSubmitResponse(xhr, form);

                        if (xhr.success)
                            \$(\"#region_\" + regionId).remove();
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        SystemMessage(xhr.responseText, false);
                    }
                });
            }

            // Bind to the add button when we load
            \$(document).ready(function () {

                // Add region button
                \$(\"#regionAddButton\").click(function (e) {
                    e.preventDefault();
                    \$.ajax({
                        type: \"post\",
                        url: \$(this).attr(\"href\"),
                        cache: false,
                        dataType: \"json\",
                        success: function (xhr, textStatus, error) {

                            XiboSubmitResponse(xhr);

                            if (xhr.success) {
                                // Reload the designer
                                window.location.reload();
                            }
                        }
                    });
                });
            });

            \$(\"[name='my-checkbox']\").bootstrapSwitch();



        </script>


        {% for module in modules %}
            {% if module.layoutDesignerJavaScript() != \"\" %}
                {% include module.layoutDesignerJavaScript() ~ \".twig\" %}
            {% endif %}
        {% endfor %}

    {% endblock %}
", "layout-designer-page.twig", "/var/www/web/views/layout-designer-page.twig");
    }
}
