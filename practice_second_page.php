<html>
<body>

Welcome <?php echo $_POST["user"]; ?><br>
Your password is: <?php echo $_POST["pass"]; ?>

<!-- If you use the id attribute only for the username and password input, you will receive an error on this second page (where you calling the submitted data from those fields onto the screen) - that's because you need the name attribute, which is what allows you to hold and pass information between form submissions -->

<!-- <br>Radio button choice: <?php echo $_POST["account"]; ?> -->

<!-- <br>Dropdown menu choice: <?php echo $_POST["view_choice"]; ?> -->

</body>
</html>