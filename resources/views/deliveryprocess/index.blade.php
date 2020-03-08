@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <div class="row upload-file-form">
                <form method="post" action="{{ url('/uploadfile') }}" enctype="multipart/form-data">
                @csrf
                {{-- <div style="width: 80%;">
                    <select name="suppliers" class="custom-select">
                    <option selected>Choisir le fournisseur</option>
                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->name }}">{{ $supplier->name }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="blfile" name="blfile">
                    <label class="custom-file-label" for="customfile">Browse file</label>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Import</button>
                </form>
            </div>  
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-3">
            <select name="suppliers" class="custom-select">
                <option selected>Suppliers</option>
            </select>
        </div>
        <div class="col-sm-3">
            <select name="suppliers" class="custom-select">
                <option selected>Refinery</option>
            </select>
        </div>
        <div class="col-sm-3">
            <select name="suppliers" class="custom-select">
                <option selected>Process Type</option>
            </select>
        </div>
        <div class="col-sm-3">
            <select name="suppliers" class="custom-select">
                <option selected>Account Period</option>
            </select>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-3">
            <select name="suppliers" class="custom-select">
                <option selected>ERT</option>
            </select>
        </div>
        <div class="col-sm-3">
            <select name="suppliers" class="custom-select">
                <option selected>Installations</option>
            </select>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-warning">Refresh</button>
        </div>
    </div>

    <div class="row" style="margin-top: 60px;">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success">Export All IRI</button>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success">Export Suppliers</button>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-success">Export Suppliers Include</button>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success">Export Transporter</button>
        </div>
    </div>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var validExts = new Array(".xlsx", ".xls", ".csv");
            var fileExt = $(this).val();
            fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
            if (validExts.indexOf(fileExt) < 0) {
                alert("Invalid file selected, valid files are of " + validExts.toString() + " types.");
                return false;
            } else {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                return true;
            }
            
        });
    </script>
@endsection