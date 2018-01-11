<?php
class user
{
  protected $username = null;
  protected $password = null;
  public function __construct($user, $pass)
  {
    $this->username = $user;
    $this->password = md5($pass);
  }
  public function getUsername(){
    return $this->username;
  }
  public function getPassword(){
    return $this->password;
  }
  public function changePassword($newPass){
      $this->password = md5($newPass);
  }
  public function checkPassword($pass){
    if($this->password ===  md5($pass)){
      return true;
    }
    else{
      return false;
    }
  }
}
class Normaluser extends user
{
  public function doNormaluserStuff(){
    return 'Normal user -> F2P';
  }
}
class Supervisor extends user
{
  public function doSupervisorStuff(){
    return 'Superuser -> P2P';
  }
}
$tomas = new Normaluser('tomas', 'legend32');
echo $tomas->getUsername();
echo $tomas->getPassword();
echo $tomas->checkPassword('legend32');

echo '<br />';
echo $tomas->doNormaluserStuff();
echo '<br />';

$anna = new Supervisor('anna', 'whatevah96');
echo $anna->getUsername();
echo $anna->getPassword();
echo $anna->checkPassword('whatevah96');
echo '<br />';
echo $anna->doSupervisorStuff();
 ?>
