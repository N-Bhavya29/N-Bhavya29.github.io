function createInputTags() {
    
    
    const MainDiv = document.getElementById("skills");
    const secondDiv = document.createElement("div");
    secondDiv.className = "row col-md-12";
    // const skill_label = document.getElementById("skill-label");
    // const skill_range = document.getElementById("skill-range");
    // const skill = document.getElementById("skill_div");

    // skill.innerHTML = "";
    

      const skill_div = document.createElement("div");
      skill_div.className = "col-md-6";
      
      const label_div = document.createElement("label");
      
      const inputTag = document.createElement("input");
      inputTag.type = "text";
      inputTag.name = `skills[]`;
      inputTag.className = "form-control";
      inputTag.placeholder = "Skill *";
      
      const label_range = document.createElement("label");
      label_range.className="skill-range";
      label_range.innerHTML="How much are you Skilled? ";
    
      const inputRange = document.createElement("input");
      inputRange.type = "range";
      inputRange.name = `percent[]`;
      inputRange.className = "form-control";
      inputRange.min = "0";
      inputRange.max = "100";
      inputRange.value = "1";
      inputRange.oninput = function() {
        this.nextElementSibling.value = this.value;
      };
      
      const output_ = document.createElement("output");
      output_.innerText="1";
      
      const label_ = document.createElement("label");
      label_.innerText="%";
    
      //   inputdiv.appendChild(inputTag);
      secondDiv.appendChild(skill_div);
      skill_div.appendChild(label_div);
      label_div.appendChild(inputTag);
      secondDiv.appendChild(label_range);
      label_range.appendChild(inputRange);
      label_range.appendChild(output_);
      label_range.appendChild(label_);
      MainDiv.appendChild(secondDiv);
      // MainDiv.appendChild(output_);
      // MainDiv.appendChild(label_);
      
    
    
    
  }

  function createEducationInputTags() {
    
    const MainDiv = document.getElementById("education");
  
    const secondDiv = document.createElement("div");
    secondDiv.className = "row col-md-12";

    const courseDiv = document.createElement("div");
    courseDiv.className = "col-md-6";
  
    const courseLabel = document.createElement("label");
    courseLabel.innerHTML = "Enter Course name: ";
    
    const courseInput = document.createElement("input");
    courseInput.type = "text";
    courseInput.name = "course[]";
    courseInput.className = "form-control";
    courseInput.placeholder = "Course name *";
    // courseInput.required = true;
  
    const instituteDiv = document.createElement("div");
    instituteDiv.className = "col-md-6";
  
    const instituteLabel = document.createElement("label");
    instituteLabel.innerHTML = "Enter Institute name: ";
    
    const instituteInput = document.createElement("input");
    instituteInput.type = "text";
    instituteInput.name = "institute[]";
    instituteInput.className = "form-control";
    instituteInput.placeholder = "Institute name *";
    // instituteInput.required = true;
    
    const durationDiv = document.createElement("div");
    durationDiv.className = "col-md-6";
    
    const durationLabel = document.createElement("label");
    durationLabel.innerHTML = "Enter Duration in years: ";
    
    const durationInput = document.createElement("input");
    durationInput.type = "text";
    durationInput.name = "duration[]";
    durationInput.className = "form-control";
    durationInput.placeholder = "(e.g. 2020-2023) *";
    durationInput.pattern = '^\\d{4}-\\d{4}$';
    durationInput.title = "Please enter a valid Duration in years (e.g. 2020-2023)";
    // durationInput.required = true;
    
    courseDiv.appendChild(courseLabel);
    courseLabel.appendChild(courseInput);
    
    instituteDiv.appendChild(instituteLabel);
    instituteLabel.appendChild(instituteInput);
    
    durationDiv.appendChild(durationLabel);
    durationLabel.appendChild(durationInput);

    secondDiv.appendChild(courseDiv);
    secondDiv.appendChild(instituteDiv);
    secondDiv.appendChild(durationDiv);

    MainDiv.appendChild(secondDiv);
  }

  function createExperienceInputTags() {
   
    const MainDiv = document.getElementById("experiance");
  
   
    const secondDiv = document.createElement("div");
    secondDiv.className = "row col-md-12";
  
    const roleDiv = document.createElement("div");
    roleDiv.className = "col-md-6";
  
    const roleLabel = document.createElement("label");
    roleLabel.innerHTML = "Enter your role: ";
  
    const roleInput = document.createElement("input");
    roleInput.type = "text";
    roleInput.name = "role[]";
    roleInput.className = "form-control";
    roleInput.placeholder = "Role *";
    // roleInput.required = true;
  
    const companyDiv = document.createElement("div");
    companyDiv.className = "col-md-6";
  
    const companyLabel = document.createElement("label");
    companyLabel.innerHTML = "Enter company name: ";
  
    const companyInput = document.createElement("input");
    companyInput.type = "text";
    companyInput.name = "companyname[]";
    companyInput.className = "form-control";
    companyInput.placeholder = "Company name *";
    // companyInput.required = true;
    
   
    
    const durationDiv = document.createElement("div");
    durationDiv.className = "col-md-6";
    
    
    const durationLabel = document.createElement("label");
    durationLabel.innerHTML = "Enter Duration: ";
    
    
    const durationInput = document.createElement("input");
    durationInput.type = "text";
    durationInput.name = "experianceduration[]";
    durationInput.className = "form-control";
    durationInput.placeholder = "Moths or Years *";
    // durationInput.required = true;
    
    
    
    const aboutExperienceDiv = document.createElement("div");
    aboutExperienceDiv.className = "col-md-6";
    
    
    const aboutExperienceLabel = document.createElement("label");
    aboutExperienceLabel.innerHTML = "Describe your experiance: ";
    aboutExperienceLabel.id = "aboutexperiance";
  
    
    const aboutExperienceInput = document.createElement("textarea");
    aboutExperienceInput.name = "aboutexperiance[]";
    aboutExperienceInput.className = "form-control";
    aboutExperienceInput.placeholder = "About experiance";
    // aboutExperienceInput.required = true;
    
    roleDiv.appendChild(roleLabel);
    roleLabel.appendChild(roleInput);
    secondDiv.appendChild(roleDiv);
    
    durationDiv.appendChild(durationLabel);
    durationLabel.appendChild(durationInput);
    secondDiv.appendChild(durationDiv);
    
    companyDiv.appendChild(companyLabel);
    companyLabel.appendChild(companyInput);
    secondDiv.appendChild(companyDiv);
    
    aboutExperienceDiv.appendChild(aboutExperienceLabel);
    aboutExperienceLabel.appendChild(aboutExperienceInput);
    secondDiv.appendChild(aboutExperienceDiv);

    MainDiv.appendChild(secondDiv);
  }  
  