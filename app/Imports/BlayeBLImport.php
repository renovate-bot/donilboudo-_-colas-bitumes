<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class BlayeBLImport implements ToModel
{
    use Importable;

    public function model(array $row)
    {
        return new BlayeBLImport([
            'bl_day' => $row[0],
            'command_number' => $row[1],
            'accounting_site_code' => $row[2],
            'bl_product_code' => $row[3],
            'bl_site_code' => $row[4],
            'customer_delivery_label' => $row[5],
            'quantity' => $row[6],
        ]);
    }
}