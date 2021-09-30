

<html>
<head>
<title>Search</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="query" />
        <input type="submit" name="submit" value="Search" />
    </form>
</body>
</html>
<?php
if(isset($_GET['submit'])){
  if(empty($_GET['query'])){
echo "Enter a search term";
  }

$query=$_GET['query'];
echo $query;
}
?>