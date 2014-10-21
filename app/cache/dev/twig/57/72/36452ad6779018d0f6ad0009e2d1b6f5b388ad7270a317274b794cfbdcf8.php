<?php

/* myBundleictBundle:Default:parent_career.html.twig */
class __TwigTemplate_577236452ad6779018d0f6ad0009e2d1b6f5b388ad7270a317274b794cfbdcf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Careers</h1>
                    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "groupname"), "html", null, true);
            echo "</div>
                        <div class=\"panel-body\">
                          <b>Jobs:</b>&nbsp; ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jobs"), "html", null, true);
            echo "
                      <BR><b>Skill&Interests:</b>&nbsp; ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "skillInterests"), "html", null, true);
            echo "
                      <BR><b>profile:</b>&nbsp;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile"), "html", null, true);
            echo "\">More opinion</a>
                      <BR><b><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("career_count", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Click for like this topic: </a></b>There are ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "popular"), "html", null, true);
            echo " people like this.
                        </div>
                        <div class=\"panel-heading\">
                            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
            echo "\"></i>More Detail:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "     \t\t\t\t\t\t
                    <div class=\"alert alert-success alert-dismissable\">

                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "myBundleictBundle:Default:parent_career.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  69 => 17,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  44 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
