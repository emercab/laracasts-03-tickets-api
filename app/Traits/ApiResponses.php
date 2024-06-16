<?php

namespace App\Traits;

trait ApiResponses
{
  protected function ok($message)
  {
    return $this->success($message, 200);
  }

  
  public function success($message, $statusCode = 200)
  {
    return response()->json([
      'message' => $message,
      'status' => $statusCode,
    ], $statusCode);
  }
}