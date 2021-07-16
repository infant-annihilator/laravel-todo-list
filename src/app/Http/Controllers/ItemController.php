<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    const MSG_NOT_FOUND = "Элемент списка не найден!";
    const MSG_DELETED = "Элемент списка успешно удалён.";

    /**
     * Отображает только те, что в процессе
     *
     * @return Item[]
     */
    public function index()
    {
        return Item::getAllByStatus(Item::STATUS_NOT_COMPLETED);
    }

    /**
     * Отображает только завершённые
     *
     * @return Item[]
     */
    public function closed()
    {
        return Item::getAllByStatus(Item::STATUS_COMPLETED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Item|string
     */
    public function update(Request $request, int $id)
    {
        $model = Item::find($id);

        if ($model) {
            $model->changeStatus($request);
            return $model;
        }

        return self::MSG_NOT_FOUND;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Item
     */
    public function store(Request $request)
    {
        $model = new Item;
        $model->context = $request->item["context"];
        $model->save();

        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return string
     */
    public function destroy(int $id)
    {
        $model = Item::find($id);

        if ($model) {
            $model->delete();
            return self::MSG_DELETED;
        }

        return self::MSG_NOT_FOUND;
    }
}
