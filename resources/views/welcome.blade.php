<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cards 2 You</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Lobster&family=Patrick+Hand&family=Satisfy&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
                    * {
            box-sizing: border-box;
         }
      html {
            font-family: 'Patrick Hand', cursive;
            background: linear-gradient(to top left, rebeccapurple, pink, lightblue, beige);
        }

        .header {
            font-family: 'Satisfy', cursive;
            font-size:15vw;
            text-align: center;
            margin-top: 20px;
        }

        .box {
            width: 85%;
            border: 15px solid mintcream;
            background-color:mintcream;
            padding: 50px;
            margin: auto;
            border-radius: 25px;
            margin-top:-50px;
        }

         div.gallery {
            border: 1px solid #ccc;
      }

         div.gallery:hover {
         border: 1px solid #777;
         }

         div.gallery img {
         width: 100%;
         height: auto;
         }

         div.desc {
         padding: 15px;
         text-align: center;
         background-color: mintcream;
         }

         .responsive {
         padding: 0 6px;
         float: left;
         width: 24.99999%;
         }

      .clearfix:after {
      content: "";
      display: table;
      clear: both;
      }

   .link {
      text-align:center;
      margin-top: -100px;
      margin-bottom:20px;
      font-weight:bold;
      font-size: 18px;
   }

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
  
        </style>
    </head>
    <body>
     <p class="header">Cards 2 You</p>
   <div class="box">
        <img src="images/logo.jpg" style="height:100px; width:100px; display: block; margin-left: auto; margin-right: auto; margin-top:-20px;">
      <h3 style="text-align:center;">Cards for Every Occasion & Personality <br> Huge variety of cards in the local area of the waterside</h3>
       <div class="clearfix"></div>
       @include('carosel')
       <div class="clearfix" style="margin-bottom:70px;"></div>

       <br>

       <div class="link">
         <a href="https://fb.me/1HSAa4j2v7AkKK5"><h1>Visit Our Shop</h1></a> 
   </div>
       <div style="text-align:center;">
             <a href="mailto:cardstoyou@aol.com" ><h2>Email Us for any Unique Card Requests</h2></a> 
       </div>
   </div>
   <br>
   <div class="responsive">
      <div class="gallery">
         <a target="_blank" href="images/female.jpg">
            <img src="images/female.jpg" alt="Chirstmas Cards for females" width="550" height="300">
         </a>
         <div class="desc">Chirstmas Cards for the Ladies in Your life</div>
      </div>
   </div>
   <div class="responsive">
        <div class="gallery">
         <a target="_blank" href="images/male.jpg">
            <img src="images/male.jpg" alt="Chirstmas Cards for the Males" width="550" height="300">
         </a>
         <div class="desc">Chirstmas Cards for the Men in Your life</div>
      </div>
   </div>
<div class="responsive">
   <div class="gallery">
      <a target="_blank" href="images/parents.jpg">
         <img src="images/parents.jpg" alt="For Your Special Parents" width="550" height="400">
      </a>
      <div class="desc">For Your Special Parents</div>
   </div>
</div>
   <div class="responsive">
   <div class="gallery">
      <a target="_blank" href="images/grandparents.jpg">
         <img src="images/grandparents.jpg" alt="Cards for the grandparents" width="550" height="400">
      </a>
      <div class="desc">Cards for the Grandparents</div>
   </div>
   </div>
   <div class="clearfix"></div>
    </body>
</html>
