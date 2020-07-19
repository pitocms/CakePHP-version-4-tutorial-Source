<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddAgeAndFirstNameToStudents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('students');
        $table->addColumn('age', 'string', [
            'default' => null,
            'limit' => 11,
            'null'  => false,
            'after' => 'country'
        ]);
        $table->addColumn('firstname', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'after' => 'country'
        ]);
        $table->update();
    }
}
