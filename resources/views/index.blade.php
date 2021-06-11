@extends('layouts.base')

@section('title')
<h1>hello</h1>
@endsection

@section('contents')
<h2 class='item'>Links and buttons</h2>

<div class="row">
    <div class="input-group col-md-6" style="margin-left: auto; margin-right: auto;">
        <span class="input-group-text" id="basic-addon1">Medecin</span>
        <input type="text" class="form-control" placeholder="Rechercher un médecin" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group col-md-6">
        <span class="input-group-text" id="basic-addon1">Localisation</span>
        <input type="text" class="form-control" placeholder="Rechercher une localisation" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
</div>
@endsection
