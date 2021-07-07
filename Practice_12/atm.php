<?php
class ATM{
    private $user;
    private $pin;
    private array $userInfos = [
        1111 => [
            'name' => 'Vasya',
            'pin' => 1234,
            'balance' => 100
        ],
        2222 => [
            'name' => 'Petya',
            'pin' => 4321,
            'balance' => 500,
        ],
        3333 => [
            'name' => 'Lena',
            'pin' => 1212,
            'balance' => 1000,
        ],
    ];

 
   public  function isUserExists(string $user) {
       $this->user = $user;
       foreach ($this->userInfos as $id => $value){
           if ($value['name'] === $user) {
               return true;
           }
            // $usersNames[] = $this->userInfos[$id]['name'];
       }

       return false;       
  }
  public function checkPin(int $pin){
    
    
    foreach ($this->userInfos as $id=>$value)
    {   if ($this->user === $value['name']){
            if ($value['pin'] === $pin)
            {       $this->pin = $pin;
                    return true;
                }
                else {
                    return false;
                }
            }
            else {
                continue;
            }
    }

    }
    public function makeMoney(int $requiredAmount){
        foreach ($this->userInfos as $id=>$value){
        if ($this->user === $value['name']){
            if ($this->pin === $value['pin']){
                if ($requiredAmount <= $value['balance']){
                    echo "У вас осталось " .  $value['balance'] -= $requiredAmount;
                        return true;
                }
                else {
                    return false;
                }

            }
        }
    }
}


  }


$newUser = new ATM;

if ($newUser->isUserExists('Lena')) {
    if ($newUser->checkPin(1212)){
        if ($newUser->makeMoney(500)){
        }
        else {echo "Недостаточно средств";}
    }
    else {
        echo "Неправильный пинкод!";
        die;
    }
} else {
    echo " Такого пользователя не существует!";
    die;
}

// var_dump($newUser->isUserExists('Vasya'));
// $newUser->checkPin(123);

