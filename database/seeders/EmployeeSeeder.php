<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Employee
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Input Db
        $input['Nama_User']= 'Muhamad Ariq Rasyid';
        $input['Email_User']='mariq.rasyid@gmail.com';
        $input['Password'] = 'Blizzard03';
        $input['Nomor_Telepon']='+6283879527973';
        $input['Alamat']='Jl. Suryalaya I no 1';
        $input['Role']='Admin';

        Employee::create($input);
    }
}
