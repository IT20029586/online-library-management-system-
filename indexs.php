<?php 

session_start();
 

 ?>
<html>
  <head>
    <style type="text/css">
       body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }
 .viwe{

overflow-y:scroll;
overflow-wrap:300px ;
height:300px;
display:inline-grid;
width: 100%;

}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript" src="Src/it21068546/js/nac.js"></script> 
<link rel="stylesheet" type="text/css" href="Src/it21068546/css/nav.css">
    <title>Dashboard</title>


<link rel="stylesheet" href="AppSty/cate.css"/>
    <script src="AppJS/ctg.js"></script>
  <meta charset="utf-8">
  <title> </title>

 <style type="text/css">
 a{
    text-decoration:none;
    color:black;
    
    }
 body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }

.nin{
    margin-left: 90%;

}

.viwe{

overflow-y:scroll;
overflow-wrap:300px ;
height:300px;
display:inline-grid;
width: 100%;

}
    
table{
width: 100%;
 align-items: center;
padding-right:3%;
}           
 @keyframes text{
    0%{
        color: inherit;
        margin-bottom: 40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: 40px;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: 40px;
    }
 }
 h2{
    margin-left:100%;
 }
 /* card */
 .card{

position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5);
border-radius: 15px;
background: rgba(255, 255, 255, 1.0);
overflow: hidden;
justify-content: center;
align-items: center;
border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5);
backdrop-filter: blur(5px); 
 }

 /* jambo 2 */
.jumbo{
border-radius:0px; border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5); position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5); 
}
</style>
 </head>
 <body bgcolor="black">
<div style=" display: grid; grid-template-columns: auto auto auto auto auto auto;">


  
    <?php echo "$ftab" ?>
 </div>

</div>


   

</a>
   <?php   include("Src/it21068546/Footer.php");
   ?>


</footer>
</body>
</html>
