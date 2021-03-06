<div class="col-lg-4 sidebar" style="margin-top: 45px;">
<div class="single-widget recent-posts-widget">
        <h4 class="title">Recent Posts</h4>
        <div class="blog-list ">
            @foreach($recent as $data)
            <br>
            <div class="single-recent-post d-flex flex-row">
                <div class="recent-thumb">
                    <img class="img-fluid" src="{{ asset ('assets/img/artikel/' .$data->gambar. '' ) }}" style="margin-top: 10px; max-width: 100px; max-height: 100px;" alt="">
                </div>
                <div class="recent-details">
                    <a href="/artikels/single/{{ $data->id }}">
                        <h4>
                            &nbsp {{ $data->judul }}
                        </h4>
                    </a>
                    <p>
                    &nbsp&nbsp{{ $data->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>  
            @endforeach                                                                                                                                                              
        </div>                              
    </div>
</div>