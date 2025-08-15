@foreach($buyers as $buyer)
<section class="container mb-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$buyer->verified_exporters}}</h3>
                    <p class="text-muted mb-0">Verified Exporters</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$buyer->product_categories}}</h3>
                    <p class="text-muted mb-0">Product Categories</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$buyer->monthly_transactions}}</h3>
                    <p class="text-muted mb-0">Monthly Transactions</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$buyer->avg_response_time}}</h3>
                    <p class="text-muted mb-0">Avg. Response Time</p>
                </div>
            </div>
        </div>
    </section>
@endforeach