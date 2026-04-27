<?php

namespace Tests\Feature;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminUserManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_cannot_access_admin_users(): void
    {
        $this->get(route('admin.users.index'))
            ->assertRedirect(route('login'));
    }

    public function test_non_admin_cannot_access_admin_users(): void
    {
        $user = User::factory()->create(['role' => UserRole::Radio]);

        $this->actingAs($user)
            ->get(route('admin.users.index'))
            ->assertForbidden();
    }

    public function test_admin_can_view_users_index(): void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)
            ->get(route('admin.users.index'))
            ->assertOk()
            ->assertSee('Usuarios');
    }

    public function test_admin_can_create_user(): void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)
            ->post(route('admin.users.store'), [
                'name' => 'Nuevo usuario',
                'email' => 'nuevo@example.com',
                'password' => 'password',
                'password_confirmation' => 'password',
                'role' => UserRole::Kawsay->value,
            ])
            ->assertRedirect(route('admin.users.index'));

        $this->assertDatabaseHas('users', [
            'email' => 'nuevo@example.com',
            'role' => UserRole::Kawsay->value,
        ]);
    }

    public function test_admin_can_open_panel_program_area(): void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)
            ->get(route('panel.colegio'))
            ->assertOk()
            ->assertSee('Colegio');
    }

    public function test_non_admin_cannot_open_other_program_panel(): void
    {
        $user = User::factory()->create(['role' => UserRole::Radio]);

        $this->actingAs($user)
            ->get(route('panel.colegio'))
            ->assertForbidden();
    }
}
