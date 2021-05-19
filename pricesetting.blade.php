@extends('layouts.adminmaster')

@section('section')

  <div class="paddingTop50">

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"> <h4>{{ __('Price Setting - May') }}</h4> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.settings.update') }}">
                        @csrf

                        <input type="hidden" name="id" value="{{ $set_admin->id }}">
                        <div class="form-group row">
                            <label for="discount"  class="col-md-8 col-form-label text-md-center" style="text-align:left; font-weight:bold;">{{ __('Activate Monthly Booking (Daily fee included) ') }}</label>
                            <div class="col-md-2">
                              <label class="switch">
                                <input type="checkbox">
                                {{-- <input type="checkbox" checked> --}}
                                <span class="slider round"></span>
                              </label>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('Daily Fee') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="may_daily_fee" value="{{ $set_admin->daily_fee }}" disabled required>

                            </div>
                        </div>
                        <br>
                        <h5>Week</h5>
                        <hr>
                        <div class="form-group row">
                            <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="week_may_adult1_price" value={{ $set_admin->adult1_price }} required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="week_may_adult2_price" value={{ $set_admin->adult2_price }} required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="week_may_adult3_price" value={{ $set_admin->adult3_price }} required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="week_may_adult4_price" value={{ $set_admin->adult4_price }} required>
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="float:right;">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                        <h5>Weekend</h5>
                        <hr>
                        <div class="form-group row">
                            <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="weekend_may_adult1_price" value={{ $set_admin->adult1_price }} required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="weekend_may_adult2_price" value={{ $set_admin->adult2_price }} required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="weekend_may_adult3_price" value={{ $set_admin->adult3_price }} required>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                            <div class="col-md-6">
                                <input type="number" step="0.01" class="form-control" name="weekend_may_adult4_price" value={{ $set_admin->adult4_price }} required>
                            </div>
                        </div>




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="float:right;">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>


<div class="paddingTop50">

<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header"> <h4>{{ __('Price Setting - June') }}</h4> </div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.settings.update') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $set_admin->id }}">
                    <div class="form-group row">
                        <label for="discount"  class="col-md-8 col-form-label text-md-center" style="text-align:left; font-weight:bold;">{{ __('Activate Monthly Booking (Daily fee included) ') }}</label>
                        <div class="col-md-2">
                          <label class="switch">
                            <input type="checkbox">
                            {{-- <input type="checkbox" checked> --}}
                            <span class="slider round"></span>
                          </label>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('Daily Fee') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="june_daily_fee" value="{{ $set_admin->daily_fee }}" disabled required>

                        </div>
                    </div>
                    <br>
                    <h5>Week</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_june_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_june_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_june_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_june_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                    <h5>Weekend</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_june_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_june_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_june_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_june_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<div class="paddingTop50">

<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header"> <h4>{{ __('Price Setting - July') }}</h4> </div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.settings.update') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $set_admin->id }}">
                    <div class="form-group row">
                        <label for="discount"  class="col-md-8 col-form-label text-md-center" style="text-align:left; font-weight:bold;">{{ __('Activate Monthly Booking (Daily fee included) ') }}</label>
                        <div class="col-md-2">
                          <label class="switch">
                            <input type="checkbox">
                            {{-- <input type="checkbox" checked> --}}
                            <span class="slider round"></span>
                          </label>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('Daily Fee') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="july_daily_fee" value="{{ $set_admin->daily_fee }}" disabled required>

                        </div>
                    </div>
                    <br>
                    <h5>Week</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_july_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_july_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_july_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_july_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                    <h5>Weekend</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_july_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_july_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_july_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_july_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<div class="paddingTop50">

<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header"> <h4>{{ __('Price Setting - August') }}</h4> </div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.settings.update') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $set_admin->id }}">
                    <div class="form-group row">
                        <label for="discount"  class="col-md-8 col-form-label text-md-center" style="text-align:left; font-weight:bold;">{{ __('Activate Monthly Booking (Daily fee included) ') }}</label>
                        <div class="col-md-2">
                          <label class="switch">
                            <input type="checkbox">
                            {{-- <input type="checkbox" checked> --}}
                            <span class="slider round"></span>
                          </label>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('Daily Fee') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="august_daily_fee" value="{{ $set_admin->daily_fee }}" disabled required>

                        </div>
                    </div>
                    <br>
                    <h5>Week</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_august_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_august_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_august_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_august_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                    <h5>Weekend</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_august_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_august_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_august_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_august_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<div class="paddingTop50">

<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header"> <h4>{{ __('Price Setting - September') }}</h4> </div>

            <div class="card-body">
                <form method="POST" action="{{ route('admin.settings.update') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $set_admin->id }}">
                    <div class="form-group row">
                        <label for="discount"  class="col-md-8 col-form-label text-md-center" style="text-align:left; font-weight:bold;">{{ __('Activate Monthly Booking (Daily fee included) ') }}</label>
                        <div class="col-md-2">
                          <label class="switch">
                            <input type="checkbox">
                            {{-- <input type="checkbox" checked> --}}
                            <span class="slider round"></span>
                          </label>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('Daily Fee') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="september_daily_fee" value="{{ $set_admin->daily_fee }}" disabled required>

                        </div>
                    </div>
                    <br>
                    <h5>Week</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_september_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_september_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_september_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="week_september_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                    <h5>Weekend</h5>
                    <hr>
                    <div class="form-group row">
                        <label for="adult1_price" class="col-md-4 col-form-label text-md-right">{{ __('1 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_september_adult1_price" value={{ $set_admin->adult1_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult2_price" class="col-md-4 col-form-label text-md-right">{{ __('2 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_september_adult2_price" value={{ $set_admin->adult2_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult3_price" class="col-md-4 col-form-label text-md-right">{{ __('3 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_september_adult3_price" value={{ $set_admin->adult3_price }} required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="adult4_price" class="col-md-4 col-form-label text-md-right">{{ __('4 Adult Price') }}</label>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" name="weekend_september_adult4_price" value={{ $set_admin->adult4_price }} required>
                        </div>
                    </div>




                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="float:right;">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div style="padding-top: 150px;"></div>
  
@endsection


