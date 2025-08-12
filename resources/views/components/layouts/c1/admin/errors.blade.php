@if ($errors->any())
<ul class="mt-5 bg-red-500">
    @foreach ($errors->all() as $error)
        <li class="p-5">
            {{ $error }}
        </li>
    @endforeach
</ul>
@endif