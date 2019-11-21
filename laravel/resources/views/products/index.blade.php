@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left my-4 text-info">
                    <h1>{{ Auth::user()->name }}'s fridge</h1>
                </div>
                <div class="pull-right mb-4">
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Lebensmittel hinzufügen</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Nr.</th>
                <th>Produktname</th>
                <th>Beschreibung</th>
                <th>Mindestens haltbar bis</th>
                <th width="300px">Aktion</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>{{ $product->MHD }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Details</a>

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Bearbeiten</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Löschen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $products->links() !!}

    </div>

@endsection