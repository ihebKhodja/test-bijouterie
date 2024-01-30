
@extends('layouts.admin')

@section('stylesheet')

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
<link href="../../../vendors/choices/choices.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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
          <div class="row g-3 mb-1">
            <div class="col-auto">
              <h2 class="mb-0">Products</h2>
            </div>
          </div>
          <div class="mb-1">
              <div class="row g-3">
                
                
                <div class="col-auto">
                  <button class="btn btn-primary" onclick="window.location='{{ route('admin.produits.create') }}'"id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button>
                </div>
                <div class="col-auto">
                  @can('import excel')
                    <form  class="form " method="POST" action="{{route('admin.produits.importexcel')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group d-flex align-items-center">
                        <input type="submit" value="Import File" name="import_file_btn" class="btn btn-secondary mr-2">
                        <input type="file"  name="import_file"  class="form-control input-sm" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                      </div>
                    </form>
                  @endcan
                </div>
                <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                    <div class="btn-group position-static" role="group">
                      <div class="btn-group position-static text-nowrap">
                      
                      </div>
                    <div class="btn-group position-static text-nowrap">
                      
                    </div>
                </div>
                
              </div>
            </div>
            
            <div class="col-auto">
            </div>
          </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table  id="datatable" class="table table-striped " style="width:100%">
                  <thead>
                    <tr>
                      <th>Reference</th> 
                      <th>Designation</th>
                      <th>Quantite</th>
                      <th>photo</th>
                      <th>Category</th>
                      <th>Matiere</th>
                      <th>Prix d'achat</th>
                      <th>Prix de vente</th>
                      <th>Poids</th>
                      <th>Max de remise</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                    @can('archive product') 
                    @can('edit product')
                    @can('export excel')
                      
                      @include('flash::message')
                      
                      <tbody>
                      </tbody>
                    
                    @endcan
                      @endcan
                    @endcan
                  </table>
              </div>
            

              @include('component.admin.modals.confirmArchiveModal')
              @include('component.admin.modals.editProduitModal')
            </div>
          </div>
        </div>
      @include('component.admin.footer')
      </div>

      @endsection

      
      



<!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
  @section('script')


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="../../../vendors/list.js/list.min.js"></script>
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
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
  <script src="../../../assets/js/phoenix.js"></script>

  <script>

    $(document).ready( function () {

        var modalEdit = $('#editModal');
        var modalDel=$('#confirmModal');
        var form = $('.form');
        var btnUpdate=$('.btn-update')
        var table =$('#datatable').DataTable({     
            'processing': true,
            'serverSide': true,
            'ajax': "{{ route('admin.produits.getproduits') }}",
              dom: 'Bfrtip',
              buttons: [
                { extend: 'excel',
                    text: 'Export to Excel',  
                  title: 'La Liste des produits', 
                  filename: 'La Liste des produits', 
                  autoFilter: true,
                  exportOptions: {
                      columns: ':not(:last-child)' 
                  }}
              ],  
            'columns': [
              { "data": "reference" },
              { "data": "designation"},
              { "data": "quantite"},
              { "data": "image" , 
                render: function( data, type, full, meta ) {
                          return "<img src=\"/uploads/produits/" + data + "\" height=\"50\"/>";
                    }
              },
              { "data": "categorie_name"},
              { "data": "matiere_name"},
              { "data": "prix_achat_gramme"},
              { "data": "prix_vente_gramme"},
              { "data": "poids_gramme"},
              { "data": "remise_max"},
              {"data": "action"},     
              
              ],
        });
        $(document).on('click','.close',function(){
                modalEdit.modal('hide');

        })
        $(document).on('click','.btn-edit',function(){
          
          var rowData =  table.row($(this).parents('tr')).data()
            
            form.find('input[name="id"]').val(rowData.id)
            form.find('input[name="reference"]').val(rowData.reference)
            form.find('input[name="designation"]').val(rowData.designation)
            form.find('input[name="quantite"]').val(rowData.quantite)
            form.find('input[name="image"]').val()
            form.find('input[name="prix_achat_gramme"]').val(rowData.prix_achat_gramme)
            form.find('input[name="prix_achat_gramme"]').val(rowData.prix_achat_gramme)
            form.find('input[name="prix_vente_gramme"]').val(rowData.prix_vente_gramme)
            form.find('input[name="remise_max"]').val(rowData.remise_max)
            modalEdit.modal('show')
        })

       

        btnUpdate.click(function(){
      
            var updateId = form.find('input[name="id"]').val()
            var actionUrl = "{{ route('admin.produits.update', ['id' => ':id']) }}".replace(':id', updateId);
            console.log(actionUrl)  
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
                    modalEdit.modal('hide')
                  }else{
                    alert('Update failed')
                  }
                }
             }); //end ajax
        })

        // Archive produit  
        $(document).on('click','.btn-delete',function(){
          modalDel.modal('show')
          var rowid=$(this).data('rowid');
          var el = $(this);
          $('#ok_button').on('click', function() {

            $.ajax({
              type:"POST",
              url:"/admin/produits/archive/" +rowid,
              data:{rowid,  _token: '{{csrf_token()}}' },
              success:function(data){
                if(data.success){
                console.log('success dsarchive')
                table.ajax.reload();
                table.draw();
                modalDel.modal('hide')
                rowid=null;
                }else{
                  console.log('archive failed')
                }
                }
              })
            });
            
          })

    });
  
  </script> 
 



  
    
    @endsection