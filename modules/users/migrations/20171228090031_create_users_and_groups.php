<?php


use Framework\Modules\Migration\MigrationBase;

class CreateUsersAndGroups extends MigrationBase
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // create the table
        $table = $this->table('mailingMails', ['id' => true]);
        $table->addColumn('subject', 'string')
            ->addColumn('tag', 'string')
            ->addColumn('template', 'string')
            ->addColumn('sendAt', 'datetime')
            ->addTimestamps()
            ->create();

        $table = $this->table('mailingMailEmails', ['id' => true]);
        $table->addColumn('mailId', 'integer')
            ->addColumn('email', 'string')
            ->addColumn('send', 'boolean')
            ->addForeignKey("mailId", "mailingMails", "id", ['delete'=> "CASCADE"])
            ->addTimestamps()
            ->create();



            //->addForeignKey("formRowId", "formGeneratorBasicRows", "id", ['delete'=> "CASCADE"])
    }
}
