<?php namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kode_voucher','Tanggal_mulai_berlaku','Tanggal_akhir_berlaku','Besar_diskon','Aktif'
    ];
    protected $returnType = 'App\Entities\Diskon';
    protected $useTimestamps = false;
}