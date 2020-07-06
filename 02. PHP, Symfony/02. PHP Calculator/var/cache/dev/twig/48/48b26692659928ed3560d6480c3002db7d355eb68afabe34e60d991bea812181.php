<?php

/* base.html.twig */
class __TwigTemplate_7ae77572387584c4425d0dd906a1c57ed536860c3783bd3a41525d4cea342afb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddc4c95538036a918dab6cc947e133c919951302d10eca39a9f8a091e3bfbade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc4c95538036a918dab6cc947e133c919951302d10eca39a9f8a091e3bfbade->enter($__internal_ddc4c95538036a918dab6cc947e133c919951302d10eca39a9f8a091e3bfbade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_ddc4c95538036a918dab6cc947e133c919951302d10eca39a9f8a091e3bfbade->leave($__internal_ddc4c95538036a918dab6cc947e133c919951302d10eca39a9f8a091e3bfbade_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_442bd1eb4d43af707104fc69097afaab4d64533368099213cad6545b18aea6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442bd1eb4d43af707104fc69097afaab4d64533368099213cad6545b18aea6c0->enter($__internal_442bd1eb4d43af707104fc69097afaab4d64533368099213cad6545b18aea6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_442bd1eb4d43af707104fc69097afaab4d64533368099213cad6545b18aea6c0->leave($__internal_442bd1eb4d43af707104fc69097afaab4d64533368099213cad6545b18aea6c0_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfb91dd7a79999b1f536fb4e51eaa09e6473771b127d31bef2c6c01668f264b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb91dd7a79999b1f536fb4e51eaa09e6473771b127d31bef2c6c01668f264b1->enter($__internal_cfb91dd7a79999b1f536fb4e51eaa09e6473771b127d31bef2c6c01668f264b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_cfb91dd7a79999b1f536fb4e51eaa09e6473771b127d31bef2c6c01668f264b1->leave($__internal_cfb91dd7a79999b1f536fb4e51eaa09e6473771b127d31bef2c6c01668f264b1_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bf5cf9cda3c7e1235682d0352d966a7aefb9e118821542f00a0b3f3b4448a8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5cf9cda3c7e1235682d0352d966a7aefb9e118821542f00a0b3f3b4448a8e5->enter($__internal_bf5cf9cda3c7e1235682d0352d966a7aefb9e118821542f00a0b3f3b4448a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_bf5cf9cda3c7e1235682d0352d966a7aefb9e118821542f00a0b3f3b4448a8e5->leave($__internal_bf5cf9cda3c7e1235682d0352d966a7aefb9e118821542f00a0b3f3b4448a8e5_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_428844aca2637e7cff11c2d899baecbc813f84e5cf0ef5b558664ff61673a402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428844aca2637e7cff11c2d899baecbc813f84e5cf0ef5b558664ff61673a402->enter($__internal_428844aca2637e7cff11c2d899baecbc813f84e5cf0ef5b558664ff61673a402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_428844aca2637e7cff11c2d899baecbc813f84e5cf0ef5b558664ff61673a402->leave($__internal_428844aca2637e7cff11c2d899baecbc813f84e5cf0ef5b558664ff61673a402_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dcd5cae17365400fc411f5a42feadd4072615deeac24c3ceab5552860c95375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcd5cae17365400fc411f5a42feadd4072615deeac24c3ceab5552860c95375->enter($__internal_9dcd5cae17365400fc411f5a42feadd4072615deeac24c3ceab5552860c95375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_9dcd5cae17365400fc411f5a42feadd4072615deeac24c3ceab5552860c95375->leave($__internal_9dcd5cae17365400fc411f5a42feadd4072615deeac24c3ceab5552860c95375_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_40cf00f64325004dd5e16b9b23e7369bef86113614286aef7d13126c8ca1cafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cf00f64325004dd5e16b9b23e7369bef86113614286aef7d13126c8ca1cafc->enter($__internal_40cf00f64325004dd5e16b9b23e7369bef86113614286aef7d13126c8ca1cafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_40cf00f64325004dd5e16b9b23e7369bef86113614286aef7d13126c8ca1cafc->leave($__internal_40cf00f64325004dd5e16b9b23e7369bef86113614286aef7d13126c8ca1cafc_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39e7b78b5ec914984c1c7b4e51effc8cd8b74ff969e0276bb850d3fec902a0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e7b78b5ec914984c1c7b4e51effc8cd8b74ff969e0276bb850d3fec902a0fc->enter($__internal_39e7b78b5ec914984c1c7b4e51effc8cd8b74ff969e0276bb850d3fec902a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_39e7b78b5ec914984c1c7b4e51effc8cd8b74ff969e0276bb850d3fec902a0fc->leave($__internal_39e7b78b5ec914984c1c7b4e51effc8cd8b74ff969e0276bb850d3fec902a0fc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
