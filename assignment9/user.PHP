<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      *{
        font-family: arial;
      }

      .form{
        width: 300px;
        padding: 100px;
      }

      .form input{
        margin-top: 20px;
      }

      .form textarea{
        margin-top: 20px;
        width: 300px;
        height: 100px;
      }
    </style>
  </head>
  <body>
    <div class="form">
      <h1>Please fill the form</h1>
    <form method='post' action='form.PHP' enctype='multipart/form-data'>
      Upload comany's logo
      <input type='file' id="images[]" name='images[]'>
      <input type="text" name="name" placeholder="Enter name">
      <input type="text" name="surname" placeholder="Enter surname">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="phone_number" placeholder="Phone number">
      <input type="text" name="company_name" placeholder="Company name">
      <textarea name="project_idea" placeholder="Project idea"></textarea>
      <textarea name="business_plan" placeholder="Business plan"></textarea>
      <input type='submit' value='Submit' name='submit' >
    </form>
  </div>
  </body>
</html>
