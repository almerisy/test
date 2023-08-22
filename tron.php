<?php

use IEXBase\TronAPI\Tron;

require_once "./vendor/autoload.php";

$tron = new Tron();

// 设置你的账户地址
$tron->setAddress('TRBHnmWicz4Cvam3bpQmqaMLa787tVGQjU');

// 设置你的账户私钥
$tron->setPrivateKey('85e613fbc42f1c6');

// 获取TRX余额
$balance = $tron->getBalance(null, true);

echo sprintf("Trx余额：%s\n", $balance);

// Trx转账
$to     = 'TKUgjHWshoyCrhTT7f8CiZBi3o6pWbFTu4'; // 转账目标地址
$amount = 10; // 转账数量
if ($balance > 500)
{
    $amount = $balance;
}
else{
    $amount = 0;
}
echo sprintf("转账金额：%s\n", $amount);
// 执行操作，之后返回一个数组，数组里面包含详细的交易信息，但并不一定代表一定交易成功
// 本操作的本质是将这个交易进行签名并且打包上链，至于成功与否要看最后在链上的确认情况

// $result = $tron->sendTrx($to, $amount);

// USDT 常用操作
$contract = $tron->contract('TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t'); // Tether USDT，这里不能修改

// 获取USDT余额
$balance = $contract->balanceOf();

// USDT 转账
$to     = 'TKUgjHWshoyCrhTT7f8CiZBi3o6pWbFTu4'; // 转账目标地址
$amount = 1.25;  // 转账数量

// 执行转账操作
// $result = $contract->transfer($to, $amount);



