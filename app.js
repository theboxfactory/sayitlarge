// @ts-nocheck

//  Wait for document to load before defining event handlers
document.addEventListener('DOMContentLoaded',function() {

  var message = "You're message here!"

  var editMode = false;
  //var editMessage = document.getElementById('editMessage');

  var text = document.getElementById('text');
  var edit = document.getElementById('edit');
  var editor = document.getElementById('edit-panel');


  text.innerHTML = message;
  edit.value = message;
  //editor.value = message;

  //  Handle button click event 
  editMessage.addEventListener('click', function() {

    //  Toogle edit mode
    editMode = !editMode;

    if (editMode) {
      editMessage.innerHTML = "Update Message";
      text.classList.add('hide');
      editor.classList.remove('hide')
    }
    else {
      editMessage.innerHTML = "Edit Message";
      text.innerHTML = edit.value;
      text.classList.remove('hide');
      editor.classList.add('hide')
    }

  });

}); 