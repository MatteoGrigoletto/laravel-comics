<section class="my-section-card">
    @foreach($data as $dat)
    <div class="my-card">
        <div>
            <img class="my-card-img" src="{{$dat['thumb']}}" alt="">
        </div>
        <div>
            <h6>{{$dat['series']}}</h6>
        </div>
    </div>
    @endforeach
    <div>
        <button>LOAD MORE</button>
    </div>
</section>