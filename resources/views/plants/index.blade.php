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
                  <th scope="col" class="py-3 px-6 border">PlantId</th>
                  <th scope="col" class="py-3 px-6 border">Planted By</th>
                  <th scope="col" class="py-3 px-6 border">Plant Name</th>
                  <th scope="col" class="py-3 px-6 border">Latitude</th>
                  <th scope="col" class="py-3 px-6 border">Longitude</th>
                  <th scope="col" class="py-3 px-6 border">Planted On</th>
                  <th scope="col" class="py-3 px-6 border">Image</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($plantCollection as $plant)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <td class="py-4 px-6 border">{{ $loop->iteration }}</td>
                  <td class="py-4 px-6 border">
                    <a class="text-blue-500 underline font-semibold" href="#">{{
                      $plant->id }}</a>
                  </td>
                  <td class="py-4 px-6 border">{{ $plant->user->name }}</td>
                  <td class="py-4 px-6 border">
                    {{ $plant->plant_name }}
                  </td>
                  <td class="py-4 px-6 border">{{ $plant->latitude }}</td>
                  <td class="py-4 px-6 border break-all">{{ $plant->longitude }}</td>
                  <td class="py-4 px-6 border">{{ $plant->created_at }}</td>
                  {{-- <td class="py-4 px-6 border">{{ $complaint->photo }}</td> --}}
                  <td class="py-4 px-6 border">
                    <a href="{{ asset('storage/images/plantcollection/') . '/' . $plant->photo }}" target="__blank"><img
                        class="object-fit h-10 w-10"
                        src="{{ asset('storage/images/plantcollection/') . '/' . $plant->photo }}">
                    </a>
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
          {{ $plantCollection->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>