<?php

/* APEsoreBundle:Products:index.html.twig */
class __TwigTemplate_bb32a6c8b3b34b9a2d90cdf778fe572ad82f2154d1884e04cf89a7a6588daf69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "APEsoreBundle:Products:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Product List";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Products list</h1>

    <table class=\"records_list table\">
        <thead>
            <tr>
                <th>Subcategory</th>
                <th>Product</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "subcategories", array()), "subCatName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prodName", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prodDescription", array()), "html", null, true);
            echo ") - ";
            if ($this->getAttribute($context["entity"], "deliveryDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "deliveryDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                        <a class=\"btn btn-default btn-xs\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        <a class=\"btn btn-default btn-xs\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
            <a class=\"btn btn-default\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("products_new");
        echo "\">
                New Product
            </a>
    ";
    }

    public function getTemplateName()
    {
        return "APEsoreBundle:Products:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  87 => 26,  77 => 22,  73 => 21,  62 => 19,  58 => 18,  55 => 17,  51 => 16,  38 => 5,  35 => 4,  29 => 2,  11 => 1,);
    }
}
