<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="col-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Search here orders</h4>
                    <div class="form-group">
                        <form action="{{url('product_search')}}" method="get">
                            @csrf
                            <div class="input-group">

                                <input type="text" name="search" class="form-control p-4"
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
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x </button>
                {{session()->get('message')}}
            </div>
        @endif
        <div class="row">
            @foreach($product as $products)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url('product_details',$products->id)}}" class="option1">
                               Detail
                            </a>
                            <form class="mt-3" action="{{url('add_cart',$products->id)}}" method="POST">

                                 @csrf
                               <div class="row ">
                                  <div class="col-12 col-lg-4">
                                      <input type="number" name="quantity" value="1" min="1" class="m-0 h-100" >
                                  </div>
                                  <div class="col-12 col-lg-8">
                                      <input type="submit" value="Add to Cart"/>
                                  </div>
                               </div>
                            </form>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount_price!=null)
                        <h6 style="color:red">
                            $ {{$products->discount_price}}
                        </h6>

                         <h6 style="color:blue">
                             <del>$ {{$products->price}}</del>
                         </h6>
                        @else
                         <h6 style="color:blue">
                             $ {{$products->price}}
                         </h6>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach
            <div style="padding-top: 20px;margin: auto">
                 {!!$product->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</section>
