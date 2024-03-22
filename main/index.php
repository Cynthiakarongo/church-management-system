<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Church Management System</title>
<style type="text/css">
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

nav {
    position: fixed;
    background-color: skyblue;
    height: 70px;
    width: 100%;
    z-index: 1;
}

.logo {
    font-size: 25px;
    position: relative;
    left: 5%;
    color: white;
    font-weight: bold;
}

ul {
    position: relative;
    float: right;
    margin-right: 20px;
}

ul li {
    display: inline-block;
    line-height: 70px;
    margin: 0 10px;
}

.main_img {
    width: 100%;
    height: 450px;
}

.section1 {
    padding-top: 90px; /* Adjusted to make space for the fixed navbar */
}

.img2_text {
    position: relative;
    top: 20%;
    left: 30%;
    color: white;
    background-color: midnightblue;
    padding: 10px;
}

.container {
    padding-top: 80px;
    padding-left: 280px; /* Adjusted to make space for the sidebar */
}

.sidebar {
    width: 250px;
    height: 100%;
    position: fixed;
    top: 70px; /* Adjusted to start below the navbar */
    left: 0;
    background-color: #333;
    padding-top: 20px;
    color: #fff;
}

.menu-item {
    padding: 10px;
    border-bottom: 1px solid #555;
}

.menu-item:hover {
    background-color: #555;
}

.row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
}

.col-mid-4 {
    flex: 0 0 25%;
}

.col-mid-8 {
    flex: 0 0 70%;
}

.welcome_img5 {
    width: 100%;
    height: auto;
}

.adm {
    padding-top: 30px;
}

.signup_form {
    margin-top: 30px;
}

.adm_int {
    margin-bottom: 20px;
}

.label_text {
    display: inline-block;
    width: 100px;
    text-align: right;
    padding-right: 10px;
}

.input_deg,
.input_txt {
    width: 70%;
    height: 40px;
    border-radius: 25px;
    border: 1px solid blue;
}

.input_txt {
    height: 120px;
}

footer {
    background-color: black;
    height: 70px;
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
}

.footer_text {
    text-align: center;
    color: white;
    line-height: 70px;
}

.login_link {
    text-align: center;
    margin-top: 20px;
}

}
</style>
</head>
<body>

<nav>
    <label class="logo">W-CHURCH</label>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

<div class="section1">
    <label class="img2_text">CONNECTING HEARTS, CHANGING LIVES</label>
    <img class="main_img" src="img2.jpg">
</div>



<div class="container">
    <div class="row">
        <div class="col-mid-4">
            <img class="welcome_img5" src="img5.jpg">
        </div>
        <div class="col-mid-8">
            <h1>Welcome to Faith Ministry Church</h1>
            <p>
                "Welcome to Faith Ministry Church!

                We are delighted to see you here, joining us in worship and fellowship. Whether you're seeking solace, community, or spiritual guidance, know that you're in the right place.

                At Faith Ministry Church, we embrace diversity, unity, and love. We believe in the power of faith to transform lives and communities. As you enter our doors, may you feel the warmth of our congregation's embrace and the presence of God's grace.

                Together, let's explore the depths of our faith, support one another in our journeys, and spread kindness and compassion to all. We are honored to have you with us today and look forward to growing together in faith and love.

                Welcome home, welcome to Faith Ministry Church."
            </p>
        </div>
    </div>

    <div>
        <center>
            <h1 class="adm">Sign In Form</h1>
        </center>
        <div align="center" class="signup_form">


            <form action="data_check.php"method="POST">
                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input class="input_deg" type="text" name="name">
                </div>
                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input class="input_deg" type="text" name="email">
                </div>
                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="text" name="phone">
                </div>
                <div class="adm_int">
                    <label class="label_text">Message</label>
                    <textarea class="input_txt" name="message"></textarea>
                </div>
                <div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="login_link">
    <p>Login <a href="login.php">Here</a></p>
</div>

</body>
</html>
