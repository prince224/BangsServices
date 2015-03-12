<?php

/* PageBundle:Admin:ajouter_une_page.html.twig */
class __TwigTemplate_cd5a27867effd3003e896902dbe1708a1cfbbfeb1ac267a39c9dcbd58f2c691f extends Twig_Template
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
        echo "<h1>Créer une nouvelle page :</h1>
<div class=\"well\">
  <form action=\"#\" method=\"post\" ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
  \t<table class=\"table responsive\">
  \t\t<tbody>
  \t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
  \t\t</tbody>
  \t</table>
   
    <input type=\"submit\" class=\"btn btn-success\" />
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Admin:ajouter_une_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  37 => 9,  33 => 7,  30 => 6,  25 => 3,);
    }
}
