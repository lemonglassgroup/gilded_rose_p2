<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditItemRequest;
use App\Http\Requests\StoreItemRequest;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    public function store(StoreItemRequest $request):Response
    {
        $item = new Item($request->validated());
        $item->save();

        return response($item);
    }

    public function edit(int $itemId, EditItemRequest $request):Response
    {
        $item = Item::updateOrCreate(
            ['id' => $itemId],
            $request->validated()
        );

        return response($item);
    }

    public function getByCategory(int $categoryId):Response
    {
        return response(Category::find($categoryId)->items);
    }

    public function removeByCategory(int $categoryId):Response
    {
        /** @var Item $item */
        foreach (Category::find($categoryId)->items as $item) {
            $item->delete();
        }
        return response(true);
    }
}
