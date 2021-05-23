<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request):Response
    {

        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return response($category);
    }

}
