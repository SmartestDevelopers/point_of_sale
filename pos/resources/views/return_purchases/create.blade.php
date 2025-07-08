@extends('layouts.front')

@section('content')
<div class="container mt-4">
    <h1>Add Return Purchase</h1>
    <form action="{{ route('return-purchases.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="purchase_id">Purchase Reference</label>
            <input type="text" name="purchase_id" id="purchase_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="return_reason">Return Reason</label>
            <textarea name="return_reason" id="return_reason" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('return-purchases.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
