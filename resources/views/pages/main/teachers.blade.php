<div id="teachers" class="bg-stone-50 pt-12 pb-10 border-y">
    <div class="sm:container sm:mx-auto sm:w-10/12">
        <h2 class="text-center text-4xl sm:text-5xl pb-0 mb-3">НАШИ ПРЕПОДАВАТЕЛИ</h2>
        <h3 class="text-center text-2xl pb-10">ВСЕ ПРЕПОДАВАТЕЛИ ИМЕЮТ ВЫСШЕЕ ХУДОЖЕСТВЕННОЕ ОБРАЗОВАНИЕ</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 sm:gap-3">
            @foreach ($teachers as $teacher)
                <div class="bg-white sm:rounded sm:border border-y shadow-lg flex flex-col sm:flex-row">
                    <img class="sm:rounded-l w-full sm:w-48 sm:h-48 object-cover"
                        src="img/teachers/{{ $teacher->user->id }}/01_t.jpg"
                        alt="{{ $teacher->user->name }} {{ $teacher->user->last_name }}">
                    <div class="flex flex-col justify-between p-2 flex-grow">
                        <div>
                            <h4 class="text-2xl mb-2">{{ $teacher->user->name }} {{ $teacher->user->last_name }}</h4>
                            <p class="line-clamp-3 mb-5 sm:mb-2 ">{{ $teacher->bio }}</p>
                        </div>
                        <button
                            class="mt-auto rounded px-4 py-3 text-white bg-blue-500 hover:bg-blue-700 hover:text-white sm:w-1/2 self-end mb-3 w-full sm:py-1 sm:mb-0 sm:bg-transparent sm:text-blue-500 sm:border sm:border-blue-500">
                            Подробнее
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- 
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
</div> --}}
