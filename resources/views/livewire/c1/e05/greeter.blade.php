<div>

    <h1>Life cycle hooks</h1>

    <p class="my-5">
        The mount function is like load in js or __construct in php and run once in every cycle
        <br/>
        The mount counter: {{ $mountCounter }}
    </p>

    @if (filled($message ?? ''))
        <p class="my-5">
            {{ $message }}
        </p>
    @endif

    <select wire:model.change="greeting" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">

        @foreach ($greetings ?? [] as $item)
            <option value="{{ $item->name }}">{{ $item->name }}</option>
        @endforeach
    </select>

    <input wire:model.live.debounce.500ms="name" type="text"
        class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded" placeholder="type the name">

    <select wire:model.change="symbol" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">
        <option value=".">.</option>
        <option value="!">!</option>
        <option value="!!">!!</option>
    </select>
</div>
