<div class="w-[100%] mb-10">
    <div class="w-[75%]">
        <input wire:model.live.debounce.1000ms='searched' type="search"
            class="p-2 inline-block bg-gray-50 text-gray-800 rounded-md w-[85%]" placeholder="Search in articles">

        <button type="button" wire:click='clear()' @disabled(blank($searched))
            class='p-2 text-white rounded-md bg-amber-600 disabled:bg-gray-400 w-[10%]'>Clear</button>

            
        <livewire:c1.article.search-result :articles="$articles" :searched="$searched">
    </div>
</div>
