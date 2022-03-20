<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Category;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $materials = Material::all();
        return view('material.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('material.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterialRequest $request)
    {
        if($request->file('img')){
            $image_path = $request->file('img')
            ->store('image', 'public');
            $img = $image_path;
            }
        if($request->file('sound')){
                $sound_path = $request->file('sound')
                ->store('sound', 'public');
                $sound = $sound_path;
            }
        Material::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'img'          => $img,
            'sound'         => $sound,
            'description'   => $request->description
        ]);
        // dd(\Ramsey\Uuid\Uuid::uuid4()->toString());
       return redirect()->route('material.index')->with('alert-success', 'Materi Berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        $categories = Category::all();
        return view('material.edit', compact('material','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialRequest  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaterialRequest $request, Material $material)
    {
        //
        
        
        if($request->hasFile('img')){
            $image_path = $request->file('img')
            ->store('image', 'public');
            $img = $image_path;
            }else{
                $img = $material->img;
            }
        if($request->hasFile('sound')){
                $sound_path = $request->file('sound')
                ->store('sound', 'public');
                $sound = $sound_path;
            }else{
                $sound = $material->sound;
            }
        $material->update([
            'name'      => $request->name,
            'category_id' => $request->category_id,
            'img'          => $img,
            'sound'         => $sound,
            'description'   => $request->description
        ]);
        return redirect()->route('material.index')->with('alert-success', 'Materi berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        try {
            $material->delete();
        } catch (\Throwable $th) {
            return back()->with('alert-danger',$th->getMessage());
        }
        return redirect()->route('material.index')->with('alert-success', 'Materi berhasil dihapus');
    }
}
