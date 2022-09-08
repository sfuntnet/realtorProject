<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    protected string $table = 'admin';
    protected array $columns = ['id', 'name', 'email'];
    protected array $data = [
        [1, 'muhammet', 'muhammet@gmail.com'],
    ];

    public function up(): void
    {
        Schema::connection($this->connection)->create($this->table, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $this->seed();
    }

    protected function seed(): void
    {
        $columns = collect($this->columns);
        $chunks = collect($this->data)->map(function ($item) use ($columns) {
            return $columns->combine($item)->merge(collect([
                'password' => Hash::make('asd234*'),
            ]));
        })->chunk(1000);

        foreach ($chunks as $chunk) {
            DB::connection($this->connection)->table($this->table)->insert($chunk->toArray());
        }
    }

    public function down()
    {
        Schema::connection($this->connection)->dropIfExists($this->table);
    }
};
