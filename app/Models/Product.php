<?php
declare(strict_types=1);

namespace App\Models;

use App\Support\Persistable\PersistableContract;
use App\Support\Persistable\PersistableOnlyIntoDB;
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
class Product extends Model implements PersistableContract
{
    use HasFactory;
    use PersistableOnlyIntoDB;

    /**
     * Making all attributes "fillable" as guard responsibility is on "StoreProduct" request.
     * @var array
     */
    protected $guarded = [];
}
