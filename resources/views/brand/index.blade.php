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
    


  </body>
  <div id="message-container">
    @if(Session::has('message'))

    <div id="dash_message" class="alert alert-success opacity-60" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif
</div>    


<a href="brand/create" class="px-4 py-2 text-base font-normal text-gray-600 border rounded-lg hover:bg-blue-200 hover:text-blue-700">Create</a>

 
<div class="container mx-auto mt-4">



<table class="table w-5/6 table-striped">
    <thead>
      <tr>
        <th scope="col" style="display: none;">id</th>
        <th scope="col">Brand</th>
        <th scope="col">Creative Director</th>
        <th scope="col">Headquarters</th>
        <th scope="col">Foundation year</th>
        <th scope="col">Website</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($brands as $brand)
            
        
      <tr>
        
        <td style="display: none;">{{ $brand->id}} </td>
        <td>{{ $brand->brand_name}} </td>
        <td>{{ $brand->creative_director}} </td>
        <td>{{ $brand->headquarters}} </td>
        <td>{{ $brand->established_year}} </td>
        <td>{{ $brand->website}} </td>

        <td>
          <form action=" {{ route ('brand.destroy', $brand->id)}}" method="POST">
            <a href="{{ route('brand.edit', $brand->id) }}" class="px-3 py-1 text-gray-500 border rounded-lg hover:bg-blue-200 hover:text-blue-700">Edit</a>
           
            @csrf
            @method('DELETE')
            <button type="submit" class="border px-3 py-0.5 rounded-lg text-gray-500 hover:bg-red-200 hover:text-red-700" onclick="return confirm('Are you sure you want to delete this brand?')">Delete</button>
           
          </form>
        </td>
      </tr>
      
        @endforeach
    </tbody>
  </table>  
</div>  

<!-- Display the pagination links -->
{{ $brands->links() }}

</html>