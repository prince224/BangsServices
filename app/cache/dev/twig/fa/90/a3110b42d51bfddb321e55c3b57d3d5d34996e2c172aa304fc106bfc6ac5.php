<?php

/* PageBundle:Admin:modifier_une_page.html.twig */
class __TwigTemplate_fa90a3110b42d51bfddb321e55c3b57d3d5d34996e2c172aa304fc106bfc6ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_admin.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "DomaineBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Modification de la page :</h1>
<div class=\"well\">
  <form action=\"#\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-success\" />
  </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "PageBundle:Admin:modifier_une_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  37 => 9,  33 => 7,  30 => 6,  25 => 3,);
    }
}
