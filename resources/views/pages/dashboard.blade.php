

<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      
         <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>  
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">   
  
@if(Session::has('users'))  


@php
$users =Session::get('users');  
if($users['category']==1){
    $cat=2;
}
else{
   $cat=1;
}
@endphp 
@if(!$users['category']){
    @include('pages.categories')
}
@endif
@else
@include('pages.signin')
@endif

 
              
@extends ('layouts.user')
@section('content')


<div class="page-wrapper">
   
         
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Dashboard </h1> 
                        
                        @include('sweet::alert')
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
            </div>
           
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Teachers</h4>
                               
                            </div>
                            
                            <div class="comment-widgets scrollable">
                                @foreach(\App\Models\User::all() as $user)
                               
@if($user['category']==$cat)

                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="adminlte/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">{{$user['name']}}</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">{{$user['created_at']}}</span> <span class="badge bg-primary">Pending</span> <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endif



@endforeach
                                <!-- Comment Row -->
                              
                          
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
@stop