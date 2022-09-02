<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>PDF</title>

</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
                <h1 class="card-title mb-1">Details about order</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="preview-list">
                        <div class="preview-item border-bottom">
                            <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Costumer Name-{{$order->name}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Costumer Phone-{{$order->phone}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Costumer Address-{{$order->address}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Costumer Id-{{$order->user_id}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Product Name-{{$order->product_title}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Product price-{{$order->price}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Product Quantity-{{$order->quantity}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Payment Status-{{$order->payment_status}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="preview-subject">Product Id-{{$order->product_id}}</h3>
                                </div>
                                <div class="flex-grow">
                                    <img height="350px" src="product/{{$order->image}}"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
