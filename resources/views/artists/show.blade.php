@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('artists.index') }}" class="btn btn-success">Artists</a>
        </div>

        <div class="card card-default">
            <div class="card-header">Artist Details</div>
                <section class="artist-details">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                    <div class="artist-details-header">
                                        <img src="{{ asset('storage/'.$artist->image) }}" alt="{{ $artist->stagename }}" class="img-fluid">
                                    </div>
                                    <div class="artist-details-info">
                                        <h2 class="artist-details-name">Name: {{ $artist->firstname }} {{ $artist->lastname }}</h2>
                                        <h4 class="artist-details-name">Stage Name: "{{ $artist->stagename }}"</h4>
                                        <div class="artist-details-contact">
                                            <p><i class="fa fa-phone"></i>Phone: {{ $artist->phone }}</p>
                                            <p><i class="fa fa-envelope"></i>Email: {{ $artist->email }}</p>
                                            <p><i class="fa fa-map-marker"></i>Address: {{ $artist->address }}</p>
                                        </div>
                                        <div class="artist-details-profession">
                                            <p>Art Profession: {{ $artist->artprofession }}</p>
                                            <p><a href="{{ $artist->portfoliolink }}" target="_blank" class="portfolio-link">Artist Portfolio Link</a></p>
                                        </div>
                                        <div class="artist-details-bio">
                                            <h4>Brief Biography</h4>
                                            <p>{{ $artist->bio }}</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </section>
        </div>
    </div>
@endsection
