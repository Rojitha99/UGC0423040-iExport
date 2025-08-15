@foreach($sliders as $slider)

<div class="carousel-item active">
      <img src="{{ asset('storage/'.$slider->image) }}" class="d-block w-100" alt="First slide">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>{{$slider->heading}}</h1>
          <p class="opacity-75">{{$slider->description}}
          </p>
          <p><a class="btn btn-lg btn-primary" href="{{ $slider->more_info_link}}">{{ $slider->button_name}}</a></p>
        </div>
      </div>
</div>

@endforeach

