@extends('layouts.adminmaster')

@section('section')
  <div class="container paddingTop20">
    <h1>Negombo Edit Bookings</h1>
    <hr>
    <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('admin.booking.updatebookingdelaits') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" name="booking_id" value="{{ $Booking->id }}">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Place ID') }}: </label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" name="place_id" value="{{ $Booking->place_id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}: </label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" name="user_fullname" value="{{ $Booking->user_fullname }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}: </label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" name="user_surname" value="{{ $Booking->user_surname }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}: </label>
                        <div class="col-md-6">
                          <input type="email" class="form-control" name="user_email" value="{{ $Booking->user_email }} " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}: </label>
                        <div class="col-md-6">
                          <input type="tel" class="form-control" name="user_phone" value="{{ $Booking->user_phone }} " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Number of guests') }}: </label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" name="user_no_of_guest" value="{{ $Booking->user_no_of_guest }} " disabled>
                        </div>
                    </div>
                    @isset($Booking->guest_surname1)
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Guests Surname') }} 1: </label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="guest_surname1" value="{{ $Booking->guest_surname1 }} " required>
                          </div>
                      </div>
                    @endisset
                    @isset($Booking->guest_surname2)
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Guests Surname') }} 2: </label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="guest_surname2" value="{{ $Booking->guest_surname2 }} " required>
                          </div>
                      </div>
                    @endisset
                    @isset($Booking->guest_surname3)
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Guests Surname') }} 3: </label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="guest_surname1" value="{{ $Booking->guest_surname3 }} " required>
                          </div>
                      </div>
                    @endisset
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Booking Date') }}:  </label>
                        <div class="col-md-6">
                          <div class="t-datepicker" id="booking_day_start"><span class="t-check-in" name="booking_day_start"></span><span name="booking_day_end" class="t-check-out"></span></div>
                        </div>
                    </div>
                    @isset($Booking->user_promo)
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Promo Code') }} : </label>
                          <div class="col-md-6">
                            <input type="text" class="form-control" name="guest_surname1" value="{{ $Booking->user_promo }} " disabled>
                          </div>
                      </div>
                    @endisset
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Payment Type') }}: </label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" name="user_no_of_guest" value="{{ $Booking->user_payment_type }} " disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 col-form-label text-md-right">
                          <a class="btn btn-danger" href="{{ route('admin.booking.deletebookingdelaits', $Booking->id) }}">Delete</a>
                        </div>
                        <div class="col-md-6 col-form-label text-md-right">
                          <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>

              </form>
            </div>
        </div>

        </div>
    </div>
</div>

<script>
$(document).ready(function(){
   // Call global the function
   $('.t-datepicker').tDatePicker({
     // options here
     titleDateRange :'{{ __('day') }}',
     titleDateRanges:'{{ __('days') }}',
     titleToday     :'{{ __('Today') }}',
     limitDateRanges    : 365,
     dateCheckIn: '{{ $Booking->user_checkin }}',
     dateCheckOut: '{{ $Booking->user_checkout }}',

   });
 });
</script>

@endsection
