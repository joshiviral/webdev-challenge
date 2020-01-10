<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemAuction', function (Blueprint $table) {
            $table->date('date');
            $table->string('category');
            $table->string('lottitle');
            $table->string('lotlocation');
            $table->string('lotconditon');
            $table->string('pretax');
            $table->string('taxname');
            $table->string('taxamount');
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
        Schema::dropIfExists('budgets');
    }
}