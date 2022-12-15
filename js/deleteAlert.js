let show = localStorage.getItem('showLabel');

if (show === 'true') {
  label = document.querySelector('.changeAlert');
  label.classList.remove('hidden');
}



function deleteFile(id) {
  let element = document.querySelector('#btnDelete');
  element.setAttribute('href', '../../controller/files/delete.php?id='+id);
}

function deleteUser(id) {
  let element = document.querySelector('#btnDelete');
  element.setAttribute('href', '../../controller/users/delete.php?id='+id);
}

function showAlert() {

  show = localStorage.setItem('showLabel', 'true');

}
function noShowAlert() {

  show = localStorage.setItem('showLabel', 'false');

}