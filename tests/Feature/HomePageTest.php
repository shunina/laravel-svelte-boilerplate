<?php

namespace Tests\Feature;

use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_route_renders_the_home_inertia_component(): void
    {
        $this->get('/')->assertInertia(fn (Assert $page) => $page->component('Home'));
    }

    public function test_home_component_has_a_matching_svelte_page_file(): void
    {
        // scandir (not is_file) so a casing mismatch fails on case-insensitive filesystems too.
        $pages = scandir(resource_path('js/pages'));

        $this->assertContains('Home.svelte', $pages);
    }
}
