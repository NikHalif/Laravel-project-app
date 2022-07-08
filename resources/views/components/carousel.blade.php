@isset($images)
<div id="carouselImg{{ $id }}" class="carousel slide ratio-4x3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @for ($i = 0; $i < $count; $i++)
            <button type="button" data-bs-target="#carouselImg{{ $id }}" data-bs-slide-to="{{ $i }}" @if($loop->first) class="active"@endif aria-current="true" aria-label="Slide {{ $i }}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @foreach ($images as $image)
            <div class="carousel-item ratio @if($loop->first) active @endif">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($image) }}" style="object-fit: cover;">
            </div>
        @endforeach
    </div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselImg{{ $id }}"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselImg{{ $id }}"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
@endisset
