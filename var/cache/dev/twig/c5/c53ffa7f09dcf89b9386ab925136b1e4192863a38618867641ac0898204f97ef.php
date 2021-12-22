<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* author/index.html.twig */
class __TwigTemplate_2cfffec978f6349c68e9d66fe803905dd20aaf0e92484395ee575912b8c39012 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <title>width: 100%</title>
    <style>
        .btn {
            display: inline-block;
            box-sizing: border-box;
            padding: 0 25px;
            margin: 0 15px 15px 0;
            outline: none;
            border: 1px solid #fff;
            border-radius: 50px;
            height: 36px;
            line-height: 36px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            color: #444;
            background-color: #fff;
            box-shadow: 0 4px 6px rgb(65 132 144 / 10%), 0 1px 3px rgb(0 0 0 / 8%);
            cursor: pointer;
            user-select: none;
            appearance: none;
            touch-action: manipulation;
            vertical-align: top;
            transition: box-shadow 0.2s;
        }
        .btn:focus-visible {
            border: 1px solid #4c51f9;
            outline: none;
        }
        .btn:hover {
            transition: all 0.2s;
            box-shadow: 0 7px 14px rgb(65 132 144 / 10%), 0 3px 6px rgb(0 0 0 / 8%);
        }
        .btn:active {
            background-color: #808080;
        }
        .btn:disabled {
            background-color: #eee;
            border-color: #eee;
            color: #444;
            cursor: not-allowed;
        }
        .table {
            width: 100%;
            border: none;
            margin-bottom: 20px;
        }
        .table thead th {
            font-weight: bold;
            text-align: left;
            border: none;
            padding: 10px 15px;
            background: #d8d8d8;
            font-size: 14px;
        }
        .table thead tr th:first-child {
            border-radius: 8px 0 0 8px;
        }
        .table thead tr th:last-child {
            border-radius: 0 8px 8px 0;
        }
        .table tbody td {
            text-align: left;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            vertical-align: top;
        }
        .table tbody tr:nth-child(even){
            background: #f3f3f3;
        }
        .table tbody tr td:first-child {
            border-radius: 8px 0 0 8px;
        }
        .table tbody tr td:last-child {
            border-radius: 0 8px 8px 0;
        }
    </style>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
</head>
<body>

