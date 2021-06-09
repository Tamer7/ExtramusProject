<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        return Booking::select(
            'id',
            'place_id',
            'payer_name',
            'user_fullname',
            'user_email',
            'user_phone',
            'user_no_of_guest',
            'user_no_of_babies',
            'user_checkin',
            'user_checkout',
            'is_approved',
            'user_promo',
            'user_payment_type',
            'user_booking_tracking_id',
            Booking::raw('(created_at +  INTERVAL 2 HOUR) AS created_at'),
            'paid_ammount'
        )->get();
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
            'Promo',
            'Payment Type',
            'Tracking Id',
            'Created At',
            'Total Ammount',
        ];
    }
}
