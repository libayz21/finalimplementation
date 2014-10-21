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
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "groupname"), "html", null, true);
            echo "</div>
                        <div class=\"panel-body\">
                          <b>Jobs:</b>&nbsp; ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "jobs"), "html", null, true);
            echo "
                      <BR><b>Skill&Interests:</b>&nbsp; ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "skillInterests"), "html", null, true);
            echo "
                      <BR><b>profile:</b>&nbsp;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "profile"), "html", null, true);
            echo "\">More opinion</a>
                      <BR><b><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("career_count", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">Click for like this topic: </a></b>There are ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "popular"), "html", null, true);
            echo " people like this.
                        </div>
                        <div class=\"panel-heading\">
                            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
            echo "\"></i>More Detail:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "url"), "html", null, true);
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
        return array (  97 => 24,  77 => 18,  65 => 15,  37 => 7,  114 => 46,  81 => 20,  134 => 66,  90 => 33,  74 => 30,  70 => 25,  53 => 12,  127 => 62,  84 => 44,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 8,  107 => 41,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 57,  108 => 36,  102 => 46,  71 => 19,  67 => 26,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 34,  89 => 32,  85 => 21,  79 => 18,  75 => 38,  68 => 34,  56 => 22,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 35,  93 => 55,  88 => 38,  78 => 27,  46 => 14,  27 => 4,  40 => 8,  44 => 9,  35 => 6,  31 => 3,  43 => 8,  41 => 8,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 48,  136 => 56,  123 => 11,  121 => 46,  117 => 44,  115 => 43,  105 => 6,  101 => 32,  91 => 41,  69 => 17,  66 => 24,  62 => 23,  49 => 11,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 49,  133 => 44,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 50,  106 => 50,  103 => 32,  99 => 46,  95 => 35,  92 => 21,  86 => 32,  82 => 28,  80 => 19,  73 => 17,  64 => 33,  60 => 22,  57 => 13,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 7,);
    }
}
