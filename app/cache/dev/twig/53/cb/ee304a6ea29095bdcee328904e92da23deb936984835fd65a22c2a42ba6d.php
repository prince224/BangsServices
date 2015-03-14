<?php

/* PageBundle:Admin:modifier_section_page.html.twig */
class __TwigTemplate_53cbee304a6ea29095bdcee328904e92da23deb936984835fd65a22c2a42ba6d extends Twig_Template
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
        echo "<h1>Modifier la section :</h1>

<div class=\"col-md-10\">
\t<p>Définissez un nom pour votre section.</p>
\t<p>Définissez la position pour votre menu sur le site, en indiquant un numéro de 0 à 2.</p>
\t<p>
\t\t<ul>
\t\t\t<li>- 0  : A droite</li>
\t\t\t<li>- 1 : Au milieu</li>
\t\t\t<li>- 2 : A gauche</li>
\t\t</ul>
\t\t<strong>Par défaut, tous les menus ont la position 0 </strong>
\t</p>
\t<div class=\"col-md-10 well\">
\t\t<form action=\"#\" method=\"post\" ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t  \t\t<table class=\"table responsive\">
\t\t  \t\t<tbody>
\t\t  \t\t\t";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
\t\t  \t\t</tbody>
\t  \t\t</table>
\t    <input type=\"submit\" class=\"btn btn-success\" />
\t  </form>
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Admin:modifier_section_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 24,  49 => 21,  33 => 7,  30 => 6,  25 => 3,);
    }
}
