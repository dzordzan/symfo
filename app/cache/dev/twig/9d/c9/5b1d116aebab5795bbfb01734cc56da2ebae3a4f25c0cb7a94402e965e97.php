<?php

/* APiszczekDemoBundle:Overview:about.html.twig */
class __TwigTemplate_9dc95b1d116aebab5795bbfb01734cc56da2ebae3a4f25c0cb7a94402e965e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APiszczekDemoBundle:Overview:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APiszczekDemoBundle:Overview:layout.html.twig";
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
        echo twig_escape_filter($this->env, (isset($context["picture"]) ? $context["picture"] : $this->getContext($context, "picture")), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["surname"]) ? $context["surname"] : $this->getContext($context, "surname")), "html", null, true);
        echo " </h3>
              
                <p>Zmuszony do programowania. Trzeba jakoś zarobić na jedzenie. Chce zostać programistą PHP, a tak po za tym to nauka mnie najbardziej interesuje.
                Dziękuje za uwagę.<p>
                <h4>Indeks: ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "html", null, true);
        echo " </h4>
                <h4>Grupa: ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "html", null, true);
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
