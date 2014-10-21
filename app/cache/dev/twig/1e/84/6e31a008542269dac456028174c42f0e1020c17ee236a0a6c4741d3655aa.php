<?php

/* ::base.html.twig */
class __TwigTemplate_1e846e31a008542269dac456028174c42f0e1020c17ee236a0a6c4741d3655aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>     
         ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        \t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <div id=\"wrapper\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">ICT Careers</a>
            </div>
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li><a href=\"#\">Students</a></li>
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("teacher_skill_main");
        echo "\">Skills & Improvement</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("activity_main");
        echo "\">Activities</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("career_main");
        echo "\">Careers</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("scholarship_main");
        echo "\">Scholarships</a></li>
                    <li><a href=\"#\">Advisors</a></li>\t\t\t\t\t
                </ul>
                <ul class=\"nav navbar-nav navbar-right navbar-user\">
\t\t\t\t    <li class=\"active\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"#about\">About</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
                </ul>
            </div>
        </nav>
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
    </div>

        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ICT Careers";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "     

\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/local.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    \t ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "          <script src=\"js/jquery-1.10.2.min.js\"></script>
          <script src=\"bootstrap/js/bootstrap.min.js\"></script>
          <script src=\"http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js\"></script>
          <script src=\"http://www.prepbootstrap.com/Content/js/gridData.js\"></script>

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 49,  138 => 48,  133 => 44,  127 => 12,  123 => 11,  119 => 10,  115 => 9,  111 => 8,  105 => 6,  99 => 5,  93 => 55,  91 => 48,  86 => 45,  84 => 44,  75 => 38,  68 => 34,  64 => 33,  60 => 32,  56 => 31,  35 => 14,  33 => 6,  29 => 5,  23 => 1,  31 => 3,  28 => 2,);
    }
}
