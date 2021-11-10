<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [LoginController::class, 'login'])->name('login');

Route::get('/Register', function () {
    return view('regist');
});

// Route::get('/Register', [RegistController::class, 'regist'])->name('index');
Route::post('/Register', [RegistController::class, 'store'])->name('regist');

// Route::post('/', [LoginController::class, 'authenticate'])->name('login');

Route::post('/', [WelcomeController::class, 'authenticate'])->name('welcome');

Route::get('/Home', function () {
    $postingan = [
    [
        "title" => "judul posting 1",
        "slug" => "judul-posting-1",
        "username" => "@user1",
        "posting" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis porro ad sunt, enim mollitia unde sequi beatae quae veniam eos, fuga repellendus non ipsum maiores inventore incidunt reprehenderit molestiae dolores?"
    ],
    [
        "title" => "judul posting 2",
        "slug" => "judul-posting-2",
        "username" => "@user2",
        "posting" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis tenetur architecto magni quam et consequatur ea error illo, reiciendis quidem laborum ullam obcaecati modi eligendi officiis, voluptatum, cumque provident voluptas fugiat repellendus debitis. Maiores obcaecati pariatur nostrum in iure alias dolorum debitis, aspernatur corporis sapiente neque tenetur nemo possimus dolore facere! Sequi eius sed voluptas consequuntur pariatur autem voluptatum sapiente."
    ],
    [
        "title" => "judul posting 3",
        "slug" => "judul-posting-3",
        "username" => "@user3",
        "posting" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi minus distinctio dolor placeat tenetur iusto nostrum. Adipisci consequatur sequi expedita consectetur nesciunt ad necessitatibus natus iure tenetur. Ea, fuga perspiciatis."
    ]
    ];
    return view('index', [
        "posting" => $postingan
    ]);
});

//hal komen
Route::get('/Home/{slug}', function($slug){
    $postingan = [
        [
            "title" => "judul posting 1",
            "slug" => "judul-posting-1",
            "username" => "@user1",
            "posting" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis porro ad sunt, enim mollitia unde sequi beatae quae veniam eos, fuga repellendus non ipsum maiores inventore incidunt reprehenderit molestiae dolores?"
        ],
        [
            "title" => "judul posting 2",
            "slug" => "judul-posting-2",
            "username" => "@user2",
            "posting" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis tenetur architecto magni quam et consequatur ea error illo, reiciendis quidem laborum ullam obcaecati modi eligendi officiis, voluptatum, cumque provident voluptas fugiat repellendus debitis. Maiores obcaecati pariatur nostrum in iure alias dolorum debitis, aspernatur corporis sapiente neque tenetur nemo possimus dolore facere! Sequi eius sed voluptas consequuntur pariatur autem voluptatum sapiente."
        ],
        [
            "title" => "judul posting 3",
            "slug" => "judul-posting-3",
            "username" => "@user3",
            "posting" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi minus distinctio dolor placeat tenetur iusto nostrum. Adipisci consequatur sequi expedita consectetur nesciunt ad necessitatibus natus iure tenetur. Ea, fuga perspiciatis."
        ]
        ];
$komentar = [];
foreach($postingan as $komen){
    if($komen["slug"] === $slug){
        $komentar = $komen;
    }
}
    return view('komen', [
        "komen" => $komentar
    ]);
});


