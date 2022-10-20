<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Category;
class AllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('color')->default('#fff');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
          
        });

         Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_done')->default(false);
            $table->string('title');
            $table->string('description');
            $table->dateTime('due_date');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
            $table->foreignIdFor(Category::class)->references('id')->on('categories')->onDelete('CASCADE');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
           $table->dropForeignIdFor(User::class);
        });

        Schema::dropIfExists('categories');

        //tasks

        Schema::table('tasks', function (Blueprint $table) {
           $table->dropForeignIdFor(Category::class);
           $table->dropForeignIdFor(User::class);
        });

        Schema::dropIfExists('tasks');


    }
}
