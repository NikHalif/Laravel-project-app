@isset($images)
<div id="carouselImg" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @for ($i = 0; $i < $count; $i++)
            <button type="button" data-bs-target="#carouselImg" data-bs-slide-to="{{ $i }}" @if($i==0) class="active"@endif aria-current="true" aria-label="Slide {{ $i }}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @for ($i = 0; $i < $count; $i++)
        <div class="carousel-item @if($i==0) active @endif">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($images[$i]) }}" class="d-block w-100 img-fluid" style="max-width: 100%; height: auto;">
        </div>
    @endfor
    </div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselImg"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselImg"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
@endisset
