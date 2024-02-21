<?php

use App\Category;
use App\Role;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;

class StarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                "id" => 1,
                "categoryName" => "Laravel",
                "iconImage" => "https://cdn-icons-png.flaticon.com/128/13988/13988868.png",
            ],
            [
                "id" => 2,
                "categoryName" => "VueJs",
                "iconImage" => "https://cdn-icons-png.flaticon.com/128/13988/13988868.png",
            ],
            [
                "id" => 3,
                "categoryName" => "Python",
                "iconImage" => "https://cdn-icons-png.flaticon.com/128/13988/13988868.png",
            ],
            [
                "id" => 4,
                "categoryName" => "Flutter",
                "iconImage" => "https://cdn-icons-png.flaticon.com/128/13988/13988868.png",
            ],
            [
                "id" => 5,
                "categoryName" => "Bootstrap",
                "iconImage" => "https://cdn-icons-png.flaticon.com/128/13988/13988868.png",
            ],
        ]);
        Tag::insert([
            [
                "id" => 1,
                "tagName" => "Programming",
            ],
            [
                "id" => 2,
                "tagName" => "Design",
            ],
            [
                "id" => 3,
                "tagName" => "Development",
            ],
            [
                "id" => 4,
                "tagName" => "Education",
            ],
            [
                "id" => 5,
                "tagName" => "Entertainment",
            ],
        ]);
        Role::insert([
            [
                'id' => 1,
                'roleName' => "Admin",
                'permission'=>'[{"resourceName":"Home","read":true,"write":true,"update":true,"delete":true,"name":"/"},{"resourceName":"Tags","read":true,"write":true,"update":true,"delete":true,"name":"tags"},{"resourceName":"Category","read":true,"write":true,"update":true,"delete":true,"name":"category"},{"resourceName":"Createblogs","read":true,"write":true,"update":true,"delete":true,"name":"createBlog"},{"resourceName":"Blogs","read":true,"write":true,"update":true,"delete":true,"name":"blogs"},{"resourceName":"Adminusers","read":true,"write":true,"update":true,"delete":true,"name":"adminusers"},{"resourceName":"Role","read":true,"write":true,"update":true,"delete":true,"name":"role"},{"resourceName":"AssignRole","read":true,"write":true,"update":true,"delete":true,"name":"assignRole"}]',
                'isAdmin' => 1,
            ],
            [
                'id' => 2,
                'roleName' => "Editor",
                'permission'=>'[{"resourceName":"Home","read":true,"write":true,"update":true,"delete":true,"name":"/"},{"resourceName":"Tags","read":true,"write":true,"update":true,"delete":true,"name":"tags"},{"resourceName":"Category","read":true,"write":true,"update":true,"delete":true,"name":"category"},{"resourceName":"Createblogs","read":true,"write":true,"update":true,"delete":true,"name":"createBlog"},{"resourceName":"Blogs","read":true,"write":true,"update":true,"delete":true,"name":"blogs"},{"resourceName":"Adminusers","read":true,"write":true,"update":true,"delete":true,"name":"adminusers"},{"resourceName":"Role","read":true,"write":true,"update":true,"delete":true,"name":"role"},{"resourceName":"AssignRole","read":true,"write":true,"update":true,"delete":true,"name":"assignRole"}]',
                'isAdmin' => 0,
            ],
            [
                'id' => 3,
                'roleName' => "Moderator",
                'permission'=>'[{"resourceName":"Home","read":true,"write":true,"update":true,"delete":true,"name":"/"},{"resourceName":"Tags","read":true,"write":true,"update":true,"delete":true,"name":"tags"},{"resourceName":"Category","read":true,"write":true,"update":true,"delete":true,"name":"category"},{"resourceName":"Createblogs","read":true,"write":true,"update":true,"delete":true,"name":"createBlog"},{"resourceName":"Blogs","read":true,"write":true,"update":true,"delete":true,"name":"blogs"},{"resourceName":"Adminusers","read":true,"write":true,"update":true,"delete":true,"name":"adminusers"},{"resourceName":"Role","read":true,"write":true,"update":true,"delete":true,"name":"role"},{"resourceName":"AssignRole","read":true,"write":true,"update":true,"delete":true,"name":"assignRole"}]',
                'isAdmin' => 0,
            ],
            [
                'id' => 4,
                'roleName' => "User",
                'permission'=>'[{"resourceName":"Home","read":false,"write":false,"update":false,"delete":false,"name":"/"},{"resourceName":"Tags","read":false,"write":false,"update":false,"delete":false,"name":"tags"},{"resourceName":"Category","read":false,"write":false,"update":false,"delete":false,"name":"category"},{"resourceName":"Createblogs","read":false,"write":false,"update":false,"delete":false,"name":"createBlog"},{"resourceName":"Blogs","read":false,"write":false,"update":false,"delete":false,"name":"blogs"},{"resourceName":"Adminusers","read":false,"write":false,"update":false,"delete":false,"name":"adminusers"},{"resourceName":"Role","read":false,"write":false,"update":false,"delete":false,"name":"role"},{"resourceName":"AssignRole","read":false,"write":false,"update":false,"delete":false,"name":"assignRole"}]',
                'isAdmin' => 0,
            ],
        ]);

        User::insert([
            [
                'id' => 1,
                'fullName' => "Barat Ahmed",
                'email' => "admin@gmail.com",
                'password' => bcrypt("password"),
                'role_id' => 1,
                'isActivated' => 1,
            ]
        ]);
    }
}
