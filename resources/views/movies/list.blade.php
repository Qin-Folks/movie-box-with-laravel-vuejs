@if (count($movies) > 0)
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4 movie">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('uploads/images/'.$movie->photo) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $movie->title }} </h5>
                        <p class="card-text"> {{ substr($movie->description, 0, 100) . '...' }} </p>
                        <p>
                            @for ($ratingScore = 1; $ratingScore <= $movie->rating; $ratingScore++)
                               <i class="fa fa-star orange"></i> 
                            @endfor

                            @if ( (5 - (int) $movie->rating) > 0)
                                @for ($ratingScore = 1; $ratingScore <= 5 - $movie->rating; $ratingScore++)
                                    <i class="fa fa-star grey"></i> 
                                @endfor
                            @endif
                        </p>
                    <a href="/movies/{{ $movie->slug }}" class="btn btn-primary">See Details</a>
                    </div>
                    </div>
            </div>
        @endforeach 
    </div>
@endif