<?php

/* APiszczekDemoBundle:Overview:upload.html.twig */
class __TwigTemplate_83f9a202eb001ad41dd75773ae959e18d331934b47b76f5edd81c00542a6f5c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APiszczekDemoBundle:Overview:layout.html.twig");

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
        return "APiszczekDemoBundle:Overview:layout.html.twig";
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

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 6
        echo "\tWstaw zdjęcie
\t<small></small>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        if (((array_key_exists("added", $context)) ? (_twig_default_filter((isset($context["added"]) ? $context["added"] : $this->getContext($context, "added")))) : (""))) {
            // line 11
            echo "<div class=\"alert alert-success\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
    <strong>Powodzenie!</strong> Pomyślnie wgrałeś zdjęcie. Sprawdz je na stronie głównej!.
</div>
";
        }
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "<div class=\"container auth\">

    <div id=\"big-form\" class=\"well auth-box\">
      <form action=\"#\" method=\"post\"  ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <fieldset>
 ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

 \t<div class=\"row col-md-7\"> 
\t <div class=\"form-group col-md-10\">
\t \t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlAddress", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlAddress", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
            
      </div>
      
    <!-- <div class=\"col-md-2\" style=\"margin-top: 24px;margin-left:-18px;\">
     \t<button id=\"button2id\" name=\"button2id\" class=\"form-group btn btn-danger\" type='button' >Pokaż -></button>
 \t</div>-->
 
    \t
   
     
    <div class=\"form-group col-md-12\">
\t \t\t";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
     </div>
  
    <div class=\"form-group  col-md-12\">
\t \t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
\t\t\t";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-md")));
        echo "
              
    </div> 

    </div>

    <div id=\"preview\" class=\"form-group col-md-5\">
      <div class=\"form-group\">
         ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageUpload", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "<br/>
         ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageUpload", array()), 'widget');
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
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "






    </div>
    <div class=\"clearfix\"></div>
  </div>


";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
  ";
        // line 17
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/fileinput.css\" rel=\"stylesheet\">
";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
";
        // line 21
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/fileinput.min.js\"></script>
<script type=\"text/javascript\">

  \$( \"#button2id\" ).click(function() {
  \t\$('#preview').css( \"background\", \"url(\"+document.getElementById('form_urlAddress').value+\") no-repeat center center\");
  \t\$('#preview').css( \"background-size\", \"100%\");
})

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
        return array (  184 => 22,  180 => 21,  175 => 20,  169 => 18,  165 => 17,  160 => 16,  143 => 104,  129 => 93,  125 => 92,  114 => 84,  110 => 83,  103 => 79,  99 => 78,  84 => 66,  80 => 65,  73 => 61,  68 => 59,  63 => 56,  61 => 20,  59 => 16,  52 => 11,  50 => 10,  47 => 9,  41 => 6,  38 => 5,  32 => 4,);
    }
}
