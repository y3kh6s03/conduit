<x-head css="" js="">
    <div class="editor-page">
        <div class="container page">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-xs-12">

                    <form action="{{route('conduit.update',['id'=>$post->id])}}" method="POST">
                        @csrf
                        <fieldset>
                            <fieldset class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="headline" name="headline" value="{{$post->headline}}" />
                            </fieldset>
                            <fieldset class="form-group">
                                <input type="text" class="form-control" placeholder="title?" value="{{$post->title}}" name="title" />
                            </fieldset>
                            <fieldset class="form-group">
                                <input class="form-control" rows="8" placeholder="subtitle" value="{{$post->subtitle}}" name="subtitle"></input>
                            </fieldset>
                            <fieldset class="form-group">
                                <textarea class="form-control" rows="8" placeholder="content" name="content">
                                {{$post->content}}
                                </textarea>
                            </fieldset>
                            <button class="btn btn-lg pull-xs-right btn-primary" type="submit">
                                Publish Article
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-head>