<script>

    \$(document).ready(function(){
        \$('.editBtn').on('click',function(){
            //hide edit span
            \$(this).closest(\"tr\").find(\".editSpan\").hide();

            //show edit input
            \$(this).closest(\"tr\").find(\".editInput\").show();

            //hide edit button
            \$(this).closest(\"tr\").find(\".editBtn\").hide();

            //show edit button
            \$(this).closest(\"tr\").find(\".saveBtn\").show();

        });

        \$('.saveBtn').on('click',function(){
            let trObj = \$(this).closest(\"tr\");
            let ID = \$(this).closest(\"tr\").attr('id');
            let inputData = \$(this).closest(\"tr\").find(\".editInput\").serialize();
            \$.ajax({
                type:'POST',
                url:'/updateAuthor',
                dataType: \"json\",
                data:'action=edit&id='+ID+'&'+inputData,
                success:function(response){
                    if(response.status === \"ok\"){
                        trObj.find(\".editInput.autors\").text(response.authors);
                        trObj.find(\".editSpan.autors\").text(response.authors);

                        \$('.books').each(function(index){
                            trObj.find('.books').text(response.books[index]);
                        });

                        trObj.find(\".editInput\").hide();
                        trObj.find(\".saveBtn\").hide();
                        trObj.find(\".editSpan\").show();
                        trObj.find(\".editBtn\").show();
                        // location.reload()

                    }else{
                        alert(response.msg);
                    }
                }
            });
        });

        \$('.deleteBtn').on('click',function(){
            \$(this).closest(\"tr\").find(\".deleteBtn\").hide();
            \$(this).closest(\"tr\").find(\".confirmBtn\").show();

        });

        \$('.confirmBtn').on('click',function(){
            let trObj = \$(this).closest(\"tr\");
            let ID = \$(this).closest(\"tr\").attr('id');
            \$.ajax({
                type:'POST',
                url:'/deleteauthor',
                dataType: \"json\",
                data:'action=delete&id='+ID,
                success:function(response){
                    if(response.status === 'ok'){
                        trObj.remove();
                    }else{
                        trObj.find(\".confirmBtn\").hide();
                        trObj.find(\".deleteBtn\").show();
                        alert(response.msg);
                    }
                }
            });
        });
    });
</script>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

    <div class=\"container \" xmlns:max-width=\"http://www.w3.org/1999/xhtml\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">Авторы</div>
                <div class=\"card-body\">
                    <div class=\"toolbar\">
                        <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Поиск имен..\">
                        <table  class=\"table table-striped table-bordered\" id=\"dataTable\">
                            <thead>
                                <tr>
                                    <th width=\"5%\">id</th>
                                    <th width=\"5%\">Количество книг</th>
                                    <th width=\"10%\">Автор</th>
                                    <th width=\"10%\">Редактирование</th>
                                </tr>
                            </thead>
                            <tbody id=\"userData\">
                                ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 186
            echo "                                    <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 186), "html", null, true);
            echo "\">
                                        <td>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo "</td>
                                        <td>
                                            <span class=\"books\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "books", [], "any", false, false, false, 189), "html", null, true);
            echo "</span>
                                            <input class=\"book input\" type=\"text\" name=\"books\"
                                                   value=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "books", [], "any", false, false, false, 191), "html", null, true);
            echo "\" style=\"display: none;\">
                                        </td>
                                        <td>
                                            <span class=\"editSpan autors\">";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "autors", [], "any", false, false, false, 194), "html", null, true);
            echo "</span>
                                            <input class=\"editInput autors form-control input-sm\" type=\"text\" name=\"autors\"
                                                   value=\"";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "autors", [], "any", false, false, false, 196), "html", null, true);
            echo "\" style=\"display: none;\">
                                        </td>
                                        <td>
                                            <div class=\"btn-group btn-group-sm\">
                                                <button type=\"button\" class=\"btn btn-sm btn-default editBtn\" style=\"float: none;\"><span class=\"glyphicon glyphicon-pencil\">Редактировать</span></button>
                                                <button type=\"button\" class=\"btn btn-sm btn-default deleteBtn\" style=\"float: none;\"><span class=\"glyphicon glyphicon-trash\">Удалить</span></button>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-sm btn-success saveBtn\" style=\"float: none; display: none;\">Сохранить</button>
                                            <button type=\"button\" class=\"btn btn-sm btn-danger confirmBtn\" style=\"float: none; display: none;\">Применить</button>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                            </tbody>
                        </table>
                    </div>
                    <a href=\"/formautors\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Добавить автора
                    </a>
                    <a href=\"/\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        К книгам
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "author/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 208,  259 => 196,  254 => 194,  248 => 191,  243 => 189,  238 => 187,  233 => 186,  229 => 185,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <title>width: 100%</title>
    <style>
        .btn {
            display: inline-block;
            box-sizing: border-box;
            padding: 0 25px;
            margin: 0 15px 15px 0;
            outline: none;
            border: 1px solid #fff;
            border-radius: 50px;
            height: 36px;
            line-height: 36px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            color: #444;
            background-color: #fff;
            box-shadow: 0 4px 6px rgb(65 132 144 / 10%), 0 1px 3px rgb(0 0 0 / 8%);
            cursor: pointer;
            user-select: none;
            appearance: none;
            touch-action: manipulation;
            vertical-align: top;
            transition: box-shadow 0.2s;
        }
        .btn:focus-visible {
            border: 1px solid #4c51f9;
            outline: none;
        }
        .btn:hover {
            transition: all 0.2s;
            box-shadow: 0 7px 14px rgb(65 132 144 / 10%), 0 3px 6px rgb(0 0 0 / 8%);
        }
        .btn:active {
            background-color: #808080;
        }
        .btn:disabled {
            background-color: #eee;
            border-color: #eee;
            color: #444;
            cursor: not-allowed;
        }
        .table {
            width: 100%;
            border: none;
            margin-bottom: 20px;
        }
        .table thead th {
            font-weight: bold;
            text-align: left;
            border: none;
            padding: 10px 15px;
            background: #d8d8d8;
            font-size: 14px;
        }
        .table thead tr th:first-child {
            border-radius: 8px 0 0 8px;
        }
        .table thead tr th:last-child {
            border-radius: 0 8px 8px 0;
        }
        .table tbody td {
            text-align: left;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            vertical-align: top;
        }
        .table tbody tr:nth-child(even){
            background: #f3f3f3;
        }
        .table tbody tr td:first-child {
            border-radius: 8px 0 0 8px;
        }
        .table tbody tr td:last-child {
            border-radius: 0 8px 8px 0;
        }
    </style>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
</head>
<body>

<script>

    \$(document).ready(function(){
        \$('.editBtn').on('click',function(){
            //hide edit span
            \$(this).closest(\"tr\").find(\".editSpan\").hide();

            //show edit input
            \$(this).closest(\"tr\").find(\".editInput\").show();

            //hide edit button
            \$(this).closest(\"tr\").find(\".editBtn\").hide();

            //show edit button
            \$(this).closest(\"tr\").find(\".saveBtn\").show();

        });

        \$('.saveBtn').on('click',function(){
            let trObj = \$(this).closest(\"tr\");
            let ID = \$(this).closest(\"tr\").attr('id');
            let inputData = \$(this).closest(\"tr\").find(\".editInput\").serialize();
            \$.ajax({
                type:'POST',
                url:'/updateAuthor',
                dataType: \"json\",
                data:'action=edit&id='+ID+'&'+inputData,
                success:function(response){
                    if(response.status === \"ok\"){
                        trObj.find(\".editInput.autors\").text(response.authors);
                        trObj.find(\".editSpan.autors\").text(response.authors);

                        \$('.books').each(function(index){
                            trObj.find('.books').text(response.books[index]);
                        });

                        trObj.find(\".editInput\").hide();
                        trObj.find(\".saveBtn\").hide();
                        trObj.find(\".editSpan\").show();
                        trObj.find(\".editBtn\").show();
                        // location.reload()

                    }else{
                        alert(response.msg);
                    }
                }
            });
        });

        \$('.deleteBtn').on('click',function(){
            \$(this).closest(\"tr\").find(\".deleteBtn\").hide();
            \$(this).closest(\"tr\").find(\".confirmBtn\").show();

        });

        \$('.confirmBtn').on('click',function(){
            let trObj = \$(this).closest(\"tr\");
            let ID = \$(this).closest(\"tr\").attr('id');
            \$.ajax({
                type:'POST',
                url:'/deleteauthor',
                dataType: \"json\",
                data:'action=delete&id='+ID,
                success:function(response){
                    if(response.status === 'ok'){
                        trObj.remove();
                    }else{
                        trObj.find(\".confirmBtn\").hide();
                        trObj.find(\".deleteBtn\").show();
                        alert(response.msg);
                    }
                }
            });
        });
    });
</script>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>

    <div class=\"container \" xmlns:max-width=\"http://www.w3.org/1999/xhtml\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">Авторы</div>
                <div class=\"card-body\">
                    <div class=\"toolbar\">
                        <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Поиск имен..\">
                        <table  class=\"table table-striped table-bordered\" id=\"dataTable\">
                            <thead>
                                <tr>
                                    <th width=\"5%\">id</th>
                                    <th width=\"5%\">Количество книг</th>
                                    <th width=\"10%\">Автор</th>
                                    <th width=\"10%\">Редактирование</th>
                                </tr>
                            </thead>
                            <tbody id=\"userData\">
                                {% for author in authors %}
                                    <tr id=\"{{ author.id}}\">
                                        <td>{{ author.id}}</td>
                                        <td>
                                            <span class=\"books\">{{ author.books}}</span>
                                            <input class=\"book input\" type=\"text\" name=\"books\"
                                                   value=\"{{ author.books}}\" style=\"display: none;\">
                                        </td>
                                        <td>
                                            <span class=\"editSpan autors\">{{ author.autors}}</span>
                                            <input class=\"editInput autors form-control input-sm\" type=\"text\" name=\"autors\"
                                                   value=\"{{ author.autors}}\" style=\"display: none;\">
                                        </td>
                                        <td>
                                            <div class=\"btn-group btn-group-sm\">
                                                <button type=\"button\" class=\"btn btn-sm btn-default editBtn\" style=\"float: none;\"><span class=\"glyphicon glyphicon-pencil\">Редактировать</span></button>
                                                <button type=\"button\" class=\"btn btn-sm btn-default deleteBtn\" style=\"float: none;\"><span class=\"glyphicon glyphicon-trash\">Удалить</span></button>
                                            </div>
                                            <button type=\"button\" class=\"btn btn-sm btn-success saveBtn\" style=\"float: none; display: none;\">Сохранить</button>
                                            <button type=\"button\" class=\"btn btn-sm btn-danger confirmBtn\" style=\"float: none; display: none;\">Применить</button>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <a href=\"/formautors\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Добавить автора
                    </a>
                    <a href=\"/\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        К книгам
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
", "author/index.html.twig", "W:\\domains\\Taptima_Backend\\templates\\author\\index.html.twig");
    }
}
