<?php

/* layout.html.twig */
class __TwigTemplate_3cd0f16f20c91eb05e9d23b833fe9248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

    <title>";
        // line 10
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title>

    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <meta name=\"viewport\" content=\"width=device-width\">

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <div class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <div class=\"nav-collapse\">
                    <ul class=\"nav\">
                        <li>uno</li>
                        <li>dos</li>
                        <li>tres</li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div id=\"main\" role=\"main\" class=\"container\">
            ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "        </div>
    </div>

    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 43
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "request"), "basepath"), "html", null, true);
        echo "/js/libs/jquery-1.7.2.min.js\"><\\/script>')</script>
</body>
</html>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  79 => 37,  70 => 43,  64 => 39,  62 => 37,  20 => 1,  40 => 7,  35 => 6,  31 => 10,  28 => 3,);
    }
}
