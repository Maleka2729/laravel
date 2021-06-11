@extends('layouts.base')

@section('title')
<h1>reservation</h1>
@endsection

@section('contents')
<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Prénom</label>
            <input type="name" class="form-control" id="inputName">
        </div>
        <div class="form-group col-md-6">
            <label for="inputLastName">Nom</label>
            <input type="lastname" class="form-control" id="inputLastName">
        </div>
    </div>
    <div class="form-row">

        <div class="form-group col-md-12">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
    </div>
</form> 

@endsection
