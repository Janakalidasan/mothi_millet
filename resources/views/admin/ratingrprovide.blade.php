@extends('layout.master')

@section('content')


@if (isset($rating))
    <!-- Edit Rating Form -->
    <div class="stretch-card">
        <div class="card card-statistics">
            <h3 class="ml-2 py-3"><b>Edit Rating</b></h3>
            <div class="card-body">
                <form method="POST" action="{{ route('aboutratingmanuval.update', ['id' => $rating->id]) }}">
                    @csrf <!-- CSRF Protection -->
                    @method('PUT') <!-- Use PUT method for update -->

                    <div class="form-group">
                        <label for="selleractive">Seller Active:</label>
                        <input type="text" id="selleractive" name="selleractive" class="form-control" value="{{ $rating->sellerActive }}" >
                    </div>

                    <div class="form-group">
                        <label for="monthlyprofit">Monthly Profit:</label>
                        <input type="text" id="monthlyprofit" name="monthlyprofit" class="form-control" value="{{ $rating->monthlyProfit }}" >
                    </div>

                    <div class="form-group">
                        <label for="customeractive">Customer Active:</label>
                        <input type="text" id="customeractive" name="customeractive" class="form-control" value="{{ $rating->customeractive }}" >
                    </div>

                    <div class="form-group">
                        <label for="anualgrosssale">Annual Gross Sale One:</label>
                        <input type="text" id="anualgrosssale" name="anualgrosssale" class="form-control" value="{{ $rating->anualgrosssale }}" >
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@else
    <!-- Create Rating Form -->
    <div class="stretch-card">
        <div class="card card-statistics">
            <h3 class="ml-2 py-3"><b>Rating</b></h3>
            <div class="card-body">
                <form method="POST" action="{{ route('ratings.store') }}">
                    @csrf <!-- CSRF Protection -->

                    <div class="form-group">
                        <label for="selleractive">Seller Active:</label>
                        <input type="text" id="selleractive" name="selleractive" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="monthlyprofit">Monthly Profit:</label>
                        <input type="text" id="monthlyprofit" name="monthlyprofit" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="customeractive">Customer Active:</label>
                        <input type="text" id="customeractive" name="customeractive" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="anualgrosssale">Annual Gross Sale One:</label>
                        <input type="text" id="anualgrosssale" name="anualgrosssale" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endif


@endsection