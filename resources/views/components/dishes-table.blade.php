<div>
    <table class="w-full whitespace-nowrap">
        <thead>
          <tr class="text-center font-bold">
            <th class="border px-3 py-2">{{ __('Dish ID') }}</th>
            <th class="border px-3 py-2">{{ __('Dish Name') }}</th>
            <th class="border px-3 py-2">{{ __('Category Name') }}</th>
            <th class="border px-3 py-2">{{ __('Ingredient Number') }}</th>
            <th class="border px-3 py-2">{{ __('Preparation Steps Number') }}</th>
            {{-- <th class="border px-3 py-2 max-w-5">{{ __('Picture') }}</th> --}}
            <th class="border px-6 py-4">{{ __('Action')}}</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($dishes as $dish)
              <tr>
                <td class="border px-3 py-2">{{ $dish->id }}</td>
              <td class="border px-3 py-2"><a href="{{ route('dishes.show', $dish->id) }}"> {{ $dish->name }} </a></td>
                <td class="border px-3 py-2">{{ $dish->category?->name }}</td>
                <td class="border px-3 py-2">{{ $dish->ingredients?->count() }}</td>
                <td class="border px-3 py-2">{{ $dish->preparation_steps->count() }}</td>
                {{-- <td class="border px-3 py-2 max-w-5"> <a href="{{ $dish->pic_url() }}"> {{ $dish->name }} - Pic </a></td> --}}
                <td class="border px-6 py-4"><a href="{{ route('dishes.show', $dish->id) }}"
                  class="text-red-700"
                  >{{ __('Edit') }}</a></td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>