<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        $users = User::query()
            ->orderBy('name')
            ->paginate(15)
            ->withQueryString();

        return view('admin.users.index', compact('users'));
    }

    public function create(): View
    {
        return view('admin.users.create', [
            'roles' => UserRole::cases(),
        ]);
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        User::create([
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'password' => Hash::make($request->validated('password')),
            'role' => $request->validated('role'),
        ]);

        return redirect()->route('admin.users.index')
            ->with('status', __('Usuario creado correctamente.'));
    }

    public function edit(User $user): View
    {
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => UserRole::cases(),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $data = $request->safe()->only(['name', 'email', 'role']);
        $newRole = UserRole::from($data['role']);

        if ($user->role === UserRole::Admin && $newRole !== UserRole::Admin) {
            $hasOtherAdmin = User::query()
                ->where('role', UserRole::Admin)
                ->whereKeyNot($user->getKey())
                ->exists();

            if (! $hasOtherAdmin) {
                throw ValidationException::withMessages([
                    'role' => __('Debe existir al menos otro administrador antes de cambiar este rol.'),
                ]);
            }
        }

        $user->fill($data);

        $password = $request->validated()['password'] ?? null;
        if (is_string($password) && $password !== '') {
            $user->password = Hash::make($password);
        }

        $user->save();

        return redirect()->route('admin.users.index')
            ->with('status', __('Usuario actualizado correctamente.'));
    }

    public function destroy(Request $request, User $user): RedirectResponse
    {
        if ($user->role === UserRole::Admin && User::where('role', UserRole::Admin)->count() <= 1) {
            return redirect()->route('admin.users.index')
                ->withErrors(['delete' => __('No se puede eliminar el único administrador.')]);
        }

        if ($user->is($request->user())) {
            return redirect()->route('admin.users.index')
                ->withErrors(['delete' => __('No puede eliminar su propia cuenta desde aquí.')]);
        }

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('status', __('Usuario eliminado correctamente.'));
    }
}
