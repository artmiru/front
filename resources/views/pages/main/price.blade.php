<div id="price" class="sm:container sm:mx-auto sm:w-10/12 text-center sm:pb-14">
    <h2 class="sm:text-5xl pb-3 text-2xl">СТОИМОСТЬ АБОНЕМЕНТОВ</h2>
    <h3 class="sm:text-3xl pb-2 text-xl">Срок действия абонемента 30 дней</h3>
    <p
        class="sm:text-xl leading-snug mb-5 flex flex-col space-x-1 sm:space-x-0 sm:flex sm:flex-none sm:flex-row sm:justify-center">
        <span>Пробное занятие по рисунку 300 р.,</span>
        <span>по акварели 500 р.</span>
        <span>(материалы на пробный урок предоставляются студией)</span>
    </p>
    <div class="grid sm:grid-cols-6 gap-3 text-2xl bg-gray-100 sm:bg-white py-3">
        @foreach ($coursePrices as $price)
            @if ($price->price >= 1100)
                <div class="rounded border py-2 shadow bg-white">
                    <h4>{{ $price->name }}</h4>
                    <div class="text-3xl">{{ $price->price }} <span class="text-gray-500">₽</span></div>
                </div>
            @endif
        @endforeach
    </div>
</div>
