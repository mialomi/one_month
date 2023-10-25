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
      
    <div class="max-w-md p-8 mx-auto border border-gray-200 rounded"> 
        <h1 class="text-2xl font-medium">Create New Event</h1>
        
        <form action="/event" method="POST">
          @csrf
          <div class="mt-8 space-y-6"> 
              
              <span class="text-sm">Your Brand is not here? <span>
                <a href="{{ route ('brand.create') }}" class="text-blue-500 hover:underline" >Register it first! </a>
                  
             
      
              <!-- BRAND NAME OK-->
      
                <div>
                <label for="brands_id" class="block mt-3 mb-1 text-sm font-medium text-gray-700">Brand</label>
                      <select name="brands_id" id="brands_id" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
                          <option value="" disabled selected>Select a brand</option>
                          @foreach($brands as $brand)
                              <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                          @endforeach
                      </select>
                      @error('brands_id')
                            <div class="text-danger">{{ $message }}</div>
                      @enderror
                  </div>
                 
          <!-- SEASON BLOCK -->
              <!-- season -->
              <div>
                <label for="seasons_id" class="block mt-3 mb-1 text-sm font-medium text-gray-700">Season</label>
                <select name="seasons_id" id="seasons_id" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled selected>Select a season</option>
                    @foreach ($seasons as $season)
                      <option value="{{ $season->id }}">{{ $season->name}}</option>
                    @endforeach
                </select>
                    @error('seasons_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
              </div>
              
              <!-- collection -->
            <div>
                <label for="collections_id" class="block mt-3 mb-1 text-sm font-medium text-gray-700">Collection</label>
                  <select name="collections_id" id="collections_id" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
                      <option value="" disabled selected>Select the collection</option>
                      @foreach ($collections as $collection)
                      <option value="{{ $collection->id }}">{{ $collection->name}}</option>
                    @endforeach
                </select>
                    @error('collections_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
              </div>
                  </select>
              
            
      
          <!-- PICK DATE TIME -->   
              
              <div class= "form-group">
                <label for="date_time" class="block mt-3 mb-1 text-sm font-medium text-gray-700">Date Time</label>
                <input type="datetime-local" id="date_time" name="date_time" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
                    @error('date_time')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
              </div>
      
             
          <!-- PLACE BLOCK --> 
          
            <!-- online events? -->
              <div class="flex items-center form-group">
                <input type="checkbox" name="online_events" id="online_events" value="1" class="w-5 h-5 accent-pink-100">
                <label for="online_events" class="mt-2 ml-2 text-sm font-medium text-gray-700">Online Event</label>
              </div>
      
            <!-- city -->
            <div>
              <label for="places_id" class="block mt-3 mb-1 text-sm font-medium text-gray-700">City</label>
                    <select name="places_id" id="places_id" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500">
                        <option value="" disabled selected>Select a city</option>
                        @foreach($places as $place)
                            <option value="{{ $place->id }}">{{ $place->city }}</option>
                        @endforeach
                    </select>
                        @error('places_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                  </div>
            <!-- Location -->
              <div>
                <label for="location" class="block mt-3 mb-1 text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="location" id="location" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="Enter the placement" value="{{ old('location') }}" />
                   
            </div>
      
          <!-- COSTS BLOCK -->   
            <!-- costs --> 
              <div>
                <label for="spendings" class="block mt-3 mb-1 text-sm font-medium text-gray-700">Spendings</label>
                <input type="text" name="spendings" id="spendings" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="spendings" value="{{ old('spendings') }}"/>
              </div>
            <!-- revenue -->
              <div>
                <label for="earnings" class="block mt-3 mb-1 text-sm font-medium text-gray-700">Earnings</label>
                <input type="text" name="earnings" id="earnings" class="block w-full px-3 py-2 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="earnings" value="{{ old('earnings') }}"/>
              </div>
         </div>
      
      
            <div class="mt-8 space-x-4">
      
              <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
             
              <a href="/event" class="px-4 py-2 text-gray-600 bg-white border border-gray-200 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
        
            </div>
          
    
            
            </div>
        </form>
    </div>

</html>    