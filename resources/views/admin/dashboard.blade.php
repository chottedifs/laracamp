@extends('layouts.app')

@section('content')

<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Camp Class</th>
                            <th>Price</th>
                            <th>Register Date</th>
                            <th>Paid Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @forelse ($checkouts as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                            <b>{{ $checkout->User->name }}</b>
                        </td>
                        <td>
                            <p class="mb-2 text-uppercase">
                                <strong>{{ $checkout->Camp->title }}</strong>
                            </p>
                        </td>
                        <td>
                            <strong>Rp {{ $checkout->Camp->price }}</strong>
                        </td>
                        <td>
                            {{ $checkout->created_at->format('d M Y') }}
                        </td>
                        <td>
                            @if ($checkout->is_paid)
                                <strong class="badge bg-success">Payment Successfull</strong>
                            @else
                                <strong class="badge bg-warning text-dark">Waiting for Payment</strong>
                            @endif
                        </td>
                        <td>
                            @if (!$checkout->is_paid)
                                <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-primary" target="_blank">
                                        Set to Paid
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <h3>No Data</h3>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
