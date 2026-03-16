<?php
require __DIR__ . "/../../config/db.php";

class Auth extends DB
{
    // Auth User
    public function userAuth($formdata)
    {
        if (empty($formdata)) {
            return;
        }

        try {
            return $this->msgResponse('success', 'login success');
        } catch (PDOException $e) {
            return $this->msgResponse('error', 'connect fail', $e->getMessage());
        }
    }
}
