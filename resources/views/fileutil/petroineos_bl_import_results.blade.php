@extends('base')

@section('main')
<h3 class="display-5 feature-title">Fournisseur: {{ $supplier}}</h3>

<!-- @if(!is_null($results) && sizeof($results) > 0) -->
  <div class="bl_import_results">
    <h3>Résultat de l'import</h3>
    <ul class="list-group">
      @foreach($results as $result)
        <li class="list-group-item">
          <h6>OT: {{ $result->ot }}</h6>
          <div class="row">
            <div class="col-sm bl_import_results_small_text">
              N° de DSPC: {{ $result->dspc_number }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Enlèvement le: {{ $result->pickup_on }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Date Douane: {{ $result->customs_date }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Produit: {{ $result->product }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Référence commande: {{ $result->order_ref }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Poids Net (kg): {{ $result->net_weight }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              OT SAP: {{ $result->ot_sap }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Repreneur: {{ $result->buyer }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Déclarant: {{ $result->declaring }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Facturé: {{ $result->billed }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Date SAP: {{ $result->sap_date }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Date CPDP: {{ $result->cpdp_date }}
            </div>
            <div class="col-sm bl_import_results_small_text">
              Destinataire: {{ $result->recipient }}
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