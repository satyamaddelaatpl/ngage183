<?php

/* schedule-page.twig */
class __TwigTemplate_2b5f258aad165d37b5a19ee7a22fc7f0ecd4d970d32421261d84e2bc1e0cd506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "schedule-page.twig", 9);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
            'javaScriptTemplates' => array($this, 'block_javaScriptTemplates'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["inline"] = $this->loadTemplate("inline.twig", "schedule-page.twig", 10);
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageContent($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"year\">";
        // line 16
        echo __("Year");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning active\" data-calendar-view=\"month\">";
        // line 17
        echo __("Month");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"week\">";
        // line 18
        echo __("Week");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"day\">";
        // line 19
        echo __("Day");
        echo "</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"agenda\">";
        // line 20
        echo __("Agenda");
        echo "</button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class='input-group date' id='dateInput'>
                    <input type='hidden' class=\"form-control\" />
                    <span class=\"input-group-addon\">
                        <i class=\"glyphicon glyphicon-calendar\"></i>
                    </span>
                </button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"prev\"><span class=\"glyphicon glyphicon-backward\"></span> ";
        // line 31
        echo __("Prev");
        echo "</button>
                <button type=\"button\" class=\"btn btn-default\" data-calendar-nav=\"today\">";
        // line 32
        echo __("Today");
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"next\">";
        // line 33
        echo __("Next");
        echo " <span class=\"glyphicon glyphicon-forward\"></span></button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class=\"btn btn-success XiboFormButton\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.add.form"), "html", null, true);
        echo "\">
                    ";
        // line 37
        echo __("Add Event");
        // line 38
        echo "                </button>
            </div>
            <div class=\"xibo-calendar-controls dropdown pull-right\">
                ";
        // line 41
        if (twig_in_filter( -1, (isset($context["selectedDisplayGroupIds"]) ? $context["selectedDisplayGroupIds"] : null))) {
            // line 42
            echo "                    ";
            $context["allSelected"] = "selected";
            // line 43
            echo "                ";
        } else {
            // line 44
            echo "                    ";
            $context["allSelected"] = "";
            // line 45
            echo "                ";
        }
        // line 46
        echo "                <select id=\"DisplayList\" class=\"form-control\" name=\"displayGroupIds[]\" data-live-search=\"true\" data-selected-text-format=\"count > 4\" data-none-selected-text=\"";
        echo __("Select Displays");
        echo "\" multiple>
                    <option value=\"-1\" ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["allSelected"]) ? $context["allSelected"] : null), "html", null, true);
        echo ">";
        echo __("All");
        echo "</option>
                    <optgroup label=\"";
        // line 48
        echo __("Groups");
        echo "\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 50
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "displayGroupId", array()), "html", null, true);
            echo "\" type=\"1\" ";
            if (twig_in_filter($this->getAttribute($context["group"], "displayGroupId", array()), (isset($context["selectedDisplayGroupIds"]) ? $context["selectedDisplayGroupIds"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "displayGroup", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </optgroup>
                    <optgroup label=\"";
        // line 53
        echo __("Displays");
        echo "\">
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["displays"]) ? $context["displays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["display"]) {
            // line 55
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["display"], "displayGroupId", array()), "html", null, true);
            echo "\" type=\"0\" ";
            if (twig_in_filter($this->getAttribute($context["display"], "displayGroupId", array()), (isset($context["selectedDisplayGroupIds"]) ? $context["selectedDisplayGroupIds"] : null))) {
                echo "selected=\"\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["display"], "displayGroup", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['display'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </optgroup>
                </select>
            </div>
            <div class=\"progress pull-right\"><span id=\"calendar-progress\"></span></div>
            <h1 class=\"page-header\"></h1>
        </div>         
    </div>
    <div class=\"row\">
        <!-- Time Slider -->
        <div class=\"col-sm-8 col-sm-offset-2 cal-event-time-bar\" style=\"display:none;\">
            <input id=\"timePicker\" data-slider-id='timePickerSlider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"1439\" data-slider-step=\"1\" data-slider-value=\"0\" data-slider-handle=\"square\" />
        </div> 
    </div> 
    <div class=\"row\">
        <div id=\"CalendarContainer\" data-event-source=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.calendar.data"), "html", null, true);
        echo "\" data-agenda-link=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->urlFor("schedule.events"), "html", null, true);
        echo "\" data-calendar-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "CALENDAR_TYPE", array()), "html", null, true);
        echo "\" class=\"col-sm-12\">
            <div id=\"Calendar\"></div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"cal-legend\">
                <ul>
                    <li class=\"event-always\"><span class=\"fa fa-retweet\"></span> ";
        // line 79
        echo __("Always showing");
        echo "</li>
                    <li class=\"event-info\"><span class=\"fa fa-desktop\"></span> ";
        // line 80
        echo __("Single Display");
        echo "</li>
                    <li class=\"event-success\"><span class=\"fa fa-desktop\"></span> ";
        // line 81
        echo __("Multi Display");
        echo "</li>
                    <li class=\"event-important\"><span class=\"fa fa-bullseye\"></span> ";
        // line 82
        echo __("Priority");
        echo "</li>
                    <li class=\"event-special\"><span class=\"fa fa-repeat\"></span> ";
        // line 83
        echo __("Recurring");
        echo "</li>
                    <li class=\"event-inverse\"><span class=\"fa fa-lock\"></span> ";
        // line 84
        echo __("View Permission Only");
        echo "</li>
                    <li class=\"event-command\"><span class=\"fa fa-wrench\"></span> ";
        // line 85
        echo __("Command");
        echo "</li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 92
    public function block_javaScriptTemplates($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        // line 476
        echo "
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-day\">
            <div id=\"cal-day-box\">
                <div class=\"row-fluid clearfix cal-row-head\">
                    <div class=\"span1 col-xs-1 cal-cell\"><%= cal.locale.time %></div>
                    <div class=\"span11 col-xs-11 cal-cell\"><%= cal.locale.events %></div>
                </div>
                <% if(all_day.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-1\"><b><%= cal.locale.all_day %></b></div>
                    <div class=\"span11 col-xs-11\">
                        <% _.each(all_day, function(event){ %>
                        <%
                        var eventTitle = (event.event.dayPartId == 1) ? event.title : \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                        %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" class=\"event-item\">
                                <%= eventTitle %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <% if(before_time.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-3\"><b><%= cal.locale.before_time %></b></div>
                    <div class=\"span5 col-xs-5\">
                        <% _.each(before_time, function(event){ %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <span class=\"cal-hours pull-right\"><%= event.end_hour %></span>
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" class=\"event-item\">
                                <%= event.title %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <div id=\"cal-day-panel\" class=\"clearfix\">
                    <div id=\"cal-day-panel-hour\">
                        <% for(i = 0; i < hours; i++){ %>
                        <div class=\"cal-day-hour\">
                            <% for(l = 0; l < cal._hour_min(i); l++){ %>
                            <div class=\"row-fluid cal-day-hour-part\">
                                <div class=\"span1 col-xs-1\"><b><%= cal._hour(i, l) %></b></div>
                                <div class=\"span11 col-xs-11\"></div>
                            </div>
                            <% }; %>
                        </div>
                        <% }; %>
                    </div>

                    <% _.each(by_hour, function(event){ %>
                    <div class=\"pull-left day-event day-highlight dh-<%= event['class'] %>\" style=\"margin-top: <%= (event.top * 30) %>px; height: <%= (event.lines * 30) %>px\"
                    <% if (event.lines < 2) { %>data-toggle=\"popover\" data-html=\"true\" data-content=\"<a href='<%= event.url ? event.url : \"javascript:void(0)\" %>'><%= event.title %></a>\" title=\"<%= event.start_hour %> - <%= event.end_hour %>\"<% } %>
                    >
                    <span class=\"cal-hours\"><%= event.start_hour %> - <%= event.end_hour %></span>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                        <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            <% if(after_time.length) {%>
            <div class=\"row-fluid clearfix cal-day-hour\">
                <div class=\"span1 col-xs-3\"><b><%= cal.locale.after_time %></b></div>
                <div class=\"span11 col-xs-9\">
                    <% _.each(after_time, function(event){ %>
                    <div class=\"day-highlight dh-<%= event['class'] %>\">
                        <span class=\"cal-hours\"><%= event.start_hour %></span>
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                            <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            </div>
            <% }; %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-events-list\">
            <span id=\"cal-slide-tick\" style=\"display: none\"></span>
            <div id=\"cal-slide-content\" class=\"cal-event-list\">
                <ul class=\"unstyled list-unstyled\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.dayPartId != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.dayPartId == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2)
                    eventIcon = \"fa-wrench\";

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <li>
                        <span class=\"pull-left event <%= event['class'] %>\"></span>&nbsp;
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-class=\"<%= eventClass %>\" class=\"event-item\">
                            <span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                    </li>
                    <% }) %>
                </ul>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month\">
            <div class=\"cal-row-fluid cal-row-head\">
                <% _.each(days_name, function(name){ %>
                <div class=\"cal-cell1\"><%= name %></div>
                <% }) %>
            </div>
            <div class=\"cal-month-box\">
                <% for(i = 0; i < 6; i++) { %>
                <% if(cal.stop_cycling == true) break; %>
                <div class=\"cal-row-fluid cal-before-eventlist\">
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day1\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day2\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day3\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day4\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day5\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day6\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day7\"><%= cal._day(i, day++) %></div>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month-day\">
            <div class=\"cal-month-day <%= cls %>\">
                <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"day\" data-toggle=\"tooltip\" title=\"<%= tooltip %>\"><%= day %></span>
                <% if (events.length > 0) { %>
                <div class=\"events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.dayPartId != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.dayPartId == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2)
                    eventIcon = \"fa-wrench\";

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" data-event-class=\"<%= eventClass %>\"
                       class=\"pull-left event <%= eventClass %>\" data-toggle=\"tooltip\"
                       title=\"<%= event.title %>\"><span class=\"fa <%= eventIcon %>\"></span></a>
                    <% }); %>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week\">
            <div class=\"cal-week-box\">
                <div class=\"cal-offset1 cal-column\"></div>
                <div class=\"cal-offset2 cal-column\"></div>
                <div class=\"cal-offset3 cal-column\"></div>
                <div class=\"cal-offset4 cal-column\"></div>
                <div class=\"cal-offset5 cal-column\"></div>
                <div class=\"cal-offset6 cal-column\"></div>
                <div class=\"cal-row-fluid cal-row-head\">
                    <% _.each(days_name, function(name) { %>
                    <div class=\"cal-cell1 <%= cal._getDayClass('week', start) %>\" data-toggle=\"tooltip\" title=\"<%= cal._getHolidayName(start) %>\"><%= name %><br>
                        <small><span data-cal-date=\"<%= start.getFullYear() %>-<%= start.getMonthFormatted() %>-<%= start.getDateFormatted() %>\" data-cal-view=\"day\"><%= cal.options.type !== 'Jalali' ? start.getDate() : start.getJalaliDate() %> <%= cal.options.type !== 'Jalali' ? cal.locale['ms' + start.getMonth()] : cal.locale['jms' + (start.getJalaliMonth() - 1)] %></span></small>
                    </div>
                    <% start.setDate(start.getDate() + 1); %>
                    <% }) %>
                </div>
                <hr>
                <%= cal._week() %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week-days\">
            <% _.each(events, function(event){ %>
            <%
            var title = event.title;
            var eventIcon = \"fa-desktop\";
            var eventClass = \"event-warning\";

            if (event.event.dayPartId != 1) {
            if (event.event.eventTypeId == 2) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else if (event.sameDay) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
            }
            }

            if (event.event.displayOrder > 0)
            title = title + \" (\" + event.event.displayOrder + \")\";

            if (event.event.displayGroups.length <= 1) {
            eventClass = \"event-info\";
            }
            else {
            eventClass = \"event-success\";
            }

            if (event.event.dayPartId == 1) {
            eventIcon = \"fa-retweet\";
            }

            if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
            eventClass = \"event-special\";
            eventIcon = \"fa-repeat\";
            }

            if (event.event.isPriority == 1) {
            eventClass = \"event-important\";
            eventIcon = \"fa-bullseye\";
            }

            if (!event.editable) {
            event.url = null;
            eventIcon = \"fa-wrench\";
            eventClass = \"event-inverse\";
            }
            %>
            <div class=\"cal-row-fluid\">
                <div class=\"cal-cell<%= event.days%> cal-offset<%= event.start_day %> day-highlight dh-<%= event['class'] %>\">
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\"
                       data-event-id=\"<%= event.id %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"cal-event-week event<%= event.id %>\"><span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                </div>
            </div>
            <% }); %>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year\">
            <div class=\"cal-year-box\">
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(0) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(1) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(2) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(3) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(4) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(5) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(6) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(7) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(8) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(9) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(10) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(11) %></div>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year-month\">
            <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"month\"><%= month_name %></span>
            <% if (events.length > 0) { %>
            <small class=\"cal-events-num badge badge-important pull-left\"><%= events.length %></small>
            <div class=\"hide events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                <% _.each(events, function(event) { %>
                <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" data-event-class=\"<%= event['class'] %>\"
                   class=\"pull-left event <%= event['class'] %> event<%= event.id %>\" data-toggle=\"tooltip\"
                   title=\"<%= event.title %>\"></a>
                <% }); %>
            </div>
            <% } %>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda\">
            
            <div class=\"container-fluid\">
                
                <!-- Content panel with tabs -->
                <div class=\"panel with-nav-tabs panel-default agenda-panel\">
                
                    <!-- Tab Panel -->
                    <% if (typeof agenda.displayGroupList != 'undefined' && agenda.displayGroupList.length > 0) { %>
                        <div class=\"panel-heading\">
                                <ul class=\"nav nav-tabs\">
                                    <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                        <% if (displayGroup['id'] == agenda.selectedDisplayGroup) { %>
                                            <li class=\"active\">
                                        <% } else { %>
                                            <li>
                                        <% }; %>
                                        
                                        <%
                                            // If it is a simple display show an 
                                            var displayGroupIcon = \"\";
                                            if (displayGroup['isDisplaySpecific'] == 0)
                                                displayGroupIcon = \"<span class='fa fa-television'></span> \";
                                        %>
                                        
                                        <a data-toggle=\"tab\" data-id=\"<%= displayGroup['id'] %>\" href=\"#tab_<%= displayGroup['id'] %>\">
                                            <%= (displayGroupIcon + displayGroup['name']) %>
                                        </a>
                                        </li>
                                    <% }); %>
                                </ul> 
                        </div>
                    <% } %>
                
                    <!-- Tab Content -->
                    <div class=\"panel-body\">
                    
                    <% if (agenda.errorMessage != '') { %>
                       ";
        echo "
                       <!-- Request failed - Show Error Message -->
                       <div class=\"text-danger text-center\">
                           <% if (agenda.errorMessage == 'display_not_selected') { %>
                               <p>";
        // line 480
        echo __("Display not selected!");
        echo "</p>
                           <% } else if (agenda.errorMessage == 'no_events') { %>
                               <p>";
        // line 482
        echo __("No events for the chosen Display/Display Group on the selected date!");
        echo "</p>    
                           <% } else  if (agenda.errorMessage == 'request_failed') { %>
                               <p>";
        // line 484
        echo __("Data request failed!");
        echo "</p>
                           <% } %>
                       </div>
                       ";
        // line 531
        echo "
                   <% } else if(!jQuery.isEmptyObject(agenda.results)) { %>
                        <!-- Request successful - Show Data -->
                            
                        <!-- Breadcrumb trail -->
                        <div class=\"cal-event-breadcrumb-trail col-xs-12\">
                            <div id=\"content\"></div>
                        </div>     
                        
                        <!-- Agenda Data Content -->
                        <div class=\"tab-content\">
                            <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                <% if (typeof agenda.results[(displayGroup['id'])] != 'undefined') { %>
                                    <% 
                                        var resultItem = agenda.results[displayGroup['id']]; 
                                        var isActive = (displayGroup['id'] == agenda.selectedDisplayGroup) ? 'active' : '';
                                    %>
                                    <div id=\"tab_<%= displayGroup['id'] %>\" class=\"tab-pane fade in <%= isActive %> container-fluid\">
                                        <% if(typeof resultItem.events != 'undefined') { %>
                                            <div class=\"col-lg-9\">
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 1) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 3) %>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <%= cal._displaygroups(resultItem.events, resultItem.displayGroups) %>
                                                <%= cal._campaigns(resultItem.events, resultItem.campaigns) %>
                                            </div> 
                                         <% } %>
                                    </div>
                                <% } %>
                            <% }); %>
                        </div>
                    <% } %>   
                    </div>
                </div>
            </div>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-layouts\">
            <table id=\"layouts\" class=\"table agenda-table\">
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"10\">
                            <% if (layouts.type == 1) { %>
                                ";
        echo __("Layouts");
        // line 533
        echo "</span>
                            <% } else if (layouts.type == 3) { %>
                                ";
        echo __("Overlay Layouts");
        // line 537
        echo "
                            <% } %> 
                        </th>
                    </tr>
                    ";
        echo "
                    <tr>
                        <th></th>
                        <th>";
        // line 540
        echo __("ID");
        echo "</th>
                        <th>";
        // line 541
        echo __("Layout Name");
        echo "</th>
                        <th>";
        // line 542
        echo __("Status");
        echo "</th>
                        <th>";
        // line 543
        echo __("From Date");
        echo "</th>
                        <th>";
        // line 544
        echo __("To Date");
        echo "</th>
                        <th>";
        // line 545
        echo __("Layout Duration");
        echo "</th>
                        <th>";
        // line 546
        echo __("Display Order");
        echo "</th>
                        <th>";
        // line 547
        echo __("Priority");
        echo "</th>
                        <th>";
        // line 548
        echo __("Visible");
        echo "</th>
                    </tr>
                    ";
        // line 560
        echo "
                </thead>
                <tbody>
                    <% _.each(layouts, function(layout){ %>
                        <tr 
                            class=\"<%= layout.itemClass %>\"
                            data-elem-id=\"<%= layout.layoutId %>\" 
                            data-event-id=\"<%= layout.eventId %>\" 
                            data-toggle=\"tooltip\"
                            <% if (layout.itemClass == 'low-priority') { %>
                                title=\"";
        echo __("This layout will not be shown as there are higher priority layouts scheduled at this time");
        // line 579
        echo "\"
                            <% } %> 
                        >
                            <td><span class=\"fa <%= layout.itemIcon %>\"></span></td>
                            <td><%= layout.layoutId %></td>
                            <td><%= layout.layoutName %></td>
                            <%
                                var icon = \"\";
                                if (layout.layoutStatus == 1)
                                    icon = \"fa-check\";
                                else if (layout.layoutStatus == 0)
                                    icon = \"fa-times\";
                                else if (layout.layoutStatus == 3)
                                    icon = \"fa-cogs\";
                                else
                                    icon = \"fa-exclamation\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <% if (layout.eventDayPartId == 1) { %>
                                <td>";
        echo __("Always");
        // line 605
        echo "</td>
                                <td><span class=\"fa fa-retweet\"></span></td>
                            <% } else { %> 
                                <td><%= layout.eventFromDt %></td>
                                <td><%= layout.eventToDt %></td>
                            <% } %> 
                            
                            <td><%= layout.layoutDuration %></td>
                            <td><%= layout.layoutDisplayOrder %></td>
                            <td><%= layout.eventPriority %></td>
                            <%
                                var icon = \"\";
                                if (layout.itemClass == 'low-priority')
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-displaygroups\">
            <table id=\"displaygroups\" class=\"table agenda-table\">
                ";
        echo "
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">";
        // line 608
        echo __("Display Groups");
        echo "</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>";
        // line 612
        echo __("ID");
        echo "</th>
                        <th>";
        // line 613
        echo __("Name");
        echo "</th>
                    </tr>
                </thead>
                ";
        // line 636
        echo "
                <tbody>
                    <% _.each(displaygroups, function(displaygroup){ %>
                        <tr data-elem-id=\"<%= displaygroup.displayGroupId %>\">
                            <%
                                var icon = \"\";
                                if (displaygroup.isDisplaySpecific == 1)
                                    icon = \"fa-television\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <td><%= displaygroup.displayGroupId %></td>
                            <td><%= displaygroup.displayGroup %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-campaigns\">
            <table id=\"campaigns\" class=\"table agenda-table\">
                ";
        echo "
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">";
        // line 639
        echo __("Campaigns");
        echo "</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>";
        // line 643
        echo __("ID");
        echo "</th>
                        <th>";
        // line 644
        echo __("Name");
        echo "</th>
                    </tr>
                </thead>
                ";
        // line 683
        echo "
                <tbody>
                    <% _.each(campaigns, function(campaign){ %>
                        <tr data-elem-id=\"<%= campaign.campaignId %>\">
                            <td></td>
                            <td><%= campaign.campaignId %></td>
                            <td><%= campaign.campaign %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-breadcrumb-trail\">
            <!-- Layout -->
            <span>
                <a href=\"<%= layout.link %>\"><%= layout.name %></a>
            </span>
            
            <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            
            <!-- Campaign -->
            <% if (typeof campaign != 'undefined') { %>
                <span>
                    <% if (campaign.link != '') { %>
                      <a href=\"<%= campaign.link %>\"><%= campaign.name %></a>
                    <% } else { %>   
                      <%= campaign.name %>
                    <% } %> 
                </span>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            <% } %> 
            
            <!-- Schedule -->
            <span>
                <a href=\"<%= schedule.link %>\" class=\"XiboFormButton\">
                    ";
        echo "
                        ";
        // line 684
        echo __("Schedule");
        // line 685
        echo "                    ";
        // line 703
        echo "
                </a>
            </span>
            
            <!-- Display Groups -->
            <% _.each(displayGroups, function(displayGroup){ %>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
                <span>
                  <% if (displayGroup.link != '') { %>
                    <a href=\"<%= displayGroup.link %>\"><%= displayGroup.name %></a>
                  <% } else { %>   
                    <%= displayGroup.name %>
                  <% } %> 
                </span>
            <% }); %>
            
        </script>
        
    ";
        echo "
";
    }

    public function getTemplateName()
    {
        return "schedule-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 703,  913 => 685,  911 => 684,  871 => 683,  865 => 644,  861 => 643,  854 => 639,  828 => 636,  822 => 613,  818 => 612,  811 => 608,  779 => 605,  757 => 579,  744 => 560,  739 => 548,  735 => 547,  731 => 546,  727 => 545,  723 => 544,  719 => 543,  715 => 542,  711 => 541,  707 => 540,  697 => 537,  692 => 533,  645 => 531,  639 => 484,  634 => 482,  629 => 480,  239 => 476,  237 => 93,  234 => 92,  224 => 85,  220 => 84,  216 => 83,  212 => 82,  208 => 81,  204 => 80,  200 => 79,  185 => 71,  169 => 57,  154 => 55,  150 => 54,  146 => 53,  143 => 52,  128 => 50,  124 => 49,  120 => 48,  114 => 47,  109 => 46,  106 => 45,  103 => 44,  100 => 43,  97 => 42,  95 => 41,  90 => 38,  88 => 37,  84 => 36,  78 => 33,  74 => 32,  70 => 31,  56 => 20,  52 => 19,  48 => 18,  44 => 17,  40 => 16,  35 => 13,  32 => 12,  28 => 9,  26 => 10,  11 => 9,);
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
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"year\">{% trans \"Year\" %}</button>
                <button type=\"button\" class=\"btn btn-warning active\" data-calendar-view=\"month\">{% trans \"Month\" %}</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"week\">{% trans \"Week\" %}</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"day\">{% trans \"Day\" %}</button>
                <button type=\"button\" class=\"btn btn-warning\" data-calendar-view=\"agenda\">{% trans \"Agenda\" %}</button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class='input-group date' id='dateInput'>
                    <input type='hidden' class=\"form-control\" />
                    <span class=\"input-group-addon\">
                        <i class=\"glyphicon glyphicon-calendar\"></i>
                    </span>
                </button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"prev\"><span class=\"glyphicon glyphicon-backward\"></span> {% trans \"Prev\" %}</button>
                <button type=\"button\" class=\"btn btn-default\" data-calendar-nav=\"today\">{% trans \"Today\" %}</button>
                <button type=\"button\" class=\"btn btn-primary\" data-calendar-nav=\"next\">{% trans \"Next\" %} <span class=\"glyphicon glyphicon-forward\"></span></button>
            </div>
            <div class=\"btn-group pull-right xibo-calendar-controls\">
                <button class=\"btn btn-success XiboFormButton\" href=\"{{ urlFor(\"schedule.add.form\") }}\">
                    {% trans \"Add Event\" %}
                </button>
            </div>
            <div class=\"xibo-calendar-controls dropdown pull-right\">
                {% if -1 in selectedDisplayGroupIds %}
                    {% set allSelected = \"selected\" %}
                {% else %}
                    {% set allSelected = \"\" %}
                {% endif %}
                <select id=\"DisplayList\" class=\"form-control\" name=\"displayGroupIds[]\" data-live-search=\"true\" data-selected-text-format=\"count > 4\" data-none-selected-text=\"{% trans \"Select Displays\" %}\" multiple>
                    <option value=\"-1\" {{ allSelected }}>{% trans \"All\" %}</option>
                    <optgroup label=\"{% trans \"Groups\" %}\">
                        {% for group in groups %}
                        <option value=\"{{ group.displayGroupId }}\" type=\"1\" {% if group.displayGroupId in selectedDisplayGroupIds %}selected{% endif %}>{{ group.displayGroup }}</option>
                        {% endfor %}
                    </optgroup>
                    <optgroup label=\"{% trans \"Displays\" %}\">
                        {% for display in displays %}
                        <option value=\"{{ display.displayGroupId }}\" type=\"0\" {% if display.displayGroupId in selectedDisplayGroupIds %}selected=\"\" {% endif %}>{{ display.displayGroup }}</option>
                        {% endfor %}
                    </optgroup>
                </select>
            </div>
            <div class=\"progress pull-right\"><span id=\"calendar-progress\"></span></div>
            <h1 class=\"page-header\"></h1>
        </div>         
    </div>
    <div class=\"row\">
        <!-- Time Slider -->
        <div class=\"col-sm-8 col-sm-offset-2 cal-event-time-bar\" style=\"display:none;\">
            <input id=\"timePicker\" data-slider-id='timePickerSlider' type=\"text\" data-slider-min=\"0\" data-slider-max=\"1439\" data-slider-step=\"1\" data-slider-value=\"0\" data-slider-handle=\"square\" />
        </div> 
    </div> 
    <div class=\"row\">
        <div id=\"CalendarContainer\" data-event-source=\"{{ urlFor(\"schedule.calendar.data\") }}\" data-agenda-link=\"{{ urlFor(\"schedule.events\") }}\" data-calendar-type=\"{{ settings.CALENDAR_TYPE }}\" class=\"col-sm-12\">
            <div id=\"Calendar\"></div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"cal-legend\">
                <ul>
                    <li class=\"event-always\"><span class=\"fa fa-retweet\"></span> {% trans \"Always showing\" %}</li>
                    <li class=\"event-info\"><span class=\"fa fa-desktop\"></span> {% trans \"Single Display\" %}</li>
                    <li class=\"event-success\"><span class=\"fa fa-desktop\"></span> {% trans \"Multi Display\" %}</li>
                    <li class=\"event-important\"><span class=\"fa fa-bullseye\"></span> {% trans \"Priority\" %}</li>
                    <li class=\"event-special\"><span class=\"fa fa-repeat\"></span> {% trans \"Recurring\" %}</li>
                    <li class=\"event-inverse\"><span class=\"fa fa-lock\"></span> {% trans \"View Permission Only\" %}</li>
                    <li class=\"event-command\"><span class=\"fa fa-wrench\"></span> {% trans \"Command\" %}</li>
                </ul>
            </div>
        </div>
    </div>
{% endblock %}

{% block javaScriptTemplates %}
    {% raw %}
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-day\">
            <div id=\"cal-day-box\">
                <div class=\"row-fluid clearfix cal-row-head\">
                    <div class=\"span1 col-xs-1 cal-cell\"><%= cal.locale.time %></div>
                    <div class=\"span11 col-xs-11 cal-cell\"><%= cal.locale.events %></div>
                </div>
                <% if(all_day.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-1\"><b><%= cal.locale.all_day %></b></div>
                    <div class=\"span11 col-xs-11\">
                        <% _.each(all_day, function(event){ %>
                        <%
                        var eventTitle = (event.event.dayPartId == 1) ? event.title : \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                        %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" class=\"event-item\">
                                <%= eventTitle %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <% if(before_time.length) {%>
                <div class=\"row-fluid clearfix cal-day-hour\">
                    <div class=\"span1 col-xs-3\"><b><%= cal.locale.before_time %></b></div>
                    <div class=\"span5 col-xs-5\">
                        <% _.each(before_time, function(event){ %>
                        <div class=\"day-highlight dh-<%= event['class'] %>\">
                            <span class=\"cal-hours pull-right\"><%= event.end_hour %></span>
                            <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" class=\"event-item\">
                                <%= event.title %></a>
                        </div>
                        <% }); %>
                    </div>
                </div>
                <% }; %>
                <div id=\"cal-day-panel\" class=\"clearfix\">
                    <div id=\"cal-day-panel-hour\">
                        <% for(i = 0; i < hours; i++){ %>
                        <div class=\"cal-day-hour\">
                            <% for(l = 0; l < cal._hour_min(i); l++){ %>
                            <div class=\"row-fluid cal-day-hour-part\">
                                <div class=\"span1 col-xs-1\"><b><%= cal._hour(i, l) %></b></div>
                                <div class=\"span11 col-xs-11\"></div>
                            </div>
                            <% }; %>
                        </div>
                        <% }; %>
                    </div>

                    <% _.each(by_hour, function(event){ %>
                    <div class=\"pull-left day-event day-highlight dh-<%= event['class'] %>\" style=\"margin-top: <%= (event.top * 30) %>px; height: <%= (event.lines * 30) %>px\"
                    <% if (event.lines < 2) { %>data-toggle=\"popover\" data-html=\"true\" data-content=\"<a href='<%= event.url ? event.url : \"javascript:void(0)\" %>'><%= event.title %></a>\" title=\"<%= event.start_hour %> - <%= event.end_hour %>\"<% } %>
                    >
                    <span class=\"cal-hours\"><%= event.start_hour %> - <%= event.end_hour %></span>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                       data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                        <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            <% if(after_time.length) {%>
            <div class=\"row-fluid clearfix cal-day-hour\">
                <div class=\"span1 col-xs-3\"><b><%= cal.locale.after_time %></b></div>
                <div class=\"span11 col-xs-9\">
                    <% _.each(after_time, function(event){ %>
                    <div class=\"day-highlight dh-<%= event['class'] %>\">
                        <span class=\"cal-hours\"><%= event.start_hour %></span>
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-class=\"<%= event['class'] %>\" class=\"event-item\">
                            <%= event.title %></a>
                    </div>
                    <% }); %>
                </div>
            </div>
            <% }; %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-events-list\">
            <span id=\"cal-slide-tick\" style=\"display: none\"></span>
            <div id=\"cal-slide-content\" class=\"cal-event-list\">
                <ul class=\"unstyled list-unstyled\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.dayPartId != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.dayPartId == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2)
                    eventIcon = \"fa-wrench\";

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <li>
                        <span class=\"pull-left event <%= event['class'] %>\"></span>&nbsp;
                        <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\"
                           data-event-class=\"<%= eventClass %>\" class=\"event-item\">
                            <span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                    </li>
                    <% }) %>
                </ul>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month\">
            <div class=\"cal-row-fluid cal-row-head\">
                <% _.each(days_name, function(name){ %>
                <div class=\"cal-cell1\"><%= name %></div>
                <% }) %>
            </div>
            <div class=\"cal-month-box\">
                <% for(i = 0; i < 6; i++) { %>
                <% if(cal.stop_cycling == true) break; %>
                <div class=\"cal-row-fluid cal-before-eventlist\">
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day1\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day2\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day3\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day4\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day5\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day6\"><%= cal._day(i, day++) %></div>
                    <div class=\"cal-cell1 cal-cell\" data-cal-row=\"-day7\"><%= cal._day(i, day++) %></div>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-month-day\">
            <div class=\"cal-month-day <%= cls %>\">
                <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"day\" data-toggle=\"tooltip\" title=\"<%= tooltip %>\"><%= day %></span>
                <% if (events.length > 0) { %>
                <div class=\"events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                    <% _.each(events, function(event) { %>
                    <%
                    var title = event.title;
                    var eventIcon = \"fa-desktop\";
                    var eventClass = \"event-warning\";

                    if (event.event.dayPartId != 1) {
                    if (event.event.eventTypeId == 2) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else if (event.sameDay) {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
                    } else {
                    title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
                    }
                    }

                    if (event.event.displayOrder > 0)
                    title = title + \" (\" + event.event.displayOrder + \")\";

                    if (event.event.displayGroups.length <= 1) {
                    eventClass = \"event-info\";
                    }
                    else {
                    eventClass = \"event-success\";
                    }

                    if (event.event.dayPartId == 1) {
                    eventIcon = \"fa-retweet\";
                    }

                    if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
                    eventClass = \"event-special\";
                    eventIcon = \"fa-repeat\";
                    }

                    if (event.event.isPriority >= 1) {
                    eventClass = \"event-important\";
                    eventIcon = \"fa-bullseye\";
                    }

                    if (event.event.eventTypeId == 2)
                    eventIcon = \"fa-wrench\";

                    if (!event.editable) {
                    event.url = null;
                    eventIcon = \"fa-lock\";
                    eventClass = \"event-inverse\";
                    }
                    %>
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" data-event-class=\"<%= eventClass %>\"
                       class=\"pull-left event <%= eventClass %>\" data-toggle=\"tooltip\"
                       title=\"<%= event.title %>\"><span class=\"fa <%= eventIcon %>\"></span></a>
                    <% }); %>
                </div>
                <% } %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week\">
            <div class=\"cal-week-box\">
                <div class=\"cal-offset1 cal-column\"></div>
                <div class=\"cal-offset2 cal-column\"></div>
                <div class=\"cal-offset3 cal-column\"></div>
                <div class=\"cal-offset4 cal-column\"></div>
                <div class=\"cal-offset5 cal-column\"></div>
                <div class=\"cal-offset6 cal-column\"></div>
                <div class=\"cal-row-fluid cal-row-head\">
                    <% _.each(days_name, function(name) { %>
                    <div class=\"cal-cell1 <%= cal._getDayClass('week', start) %>\" data-toggle=\"tooltip\" title=\"<%= cal._getHolidayName(start) %>\"><%= name %><br>
                        <small><span data-cal-date=\"<%= start.getFullYear() %>-<%= start.getMonthFormatted() %>-<%= start.getDateFormatted() %>\" data-cal-view=\"day\"><%= cal.options.type !== 'Jalali' ? start.getDate() : start.getJalaliDate() %> <%= cal.options.type !== 'Jalali' ? cal.locale['ms' + start.getMonth()] : cal.locale['jms' + (start.getJalaliMonth() - 1)] %></span></small>
                    </div>
                    <% start.setDate(start.getDate() + 1); %>
                    <% }) %>
                </div>
                <hr>
                <%= cal._week() %>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-week-days\">
            <% _.each(events, function(event){ %>
            <%
            var title = event.title;
            var eventIcon = \"fa-desktop\";
            var eventClass = \"event-warning\";

            if (event.event.dayPartId != 1) {
            if (event.event.eventTypeId == 2) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else if (event.sameDay) {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsTimeFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsTimeFormat) + \"] \" + event.title;
            } else {
            title = \"[\" + moment(event.scheduleEvent.fromDt, systemDateFormat).format(jsDateFormat) + \" - \" + moment(event.scheduleEvent.toDt, systemDateFormat).format(jsDateFormat) + \"] \" + event.title;
            }
            }

            if (event.event.displayOrder > 0)
            title = title + \" (\" + event.event.displayOrder + \")\";

            if (event.event.displayGroups.length <= 1) {
            eventClass = \"event-info\";
            }
            else {
            eventClass = \"event-success\";
            }

            if (event.event.dayPartId == 1) {
            eventIcon = \"fa-retweet\";
            }

            if (event.event.recurrenceType != null && event.event.recurrenceType != \"\") {
            eventClass = \"event-special\";
            eventIcon = \"fa-repeat\";
            }

            if (event.event.isPriority == 1) {
            eventClass = \"event-important\";
            eventIcon = \"fa-bullseye\";
            }

            if (!event.editable) {
            event.url = null;
            eventIcon = \"fa-wrench\";
            eventClass = \"event-inverse\";
            }
            %>
            <div class=\"cal-row-fluid\">
                <div class=\"cal-cell<%= event.days%> cal-offset<%= event.start_day %> day-highlight dh-<%= event['class'] %>\">
                    <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\"
                       data-event-id=\"<%= event.id %>\"
                       data-event-class=\"<%= eventClass %>\"
                       class=\"cal-event-week event<%= event.id %>\"><span class=\"fa <%= eventIcon %>\"></span> <%= title %></a>
                </div>
            </div>
            <% }); %>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year\">
            <div class=\"cal-year-box\">
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(0) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(1) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(2) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(3) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(4) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(5) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(6) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(7) %></div>
                </div>
                <div class=\"row row-fluid cal-before-eventlist\">
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month1\"><%= cal._month(8) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month2\"><%= cal._month(9) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month3\"><%= cal._month(10) %></div>
                    <div class=\"span3 col-md-3 cal-cell\" data-cal-row=\"-month4\"><%= cal._month(11) %></div>
                </div>
            </div>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-year-month\">
            <span class=\"pull-right\" data-cal-date=\"<%= data_day %>\" data-cal-view=\"month\"><%= month_name %></span>
            <% if (events.length > 0) { %>
            <small class=\"cal-events-num badge badge-important pull-left\"><%= events.length %></small>
            <div class=\"hide events-list\" data-cal-start=\"<%= start %>\" data-cal-end=\"<%= end %>\">
                <% _.each(events, function(event) { %>
                <a href=\"<%= event.url ? event.url : 'javascript:void(0)' %>\" data-event-id=\"<%= event.id %>\" data-event-class=\"<%= event['class'] %>\"
                   class=\"pull-left event <%= event['class'] %> event<%= event.id %>\" data-toggle=\"tooltip\"
                   title=\"<%= event.title %>\"></a>
                <% }); %>
            </div>
            <% } %>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda\">
            
            <div class=\"container-fluid\">
                
                <!-- Content panel with tabs -->
                <div class=\"panel with-nav-tabs panel-default agenda-panel\">
                
                    <!-- Tab Panel -->
                    <% if (typeof agenda.displayGroupList != 'undefined' && agenda.displayGroupList.length > 0) { %>
                        <div class=\"panel-heading\">
                                <ul class=\"nav nav-tabs\">
                                    <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                        <% if (displayGroup['id'] == agenda.selectedDisplayGroup) { %>
                                            <li class=\"active\">
                                        <% } else { %>
                                            <li>
                                        <% }; %>
                                        
                                        <%
                                            // If it is a simple display show an 
                                            var displayGroupIcon = \"\";
                                            if (displayGroup['isDisplaySpecific'] == 0)
                                                displayGroupIcon = \"<span class='fa fa-television'></span> \";
                                        %>
                                        
                                        <a data-toggle=\"tab\" data-id=\"<%= displayGroup['id'] %>\" href=\"#tab_<%= displayGroup['id'] %>\">
                                            <%= (displayGroupIcon + displayGroup['name']) %>
                                        </a>
                                        </li>
                                    <% }); %>
                                </ul> 
                        </div>
                    <% } %>
                
                    <!-- Tab Content -->
                    <div class=\"panel-body\">
                    
                    <% if (agenda.errorMessage != '') { %>
                       {% endraw %}
                       <!-- Request failed - Show Error Message -->
                       <div class=\"text-danger text-center\">
                           <% if (agenda.errorMessage == 'display_not_selected') { %>
                               <p>{% trans \"Display not selected!\" %}</p>
                           <% } else if (agenda.errorMessage == 'no_events') { %>
                               <p>{% trans \"No events for the chosen Display/Display Group on the selected date!\" %}</p>    
                           <% } else  if (agenda.errorMessage == 'request_failed') { %>
                               <p>{% trans \"Data request failed!\" %}</p>
                           <% } %>
                       </div>
                       {% raw %}
                   <% } else if(!jQuery.isEmptyObject(agenda.results)) { %>
                        <!-- Request successful - Show Data -->
                            
                        <!-- Breadcrumb trail -->
                        <div class=\"cal-event-breadcrumb-trail col-xs-12\">
                            <div id=\"content\"></div>
                        </div>     
                        
                        <!-- Agenda Data Content -->
                        <div class=\"tab-content\">
                            <% _.each(agenda.displayGroupList, function(displayGroup){ %>
                                <% if (typeof agenda.results[(displayGroup['id'])] != 'undefined') { %>
                                    <% 
                                        var resultItem = agenda.results[displayGroup['id']]; 
                                        var isActive = (displayGroup['id'] == agenda.selectedDisplayGroup) ? 'active' : '';
                                    %>
                                    <div id=\"tab_<%= displayGroup['id'] %>\" class=\"tab-pane fade in <%= isActive %> container-fluid\">
                                        <% if(typeof resultItem.events != 'undefined') { %>
                                            <div class=\"col-lg-9\">
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 1) %>
                                                <%= cal._layouts(resultItem.events, resultItem.layouts, 3) %>
                                            </div>
                                            <div class=\"col-lg-3\">
                                                <%= cal._displaygroups(resultItem.events, resultItem.displayGroups) %>
                                                <%= cal._campaigns(resultItem.events, resultItem.campaigns) %>
                                            </div> 
                                         <% } %>
                                    </div>
                                <% } %>
                            <% }); %>
                        </div>
                    <% } %>   
                    </div>
                </div>
            </div>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-layouts\">
            <table id=\"layouts\" class=\"table agenda-table\">
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"10\">
                            <% if (layouts.type == 1) { %>
                                {% endraw %}{% trans \"Layouts\" %}{% raw %}</span>
                            <% } else if (layouts.type == 3) { %>
                                {% endraw %}{% trans \"Overlay Layouts\" %}{% raw %}
                            <% } %> 
                        </th>
                    </tr>
                    {% endraw %}
                    <tr>
                        <th></th>
                        <th>{% trans \"ID\" %}</th>
                        <th>{% trans \"Layout Name\" %}</th>
                        <th>{% trans \"Status\" %}</th>
                        <th>{% trans \"From Date\" %}</th>
                        <th>{% trans \"To Date\" %}</th>
                        <th>{% trans \"Layout Duration\" %}</th>
                        <th>{% trans \"Display Order\" %}</th>
                        <th>{% trans \"Priority\" %}</th>
                        <th>{% trans \"Visible\" %}</th>
                    </tr>
                    {% raw %}
                </thead>
                <tbody>
                    <% _.each(layouts, function(layout){ %>
                        <tr 
                            class=\"<%= layout.itemClass %>\"
                            data-elem-id=\"<%= layout.layoutId %>\" 
                            data-event-id=\"<%= layout.eventId %>\" 
                            data-toggle=\"tooltip\"
                            <% if (layout.itemClass == 'low-priority') { %>
                                title=\"{% endraw %}{% trans \"This layout will not be shown as there are higher priority layouts scheduled at this time\" %}{% raw %}\"
                            <% } %> 
                        >
                            <td><span class=\"fa <%= layout.itemIcon %>\"></span></td>
                            <td><%= layout.layoutId %></td>
                            <td><%= layout.layoutName %></td>
                            <%
                                var icon = \"\";
                                if (layout.layoutStatus == 1)
                                    icon = \"fa-check\";
                                else if (layout.layoutStatus == 0)
                                    icon = \"fa-times\";
                                else if (layout.layoutStatus == 3)
                                    icon = \"fa-cogs\";
                                else
                                    icon = \"fa-exclamation\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <% if (layout.eventDayPartId == 1) { %>
                                <td>{% endraw %}{% trans \"Always\" %}{% raw %}</td>
                                <td><span class=\"fa fa-retweet\"></span></td>
                            <% } else { %> 
                                <td><%= layout.eventFromDt %></td>
                                <td><%= layout.eventToDt %></td>
                            <% } %> 
                            
                            <td><%= layout.layoutDuration %></td>
                            <td><%= layout.layoutDisplayOrder %></td>
                            <td><%= layout.eventPriority %></td>
                            <%
                                var icon = \"\";
                                if (layout.itemClass == 'low-priority')
                                    icon = \"fa-times\";
                                else
                                    icon = \"fa-check\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>

        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-displaygroups\">
            <table id=\"displaygroups\" class=\"table agenda-table\">
                {% endraw %}
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">{% trans \"Display Groups\" %}</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>{% trans \"ID\" %}</th>
                        <th>{% trans \"Name\" %}</th>
                    </tr>
                </thead>
                {% raw %}
                <tbody>
                    <% _.each(displaygroups, function(displaygroup){ %>
                        <tr data-elem-id=\"<%= displaygroup.displayGroupId %>\">
                            <%
                                var icon = \"\";
                                if (displaygroup.isDisplaySpecific == 1)
                                    icon = \"fa-television\";
                            %>
                            <td><span class=\"fa <%= icon %>\"></span></td>
                            <td><%= displaygroup.displayGroupId %></td>
                            <td><%= displaygroup.displayGroup %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-agenda-campaigns\">
            <table id=\"campaigns\" class=\"table agenda-table\">
                {% endraw %}
                <thead>
                    <tr class=\"table-title\">
                        <th colspan=\"3\">{% trans \"Campaigns\" %}</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>{% trans \"ID\" %}</th>
                        <th>{% trans \"Name\" %}</th>
                    </tr>
                </thead>
                {% raw %}
                <tbody>
                    <% _.each(campaigns, function(campaign){ %>
                        <tr data-elem-id=\"<%= campaign.campaignId %>\">
                            <td></td>
                            <td><%= campaign.campaignId %></td>
                            <td><%= campaign.campaign %></td>
                        </tr>
                    <% }); %>
                </tbody>
            </table>
        </script>
        
        <script type=\"text/x-handlebars-template\" id=\"calendar-template-breadcrumb-trail\">
            <!-- Layout -->
            <span>
                <a href=\"<%= layout.link %>\"><%= layout.name %></a>
            </span>
            
            <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            
            <!-- Campaign -->
            <% if (typeof campaign != 'undefined') { %>
                <span>
                    <% if (campaign.link != '') { %>
                      <a href=\"<%= campaign.link %>\"><%= campaign.name %></a>
                    <% } else { %>   
                      <%= campaign.name %>
                    <% } %> 
                </span>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
            <% } %> 
            
            <!-- Schedule -->
            <span>
                <a href=\"<%= schedule.link %>\" class=\"XiboFormButton\">
                    {% endraw %}
                        {% trans \"Schedule\" %}
                    {% raw %}
                </a>
            </span>
            
            <!-- Display Groups -->
            <% _.each(displayGroups, function(displayGroup){ %>
                <span>&nbsp;<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>&nbsp;</span>
                <span>
                  <% if (displayGroup.link != '') { %>
                    <a href=\"<%= displayGroup.link %>\"><%= displayGroup.name %></a>
                  <% } else { %>   
                    <%= displayGroup.name %>
                  <% } %> 
                </span>
            <% }); %>
            
        </script>
        
    {% endraw %}
{% endblock %}", "schedule-page.twig", "/var/www/web/views/schedule-page.twig");
    }
}
