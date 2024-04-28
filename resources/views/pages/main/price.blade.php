<div id="price" class="sm:container sm:mx-auto sm:w-10/12 text-center mb-8">
        <h2 class="text-5xl pb-3">СТОИМОСТЬ АБОНЕМЕНТОВ</h2>
        <h3 class="text-3xl pb-2">Срок действия абонемента 30 дней</h3>
        <h5 class="text-xl leading-snug mb-5">Пробное занятие по рисунку 300 р., по акварели 500 р. <small class="block text-base">(материалы на пробный урок предоставляются студией)</small>
        </h5>
        <div class="grid grid-cols-6 gap-3 text-2xl">
            @foreach ($coursePrices as $price)
                @if ($price->price >= 1100)
                        <div class="rounded border py-2 shadow">
                            <h4>{{ $price->name }}</h4>
                            <div>{{ $price->price }} <span class="text-gray-500">₽</span></div>
                        </div>
                @endif
            @endforeach
        </div>
</div>