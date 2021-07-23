<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	public function up()
	{
		

        Schema::table('employee_data', function(Blueprint $table) {
            $table->foreign('Degree_Id')->references('id')->on('degrees');
            $table->foreign('EmployeeStatus_Id')->references('id')->on('employee_statuses');
            $table->foreign('Governorate_Id')->references('id')->on('governorates');
            $table->foreign('groupdministrator_Id')->references('id')->on('groupdministrators');
            $table->foreign('Religion_Id')->references('id')->on('religions');
            $table->foreign('Review_Id')->references('id')->on('reviews');
            $table->foreign('SocialState_Id')->references('id')->on('social_states');
            $table->foreign('TypeBlood_Id')->references('id')->on('type_bloods');
            $table->foreign('WorkNature_Id')->references('id')->on('work_natures');
            $table->foreign('Rank_Id')->references('id')->on('ranks');
            $table->foreign('Sex_Id')->references('id')->on('sexes');
                        
        });
        Schema::table('famely_data', function(Blueprint $table) {
            $table->foreign('relative_relation_ID')->references('id')->on('relative_relations');
            $table->foreign('employee_data_ID')->references('id')->on('employee_data');
                      
        });

	}

	public function down()
	{
		
	}
}
