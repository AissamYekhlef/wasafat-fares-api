<form class="w-full" method="POST" action="{{ route('dishes') }}">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                {{ __('Dish Name')}}
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            name="name" id="grid-last-name" type="text" placeholder="Doe">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                {{ __('Category') }}
            </label>
            <div class="relative">
                <select name="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>

        <div class="w-full px-3"> 
            <label class="block">
                <span class="text-gray-700"> {{ __('Description') }} </span>
                <textarea class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" 
                name="description" rows="5" placeholder="{{ __('Enter description here')}}"></textarea>
            </label>
        </div>

        <div class="w-full md:w-1/2 px-3" id="ingredient_input">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                {{ __('Add Ingredients')}}
            </label>
            <div class="flex">
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 md:w-5/6" 
                name="ingredients[]" id="grid-last-name" type="text" placeholder="Doe">
                <button onclick="add_ingredient_input()" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded md:w-1/6" type="button">
                    +
                </button> 
            </div>
            
        </div>
        <div class="w-full md:w-1/2 px-3" id="preparation_steps_input">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                {{ __('Add Preparation Steps')}}
            </label>
            <div class="flex">
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 md:w-5/6"
                name="preparation_steps[]" id="grid-last-name" type="text" placeholder="Doe">
                <button onclick="add_preparation_steps_input()" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded md:w-1/6" type="button">
                    +
                </button> 
            </div>
            
        </div> 
            
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ __('Add') }}
                </button>
            </div>
        </div> 

    </div>
</form>

@section('scripts')
<script>

    console.log("from console");
var add_ingredient_input = function(){

    var ingredient_input = document.createElement('input');
    ingredient_input.classList.add("appearance-none", "block", "w-full", "bg-gray-200", "text-gray-700", "border", "border-gray-200", "rounded", "py-3", "px-4", "leading-tight", "focus:outline-none", "focus:bg-white", "focus:border-gray-500", "my-1");
    ingredient_input.setAttribute("name", "ingredients[]");
    document.getElementById('ingredient_input').appendChild(ingredient_input);
  };

var add_preparation_steps_input = function(){

    var ingredient_input = document.createElement('input');
    ingredient_input.classList.add("appearance-none", "block", "w-full", "bg-gray-200", "text-gray-700", "border", "border-gray-200", "rounded", "py-3", "px-4", "leading-tight", "focus:outline-none", "focus:bg-white", "focus:border-gray-500", "my-1");
    ingredient_input.setAttribute("name", "preparation_steps[]");
    document.getElementById('preparation_steps_input').appendChild(ingredient_input);
};
  
</script>

@endsection