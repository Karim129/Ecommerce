<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use App\Http\Requests\updateCategoryRequest;
use App\Models\Category;
use App\Models\Setting;
use App\Services\ImageService;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['route'] = 'categories';
        $data['categories'] = Category::select('id', 'name', 'image', 'is_showing', 'is_popular')->get();

        return view('admin.category.index', $data, ['settings' => Setting::first()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'categories';

        return view('admin.category.create', $data, ['settings' => Setting::first()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeCategoryRequest $request)
    {

        try {
            $validate = $request->validated();

            $image = ImageService::upload($request->file('image'), 'categories');

            $category = new Category;
            $category->name = ['ar' => $request->name_ar, 'en' => $request->name_en];
            $category->slug = $request->slug;
            $category->description = ['ar' => $request->description_ar, 'en' => $request->description_en];
            $category->is_showing = $request->is_showing ? '1' : '0';
            $category->is_popular = $request->is_popular ? '1' : '0';
            $category->meta_title = ['ar' => $request->meta_title_ar, 'en' => $request->meta_title_en];
            $category->meta_description = ['ar' => $request->meta_description_ar, 'en' => $request->meta_description_en];
            $category->meta_keywords = $request->meta_keywords;
            $category->image = $image;
            $category->save();

            toastr()->success(trans('messages_trans.success_save'), 'Congrats', ['timeOut' => 5000]);

            return redirect()->route('categories.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $data['route'] = 'categories';
        $data['category'] = $category;

        return view('admin.category.show', $data, ['settings' => Setting::first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data['route'] = 'categories';
        $data['category'] = $category;

        return view('admin.category.edit', $data, ['settings' => Setting::first()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCategoryRequest $request, Category $category)
    {

        try {

            $validated = $request->validated();

            $image = $category->image;

            if ($request->hasFile('image')) {
                ImageService::delete($category->image);
                $image = ImageService::upload($request->file('image'), 'categories');
            }

            $category->update([
                'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
                'slug' => $request->slug,
                'description' => ['ar' => $request->description_ar, 'en' => $request->description_en],
                'is_showing' => $request->is_showing ? '1' : '0',
                'is_popular' => $request->is_popular ? '1' : '0',
                'meta_title' => ['ar' => $request->meta_title_ar, 'en' => $request->meta_title_en],
                'meta_description' => ['ar' => $request->meta_description_ar, 'en' => $request->meta_description_en],
                'meta_keywords' => $request->meta_keywords,
                'image' => $image,

            ]);

            return redirect()->route('categories.index')->with('success', trans('messages_trans.success_update'));

        } catch (\Exception $e) {
            return redirect()->withErrors('error', $e->getMessage());

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        ImageService::delete($category->image);
        $category->products()->delete();
        $category->delete();

        return redirect()->route('categories.index')->with('success', trans('messages_trans.success_delete'));
    }
}
