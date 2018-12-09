<?php

/* base.html.twig */
class __TwigTemplate_01a7651d000befe7a650dd467e7c5e71d88ecd20bd97ecf018ee139e8ee997e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'topnav' => array($this, 'block_topnav'),
            'content' => array($this, 'block_content'),
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
        // line 98
        echo "    </head>
    <body>
        ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ooredoo SMF";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.min.css"), "html", null, true);
        echo "\">
            <style>
                /* web/css/my-style.css */
                body {
                    padding-top: 50px;
                }
                .box {
                    width: 500px;
                    margin: 200px 0;
                }

                .shape1{
                    position: relative;
                    height: 150px;
                    width: 150px;
                    background-color: #ff0712;
                    border-radius: 80px;
                    float: left;
                    margin-right: -50px;
                }
                .shape2 {
                    position: relative;
                    height: 150px;
                    width: 150px;
                    background-color: #ff0712;
                    border-radius: 80px;
                    margin-top: -30px;
                    float: left;
                }
                .shape3 {
                    position: relative;
                    height: 150px;
                    width: 150px;
                    background-color: #ff0712;
                    border-radius: 80px;
                    margin-top: -30px;
                    float: left;
                    margin-left: -31px;
                }
                .shape4 {
                    position: relative;
                    height: 150px;
                    width: 150px;
                    background-color: #ff0712;
                    border-radius: 80px;
                    margin-top: -25px;
                    float: left;
                    margin-left: -32px;
                }
                .shape5 {
                    position: relative;
                    height: 150px;
                    width: 150px;
                    background-color: #ff0712;
                    border-radius: 80px;
                    float: left;
                    margin-right: -48px;
                    margin-left: -32px;
                    margin-top: -30px;
                }
                .shape6 {
                    position: relative;
                    height: 150px;
                    width: 150px;
                    background-color: #ff0712;
                    border-radius: 80px;
                    float: left;
                    margin-right: -20px;
                    margin-top: -35px;
                }
                .shape7 {
                    position: relative;
                    height: 150px;
                    width: 150px;
                    background-color: #ff0712;
                    border-radius: 80px;
                    float: left;
                    margin-right: -20px;
                    margin-top: -57px;
                }
                .float {
                    position: absolute;
                    z-index: 2;
                }

                .form {
                    margin-left: 145px;
                }
            </style>
        ";
    }

    // line 100
    public function block_body($context, array $blocks = array())
    {
        // line 101
        echo "            ";
        $this->displayBlock('topnav', $context, $blocks);
        // line 104
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "        ";
    }

    // line 101
    public function block_topnav($context, array $blocks = array())
    {
        // line 102
        echo "                ";
        $this->loadTemplate("topnav.html.twig", "base.html.twig", 102)->display($context);
        // line 103
        echo "            ";
    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        // line 105
        echo "            ";
    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        // line 108
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 109,  193 => 108,  190 => 107,  186 => 105,  183 => 104,  179 => 103,  176 => 102,  173 => 101,  169 => 106,  166 => 104,  163 => 101,  160 => 100,  66 => 8,  61 => 7,  58 => 6,  52 => 5,  46 => 110,  43 => 107,  41 => 100,  37 => 98,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\OoredooSMF\\app\\Resources\\views\\base.html.twig");
    }
}
