<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostsOverview;
use Livewire\Livewire;
use Tests\TestCase;

class PostsOverviewTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(PostsOverview::class)
            ->assertStatus(200);
    }
}
