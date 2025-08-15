<div class="testimonial-section py-5">
    <div class="container">
        <!-- Horizontal scrolling container -->
        <div class="d-flex flex-nowrap overflow-auto pb-3">
            @foreach($reviews as $review)
            <div class="card mx-2" style="min-width: 300px;">
                <div class="card-body">
                    <div class="rating mb-3 text-warning">
                        <div class="rating mb-3" role="img" aria-label="{{ $review->stars }} stars">
            @for($i = 1; $i <= 5; $i++)
                <i class="{{ $i <= $review->stars ? 'fas' : 'far' }} fa-star text-warning"></i>
            @endfor
        </div>
                    </div>
                    <p class="card-text testimonial-text font-italic">"{{ $review->comment }}"</p>
                    <div class="card-footer bg-white border-top-0 px-0 pb-0">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('storage/'.$review->image) }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;" class="rounded-circle me-3">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">{{ $review->name }}</h6>
                                <small class="text-muted">{{ $review->company }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>