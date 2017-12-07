<?php

/* display-form-edit.twig */
class __TwigTemplate_16c22dc0f95b4f9330695e9f3f5e0e0ac8ba303e94ed757815da364a1ab6f9f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form-base.twig", "display-form-edit.twig", 12);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formButtons' => array($this, 'block_formButtons'),
            'formHtml' => array($this, 'block_formHtml'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form-base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        $context["forms"] = $this->loadTemplate("forms.twig", "display-form-edit.twig", 13);
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_formTitle($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo __("Edit Display");
    }

    // line 19
    public function block_formButtons($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        echo __("Help");
        echo ", XiboHelpRender(\"";
        echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : null), "html", null, true);
        echo "\")
    ";
        // line 21
        echo __("Cancel");
        echo ", XiboDialogClose()
    ";
        // line 22
        echo __("Save");
        echo ", \$(\"#displayEditForm\").submit()
";
    }

    // line 25
    public function block_formHtml($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 29
        echo __("General");
        echo "</span></a></li>
                <li><a href=\"#location\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 30
        echo __("Location");
        echo "</span></a></li>
                <li><a href=\"#maintenance\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 31
        echo __("Maintenance");
        echo "</span></a></li>
                <li><a href=\"#wol\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 32
        echo __("Wake on LAN");
        echo "</span></a></li>
                <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>";
        // line 33
        echo __("Advanced");
        echo "</span></a></li>
            </ul>
            <form id=\"displayEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("display.edit", array("id" => $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "displayId", array()))), "html", null, true);
        echo "\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        ";
        // line 39
        ob_start();
        echo __("Display");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        echo "                        ";
        if ((isset($context["displayLockName"]) ? $context["displayLockName"] : null)) {
            // line 41
            echo "                            ";
            ob_start();
            echo __("The Name of the Display - your administrator has locked this to the device name");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 42
            echo "                            ";
            echo $context["forms"]->getdisabled("display", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "display", array()), (isset($context["helpText"]) ? $context["helpText"] : null), "", "required");
            echo "
                        ";
        } else {
            // line 44
            echo "                            ";
            ob_start();
            echo __("The Name of the Display - (1 - 50 characters).");
            $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 45
            echo "                            ";
            echo $context["forms"]->getinput("display", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "display", array()), (isset($context["helpText"]) ? $context["helpText"] : null), "", "required");
            echo "
                        ";
        }
        // line 47
        echo "                
                        ";
        // line 48
        ob_start();
        echo __("Display's Hardware Key");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "                        ";
        ob_start();
        echo __("A unique identifier for this display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        echo "                        ";
        echo $context["forms"]->getinput("license", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "license", array()), (isset($context["helpText"]) ? $context["helpText"] : null), "", "required", "", false);
        echo "

                        ";
        // line 52
        ob_start();
        echo __("Description");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "                        ";
        ob_start();
        echo __("A description - (1 - 254 characters).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "                        ";
        echo $context["forms"]->getinput("description", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "description", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 56
        ob_start();
        echo __("Tags");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        echo "                        ";
        ob_start();
        echo __("Tag this item. Comma Separated.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "                        ";
        echo $context["forms"]->getinputWithTags("tags", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "tags", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 60
        ob_start();
        echo __("Authorise display?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "                        ";
        ob_start();
        echo __("Use one of the available slots for this display?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo "                        ";
        ob_start();
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                        ";
        ob_start();
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        echo "                        ";
        $context["options"] = array(0 => array("licensedid" => 1, "licensed" =>         // line 65
(isset($context["yes"]) ? $context["yes"] : null)), 1 => array("licensedid" => 0, "licensed" =>         // line 66
(isset($context["no"]) ? $context["no"] : null)));
        // line 68
        echo "                        ";
        echo $context["forms"]->getdropdown("licensed", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "licensed", array()), (isset($context["options"]) ? $context["options"] : null), "licensedid", "licensed", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 70
        ob_start();
        echo __("Default Layout");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        echo "                        ";
        ob_start();
        echo __("The Default Layout to Display where there is no other content.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 72
        echo "                        ";
        echo $context["forms"]->getdropdown("defaultLayoutId", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "defaultLayoutId", array()), (isset($context["layouts"]) ? $context["layouts"] : null), "layoutId", "layout", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"location\">
                        ";
        // line 75
        ob_start();
        echo __("Latitude");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 76
        echo "                        ";
        ob_start();
        echo __("The Latitude of this display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 77
        echo "                        ";
        echo $context["forms"]->getnumber("latitude", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "latitude", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                        
                        ";
        // line 79
        ob_start();
        echo __("Longitude");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 80
        echo "                        ";
        ob_start();
        echo __("The Longitude of this Display");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 81
        echo "                        ";
        echo $context["forms"]->getnumber("longitude", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "longitude", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 83
        $context["attributes"] = array(0 => array("name" => "data-live-search", "value" => "true"), 1 => array("name" => "data-selected-text-format", "value" => "count > 4"));
        // line 87
        echo "                        ";
        ob_start();
        echo __("Timezone");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 88
        echo "                        ";
        ob_start();
        echo __("The timezone for this display, or empty to use the CMS timezone");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 89
        echo "                        ";
        echo $context["forms"]->getdropdown("timeZone", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "timeZone", array()), twig_array_merge(array(0 => array("id" => "", "value" => "")), (isset($context["timeZones"]) ? $context["timeZones"] : null)), "id", "value", (isset($context["helpText"]) ? $context["helpText"] : null), "selectPicker", "", "", "", (isset($context["attributes"]) ? $context["attributes"] : null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"maintenance\">

                        ";
        // line 93
        ob_start();
        echo __("Email Alerts");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 94
        echo "                        ";
        ob_start();
        echo __("Do you want to be notified by email if there is a problem with this display?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 95
        echo "                        ";
        ob_start();
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 96
        echo "                        ";
        ob_start();
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 97
        echo "                        ";
        $context["options"] = array(0 => array("id" => 0, "value" =>         // line 98
(isset($context["no"]) ? $context["no"] : null)), 1 => array("id" => 1, "value" =>         // line 99
(isset($context["yes"]) ? $context["yes"] : null)));
        // line 101
        echo "                        ";
        echo $context["forms"]->getdropdown("emailAlert", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "emailAlert", array()), (isset($context["options"]) ? $context["options"] : null), "id", "value", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "


                        ";
        // line 104
        ob_start();
        echo __("Use the Global Timeout?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 105
        echo "                        ";
        ob_start();
        echo __("Should this display be tested against the global time out or the client collection interval?");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 106
        echo "                        ";
        echo $context["forms"]->getcheckbox("alertTimeout", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "alertTimeout", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"wol\">

                        ";
        // line 110
        ob_start();
        echo __("Enable Wake on LAN");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 111
        echo "                        ";
        ob_start();
        echo __("Wake on Lan requires the correct network configuration to route the magic packet to the display PC");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 112
        echo "                        ";
        echo $context["forms"]->getcheckbox("wakeOnLanEnabled", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "wakeOnLanEnabled", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 114
        ob_start();
        echo __("BroadCast Address");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 115
        echo "                        ";
        ob_start();
        echo __("The IP address of the remote host's broadcast address (or gateway)");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 116
        echo "                        ";
        echo $context["forms"]->getinput("broadCastAddress", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "broadCastAddress", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 118
        ob_start();
        echo __("Wake on LAN SecureOn");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 119
        echo "                        ";
        ob_start();
        echo __("Enter a hexadecimal password of a SecureOn enabled Network Interface Card (NIC) of the remote host. Enter a value in this pattern: 'xx-xx-xx-xx-xx-xx'. Leave the following field empty, if SecureOn is not used (for example, because the NIC of the remote host does not support SecureOn).");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 120
        echo "                        ";
        echo $context["forms"]->getinput("secureOn", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "secureOn", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 122
        ob_start();
        echo __("Wake on LAN Time");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 123
        echo "                        ";
        ob_start();
        echo __("The time this display should receive the WOL command, using the 24hr clock - e.g. 19:00. Maintenance must be enabled.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 124
        echo "                        ";
        echo $context["forms"]->getinput("wakeOnLanTime", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "wakeOnLanTime", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "


                        ";
        // line 127
        ob_start();
        echo __("Wake on LAN CIDR");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 128
        echo "                        ";
        ob_start();
        echo __("Enter a number within the range of 0 to 32 in the following field. Leave the following field empty, if no subnet mask should be used (CIDR = 0). If the remote host's broadcast address is unknown: Enter the host name or IP address of the remote host in Broad Cast Address and enter the CIDR subnet mask of the remote host in this field.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 129
        echo "                        ";
        echo $context["forms"]->getinput("cidr", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "cidr", array()), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">

                        ";
        // line 133
        ob_start();
        echo __("Settings Profile?");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 134
        echo "                        ";
        ob_start();
        echo __("What display profile should this display use? To use the default profile leave this empty.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 135
        echo "                        ";
        echo $context["forms"]->getdropdown("displayProfileId", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "displayProfileId", array()), twig_array_merge(array(0 => array("displayProfileId" => null, "name" => "")), (isset($context["profiles"]) ? $context["profiles"] : null)), "displayProfileId", "name", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "
 

                        ";
        // line 138
        ob_start();
        echo __("Interleave Default");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 139
        echo "                        ";
        ob_start();
        echo __("Whether to always put the default layout into the cycle.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 140
        echo "                        ";
        ob_start();
        echo __("Yes");
        $context["yes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 141
        echo "                        ";
        ob_start();
        echo __("No");
        $context["no"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 142
        echo "                        ";
        $context["options"] = array(0 => array("id" => 0, "value" =>         // line 143
(isset($context["no"]) ? $context["no"] : null)), 1 => array("id" => 1, "value" =>         // line 144
(isset($context["yes"]) ? $context["yes"] : null)));
        // line 146
        echo "                        ";
        echo $context["forms"]->getdropdown("incSchedule", "single", (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "incSchedule", array()), (isset($context["options"]) ? $context["options"] : null), "id", "value", (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 148
        ob_start();
        echo __("Auditing until");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 149
        echo "                        ";
        ob_start();
        echo __("Collect auditing from this client. Should only be used if there is a problem with the display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 150
        echo "                        ";
        if ($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "isAuditing", array(), "method")) {
            // line 151
            echo "                            ";
            $context["auditing"] = $this->getAttribute((isset($context["display"]) ? $context["display"] : null), "auditingUntilIso", array());
            // line 152
            echo "                        ";
        } else {
            // line 153
            echo "                            ";
            $context["auditing"] = "";
            // line 154
            echo "                        ";
        }
        // line 155
        echo "                        ";
        echo $context["forms"]->getdatetime("auditingUntil", (isset($context["title"]) ? $context["title"] : null), (isset($context["auditing"]) ? $context["auditing"] : null), (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 157
        ob_start();
        echo __("Clear Cached Data");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 158
        echo "                        ";
        ob_start();
        echo __("Remove any cached data for this display.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 159
        echo "                        ";
        echo $context["forms"]->getcheckbox("clearCachedData", (isset($context["title"]) ? $context["title"] : null), 1, (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 161
        ob_start();
        echo __("Reconfigure XMR");
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 162
        echo "                        ";
        ob_start();
        echo __("Remove the XMR configuration for this Player and send a rekey action.");
        $context["helpText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 163
        echo "                        ";
        echo $context["forms"]->getcheckbox("rekeyXmr", (isset($context["title"]) ? $context["title"] : null), 0, (isset($context["helpText"]) ? $context["helpText"] : null));
        echo "

                        ";
        // line 165
        ob_start();
        echo __("The settings for this display are shown below. They are taken from the active Display Profile for this Display, which can be changed in Display Settings. If you have altered the Settings Profile above, you will need to save and re-show the form.");
        $context["message"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 166
        echo "                        ";
        echo $context["forms"]->getmessage((isset($context["message"]) ? $context["message"] : null));
        echo "

                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>";
        // line 171
        echo __("Setting");
        echo "</th>
                                    <th>";
        // line 172
        echo __("Value");
        echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) ? $context["settings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 177
            echo "                                <tr>
                                    <td>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valueString", array()), "html", null, true);
            echo "</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                            </tbody>
                        </table>
                    </div>

                </div>    
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "display-form-edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 182,  537 => 179,  533 => 178,  530 => 177,  526 => 176,  519 => 172,  515 => 171,  506 => 166,  502 => 165,  496 => 163,  491 => 162,  487 => 161,  481 => 159,  476 => 158,  472 => 157,  466 => 155,  463 => 154,  460 => 153,  457 => 152,  454 => 151,  451 => 150,  446 => 149,  442 => 148,  436 => 146,  434 => 144,  433 => 143,  431 => 142,  426 => 141,  421 => 140,  416 => 139,  412 => 138,  405 => 135,  400 => 134,  396 => 133,  388 => 129,  383 => 128,  379 => 127,  372 => 124,  367 => 123,  363 => 122,  357 => 120,  352 => 119,  348 => 118,  342 => 116,  337 => 115,  333 => 114,  327 => 112,  322 => 111,  318 => 110,  310 => 106,  305 => 105,  301 => 104,  294 => 101,  292 => 99,  291 => 98,  289 => 97,  284 => 96,  279 => 95,  274 => 94,  270 => 93,  262 => 89,  257 => 88,  252 => 87,  250 => 83,  244 => 81,  239 => 80,  235 => 79,  229 => 77,  224 => 76,  220 => 75,  213 => 72,  208 => 71,  204 => 70,  198 => 68,  196 => 66,  195 => 65,  193 => 64,  188 => 63,  183 => 62,  178 => 61,  174 => 60,  168 => 58,  163 => 57,  159 => 56,  153 => 54,  148 => 53,  144 => 52,  138 => 50,  133 => 49,  129 => 48,  126 => 47,  120 => 45,  115 => 44,  109 => 42,  104 => 41,  101 => 40,  97 => 39,  90 => 35,  85 => 33,  81 => 32,  77 => 31,  73 => 30,  69 => 29,  64 => 26,  61 => 25,  55 => 22,  51 => 21,  44 => 20,  41 => 19,  36 => 16,  33 => 15,  29 => 12,  27 => 13,  11 => 12,);
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

It is done, I mean this twig is probably fine, the 'name' in the settings at the end isn't quite right, but it's not a problem with this form.

#}

{% extends \"form-base.twig\" %}
{% import \"forms.twig\" as forms %}

{% block formTitle %}
    {% trans \"Edit Display\" %}
{% endblock %}

{% block formButtons %}
    {% trans \"Help\" %}, XiboHelpRender(\"{{ help }}\")
    {% trans \"Cancel\" %}, XiboDialogClose()
    {% trans \"Save\" %}, \$(\"#displayEditForm\").submit()
{% endblock %}

{% block formHtml %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#general\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"General\" %}</span></a></li>
                <li><a href=\"#location\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Location\" %}</span></a></li>
                <li><a href=\"#maintenance\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Maintenance\" %}</span></a></li>
                <li><a href=\"#wol\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Wake on LAN\" %}</span></a></li>
                <li><a href=\"#advanced\" role=\"tab\" data-toggle=\"tab\"><span>{% trans \"Advanced\" %}</span></a></li>
            </ul>
            <form id=\"displayEditForm\" class=\"XiboForm form-horizontal\" method=\"put\" action=\"{{ urlFor(\"display.edit\", {id: display.displayId}) }}\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\">

                        {% set title %}{% trans \"Display\" %}{% endset %}
                        {% if displayLockName %}
                            {% set helpText %}{% trans \"The Name of the Display - your administrator has locked this to the device name\" %}{% endset %}
                            {{ forms.disabled(\"display\", title, display.display, helpText, \"\", \"required\") }}
                        {% else %}
                            {% set helpText %}{% trans \"The Name of the Display - (1 - 50 characters).\" %}{% endset %}
                            {{ forms.input(\"display\", title, display.display, helpText, \"\", \"required\") }}
                        {% endif %}
                
                        {% set title %}{% trans \"Display's Hardware Key\" %}{% endset %}
                        {% set helpText %}{% trans \"A unique identifier for this display.\" %}{% endset %}
                        {{ forms.input(\"license\", title, display.license, helpText, \"\", \"required\", \"\", false) }}

                        {% set title %}{% trans \"Description\" %}{% endset %}
                        {% set helpText %}{% trans \"A description - (1 - 254 characters).\" %}{% endset %}
                        {{ forms.input(\"description\", title, display.description, helpText) }}

                        {% set title %}{% trans \"Tags\" %}{% endset %}
                        {% set helpText %}{% trans \"Tag this item. Comma Separated.\" %}{% endset %}
                        {{ forms.inputWithTags(\"tags\", title, display.tags, helpText) }}

                        {% set title %}{% trans \"Authorise display?\" %}{% endset %}
                        {% set helpText %}{% trans \"Use one of the available slots for this display?\" %}{% endset %}
                        {% set yes %}{% trans \"Yes\" %}{% endset %}
                        {% set no %}{% trans \"No\" %}{% endset %}
                        {% set options = [
                        { licensedid: 1, licensed: yes },
                        { licensedid: 0, licensed: no }
                        ] %}
                        {{ forms.dropdown(\"licensed\", \"single\", title, display.licensed, options, \"licensedid\", \"licensed\", helpText) }}

                        {% set title %}{% trans \"Default Layout\" %}{% endset %}
                        {% set helpText %}{% trans \"The Default Layout to Display where there is no other content.\" %}{% endset %}
                        {{ forms.dropdown(\"defaultLayoutId\", \"single\", title, display.defaultLayoutId, layouts, \"layoutId\", \"layout\", helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"location\">
                        {% set title %}{% trans \"Latitude\" %}{% endset %}
                        {% set helpText %}{% trans \"The Latitude of this display\" %}{% endset %}
                        {{ forms.number(\"latitude\", title, display.latitude, helpText) }}
                        
                        {% set title %}{% trans \"Longitude\" %}{% endset %}
                        {% set helpText %}{% trans \"The Longitude of this Display\" %}{% endset %}
                        {{ forms.number(\"longitude\", title, display.longitude, helpText) }}

                        {% set attributes = [
                        { name: \"data-live-search\", value: \"true\" },
                        { name: \"data-selected-text-format\", value: \"count > 4\" }
                        ] %}
                        {% set title %}{% trans \"Timezone\" %}{% endset %}
                        {% set helpText %}{% trans \"The timezone for this display, or empty to use the CMS timezone\" %}{% endset %}
                        {{ forms.dropdown(\"timeZone\", \"single\", title, display.timeZone, [{id:\"\", value:\"\"}]|merge(timeZones), \"id\", \"value\", helpText, \"selectPicker\", \"\", \"\", \"\", attributes) }}
                    </div>
                    <div class=\"tab-pane\" id=\"maintenance\">

                        {% set title %}{% trans \"Email Alerts\" %}{% endset %}
                        {% set helpText %}{% trans \"Do you want to be notified by email if there is a problem with this display?\" %}{% endset %}
                        {% set yes %}{% trans \"Yes\" %}{% endset %}
                        {% set no %}{% trans \"No\" %}{% endset %}
                        {% set options = [
                        { id: 0, value: no },
                        { id: 1, value: yes }
                        ] %}
                        {{ forms.dropdown(\"emailAlert\", \"single\", title, display.emailAlert, options, \"id\", \"value\", helpText) }}


                        {% set title %}{% trans \"Use the Global Timeout?\" %}{% endset %}
                        {% set helpText %}{% trans \"Should this display be tested against the global time out or the client collection interval?\" %}{% endset %}
                        {{ forms.checkbox(\"alertTimeout\", title, display.alertTimeout, helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"wol\">

                        {% set title %}{% trans \"Enable Wake on LAN\" %}{% endset %}
                        {% set helpText %}{% trans \"Wake on Lan requires the correct network configuration to route the magic packet to the display PC\" %}{% endset %}
                        {{ forms.checkbox(\"wakeOnLanEnabled\", title, display.wakeOnLanEnabled, helpText) }}

                        {% set title %}{% trans \"BroadCast Address\" %}{% endset %}
                        {% set helpText %}{% trans \"The IP address of the remote host\\'s broadcast address (or gateway)\" %}{% endset %}
                        {{ forms.input(\"broadCastAddress\", title, display.broadCastAddress, helpText) }}

                        {% set title %}{% trans \"Wake on LAN SecureOn\" %}{% endset %}
                        {% set helpText %}{% trans \"Enter a hexadecimal password of a SecureOn enabled Network Interface Card (NIC) of the remote host. Enter a value in this pattern: \\'xx-xx-xx-xx-xx-xx\\'. Leave the following field empty, if SecureOn is not used (for example, because the NIC of the remote host does not support SecureOn).\" %}{% endset %}
                        {{ forms.input(\"secureOn\", title, display.secureOn, helpText) }}

                        {% set title %}{% trans \"Wake on LAN Time\" %}{% endset %}
                        {% set helpText %}{% trans \"The time this display should receive the WOL command, using the 24hr clock - e.g. 19:00. Maintenance must be enabled.\" %}{% endset %}
                        {{ forms.input(\"wakeOnLanTime\", title, display.wakeOnLanTime, helpText) }}


                        {% set title %}{% trans \"Wake on LAN CIDR\" %}{% endset %}
                        {% set helpText %}{% trans \"Enter a number within the range of 0 to 32 in the following field. Leave the following field empty, if no subnet mask should be used (CIDR = 0). If the remote host\\'s broadcast address is unknown: Enter the host name or IP address of the remote host in Broad Cast Address and enter the CIDR subnet mask of the remote host in this field.\" %}{% endset %}
                        {{ forms.input(\"cidr\", title, display.cidr, helpText) }}
                    </div>
                    <div class=\"tab-pane\" id=\"advanced\">

                        {% set title %}{% trans \"Settings Profile?\" %}{% endset %}
                        {% set helpText %}{% trans \"What display profile should this display use? To use the default profile leave this empty.\" %}{% endset %}
                        {{ forms.dropdown(\"displayProfileId\", \"single\", title, display.displayProfileId, [{displayProfileId: null, name: \"\"}]|merge(profiles), \"displayProfileId\", \"name\", helpText) }}
 

                        {% set title %}{% trans \"Interleave Default\" %}{% endset %}
                        {% set helpText %}{% trans \"Whether to always put the default layout into the cycle.\" %}{% endset %}
                        {% set yes %}{% trans \"Yes\" %}{% endset %}
                        {% set no %}{% trans \"No\" %}{% endset %}
                        {% set options = [
                        { id: 0, value: no },
                        { id: 1, value: yes }
                        ] %}
                        {{ forms.dropdown(\"incSchedule\", \"single\", title, display.incSchedule, options, \"id\", \"value\", helpText) }}

                        {% set title %}{% trans \"Auditing until\" %}{% endset %}
                        {% set helpText %}{% trans \"Collect auditing from this client. Should only be used if there is a problem with the display.\" %}{% endset %}
                        {% if display.isAuditing() %}
                            {% set auditing = display.auditingUntilIso %}
                        {% else %}
                            {% set auditing = \"\" %}
                        {% endif %}
                        {{ forms.datetime(\"auditingUntil\", title, auditing, helpText) }}

                        {% set title %}{% trans \"Clear Cached Data\" %}{% endset %}
                        {% set helpText %}{% trans \"Remove any cached data for this display.\" %}{% endset %}
                        {{ forms.checkbox(\"clearCachedData\", title, 1, helpText) }}

                        {% set title %}{% trans \"Reconfigure XMR\" %}{% endset %}
                        {% set helpText %}{% trans \"Remove the XMR configuration for this Player and send a rekey action.\" %}{% endset %}
                        {{ forms.checkbox(\"rekeyXmr\", title, 0, helpText) }}

                        {% set message %}{% trans \"The settings for this display are shown below. They are taken from the active Display Profile for this Display, which can be changed in Display Settings. If you have altered the Settings Profile above, you will need to save and re-show the form.\" %}{% endset %}
                        {{ forms.message(message) }}

                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th>{% trans \"Setting\" %}</th>
                                    <th>{% trans \"Value\" %}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for item in settings %}
                                <tr>
                                    <td>{{item.title}}</td>
                                    <td>{{item.valueString}}</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                </div>    
            </form>
        </div>
    </div>
{% endblock %}", "display-form-edit.twig", "/var/www/web/views/display-form-edit.twig");
    }
}
