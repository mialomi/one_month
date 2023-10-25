<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>Fashion Schedule</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<div class="w-full p-4 mx-auto sm:w-3/4 lg:w-2/3">
    <table class="w-full mt-5 table-auto">
      <tbody>
        <tr>
          <td class="px-4 py-3 text-5xl font-semibold tracking-wide text-gray-800">{{ $event->brand->brand_name}}</td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-base font-light tracking-wide text-gray-600">{{ $event->season->name}}</td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-base font-light tracking-wide text-gray-600">{{ $event->collection->name}}</td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-sm italic font-light tracking-wide text-gray-600">
            {{ \Carbon\Carbon::parse($event->date_time)->format('H:i') }}
            <span class="ml-3">{{ \Carbon\Carbon::parse($event->date_time)->format('d-m-Y') }}</span></td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-sm italic font-light tracking-wide text-gray-600">
            @if ($event->online_events)
                <span class="mr-3">Online Show</span>
            @else
            <span>{{ $event->placement }}</span>
            @endif

        </td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-sm font-light tracking-wide text-gray-600">{{ $event->place->city}}</td>
        </tr>
        <tr>
          <td class="px-4 py-2 text-sm font-light tracking-wide text-gray-600 ">
            @if (!is_null($event->money->earnings) && !is_null($event->money->earnings))
                    <p>Spendings: {{ $event->money->spendings }} €</p>
                    <p>Earnings: {{ $event->money->earnings }} €</p>
                @else
                    <p>No costs and revenue data available.</p>
                @endif
        </td>
        </tr>
        <tr>
            <td class="flex justify-center space-x-4">
              <form action="" method="POST">
                @csrf
                <a href="/event" class="px-3 py-2 border">Back</a>
                <a href="{{ route('event.edit', $event->id)}}" class="px-3 py-2 border">Edit</a>
                @method('DELETE')
                <button type="submit" class="px-3 py-2 border">Delete</button>
              </form>
            </td>
          </tr>
      </tbody>
    </table>
  </div>