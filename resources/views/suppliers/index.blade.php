@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h3 class="display-4 feature-title">Fournisseurs</h3>   
    
    <div>
        <a style="margin: 19px;" href="{{ route('suppliers.create')}}" class="btn btn-primary">Nouveau fournisseur</a>
    </div>  
    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Adresse</td>
          <td>Téléphone</td>
          <td colspan = 3>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($suppliers as $supplier)
          <tr>
              <td>{{$supplier->id}}</td>
              <td>{{$supplier->name}}</td>
              <td>{{$supplier->address}}</td>
              <td>{{$supplier->phone}}</td>
              <td>
                  <a href="{{ route('suppliers.edit',$supplier->id)}}" class="btn btn-primary">Modifier</a>
              </td>
              <td>
                  <form action="{{ route('suppliers.destroy', $supplier->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                  </form>
              </td>
          </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection