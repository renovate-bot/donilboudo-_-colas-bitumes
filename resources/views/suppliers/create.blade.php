@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="display-4 feature-title">Nouveau fournisseur</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('suppliers.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="adress">Adresse:</label>
              <input type="text" class="form-control" name="address"/>
          </div>

          <div class="form-group">
              <label for="phone">Téléphone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>           
          <button type="submit" class="btn btn-danger">Annuler</button>
          <button type="submit" class="btn btn-primary">Créer</button>
      </form>
  </div>
</div>
</div>
@endsection