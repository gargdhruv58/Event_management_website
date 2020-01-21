<?php
include("database.php");

echo "<style>";
echo "table, tr, td";
echo "{border: solid black 1px; border-collapse: collapse}";
echo "td";
echo "{padding: 5px}";
echo "</style>";


echo "<h3>EXPERTIES</h3>";

$query="SELECT * FROM experties;";
$result = $conn->query($query);
$array = array();
if ($result->num_rows > 0) {
    $i = 0;
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	foreach ($row as $x => $x_value)
    		echo  "<td>" . $x_value . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h3>JOBS</h3>";

$query="SELECT * FROM jobs;";
$result = $conn->query($query);
$array = array();
if ($result->num_rows > 0) {
    $i = 0;
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	foreach ($row as $x => $x_value)
    		echo  "<td>" . $x_value . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h3>ORGANISATIONS</h3>";

$query="SELECT * FROM organisations;";
$result = $conn->query($query);
$array = array();
if ($result->num_rows > 0) {
    $i = 0;
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	foreach ($row as $x => $x_value)
    		echo  "<td>" . $x_value . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h3>PROJECTS</h3>";

$query="SELECT * FROM projects;";
$result = $conn->query($query);
$array = array();
if ($result->num_rows > 0) {
    $i = 0;
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	foreach ($row as $x => $x_value)
    		echo  "<td>" . $x_value . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h3>SKILLS</h3>";

$query="SELECT * FROM skills;";
$result = $conn->query($query);
$array = array();
if ($result->num_rows > 0) {
    $i = 0;
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	foreach ($row as $x => $x_value)
    		echo  "<td>" . $x_value . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h3>USERS</h3>";

$query="SELECT * FROM users;";
$result = $conn->query($query);
$array = array();
if ($result->num_rows > 0) {
    $i = 0;
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	foreach ($row as $x => $x_value)
    		echo  "<td>" . $x_value . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<h3>WORKS</h3>";

$query="SELECT * FROM works;";
$result = $conn->query($query);
$array = array();
if ($result->num_rows > 0) {
    $i = 0;
    echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	foreach ($row as $x => $x_value)
    		echo  "<td>" . $x_value . "</td>";
    	echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>