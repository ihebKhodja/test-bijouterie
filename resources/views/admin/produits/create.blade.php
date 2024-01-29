@extends('layouts.admin')


  @section('stylesheet')
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link href="../../../vendors/choices/choices.min.css" rel="stylesheet">
  <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
 
  @endsection

@section('content')



<div class="content">
       
        <form class="mb-9" method="post" action="{{route('admin.produits.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Add a product</h2>
              <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5>
            </div>
              @include('flash::message')
            <div class="col-auto">
              @can('create product')
                 <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish product</button>
              @endcan

            </div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Product Title</h4>
            

              <input class="form-control mbc-5" type="text" name="reference" placeholder="Write title here..." />
              <div class="my-6">
                <h4 class="mb-3"> Product Description</h4>
                <textarea class="form-control mbc-10" type="text" name="designation" placeholder="Write Description here..." ></textarea>
                  
              </div>
              <h4 class="my-3">Display images</h4>

                <div class="form-group">
                        <label for="name">Image</label>
                        <input type="file" name="image" class="form-control input-sm">
                </div>
             
              <h4 class="my-3">Inventory</h4>
              <div class="row g-0 border-top border-bottom border-300">
                <div class="col-sm-4">
                  <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical">
                    
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true"> <span class="me-sm-2 fs-4 nav-icons" data-feather="tag"></span><span class="d-none d-sm-inline">Pricing</span></a>
                    <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span><span class="d-none d-sm-inline">Restock</span></a>
                         </div>
                </div>
                <div class="col-sm-8">
                  <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                      <h4 class="mb-3 d-sm-none">Pricing</h4>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Regular price by gramme</h5>
                          <input class="form-control"  name="prix_achat_gramme" type="number" placeholder="$$$" />
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Sale price by gramme</h5>
                          <input class="form-control" name="prix_vente_gramme" type="number" placeholder="$$$" />
                        </div>
                         <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Maximum Discount</h5>
                          <input class="form-control"  name="remise_max" type="number" placeholder="$$$" />
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Weight in gramme</h5>
                          <input class="form-control"  name="poids_gramme" type="number" placeholder="g" />
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-1000">Add to Stock</h5>
                        <div class="row g-3 flex-1 mb-4">
                          <div class="col-sm-7">
                            <input class="form-control" name="quantite" type="number" min="1" placeholder="Quantity" />
                          </div>
                          <div class="col-sm">
                            <button class="btn btn-primary" type="button"><span class="fa-solid fa-check me-1 fs--2"></span>Confirm</button>
                          </div>
                        </div>
                   
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="row g-2">
                <div class="col-12 col-xl-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Organize</h4>
                      <div class="row g-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-1000 me-2">Category</h5><a class="fw-bold fs--1" href="{{route('admin.categories.create')}}">Add new category</a>
                            </div>
                            <select name="categorie_id" class="select form-select mb-3" aria-label="category">
                                <option value="">Select a Category</option> 
                              @foreach ($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->name}}</option>  
                              @endforeach
                           
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-1000 me-2">Matter</h5><a class="fw-bold fs--1" href="{{route('admin.matieres.create')}}">Add new matter</a>
                            </div>
                            <select name="matiere_id" class="select form-select mb-3" aria-label="matiere">
                                 <option value="">Select a Matter</option> 
                              @foreach ($matieres as $matiere)
                                <option value="{{$matiere->id}}">{{$matiere->name}}</option>  
                              @endforeach
                              
                            </select>
                          </div>
                        </div>
                     
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </form>

        @include('component.admin.footer')

      </div>

@endsection





@section('script')
<script>
    $(document).ready(function() {
    $('.select').select2();
});
</script>

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
  <script src="../../../vendors/tinymce/tinymce.min.js"></script>
  <script src="../../../vendors/dropzone/dropzone.min.js"></script>
  <script src="../../../vendors/choices/choices.min.js"></script>
  <script src="../../../assets/js/phoenix.js"></script>
  @endsection