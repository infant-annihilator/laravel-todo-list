<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Item extends Model
{
    use HasFactory;

    const STATUS_NOT_COMPLETED = 0;
    const STATUS_COMPLETED = 1;

    public static $statuses = [
        self::STATUS_NOT_COMPLETED => 'В процессе',
        self::STATUS_COMPLETED => 'Завершено'
    ];

    /**
     * Возвращает все элементы таблицы,
     * отсортированными по айди (от нового к старому)
     *
     * @return Item[]
     */
    public static function getAll()
    {
        return self::orderBy('id', 'DESC')->get();
    }

    /**
     * Возвращает все элементы таблицы, выбирая по статусу $status,
     * отсортированными по айди (от нового к старому)
     *
     * @param bool $status
     * @return Item[]
     */
    public static function getAllByStatus(bool $status)
    {
        return self::where('completed', $status)->orderBy('id', 'DESC')->get();
    }

    /**
     * Изменяет статус на обратный и обновляет время завершения
     * (если завершено)
     *
     * @param Request $request
     * @return bool
     */
    public function changeStatus(Request $request)
    {
        $this->completed = $request->item['completed'];
        $this->completed_at = $request->item['completed'] ? Carbon::now() : null;
        return $this->save();
    }
}
