<div>

    @include('components.layouts.c1.admin.errors')

    <form wire:submit="save">


        <div class="my-5">
            <label class="block mb-1">Title</label>
            <input wire:model='form.title' name="title" class="p-3 bg-gray-50 text-gray-800 rounded w-1/2">
        </div>

        <div class="my-5">
            <label class="block mb-1">Content</label>
            <textarea wire:model='form.content' name="content" class="p-3 bg-gray-50 text-gray-800 rounded w-1/2"></textarea>
        </div>


        <button type="submit" class="p-4 bg-amber-600 w-1/2 rounded cursor-pointer">
            Submit
        </button>




    </form>

</div>
