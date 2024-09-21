<?php

namespace App\Http\Controllers;

use App\Models\FurnitureItem;
use Illuminate\Http\Request;

class FurnitureItemController extends Controller
{
    // Get all furniture items
    public function index()
    {
        return FurnitureItem::all();
    }

    // Get a single furniture item
    public function show($id)
    {
        return FurnitureItem::findOrFail($id);
    }

    // Create a new furniture item
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $furnitureItem = FurnitureItem::create($request->all());
        return response()->json($furnitureItem, 201);
    }

    // Update an existing furniture item
    public function update(Request $request, $id)
    {
        $furnitureItem = FurnitureItem::findOrFail($id);

        $furnitureItem->update($request->all());

        return response()->json($furnitureItem, 200);
    }

    // Delete a furniture item
    public function destroy($id)
    {
        FurnitureItem::destroy($id);
        return response()->json(null, 204);
    }
}
