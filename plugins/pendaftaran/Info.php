<?php

return [
    'name'          =>  'Pendaftaran',
    'description'   =>  'Pengelolaan data pendaftaran pasien.',
    'author'        =>  'Basoro',
    'version'       =>  '1.2',
    'compatibility' =>  '3.*',
    'icon'          =>  'user-plus',

    'install'       =>  function () use ($core) {
        $core->db()->pdo()->exec("INSERT INTO `lite_options` (`module`, `field`, `value`) VALUES ('pendaftaran', 'cekstatusbayar', '0')");
        $core->db()->pdo()->exec("INSERT INTO `lite_options` (`module`, `field`, `value`) VALUES ('pendaftaran', 'bpjs', 'BPJS')");
    },
    'uninstall'     =>  function () use ($core) {
        $core->db()->pdo()->exec("DELETE FROM `lite_options` WHERE `module` = 'pendaftaran'");
    }
];
