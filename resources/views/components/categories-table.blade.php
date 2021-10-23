<div>
    <table class="w-full whitespace-nowrap">
        <thead>
          <tr class="text-left font-bold">
            <th class="border px-6 py-4">Category ID</th>
            <th class="border px-6 py-4">Category Name</th>
            <th class="border px-6 py-4">Picture</th>
            <th class="border px-6 py-4">Dishes Number</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
              <tr>
                <td class="border px-6 py-4">{{ $category ->id }}</td>
                <td class="border px-6 py-4">{{ $category ->name }}</td>
                <td class="border px-6 py-4"> <a href="{{ $category->pic_url() }}"> {{ $category ->picture_name }} </a></td>
                <td class="border px-6 py-4">{{ $category ->dishes->count() }}</td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>