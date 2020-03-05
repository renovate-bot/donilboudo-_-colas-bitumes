@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h4 class="display-4 feature-title">Mise à jour du fournisseur</h4>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('suppliers.update', $supplier->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Nom:</label>
                <input type="text" class="form-control" name="name" value={{ $supplier->name }} />
            </div>

            <div class="form-group">
                <label for="address">Adresse:</label>
                <input type="text" class="form-control" name="address" value={{ $supplier->address }} />
            </div>

            <div class="form-group">
                <label for="phone">Téléphone:</label>
                <input type="text" class="form-control" name="phone" value={{ $supplier->phone }} />
            </div>
            <button class="btn btn-danger">Annuler</button>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</div>
@endsection