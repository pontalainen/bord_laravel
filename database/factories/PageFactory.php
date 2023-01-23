<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            // 'content' => $this->faker->randomHtml(1, 1),
            'content' => '<h2>Bananas</h2><h3>Bananas, am I right guys??</h3><p>This is so <b>bananas</b>, like <em>wow</em>, just <em>bananas</em>, you know?!</p><p>Some code like &lt;h1&gt;banana-heading&lt;/h1&gt; and stuff</p><h4>Just some random fourth largest heading...</h4><p>Aaaand bananas are in fact berries, like what the actual fuck</p>',
            'image_path' => 'https://www.shutterstock.com/shutterstock/photos/1582221163/display_1500/stock-photo-small-vga-camera-for-micro-controllers-x-pixels-demention-1582221163.jpg',
            'primary_card' =>
            $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter() . ':' .
                $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter() . ':' .
                $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter() . ':' .
                $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter(),
            'secondary_card' =>
            $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter() . ':' .
                $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter() . ':' .
                $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter() . ':' .
                $this->faker->numberBetween(0, 9) .
                $this->faker->randomLetter(),
            'user_id' => 1,
        ];
    }
}
