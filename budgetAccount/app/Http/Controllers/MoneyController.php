<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Money::orderBy("plusMinus", "ASC")->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newMoney = new Money;
        $newMoney->amount = $request->money["amount"];
        $newMoney->save();
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
        $existingEntrie = Money::find($id);

        if($existingEntrie) {
            $existingEntrie ->save();
            return $existingEntrie;
        }

        return "Item not found.";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $existingEntrie = Money::find($id);

        if($existingEntrie) {
        $existingEntrie->delete();
        return "Entrie deleted";
        }
    }
}
