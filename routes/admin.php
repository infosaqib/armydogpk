use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ServicePageController;
use App\Http\Controllers\Admin\ImageController;
use Illuminate\Support\Facades\Route;

Route::resource('blogs', BlogController::class);

Route::resource('service-pages', ServicePageController::class);

Route::post('images', [ImageController::class, 'store'])
->name('images.store');

Route::delete('images/{image}', [ImageController::class, 'destroy'])
->name('images.destroy');