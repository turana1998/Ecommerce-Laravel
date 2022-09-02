<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
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
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Product update Page</h2>
                                <form class="forms-sample" action="{{url('/update_product_confirm',$data->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Product  title</label>
                                        <input required type="text" name="title" class="form-control" id="exampleInputName1"
                                               value="{{$data->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Product description</label>
                                        <textarea class="form-control" name="description" id="exampleTextarea1"
                                                  rows="4"> value="{{$data->description}}"</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Product  price</label>
                                        <input required type="number" name="price" class="form-control"
                                               id="exampleInputName1"  value="{{$data->price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Product Discount  price</label>
                                        <input required type="number" name="discount_price" class="form-control"
                                               id="exampleInputName1"  value="{{$data->discount_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Product Quantity</label>
                                        <input required type="number" name="quantity" class="form-control"
                                               id="exampleInputName1"  value="{{$data->quantity}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Product Category</label>
                                        <select required class="form-control" id="exampleSelectGender" name="category">
                                            <option selected  value="{{$data->category}}">{{$data->category}}</option>
                                            @foreach($category as $category)
                                                <option>{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Current Image</label>
                                        <img width="200px" height="200px" src="/product/{{$data->image}}"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Change Image</label>
                                        <input  type="file" name="image">

                                    </div>

                                    <input  type="submit" class="btn btn-primary mr-2" value="Update"/>
                                </form>

                            </div>
                        </div>
                    </div>
                    >
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                            href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
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
