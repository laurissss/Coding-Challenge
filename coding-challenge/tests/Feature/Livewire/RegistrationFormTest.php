<?php

namespace Tests\Feature\Livewire;

use App\Livewire\RegistrationForm;
use Livewire\Livewire;
use Tests\TestCase;

class RegistrationFormTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(RegistrationForm::class)
            ->assertStatus(200);
    }
}
