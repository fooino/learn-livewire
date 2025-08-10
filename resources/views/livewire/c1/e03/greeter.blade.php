<div>

    @if (filled($name ?? ''))
        <p class="my-5">
            {{ $greeting }}, {{ $name }}{{ $symbol }}
        </p>
    @endif



    <p class="my-5">the input value bound to name and will update after any key press. wire:model.live="name"</p>

    <input wire:model.live="name" type="text" class="block bg-gray-50 text-gray-800 p-2 border-1 rounded"
        placeholder="type the name">

    <p class="my-5">the input value bound to name and will update after a delay. wire:model.live.debounce.500ms="name"
    </p>

    <input wire:model.live.debounce.500ms="name" type="text"
        class="block bg-gray-50 text-gray-800 p-2 border-1 rounded" placeholder="type the name">



    <form wire:submit="changeName()" class="my-10">

        <p class="my-5">the name and greeting bound with wire:model and we need a function like changeName for
            wire:submit</p>

        <p class="my-5">if the property has default value the option will be selected. like greeting. otherwise we must use wire:model.fill modifire. like symbol</p>

        <select wire:model="greeting" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">
            <option value="hello">hello</option>
            <option value="hi">hi</option>
            <option value="hey">hey</option>
            <option value="howdy">howdy</option>
        </select>

        <input wire:model="name" type="text" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded"
            placeholder="type the name">

        <select wire:model.fill="symbol" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">
            <option value=".">.</option>
            <option value="!">!</option>
            <option value="!!" selected>!!</option>
        </select>

        <button type="submit" class="inline-block p-2 bg-amber-600 text-gray-50 rounded">submit</button>

    </form>

</div>
