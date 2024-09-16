<?php

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

use App\Http\Controllers\Api\ArticleController;
use Illuminate\Support\Facades\Route;

// API用のルートグループ
Route::group(['middleware' => ['api']], function () {
    // 一覧取得
    Route::get('api/articles', [ArticleController::class, 'index']);

    // 詳細取得
    Route::get('api/articles/{id}', [ArticleController::class, 'show']);

    // 新規作成
    Route::post('api/articles', [ArticleController::class, 'store']);

    // 更新
    Route::patch('api/articles/{id}', [ArticleController::class, 'update']);

    // 削除
    Route::delete('api/articles/{id}', [ArticleController::class, 'destroy']);
});
