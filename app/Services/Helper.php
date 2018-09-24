<?php

namespace App\Services;

class Helper {

    static function jsonOK($message)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }

    static function jsonNG($message)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], 400);

    }
}
