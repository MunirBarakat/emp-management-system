<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_data', function (Blueprint $table) {
            $table->id();
            $table->string('FinancialNumber')->unique(); //الرقم المالي
            $table->string('CardNumber')->unique();      //رقم الهوية
            $table->string('Name'); //الاسم رباعي
            $table->string('Tel_No1')->unique(); // 1رقم الجوال
            $table->string('Tel_No2')->unique(); // رقم الجوال2
            $table->date('BOD');   //تاريخ الميلاد
            $table->date('RD');// تاريخ الرتبة
            $table->date('TD');// تاريخ الاخذ
            $table->text('Address'); // العنوان
            $table->longText('Notes'); // ملاحظات
            
            $table->bigInteger('Degree_Id')->unsigned(); //الدرجة العلمية
            $table->bigInteger('EmployeeStatus_Id')->unsigned();// حالة الموظف
            $table->bigInteger('Governorate_Id')->unsigned(); // المحافظة
            $table->bigInteger('groupdministrator_Id')->unsigned(); //مسئول المجموعة
            $table->bigInteger('Religion_Id')->unsigned(); // الديانة
            $table->bigInteger('Review_Id')->unsigned(); // تقييم الموظف
            $table->bigInteger('SocialState_Id')->unsigned(); // الحالة الاجتماعية
            $table->bigInteger('TypeBlood_Id')->unsigned(); // فصيلة الدم
            $table->bigInteger('WorkNature_Id')->unsigned();// طبيعة العمل
            $table->bigInteger('Rank_Id')->unsigned(); // الرتبة العسكرية
            $table->bigInteger('Sex_Id')->unsigned(); // الجنس

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
        Schema::dropIfExists('employee_data');
    }
}
