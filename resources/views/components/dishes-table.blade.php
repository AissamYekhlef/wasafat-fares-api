<div>
    <table class="w-full whitespace-nowrap">
        <thead>
          <tr class="text-left font-bold">
            <th class="border px-3 py-2">Dish ID</th>
            <th class="border px-3 py-2">Dish Name</th>
            <th class="border px-3 py-2">Category Name</th>
            <th class="border px-3 py-2">Ingredient Number</th>
            <th class="border px-3 py-2">Preparation Steps Number</th>
            <th class="border px-3 py-2 max-w-5">Picture</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($dishes as $dish)
              <tr>
                <td class="border px-3 py-2">{{ $dish->id }}</td>
                <td class="border px-3 py-2">{{ $dish->name }}</td>
                <td class="border px-3 py-2">{{ $dish->category?->name }}</td>
                <td class="border px-3 py-2">{{ $dish->ingredients?->count() }}</td>
                <td class="border px-3 py-2">{{ $dish->preparation_steps->count() }}</td>
                <td class="border px-3 py-2 max-w-5"> <a href="{{ $dish->pic_url() }}"> {{ $dish->name }} - Pic </a></td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>