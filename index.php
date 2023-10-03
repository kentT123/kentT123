<!DOCTYPE html>
<html lang="en">
   <head>
      <title>whiteform</title>
   </head>
   <style> 
   body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
   }
   h3 {
      text-align: center;
      margin-top: 20px;
      color: #333;
   }
   h1 {
      text-align: center;
      margin-top: 20px;
      color: #333;
   }

   form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
   }

   label {
      font-weight: bold;
   }

   input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
   }

   input[type="submit"] {
      width: 100%;
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
   }

   input[type="submit"]:hover {
      background-color: #0056b3;
   }

   p {
      text-align: center;
      margin-top: 15px;
   }
</style>


   <body>
   
         <h1>ILIGAN MEDICAL CENTER COLLEGE</h1>
		 <h3> White Form </h3>	
         <form action="insert.php" method="post">

<p>
               <label for="name"> Name:</label>
               <input type="text" name="name" id="name">
            </p>
 
             
<p>
               <label for="course"> Course:</label>
               <input type="text" name="course" id="course">
            </p>
 
             
<p>
               <label for="ID"> ID_No:</label>
               <input type="text" name="ID" id="ID">
            </p>
 
             
<p>
               <label for="Dept"> Department:</label>
               <input type="text" name="Dept" id="Dept">
            </p>
 
             
<p>
               <label for="DateofRegistration"> DateofRegistration:</label>
               <input type="date" name="DateofRegistration" id="DateofRegistraion">
            </p>
            
        
            
            <p>
               <label for="OfferNo"> OfferNo:</label>
               <input type="text" name="OfferNo" id="OfferNo">
            </p>
            
            <p>
               <label for="Coursecode"> Coursecode:</label>
               <input type="text" name="Coursecode" id="CourseCode">
            </p>
           
            <p>
               <label for="Description"> Description:</label>
               <input type="text" name="Description" id="Decription">
            </p>
            
            <p>
               <label for="Instructor"> Instructor:</label>
               <input type="text" name="Instructor" id="Instructor">
            </p>
            
    
           
            <p>
               <label for="Section"> Section:</label>
               <input type="text" name="Section" id="Section">
            </p>
           
            <p>
               <label for="Time"> Time:</label>
               <input type="text" name="Time" id="Time">
            </p>
            
            <p>
               <label for="Room"> Room:</label>
               <input type="text" name="Room" id="Room">
            </p>
           
            <p>
               <label for="Days"> Days:</label>
               <input type="text" name="Days" id="Days">
            </p>
            
            <p>
               <label for="Units"> Units:</label>
               <input type="text" name="Units" id="Units">
            </p>
 
            <input type="submit" value="Submit">
         </form>

   </body>
</html>