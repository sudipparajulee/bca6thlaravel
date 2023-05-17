<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'photopath' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        if($request->hasFile('photopath')){
            $image = $request->file('photopath');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $image->move($destinationPath,$name);
            $data['photopath'] = $name;
        }

        Gallery::create($data);
        return redirect(route('gallery.index'))->with('success','Gallery created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'photopath' => 'nullable|image|mimes:jpeg,png,jpg'
        ]);

        $gallery = Gallery::find($id);
        if($request->hasFile('photopath')){
            $image = $request->file('photopath');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/gallery');
            $image->move($destinationPath,$name);
            File::delete(public_path('/images/gallery/'.$gallery->photopath));
            $data['photopath'] = $name;
        }

        $gallery->update($data);
        return redirect(route('gallery.index'))->with('success','Gallery Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $gallery = Gallery::find($request->dataid);
        $gallery->delete();
        File::delete(public_path('/images/gallery/'.$gallery->photopath));
        return redirect(route('gallery.index'))->with('success','Gallery Deleted Successfully');
    }
}
