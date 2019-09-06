<?php

function add_sal(array $array_for_add_sal)
{
    foreach ($array_for_add_sal as $key => &$value) {
        if ($key == 'salery') {
            if ($value < 1600) {
                $value += 100;
            }
        }
    }
    return $array_for_add_sal;
}

function prize($array_for_prize)
{
    foreach ($array_for_prize as $key => $value) {
        if ($key == 'work_hours') {
            if ($value >= 180) {
                foreach ($array_for_prize as $key => &$value) {
                    if ($key == 'salery') {
                        $value = $value * 1.2;
                    }
                }
            }
        }
    }
    return $array_for_prize;
}

function salery_2000($people_for_search) {
    if ($people_for_search['salery'] <= 2000) {
        return true;
    }
}
function only_name_salery_2000($lazybones) {
    $result_arr = [];
    foreach ($lazybones as $rows => $row) {
        foreach ($row as $key => $value) {
            if ($key == 'name') {
                array_push($result_arr, $value);
            }
        }
    }
    return $result_arr;
}

function search_lazybones($people_for_search) {
    if ($people_for_search['work_hours'] <= 160) {
        return true;
    }
}

function only_name_of_lazybones($lazybones) {
    $result_arr = [];
    foreach ($lazybones as $rows => $row) {
        foreach ($row as $key => $value) {
            if ($key == 'name') {
                array_push($result_arr, $value);
            }
        }
    }
    return $result_arr;
}

function final_add_salery($main_array) //Всем сотрудникам у кого ЗП меньше 1600 добавить 100.
{
    echo "Всем сотрудникам у кого ЗП меньше 1600 добавить 100. <br/><br/>";
    $final_array = array_map('add_sal', $main_array);
    foreach ($final_array as $key => $value) {
        print_r ($value);
        echo "<br/>";
    }
    return $final_array;
}

function final_prize($main_array) //Всем сотрудникам кто работал больше 180 часов, добавить премию 20%.
{
    echo "Всем сотрудникам кто работал больше 180 часов, добавить премию 20%.<br/><br/>";
    $final_array = array_map('prize', $main_array);
    foreach ($final_array as $key => $value) {
        print_r ($value);
        echo "<br/>";
    }
    return $final_array;
}

function final_name_of_lazybones($main_array) //Вывести всех сотрудников которые отработали меньше 160 часов.
{
    echo "Вывести всех сотрудников которые отработали меньше 160 часов.<br/><br/>";
    $ser = array_filter($main_array, "search_lazybones");
    $ser = only_name_of_lazybones($ser);
    foreach ($ser as $key => $value) {
        echo $value."   ";
    }
    return $ser;
}

function final_salery_2000($main_array) //Вывести всех сотрудников у которых ЗП меньше 2000.
{
    echo "Вывести всех сотрудников у которых ЗП меньше 2000.<br/><br/>";
    $ser = array_filter($main_array, "salery_2000");
    $ser = only_name_salery_2000($ser);
    foreach ($ser as $key => $value) {
        echo $value."   ";
    }
    return $ser;
}

$main_array = [
    ['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180],
    ['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160],
    ['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
    ['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167],
    ['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176],
    ['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182],
    ['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155],
    ['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157],
];
echo "<br/>".'-------------------------------------------'."<br/>";
final_add_salery($main_array);
echo "<br/>".'-------------------------------------------'."<br/>";
final_prize($main_array);
echo "<br/>".'-------------------------------------------'."<br/>";
final_name_of_lazybones($main_array);
echo "<br/>".'-------------------------------------------'."<br/>";
final_salery_2000($main_array);
echo "<br/>".'-------------------------------------------'."<br/>";
?>