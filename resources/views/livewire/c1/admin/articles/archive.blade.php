<div>

    <a wire:navigate href="{{ route('c1.admin.articles.create') }}" class="p-4 rounded bg-amber-600 my-5 inline-block">
        Create Article
    </a>
    <table class="border-1 w-full">
        <thead>
            <th class="border-1 p-5">
                Title
            </th>
            <th class="border-1 p-5">
                Dates
            </th>
            <th class="border-1 p-5">
                Tools
            </th>
        </thead>

        <tbody>
            @foreach ($articles as $article)
                <tr wire:key="{{ $article->id }}">
                    <td class="border-1 p-5">
                        {{ $article->id . '- ' . $article->title }}
                    </td>

                    <td class="border-1 p-5">
                        created at: {{ $article->created_at }} <br />
                        updated at: {{ $article->updated_at }}
                    </td>

                    <td class="border-1 p-5">

                        <a wire:navigate href="{{ route('c1.admin.articles.edit', $article) }}"
                            class="p-4 mx-2 bg-amber-600 rounded cursor-pointer">
                            Edit
                        </a>
                        <button type="button" wire:click="delete({{ $article->id }})"
                            wire:confirm="Are you sure to delete '{{ $article->title }}' ?"
                            class="p-3 bg-red-500 rounded cursor-pointer">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
