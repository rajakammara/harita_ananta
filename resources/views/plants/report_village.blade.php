<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class="">
            <table class="table-auto ">
              <thead class="text-xs text-gray-700 uppercase bg-gray-300 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="py-3 px-6 border">Sl.No.</th>
                  <th scope="col" class="py-3 px-6 border">Village</th>
                  <th scope="col" class="py-3 px-6 border">Total Adopted Plants</th>

                </tr>
              </thead>
              <tbody>
                @forelse ($plantcount as $plant)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="py-4 px-6 border">{{ $loop->iteration }}</td>
                  <td class="py-4 px-6 border">{{ $plant->village }}</td>
                  <td class="py-4 px-6 border">
                    {{ $plant->total_plants }}
                  </td>

                </tr>
                @empty
                <tr>
                  <td colspan="7">No Records to Display</td>

                </tr>
                @endforelse
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>