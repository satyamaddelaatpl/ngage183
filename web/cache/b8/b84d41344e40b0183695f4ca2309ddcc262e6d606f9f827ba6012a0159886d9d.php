<?php

/* inline.twig */
class __TwigTemplate_e097cfcc375f85697471d7dfdf509adf898bf052200af95474645290bb56e1d6 extends Twig_Template
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
        // line 10
        echo "
";
        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 28
        echo "
";
        // line 40
        echo "
";
        // line 49
        echo "
";
        // line 58
        echo "
";
        // line 67
        echo "
";
        // line 76
        echo "
";
        // line 85
        echo "
";
        // line 96
        echo "
";
        // line 109
        echo "
";
        // line 155
        echo "
";
        // line 174
        echo "
";
        // line 185
        echo "
";
        // line 196
        echo "
";
        // line 207
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
        <label class=\"control-label\" title=\"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <p class=\"form-control-static\">";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
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

    // line 11
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
            // line 12
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

    // line 15
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
            // line 16
            echo "    <div class=\"col-sm-12 ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        ";
            // line 17
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

    // line 21
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
            // line 22
            echo "    <div class=\"row\">
        <div class=\"col-sm-12 ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
            <p>";
            // line 24
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

    // line 29
    public function getbutton($__title__ = null, $__type__ = null, $__link__ = null, $__groupClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "type" => $__type__,
            "link" => $__link__,
            "groupClass" => $__groupClass__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 \">
            ";
            // line 32
            if (((isset($context["type"]) ? $context["type"] : null) == "link")) {
                // line 33
                echo "                <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 35
                echo "                <button class=\"btn btn-default\" type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</button>
            ";
            }
            // line 37
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

    // line 41
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
            // line 42
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
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

    // line 50
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
            // line 51
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" data-role=\"tagsinput\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
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

    // line 59
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
            // line 60
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"number\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
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

    // line 68
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
            // line 69
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"email\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
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

    // line 77
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
            // line 78
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" for=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"password\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " />
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

    // line 86
    public function getcheckbox($__name__ = null, $__title__ = null, $__value__ = null, $__groupClass__ = null, $__accessKey__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "title" => $__title__,
            "value" => $__value__,
            "groupClass" => $__groupClass__,
            "accessKey" => $__accessKey__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 87
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <div class=\"\">
            <div class=\"checkbox\">
                <input title=\"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\" class=\"form-control\" type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if (((isset($context["value"]) ? $context["value"] : null) == 1)) {
                echo "checked";
            }
            echo ">
                ";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
            </div>
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

    // line 97
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
            // line 98
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <div class=\"col-sm-offset-2 \">
            <div class=\"radio\">
                <label for=\"";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">
                    <input type=\"radio\" id=\"";
            // line 102
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
            // line 103
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
                </label>
            </div>
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

    // line 110
    public function getdropdown($__name__ = null, $__type__ = null, $__title__ = null, $__value__ = null, $__options__ = null, $__optionId__ = null, $__optionValue__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, $__callBack__ = null, $__dataAttributes__ = null, $__optionGroups__ = null, ...$__varargs__)
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
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 111
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" for=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <select class=\"form-control\" ";
            // line 114
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
            // line 115
            if ((twig_length_filter($this->env, (isset($context["dataAttributes"]) ? $context["dataAttributes"] : null)) > 0)) {
                // line 116
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dataAttributes"]) ? $context["dataAttributes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 117
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()), "html", null, true);
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "            ";
            }
            echo ">

            ";
            // line 121
            $context["hasGroups"] = (twig_length_filter($this->env, (isset($context["optionGroups"]) ? $context["optionGroups"] : null)) > 0);
            // line 122
            echo "            ";
            if ( !(isset($context["hasGroups"]) ? $context["hasGroups"] : null)) {
                // line 123
                echo "                ";
                $context["optionGroups"] = array("label" => "General");
                // line 124
                echo "            ";
            }
            // line 125
            echo "
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["optionGroups"]) ? $context["optionGroups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 127
                echo "                ";
                if ((isset($context["hasGroups"]) ? $context["hasGroups"] : null)) {
                    // line 128
                    echo "                    <optgroup label=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 129
                    $context["options"] = $this->getAttribute((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($context["group"], "label", array()));
                    // line 130
                    echo "                ";
                }
                // line 131
                echo "
                ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 133
                    echo "
                    ";
                    // line 134
                    $context["itemOptionId"] = $this->getAttribute($context["option"], (isset($context["optionId"]) ? $context["optionId"] : null));
                    // line 135
                    echo "                    ";
                    $context["itemOptionValue"] = $this->getAttribute($context["option"], (isset($context["optionValue"]) ? $context["optionValue"] : null));
                    // line 136
                    echo "
                    ";
                    // line 137
                    if (((isset($context["type"]) ? $context["type"] : null) == "dropdownmulti")) {
                        // line 138
                        echo "                        ";
                        $context["selected"] = twig_in_filter((isset($context["itemOptionId"]) ? $context["itemOptionId"] : null), (isset($context["value"]) ? $context["value"] : null));
                        // line 139
                        echo "                    ";
                    } else {
                        // line 140
                        echo "                        ";
                        $context["selected"] = ((isset($context["itemOptionId"]) ? $context["itemOptionId"] : null) == (isset($context["value"]) ? $context["value"] : null));
                        // line 141
                        echo "                    ";
                    }
                    // line 142
                    echo "
                    <option value=\"";
                    // line 143
                    echo twig_escape_filter($this->env, (isset($context["itemOptionId"]) ? $context["itemOptionId"] : null), "html", null, true);
                    echo "\" ";
                    if ((isset($context["selected"]) ? $context["selected"] : null)) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["itemOptionValue"]) ? $context["itemOptionValue"] : null), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "
                ";
                // line 146
                if ((isset($context["hasGroups"]) ? $context["hasGroups"] : null)) {
                    // line 147
                    echo "                    </optgroup>
                ";
                }
                // line 149
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "
            </select>
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

    // line 156
    public function getpermissions($__name__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 157
            echo "    <table class=\"table table-bordered\">
        <tr>
            <th>";
            // line 159
            echo __("Group");
            echo "</th>
            <th>";
            // line 160
            echo __("View");
            echo "</th>
            <th>";
            // line 161
            echo __("Edit");
            echo "</th>
            <th>";
            // line 162
            echo __("Delete");
            echo "</th>
        </tr>
        ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 165
                echo "            <tr>
                <td>";
                // line 166
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "</td>
                <td><input type=\"checkbox\" name=\"";
                // line 167
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value_view"]) ? $context["value_view"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["value_view_checked"]) ? $context["value_view_checked"] : null), "html", null, true);
                echo "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 168
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value_edit"]) ? $context["value_edit"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["value_edit_checked"]) ? $context["value_edit_checked"] : null), "html", null, true);
                echo "></td>
                <td><input type=\"checkbox\" name=\"";
                // line 169
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value_del"]) ? $context["value_del"] : null), "html", null, true);
                echo "\" ";
                echo twig_escape_filter($this->env, (isset($context["value_del_checked"]) ? $context["value_del_checked"] : null), "html", null, true);
                echo "></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "    </table>
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

    // line 175
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
            // line 176
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 177
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
            ";
            // line 180
            ob_start();
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 181
            echo "            <input class=\"form-control datePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
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

    // line 186
    public function getdateMonth($__name__ = null, $__title__ = null, $__value__ = null, $__helpText__ = null, $__groupClass__ = null, $__validation__ = null, $__accessKey__ = null, ...$__varargs__)
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
            // line 187
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 188
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
            ";
            // line 191
            ob_start();
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 192
            echo "            <input class=\"form-control dateMonthPicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
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

    // line 197
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
            // line 198
            echo "    <div class=\"form-group ";
            echo twig_escape_filter($this->env, (isset($context["groupClass"]) ? $context["groupClass"] : null), "html", null, true);
            echo "\">
        <label class=\"control-label\" title=\"";
            // line 199
            echo twig_escape_filter($this->env, (isset($context["helpText"]) ? $context["helpText"] : null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" accesskey=\"";
            echo twig_escape_filter($this->env, (isset($context["accessKey"]) ? $context["accessKey"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"";
            // line 201
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" />
            ";
            // line 202
            ob_start();
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "Link";
            $context["linkedName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 203
            echo "            <input class=\"form-control timePicker dateControl\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" type=\"text\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["linkedName"]) ? $context["linkedName"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["validation"]) ? $context["validation"] : null), "html", null, true);
            echo " data-link-field=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" data-link-format=\"hh:ii\" readonly/>
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
        return "inline.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1179 => 203,  1174 => 202,  1166 => 201,  1155 => 199,  1150 => 198,  1132 => 197,  1106 => 192,  1101 => 191,  1093 => 190,  1082 => 188,  1077 => 187,  1059 => 186,  1033 => 181,  1028 => 180,  1020 => 179,  1009 => 177,  1004 => 176,  986 => 175,  970 => 172,  957 => 169,  949 => 168,  941 => 167,  937 => 166,  934 => 165,  930 => 164,  925 => 162,  921 => 161,  917 => 160,  913 => 159,  909 => 157,  896 => 156,  877 => 150,  871 => 149,  867 => 147,  865 => 146,  862 => 145,  848 => 143,  845 => 142,  842 => 141,  839 => 140,  836 => 139,  833 => 138,  831 => 137,  828 => 136,  825 => 135,  823 => 134,  820 => 133,  816 => 132,  813 => 131,  810 => 130,  808 => 129,  803 => 128,  800 => 127,  796 => 126,  793 => 125,  790 => 124,  787 => 123,  784 => 122,  782 => 121,  776 => 119,  765 => 117,  760 => 116,  758 => 115,  746 => 114,  735 => 112,  730 => 111,  705 => 110,  684 => 103,  672 => 102,  664 => 101,  657 => 98,  638 => 97,  618 => 91,  606 => 90,  599 => 87,  583 => 86,  558 => 81,  547 => 79,  542 => 78,  524 => 77,  499 => 72,  488 => 70,  483 => 69,  465 => 68,  440 => 63,  429 => 61,  424 => 60,  406 => 59,  381 => 54,  370 => 52,  365 => 51,  347 => 50,  322 => 45,  311 => 43,  306 => 42,  288 => 41,  271 => 37,  263 => 35,  255 => 33,  253 => 32,  247 => 30,  232 => 29,  213 => 24,  209 => 23,  206 => 22,  193 => 21,  175 => 17,  170 => 16,  157 => 15,  135 => 12,  122 => 11,  103 => 6,  96 => 4,  91 => 3,  75 => 2,  70 => 207,  67 => 196,  64 => 185,  61 => 174,  58 => 155,  55 => 109,  52 => 96,  49 => 85,  46 => 76,  43 => 67,  40 => 58,  37 => 49,  34 => 40,  31 => 28,  28 => 20,  25 => 14,  22 => 10,  19 => 1,);
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
        <label class=\"control-label\" title=\"{{ helpText }}\">{{ title }}</label>
        <div class=\"\">
            <p class=\"form-control-static\">{{ value }}</p>
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

{% macro button(title, type, link, groupClass) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 \">
            {% if type == \"link\" %}
                <a class=\"btn btn-default\" href=\"{{ link }}\">{{ title }}</a>
            {% else %}
                <button class=\"btn btn-default\" type=\"{{ type }}\">{{ title }}</button>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro input(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro inputWithTags(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"text\" id=\"{{ name }}\" value=\"{{ value }}\" data-role=\"tagsinput\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro number(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"number\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro email(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"email\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro password(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input class=\"form-control\" name=\"{{ name }}\" type=\"password\" id=\"{{ name }}\" value=\"{{ value }}\" {{ validation }} />
        </div>
    </div>
{% endmacro %}

{% macro checkbox(name, title, value, groupClass, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"\">
            <div class=\"checkbox\">
                <input title=\"{{ title }}\" class=\"form-control\" type=\"checkbox\" id=\"{{ name }}\" name=\"{{ name }}\" {% if value == 1 %}checked{% endif %}>
                {{ title }}
            </div>
        </div>
    </div>
{% endmacro %}

{% macro radio(name, id, title, value, helpText, groupClass, accessKey, setValue) %}
    <div class=\"form-group {{ groupClass }}\">
        <div class=\"col-sm-offset-2 \">
            <div class=\"radio\">
                <label for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">
                    <input type=\"radio\" id=\"{{ id }}\" name=\"{{ name }}\" value=\"{{ setValue }}\" {% if value == setValue %}checked{% endif %}>
                    {{ title }}
                </label>
            </div>
        </div>
    </div>
{% endmacro %}

{% macro dropdown(name, type, title, value, options, optionId, optionValue, helpText, groupClass, validation, accessKey, callBack, dataAttributes, optionGroups) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" for=\"{{ name }}\" title=\"{{ helpText }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
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
                    {% set options = attribute(options, group.label) %}
                {% endif %}

                {% for option in options %}

                    {% set itemOptionId = attribute(option, optionId) %}
                    {% set itemOptionValue = attribute(option, optionValue) %}

                    {% if type == \"dropdownmulti\" %}
                        {% set selected = (itemOptionId in value) %}
                    {% else %}
                        {% set selected = (itemOptionId == value) %}
                    {% endif %}

                    <option value=\"{{ itemOptionId }}\" {% if selected %}selected{% endif %}>{{ itemOptionValue }}</option>
                {% endfor %}

                {% if hasGroups %}
                    </optgroup>
                {% endif %}
            {% endfor %}

            </select>
        </div>
    </div>
{% endmacro %}

{% macro permissions(name, options) %}
    <table class=\"table table-bordered\">
        <tr>
            <th>{% trans \"Group\" %}</th>
            <th>{% trans \"View\" %}</th>
            <th>{% trans \"Edit\" %}</th>
            <th>{% trans \"Delete\" %}</th>
        </tr>
        {% for item in options %}
            <tr>
                <td>{{ name }}</td>
                <td><input type=\"checkbox\" name=\"{{ name }}\" value=\"{{ value_view }}\" {{ value_view_checked }}></td>
                <td><input type=\"checkbox\" name=\"{{ name }}\" value=\"{{ value_edit }}\" {{ value_edit_checked }}></td>
                <td><input type=\"checkbox\" name=\"{{ name }}\" value=\"{{ value_del }}\" {{ value_del_checked }}></td>
            </tr>
        {% endfor %}
    </table>
{% endmacro %}

{% macro date(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control datePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
        </div>
    </div>
{% endmacro %}

{% macro dateMonth(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control dateMonthPicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"yyyy-mm-dd hh:ii:ss\" readonly/>
        </div>
    </div>
{% endmacro %}

{% macro time(name, title, value, helpText, groupClass, validation, accessKey) %}
    <div class=\"form-group {{ groupClass }}\">
        <label class=\"control-label\" title=\"{{ helpText }}\" for=\"{{ name }}\" accesskey=\"{{ accessKey }}\">{{ title }}</label>
        <div class=\"\">
            <input type=\"hidden\" name=\"{{ name }}\" id=\"{{ name }}\" value=\"{{ value }}\" />
            {% set linkedName %}{{ name }}Link{% endset %}
            <input class=\"form-control timePicker dateControl\" name=\"{{ linkedName }}\" type=\"text\" id=\"{{ linkedName }}\" {{ validation }} data-link-field=\"{{ name }}\" data-link-format=\"hh:ii\" readonly/>
        </div>
    </div>
{% endmacro %}

", "inline.twig", "/var/www/web/views/inline.twig");
    }
}
