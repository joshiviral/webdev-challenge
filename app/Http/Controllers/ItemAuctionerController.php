namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class ItemAuctionerController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }
}