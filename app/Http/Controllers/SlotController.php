<?php
/**
 * Created by PhpStorm.
 * User: suspiria
 * Date: 09.10.18
 * Time: 11:26
 */

namespace App\Http\Controllers;


use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /*
     * @const Banner One
     */
    protected const BANNER_ID = 'banner1';

    /*
     * @const KEYS
     */
    protected const UPDATE_KEYS = ['isLazy', 'isAvailable'];

    /**
     * @param Request $request
     */
    public function process(Request $request)
    {
        $requestData = $request->all();
        $slotEntity = Slot::where('slotElementId', '=', self::BANNER_ID);

        if (!$requestData) {
            $data = $slotEntity->get()->first();
            echo json_encode($data);
            exit;
        }

        $key = key($requestData);
        if (in_array($key, self::UPDATE_KEYS)) {
            $this->validate($request, [
                $key => 'boolean',
            ]);
            try {
                $slotEntity->update([$key => $request[$key]]);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
            exit;
        }
    }
}