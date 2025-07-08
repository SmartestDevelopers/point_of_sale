@extends('layouts.front')

@section('content')
<div class="container mt-4">
    <h1>Add Return Sale</h1>
    <form action="{{ route('return-sales.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="sale_id">Sale Reference</label>
            <input type="text" name="sale_id" id="sale_id" class="form-control" required>
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
        <a href="{{ route('return-sales.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
