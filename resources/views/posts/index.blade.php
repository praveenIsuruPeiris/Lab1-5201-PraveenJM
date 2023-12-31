<x-layout>
    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts -> count())
            <x-posts-grid :posts="$posts"/>
            {{$posts->links()}}
        @else
            <p class="text-center">
                No posts yet. Please check back later.
            </p>

        @endif

    </main>

    {{--    @foreach ($posts as $post)--}}
    {{--        <article class="{{ $loop->even ? 'foobar' : '' }}">--}}
    {{--            <h1>--}}
    {{--                <a href="/posts/{{$post->id}}">--}}

    {{--                    {!!$post-> title !!}--}}

    {{--                </a>--}}
    {{--            </h1>--}}
    {{--            <p>--}}
    {{--                by <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a>--}}
    {{--                <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->slug }}</a>--}}
    {{--            </p>--}}

    {{--            <div>--}}
    {{--                {{ $post->excerpt }}--}}

    {{--            </div>--}}

    {{--        </article>--}}
    {{--    @endforeach--}}
</x-layout>
