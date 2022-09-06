<?php

namespace App\Interfaces;

interface ListDatatableInterface {

    /**
     * Get list for DT
     * @param  int $start
     * @param  int $length
     * @param  array $orders
     * @param  array $search
     * @param  int|null $idDoc
     * @return array
     */
    public function getListForDataTable($start, $length, $orders, $search, $idDoc = null): array;
}