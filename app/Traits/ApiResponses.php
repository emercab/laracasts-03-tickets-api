<?php

namespace App\Traits;

trait ApiResponses
{
  protected function ok($message, $data = [])
  {
    return $this->success($message, $data, 200);
  }

  
  public function success($message, $data, $statusCode = 200)
  {
    return response()->json([
      'data' => $data,
      'message' => $message,
      'status' => $statusCode,
    ], $statusCode);
  }


  public function error($message, $statusCode)
  {
    return response()->json([
      'message' => $message,
      'status' => $statusCode,
    ], $statusCode);
  }
}