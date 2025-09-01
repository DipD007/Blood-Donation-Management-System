<html>


<head>

  <title>BDMS</title>
  <link rel="icon" href="image/favicon.ico" type="image/png">
  <!-- <link rel="icon" type="image/x-icon" href="image/favicon.ico"> -->
  <style>
    .header {
      overflow: hidden;
      background-color: #333;
      top: 0;
      width: 100%;
      padding: 5px 0px;
      color: #FF0404;
    }

    /* Style the header links */
    .header a {
      /* float: left; */
      color: white;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 4px;
      font-weight: bold;
    }

    /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
    .header a.logo {
      font-size: 25px;
      font-weight: bold;
      color: #FF0404;
    }

    /* Change the background color on mouse-over */
    .header a:hover {
      background-color: #ddd;
      color: black;
    }




    /* Float the link section to the right */
    .header-right {
      float: right;
      padding-top: 12px;
      padding-right: 10px;
    }

    #check {
      display: none;
    }

    #check:checked~.header-right {
      right: 0;
    }

    #chkbtn {
      float: right;
      display: none;
    }
    .header img{
      padding: 0 10px;
    }
    /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
    @media screen and (max-width: 760px) {

      /* .header a {
        float: none;
        display: block;
        text-align: left;
      }

      .header-right {
        float: none;
      } */
      .header a.logo {
        font-size: 22px;
      }
      .header .img{
        padding-left:10px;
      }

      #chkbtn {
        display: block;
      }

      .header-right {
        display: block;
        width: 48%;
        height: 100vh;
        /* background-color: transparent; */
        background-color: rgba(255, 4, 4, 0.8);
        position: fixed;
        top: 66px;
        right: -100%;
        transition: .5s;
        z-index: 999; 
      }

      .header-right a {
        display: block;
        text-align: left;
        margin-top: 5px;
        margin-bottom: 5px;
      }
    }

    /* Style the active/current link*/
    a.act {
      background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
      color: white;
      border-radius: 30px;
    }

    a.logo2 {
      background-color: #333;
      /* display: flex; */
    }
  </style>
</head>

<body>
  <div class="header">
    <input type="checkbox" name="" id="check">
    <label for="check" id="chkbtn">
      <img src="image/menu.png" style="padding: 5px;margin-right: 10px; margin-top: 5px; border: 2px solid aquamarine;border-radius: 4px;" alt="Menu">
    </label>
    
    <img class="img" src="image/11.png" alt="">
    <a href="index.php" class="logo" <?php if ($active == 'home') echo "class='logo2'"; ?>>Blood Bank & Donation </a>

    <div class="header-right">
      <a href="about_us.php" <?php if ($active == 'about') echo "class='act'"; ?>>About Us</a>
      <a href="why_donate_blood.php" <?php if ($active == 'why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php" <?php if ($active == 'donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if ($active == 'need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if ($active == 'contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>

</body>

</html>