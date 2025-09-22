<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function paginateResponse($pageSize, $data, $message = 'success', $total = null)
    {
        $count = $total ?? (is_array($data) ? count($data) : $data->count());

        return [
            'pageSize'        => $pageSize,
            'data'            => $data,
            'resultMessage'   => $message,
            'resultCountData' => $count,
        ];
    }
}
