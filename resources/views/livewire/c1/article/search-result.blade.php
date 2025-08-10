<div class="absolute bg-gray-50 text-gray-800 p-3 rounded {{ blank($searched) ? 'hidden' : '' }}">
    @foreach ($articles as $article)
        <div class="my-5 border-1 rounded-md p-5 w-[100%]">

            <a href="{{ route('c1.articles.show', $article) }}" class="hover:text-amber-600 cursor-pointer">
                {{ $article->title }}
            </a>
            <p class="mt-5 pl-5">
                {{ mb_substr($article->content, 0, 100) . '...' }}
            </p>
        </div>
    @endforeach

    @if (blank($articles) && filled($searched))
        <div class="my-5 border-1 rounded-md p-5 text-center w-[100%]">
            Nothing found
        </div>
    @endif
</div>
