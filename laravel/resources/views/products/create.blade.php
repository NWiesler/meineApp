@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left my-4">
            <h2>Lebensmittel hinzufügen</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary mb-4" href="{{ route('products.index') }}"> zurück zu meinem Kühlschrank</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ups!</strong> Die ist bei der Eingabe ein Fehler unterlaufen.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Beschreibung</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Beschreibung"></textarea>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>MHD</strong>
                <textarea class="form-control" style="height:150px" name="MHD" placeholder="Verfallsdatum"></textarea>
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Hinzufügen</button>
        </div>
    </div>

</form>
@endsection
