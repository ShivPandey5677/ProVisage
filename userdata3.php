<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>  
 .data{
    width:80%;
    border:3px solid;
    border-radius: 5px;

 }
.labeling{
    font-size: large;
   font-weight: 500; 
}
#submit{
  background-color:rgb(0, 162, 255);
  padding:10px;
  border-radius:10px;
  color:white;
}
</style>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="./back/ren.php" method="POST" enctype="multipart/form-data">
                <label for="name" class="labeling">Name</label><br><input type="text" name="username" class="data"><br><br>
               <label for="email" class="labeling"> Email</label><br><input type="text" name="email" class="data"><br><br>
               <label for="skill" class="labeling">Skill 1</label><br><textarea name="skill" id="skill" cols="30" rows="10" class="data" required></textarea><br><br>
               <label for="skill" class="labeling">Skill 2</label><br><textarea name="skilll" id="skill2" cols="30" rows="10" class="data" ></textarea><br><br>
               <label for="skill" class="labeling">Skill 3</label><br><textarea name="skillll" id="skill3" cols="30" rows="10" class="data"></textarea><br><br>
               <label for="pro" class="labeling">Project 1</label><br><input type="file" name="image" class="data" required/><br><br>
               <label for="abpro" class="labeling">About Project</label><br><textarea name="aboutpro" id="pro" cols="30" rows="10" class="data" ></textarea><br><br>
               <label for="pro" class="labeling">Project 2</label><br><input type="file" name="image1" class="data" /><br><br>
               <label for="abpro" class="labeling">About Project</label><br><textarea name="aboutpro1" id="pro" cols="30" rows="10" class="data" ></textarea><br><br>
               <label for="pro" class="labeling">Project 3</label><br><input type="file" name="image2" /><br><br>
               <label for="abpro" class="labeling">About Project</label><br><textarea name="aboutpro2" id="pro" cols="30" rows="10" class="data" ></textarea><br><br>
               <label for="skill" class="labeling">Type of Work(Poem/Story/Book)</label><br><input type="text" name="proff" class="data" required><br><br>
               <label for="skill" class="labeling">Publication</label><br><input type="text" name="company" class="data"><br><br>
               <label for="skill" class="labeling">Year published in</label><br><input type="text" name="exp" class="data"><br><br>
               <label for="abpro" class="labeling">Summary of you work</label><br><textarea name="aboutpro2" id="pro" cols="30" rows="10" class="data" ></textarea><br><br> 
               <label for="skill" class="labeling">Type of Work(Poem/Story/Book)</label><br><input type="text" name="proff2" class="data" required><br><br>
               <label for="skill" class="labeling">Publication</label><br><input type="text" name="company2" class="data"><br><br>
               <label for="skill" class="labeling">Year published in</label><br><input type="text" name="exp2" class="data"><br><br>
               <label for="abpro" class="labeling">Summary of you work</label><br><textarea name="aboutpro3" id="pro" cols="30" rows="10" class="data" ></textarea><br><br> 
               <label for="Link" class="labeling">BlogPage</label><br><input type="text" name="linkedIn" class="data"><br><br>  
               <label for="Link" class="labeling">Instagram</label><br><input type="text" name="Instagram" class="data"><br><br>
               <label for="Link" class="labeling">Twitter</label><br><input type="text" name="Twitter" class="data"><br><br>
               <input type="submit" id="submit">

            </form>
        </div>
    </div>
   
</body>
</html>
</html>