<div class="row" id="ignite-news">
    @foreach($news as $item)
            <div class="col-md-3 ignite-news-item">
                <br>
                <h2 style="margin-top: 2px;"><a target="_blank" href="{!! $item->url !!}">{!! strtoupper(str_limit($item->title, 20)) !!}</a></h2>
                <p>{!! date("F j, Y", strtotime($item->created_at)) !!}</p>
                <p><button style="font-family: 'Lato', sans-serif; letter-spacing: 0;" class="btn ignite-news-btn"  onclick="window.open('{!! $item->url !!}', '_blank')">Read More...</button></p>
            </div>
    @endforeach
</div>

<div class="row">
    <div class="col-md-12">
        {!! $news->render() !!}
    </div>
</div>