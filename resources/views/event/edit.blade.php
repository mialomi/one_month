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




<div class="relative h-5 w-32 ...">
    <div class="absolute inset-x-0 top-0 h-16"></div>
  </div>
    <div class="max-w-2xl p-5 mx-auto border border-gray-200 rounded">  
      <h1 class="text-2xl font-medium text-center text-gray-700 ">Edit Event</h1>
      
      <form action="/event/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        <div class="mt-8 space-y-6">
    
          @csrf
          @method('PUT')
  
          <!-- BRAND NAME -->
  
          <div>
              <label for="brand_name" class="block mb-1 text-sm font-medium text-gray-700">Brand</label>
              <input name="brand_name" id="brand_name" class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500"
              value="{{ $event->brand->brand_name }}" readonly>
                
          </div>
             
      <!-- SEASON BLOCK -->
      <div>
        <label for="seasons_id" class="block mb-1 text-sm font-medium text-gray-700">Season</label>
        <select name="seasons_id" id="seasons_id" required class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
           <!--  <option value="" disabled selected>Select a season</option> -->
                    @foreach ($seasons as $season)
                      <option value="{{ $season->id }}" {{ (old('seasons_id') ?? $event->seasons_id) == $season->id ? 'selected' : '' }}> 
                {{ $season->name }}
            </option>
                    @endforeach
                </select>
                    @error('seasons_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
              </div>
    
    <!-- collection -->
    <div>
        <label for="collections_id" class="block mb-1 text-sm font-medium text-gray-700">Collection</label>
        <select name="collections_id" id="collections_id" required class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
            <!--<option value="" disabled selected>Select the collection</option> -->
            @foreach ($collections as $collection)
            <option value="{{ $collection->id }}" {{ (old('collections_id') ?? $event->collections_id) == $collection->id ? 'selected' : '' }}>
                {{ $collection->name}}</option>
          @endforeach
        </select>
          @error('collections_id')
              <div class="text-danger">{{ $message }}</div>
          @enderror
    </div>
        
        
      <!-- PICK DATE TIME -->   
          
          <div class= "form-group">
            <label for="date_time" class="block mb-1 text-sm font-medium text-gray-700">Date Time</label>
            <input type="datetime-local" id="date_time" name="date_time" required class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500"
            value="{{ $event->date_time}}">
            
          </div>
  
         
      <!-- PLACE BLOCK --> 
      
        <!-- online events? -->
          <div class="flex items-center form-group">
            
            <input type="checkbox" name="online_events" id="online_events" 
            @if ($event->online_events == 1)checked="checked"
            @endif
            value= "1" class="w-5 h-5 accent-pink-100">
            <label for="online_events" class="mt-2 ml-2 text-sm font-medium text-gray-700">Online Event</label>
          </div>
  
        
        <div>
          <label for="places_id" class="block mb-1 text-sm font-medium text-gray-700">City</label>
                <select name="places_id" id="places_id" required class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
                    @foreach($places as $place)
                        <option value="{{ $place->id }}"{{ $event->place == $place ? 'selected' : '' }}>
                        {{ $place->city }}
                        </option>
                    @endforeach
                </select>
                
              </div>
  
        <!-- placement -->
          <div>
            <label for="location" class="block mb-1 text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" id="location" class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" value=" {{ $event->location}}" />
          </div>
  
      <!-- COSTS BLOCK -->   
        <!-- costs --> 
          <div>
            <label for="spendings" class="block mb-1 text-sm font-medium text-gray-700">Spendings</label>
            <input type="text" name="spendings" id="spendings" class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" 
              @if ($event->money->spendings)
                value="{{ $event->money->spendings}}" 
              @endif
            placeholder="Spendings">
          </div>
        <!-- revenue -->
          <div>
            <label for="earnings" class="block mb-1 text-sm font-medium text-gray-700">Earnings</label>
            <input type="text" name="earnings" id="earnings" class="text-gray-700 bg-gray-100 border border-gray-200 rounded blocearnings focus:ring-blue-500 focus:border-blue-500"
              @if ($event->money->earnings)
              value="{{ $event->money->earnings }}"            
              @endif
            placeholder="Earnings" />
          </div>
     </div>
  
      <!-- ACTION BUTTONS -->
        <div class="mt-8 space-x-4">
  
          <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
         
          <a href="/event" class="px-4 py-2 text-gray-600 bg-white border border-gray-200 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
    
        </div>
      </form>
    </div>