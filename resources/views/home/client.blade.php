<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Customer's Coments
            </h2>
        </div>
        <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($comment as $comment)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="box col-lg-10 mx-auto">
                        <div class="detail-box">
                            <h5>
                                {{$comment->name}}
                            </h5>
                            <p>
                                {{$comment->comment}}                            </p>
                            <a data-Commentid="{{$comment->id}}"  onclick="reply(this)" href="javascript:void(0)" class="btn btn-dark"> Reply</a>
                        </div>
                        @foreach($reply as $repl)
                            @if($repl->comment_id==$comment->id)
                        <div class="detail-box pb-5 " style="padding-left: 3%">
                            <h5>
                                {{$repl->name}}
                            </h5>
                            <p>{{$repl->reply}}   </p>
                            <a style="color: red" data-Commentid="{{$comment->id}}"  onclick="reply(this)" href="javascript:void(0)" class="btn btn-dark"> Reply</a>
                        </div>
                            @endif
                        @endforeach
                        <div style="display: none;margin-top: 50px" class="reply_div">
                            <form action="{{url('add_reply')}}" method="POST">
                                @csrf
                            <input hidden type="text" id="commentId" name="commentId">
                            <input name="reply" placeholder="Write reply" class="form-input p-3 mr-3">
                                <div class="d-flex justify-center align-items-center">
                                    <input  type="submit" class="btn btn-danger m-0 p-2 mr-2" value="Reply">
                                    <a  href="javascript:void(0)" class="btn btn-dark p-1"  onclick="reply_close(this)"> Close</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="carousel_btn_box">
                <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
