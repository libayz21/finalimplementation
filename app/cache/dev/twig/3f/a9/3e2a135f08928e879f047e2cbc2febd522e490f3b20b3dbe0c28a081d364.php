<?php

/* myBundleictBundle:Default:index.html.twig */
class __TwigTemplate_3fa93e2a135f08928e879f047e2cbc2febd522e490f3b20b3dbe0c28a081d364 extends Twig_Template
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
        echo "         <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Home</h1>
                    <div class=\"alert alert-success alert-dismissable\">
                        Welcome ICT central information.
                    </div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "myBundleictBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
