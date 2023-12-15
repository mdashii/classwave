function newStudentValidation(){
    var stuId = document.getElementById('stuId').value;
    var stuName = document.getElementById('stuName').value;
    var stuPassword = document.getElementById('stuPassword').value;
    var stuPhone = document.getElementById('stuPhone').value;
    var stuEmail = document.getElementById('stuEmail').value;
    var stuGen = document.getElementById('stuGen').value; // Use the text input for gender
    var stuDOB = document.getElementById('stuDOB').value;
    var stuAddmissionDate = document.getElementById('stuAddmissionDate').value;
    var stuParentId = document.getElementById('stuParentId').value;
    var stuClassId = document.getElementById('stuClassId').value;
    
    if(!stuId){
        alert('Student Id Must be filled out.');
        return false;
    }
    else if(!stuName){
        alert('Student Name must be filled out.');
        return false;
    }
    else if(!stuPassword){
        alert('Student Password must be filled out.');
        return false;
    }
    else if(!stuPhone){
        alert('Student Phone must be filled out.');
        return false;
    }
    else if(!stuEmail){
        alert('Student Email must be filled out.');
        return false;
    }
    else if(!stuGen){
        alert('Student ');
        return false;
    }
    else if(!stuDOB){
        alert('Student Date Of Birth must be filled out.');
        return false;
    }
    else if(!stuParentId){
        alert('Student Parent Id must be filled out.');
        return false;
    }
    else if(!stuClassId){
        alert('Student Class Id must be filled out.');
        return false;
    }
    
    return true;
 }
 