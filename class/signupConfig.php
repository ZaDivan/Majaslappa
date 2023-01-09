<?php
require_once("database.php");

class SignUpConfig{
    private $id;
    private $firstname;
    private $lastname;
    private $address;
    protected $dbCnx;


    public function __contruct($id=0,$firstname="",$lastname="",$address=""){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->address = $address;
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PWD,[ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASS0C]);
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setFirstName($firstname){
        $this->firstname = $firstname;
    }
    public function getFirstName(){

        return $this->firstname;
    }

    public function setLastName($lastname){
        $this->lastname = $lastname;
    }
    public function getLastName(){
        return $this->lastname;
    }

    public function setAdress($address){
        $this->address = $address;
    }
    public function getAdress(){
        return $this->address;
    }

    public function insertData(){
        try{
            $stm = $this->dbCnx->prepare("INSERT INTO users(firstname, lastname, address) values(?,?,?)");
            $stm->execute([$this->firstname,$this->lastname,$this->address]);
            echo "<script>alert('data saved succesfully')document.location='allData.php'</script>"
        }
        catch(Exeption $e){
            return $e->getMessage();
        }
    }
public function fetchAll(){
    try{
        $stm = $this->dbCnx->prepare("SELECT * FROM users");
        $stm->execute();
        return $stm->fetchAll();
    }
    catch(Exepction #e){
        return $e->getMessage();
    }
}
public function fetchOne(){
    try{

    $stm = this->dbCnx->prepare("SELECT FROM users WHERE id = ?");
    $stm->execute([$this->id]);
    return $stm->fetchAll();
     }
     catch(Exeption $e){
        return $e->getMessage();
     }
}
public function update(){
    try{
        $stm = $this->dbCnx->prepare("UPDATE SET firstname = ?, lastname=?, adress=? WHERE id = ?");
        $stm->execute([$this->firstname,$this->lastname,$this->address],$this->id);
    }
    catch(Exeption $e){
        return $e->getMessage();
    }
}
public function delete(){
    try{
        $stm = $this->dbCnx->prepare("DELETE FROM users WHERE id = ?");
        $stm->execute([$this->id]);
        return $stm->fetchAll();
        echo "<script>alert('data deleted succesfully');document.location='allData.php'</script>"
    }
    catch(Exeption $e){
        return $e->getMessage();
    }
}
}

?>