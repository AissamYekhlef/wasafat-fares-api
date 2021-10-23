<div>
    <h1> Dish Name : {{ $dish->name }} </h1>
    <h3> Dish Picture </h3>
    <div>
        <img src="{{ asset('storage/images/'. $dish->picture_name) }}" alt="picture name">
    </div>

    <div>
        <h3> Dish Description :  </h3>
        <p> {{ $dish->description }} </p>
    </div>
    <div>
        <h2>Ingredients</h2>
        <ol>
            @if($dish->ingredients)
                @foreach ($dish->ingredients as $ingredient)
                    <li> {{ $ingredient->description }} </li>
                @endforeach              
            @endif
        </ol>
    </div>
    <div>
        <h2>Preparation Steps</h2>
        <ol>
            @if ($dish->preparation_steps)
                @foreach ($dish->preparation_steps as $step)
                    <li> {{ $step->description }} </li>
                @endforeach
            @endif
            
        </ol>
    </div>
    
</div>