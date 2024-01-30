 <div class="col-lg-2 col-xxl-2 ps-2">
    <div class="product-filter-offcanvas bg-soft scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
         <div class="d-flex justify-content-between align-items-center mb-3">
                  <h3 class="mb-0 ms-1">Filters</h3>
                  <button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-0"></span></button>
        </div>
        <form action="{{ route('ecommerce.index') }}" method="GET">
            @csrf
            <select class="select p-4 " name="categorie_id" onchange="this.form.submit()">
                <option value="">All Category</option>
                @foreach($categories as $categorie)
                <option value="{{ $categorie->id }}" {{ request()->query('categorie_id') == $categorie->id ? 'selected' : '' }}>
                    {{ $categorie->name }}
                </option>
                @endforeach
            </select>
        </form>
</div>

</div>





       