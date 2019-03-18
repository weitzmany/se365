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

    if(!nameTest.test(name)){
        nameInput.classList.add('error');
        var message = document.getElementById("nameMessage");
        message.classList.remove("hidden");
        return false;
    }

    if(!phoneTest.test(phone)){
        phoneInput.classList.add('error');
        var message = document.getElementById("phoneMessage");
        message.classList.remove("hidden");
        return false;
    }
}
