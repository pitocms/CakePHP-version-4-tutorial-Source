<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '2',
                'username' => 'test232',
                'email' => 'test@test.com',
                'amount' => '0',
                'password' => '$2y$10$jQaO3/f3tpSjbpduPmZ59O99knmqxB8TtQzlfYPfc11AV7Cq/K5S.',
                'image' => 'user-img/p120274.jpg',
                'status' => '1',
                'created' => '2020-04-01 07:14:42',
                'modified' => '2020-04-12 13:41:24',
            ],
            [
                'id' => '3',
                'username' => 'pitocms',
                'email' => 'pitocms@yahoo.com',
                'amount' => '0',
                'password' => '$2y$10$yIXWSpsXIOeFoqomVHaggesm6rpUDFVTv2375uSHRKLQJVuUgf7X.',
                'image' => 'user-img/p120274.jpg',
                'status' => '1',
                'created' => '2020-04-03 15:15:44',
                'modified' => '2020-05-03 09:57:41',
            ],
            [
                'id' => '13',
                'username' => 'jone2',
                'email' => 'jone2@test.com',
                'amount' => '0',
                'password' => '$2y$10$blZsKiYBTS88eRjG.lpoI.wCzdl20zAAJIlWoOWxqehK8p72KicrS',
                'image' => 'user-img/p120274.jpg',
                'status' => '1',
                'created' => '2020-05-03 09:58:53',
                'modified' => '2020-05-03 09:58:53',
            ],
            [
                'id' => '14',
                'username' => 'testcsrf',
                'email' => 'testcsrf@test.com',
                'amount' => '0',
                'password' => '$2y$10$5DXxOiALqqpsEq2TI5QXVujO8KMhivkwPr/0AuMZGaWw4MVv9bPWO',
                'image' => 'user-img/',
                'status' => '1',
                'created' => '2020-05-20 15:41:50',
                'modified' => '2020-05-20 15:41:50',
            ],
            [
                'id' => '15',
                'username' => 'pitocmsss',
                'email' => 'demo123@admin.comm',
                'amount' => '0',
                'password' => '$2y$10$Tm7y0yqK1GvDTml.IadvWuKQ14.Zkz.a0Agxo5fMqktKV8au/IlMS',
                'image' => 'user-img/',
                'status' => '1',
                'created' => '2020-05-20 15:48:28',
                'modified' => '2020-05-20 15:48:28',
            ],
            [
                'id' => '16',
                'username' => 'dssbdas',
                'email' => 'demo123sss@admin.com',
                'amount' => '0',
                'password' => '$2y$10$vbdEV3.jZ1XBHM6n8A95I.ymGd0U1q3/QouROEEtTRRDOtgMfPu/C',
                'image' => 'user-img/',
                'status' => '1',
                'created' => '2020-05-20 15:53:18',
                'modified' => '2020-05-20 15:53:18',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
