<?php

namespace App\Models;

use App\Helpers\Currency;
use App\Traits\Hashidable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $coupon_id
 * @property string|null $invoice_id Factura generada por Stripe
 * @property float $total_amount Coste total del pedido
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read mixed $formatted_status
 * @property-read mixed $formatted_total_amount
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderLine[] $orderLines
 * @property-read int|null $order_lines_count
 * @property-read string $coupon_code
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderLine[] $order_lines
 */
class Order extends Model
{
    use Hashidable;

    protected $guarded = ["id"];

    const SUCCESS = "SUCCESS";
    const PENDING = "PENDING";

    protected $appends = [
        "formatted_total_amount",
        "formatted_status",
        "coupon_code"
    ];

    public function order_lines() {
        return $this->hasMany(OrderLine::class);
    }

    public function coupon() {
        return $this->belongsTo(Coupon::class);
    }

    public function getFormattedTotalAmountAttribute() {
        if ($this->total_amount) {
            return Currency::formatCurrency($this->total_amount, true);
        }
        return Currency::formatCurrency(0);
    }

    public function getFormattedStatusAttribute() {
        return $this->status === self::SUCCESS ? __("Procesado") : __("Pendiente");
    }

    public function getCouponCodeAttribute(): string {
        if ($this->coupon_id) {
            return $this->coupon->code;
        }
        return "N/A";
    }
}
