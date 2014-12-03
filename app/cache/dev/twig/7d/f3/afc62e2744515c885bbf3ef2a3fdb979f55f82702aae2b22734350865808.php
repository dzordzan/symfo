<?php

/* APiszczekDemoBundle:Overview:layout.html.twig */
class __TwigTemplate_7df3afc62e2744515c885bbf3ef2a3fdb979f55f82702aae2b22734350865808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Andrzej Piszczek\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

   ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "

</head>

<body>

 <!-- Navigation -->
\t";
        // line 25
        $this->displayBlock('navigation', $context, $blocks);
        // line 28
        echo "


    <!-- Page Content -->
    <div class=\"container\">
    \t<!-- Page Heading -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 36
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 37
        echo "                </h1>
            </div>
        </div>
   \t\t<!-- Content -->
\t\t";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Andrzej Piszczek 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->
    ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "

</body>

</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">  
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/1-col-portfolio.css\" rel=\"stylesheet\">
   ";
    }

    // line 25
    public function block_navigation($context, array $blocks = array())
    {
        // line 26
        echo "\t\t";
        $this->env->loadTemplate("APiszczekDemoBundle:Overview:navigation.html.twig")->display($context);
        // line 27
        echo "\t";
    }

    // line 36
    public function block_pageHeader($context, array $blocks = array())
    {
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "\t\t";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "        <!-- jQuery -->
  \t\t  <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/jquery.js\"></script>

    \t<!-- Bootstrap Core JavaScript -->
   \t\t <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
     ";
    }

    public function getTemplateName()
    {
        return "APiszczekDemoBundle:Overview:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 64,  152 => 61,  149 => 60,  146 => 59,  142 => 42,  139 => 41,  134 => 36,  130 => 27,  127 => 26,  124 => 25,  118 => 16,  113 => 15,  110 => 14,  105 => 12,  96 => 66,  94 => 59,  76 => 43,  74 => 41,  68 => 37,  66 => 36,  56 => 28,  54 => 25,  45 => 18,  43 => 14,  38 => 12,  25 => 1,);
    }
}
