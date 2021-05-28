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
    echo "<td>{$dep->repository}</td>";
    echo "<td>{$dep->contributor}</td>";
    echo "<td>{$dep->commits}</td>";
    echo "</tr>";
}
echo "</table>";
?>
@endsection