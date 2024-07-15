@extends('/index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4">
            <h3>Dashboard</h3>
            <hr>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Today's Orders</h6>
                            <h5 class="card-text"></h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Today's Income</h6>
                            <h5 class="card-text"></h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Today's Tips</h6>
                                <h5 class="card-text">Rp</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mt-3">Recent Transactions</h4>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Customer's name</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="w-50">Item</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
</main>

@endsection