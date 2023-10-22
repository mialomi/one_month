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
    <h1 class="text-2xl font-medium">Create New Brand</h1>
    
    <form action="/brand" method="POST" enctype="multipart/form-data">
      <div class="mt-8 space-y-6">
  
        @csrf
        
        <div>
          <label for="brand_name" class="block mb-1 text-sm font-medium text-gray-700">Name Brand</label>
          <input type="text" name="brand_name" id="brand_name" class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="Enter name brand" value="{{ old('brand_name') }}" />
          @error('brand_name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
                </div>
        <div>
          <label for="creative_director" class="block mb-1 text-sm font-medium text-gray-700">Creative Director</label>
          <input type="text" name="creative_director" id="creative_director" class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="Enter creative director" value="{{ old('creative_director') }}" />
            @error('creative_director')
            <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div>
          <label for="headquarters" class="block mb-1 text-sm font-medium text-gray-700">Headquarters</label>
          <input type="text" name="headquarters" id="headquarters"  class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="headquarters" value="{{ old('headquarters') }}"/>
            @error('headquarters')
            <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div>
          <label for="established_year" class="block mb-1 text-sm font-medium text-gray-700">Foundation Year</label>
          <input type="text" name="established_year" id="established_year" class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="Foundation year" value="{{ old('established_year') }}" />
            @error('established_year')
            <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div>
          <label for="website" class="block mb-1 text-sm font-medium text-gray-700">Website</label>
          <input type="text" name="website" id="website"  class="block w-full px-3 py-1 text-gray-700 bg-gray-100 border border-gray-200 rounded focus:ring-blue-500 focus:border-blue-500" placeholder="Url" value="{{ old('website') }}"/>
            @error('website')
            <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        
       
      
      </div>
      <div class="mt-8 space-x-4">
        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
        <!-- Secondary -->
        <a href="/brand" class="px-4 py-2 text-gray-600 bg-white border border-gray-200 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
  
      </div>
    </form>
  </div>
  <div class="relative h-5 w-32 ...">
    <div class="absolute inset-x-0 top-0 h-16"></div>
  </div>