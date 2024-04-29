<div class="bg-gray-100 py-12">
    <div class="container mx-auto w-10/12">
        <h2 class="text-center text-5xl pb-0 mb-3">НАШИ ПРЕПОДАВАТЕЛИ</h2>
        <h3 class="text-center text-2xl pb-10">ВСЕ ПРЕПОДАВАТЕЛИ ИМЕЮТ ВЫСШЕЕ ХУДОЖЕСТВЕННОЕ ОБРАЗОВАНИЕ</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            @foreach ($teachers as $teacher)
                <div class="bg-white flex flex-col justify-between h-full rounded border">
                    <div class="flex flex-row space-x-4">
                        <img class="border-r rounded-l w-48 h-48 object-cover" src="img/teachers/{{ $teacher->user->id }}/01_t.jpg"
                            alt="{{ $teacher->user->name }} {{ $teacher->user->last_name }}">
                        <div class="h-full flex flex-col py-2 pr-2">
                            <h4 class="font-bold text-2xl mb-2">{{ $teacher->user->name }}
                                {{ $teacher->user->last_name }}</h4>
                            <p class="line-clamp-3">{{ $teacher->bio }}</p>
                            <button class="rounded px-4 py-2 bg-gray-200 self-end mt-auto hover:text-white hover:bg-gray-400">Подробнее</button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>


<!-- Modal backdrop -->
<div class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full" id="my-modal"></div>

<!-- Modal -->
<div class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg shadow-lg p-8 m-4 max-w-xl w-full" id="my-modal">
  <!-- Modal header -->
  <div class="flex justify-between items-center mb-4">
    <h4 class="text-lg font-bold">Modal Title</h4>
    <button class="text-gray-700 font-bold" onclick="closeModal()">×</button>
  </div>
  <!-- Modal body -->
  <div class="mb-4">
    <p>Modal content goes here...</p>
  </div>
  <!-- Modal footer -->
  <div class="flex justify-end">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="closeModal()">Close</button>
  </div>
</div>
