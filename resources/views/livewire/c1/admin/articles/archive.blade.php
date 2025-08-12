<div>

    <table class="border-1">
        <thead>
            <th class="border-1 p-5">
                Title
            </th>
            <th class="border-1 p-5"></th>
        </thead>

        <tbody>
            @foreach ($articles as $article)
                <tr wire:key="{{ $article->id }}">
                    <td class="border-1 p-5">
                        {{ $article->id . '- ' . $article->title }}
                    </td>

                    <td class="border-1 p-5">
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
