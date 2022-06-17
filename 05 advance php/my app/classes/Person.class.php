<?php
class Person implements IEntity {

    public $id;
    public $firstname;
    public $lastname;
    public static function getById($id) {
        $conn = mysqli_connect("localhost","root","","exercise");
        $res = mysqli_query($conn,"select * from persons where id = " . $id);
        $person_row = mysqli_fetch_row($res);
        $person = new Person;
        $person->id = $person_row[0];
        $person->firstname = $person_row[1];
        $person->lastname = $person_row[2];
        return $person;
    }
    public function Update(){
        $conn = mysqli_connect("localhost","root","","exercise");
        mysqli_query($conn, "update persons set firstname='{$this->firstname}',lastname='{$this->lastname}' where id = {$this->id}");
    }

    public function Insert() {
        $conn = mysqli_connect("localhost","root","","exercise");
        mysqli_query($conn,"insert into persons values(null,'{$this->firstname}','{$this->lastname}')");
    }
}