function openForm(){

    var form = document.getElementById("newContact");
    form.classList.remove("hidden");

}

function edit(id){
    
    var row = document.getElementById("show_" + id);
    row.classList.add("hidden");
    var form = document.getElementById("edit_" + id);
    form.classList.remove("hidden");

}

function validate(form){
    var nameInput = form['name'];
    var name = nameInput.value;
    var phoneInput = form['phone'];
    var phone = phoneInput.value;

    var nameTest = RegExp('[a-zA-Z0-9]{2}');
    var phoneTest = RegExp('[0-9]{10}');

    var failed = false;

    if(!nameTest.test(name)){
        nameInput.classList.add('error');
        var message = document.getElementById("nameMessage");
        message.classList.remove("hidden");
        failed = true;
    }else{
        nameInput.classList.remove('error');
        var message = document.getElementById("nameMessage");
        message.classList.add("hidden");
    }

    if(!phoneTest.test(phone)){
        phoneInput.classList.add('error');
        var message = document.getElementById("phoneMessage");
        message.classList.remove("hidden");
        failed = true;
        
    }else{
        phoneInput.classList.remove('error');
        var message = document.getElementById("phoneMessage");
        message.classList.add("hidden");
    }

    if(failed) return false;
}
