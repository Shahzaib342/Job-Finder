<?php
$serverName = "localhost";
$username = "root";
$password = "sa";
$db = "job_finder";


try {
    $conn = new PDO("mysql:host=$serverName;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    return "Connection failed: " . $e->getMessage();
}

$query = $conn->query("SELECT DISTINCT (category) from jobs");
$categories = $row = $query->fetchAll();

if (isset($_POST["filter"])) {
    $where_condition = " where";
    $filter = false;
    if (!empty($_POST["name"])) {
        $name = $_POST["name"];
        $where_condition .= " name LIKE '%$name%'";
        $filter = true;
    }

    if (!empty($_POST['location'])) {
        $location_filter = explode(",", $_POST['location']);
        if ($filter) {
            $where_condition .= " AND (location LIKE";
        } else {
            $where_condition .= " (location LIKE ";
        }
        foreach ($location_filter as $location) {
            $where_condition .= '"%' . trim($location) . '%" or location LIKE ';
        }
        $where_condition .= 0 . ')';
        $filter = true;
    }

    if (!empty($_POST["tags"])) {
        $tags = $_POST["tags"];
        if ($filter) {
            $where_condition .= " AND tags LIKE '%$tags%'";
        } else {
            $where_condition .= " tags LIKE '%$tags%'";
        }
        $filter = true;
    }

    if (!empty($_POST["min-age"])) {
        $min_age = $_POST["min-age"];
        if ($filter) {
            $where_condition .= " AND age >= $min_age";
        } else {
            $where_condition .= " age >= $min_age";
        }
        $filter = true;
    }

    if (!empty($_POST["max-age"])) {
        $max_age = $_POST["max-age"];
        if ($filter) {
            $where_condition .= " AND age <= $max_age";
        } else {
            $where_condition .= " age <= $max_age";
        }
        $filter = true;
    }

    if (!empty($_POST['categories'])) {
        $categories_filter = explode(",", $_POST['categories']);
        if ($filter) {
            $where_condition .= " AND (category LIKE";
        } else {
            $where_condition .= " (category LIKE ";
        }
        foreach ($categories_filter as $category) {
            $where_condition .= '"%' . trim($category) . '%" or category LIKE ';
        }
        $where_condition .= 0 . ')';
        $filter = true;
    }

    if (!$filter) {
        $where_condition = "";
    }

    $query = $conn->query("SELECT * from jobs $where_condition");
    $jobs = $row = $query->fetchAll();

}