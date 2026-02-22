<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUsuarios extends Migration
{
    public function up()
    {
        $field_usuario_id = [
            'usuario_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
        ];
        $field_email = [
            'email' => ['type' => 'varchar', 'constraint' => 50, 'null' => false, 'comment' => 'Correo electrónico que hará las veces de cuenta']
        ];
        $field_password = [
            'password' => ['type' => 'varchar', 'constraint' => 150, 'null' => true, 'comment' => 'Contraseña de la cuenta'],
        ];
        $field_estado = [
            'estado' => ['type' => 'ENUM', 'constraint' => ['activo', 'inactivo'], 'null' => false, 'default' => 'inactivo', 'comment' => 'Estado de la cuenta, inactivo por defecto']
        ];
        $field_token_activacion = [
            'token_activacion' => ['type' => 'VARCHAR', 'constraint' => 100, 'comment' => 'Campo de verificación para activar la cuenta']
        ];
        $field_token_reset = [
            'token_reset' => ['type' => 'VARCHAR', 'constraint' => 100, 'comment' => 'Token para resetear la contraseña']
        ];
        $field_token_reset_caducidad = [
            'token_reset_caducidad' => ['type' => 'datetime', 'null' => true, 'comment' => 'Fecha en la que caduca el token de reseteo de contraseña']
        ];
        $this->forge->addField($field_usuario_id);
        $this->forge->addField($field_email);
        $this->forge->addField($field_password);
        $this->forge->addField($field_estado);
        $this->forge->addField($field_token_activacion);
        $this->forge->addField($field_token_reset);
        $this->forge->addField($field_token_reset_caducidad);
        $this->forge->addKey('usuario_id', true);
        $this->forge->createTable('usuarios', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('usuarios', true);
    }
}
