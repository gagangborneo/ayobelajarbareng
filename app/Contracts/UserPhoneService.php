<?php

namespace App\Contracts;

interface UserPhoneService
{
    public function findData($id);
    public function storeData(array $data);
    public function updateData($id, array $data);
    public function updateDataPassword($id, array $data);
    public function findDataPhone($number);
    public function storeDataValidasi(array $data);
    public function updateOTP($nomor, $kode);
    public function findRoleData($id);
}
