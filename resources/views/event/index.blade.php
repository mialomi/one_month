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
    
            <div id="message-container">
                @if(Session::has('message'))
            
                <div id="dash_message" class="alert alert-success opacity-60" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>    
  
  
    <div class= "m-4">
  
        <a href="event/create" class=" border px-4 py-2 rounded-lg text-base font-normal text-gray-600 hover:bg-blue-200 hover:text-blue-700">Create</a>
    </div>
  
    <div class="mx-20 flex flex-col space-y-2">
  
      @foreach ($event as $event)
  
    <table class="w-5/6">
      <tbody>
        
        <tr>
          <td colspan="2" class="border-t-2 text-7xl font-semibold tracking-wide  text-gray-700">{{ $event->brand->brand_name }}</td>
        </tr>
        <tr>
          <td colspan="2" class="mb-3 pl-2 text-base italic font-normal tracking-wide text-gray-500">{{ $event->season->collection }}</td>
        </tr>
        <tr>
          <td colspan="2" class="mb-3 pl-2 text-base italic font-normal tracking-wide text-gray-500">{{ $event->season->season }}</td>
        </tr>
        <tr>
          <td class="pl-2 text-base font-light text-gray-500">
            <i class="fas fa-circle fa-xs text-pink-200 mr-2"></i>
            {{ \Carbon\Carbon::parse($event->date_time)->format('H:i') }} h
            <span class="ml-3">{{ \Carbon\Carbon::parse($event->date_time)->format('d-m-Y') }}</span>
          </td>

          <td rowspan="2" class="space-y-2 text-end">
            <form action="{{ route('event.destroy', $event->id) }}" method="POST">
              @csrf
              <a href="{{ route('event.show', $event->id) }}" class="border px-3 py-1 rounded-lg text-gray-500 hover:bg-blue-200 hover:text-blue-700">Info</a>
              <a href="{{ route('event.edit', $event->id) }}" class="border px-3 py-1 rounded-lg text-gray-500 hover:bg-blue-200 hover:text-blue-700">Edit</a>
              @method('DELETE')
              <button type="submit" class="border px-3 py-0.5 rounded-lg text-gray-500 hover:bg-red-200 hover:text-red-700" onclick="return confirm('Are you sure you want to delete this show?')">Delete</button>
            </form>
          </td>

        </tr>
        <tr>
          <td class=" pl-2 text-base text-gray-500">
            @if ($event->online_events)
              <span class=" mr-3 italic">Online Show</span>
            @endif
            <span class="font-normal">{{ $event->place->city }} </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </html>