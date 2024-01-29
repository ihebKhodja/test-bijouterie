  <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <form method="post" class="form" id="sample_form" action="" form-horizontal">
            @csrf
            @method('POST')
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="number" readonly name="id">

                <label for="reference">Change status: </label>
                <select class="status-select" name="status">
                    <option value="livre">livre</option>
                    <option value="retourne">retourne</option>
                    
                </select>
            </div>
           
            <div class="modal-footer">
                @can('edit order state')
                <button type="  button" name="ok_button" id="ok_button" class="btn btn-primary">Change</button>
                    
                @endcan
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </form>  
        </div>
        </div>
    </div>