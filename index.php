<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css
" rel="stylesheet">
  </head>
  <body>
  <div class="container">
  <h1>Portfolio Form</h1>
  <form action="profile.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-6">  <label>Enter your name: <input type="text" class="form-control" name="name" placeholder="Name *" required></label></div>
      <div class="col-md-6">  <label>Enter your Age: <input type="tel" max="100" class="form-control" name="age" placeholder="Age *" required></label></div>
      <div class="col-md-6">  <label>Enter your Phone number: <input type="tel"  title="Please enter only 10 numbers" class="form-control" name="phone" placeholder="Phone number *" required></label></div>
      <div class="col-md-6">  <label>Enter email: <input type="email" name="email" class="form-control" placeholder="Email Address *" required></label></div>
      <div class="col-md-6">  <label>Enter website: <input type="text" name="website" class="form-control" placeholder="Website"></label></div>
      <div class="col-md-6">  <label>Enter occupation: <input type="text" name="occupation" class="form-control" placeholder="Occupation *" required></label></div>
      <div class="col-md-6">  <label>Describe yourself: <textarea  name="about" class="form-control" placeholder="About *" required></textarea></label></div>
      <!-- <div class="col-md-6">  <label>Enter skills: <input type="text" name="skills" class="form-control" placeholder="Skills *" required></label></div> -->
      
      <div class="col-md-12" id="education">
        <label><br>Enter Education information:</label>
        <div class="row col-md-12">
          <div class="col-md-6">  <label>Enter Course name: <input type="text" name="course[]" class="form-control" placeholder="Course name *" required></label></div>
          <div class="col-md-6">  <label>Enter Institute name: <input type="text" name="institute[]" class="form-control" placeholder="Institute name *" required></label></div>
          <div class="col-md-6">  <label>Enter Duration in years: <input type="text" name="duration[]" pattern="^\d{4}-\d{4}$" class="form-control" placeholder="(e.g. 2020-2023) *" title="Please enter a valid Duration in years (e.g. 2020-2023)" required></label></div>
        </div>
      </div>
          <div class="col-md-12"><button type="button" id="add_education" onclick="createEducationInputTags()" name="skills">+</button></div>
          
          <div class="col-md-12" id="experiance">
            <label><br>Enter your Experiance information:</label>
            <div class="row col-md-12">
              <div class="col-md-6"><label>Enter your role: <input type="text" name="role[]" class="form-control" placeholder="Role *" required></label></div>
              <div class="col-md-6"><label>Enter company name: <input type="text" name="companyname[]" class="form-control" placeholder="Company name *" required></label></div>
              <div class="col-md-6"><label>Enter Duration: <input type="text" name="experianceduration[]" class="form-control" placeholder="Moths or Years *" required></label></div>
              <div class="col-md-6">  <label id="aboutexperiance">Describe your experiance: <textarea  name="aboutexperiance[]" class="form-control" placeholder="About experiance" required></textarea></label></div>
        </div>
      </div>
      <div class="col-md-12"><button type="button" id="add_experiance" onclick="createExperienceInputTags()" name="skills">+</button></div>
      
      <div class="col-md-12" id="skills">
      <label><br>Enter your Skills information:</label>
    <div class="row col-md-12">
    <div class="col-md-6"><label>Enter Skill: <input type="text" name="skills[]" class="form-control" placeholder="Skill *" required></label></div>
    <div class="col-md-6"><label id="skill-range">How much are you skilled? <input type="range" name="percent[]" class="form-control" min="0" max="100" value="1" oninput="this.nextElementSibling.value = this.value" required><output>1</output>% </label></div>
    
    </div>
    </div>
    <div class="col-md-12"><button type="button" id="add" onclick="createInputTags()" name="skills">+</button></div>
    <div class="col-md-12">  <label><br>Upload profile picture: <input type="file" name="photo" accept="image/*" required></label></div>
    <div class="col-md-12">  <button type="submit">Submit</button>
    </div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="inputs.js"></script>
  </body>
</html>

