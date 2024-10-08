<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhotoAndRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo')->nullable(); // Kolom untuk menyimpan foto
            $table->string('role')->default('user'); // Kolom untuk menyimpan peran, default ke 'user'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('photo'); // Menghapus kolom foto jika migrasi dibatalkan
            $table->dropColumn('role'); // Menghapus kolom role jika migrasi dibatalkan
        });
    }
}
