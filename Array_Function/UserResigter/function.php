<?php
function getData($filePath)
{
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson);
}

function saveData($data, $filePath)
{
    $dataArr = getData($filePath);
    array_push($dataArr, $data);
    $dataNew = json_encode($dataArr);
    file_put_contents($filePath, $dataNew);
}

function getUserRegister($filePath)
{
    return getData($filePath);
}

function checkRequired($variable)
{
    if (empty($variable)) {
        throw new Exception(' is a required field!');
    }
}