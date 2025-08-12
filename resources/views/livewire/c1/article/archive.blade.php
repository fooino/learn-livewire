<div>
    @foreach ($articles as $article)
        <div wire:key="{{ $article->id }}" class="my-5 border-1 rounded-md p-5">

            <p class="hover:text-amber-500 text-amber-600">
                <a wire:navigate
                    href="{{ route('c1.articles.show', $article) }}">{{ $article->id . '- ' . $article->title }}</a>
            </p>

            <p class="mt-5 pl-5">
                {{ str($article->content)->limit(100) }}
            </p>

        </div>
    @endforeach
</div>
