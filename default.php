<?php include("./config.inc"); ?>
<body>
<p style="font-size:24px; color:blue; font-family:aria"> Member list </p>
<?php
$sql = "select name,phone,email from kgitbank.members";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
echo "name=>" . $row["name"]. "\t\tphone=>" . $row["phone"]. "\t\temail=>" . $row["email"]. "<br>";
        }
}else{
        echo "0 result";
};
$conn->close();
?>
</body>
