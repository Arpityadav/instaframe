<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Intervention\Image\Facades\Image as InterventionImage;

class ImagesController extends Controller
{
    // public function show(User $user)
    // {
    //     return view('user.show', compact('user'));
    // }
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'caption' => 'required|string|max:255',
            'profile_picture' => 'required|image|mimes:jpeg,jpg,bmp,png'
        ])->validate();

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/posts/'. $filename);

            InterventionImage::make($image)->save($location);

            $image = Image::create([
                'image_caption' => request('caption'),
                'user_id' => auth()->id(),
                'imageURL' => $filename
            ]);

            return back();
        }
    }
}
