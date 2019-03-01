<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->truncateTable([
            'facultades',
            'escuelas_profesionales',
            'roles',
            'usuarios',
            'alumnos',
            'cursos_observados',
            'info_academ',
            'unayoe_perfiles',
            'mensajes',
            'citas',
            'perfiles_psicologicos',
            'cuestionario_evaluaciones',
            'resultados',
            'estado_perfiles',
            'preguntas',
            'alternativas',
            'respuestas'
        ]);
        // $this->call(UsersTableSeeder::class);
        
        $this->call(FacultadSeeder::class);
        $this->call(EscuelaProfesionalSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(CursoObservadoSeeder::class);
        $this->call(InfoAcademSeeder::class);
        $this->call(UnayoePerfilSeeder::class);
        $this->call(MensajeSeeder::class);
        $this->call(CitaSeeder::class);
        $this->call(PerfilPsicologicoSeeder::class);
        $this->call(CuestionarioEvaluacionSeeder::class);
        $this->call(ResultadoSeeder::class);
        $this->call(EstadoPerfilSeeder::class);
        $this->call(PreguntaSeeder::class);
        $this->call(AlternativaSeeder::class);
        $this->call(RespuestaSeeder::class);
    }


    public function truncateTable(array $tables)
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        \Schema::disableForeignKeyConstraints();
        
        foreach($tables as $table){
             DB::table($table)->truncate();
        }
       
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        \Schema::enableForeignKeyConstraints();
    }
}
