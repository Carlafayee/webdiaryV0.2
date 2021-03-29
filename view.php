<?php require'header.php' ?>
<html lang="en">
  <head>
    <title>Entry Form</title>
  </head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box

}

body {
    font-family: 'Poppins', sans-serif;
}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 600px

}


label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
    color: #ff9aa2;    
    padding-left: 3px
}

.bg-light{
    color: black;
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}


.button:hover {
    background-color: #343a40;
    color: #ff9aa2;
}

.button {
    background-color: #ff9aa2;
}


@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}
</style>
<body>
<div class="wrapper bg-dark mt-sm-5">
    <form class="form" method="POST" action="">
    <div class="py-2">
    <div class="form-group">

        <div class="row py-2">
            <div class="col-md-6"><label for="date" >Date Originally created:</label> <input class="bg-light form-control"  value="" id="date"></div>
            <div class="col-md-6"><label for="time" >Time:</label> <input class="bg-light form-control"  value="" id="time"></div>
        </div>

         <div class="row py-2">
            <div class="col-md-6 pt-md-0 pt-3"> <label for="text">Title: </label> <input name="Title" type="text" class="bg-light form-control"> </div>
        </div>

        <div class="row py-2">
            <textarea name="StoryDiary" class="bg-light form-control" id="entry" rows="10"></textarea>
        </div>

        <div class="py-3 pb-4 border-bottom"> 
            <button class="btn btn-primary border">back</button> 
            <button type="reset" class="btn btn-danger border">delete</button> 
        </div>

    </div>
    </form>
    </div>
</body>
</html>