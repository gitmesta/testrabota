<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TestController;
 
    // ------------------------------------------- тестовый маршрутизатор --------------------------------
    Route::post('/test/newZapis', [TestController::class, 'newZapis']);           // новая запись
    Route::put('/test/obnovitZapis', [TestController::class, 'obnovitZapis']);    // обновление записи
    Route::get('/test/vseZapisi', [TestController::class, 'vseZapisi']);          // выборка всех записей
    Route::get('/test/odnaZapis', [TestController::class, 'odnaZapis']);          // выборка одной записи
    Route::get('/test/udalitZapis/', [TestController::class, 'udalitZapis']);     // удаление записи