<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bf26e00dc44f677de52fedfe23a0a995c072f79a3fadce5e4ed0791f0ef57a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b3c4001a51383703f58537204a07868aaf908972b7f990543355ec918d4ebdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3c4001a51383703f58537204a07868aaf908972b7f990543355ec918d4ebdc->enter($__internal_1b3c4001a51383703f58537204a07868aaf908972b7f990543355ec918d4ebdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b3c4001a51383703f58537204a07868aaf908972b7f990543355ec918d4ebdc->leave($__internal_1b3c4001a51383703f58537204a07868aaf908972b7f990543355ec918d4ebdc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8df42b785144571a9e708f6d1ebcc12435e22250b3d2ec80abdc89a9f9ced9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df42b785144571a9e708f6d1ebcc12435e22250b3d2ec80abdc89a9f9ced9ac->enter($__internal_8df42b785144571a9e708f6d1ebcc12435e22250b3d2ec80abdc89a9f9ced9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8df42b785144571a9e708f6d1ebcc12435e22250b3d2ec80abdc89a9f9ced9ac->leave($__internal_8df42b785144571a9e708f6d1ebcc12435e22250b3d2ec80abdc89a9f9ced9ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_175e9172da9c035b004cee5c05b3b66518c5a912d00f424d6dd7c09fc04c3e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175e9172da9c035b004cee5c05b3b66518c5a912d00f424d6dd7c09fc04c3e74->enter($__internal_175e9172da9c035b004cee5c05b3b66518c5a912d00f424d6dd7c09fc04c3e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_175e9172da9c035b004cee5c05b3b66518c5a912d00f424d6dd7c09fc04c3e74->leave($__internal_175e9172da9c035b004cee5c05b3b66518c5a912d00f424d6dd7c09fc04c3e74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07ed64c1f6e470a5ddbb360d77310e6245b382d16579be1077c803588af8ecb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ed64c1f6e470a5ddbb360d77310e6245b382d16579be1077c803588af8ecb8->enter($__internal_07ed64c1f6e470a5ddbb360d77310e6245b382d16579be1077c803588af8ecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07ed64c1f6e470a5ddbb360d77310e6245b382d16579be1077c803588af8ecb8->leave($__internal_07ed64c1f6e470a5ddbb360d77310e6245b382d16579be1077c803588af8ecb8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
