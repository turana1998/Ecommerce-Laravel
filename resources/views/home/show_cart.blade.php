<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
@include('sweetalert::alert')
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
     <div class="container mt-5">
         @if(session()->has('message'))
             <div class="alert alert-success">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
                 {{session()->get('message')}}
             </div>
        @endif
         <table class="table table-dark">
             <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Product title</th>
                 <th scope="col">Product quantity</th>
                 <th scope="col">Price</th>
                 <th scope="col">Image</th>
                 <th scope="col">Action</th>
             </tr>
             </thead>
             <tbody>
             <?php $totalprice=0;?>
             @foreach($cart as $cart)
             <tr>
                 <th scope="row">1</th>
                 <td>{{$cart->product_title}}</td>
                 <td>{{$cart->quantity}}</td>
                 <td>{{$cart->price}}</td>
                 <td>
                     <img height="200px" width="200px"
                          src="/product/{{$cart->image}}"/>
                 </td>
                 <td>
                     <a  onclick="confirmation(event)"
                         href="{{url('/remove_cart',$cart->id)}}"
                         class="btn btn-danger">Remove
                     </a>
                 </td>
             </tr>
             <?php $totalprice=$totalprice + $cart->price ?>
             @endforeach
             </tbody>
         </table>
         <div class="aler alert-primary mt-5">
             <div class="text-center">
                <b> Total Price-{{$totalprice}}</b>
             </div>
         </div>
         <div class="mt-5">
             <div class="text-center">
                 <b >Procced to Order</b>
             </div>
             <div class="d-flex justify-center mt-3">
                 <a href="{{url('cash_order')}}"
                    class="btn btn-danger m-3">Cash on Delivery
                 </a>
                 <a href="{{url('stripe',$totalprice)}}"
                    class="btn btn-danger m-3">Pay using a card
                 </a>
             </div>
         </div>
     </div>
</div>
<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<script>
    function confirmation(ev)
    {
        ev.preventDefault();
        var urLToRedirect=ev.currentTarget.getAttribute('href');
        console.log(urLToRedirect);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    window.location.href=urLToRedirect;
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
