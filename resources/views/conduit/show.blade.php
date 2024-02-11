<x-head css="" js="">
    <div class="article-page">
        <div class="banner">
            <div class="container">
                <h1>{{$post->headline}}</h1>

                <div class="article-meta">
                    <a href="/profile/eric-simons"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
                    <div class="info">
                        <a href="/profile/eric-simons" class="author">{{$post->user->name}}</a>
                        <span class="date">{{$post->created_at}}</span>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="ion-plus-round"></i>
                        &nbsp; Follow Eric Simons <span class="counter">(10)</span>
                    </button>
                    &nbsp;&nbsp;
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="ion-heart"></i>
                        &nbsp; Favorite Post <span class="counter">(29)</span>
                    </button>
                    @if($post->user_id===Auth::id())
                    <a href="{{route('conduit.edit',['id'=>$post->id])}}" class="btn btn-sm btn-outline-secondary">
                        <i class="ion-edit"></i> Edit Article
                    </a>
                    <form action="{{route('conduit.destroy',['id'=>$post->id])}}" method="POST">
                        @csrf
                        <button class="delete-button btn btn-sm btn-outline-danger">
                            <i class="ion-trash-a"></i> Delete Article
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>

        <div class="container page">
            <div class="row article-content">
                <div class="col-md-12">
                    <p>
                        {{$post->subtitle}}
                    </p>
                    <h2 id="introducing-ionic">{{$post->title}}</h2>
                    <p>{{$post->content}}</p>
                    <ul class="tag-list">
                        <li class="tag-default tag-pill tag-outline">realworld</li>
                        <li class="tag-default tag-pill tag-outline">implementations</li>
                    </ul>
                </div>
            </div>

            <hr />

            <div class="article-actions">
                <div class="article-meta">
                    <a href="profile.html"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
                    <div class="info">
                        <a href="" class="author">{{$post->user->name}}</a>
                        <span class="date">January 20th</span>
                    </div>

                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="ion-plus-round"></i>
                        &nbsp; Follow Eric Simons
                    </button>
                    &nbsp;
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="ion-heart"></i>
                        &nbsp; Favorite Article <span class="counter">(29)</span>
                    </button>
                    @if($post->user_id===Auth::id())
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="ion-edit"></i> Edit Article
                    </button>
                    <form action="{{route('conduit.destroy',['id'=>$post->id])}}" method="POST">
                        @csrf
                        <button class="delete-button btn btn-sm btn-outline-danger" >
                            <i class="ion-trash-a"></i> Delete Article
                        </button>
                    </form>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-8 offset-md-2">
                    <form class="card comment-form">
                        <div class="card-block">
                            <textarea class="form-control" placeholder="Write a comment..." rows="3"></textarea>
                        </div>
                        <div class="card-footer">
                            <img src="http://i.imgur.com/Qr71crq.jpg" class="comment-author-img" />
                            <button class="btn btn-sm btn-primary">Post Comment</button>
                        </div>
                    </form>

                    <div class="card">
                        <div class="card-block">
                            <p class="card-text">
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="/profile/author" class="comment-author">
                                <img src="http://i.imgur.com/Qr71crq.jpg" class="comment-author-img" />
                            </a>
                            &nbsp;
                            <a href="/profile/jacob-schmidt" class="comment-author">Jacob Schmidt</a>
                            <span class="date-posted">Dec 29th</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <p class="card-text">
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="/profile/author" class="comment-author">
                                <img src="http://i.imgur.com/Qr71crq.jpg" class="comment-author-img" />
                            </a>
                            &nbsp;
                            <a href="/profile/jacob-schmidt" class="comment-author">Jacob Schmidt</a>
                            <span class="date-posted">Dec 29th</span>
                            <span class="mod-options">
                                <i class="ion-trash-a"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-head>