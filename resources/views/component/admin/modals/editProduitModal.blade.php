 <div class="modal" tabindex="-1" id='editModal' role="dialog">
    <div class="modal-dialog" role="document">
        <form class="form" action="" method="POST" enctype="multipart/form-data">
           @csrf
            @method('POST')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label for="reference">reference</label>
                        <input type="text" name="reference" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="designation">designation</label>
                        <input type="text" name="designation" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="name">quantite</label>
                        <input type="number" name="quantite" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="name">prix_achat_gramme</label>
                        <input type="number" name="prix_achat_gramme" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="phone">prix_vente_gramme</label>
                        <input type="number" name="prix_vente_gramme" class="form-control input-sm">
                    </div>
                    <div class="form-group">
                        <label for="dob">remise_max</label>
                        <input type="number" name="remise_max" class="form-control input-sm">
                    </div>
                </div>
                <div class="modal-footer">
                    @include('flash::message')
                    @can('edit product')
                        <button type="button" class="btn btn-primary btn-update">Update</button>
                    @endcan
                    <button type="button" class="close btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>