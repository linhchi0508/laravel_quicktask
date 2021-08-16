<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

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
            'fullname' => $this->faker->name(),
            'avatar' => "storage/image/account.png",
            'student_number' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber(), 
            'major' => $major[mt_rand(0, 4)],
            'birthday' => $this->faker->date('Y-m-d', 'now'),
        ];
    }
}
