@extends('layouts.app')


@section('stylesheet')
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
@endsection

@section('content')

<section class="pt-5 pb-9">
    
        <div class="container">
          <button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span class="fa-solid fa-filter me-2"></span>Filter</button>
          <div class="row">
            <div class="col-lg-2 col-xxl-2 ps-2">
              <div class="product-filter-offcanvas bg-soft scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h3 class="mb-0 ms-1">Filters</h3>
                  <button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-0"></span></button>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseAvailability" role="button" aria-expanded="true" aria-controls="collapseAvailability">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Availability</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseAvailability">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="inStockInput" type="checkbox" name="color" checked>
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="inStockInput">In stock</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="preBookInput" type="checkbox" name="color">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="preBookInput">Pre-book</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="outOfStockInput" type="checkbox" name="color">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="outOfStockInput">Out of stock</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseColorFamily" role="button" aria-expanded="true" aria-controls="collapseColorFamily">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Color family</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseColorFamily">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckBlack" type="checkbox" name="color" checked>
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckBlack">Black</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckBlue" type="checkbox" name="color">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckBlue">Blue</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckRed" type="checkbox" name="color">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckRed">Red</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseBrands" role="button" aria-expanded="true" aria-controls="collapseBrands">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Brands</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseBrands">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckBlackberry" type="checkbox" name="brands" checked>
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckBlackberry">
                        Blackberry

                      </label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckApple" type="checkbox" name="brands">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckApple">
                        Apple

                      </label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckNokia" type="checkbox" name="brands">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckNokia">
                        Nokia

                      </label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckSony" type="checkbox" name="brands">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckSony">
                        Sony

                      </label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flexCheckLG" type="checkbox" name="brands">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 mb-0 fw-normal" for="flexCheckLG">
                        LG

                      </label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapsePriceRange" role="button" aria-expanded="true" aria-controls="collapsePriceRange">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Price range</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapsePriceRange">
                  <div class="d-flex justify-content-between mb-3">
                    <div class="input-group me-2">
                      <input class="form-control" type="text" aria-label="First name" placeholder="Min">
                      <input class="form-control" type="text" aria-label="Last name" placeholder="Max">
                    </div>
                    <button class="btn btn-phoenix-primary border-300 px-3" type="button">Go</button>
                  </div>
                </div><a class="btn px-0 y-4 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseRating" role="button" aria-expanded="true" aria-controls="collapseRating">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Rating</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseRating">
                  <div class="d-flex align-items-center mb-1">
                    <input class="form-check-input me-3" id="flexRadio1" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <input class="form-check-input me-3" id="flexRadio2" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above</p>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <input class="form-check-input me-3" id="flexRadio3" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above </p>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <input class="form-check-input me-3" id="flexRadio4" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above</p>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <input class="form-check-input me-3" id="flexRadio5" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above </p>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseDisplayType" role="button" aria-expanded="true" aria-controls="collapseDisplayType">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Display type</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseDisplayType">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="lcdInput" type="checkbox" name="displayType" checked>
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="lcdInput">LCD</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="ipsInput" type="checkbox" name="displayType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="ipsInput">IPS</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="oledInput" type="checkbox" name="displayType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="oledInput">OLED</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="amoledInput" type="checkbox" name="displayType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="amoledInput">AMOLED</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="retinaInput" type="checkbox" name="displayType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="retinaInput">Retina</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCondition" role="button" aria-expanded="true" aria-controls="collapseCondition">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Condition</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseCondition">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="newInput" type="checkbox" name="condition" checked>
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="newInput">New</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="usedInput" type="checkbox" name="condition">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="usedInput">Used</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="refurbrishedInput" type="checkbox" name="condition">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="refurbrishedInput">Refurbrished</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseDelivery" role="button" aria-expanded="true" aria-controls="collapseDelivery">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Delivery</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseDelivery">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="freeShippingInput" type="checkbox" name="delivery" checked>
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="freeShippingInput">Free Shipping</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="oneDayShippingInput" type="checkbox" name="delivery">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="oneDayShippingInput">One-day Shipping</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="codInput" type="checkbox" name="delivery">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="codInput">Cash on Delivery</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCampaign" role="button" aria-expanded="true" aria-controls="collapseCampaign">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Campaign</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseCampaign">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="summerSaleInput" type="checkbox" name="campaign">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="summerSaleInput">Summer Sale</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="marchMadnessInput" type="checkbox" name="campaign">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="marchMadnessInput">March Madness</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="flashSaleInput" type="checkbox" name="campaign">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flashSaleInput">Flash Sale</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="bogoBlastInput" type="checkbox" name="campaign">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="bogoBlastInput">BOGO Blast</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseWarranty" role="button" aria-expanded="true" aria-controls="collapseWarranty">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Warranty</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseWarranty">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="threeMonthInput" type="checkbox" name="warranty">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="threeMonthInput">3 months</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="sixMonthInput" type="checkbox" name="warranty">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="sixMonthInput">6 months</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="oneYearInput" type="checkbox" name="warranty">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="oneYearInput">1 year</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="twoYearsInput" type="checkbox" name="warranty">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="twoYearsInput">2 years</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="threeYearsInput" type="checkbox" name="warranty">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="threeYearsInput">3 years</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="fiveYearsInput" type="checkbox" name="warranty">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="fiveYearsInput">5 years</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseWarrantyType" role="button" aria-expanded="true" aria-controls="collapseWarrantyType">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Warranty Type</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseWarrantyType">
                  <div class="mb-2">
                    <div class="form-check mb-0x">
                      <input class="form-check-input mt-0" id="replacementInput" type="checkbox" name="warrantyType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="replacementInput">Replacement</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="serviceInput" type="checkbox" name="warrantyType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="serviceInput">Service</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="partialCoveregeInput" type="checkbox" name="warrantyType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="partialCoveregeInput">Partial Coverage</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="appleCareInput" type="checkbox" name="warrantyType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="appleCareInput">Apple Care</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="moneyBackInput" type="checkbox" name="warrantyType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="moneyBackInput">Money back</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="extendableInput" type="checkbox" name="warrantyType">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="extendableInput">Extendable</label>
                    </div>
                  </div>
                </div><a class="btn px-0 ms-1 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseCertification" role="button" aria-expanded="true" aria-controls="collapseCertification">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Certification</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse ms-1 show" id="collapseCertification">
                  <div class="mb-2">
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="rohsInput" type="checkbox" name="certification">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="rohsInput">RoHS</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="fccInput" type="checkbox" name="certification">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="fccInput">FCC</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="conflictInput" type="checkbox" name="certification">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="conflictInput">Conflict Free</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="isoOneInput" type="checkbox" name="certification">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="isoOneInput">ISO 9001:2015</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="isoTwoInput" type="checkbox" name="certification">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="isoTwoInput">ISO 27001:2013</label>
                    </div>
                    <div class="form-check mb-0">
                      <input class="form-check-input mt-0" id="isoThreeInput" type="checkbox" name="certification">
                      <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="isoThreeInput">IEC 61000-4-2</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop></div>
            </div>
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
                                ({{$produit->quantite}} disponible) id {{$produit->id}}</span>
                            </p>
                          </div>
                          <div>
                            <p class="fs--1 text-700 mb-2">{{$produit->matiere->name}}</p>
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
    
</script>
<script>
  var producId;
   function showModal(id) {
    productId=id;
    $(`#modal${productId}`).modal('show');
   }
   
 
   function cancel(){
// Resetting an input field
    document.getElementById('modalInput').value = '';

    // Changing text content
    document.getElementById('modalText').textContent = 'New text after reset';

   }



 
</script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
