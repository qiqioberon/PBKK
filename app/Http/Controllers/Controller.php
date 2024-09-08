<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Fungsi untuk mengirimkan respon sukses
     *
     * @param  mixed  $data
     * @param  string $message
     * @param  int    $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendSuccess($data = [], $message = 'Operation successful', $statusCode = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    /**
     * Fungsi untuk mengirimkan respon gagal
     *
     * @param  string $message
     * @param  int    $statusCode
     * @param  mixed  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendError($message = 'Operation failed', $statusCode = 400, $errors = [])
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'errors' => $errors
        ], $statusCode);
    }

    /**
     * Fungsi untuk mengeksekusi logika dengan penanganan error
     *
     * @param  callable $callback
     * @return mixed
     */
    protected function executeWithTryCatch(callable $callback)
    {
        try {
            return $callback();
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
