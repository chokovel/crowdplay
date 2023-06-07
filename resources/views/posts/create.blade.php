@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card card-default">
        <div class="card-header">
            {{ isset($artist) ? 'Edit Artist' : 'Create Artist' }}
        </div>
        <div class="card-body">

            @include('partials.errors')

            <form action="{{ isset($artist) ? route('artists.update', $artist->id) : route('artists.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(isset($artist))
                    @method('PUT')
                @endif

                <div class="row tp-gx-20">
                    <div class="col-12 col-sm-6">
                        <div class="tp-brands-from-input contact-mb">
                            <input name="firstname" type="text" placeholder="First Name:" value="{{ isset($artist) ? $artist->firstname : '' }}" required>
                        </div>
                        <div class="tp-brands-from-input contact-mb">
                            <input name="stagename" type="text" placeholder="Stage Name:" value="{{ isset($artist) ? $artist->stagename : '' }}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="tp-brands-from-input contact-mb">
                            <input name="lastname" type="text" placeholder="Last Name:" value="{{ isset($artist) ? $artist->lastname : '' }}" required>
                        </div>
                        <div class="tp-brands-from-input contact-mb">
                            <input name="phone" type="number" placeholder="Phone:" value="{{ isset($artist) ? $artist->phone : '' }}" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="tp-brands-from-input contact-mb">
                            <input name="email" type="email" placeholder="Email:" value="{{ isset($artist) ? $artist->email : '' }}" required>
                        </div>
                        <div class="tp-brands-from-input contact-mb">
                            <input name="address" type="text" placeholder="Address:" value="{{ isset($artist) ? $artist->address : '' }}" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="tp-brands-from-input contact-mb">
                            <input name="artprofession" type="text" placeholder="Art Profession: e.g Musician" value="{{ isset($artist) ? $artist->artprofession : '' }}" required>
                        </div>
                        <div class="tp-brands-from-input contact-mb">
                            <input name="portfoliolink" type="text" placeholder="Portfolio Link e.g https://" value="{{ isset($artist) ? $artist->portfoliolink : '' }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="tp-brands-from-input contact-mb">
                            <input class="pt-3" type="file" name="image" placeholder="Image" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="tp-brands-from-input contact-textarea">
                            <textarea name="bio" placeholder="Brief professional biography..." required>{{ isset($artist) ? $artist->bio : '' }}</textarea>
                        </div>
                    </div>
                    <p class="ajax-response"></p>
                </div>
                <div class="tp-contact-submit text-center mt-20">
                    <button class="tp-btn" type="submit">{{ isset($artist) ? 'Update Artist' : 'Create Artist' }} <i class="fa-regular fa-arrow-right-long"></i></button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
