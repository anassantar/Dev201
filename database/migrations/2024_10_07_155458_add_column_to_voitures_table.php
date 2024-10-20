<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->string("prix");
            $table->date("date_mise");
            $table->integer("nbr_cheveux");
            // $table->integer("nbr_cheveux")->nullable(true);
            $table->string("email");
            // $table->unique("email");
            $table->string("couleur",50)->change();
            // $table->string("couleur",50)->default("blache")->change();
            // change kangolo lehom bli ra bghena nmodifiew dik column machi nziduha;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('voitures', function (Blueprint $table) {
            $table->dropColumn("prix");
            $table->dropColumn("date_mise");
            $table->dropColumn("nbr_cheveux");
            // $table->dropUnique("voitures_email_unique");
            // $table->dropUnique("email");
            $table->integer("nbr_cheveux")->nullable(false);
            $table->string("couleur")->default("null");
        });
    }
};
