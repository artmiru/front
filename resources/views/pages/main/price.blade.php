<section id="price" class="pt-2 sm:pb-10">
    <div class="sm:container sm:mx-auto sm:w-10/12 text-center">
        <h2 class="sm:text-5xl pb-3 text-2xl">СТОИМОСТЬ АБОНЕМЕНТОВ</h2>
        <h3 class="sm:text-3xl pb-2 text-xl">Срок действия абонемента 30 дней</h3>
        <p
            class="sm:text-xl leading-snug mb-5 flex flex-col space-x-1 sm:space-x-0 sm:flex sm:flex-none sm:flex-row sm:justify-center">
            <span>Пробное занятие по рисунку 300 р.,</span>
            <span>по акварели 500 р.</span>
            <span>(материалы на пробный урок предоставляются студией)</span>
        </p>
        <div class="flex fllex-col space-y-3 sm:flex-row sm:space-x-5  sm:justify-center sm:items-end">
            @foreach ($coursePrices as $price)
                @if ($price->price >= 1100)
                    <div class="sm:text-2xl rounded-lg border-2 py-2 px-6 bg-white text-center">
                        <h4>{{ $price->name }}</h4>
                        <div class="text-3xl flex space-x-2 justify-center">
                            <span>{{ $price->price }}</span>
                            <span class="text-gray-500">₽</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
