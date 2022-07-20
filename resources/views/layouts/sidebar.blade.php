<div class="col-lg-4">
    <!-- Search widget-->
    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">Тег</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">

{{--                            @foreach ($tags as $tag)--}}
{{--                                <a class="badge bg-secondary text-decoration-none link-light" href="{{url('')}}">--}}
{{--                                    {{ $tag->name }}--}}
{{--                                </a>--}}
{{--                            @endforeach--}}


                        @foreach ($posts as $tag)
                            <a class="badge bg-secondary text-decoration-none link-light" href="{{url('/articles')}}">
                                {{ $tag->tags }}
                            </a>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
