<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('report_date');
            $table->string('report_type');
            $table->string('status');
            //location
            $table->string('area');
            $table->string('specific_location')->nullable();
            //contact
            $table->string('contact_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact_method')->nullable();
            $table->string('visit_context')->nullable();
            //interaction
            $table->string('intraction_result')->nullable();
            $table->string('intrest_level')->nullable();
            //follow-up
            $table->string('commitment')->nullable();
            $table->string('next_action')->nullable();
            $table->string('next_follow_up_date')->nullable();
            $table->string('related_report_id')->nullable();
            //additionals
            $table->string('description')->nullable();
            $table->string('remark')->nullable();

            $table->string('next_follow_up_date')->nullable();
            $table->string('related_report_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
