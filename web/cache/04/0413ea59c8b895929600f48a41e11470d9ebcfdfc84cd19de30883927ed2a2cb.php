<?php

/* forms.twig */
class __TwigTemplate_98efbbb8e229cc487bf355454266b7f2a6364285293fcc3d0b6bdcd1e42a35df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 11
        echo "
";
        // line 15
        echo "
";
        // line 21
        echo "
";
        // line 29
        echo "
";
        // line 41
        echo "
";
        // line 51
        echo "
";
        // line 68
        echo "
";
        // line 78
        echo "
";
        // line 88
        echo "
";
        // line 98
        echo "
";
        // line 108
        echo "
";
        // line 117
        echo "
";
        // line 131
        echo "
";
        // line 145
        echo "
";
        // line 209
        echo "

";
        // line 223
        echo "
";
        // line 235
        echo "
";
        // line 247
        echo "
";
    }

    // line 2
    public function getdisabled($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\">";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</p>
            <span class=\"help-block\">";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function gethidden($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    <input name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getraw($__text__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    <div class=\"col-sm-12 ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getmessage($__message__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
            <p>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</p>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getbutton($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            ";
            // line 33
            if (((isset($context["type"]) ? $context["type"] : null) == "link")) {
                // line 34
                echo "            <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 36
                echo "            <button id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" class=\"btn btn-default\" type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</button>
            ";
            }
            // line 38
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getinput($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getinputWithButton($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__buttonId__ = null, $__buttonTitle__ = null, $__buttonType__ = null, $__buttonLink__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "buttonId" => $__buttonId__,
            "buttonTitle" => $__buttonTitle__,
            "buttonType" => $__buttonType__,
            "buttonLink" => $__buttonLink__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-8\" style=\"padding-right: 0;\">
            <input class=\"form-control\" name=\"";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
        <div class=\"col-sm-2 text-right\" style=\"padding-left: 0;\">
            ";
            // line 60
            if (((isset($context["buttonType"]) ? $context["buttonType"] : null) == "link")) {
                // line 61
                echo "                <a class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["buttonTitle"]) ? $context["buttonTitle"] : null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 63
                echo "                <button id=\"";
                echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : null), "html", null, true);
                echo "\" class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" type=\"";
                echo twig_escape_filter($this->env, (isset($context["buttonType"]) ? $context["buttonType"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["buttonTitle"]) ? $context["buttonTitle"] : null), "html", null, true);
                echo "</button>
            ";
            }
            // line 65
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getinputWithTags($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" data-role=\"tagsInputForm\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function getnumber($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 80
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"number\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function getemail($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"email\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getpassword($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"password\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
            <span class=\"help-block\">";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function gettextarea($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__rows__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "rows" => $__rows__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <div class=\"col-sm-12\">
            <span class=\"help-block\">";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
            <textarea class=\"form-control\" name=\"";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</textarea>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getcheckbox($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 119
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"checkbox\">
                <label for=\"";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" id=\"";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if (((isset($context["value"]) ? $context["value"] : null) == 1)) {
                echo "checked";
            }
            echo ">
                    ";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                </label>
            </div>
            <span class=\"help-block\">";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function getradio($__name__ = null, $__id__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__accessKey__ = null, $__setValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "id" => $__id__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "setValue" => $__setValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"radio\">
                <label for=\"";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">
                    <input type=\"radio\" id=\"";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["setValue"]) ? $context["setValue"] : null), "html", null, true);
            echo "\" ";
            if (((isset($context["value"]) ? $context["value"] : null) == (isset($context["setValue"]) ? $context["setValue"] : null))) {
                echo "checked";
            }
            echo ">
                    ";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                </label>
            </div>
            <span class=\"help-block\">";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function getdropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, $__baseUrl__ = null, $__optionImageValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "type" => $__type__,
            "title" => $__title__,
            "value" => $__value__,
            "options" => $__options__,
            "optionId" => $__optionId__,
            "optionValue" => $__optionValue__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "callBack" => $__callBack__,
            "dataAttributes" => $__dataAttributes__,
            "optionGroups" => $__optionGroups__,
            "baseUrl" => $__baseUrl__,
            "optionImageValue" => $__optionImageValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 147
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 148
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" ";
            // line 150
            if (((isset($context["type"]) ? $context["type"] : null) == "dropdownmulti")) {
                echo "multiple";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["callBack"]) ? $context["callBack"] : null), "html", null, true);
            echo "
                ";
            // line 151
            if ((twig_length_filter($this->env, (isset($context["dataAttributes"]) ? $context["dataAttributes"] : null)) > 0)) {
                // line 152
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dataAttributes"]) ? $context["dataAttributes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 153
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()), "html", null, true);
                    echo "\"
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "                ";
            }
            echo ">

            ";
            // line 157
            $context["hasGroups"] = (twig_length_filter($this->env, (isset($context["optionGroups"]) ? $context["optionGroups"] : null)) > 0);
            // line 158
            echo "            ";
            if ( !(isset($context["hasGroups"]) ? $context["hasGroups"] : null)) {
                // line 159
                echo "                ";
                $context["optionGroups"] = array("label" => "General");
                // line 160
                echo "            ";
            }
            // line 161
            echo "
            ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["optionGroups"]) ? $context["optionGroups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 163
                echo "                ";
                if ((isset($context["hasGroups"]) ? $context["hasGroups"] : null)) {
                    // line 164
                    echo "                    <optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 165
                    $context["tempOptions"] = $this->getAttribute((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($context["group"], "id", array()));
                    // line 166
                    echo "                ";
                } else {
                    // line 167
                    echo "                    ";
                    $context["tempOptions"] = (isset($context["options"]) ? $context["options"] : null);
                    // line 168
                    echo "                ";
                }
                // line 169
                echo "
                ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["tempOptions"]) ? $context["tempOptions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 171
                    echo "
                    ";
                    // line 172
                    if (((isset($context["optionId"]) ? $context["optionId"] : null) == "")) {
                        // line 173
                        echo "                        ";
                        $context["itemOptionId"] = $context["option"];
                        // line 174
                        echo "                        ";
                        $context["itemOptionValue"] = $context["option"];
                        // line 175
                        echo "                        ";
                        if ((isset($context["optionImageValue"]) ? $context["optionImageValue"] : null)) {
                            // line 176
                            echo "                            ";
                            $context["itemOptionImageValue"] = $context["option"];
                            // line 177
                            echo "                        ";
                        }
                        // line 178
                        echo "                    ";
                    } else {
                        // line 179
                        echo "                        ";
                        $context["itemOptionId"] = $this->getAttribute($context["option"], (isset($context["optionId"]) ? $context["optionId"] : null));
                        // line 180
                        echo "                        ";
                        $context["itemOptionValue"] = $this->getAttribute($context["option"], (isset($context["optionValue"]) ? $context["optionValue"] : null));
                        // line 181
                        echo "                        ";
                        if ((isset($context["optionImageValue"]) ? $context["optionImageValue"] : null)) {
                            // line 182
                            echo "                            ";
                            $context["itemOptionImageValue"] = $this->getAttribute($context["option"], (isset($context["optionImageValue"]) ? $context["optionImageValue"] : null));
                            // line 183
                            echo "                        ";
                        }
                        // line 184
                        echo "                    ";
                    }
                    // line 185
                    echo "
                    ";
                    // line 186
                    if (((isset($context["type"]) ? $context["type"] : null) == "dropdownmulti")) {
                        // line 187
                        echo "                        ";
                        $context["selected"] = twig_in_filter((isset($context["itemOptionId"]) ? $context["itemOptionId"] : null), (isset($context["value"]) ? $context["value"] : null));
                        // line 188
                        echo "                    ";
                    } else {
                        // line 189
                        echo "                        ";
                        $context["selected"] = ((isset($context["itemOptionId"]) ? $context["itemOptionId"] : null) == (isset($context["value"]) ? $context["value"] : null));
                        // line 190
                        echo "                    ";
                    }
                    // line 191
                    echo "
                    <option value=\"";
                    // line 192
                    echo twig_escape_filter($this->env, (isset($context["itemOptionId"]) ? $context["itemOptionId"] : null), "html", null, true);
                    echo "\" ";
                    if ((isset($context["selected"]) ? $context["selected"] : null)) {
                        echo "selected";
                    }
                    // line 193
                    echo "                            ";
                    if ((isset($context["itemOptionImageValue"]) ? $context["itemOptionImageValue"] : null)) {
                        // line 194
                        echo "                                data-content=\"<span class='media'><span class='media-left'><img style='max-width: 100px' src='";
                        echo twig_escape_filter($this->env, (isset($context["baseUrl"]) ? $context["baseUrl"] : null), "html", null, true);
                        echo twig_escape_filter($this->env, (isset($context["itemOptionImageValue"]) ? $context["itemOptionImageValue"] : null), "html", null, true);
                        echo "' /></span> <span class='media-body'>";
                        echo twig_escape_filter($this->env, (isset($context["itemOptionValue"]) ? $context["itemOptionValue"] : null), "html", null, true);
                        echo "</span></span>\"
                            ";
                    }
                    // line 196
                    echo "                    >";
                    echo twig_escape_filter($this->env, (isset($context["itemOptionValue"]) ? $context["itemOptionValue"] : null), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "
                ";
                // line 199
                if ((isset($context["hasGroups"]) ? $context["hasGroups"] : null)) {
                    // line 200
                    echo "                    </optgroup>
                ";
                }
                // line 202
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "
            </select>
            <span class=\"help-block\">";
            // line 205
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 211
    public function getdateTime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 212
            echo "    <div class=\"form-group dateTimePicker ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\" data-link-combined=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 213
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <input type=\"hidden\" name=\"";
            // line 214
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
        <div class=\"col-sm-10\">
            ";
            // line 217
            echo "            <input class=\"form-control form-control-inline dateTimePickerDate dateControl\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_Link1\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_Link1\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " data-link-combined=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" />
            <input class=\"form-control form-control-inline dateTimePickerTime dateControl\" name=\"";
            // line 218
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_Link2\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_Link2\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " data-link-combined=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" />
            <span class=\"help-block\">";
            // line 219
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 224
    public function getdate($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 225
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 226
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"";
            // line 228
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
            ";
            // line 229
            ob_start();
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 230
            echo "            <input class=\"form-control datePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
            <span class=\"help-block\">";
            // line 231
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 236
    public function gettime($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "helpText" => $__helpText__,
            "groupClass" => $__groupClass__,
            "validation" => $__validation__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 237
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"";
            // line 238
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"";
            // line 240
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
            ";
            // line 241
            ob_start();
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 242
            echo "            <input class=\"form-control timePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-link-format=\"hh:ii\"/>
            <span class=\"help-block\">";
            // line 243
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1346 => 243,  1335 => 242,  1330 => 241,  1322 => 240,  1313 => 238,  1308 => 237,  1290 => 236,  1271 => 231,  1260 => 230,  1255 => 229,  1247 => 228,  1238 => 226,  1233 => 225,  1215 => 224,  1196 => 219,  1186 => 218,  1175 => 217,  1166 => 214,  1158 => 213,  1151 => 212,  1133 => 211,  1114 => 205,  1110 => 203,  1104 => 202,  1100 => 200,  1098 => 199,  1095 => 198,  1086 => 196,  1077 => 194,  1074 => 193,  1068 => 192,  1065 => 191,  1062 => 190,  1059 => 189,  1056 => 188,  1053 => 187,  1051 => 186,  1048 => 185,  1045 => 184,  1042 => 183,  1039 => 182,  1036 => 181,  1033 => 180,  1030 => 179,  1027 => 178,  1024 => 177,  1021 => 176,  1018 => 175,  1015 => 174,  1012 => 173,  1010 => 172,  1007 => 171,  1003 => 170,  1000 => 169,  997 => 168,  994 => 167,  991 => 166,  989 => 165,  984 => 164,  981 => 163,  977 => 162,  974 => 161,  971 => 160,  968 => 159,  965 => 158,  963 => 157,  957 => 155,  946 => 153,  941 => 152,  939 => 151,  927 => 150,  916 => 148,  911 => 147,  884 => 146,  865 => 141,  859 => 138,  847 => 137,  839 => 136,  832 => 133,  813 => 132,  794 => 127,  788 => 124,  778 => 123,  770 => 122,  763 => 119,  746 => 118,  719 => 113,  715 => 112,  709 => 110,  691 => 109,  672 => 104,  662 => 103,  653 => 101,  648 => 100,  630 => 99,  611 => 94,  601 => 93,  592 => 91,  587 => 90,  569 => 89,  550 => 84,  540 => 83,  531 => 81,  526 => 80,  508 => 79,  489 => 74,  479 => 73,  470 => 71,  465 => 70,  447 => 69,  430 => 65,  420 => 63,  412 => 61,  410 => 60,  404 => 57,  394 => 56,  385 => 54,  380 => 53,  358 => 52,  339 => 47,  329 => 46,  320 => 44,  315 => 43,  297 => 42,  280 => 38,  270 => 36,  262 => 34,  260 => 33,  254 => 31,  238 => 30,  219 => 25,  215 => 24,  212 => 23,  199 => 22,  181 => 18,  176 => 17,  163 => 16,  141 => 13,  128 => 12,  109 => 7,  105 => 6,  100 => 4,  95 => 3,  79 => 2,  74 => 247,  71 => 235,  68 => 223,  64 => 209,  61 => 145,  58 => 131,  55 => 117,  52 => 108,  49 => 98,  46 => 88,  43 => 78,  40 => 68,  37 => 51,  34 => 41,  31 => 29,  28 => 21,  25 => 15,  22 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% macro disabled(name, title, value, helpText, groupClass) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <p class=\"form-control-static\">{{ value }}</p>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro hidden(name, value) %}
    <input name=\"{{ name }}\" type=\"hidden\" id=\"{{ name }}\" value=\"{{ value }}\" />
{% endmacro %}

{% macro raw(text, groupClass) %}
    <div class=\"col-sm-12 {{ groupClass }}\">
        {{ text }}
    </div>
{% endmacro %}

{% macro message(message, groupClass) %}
    <div class=\"row\">
        <div class=\"col-sm-12 {{ groupClass }}\">
            <p>{{ message }}</p>
        </div>
    </div>
{% endmacro %}

{% macro button(title, type, link, groupClass, id) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            {% if type == \"link\" %}
            <a class=\"btn btn-default\" href=\"{{ link }}\">{{ title }}</a>
            {% else %}
            <button id=\"{{ id }}\" class=\"btn btn-default\" type=\"{{ type }}\">{{ title }}</button>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro input(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro inputWithButton(name, title, value, helpText, groupClass, validation, accessKey, buttonId, buttonTitle, buttonType, buttonLink) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-8\" style=\"padding-right: 0;\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
        <div class=\"col-sm-2 text-right\" style=\"padding-left: 0;\">
            {% if buttonType == \"link\" %}
                <a class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" href=\"{{ link }}\">{{ buttonTitle }}</a>
            {% else %}
                <button id=\"{{ buttonId }}\" class=\"btn btn-default\" style=\"width:100%; padding: 6px 0px;\" type=\"{{ buttonType }}\">{{ buttonTitle }}</button>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro inputWithTags(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" data-role=\"tagsInputForm\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro number(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"number\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro email(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"email\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro password(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"password\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro textarea(name, title, value, helpText, groupClass, validation, rows) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-12\">
            <span class=\"help-block\">{{ helpText }}</span>
            <textarea class=\"form-control\" name=\"{{ name }}\" id=\"{{ name }}\" rows=\"{{ rows }}\" {{ validation }}>{{ value }}</textarea>
        </div>
    </div>
{% endmacro %}

{% macro checkbox(name, title, value, helpText, groupClass, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"checkbox\">
                <label for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">
                    <input type=\"checkbox\" id=\"{{ name }}\" name=\"{{ name }}\" {% if value == 1 %}checked{% endif %}>
                    {{ title }}
                </label>
            </div>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro radio(name, id, title, value, helpText, groupClass, accessKey, setValue) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 col-sm-10\">
            <div class=\"radio\">
                <label for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">
                    <input type=\"radio\" id=\"{{ id }}\" name=\"{{ name }}\" value=\"{{ setValue }}\" {% if value == setValue %}checked{% endif %}>
                    {{ title }}
                </label>
            </div>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro dropdown(name, type, title, value, options, optionId, optionValue, helpText, groupClass, validation, accessKey, callBack, dataAttributes, optionGroups, baseUrl, optionImageValue) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <select class=\"form-control\" {% if type == \"dropdownmulti\" %}multiple{% endif %} name=\"{{ name }}\" id=\"{{ name }}\" {{ callBack }}
                {% if dataAttributes|length > 0 %}
                    {% for attribute in dataAttributes %}
                        {{ attribute.name }}=\"{{ attribute.value }}\"
                    {% endfor %}
                {% endif %}>

            {% set hasGroups = optionGroups|length > 0 %}
            {% if not hasGroups %}
                {% set optionGroups = {label: \"General\"} %}
            {% endif %}

            {% for group in optionGroups %}
                {% if hasGroups %}
                    <optgroup label=\"{{ group.label }}\">
                    {% set tempOptions = attribute(options, group.id) %}
                {% else %}
                    {% set tempOptions = options %}
                {% endif %}

                {% for option in tempOptions %}

                    {% if optionId == \"\" %}
                        {% set itemOptionId = option %}
                        {% set itemOptionValue = option %}
                        {% if optionImageValue %}
                            {% set itemOptionImageValue = option %}
                        {% endif %}
                    {% else %}
                        {% set itemOptionId = attribute(option, optionId) %}
                        {% set itemOptionValue = attribute(option, optionValue) %}
                        {% if optionImageValue %}
                            {% set itemOptionImageValue = attribute(option, optionImageValue) %}
                        {% endif %}
                    {% endif %}

                    {% if type == \"dropdownmulti\" %}
                        {% set selected = (itemOptionId in value) %}
                    {% else %}
                        {% set selected = (itemOptionId == value) %}
                    {% endif %}

                    <option value=\"{{ itemOptionId }}\" {% if selected %}selected{% endif %}
                            {% if itemOptionImageValue %}
                                data-content=\"<span class='media'><span class='media-left'><img style='max-width: 100px' src='{{ baseUrl }}{{ itemOptionImageValue }}' /></span> <span class='media-body'>{{ itemOptionValue }}</span></span>\"
                            {% endif %}
                    >{{ itemOptionValue }}</option>
                {% endfor %}

                {% if hasGroups %}
                    </optgroup>
                {% endif %}
            {% endfor %}

            </select>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}


{% macro dateTime(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group dateTimePicker {{ groupClass }}\" data-link-combined=\"{{ name }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
        <div class=\"col-sm-10\">
            {# form-control-inline brings these two columns back onto the same line (resetting form-control) #}
            <input class=\"form-control form-control-inline dateTimePickerDate dateControl\" name=\"{{ name }}_Link1\" type=\"text\" id=\"{{ name }}_Link1\" {{ validation }} data-link-combined=\"{{ name }}\" />
            <input class=\"form-control form-control-inline dateTimePickerTime dateControl\" name=\"{{ name }}_Link2\" type=\"text\" id=\"{{ name }}_Link2\" {{ validation }} data-link-combined=\"{{ name }}\" />
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro date(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control datePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

{% macro time(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"col-sm-2 control-label\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"col-sm-10\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control timePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"hh:ii\"/>
            <span class=\"help-block\">{{ helpText }}</span>
        </div>
    </div>
{% endmacro %}

", "forms.twig", "/var/www/web/views/forms.twig");
    }
}
