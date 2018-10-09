<?php
/**
 * Created by PhpStorm.
 * User: suspiria
 * Date: 09.10.18
 * Time: 11:26
 */

namespace App\Http\Controllers;


class SlotController
{
    /**
     * @return string
     */
    public function index()
    {
        return 'Hi Denis';
    }


    public function show(int $lazy, int $available)
    {
        return 'This controller with lazy: ' . $lazy . ' and available : ' . $available;
    }
}