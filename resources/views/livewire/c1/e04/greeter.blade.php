<div>

    <h1>Validation</h1>

    @if (filled($message ?? ''))
        <p class="my-5">
            {{ $message }}
        </p>
    @endif

    <form wire:submit="changeMessage1()" class="my-10">
        <p class="my-5">Method one</p>

        <select wire:model="greeting" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">
            <option value="hello">hello</option>
            <option value="hi">hi</option>
            <option value="hey">hey</option>
            <option value="howdy">howdy</option>
        </select>

        <input wire:model="name" type="text" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded"
            placeholder="type the name">

        <select wire:model="symbol" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">
            <option value=".">.</option>
            <option value="!">!</option>
            <option value="!!">!!</option>
        </select>

        <button type="submit" class="inline-block p-2 bg-amber-700 text-gray-50 rounded">submit</button>

    </form>

    <form wire:submit="changeMessage2()" class="my-10">
        <p class="my-5">Method two - using separate rules method and use Validate livewire attribute(for testing set symbol to !!)</p>

        <select wire:model="greeting" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">
            <option value="hello">hello</option>
            <option value="hi">hi</option>
            <option value="hey">hey</option>
            <option value="howdy">howdy</option>
        </select>

        <input wire:model="name" type="text" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded"
            placeholder="type the name">

        <select wire:model="symbol" class="inline-block bg-gray-50 text-gray-800 p-2 border-1 rounded">
            <option value=".">.</option>
            <option value="!">!</option>
            <option value="!!">!!</option>
        </select>

        <button type="submit" class="inline-block p-2 bg-amber-700 text-gray-50 rounded">submit</button>

    </form>


    @if ($errors->any())

    <ul class="p-3 bg-red-500 text-white">
        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>
            
        @endforeach
    </ul>
        
    @endif

</div>
