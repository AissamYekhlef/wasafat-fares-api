<div>
    <table class="table-auto">
        <thead>
          <tr>
            <th>Dish ID</th>
            <th>Dish Name</th>
            <th>Category Name</th>
            <th>Picture</th>
            <th>Ingredient Number</th>
            <th>Preparation Steps Number</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($dishes as $dish)
              <tr>
                <td>{{ $dish->id }}</td>
                <td>{{ $dish->name }}</td>
                <td>{{ $dish->category?->name }}</td>
                <td> <a href="{{ $dish->pic_url() }}"> {{ $dish->picture_name }} </a></td>
                <td>{{ $dish->ingredients?->count() }}</td>
                <td>{{ $dish->preparation_steps->count() }}</td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>