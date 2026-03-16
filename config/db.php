<?php

class DB
{
    // Helper
    public function msgResponse($status = 'success', $msg = 'successfully', $data = null)
    {
        if ($status === 'error') {
            return [
                'status' => $status,
                'message' => $msg,
                'error' => $data
            ];
        }

        $response = [
            'status' => $status,
            'message' => $msg
        ];

        if (!empty($data)) {
            $response['data'] = $data;
        }

        return $response;
    }
}
