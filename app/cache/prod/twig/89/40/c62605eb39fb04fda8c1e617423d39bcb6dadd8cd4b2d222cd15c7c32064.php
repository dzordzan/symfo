<?php

/* APiszczekDemoBundle:Layout:layout.html.twig */
class __TwigTemplate_8940c62605eb39fb04fda8c1e617423d39bcb6dadd8cd4b2d222cd15c7c32064 extends Twig_Template
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
        ob_start();
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/apiszczekdemo/"), "html", null, true);
        $context["SRC"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Andrzej Piszczek\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

   ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "

</head>

<body>

 <!-- Navigation -->
\t";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 30
        echo "


    <!-- Page Content -->
    <div class=\"container\">
    \t<!-- Page Heading -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 38
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 39
        echo "                </h1>
            </div>
        </div>
   \t\t<!-- Content -->
\t\t";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
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
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "

</body>

</html>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["SRC"]) ? $context["SRC"] : null), "html", null, true);
        echo "css/bootstrap.min.css\" rel=\"stylesheet\">  
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["SRC"]) ? $context["SRC"] : null), "html", null, true);
        echo "css/1-col-portfolio.css\" rel=\"stylesheet\">
   ";
    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        // line 28
        echo "\t\t";
        $this->env->loadTemplate("APiszczekDemoBundle:Layout:navigation.html.twig")->display($context);
        // line 29
        echo "\t";
    }

    // line 38
    public function block_pageHeader($context, array $blocks = array())
    {
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "\t\t";
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "        <!-- jQuery -->

  \t\t  <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["SRC"]) ? $context["SRC"] : null), "html", null, true);
        echo "js/jquery.js\"></script>

    \t<!-- Bootstrap Core JavaScript -->
   \t\t <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["SRC"]) ? $context["SRC"] : null), "html", null, true);
        echo "js/bootstrap.min.js\"></script>
     ";
    }

    public function getTemplateName()
    {
        return "APiszczekDemoBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 67,  159 => 64,  155 => 62,  152 => 61,  148 => 44,  145 => 43,  140 => 38,  136 => 29,  133 => 28,  130 => 27,  124 => 18,  120 => 17,  117 => 16,  114 => 15,  109 => 13,  100 => 69,  98 => 61,  80 => 45,  78 => 43,  72 => 39,  70 => 38,  60 => 30,  58 => 27,  49 => 20,  47 => 15,  42 => 13,  29 => 2,  25 => 1,);
    }
}
