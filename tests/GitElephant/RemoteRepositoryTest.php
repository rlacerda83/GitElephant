<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 30/07/14
 * Time: 23.24
 */

namespace GitElephant;

class RemoteRepositoryTest extends TestCase
{
    public function test_remote_access()
    {
        $conn = ssh2_connect('192.168.33.10', 22);
        ssh2_auth_pubkey_file($conn, 'vagrant', '~/.ssh/id_rsa.pub', '~/.vagrant.d/insecure_private_key');
        $repo = new RemoteRepository('vagrant@192.164.33.10:git-elephant-test.git', null, null, $conn);
        var_dump($repo->getMainBranch());
    }
} 