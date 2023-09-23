<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostCommentsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('newsletter', function () {
    request()->validate(['email' => 'required|email']);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);
    try {
        $response = $mailchimp->lists->addListMember('0fcbc2373d', [
            "email_address" => request('email'),
            "status" => 'subscribed'
        ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'This email could not be added'
        ]);
    }


    return redirect('/')->with('success', 'You are now signed up for our newsletter');

});

Route::get('/', [PostController::class, 'index'])->name("home");

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->middleware('auth');


// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all()

//     ]);
// })->name('category');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
    ]);
});