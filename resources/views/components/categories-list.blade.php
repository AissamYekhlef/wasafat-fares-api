<div>
    <ul>
        @foreach ($categories as $category)
            <li> {{ __('Category ID') }} : {{ $category->id }} {{ __('Name') }} : {{ $category->name }} </li>
        @endforeach 
    </ul>
    
</div>