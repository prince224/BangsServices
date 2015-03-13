<?php

/* DomaineBundle:Default:index.html.twig */
class __TwigTemplate_3a9a08cc8ecc09589e18a9d94784f73c5fc432985a975fed9d506817a03babe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layoutDomaineLerabot.html.twig");

        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutDomaineLerabot.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        // line 4
        echo "\t<div>
\t\t<p>Crée depuis 30 ans, le ball trap du Rabot est devenu un stand internationnal, grâce à ses nombreuses compétitions nationales, européennes et mondiales. </p>
\t</div>
\t<div>
\t\t<ul>
\t\t\t<li>11 parcours de chasse </li>
  \t\t\t<li>1 sanglier courant de chasse</li> 
   \t\t\t<li>Compak-Sporting </li>
    \t\t<li>Swing-Trap (pour les enfants) </li>\t
\t\t</ul>
\t</div>
\t<div>
\t\t<p>Nos installations permettent en permanence aux débutants et aux initiés de s'exercer au tir de pigeons d'argile. </p>
\t</div>

\t<div>
\t\t<p>Parcours spécial débutants pour l'appentissage du tir avec un moniteur compétent.</p>
\t</div>

\t<div>
\t\t<p>Parcours de championnats pour les compétiteurs avertis afin de permettre de s'exercer efficacement.</p>
\t</div>
\t<div>
\t\t<p>Fermeture hebdomadaire : Mardi toute la journée et mercredi matin </p>
\t</div>

\t<div>
\t\t<p>Horaires d'ouverture :9h00 - 12h30 / 14h00 - 19h30</p>
\t\t<p><strong>Contact : </strong></p>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "DomaineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
