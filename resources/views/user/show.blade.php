@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class=" d-flex justify-content-around mx-auto flex-row">
                <img src="{{ asset('images/'.$user->DPimageURL) }}" class="rounded-circle border d-inline" height="250" width="250">
                    <div  class=" d-flex justify-content-around mx-auto flex-column ">
                        <div class="justify-content-center">
                            <h2 class="d-inline ml-5">{{ $user->username }}</h2>
                            <button class="btn btn-info ml-5">Follow</button>
                            @if($user->id === auth()->id())
                                <form action="/dp/update" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <input type="file">Update Profile Pic</input>
                                    <button class="btn btn-success">Upload</button>
                                </form>
                            @endif
                        </div>

                        <div class="d-flex justify-content-around">
                            <p><strong>12</strong> follwers</p>
                            <p><strong>1580</strong> following</p>
                            <p><strong>10</strong> posts</p>
                        </div>

                        <p class=" justify-content-center"><strong>{{ $user->name }}</strong> {{ $user->status }} </p>
                    </div>
                </div>

            </div>
            <div class="col-2"></div>

                    <b-modal  id="modallg" size="lg">
                        {{-- <div slot="modal-header">Hello</div> --}}
                        <img src="{{ asset('images/hero_image.jpg') }}" class="rounded mx-auto d-block" height="600" width="600">
                        <form class="mt-5">
                            <div class="form-group">
                                <img src="{{ asset('images/hero_image.jpg') }}" class="rounded-circle mx-auto d-inline mr-2" height="50" width="50">
                                <textarea class="form-control d-inline" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                             <button type="submit" class="btn btn-primary">Comment</button>
                        </form>
                        <div slot="modal-footer">

                        </div>
                    </b-modal>

                    <img src="{{ asset('images/hero_image.jpg') }}"  v-b-modal="'modallg'" class="mx-auto"  height="250" width="250">
                        </div>
                    </div>
    </div>
@endsection
