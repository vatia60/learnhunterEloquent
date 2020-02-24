<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function create()
    {
        return view('eloquent.category');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_slug' => 'required',
            'category_id' => 'required',
        ],[
            'category_name.required' => 'Category Name must be needed!',
            'category_slug.required' => 'Category Slug must be needed!',
            'category_id.required' => 'Category ID must be needed!',
        ]);

        try {

            $value = new Category;
            $value->category_name = $request->category_name;
            $value->category_slug = $request->category_slug;
            $value->category_id = $request->category_id;
            $value->save();

            session()->flash('message', 'Successfully created!');
            session()->flash('type', 'success');

            return redirect()->back();

        }catch(Exception $e)
        {
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');

            return redirect()->back();
        }
    }
}
