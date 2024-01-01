<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = fake()->dateTimeBetween('7:00', '12:00')->format('H:i');
        $endTime = fake()->dateTimeBetween('12:00', '16:00')->format('H:i');

        return [
            'subject_id' => fake()->numberBetween(101, 103),
            'hari' => fake()->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']),
            'jam_mulai' => $startTime,
            'jam_selesai' => $endTime,
            'ruangan' => 'H' . fake()->numberBetween(1, 10),
            'kode_absensi' => 'C' . fake()->numberBetween(1, 10),
            'tahun_akademik' => fake()->randomElement(['2022/2023', '2021/2022']),
            'semester' => fake()->randomElement(['Ganjil', 'Genap']),
            'created_by' => fake()->word,
            'updated_by' => fake()->word,
            'deleted_by' => fake()->word,
        ];
    }
}
