<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </head>
    <body>
        @foreach($characteristics as $characteristic)
        <div class="row">
            <div class="col-md-1">
                {{ $characteristic->id }}
            </div>
            <div class="col-md-2">
                {{ $characteristic->name }}
            </div>
            <div class="col-md-2">
                {{ $characteristic->faction_name }}
            </div>
            <div class="col-md-2">
                {{ $characteristic->augury_name }}
            </div>
            <div class="col-md-2">
                {{ $characteristic->race_name }}
            </div>
        </div>
        @endforeach
    </body>
</html>
