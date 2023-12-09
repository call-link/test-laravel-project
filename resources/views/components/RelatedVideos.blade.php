<div id="related-posts">
    @foreach($videos as $video)
    <div class="related-video-item">
        <div class="thumb">
            <small class="time">{{$video->length}}</small>
            <a href="{{route('videos.show',$video->slug)}}"><img src="{{$video->thumbnail}}" alt=""></a>
        </div>
            <a href="{{route('videos.show',$video->slug)}}" class="title">{{$video->description}}</a>
            <a class="channel-name" href="#">{{$video->name}}<span>
            <i class="fa fa-check-circle"></i></span></a>
    </div>
    @endforeach
</div>