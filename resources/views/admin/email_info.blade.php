<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <base href="/public">
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
         <div class="main-panel">
             <div class="content-wrapper">
                 <div class="col-8 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Send Email to {{$order->name}}</h4>
                             <form class="forms-sample" action="{{url('send_user_email',$order->id)}}" method="POST">
                                 @csrf
                                 <div class="form-group">
                                     <label for="exampleInputName1">Email  greeting</label>
                                     <input required type="text" name="greeting" class="form-control" id="exampleInputName1" placeholder="Name">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleTextarea1">Email Firstline</label>
                                     <input required type="text" name="firstline" class="form-control" id="exampleInputName1" placeholder="Name">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Email  Body</label>
                                     <input required type="text" name="body" class="form-control" id="exampleInputName1" placeholder="Name">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Email Button name</label>
                                     <input required type="text" name="button" class="form-control" id="exampleInputName1" placeholder="Name">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Email Url</label>
                                     <input required type="text" name="url" class="form-control" id="exampleInputName1" placeholder="Name">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputName1">Email Last Line</label>
                                     <input required type="text" name="lastline" class="form-control" id="exampleInputName1" placeholder="Name">
                                 </div>
                                 <input  type="submit" class="btn btn-primary mr-2" value="Send Email"/>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
