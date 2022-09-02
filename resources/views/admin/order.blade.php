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
                                <h4 class="card-title">Order list</h4>
                                <div class="col-md-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Search here orders</h4>
                                            <div class="form-group">
                                                <form action="{{url('search')}}" method="get">
                                                     @csrf
                                                <div class="input-group">

                                                <input type="text" name="search" class="form-control"
                                                       placeholder="Order Search"   >
                                                 <div class="input-group-append">
                                                   <input class="btn btn-sm btn-primary" type="submit" value="Search">
                                                 </div>

                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th> Name </th>
                                            <th> Email </th>
                                            <th> Address </th>
                                            <th> Phone </th>
                                            <th> Product title </th>
                                            <th> Quantity </th>
                                            <th> Price </th>
                                            <th> Payment status </th>
                                            <th> Delivery status </th>
                                            <th> Image </th>
                                            <th> Delivered </th>
                                            <th> Print </th>
                                            <th> Send Email </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($order as $order)
                                            <tr>
                                                <td class="py-1">
                                                    {{$order->name}}
                                                </td>
                                                <td class="py-1">
                                                    {{$order->email}}
                                                </td> <td class="py-1">
                                                    {{$order->address}}
                                                </td> <td class="py-1">
                                                    {{$order->phone}}
                                                </td>
                                                <td class="py-1">
                                                    {{$order->product_title}}
                                                </td>
                                                <td class="py-1">
                                                    {{$order->quantity}}
                                                </td>
                                                <td class="py-1">
                                                    {{$order->price}}
                                                </td>
                                                <td class="py-1">
                                                    {{$order->payment_status}}
                                                </td>
                                                <td class="py-1">
                                                    {{$order->delivery_status}}
                                                </td>
                                                <td class="py-1">
                                                    <img src="/product/{{$order->image}}"/>
                                                </td>
                                                <td class="py-1">
                                                    @if($order->delivery_status=='Processing')
                                                    <a  onclick="return confirm('Are you sure this product is delivered ')"
                                                        href="{{url('delivered',$order->id)}}"
                                                    class="btn btn-primary">Delivered</a>
                                                    @else
                                                    <p>Delivered</p>
                                                    @endif
                                                </td>
                                                <td class="py-1">
                                                    <a class="btn btn-secondary" href="{{url('print_pdf',$order->id)}}">Print to PDF</a>
                                                </td>
                                                <td class="py-1">
                                                    <a class="btn btn-info" href="{{url('send_email',$order->id)}}">Send Email</a>
                                                </td>
                                            </tr>
                                        @empty
                                                <tr >
                                                    <td class="alert alert-danger" colspan="13">No data found</td>
                                                </tr>
                                        @endforelse
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
