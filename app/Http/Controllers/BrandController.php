<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brand = Brand::all();
        return view('brand.index')->with('brand', $brand);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {   
        //llamamos a los datos ya validados
        $data = $request->validated();
        
        $brand = new Brand([

            'brand_name' => $data['brand_name'],
            'creative_director' => $data['creative_director'],
            'headquarters' => $data['headquarters'],
            'established_year' => $data['established_year'],
            'website' => $data['website'],
            //'image_logo' => $data['image_logo'],
        ]);

        $brand->save();

        return redirect('/brand')->with('message', 'Success!, Your brand has been saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $brand = Brand::find($id);
        return view('brand.edit')->with('brand', $brand);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, int $id)
    {
        $brand = Brand::find($id);

        $updated_data = $request->validated();
        
        $brand->update([

            'brand_name' => $updated_data['brand_name'],
            'creative_director' => $updated_data['creative_director'],
            'headquarters' => $updated_data['headquarters'],
            'established_year' => $updated_data['established_year'],
            'website' => $updated_data['website'],
            //'image_logo' => $data['image_logo'],
        ]);

        return redirect('/brand')->with('message', 'Success!, Your brand has been saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect('/brand')->with('message', 'Success!, Your brand has been deleted successfully');
    }
}
