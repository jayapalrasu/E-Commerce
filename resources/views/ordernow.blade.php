@extends('master')
@section('content')
<div class="change">
    <h1>Your Order Details</h1><br><br>
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table table-striped" >
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>{{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                    </tr>
                    <tr>
                        <td>Delivey</td>
                        <td>$ 50</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>{{$total+50}}</td>
                    </tr>
                    </tbody>

            </table>
            <br><br>
            <div>
                <form action="orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="Ender Your Address!" class="form-control" id="email"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method</label><br><br>
                        <input type="radio" value="cash" name="payment"><span> Online Payment</span><br><br>
                        <input type="radio" value="cash" name="payment"><span> EMI Payment</span><br><br>
                        <input type="radio" value="cash" name="payment"><span> Cash On Delivery</span><br><br>
                    </div>
                    <button type="submit" class="btn btn-default">Order Now</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
