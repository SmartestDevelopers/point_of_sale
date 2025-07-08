@extends('layouts.front')

@section('content')
<div class="container mt-4">
    <h1>Return Purchases</h1>
    <a href="{{ route('return-purchases.create') }}" class="btn btn-primary mb-3">Add Return Purchase</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Purchase Reference</th>
                <th>Reason</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($returnPurchases as $returnPurchase)
                <tr>
                    <td>{{ $returnPurchase->id }}</td>
                    <td>{{ $returnPurchase->purchase_id }}</td>
                    <td>{{ $returnPurchase->return_reason }}</td>
                    <td>{{ $returnPurchase->amount }}</td>
                    <td>{{ $returnPurchase->created_at }}</td>
                    <td>
                        <a href="{{ route('return-purchases.show', $returnPurchase->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('return-purchases.edit', $returnPurchase->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('return-purchases.destroy', $returnPurchase->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No return purchases found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
