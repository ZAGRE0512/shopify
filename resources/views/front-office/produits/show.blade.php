<x-master-layout>
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="justify-content-center">
                    <h2 class="text-center"> Details produits</h2>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="co-12 col-sm-12 col-md-12">
                <div class="form-group ">
                    <strong>Designation:</strong>
                    {{ $produit->designation }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $produit->description }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prix:</strong>
                    {{ $produit->prix }}
                </div>
            </div>

            <div class="pull-right justify-content-end">
                <a class="btn btn-primary btn-sm" href="{{ route('produits.index') }}"> Back</a>
            </div>
        </div>
</x-master-layout>