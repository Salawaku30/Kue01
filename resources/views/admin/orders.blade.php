@extends('admin.app')
@section('content')
<div class="cardBox" style=" display: flex; justify-content: center;">
    <div class="card" style="width: 100%; text-align: center; display: flex; justify-content: center;">
        <table>
        <thead>
            <tr>
                <th>#</th>
                <th class="table-head">Date</th>
                <th class="table-head">Customer Name</th>
                <th class="table-head">Products</th>
                <th class="table-head">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>1-January-2024</td>
                <td>Berryl Mondow</td>
                <td><a href="">See Invoice</a></td>
                <td><button style="width: 100px; padding: 2px; border: none; border-radius: 2cm; background-color: rgb(255, 213, 0);"><b>Pending</b></button></td>
            </tr>
            <tr>
                <td>1.</td>
                <td>1-January-2024</td>
                <td>Berryl Mondow</td>
                <td><a href="">See Invoice</a></td>
                <td><button style="width: 100px; padding: 2px; border: none; border-radius: 2cm; background-color: rgb(41, 206, 0); color: white;"><b>Success</b></button></td>
            </tr>
            <tr>
                <td>1.</td>
                <td>1-January-2024</td>
                <td>Berryl Mondow</td>
                <td><a href="">See Invoice</a></td>
                <td><button style="width: 100px; padding: 2px; border: none; border-radius: 2cm; background-color: rgb(255, 0, 0); color: white;"><b>Failed</b></button></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
@endsection
