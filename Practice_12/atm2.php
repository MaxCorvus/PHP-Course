<?php
class ATM {
    protected  array $currentUser;
    private  bool $isSetPin;
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

public function isCardExist(string $cardNumber)
 {
    if (array_key_exists($cardNumber,$this->userInfos)){

        $this->currentUser = $this->userInfos[$cardNumber];
    }
    else {
        die ('Такой карты не существует!');
    }
}
public function checkPin(int $pin){
    if ($this->currentUser['pin'] !== $pin) {
        die('Неверный пинкод!');
    }
    else {
        $this->showCurrentBalance();
        $this->isSetPin = $pin;
    }
}
private function showCurrentBalance():void {
    echo sprintf ('Привет %s. Ваш текущий баланс %s$. <br>',
    $this->currentUser['name'],
    $this->currentUser['balance']);
    
}
public function withdrawMoney(int $requiredAmount):void {
    ob_clean();
    if (isset($this->isSetPin)){
        if (empty($requiredAmount)){
            die("Введите сумму!");
    }
        if($requiredAmount <= $this->currentUser['balance']) {
            $this->currentUser['balance'] -=  $requiredAmount;
            echo sprintf ('%s, получите ваши деньги. Ваш текущий баланс %s$. <br>',
            $this->currentUser['name'],
            $this->currentUser['balance']);
          
        
    }
        else {
            die('Недостаточно средств!');
            }
    }
}
}
class Terminal extends ATM {
    
    public function refill(int $refillAmount):void {
    ob_clean();
        $this->currentUser['balance'] += $refillAmount;
        echo "Вы пополнили счет. Ваш текущий баланс " . $this->currentUser['balance'] . "$<br>";
    }
}
$newCard = new Terminal;
$newCard->isCardExist(2222);
$newCard->checkPin(4321);
$newCard->withdrawMoney(100);
$newCard->refill(50);
$newCard->withdrawMoney(50);
$newCard->refill(100000);




