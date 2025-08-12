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

        <div class="my-5">
            <label class="flex items-center">
                <input wire:model.boolean="form.published" type="radio" value="true" name="published"
                    class="mr-2">
                Published
            </label>
            <label class="flex items-center">
                <input wire:model.boolean="form.published" type="radio" value="false" name="published"
                    class="mr-2">
                Not Published
            </label>
        </div>

        <p>notifications Options</p>
        <div class="my-5 flex gap-6">
            <label class="flex items-center">
                <input wire:model="form.notifications" type="checkbox" name="notifications1" value="email" class="mr-2">
                Email
            </label>
            <label class="flex items-center">
                <input wire:model="form.notifications" type="checkbox" name="notifications2" value="sms" class="mr-2">
                SMS
            </label>
            <label class="flex items-center">
                <input wire:model="form.notifications" type="checkbox" name="notifications3" value="firebase" class="mr-2">
                firebase
            </label>
        </div>


        <button type="submit" class="p-4 bg-amber-600 w-1/2 rounded cursor-pointer">
            Submit
        </button>




    </form>

</div>
