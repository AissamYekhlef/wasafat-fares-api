<div>
    <ul>
        @foreach ($categories as $category)
            <li> category id : {{ $category->id }} Name : {{ $category->name }} </li>
        @endforeach 
    </ul>
    
</div>