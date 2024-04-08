<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        $category = $category->isEmpty() ?[]:$category;
        return view('admin.components.Category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $category = new Category;
            $category->name = $request->name;
            $category->description = $request->description;
            $category->status = '1';
            $category->created_at  = Carbon::now();
            $category->save();
            DB::commit();
            return redirect("/admin/category");
        } catch (Throwable $th) {
            DB:rollBack();
            dd("lỗi");
            throw $th;
        }
        return redirect()->back()->withInput();
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
        $category = Category::find($id);
        return view('admin.components.Category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        try {
            DB::beginTransaction();
            $category = Category::find($id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->updated_at  = Carbon::now();
            $category->save();

            // dd($category);

            DB::commit();
            return redirect("/admin/category");
        } catch (Throwable $th) {
            DB::rollback();
             return redirect()->back()->withInput();
            throw $th;

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("/admin/category");

    }
}
