<?php

/* APiszczekDemoBundle:Thread:index.html.twig */
class __TwigTemplate_7db29b498e3ba89b3929c2f5db7fe6616990230b5549c8e6a7c073253c680246 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Posty";
    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 4
        echo "    Lista Tematów
    <small></small>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Slug</th>
                <th>Createat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "
            <div class=\"container\">
            <div class=\"col-md-1\">
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\" style=\"font-size:55px; top:15px;\"></span></a>
            </div>
            <div class=\"col-md-8\">
                <h1>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</h1>
                <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "content", array()), "html", null, true);
            echo "</p>
                <div>
            <span class=\"badge\">Posted ";
            // line 32
            if ($this->getAttribute($context["entity"], "createAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</span><div class=\"pull-right\"><span class=\"label label-default\">alice</span> <span class=\"label label-primary\">story</span> <span class=\"label label-success\">blog</span> <span class=\"label label-info\">personal</span> <span class=\"label label-warning\">Warning</span>
            <span class=\"label label-danger\">Danger</span></div>         
                 </div>
                <hr>
               
                </div>
                 <div class=\"col-md-2\">
                 <p><ul>
                    <li>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                 </p>
                 </div>
            </div>
 
              
              <!--  
                </td>
            </tr>-->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("thread_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "APiszczekDemoBundle:Thread:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  124 => 56,  106 => 44,  100 => 41,  86 => 32,  81 => 30,  77 => 29,  71 => 26,  66 => 23,  62 => 22,  48 => 10,  45 => 8,  39 => 4,  36 => 3,  30 => 2,);
    }
}
