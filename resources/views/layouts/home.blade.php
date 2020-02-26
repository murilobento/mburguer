@extends('layouts.app3')

@section('title', 'Home')

@section('content')
<div class="page-content-wrapper ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-title-box">
          <h4 class="page-title">Bem-vindo ao sistema!</h4>
        </div>
      </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
      <!-- Column -->
      <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="col-3 align-self-center">
                <div class="round">
                  <i class="mdi mdi-webcam"></i>
                </div>
              </div>
              <div class="col-6 align-self-center text-center">
               <div class="m-l-10">
                 <h5 class="mt-0 round-inner">185</h5>
                 <p class="mb-0 text-muted">Pedidos</p>
               </div>
             </div>
             <div class="col-3 align-self-end align-self-center">
              <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i>
                <span>5.26%</span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
          <div class="card-body">
            <div class="d-flex flex-row">
              <div class="col-3 align-self-center">
                <div class="round">
                  <i class="mdi mdi-account-multiple-plus"></i>
                </div>
              </div>
              <div class="col-6 text-center align-self-center">
               <div class="m-l-10 ">
                 <h5 class="mt-0 round-inner">562</h5>
                 <p class="mb-0 text-muted">Burguer</p>
               </div>
             </div>
             <div class="col-3 align-self-end align-self-center">
              <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i>
                <span>8.68%</span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-md-6 col-lg-6 col-xl-3">
       <div class="card m-b-30">
         <div class="card-body">
           <div class="d-flex flex-row">
             <div class="col-3 align-self-center">
               <div class="round ">
                 <i class="mdi mdi-basket"></i>
               </div>
             </div>
             <div class="col-6 align-self-center text-center">
              <div class="m-l-10 ">
                <h5 class="mt-0 round-inner">751</h5>
                <p class="mb-0 text-muted">Extra</p>
              </div>
            </div>
            <div class="col-3 align-self-end align-self-center">
             <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i>
               <span>2.35%</span></h6>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Column -->
     <!-- Column -->
     <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="card m-b-30">
        <div class="card-body">
          <div class="d-flex flex-row">
            <div class="col-3 align-self-center">
              <div class="round">
                <i class="mdi mdi-cash-multiple"></i>
              </div>
            </div>
            <div class="col-6 align-self-center text-center">
             <div class="m-l-10">
               <h5 class="mt-0 round-inner">328,74</h5>
               <p class="mb-0 text-muted">Total</p>
             </div>
           </div>
           <div class="col-3 align-self-end align-self-center">
            <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i>
              <span>2.35%</span></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Column -->
  <!-- Column -->
  <div class="row">
    <div class="col-12">
      <div class="card m-b-30">
        <div class="card-body">
          <h4 class="mt-0 header-title">Textual inputs</h4>
          <p class="text-muted m-b-30 font-14">Here are examples of <code
            class="highlighter-rouge">.form-control</code> applied to each
            textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
            class="highlighter-rouge">type</code>.</p>            
          </div>
        </div>
      </div> <!-- end col -->
    </div> <!-- end row -->
  </div><!-- container -->
</div> <!-- Page content Wrapper -->
@endsection