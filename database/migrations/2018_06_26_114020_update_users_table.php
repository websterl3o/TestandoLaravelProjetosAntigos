<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

use App\User;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $verifyEmpty = DB::table('users')->get();
        if($verifyEmpty->count()){
            foreach ($verifyEmpty as $key => $user) {
                $unicUser = User::find($user->id);
                $unicUser->delete();
            }
        }
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('type');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('type')->references('id')->on('type_user');
        });
        foreach ($verifyEmpty as $key => $user) {
            $aux = get_object_vars($user);
            $unicUser = new User($aux);
            $unicUser->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $verifyEmpty = User::all();
        if($verifyEmpty->count()){
            foreach ($verifyEmpty as $key => $user) {
                $unicUser = User::find($user->id);
                $unicUser->delete();
            }
        }
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('type');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->integer('type');
        });
        foreach ($verifyEmpty as $key => $user) {
            $user->save();
        }
    }
}
