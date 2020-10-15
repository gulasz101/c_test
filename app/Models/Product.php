<?php
declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property CarbonInterface $created_at
 * @property CarbonInterface $updated_at
 */
class Product extends Model
{
    use HasFactory;

    /**
     * Making all attributes "fillable" as guard responsibility is on "StoreProduct" request.
     * @var array
     */
    protected $guarded = [];
}
