@extends('base')

@section('main')
<h3 class="display-5 feature-title">Import du BL</h3> 
<div class="row upload-file-form" style="margin-left: 200px;">
  <form method="post" action="{{ url('/uploadfile') }}" enctype="multipart/form-data">
    @csrf
    <div style="width: 80%;">
      <select name="suppliers" class="custom-select">
        <option selected>Choisir le fournisseur</option>
        @foreach($suppliers as $supplier)
          <option value="{{ $supplier->name }}">{{ $supplier->name }}</option>
          @endforeach
      </select>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="blfile" name="blfile">
      <label class="custom-file-label" for="customfile">Choisir le fichier BL</label>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Importer</button>
  </form>
</div>

<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
@endsection