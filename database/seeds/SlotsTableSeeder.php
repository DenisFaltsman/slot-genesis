<?php

use Illuminate\Database\Seeder;

class SlotsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slots')->delete();
        
        \DB::table('slots')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slotName' => '/6355419/Travel/Europe/France/Paris',
                'slotElementId' => 'banner1',
                'slotSizes' => '[300, 250]',
                'isAvailable' => 1,
                'isLazy' => 0,
            ),
        ));
        
        
    }
}