<?php

/* APiszczekDemoBundle:Overview:upload.html.twig */
class __TwigTemplate_92625f29cc6c098b6cb1a2a8f05652a48e62f987b9b7b362204413e6fa4becd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APiszczekDemoBundle:Layout:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Wstaw zdjęcie";
    }

    // line 6
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 7
        echo "\tWstaw zdjęcie
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        if (((array_key_exists("added", $context)) ? (_twig_default_filter((isset($context["added"]) ? $context["added"] : null))) : (""))) {
            // line 12
            echo "    <div class=\"alert alert-success\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
        <strong>Powodzenie!</strong> Pomyślnie wgrałeś zdjęcie. Sprawdz je na stronie głównej!.
    </div>
  ";
        }
        // line 17
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "  <div class=\"container auth\">

      <div id=\"big-form\" class=\"well auth-box\">
        <form action=\"#\" method=\"post\"  ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
          <fieldset>
   ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

   \t<div class=\"row col-md-7\"> 
  \t <div class=\"form-group col-md-10\">
  \t \t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urlAddress", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
              ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "urlAddress", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              
        </div>
        
     
       
      <div class=\"form-group col-md-12\">
  \t \t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
              ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
       </div>
    
      <div class=\"form-group  col-md-12\">
  \t \t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
  \t\t\t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
                
      </div> 

      </div>

      <div id=\"preview\" class=\"form-group col-md-5\">
        <div class=\"form-group\">
           ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imageUpload", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "<br/>
           ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imageUpload", array()), 'widget');
        echo "
         </div>
    \t</div>
     
  \t<div class=\"form-group form-group col-md-7\">

              <label class=\" control-label\" for=\"button1id\">Potwierdz</label>
              <div class=\"\">
                <button type=\"submit\" id=\"button1id\" name=\"button1id\" class=\"btn btn-success\">Dodaj nowe zdjęcie</button>
              </div>
            </div>
  ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "






      </div>
      <div class=\"clearfix\"></div>
    </div>


";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
    ";
        // line 18
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["SRC"]) ? $context["SRC"] : null), "html", null, true);
        echo "/css/fileinput.css\" rel=\"stylesheet\">
  ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
  ";
        // line 22
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["SRC"]) ? $context["SRC"] : null), "html", null, true);
        echo "/js/fileinput.min.js\"></script>
  <script type=\"text/javascript\">

      \$(\"#form_imageUpload\").fileinput({
        showUpload: false,
        showCaption: false,
        maxFileCount: 1,
        browseClass: \"btn btn-primary btn-lg\",
        allowedFileTypes: [\"image\"],
        fileType: \"image\"
      });
       \$(\"#form_imageUpload\").on('fileloaded', function(event) {
         \$('#form_urlAddress').attr('disabled','disabled');
      });
      \$(\"#form_imageUpload\").on('fileclear', function(event) {
        \$('#form_urlAddress').removeAttr('disabled');
      });
      \$( document ).ready(function() {
        if(navigator.geolocation)
                navigator.geolocation.getCurrentPosition(handleGetCurrentPosition);
      }); 
      function handleGetCurrentPosition(location){
    
      \$('input[name*=latitude]').val(location.coords.latitude);
      \$('input[name*=longitude]').val(location.coords.longitude);

  }
    </script>
  ";
    }

    public function getTemplateName()
    {
        return "APiszczekDemoBundle:Overview:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 23,  177 => 22,  172 => 21,  166 => 19,  162 => 18,  157 => 17,  140 => 95,  126 => 84,  122 => 83,  111 => 75,  107 => 74,  100 => 70,  96 => 69,  86 => 62,  82 => 61,  75 => 57,  70 => 55,  65 => 52,  62 => 21,  59 => 17,  52 => 12,  49 => 11,  46 => 10,  41 => 7,  38 => 6,  32 => 4,);
    }
}
