<?php

/* APiszczekDemoBundle:Overview:about.html.twig */
class __TwigTemplate_96d8f155d86f089bf69c9c9e337ecdae96aaa724b69f9c55f20e0d0467e06943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APiszczekDemoBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APiszczekDemoBundle:Layout:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "O mnie";
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "\tO mnie
\t<small></small>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
\t<div class=\"row\">
            <div class=\"col-md-6\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["picture"]) ? $context["picture"] : null), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : null), "html", null, true);
        echo " </h3>
              
                <p>Zmuszony do programowania. Trzeba jakoś zarobić na jedzenie. Chce zostać programistą PHP, a tak po za tym to nauka mnie najbardziej interesuje.
                Dziękuje za uwagę.<p>
                <h4>Indeks: ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["album"]) ? $context["album"] : null), "html", null, true);
        echo " </h4>
                <h4>Grupa: ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
        echo " </h4>

            </div>
        </div>
\t

";
    }

    public function getTemplateName()
    {
        return "APiszczekDemoBundle:Overview:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  70 => 22,  61 => 18,  54 => 14,  48 => 10,  45 => 9,  39 => 6,  36 => 5,  30 => 4,);
    }
}
