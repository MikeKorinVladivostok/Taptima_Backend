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

/* crud.html */
class __TwigTemplate_931bee2e10b0a699e5b9f25a891b5ba91bfe8a30baf85cad70aeb3ba240283b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <title>width: 100%</title>
    <style>
        #myInput {
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #dataTable {
            border-collapse: collapse; /* Свернуть границы */
            width: 100%; /* Полная ширина */
            border: 1px solid #ddd; /* Добавить серую границу */
            font-size: 18px; /* Увеличить размер шрифта */
        }

        #dataTable th, #myTable td {
            text-align: left; /* Выравнивание текста по левому краю */
            padding: 12px; /* Добавить отступ */
        }

        #dataTable tr {
            /* Добавить нижнюю границу для всех строк таблицы */
            border-bottom: 1px solid #ddd;
        }

        #dataTable tr.header, #myTable tr:hover {
            /* Добавить серый цвет фона для заголовка таблицы и при наведении курсора мыши */
            background-color: #f1f1f1;
        }
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

</head>
<body>
<!--<link  rel = \"stylesheet\"  href = \"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" >-->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script>

    function findText(inputText,classN) {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(inputText);
        filter = input.value.toUpperCase();
        table = document.getElementById(\"dataTable\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 1; i < tr.length; i++) {
            td = tr[i].querySelector(classN);
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }


    \$('body').on('click', '.toolbar-img', function(){
        var url = prompt('Введите адрес изображения', 'https://sun9-47.userapi.com/c11145/u17421543/-14/m_0762c474.jpg');

        document.execCommand('delete', false, null);
        document.execCommand('selectAll', false, '.toolbar-img' );

        if(url == null) {
            document.execCommand('undo', false, null);
        }else{
            document.execCommand('insertImage', false, url);
        }

        return false;
    });

    \$(document).ready(function(){
        \$('.editBtn').on('click',function(){
            //hide edit span
            \$(this).closest(\"tr\").find(\".editSpan:not('.photo')\").hide();

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
            let inputData = \$(this).closest(\"tr\").find(\".editInput\");
            let files = this.files;

            let data = new FormData();
            data.append('input_file_name', \$(this).closest(\"tr\").find('input[type=file]')[0].files[0]);
            data.append('title', \$(this).closest(\"tr\").find('input[name=title]').val());
            data.append('name', \$(this).closest(\"tr\").find('input[name=name]').val());
            data.append('author', \$(this).closest(\"tr\").find('select[name=author]').val());
            data.append('year', \$(this).closest(\"tr\").find('input[name=year]').val());
            data.append('id', ID);

            \$.ajax({
                type:'POST',
                url:'/update',
                dataType: \"json\",
                data: data,
                cache: false,
                //data:'action=edit&id='+ID+'&'+inputData,
                processData: false,
                contentType: false,
                success:function(response){
                    console.log(response);
                    if(response.status === 'ok'){
                        trObj.find(\".editSpan.name\").text(response.data.name);
                        trObj.find(\".editSpan.author\").text(response.data.author);
                        trObj.find(\".editSpan.title\").text(response.data.title);
                        trObj.find(\".editSpan.year\").text(response.data.year);

                        trObj.find(\".editSpan.image\").attr('src', response.data.image_path);

                        trObj.find(\".editInput.name\").text(response.data.name);
                        //trObj.find(\".editInput.author\").val(response.data.author).change();
                        trObj.find(\".editInput.author option[value='\" + response.data.author + \"']\").attr('selected', 'selected');
                        trObj.find(\".editInput.title\").text(response.data.title);
                        trObj.find(\".editInput.year\").text(response.data.year);



                        trObj.find(\".editInput\").hide();
                        trObj.find(\".saveBtn\").hide();
                        trObj.find(\".editSpan\").show();
                        trObj.find(\".editBtn\").show();
                    }else{
                        alert(response.msg);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

        \$('.deleteBtn').on('click',function(){
            //hide delete button
            \$(this).closest(\"tr\").find(\".deleteBtn\").hide();

            //show confirm button
            \$(this).closest(\"tr\").find(\".confirmBtn\").show();

        });

        \$('.confirmBtn').on('click',function(){
            let trObj = \$(this).closest(\"tr\");
            let ID = \$(this).closest(\"tr\").attr('id');
            \$.ajax({
                type:'POST',
                url:'/deletebook',
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

<div class=\"container \" xmlns:max-width=\"http://www.w3.org/1999/xhtml\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">Библиотека</div>
                <div class=\"card-body\">
                    <div class=\"toolbar\">
                        <table  class=\"table table-striped table-bordered\" id=\"dataTable\">
                            <thead>
                                <tr>
                                    <th width=\"5%\"><input type=\"text\" id=\"myInput0\" onkeyup=\"findText('myInput0','.name')\" placeholder=\"Поиск по названию\"></th>
                                    <th width=\"10%\"><input type=\"text\" id=\"myInput1\" onkeyup=\"findText('myInput1','.author')\" placeholder=\"Поиск по автору\"></th>
                                    <th width=\"10%\"><input type=\"text\" id=\"myInput2\" onkeyup=\"findText('myInput2','.title')\" placeholder=\"Поиск по описаню\"></th>
                                    <th width=\"30%\"></th>
                                    <th width=\"15%\" class=\"year\" >
                                        <input type=\"text\" id=\"myInput3\" onkeyup=\"findText('myInput3','.year')\" placeholder=\"Поиск по году\"></th>
                                    <th width=\"15%\"></th>
                                </tr>
                                    <tr class=\"header\">
                                        <th width=\"5%\">Название</th>
                                        <th width=\"10%\">Автор</th>
                                        <th width=\"10%\">Описание</th>
                                        <th width=\"30%\">Обложка</th>
                                        <th width=\"15%\" class=\"year\" >
                                        Год публикации</th>
                                        <th width=\"15%\">Действия</th>
                                </tr>

                                </thead>
                                <tbody id=\"userData\">
                                ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 291, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arr"]) {
            // line 292
            echo "                                <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "id", [], "any", false, false, false, 292), "html", null, true);
            echo "\">
                                    <td>
                                        <span class=\"editSpan name\">";
            // line 294
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "name", [], "any", false, false, false, 294), "html", null, true);
            echo "</span>
                                        <input class=\"editInput name form-control input-sm\" type=\"text\" name=\"name\"
                                               value=\"";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "name", [], "any", false, false, false, 296), "html", null, true);
            echo "\" style=\"display: none;\">
                                    </td>
                                    <td>
                                        <span class=\"editSpan author\">";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "author_name", [], "any", false, false, false, 299), "html", null, true);
            echo "</span>
                                        <select class=\"editInput author form-control input-sm\" type=\"text\" name=\"author\"
                                                style=\"display: none;\">
                                            ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 302, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 303
                echo "                                                <option ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 303), twig_get_attribute($this->env, $this->source, $context["arr"], "author", [], "any", false, false, false, 303)))) ? ("selected") : (null));
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 303), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "autors", [], "any", false, false, false, 303), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                                        </select>
                                    </td>
                                    <td>
                                        <span class=\"editSpan title\">";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "title", [], "any", false, false, false, 308), "html", null, true);
            echo "</span>
                                        <input class=\"editInput title form-control input-sm\" type=\"text\" name=\"title\"
                                               value=\"";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "title", [], "any", false, false, false, 310), "html", null, true);
            echo "\" style=\"display: none;\">
                                    </td>
                                    <td><img src=\"";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "image", [], "any", false, false, false, 312), "html", null, true);
            echo "\" alt=\"\" width=\"135\" height=\"135\" class=\"photo editSpan image\">
                                        <input type=\"file\" id=\"js-file\" multiple=\"multiple\" class=\"editInput image form-control input-sm\" name=\"image\"
                                               value=\"\" style=\"display: none;\">
                                    </td>
                                    <td>
                                        <span class=\"editSpan year\">";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "year", [], "any", false, false, false, 317), "html", null, true);
            echo "</span>
                                        <label>
                                            <input class=\"editInput year form-control input-sm\" type=\"text\" name=\"year\"
                                                   value=\"";
            // line 320
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arr"], "year", [], "any", false, false, false, 320), "html", null, true);
            echo "\" style=\"display: none;\">
                                        </label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                            </tbody>
                        </table>
                    </div>
                    <a href=\"/form\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Добавить книгу
                    </a>
                    <a href=\"/updateevent\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        К авторам
                    </a>
                    <a href=\"/formcoauthor\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Добавить соавтора
                    </a>
                    <a href=\"/getcoauthors\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Список соавторов
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "crud.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 333,  408 => 320,  402 => 317,  394 => 312,  389 => 310,  384 => 308,  379 => 305,  366 => 303,  362 => 302,  356 => 299,  350 => 296,  345 => 294,  339 => 292,  335 => 291,  43 => 1,);
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
        #myInput {
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #dataTable {
            border-collapse: collapse; /* Свернуть границы */
            width: 100%; /* Полная ширина */
            border: 1px solid #ddd; /* Добавить серую границу */
            font-size: 18px; /* Увеличить размер шрифта */
        }

        #dataTable th, #myTable td {
            text-align: left; /* Выравнивание текста по левому краю */
            padding: 12px; /* Добавить отступ */
        }

        #dataTable tr {
            /* Добавить нижнюю границу для всех строк таблицы */
            border-bottom: 1px solid #ddd;
        }

        #dataTable tr.header, #myTable tr:hover {
            /* Добавить серый цвет фона для заголовка таблицы и при наведении курсора мыши */
            background-color: #f1f1f1;
        }
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

</head>
<body>
<!--<link  rel = \"stylesheet\"  href = \"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" >-->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
<script>

    function findText(inputText,classN) {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(inputText);
        filter = input.value.toUpperCase();
        table = document.getElementById(\"dataTable\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 1; i < tr.length; i++) {
            td = tr[i].querySelector(classN);
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }


    \$('body').on('click', '.toolbar-img', function(){
        var url = prompt('Введите адрес изображения', 'https://sun9-47.userapi.com/c11145/u17421543/-14/m_0762c474.jpg');

        document.execCommand('delete', false, null);
        document.execCommand('selectAll', false, '.toolbar-img' );

        if(url == null) {
            document.execCommand('undo', false, null);
        }else{
            document.execCommand('insertImage', false, url);
        }

        return false;
    });

    \$(document).ready(function(){
        \$('.editBtn').on('click',function(){
            //hide edit span
            \$(this).closest(\"tr\").find(\".editSpan:not('.photo')\").hide();

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
            let inputData = \$(this).closest(\"tr\").find(\".editInput\");
            let files = this.files;

            let data = new FormData();
            data.append('input_file_name', \$(this).closest(\"tr\").find('input[type=file]')[0].files[0]);
            data.append('title', \$(this).closest(\"tr\").find('input[name=title]').val());
            data.append('name', \$(this).closest(\"tr\").find('input[name=name]').val());
            data.append('author', \$(this).closest(\"tr\").find('select[name=author]').val());
            data.append('year', \$(this).closest(\"tr\").find('input[name=year]').val());
            data.append('id', ID);

            \$.ajax({
                type:'POST',
                url:'/update',
                dataType: \"json\",
                data: data,
                cache: false,
                //data:'action=edit&id='+ID+'&'+inputData,
                processData: false,
                contentType: false,
                success:function(response){
                    console.log(response);
                    if(response.status === 'ok'){
                        trObj.find(\".editSpan.name\").text(response.data.name);
                        trObj.find(\".editSpan.author\").text(response.data.author);
                        trObj.find(\".editSpan.title\").text(response.data.title);
                        trObj.find(\".editSpan.year\").text(response.data.year);

                        trObj.find(\".editSpan.image\").attr('src', response.data.image_path);

                        trObj.find(\".editInput.name\").text(response.data.name);
                        //trObj.find(\".editInput.author\").val(response.data.author).change();
                        trObj.find(\".editInput.author option[value='\" + response.data.author + \"']\").attr('selected', 'selected');
                        trObj.find(\".editInput.title\").text(response.data.title);
                        trObj.find(\".editInput.year\").text(response.data.year);



                        trObj.find(\".editInput\").hide();
                        trObj.find(\".saveBtn\").hide();
                        trObj.find(\".editSpan\").show();
                        trObj.find(\".editBtn\").show();
                    }else{
                        alert(response.msg);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });

        \$('.deleteBtn').on('click',function(){
            //hide delete button
            \$(this).closest(\"tr\").find(\".deleteBtn\").hide();

            //show confirm button
            \$(this).closest(\"tr\").find(\".confirmBtn\").show();

        });

        \$('.confirmBtn').on('click',function(){
            let trObj = \$(this).closest(\"tr\");
            let ID = \$(this).closest(\"tr\").attr('id');
            \$.ajax({
                type:'POST',
                url:'/deletebook',
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

<div class=\"container \" xmlns:max-width=\"http://www.w3.org/1999/xhtml\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">Библиотека</div>
                <div class=\"card-body\">
                    <div class=\"toolbar\">
                        <table  class=\"table table-striped table-bordered\" id=\"dataTable\">
                            <thead>
                                <tr>
                                    <th width=\"5%\"><input type=\"text\" id=\"myInput0\" onkeyup=\"findText('myInput0','.name')\" placeholder=\"Поиск по названию\"></th>
                                    <th width=\"10%\"><input type=\"text\" id=\"myInput1\" onkeyup=\"findText('myInput1','.author')\" placeholder=\"Поиск по автору\"></th>
                                    <th width=\"10%\"><input type=\"text\" id=\"myInput2\" onkeyup=\"findText('myInput2','.title')\" placeholder=\"Поиск по описаню\"></th>
                                    <th width=\"30%\"></th>
                                    <th width=\"15%\" class=\"year\" >
                                        <input type=\"text\" id=\"myInput3\" onkeyup=\"findText('myInput3','.year')\" placeholder=\"Поиск по году\"></th>
                                    <th width=\"15%\"></th>
                                </tr>
                                    <tr class=\"header\">
                                        <th width=\"5%\">Название</th>
                                        <th width=\"10%\">Автор</th>
                                        <th width=\"10%\">Описание</th>
                                        <th width=\"30%\">Обложка</th>
                                        <th width=\"15%\" class=\"year\" >
                                        Год публикации</th>
                                        <th width=\"15%\">Действия</th>
                                </tr>

                                </thead>
                                <tbody id=\"userData\">
                                {% for arr in array %}
                                <tr id=\"{{ arr.id}}\">
                                    <td>
                                        <span class=\"editSpan name\">{{ arr.name}}</span>
                                        <input class=\"editInput name form-control input-sm\" type=\"text\" name=\"name\"
                                               value=\"{{ arr.name}}\" style=\"display: none;\">
                                    </td>
                                    <td>
                                        <span class=\"editSpan author\">{{ arr.author_name}}</span>
                                        <select class=\"editInput author form-control input-sm\" type=\"text\" name=\"author\"
                                                style=\"display: none;\">
                                            {% for author in authors %}
                                                <option {{ author.id == arr.author ? 'selected' : NULL}} value=\"{{ author.id}}\">{{author.autors}}</option>
                                            {% endfor %}
                                        </select>
                                    </td>
                                    <td>
                                        <span class=\"editSpan title\">{{ arr.title}}</span>
                                        <input class=\"editInput title form-control input-sm\" type=\"text\" name=\"title\"
                                               value=\"{{ arr.title}}\" style=\"display: none;\">
                                    </td>
                                    <td><img src=\"{{arr.image}}\" alt=\"\" width=\"135\" height=\"135\" class=\"photo editSpan image\">
                                        <input type=\"file\" id=\"js-file\" multiple=\"multiple\" class=\"editInput image form-control input-sm\" name=\"image\"
                                               value=\"\" style=\"display: none;\">
                                    </td>
                                    <td>
                                        <span class=\"editSpan year\">{{ arr.year}}</span>
                                        <label>
                                            <input class=\"editInput year form-control input-sm\" type=\"text\" name=\"year\"
                                                   value=\"{{ arr.year}}\" style=\"display: none;\">
                                        </label>
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
                    <a href=\"/form\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Добавить книгу
                    </a>
                    <a href=\"/updateevent\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        К авторам
                    </a>
                    <a href=\"/formcoauthor\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Добавить соавтора
                    </a>
                    <a href=\"/getcoauthors\" class=\"mb-1 btn btn-primary\" type=\"button\">
                        Список соавторов
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>", "crud.html", "W:\\domains\\Taptima_Backend\\templates\\crud.html");
    }
}
