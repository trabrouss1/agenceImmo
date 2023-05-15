<?php

use App\Models\Options;
use App\Models\Property;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('options_property', function (Blueprint $table) {
            $table->foreignIdFor(Options::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Property::class)->constrained()->cascadeOnDelete();
            $table->primary(['options_id', 'property_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_property');
    }
};
