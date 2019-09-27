<!DOCTYPE html>
<html>
<head>
  <title>Linux Academy!</title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #59D1FA;
}

#main-content{
    font-family: 'Arial';
    font-size: 13px;
    text-align: center;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
</style>
</head>
<body>
  <header>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a class="active" href="page2.php">News</a></li>
      <li><a href="page3.php">Products</a></li>
    </ul>
        <img src="/images/LALogo.png"
  </header>
  <div id="main-content">
  This is page 2, the news page.
  </div>
  <footer>
    Contact us at webmaster@mywebsite.com
  </footer>
  </body>
</html>