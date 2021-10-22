<div>
    <table class="table-auto">
        <thead>
          <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Picture</th>
            <th>Dishes Number</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
              <tr>
                <td>{{ $category ->id }}</td>
                <td>{{ $category ->name }}</td>
                <td> <a href="{{ $category->pic_url() }}"> {{ $category ->picture_name }} </a></td>
                <td>{{ $category ->dishes->count() }}</td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>