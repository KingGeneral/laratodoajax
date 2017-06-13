<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Task;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tasks');
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->string('description');
            $table->boolean('done');
            $table->timestamps();
        });

        //from class task create task 1
        Task::create([
            'task'          => 'Weekends',
            'description'   => 'Holiday',
            'done'          => false,
        ]);

        Task::create([
            'task'          => 'Night Code',
            'description'   => 'really night',
            'done'          => false,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
