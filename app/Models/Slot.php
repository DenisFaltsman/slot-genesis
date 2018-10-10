<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Oct 2018 09:32:11 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Slot
 * 
 * @property int $id
 * @property string $slotName
 * @property string $slotElementId
 * @property string $slotSizes
 * @property bool $isAvailable
 * @property bool $isLazy
 *
 * @package App\Models
 */
class Slot extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'isAvailable' => 'bool',
		'isLazy' => 'bool'
	];

	protected $fillable = [
		'slotName',
		'slotElementId',
		'slotSizes',
		'isAvailable',
		'isLazy'
	];
}
