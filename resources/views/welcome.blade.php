<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

  <div class="container">
    <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  <div class="grid grid-sm-cols-4 grid-sm-rows-4 gap-1">
    <div class="v-full box p-4 bg-slate-500"></div>
    <div class="v-full box-border p-4 bg-slate-500"></div>
    <div class="v-full box-border p-4 bg-slate-500"></div>
    <div class="v-full box-border p-4 bg-slate-500"></div>
    <div class="v-full box-border p-4 bg-slate-500"></div>
    <div class="v-full box-border p-4 bg-slate-500"></div>
    <div class="v-full box-border p-4 bg-slate-500"></div>
     </div>
  </div>
    </body>
</html>
