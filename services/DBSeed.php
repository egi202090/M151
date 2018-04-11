<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 11.04.2018
 * Time: 09:29
 */

namespace services;


class DBSeed
{
    private $dbConnection;


    /**
     * @return mixed
     */
    public function resetDatabase(){
        session_destroy();

        $this->dbConnection = new \PDO('mysql:host=localhost;','root','');
        /**
         * Drop database and use the new created one
         */
        $this->dbConnection->prepare($this->dropDatabase('EggsOff'))->execute();
        $this->dbConnection->prepare($this->createDatabase('EggsOff'))->execute();
        $this->dbConnection->prepare($this->useDatabase('EggsOff'))->execute();
        /**
         * creates the tables and also the RI is created
         */
        $this->dbConnection->prepare('CREATE TABLE IF NOT EXISTS Userdb (id int not null auto_increment, username VARCHAR(50), userpassword(50), icon VARCHAR(50),beschreibung VARCHAR(125), PRIMARY KEY(id)); ')->execute();
        $this->dbConnection->prepare('CREATE TABLE IF NOT EXISTS Genres (id int not null auto_increment, VARCHAR(50),PRIMARY KEY(id));')->execute();
        $this->dbConnection->prepare('CREATE TABLE IF NOT EXISTS Media (id int not NULL auto_increment, medianame(50), userFK int NOT NULL, PRIMARY KEY(id), FOREIGN KEY(userFK) REFERENCES Userdb(id));')->execute();
        $this->dbConnection->prepare('CREATE TABLE IF NOT EXISTS MediaGeneres (id int not NULL auto_increment, mediaFK int not null, genreFK int not null, PRIMARY KEY(id),FOREIGN KEY(mediaFK) REFERENCES Media(id), FOREIGN KEY(genreFK) REFERENCES Genres(id));')->execute();

        $this->dbConnection = null;
        $this->dbConnection = DBConnection::getDbConnection();

    }

    private function dropDatabase($dbName){
        $stmt ="drop database if exists".$dbName;
        return$stmt;
    }

    private function createDatabase($dbName){
        $stmt="create database if not exists".$dbName;
        return$stmt;
    }

    private function useDatabase($dbName){
        $stmt="use".$dbName;
        return$stmt;
    }
}