<div class="row" id="ignite-news">
    @foreach($news as $item)
        @if($loop->first)
            <div class="col-md-3 col-md-offset-2 ignite-news-item">
                @elseif($loop->iteration == 3)
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-2 ignite-news-item">
                    @else
                        <div class="col-md-3 ignite-news-item">
                            @endif
                            <br>
                            <h2 style="margin-top: 2px;"><a target="_blank" href="https://ignitefredericton.com/blogs/post/{!! $item->slug !!}">{!! strtoupper(str_limit($item->title, 20)) !!}</a></h2>
                            <p>blog post</p>
                            <p><button style="font-family: 'Lato', sans-serif; letter-spacing: 0;" class="btn ignite-news-btn" onclick="window.open('https://ignitefredericton.com/blogs/post/{!! $item->slug !!}', '_blank')">Read More...</button></p>
                        </div>
                        @endforeach
                </div>


