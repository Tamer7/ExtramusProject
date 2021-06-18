<?php

namespace App\Exports;

use DB;
use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookingExportByDate implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function collection()
    {
        return DB::table('bookings')->select(
            'bookings.id',
            'bookings.place_id',
            'bookings.payer_name',
            'bookings.user_fullname',
            'bookings.user_email',
            'bookings.user_phone',
            'bookings.user_no_of_guest',
            'bookings.user_no_of_babies',
            'bookings.user_checkin',
            'bookings.user_checkout',
            'bookings.is_approved',
            'promo_codes.promo_type',
            'bookings.user_payment_type',
            'bookings.user_booking_tracking_id',
            'bookings.created_at',
            'bookings.paid_ammount'
        )
            ->whereRaw('"' . $this->date . '" between `user_checkin` and `user_checkout`')
            //->whereRaw('? between user_checkin and user_checkout', $this->date)   This also works
            ->leftJoin('promo_codes', 'bookings.user_promo', '=', 'promo_codes.promocode')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Place ID',
            'Payer Name',
            'Full Name',
            'Email',
            'Phone',
            'Number of adults',
            'Number of babies',
            'Arrival Time',
            'Checkout Time',
            'Approval',
            'Promo Type',
            'Payment Type',
            'Tracking Id',
            'Created At',
            'Total Ammount'
        ];
    }
}
