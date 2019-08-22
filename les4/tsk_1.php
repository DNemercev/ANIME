<form action="" method="get">
    <p>
        Язык<br/>
    </p>
    <select name="lang">
        <option value="ru">ru</option>
        <option value="en">en</option>
    </select>
    <p>
        Порядковый нопер дня недели<br/>
    </p>
    <select name="num_of_day">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select>
    <br/>
    <input type="submit">
</form>
</body>
</html>
<?php
$arr = [
    "ru" => ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"],
    "en" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
];
echo "-----------------------------------------<br/>";
echo $arr[$_GET["lang"]][$_GET["num_of_day"] - 1]."<br/>";
?>