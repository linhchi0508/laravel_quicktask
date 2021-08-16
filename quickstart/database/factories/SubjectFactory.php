<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $major = [
            "Khoa Công nghệ thông tin",
            "Khoa Điện tử viễn thông",
            "Khoa Tự động hóa",
            "Khoa Dệt may",
            "Khoa Toán tin",
        ];

        return [
            'title' => $this->faker->name(),
            'subject_code' => $this->faker->unique()->ean8,
            'major' => $major[mt_rand(0, 4)],
        ];
    }
}
