<div>
    <input wire:model.live.debounced.300ms='searched' type="search"
        class="p-2 inline-block bg-gray-50 text-gray-800 rounded-md w-6/12" placeholder="Search in articles">

    <button type="button" wire:click='clear()' @disabled(blank($searched))
        class='p-2 text-white rounded-md bg-amber-600 disabled:bg-gray-400'>Clear</button>

    <div>
        @foreach ($articles as $article)
            <div class="my-5 border-1 rounded-md p-5">

                <a href="{{ route('c1.articles.show' , $article) }}" class="hover:text-amber-600 cursor-pointer">
                    {{ $article->title }}
                </a>
                <p class="mt-5 pl-5">
                    {{ mb_substr($article->content, 0, 100) . '...' }}
                </p>
            </div>
        @endforeach

        @if (blank($articles) && filled($searched))
            <div class="my-5 border-1 rounded-md p-5 text-center">
                Nothing found
            </div>
        @endif
    </div>
</div>
