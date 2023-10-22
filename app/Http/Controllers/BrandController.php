<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandCreateRequest;

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
    public function store(BrandCreateRequest $request)
    {   
        //llamamos a los datos ya validados
        $data = $request->validated();
        
        $brand = new Brand([
            'brand_name' => $data['brand_name'],
            'creative_director' => $data['creative_director'],
            'estbalished_year' => $data['established_year'],
            'website' => $data['website'],
            'image_logo' => $data['image_logo'],
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
