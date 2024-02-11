<x-head css="" js="">
    <div class="home-page">
        <div class="banner">
            <div class="container">
                <h1 class="logo-font">conduit</h1>
                <p>A place to share your knowledge.</p>
            </div>
        </div>

        <div class="container page">
            <div class="row">
                <div class="col-md-9">
                    <div class="feed-toggle">
                        <ul class="nav nav-pills outline-active">
                            @if(Auth::check())
                            <li class="nav-item">
                                <span class="nav-link auth-tab">Your Feed</span>
                            </li>
                            @endif
                            <li class="nav-item">
                                <span class="nav-link user-tab active">Global Feed</span>
                            </li>
                        </ul>
                    </div>
                    <div class="auth-post-container">
                        @foreach($authPosts as $authPost)
                        <div class="article-preview auth-post">
                            <div class="article-meta">
                                <a href="{{route('conduit.show',['postId'=>$authPost->id])}}"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
                                <div class="info">
                                    <a href="/profile/eric-simons" class="author">{{$authPost->user->name}}</a>
                                    <span class="date">{{$authPost->created_at}}</span>
                                </div>
                                <button class="btn btn-outline-primary btn-sm pull-xs-right">
                                    <i class="ion-heart"></i> 29
                                </button>
                            </div>
                            <a href="{{route('conduit.show',['postId'=>$authPost->id])}}" class="preview-link">
                                <h1>{{$authPost->headline}}</h1>
                                <p>{{$authPost->subtitle}}</p>
                                <span>Read more...</span>
                                @if(!$authPost->tags->isEmpty())
                                <ul class="tag-list">
                                    @foreach($authPost->$tags as $tag)
                                    <li class="tag-default tag-pill tag-outline">{{$tag->name}}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="user-post-container">
                        @foreach($posts as $post)
                        <div class="article-preview">
                            <div class="article-meta">
                                <a href="/profile/eric-simons"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
                                <div class="info">
                                    <a href="/profile/eric-simons" class="author">{{$post->user->name}}</a>
                                    <span class="date">{{$post->created_at}}</span>
                                </div>
                                <button class="btn btn-outline-primary btn-sm pull-xs-right">
                                    <i class="ion-heart"></i> 29
                                </button>
                            </div>
                            <a href="{{route('conduit.show',['postId'=>$post->id])}}" class="preview-link">
                                <h1>{{$post->headline}}</h1>
                                <p>{{$post->subtitle}}</p>
                                <span>Read more...</span>
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-md-3">
                        <div class="sidebar">
                            <p>Popular Tags</p>

                            <div class="tag-list">
                                <a href="" class="tag-pill tag-default">programming</a>
                                <a href="" class="tag-pill tag-default">javascript</a>
                                <a href="" class="tag-pill tag-default">emberjs</a>
                                <a href="" class="tag-pill tag-default">angularjs</a>
                                <a href="" class="tag-pill tag-default">react</a>
                                <a href="" class="tag-pill tag-default">mean</a>
                                <a href="" class="tag-pill tag-default">node</a>
                                <a href="" class="tag-pill tag-default">rails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-head>