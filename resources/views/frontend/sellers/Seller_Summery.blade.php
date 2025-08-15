@foreach($sellers as $seller)
<section class="container mb-5">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$seller->verified_sellers}}</h3>
                    <p class="text-muted mb-0">Verified Sellers</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$seller->countries_served}}</h3>
                    <p class="text-muted mb-0">Countries Served</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$seller->districts_covered}}</h3>
                    <p class="text-muted mb-0">Districts Covered</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold">{{$seller->annual_exports}}</h3>
                    <p class="text-muted mb-0">Annual Exports</p>
                </div>
            </div>
        </div>
    </section>

@endforeach