<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 1',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 2',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 3',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 4',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 5',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 6',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 7',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 8',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 9',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 10',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 11',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 1,
            'session_description' => 'Session 12',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
        DB::table('course_sessions')->insert([
            'course_id' => 2,
            'session_description' => 'Session 1',
            'session_material_link' => 'https://binus.ac.id/',
            'session_vidio_link' => 'https://www.youtube.com/',
            'session_book_link' => 'https://www.gramedia.com/?utm_source=InvolveAsia&session_id=abe8a542e32b468eb59ae6baaf35b5c4',
            'created_at' => now()
        ]);
    }
}
