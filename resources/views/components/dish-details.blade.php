<div class="mt-4">
    <h1 class="text-red-700"> {{ __('Dish Name')}} : {{ $dish->name }} </h1>
    <h3 class="text-red-700"> {{ __('Dish Picture')}} </h3>
    <div>
        <img src="{{ asset('storage/images/'. $dish->picture_name) }}" width="300" height="300" alt="picture name">
    </div>

    <div>
        <h3 class="text-red-700"> {{ __('Dish Description')}} :  </h3>
        <p> {{ $dish->description }} </p>
    </div>
    <div>
        <h2 class="text-red-700">{{ __('Ingredients')}}</h2>
        <ol>
            @if($dish->ingredients)
                @foreach ($dish->ingredients as $ingredient)
                    <li> {{ $ingredient->description }} </li>
                @endforeach              
            @endif
        </ol>
    </div>
    <div>
        <h2 class="text-red-700">{{ __('Preparation Steps')}}</h2>
        <ol>
            @if ($dish->preparation_steps)
                @foreach ($dish->preparation_steps as $step)
                    <li> {{ $step->description }} </li>
                @endforeach
            @endif
            
        </ol>
    </div>
    
</div>