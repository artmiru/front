 <section id="courses" class="shadow bg-stone-50 pt-12 pb-10 text-center">
     <div class="container mx-auto w-full sm:w-10/12">
         <h1 class="text-2xl sm:text-6xl mb-2 sm:mb-4">ХУДОЖЕСТВЕННЫЕ КУРСЫ</h1>
         <h2 class="text-xl sm:text-2xl text-gray-400 mb-2 sm:mb-9">ВЫ МОЖЕТЕ ЗАПИСАТЬСЯ НА ЛЮБОЙ ИЗ ЭТИХ КУРСОВ</h2>
         <div class="grid gap-6 sm:grid-cols-3">
             @foreach ($courses as $course)
                 <div
                     class="flex flex-col justify-between border bg-white shadow-lg rounded-none sm:rounded-lg overflow-hidden pb-3 sm:pb-0">
                     <div>
                         <h3 class="text-2xl my-3">{{ $course['title'] }}</h3>
                         <img class="mx-auto w-full h-auto rounded-b" src="{{ $course['img'] }}"
                             alt="{{ $course['title'] }}">
                         <p class="mx-4 my-2 text-left">{{ $course['description'] }}</p>
                     </div>
                     <div class="py-1 sm:py-2 sm:bg-stone-50 sm:border-t">
                         <button
                             class="mx-auto w-3/4 sm:w-auto rounded border border-red-500 bg-white px-8 py-1 text-red-500 hover:bg-red-500 hover:text-white my-5 sm:my-1">Подробнее</button>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </section>
