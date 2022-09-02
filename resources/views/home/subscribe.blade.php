<section class="subscribe_section">
    <div class="container-fuild">
        <div class="box">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="subscribe_form ">
                        <div class="heading_container heading_center">
                            <h3>Comments</h3>
                        </div>
                        <form action="{{url('add_comment')}}" method="POST">
                            @csrf
                             <input name="comment" type="text" placeholder="Enter your comment">
                             <input type="submit" value="Send" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
