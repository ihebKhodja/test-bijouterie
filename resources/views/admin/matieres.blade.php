
@extends('layouts.admin')
 @section('stylesheet')
  <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
  <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
  <link href="../../../vendors/dropzone/dropzone.min.css" rel="stylesheet">
  <link href="../../../vendors/choices/choices.min.css" rel="stylesheet">
  <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
 
  
  @endsection
@section('content')

<div class="content">
       
        <form class="mb-9" method="post" action="{{route('admin.matieres.store')}}">
          @csrf
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Add a Matiere</h2>
              <h5 class="text-700 fw-semi-bold">Orders placed across your store</h5>
            </div>
            <div class="col-auto">
             
              <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Add Matiere</button>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Matiere Name</h4>
              @if ($errors->has('name'))
                    <span class="invalid-feedback">
                <ul>
                    @foreach($errors->get('name') as $error)
                    <li>
                        {{ $error }}
                    </li>
                </ul>
            @endforeach
            @endif

              <input class="form-control mb-5" type="text" name="name" placeholder="Write name here..." />
             
            </div>
            
          </div>
        </form>

        @include('component.admin.footer')

      </div>

@endsection

@section('script')
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