<x-head css="" js="">
    <div class="editor-page">
        <div class="container page">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-xs-12">

                    <form action="{{route('conduit.store',['id'=>Auth::id()])}}" method="POST">
                        @csrf
                        <fieldset>
                            <fieldset class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="headline" name="headline"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <input type="text" class="form-control" placeholder="title?"name="title"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <input class="form-control" rows="8" placeholder="subtitle" name="subtitle"></input>
                            </fieldset>
                            <fieldset class="form-group">
                                <textarea class="form-control" rows="8" placeholder="content" name="content"></textarea>
                            </fieldset>
                            <!-- <fieldset class="form-group">
                                <input type="text" class="form-control" placeholder="Enter tags" />
                                <div class="tag-list">
                                    <span class="tag-default tag-pill"> <i class="ion-close-round"></i> tag </span>
                                </div>
                            </fieldset> -->
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