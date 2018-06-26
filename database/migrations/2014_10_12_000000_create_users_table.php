<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('type');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        $verifyEmpty = User::all();
        if($verifyEmpty->count() == 0 || $verifyEmpty == null){
		    $adminType = new User();
            $adminType->name = 'admin';
            $adminType->email = 'admin@gmail.com';
            $adminType->password = Hash::make('a');
            $adminType->type = '1';
		    $adminType->save();

		    $alunoType = new User();
            $alunoType->name = 'aluno';
            $alunoType->email = 'aluno@gmail.com';
            $alunoType->password = Hash::make('a');
            $alunoType->type = '2';
		    $alunoType->save();

		    $professorType = new User();
            $professorType->name = 'professor';
            $professorType->email = 'professor@gmail.com';
            $professorType->password = Hash::make('a');
            $professorType->type = '3';
		    $professorType->save();
		}

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');   
    }
}
