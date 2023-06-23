@extends('layouts.base')

@section('content')
<section class="content-main">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">All Speakers</h2>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">
                <div class="col">
                    <div class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/imgs/items/1.jpg" alt="Product"> </a>
                        <div class="info-wrap">
                            <div class="price mb-2">$179.00</div> <!-- price.// -->
                            <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                <i class="material-icons md-edit"></i> Edit
                            </a>
                            <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                <i class="material-icons md-delete_forever"></i> Delete
                            </a>
                        </div>
                    </div> <!-- card-product  end// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card-body end// -->
    </div> <!-- card end// -->
    
</section>
@endsection
