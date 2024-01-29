<div class="modal fade"   id="modal{{$produit->id}}" tabindex="-1" role="dialog" aria-labelledby="buyConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="buyConfirmModalLabel">Confirm Purchase</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.commandes.store')}}" method="POST">
                @csrf
            <div class="modal-body">
                    <div class="col-12 col-lg-6">
                        <h5 class="mb-2 text-1000"> * Quantite  {{$produit->quantite}}  </h5>
                        <h5 class="mb-2 text-1000"> * id  {{$produit->id}}  </h5>
                        <input class="form-control"  id="quantite" name="quantite" placeholder="1" type="number" min="1" max="{{$produit->quantite}}"/>
                        <input type="number" id="produit_id" readonly name="produit_id" value="{{$produit->id}}" min="0" style="display: none;" class="form-control">
                    </div>
                    <div class="col-12 col-lg-6">
                                            <h5 class="mb-2 text-1000">Prix par gramme : {{$produit->prix_vente_gramme}} $ </h5>
                                        </div>

                          {{-- <h5 class="mb-2 text-1000"> {{$produit->prix_vente_gramme  }}</h5> --}}
                        {{-- <input type="text" id="total" name="total" readonly class="form-control"> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cancel()">Cancel</button>
                    </div>
                </form>
        </div>
    </div>
</div>