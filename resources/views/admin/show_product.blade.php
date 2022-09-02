<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
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
                 @if(session()->has('error'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
                        {{session()->get('error')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product list</h4>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th> Product title </th>
                                            <th> Description </th>
                                            <th> Quantity </th>
                                            <th> Category </th>
                                            <th> Price </th>
                                            <th> Discount price </th>
                                            <th> Image </th>
                                            <th> Actions </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $data)
                                            <tr>
                                                <td class="py-1">
                                                    {{$data->title}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->description}}
                                                </td> <td class="py-1">
                                                    {{$data->quantity}}
                                                </td> <td class="py-1">
                                                    {{$data->category}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->price}}
                                                </td>
                                                <td class="py-1">
                                                    {{$data->discount_price}}
                                                </td> <td class="py-1">
                                                    <img src="/product/{{$data->image}}"/>
                                                </td>




                                                <td>
                                                    <a  onclick="return confirm('are you sure to delete this')"
                                                        class="btn btn-danger"
                                                        href="{{url('delete_product',$data->id)}}">
                                                        Delete</a>
                                                    <a   class="btn btn-success"
                                                        href="{{url('update_product',$data->id)}}">
                                                        Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
