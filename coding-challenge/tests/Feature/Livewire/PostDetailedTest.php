<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostDetailed;
use Livewire\Livewire;
use Tests\TestCase;

class PostDetailedTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(PostDetailed::class)
            ->assertStatus(200);
    }
}
