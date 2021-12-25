<?php


namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function contact()
    {
        return view('publicSite.contact');
    }
    public function destination()
    {
        $category = Category::all();
        return view('publicSite.destination', compact('category'));
    }


    public function  homeDestination()
    {
        $category = Category::orderBy('id', 'DESC')->limit(3)-> get();
        $trip = Trip::all();
        $news = Trip::orderBy('id', 'DESC')->limit(3)-> get();
        // dd($news);

        return view('publicSite.index', compact('category', 'trip', 'news'));


    }





    public function index()
    {
        $category = Category::all();


        return view('admin.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


     return view('admin/categoryCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_img' => 'required',
     ]);

     $input = $request->all();
     if($request->file("category_img")) {
        $newImageName = time() . '-' . $request->category_img->getClientOriginalName();
        $request->category_img->move(public_path('uploads'), $newImageName);
        $input['category_img'] = $newImageName;
     }
        Category::create($input);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
        return view('admin/categoryUpdate',compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $Category)
    {
        $request->validate([
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_img' => 'required',

        ]);

        $newImageName = time() . '-' . $request->category_img->getClientOriginalName();
        $request->category_img->move(public_path('uploads'), $newImageName);

        $Category->category_name = $request->category_name;
        $Category->category_desc = $request->category_desc;
        $Category->category_img = $request->category_img;

        $Category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {

        $Category->delete();
        return back();
    }
}
