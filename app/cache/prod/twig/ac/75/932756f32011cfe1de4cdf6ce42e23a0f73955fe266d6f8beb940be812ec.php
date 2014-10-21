<?php

/* ::base.html.twig */
class __TwigTemplate_ac75932756f32011cfe1de4cdf6ce42e23a0f73955fe266d6f8beb940be812ec extends Twig_Template
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
                    <li><a href=\"#\">Student</a></li>
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("teacher_skill_main");
        echo "\">Skill&Improvement</a></li>
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
        return array (  127 => 12,  84 => 44,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 8,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 10,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 38,  68 => 34,  56 => 31,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 55,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 14,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 48,  136 => 56,  123 => 11,  121 => 46,  117 => 44,  115 => 9,  105 => 6,  101 => 32,  91 => 48,  69 => 25,  66 => 15,  62 => 23,  49 => 14,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 49,  133 => 44,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 5,  95 => 28,  92 => 21,  86 => 45,  82 => 22,  80 => 19,  73 => 19,  64 => 33,  60 => 32,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
