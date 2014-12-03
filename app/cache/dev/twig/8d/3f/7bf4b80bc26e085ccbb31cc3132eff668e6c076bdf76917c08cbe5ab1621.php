<?php

/* APiszczekDemoBundle:Overview:overview.html.twig */
class __TwigTemplate_8d3f7bf4b80bc26e085ccbb31cc3132eff668e6c076bdf76917c08cbe5ab1621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APiszczekDemoBundle:Overview:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Strona Głowna";
    }

    // line 4
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 5
        echo "\tStrona główna
\t<small></small>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 12
            echo "\t\t<div class=\"row\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" style=\"position: relative;\">
            <div class=\"col-md-3\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "picture", array()), "html", null, true);
            echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-7\">
                <h3>Projekt ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</h3>
              
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "about", array()), "html", null, true);
            echo "</p>
                <h4>Tagi:</h4>
                ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["picture"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "               \t \t<a class=\"btn btn-primary\" style=\"padding: 0 0;\">#";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo " <span class=\"glyphicon\"></span></a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            </div>
            <div class=\"col-md-2\" style=\"text-align:right;\" >
                <!---<div><button class=\"glyphicon glyphicon-cog  btn\" style=\"display:none;font-size:20px;padding:0px 5px;\" aria-hidden=\"true\"></button></div>-->
                <div><button onclick=\"feedRemove('";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "picture", array()), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ")\" class=\"glyphicon glyphicon-remove  btn btn-danger\" style=\"font-size:10px;padding:0px 2px;display:none;\" aria-hidden=\"true\"></button></div>
            </div>
            <div style=\"position:absolute; bottom: 5px; right: 5px\"> ";
            // line 31
            if ((($this->getAttribute($context["picture"], "location", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["picture"], "location", array()))) : (""))) {
                echo " <span class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "location", array()), "html", null, true);
                echo " ";
            }
            echo "</div>
                
            </div>
      
\t\t<hr>

\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"exampleModalLabel\">Podaj hasło:</h4>
      </div>
      <div class=\"modal-body\">
        <form role=\"form\">
          <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" id=\"message-text\"/>
          </div>
        </form>
      </div>
      <div  class=\"modal-footer\">
        <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-default\">Anuluj</button>
        <button type=\"button\" onclick=\"removeF();\" class=\"btn btn-default\">Potwierdź</button>
      </div>
    </div>
  </div>
</div>
";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
";
        // line 61
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        var gfeedPicture, gfeedId;
        function feedRemove(feedPicture, feedId)
        {   
            gfeedPicture = feedPicture;
            gfeedId= feedId;
            \$(\"#exampleModal\").modal();/*
            */
        }
        function removeF(){

            if (\$('#message-text').val()=='maslo'){
                \$(\"#exampleModal\").modal('hide');
                \$.post( \"feed/remove\", { picture: gfeedPicture } ).done(function(data) 
                {

                    if (data == 1){
                        \$('#'+gfeedId+', #'+gfeedId+' + hr').fadeOut(\"slow\");
                    }
                  
                });
        } else
           { alert('Błędne hasło');}

        }
        
        \$('.row').hover(
              function() {
                \$('button', this ).show();
              }, function() {
                \$('button', this ).hide();
              });
    </script>
";
    }

    public function getTemplateName()
    {
        return "APiszczekDemoBundle:Overview:overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 61,  167 => 60,  143 => 38,  118 => 31,  111 => 29,  106 => 26,  97 => 24,  93 => 23,  88 => 21,  83 => 19,  76 => 15,  69 => 12,  52 => 11,  49 => 10,  46 => 9,  40 => 5,  37 => 4,  31 => 3,);
    }
}
