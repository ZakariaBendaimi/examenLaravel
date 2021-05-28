@extends('canvas')
@section('title','Gestion de commits')
@section('header')
<h1>WEB II - Gestion des commits</h1>
@endsection
@section('content')
<?php
echo "<table id='table' border='1'><tr> <th>Nom du dépot</th>  <th>Nom de l'utilisateur</th><th>Nombre de commits</th></tr>";

foreach ($depots as $dep) {
    echo "<tr>";
    echo "<td class='classe' id='$dep->id'>{$dep->repository}</td>";
    echo "<td>{$dep->contributor}</td>";
    echo "<td>{$dep->commits}</td>";
    echo "</tr>";
}
echo "</table>";
echo "<div id='container'>
<h1> Nom du dépot</h1>
<p id='nomDepot'> </p>
<h1> Nom de l'utilisateur</h1>
<p id='nomUser'> </p>
<h1> Liste de commits</h1>
<ul id='liste'></ul>
</div>";
?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $("#container").hide();
})
$(".classe").on('click', function() {
    $("#nomDepot").empty();
    $("#nomUser").empty();
    $("#liste").empty();
    $.getJSON("/api/depots/" + $(this).attr('id'), function(data, status) {
        $("#nomDepot").text(data[0]['repository']);
        $("#nomUser").text(data[0]['contributor']);
        for (let val in data[1]) {
            let li = $("<li>").text("[" + data[1][val]['date'] + "]" + data[1][val]['message']);
            $("#liste").append(li)
        }
    });
    $("#container").show();
});
</script>
@endsection