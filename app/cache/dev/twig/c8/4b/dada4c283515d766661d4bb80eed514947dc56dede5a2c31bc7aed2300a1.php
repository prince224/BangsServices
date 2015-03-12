<?php

/* DomaineBundle:Form:fields.html.twig */
class __TwigTemplate_c84bdada4c283515d766661d4bb80eed514947dc56dede5a2c31bc7aed2300a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <tr>
    \t<td>";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "</td>
        
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "</td>
        
    </tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "DomaineBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  28 => 3,  26 => 2,  20 => 1,  205 => 77,  202 => 76,  197 => 72,  194 => 71,  184 => 60,  175 => 55,  172 => 54,  135 => 100,  131 => 99,  109 => 79,  107 => 76,  103 => 74,  101 => 71,  94 => 66,  92 => 54,  88 => 53,  65 => 33,  61 => 32,  47 => 21,  40 => 7,  22 => 1,  42 => 9,  38 => 8,  33 => 5,  30 => 4,  25 => 2,);
    }
}
