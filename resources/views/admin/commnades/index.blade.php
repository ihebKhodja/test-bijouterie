@extends('layouts.admin')

@section('stylesheet')

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
<link href="../../../vendors/choices/choices.min.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


@endsection

@section('content')

<div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
          </ol>
        </nav>

        <div class="mb-9">
          <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Orders</h2>
            </div>
          </div>
          <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            
          </ul>
          <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="row g-3">
                <div class="col-auto">
                  <div class="search-box">
                   
                  </div>
                </div>
                <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                  <div class="btn-group position-static" role="group">
                    <div class="btn-group position-static text-nowrap">
                    
                    </div>
                    <div class="btn-group position-static text-nowrap">
                    
                  </div>
                </div>
                <div class="col-auto">
                </div>
              </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table table-striped " id="datatable">
                    <thead>
                    <tr>
                    <th>Id</th>
                      <th>Code de suivi</th>
                      <th>Produit</th>
                      <th>Quantite</th>
                      <th>Prix de vente</th>
                      <th>Etat </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @can('edit order state')
                    <tbody>
                    </tbody>
                  @endcan
                   </table>
              </div>

            @include('component.admin.modals.orderStatusModal')
            </div>
          </div>
        </div>
      @include('component.admin.footer')
      </div>

@endsection
  @section('script')
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="../../../vendors/popper/popper.min.js"></script>
  <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../../../vendors/anchorjs/anchor.min.js"></script>
  <script src="../../../vendors/is/is.min.js"></script>
  <script src="../../../vendors/fontawesome/all.min.js"></script>
  <script src="../../../vendors/lodash/lodash.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="../../../vendors/feather-icons/feather.min.js"></script>
  <script src="../../../vendors/dayjs/dayjs.min.js"></script>
  <script src="../../../vendors/choices/choices.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
  <script src="../../../assets/js/phoenix.js"></script>
  {{-- <script src="../../../vendors/list.js/list.min.js"></script> --}}

    <script>
    $(document).ready( function () {
     


        var modal = $('#confirmModal');
        var form = $('.form');
        var btnChange=$('#ok_button')
        var table=$('#datatable').DataTable({
          
            'processing': true,
            'serverSide': true,
            'ajax': "{{ route('admin.commandes.getcommandes') }}",
            'columns': [
              { "data": "id" },
              { "data": "code_suivi"},
              { "data": "produit_name"},
              { "data": "quantite"}, 
              { "data": "prix_vente"},
              { "data": "status"},
              {data: 'action'},
              ],
          
        });
        $(document).on('click','.btn-edit',function(){
          var rowData =  table.row($(this).parents('tr')).data()

            form.find('input[name="id"]').val(rowData.id)
            form.find('input[name="status-select"]').val(rowData.status)

            modal.modal('show')
        })
         $('.status-select').select2({
            dropdownParent: modal,
            minimumResultsForSearch: Infinity,
            placeholder: "Select a status",
            allowClear: true
      });
       $('.status-select').on('change', function() {
        var selectedValue = $(this).val();
        console.log("Selected Value: ", selectedValue);
    });

     btnChange.click(function(){
            var updateId = form.find('input[name="id"]').val()
            console.log(updateId)
            var actionUrl = "{{ route('admin.commandes.update', ['id' => ':id']) }}".replace(':id', updateId);
            // console.log(actionUrl)  
            form.attr('action', actionUrl);
            var formData = form.serialize() + '&_token=' + '{{ csrf_token() }}';
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: formData,
                success: function (data) {
                  if(data.success){
                    console.log(' update was a success')
                    table.ajax.reload();
                    table.draw();
                    rowid=null;
                    modal.modal('hide')
                  }
                }
             }); //end ajax
        })


        
      });
      
    </script>

@endsection