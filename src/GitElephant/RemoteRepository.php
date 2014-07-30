<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 30/07/14
 * Time: 23.32
 */

namespace GitElephant;


use GitElephant\Command\Caller\CallerSSH2;

class RemoteRepository extends Repository
{
    public function __construct($repositoryPath, GitBinary $binary = null, $name = null, $connection = null)
    {
        parent::__construct($repositoryPath, $binary, $name);
        $caller = new CallerSSH2($connection);
        $this->setCaller($caller);
    }
} 