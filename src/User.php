<?php
namespace Itb;
use Mattsmithdev\PdoCrud\DatabaseTable;
use Mattsmithdev\PdoCrud\DatabaseManager;
use Itb\RegisterController;

class User extends DatabaseTable
{
    /**
     * setting constant values to see
     * if either the user
     * or the admin has logged in to the system
     */
    const ROLE_USER = 1;
    const ROLE_ADMIN = 2;


    /**
     * @var
     * all the variables for the user
     */
    public $id;
    public $name;
    public $username;
    public $address;
    public $tel;
    public $email;
    public $date;
    public $password;
    public $secondPassword;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     * setting the hashed password
     */
    public function setPassword($password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->password = $hashedPassword;
    }

    /**
     * @return mixed
     */
    public function getSecondPassword()
    {
        return $this->secondPassword;
    }

    /**
     * @param $secondPassword
     */
    public function setSecondPassword($secondPassword)
    {
        $this->secondPassword = $secondPassword;
    }

    /**
     * @param $username
     * @param $password
     * @return bool
     *
     * searching the database tables to see
     * if this user has registered on to the system already
     * if not it's returning a false answer
     *
     * is it has, getting the hashed password
     * returning it
     */
    public static function canFindMatchingUsernameAndPassword($username, $password)
    {
        $user = User::getOneByUsername($username);

        // if no record has this username, return FALSE
        if(null == $user){
            return false;
        }

        // hashed correct password
        $hashedStoredPassword = $user->getPassword();

        // return whether or not hash of input password matches stored hash
        return password_verify($password, $hashedStoredPassword);
    }

    /**
     * @param $username
     * @return mixed|null
     *
     * getting a connection with the database
     * making the sql statement to search for the username
     * fetching the found variable
     * executing the statements
     *
     * if the bject was found it will be returned
     * otherwise it will return a zero value
     */
    public static function getOneByUsername($username) {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = 'SELECT * FROM users WHERE username=:username';
        $statement = $connection->prepare($sql);
        $statement->bindParam(':username', $username, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, __CLASS__);
        $statement->execute();

        if ($object = $statement->fetch()) {
            return $object;
        } else {
            return null;
        }
    }
}
