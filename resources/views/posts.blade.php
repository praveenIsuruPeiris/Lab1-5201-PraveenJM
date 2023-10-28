<x-layout>
    @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>
                <a href="/posts/{{$post->id}}">

                    {!!$post-> title !!}

                </a>
            </h1>
            <p>
                by <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a>
                <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
            </p>


            <div>
                {{ $post->excerpt }}

            </div>

        </article>
    @endforeach
</x-layout>
