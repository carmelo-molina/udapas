<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNewColumnsToUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addColumn('usuarios', [
            'password' => [
                'type' => 'varchar',
                'constraint' => 150,
                null => true,
                'comment' => 'Contraseña de la cuenta',
            ]
        ]);
        $this->forge->addColumn('usuarios', [
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
                null => true,
                'comment' => 'Correo electronico del usuario',
            ]
        ]);
        $this->forge->addColumn('usuarios', [
            'estado' => [
                'type' => 'ENUM',
                'constraint' => ['activo', 'inactivo'],
                'default' => 'inactivo',
                null => false,
                'comment' => 'Estado de cuenta activo o inactivo',
            ]
        ]);
        $this->forge->addColumn('usuarios', [
            'token_activacion' => [
                'type' => 'varchar',
                'constraint' => 100,
                'comment' => 'Campo de verificación para activar la cuenta'
            ]
        ]);
        $this->forge->addColumn('usuarios', [
            'token_de_reinicio' => [
                'type' => 'varchar',
                'constraint' => 100,
                'comment' => 'Campo de verificacion para reiniciar o resetear el password'
            ]
        ]);
        $this->forge->addColumn('usuarios', [
            'fecha_caducidad_token' => [
                'type' => 'datetime', 
                'null' => true,
                'comment' => 'Fecha en la que caduca el token de reinicio o reseteo de contraseña'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('usuarios', 'password');
        $this->forge->dropColumn('usuarios', 'email');
        $this->forge->dropColumn('usuarios', 'estado');
        $this->forge->dropColumn('usuarios', 'token_activacion');
        $this->forge->dropColumn('usuarios', 'token_de_reinicio');
        $this->forge->dropColumn('usuarios', 'fecha_caducidad_token');
    }
}
