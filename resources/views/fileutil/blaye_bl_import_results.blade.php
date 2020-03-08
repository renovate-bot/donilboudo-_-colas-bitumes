@extends('base')

@section('main')
<h3 class="display-5 feature-title">Fournisseur: {{ $supplier}}</h3>

<!-- @if(!is_null($results) && sizeof($results) > 0) -->
  <div class="bl_import_results">
    <h3>Résultat de l'import</h3>
    <ul class="list-group">
      @foreach($results as $result)
        <li class="list-group-item">
          <h6>Numéro de commande: {{ $result->command_number }}</h6>
          <div class="row">
            <div class="col-sm bl_import_results_small_text">
              Jour du BL: {{ $result->bl_day }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Code chantier comptable: {{ $result->accounting_site_code }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Code produit B.L.: {{ $result->bl_product_code }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Code chantier B.L.: {{ $result->bl_site_code }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Libellé client livraison: {{ $result->customer_delivery_label }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Quantité: {{ $result->quantity }}
            </div>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
<!-- @endif -->

<!-- <script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  </script> -->
@endsection