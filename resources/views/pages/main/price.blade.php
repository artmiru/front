<section id="price" class="pt-2 pb-5 sm:pb-10">
    <div class="container mx-auto w-full sm:w-10/12 text-center px-4">
        <h2 class="text-2xl sm:text-5xl pb-3">СТОИМОСТЬ АБОНЕМЕНТОВ</h2>
        <h3 class="text-xl sm:text-3xl pb-2">Срок действия абонемента 30 дней</h3>
        <p class="text-base sm:text-xl leading-snug mb-5 flex flex-col space-y-1 sm:space-y-0 sm:flex-row sm:justify-center">
            <span>Пробное занятие по рисунку 300 р.,</span>
            <span>по акварели 500 р.</span>
            <span>(материалы на пробный урок предоставляются студией)</span>
        </p>
        <div class="flex flex-col space-y-3 sm:flex-row sm:space-x-5 justify-center items-center">
            @foreach ($coursePrices as $price)
                @if ($price->price >= 1100)
                    <div class="text-xl sm:text-2xl rounded-lg border-2 py-2 px-4 sm:px-6 bg-white text-center">
                        <h4>{{ $price->name }}</h4>
                        <div class="text-2xl sm:text-3xl flex space-x-2 justify-center">
                            <span>{{ $price->price }}</span>
                            <span class="text-gray-500">₽</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
