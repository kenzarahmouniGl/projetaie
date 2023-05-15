<?php
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function index():view
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));

    }
    




    public function edit(User $user):view
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user):view
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->update($validatedData);

        return redirect()->route('admin.users.index')->with('success', 'L\'utilisateur a été modifié avec succès');
    }

    public function destroy(User $user):view
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'L\'utilisateur a été supprimé avec succès');
    }
}



