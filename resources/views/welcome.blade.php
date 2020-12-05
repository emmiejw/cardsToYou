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
      <h1 style="text-align:center;">Cards for Every Occasion & Personality <br> Huge variety of cards in the local area of the waterside</h1>
      <img src="images/image0 (1).jpeg" alt="" style="width: 100%;
         height:70%; margin-bottom: 30px;">
       <div class="clearfix"></div>
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
         <a target="_blank" href="images/image0.jpeg">
            <img src="images/image0.jpeg" alt="Traditional Chirstmas Cards" width="600" height="300">
         </a>
         <div class="desc">Traditional Chirstmas Cards</div>
      </div>
   </div>
   <div class="responsive">
      <div class="gallery">
         <a target="_blank" href="images/image2.jpeg">
            <img src="images/image2.jpeg" alt="Novelty Cards and Christmas Gift Bags" width="600" height="400">
         </a>
         <div class="desc">Novelty Cards and Christmas Gift Bags</div>
      </div>
   </div>
<div class="responsive">
   <div class="gallery">
      <a target="_blank" href="images/image3.jpeg">
         <img src="images/image3.jpeg" alt="Tongue and Cheek Cards" width="600" height="400">
      </a>
      <div class="desc">Tongue and Cheek Cards</div>
   </div>
</div>
   <div class="responsive">
   <div class="gallery">
      <a target="_blank" href="images/image4.jpeg">
         <img src="images/image4.jpeg" alt="Cards for All the Family" width="600" height="400">
      </a>
      <div class="desc">Cards for All the Family</div>
   </div>
   </div>
   <div class="clearfix"></div>
    
    </body>
</html>
