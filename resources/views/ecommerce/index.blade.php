@extends('layouts.app')


@section('stylesheet')
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@endsection

@section('content')

<section class="pt-5 pb-9">
    
        <div class="container">
          <button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span class="fa-solid fa-filter me-2"></span>Filter</button>
          <div class="row">
            
            @include('component.ecommerce.filters')    
            
            
            <div class="col-lg-9 col-xxl-10">
              <div class="row gx-3 gy-6 mb-8">


            @foreach ($produits as $produit )
              
              <div class="col-12 col-sm-6 col-md-4 col-xxl-2" onclick="showModal({{$produit->id}})"">
                @include('flash::message')
                <div id="product-container" class="product-card-container h-100"  >
                      <div class="position-relative text-decoration-none product-card h-100">
                        <div class="d-flex flex-column justify-content-between h-100">
                          <div>
                            <div class="border border-1 rounded-3 position-relative mb-3">
                              <button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span>
                              </button><img class="img-fluid" src="{{ '/uploads/produits/' . $produit->image }}" alt="" />
                            </div><a class="stretched-link text-decoration-none">
                              <h6 class="mb-2 lh-sm line-clamp-3 product-name">{{$produit->designation}}</h6>
                            </a>
                            <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">
                                ({{$produit->quantite}} disponible)</span>
                            </p>
                          </div>
                          <div>
                            <p class="fs--1 text-700 mb-2">{{$produit->categorie->name}}</p>
                            <p class="fs--1 text-700 mb-2"> Matter: {{$produit->matiere->name}}</p>
                            <div class="d-flex align-items-center mb-1">
                              <p class="me-2 text-900 text-decoration-line-through mb-0">${{$produit->prix_vente_gramme}}</p>
                              <h3 class="text-1100 mb-0">${{$produit->remise_max}}</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @include('component.admin.modals.buyingConfirmModal')
                  @endforeach
                  
              
             </div>

              
              <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                                          {{ $produits->links('pagination::bootstrap-4') }}

                    </ul>
  
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>

@endsection

@section('script')


<script>
    $(document).ready(function() {
    $('.select').select2();
  });
    var producId;
    function showModal(id) {
    productId=id;
    $(`#modal${productId}`).modal('show');
  }
  
  
  function cancel(){
      $(`#modal${productId}`).modal('hide');

  
  }

  

 
</script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
@endsection
