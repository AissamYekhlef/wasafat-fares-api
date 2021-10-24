<div class="mt-4">
    <h1 class="text-red-700"> {{ __('Category Name')}} : {{ $category->name }} </h1>
    <h3 class="text-red-700"> {{ __('Category Picture')}} </h3>
    <div>
        <img src="{{ asset('storage/images/'. $category->picture_name) }}" alt="category name">
    </div>

</div>
