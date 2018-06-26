<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\TypeUser;

class CreateTypeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();
        });

        $verifyEmpty = TypeUser::all();
       	if($verifyEmpty->count() == 0 || $verifyEmpty == null){
		    $adminType = new TypeUser();
		    $adminType->description = 'admin';
		    $adminType->save();

		    $alunoType = new TypeUser();
		    $alunoType->description = 'aluno';
		    $alunoType->save();

		    $professorType = new TypeUser();
		    $professorType->description = 'professor';
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
        Schema::dropIfExists('type_user');
    }
}
