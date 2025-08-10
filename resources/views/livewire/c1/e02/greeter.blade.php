<div class="p-3">

    <h1>
        Actions
    </h1>

    <p class="my-5">
        Hello, {{ $name }}!!
    </p>

    <button class="bg-amber-600 text-white rounded p-3 cursor-pointer block my-5" wire:click="changeNameToAva()">
        change the name to the ava by wire:click=changeNameToAva()
    </button>
    <button class="bg-amber-600 text-white rounded p-3 cursor-pointer block my-5"
        wire:click="changeNameByArgument('Jayden')">
        changethe name to the ava by wire:click=changeNameByArgument('Jayden') static
    </button>


    <form wire:submit="changeNameByArgument(document.getElementById('name').value)">

        <p class="my-2">since we will learn wire:model in next episode, we handle submiting form like this</p>

        <p class="my-2">wire:submit="changeNameByArgument(document.getElementById('name').value)"</p>

        <input class="p-2 border rounded bg-gray-50 text-gray-800" id="name" placeholder="type the name">

        <button class="bg-amber-600 text-white rounded p-3 cursor-pointer block my-5">
            Submit
        </button>
    </form>

</div>
