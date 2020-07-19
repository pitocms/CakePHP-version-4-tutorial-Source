<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RenameFirstNameToLastNameFromStudents extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('students');
        $table->renameColumn('firstname', 'lastname')->update();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('students');
        $table->renameColumn('lastname', 'firstname')->update();
    }
}
