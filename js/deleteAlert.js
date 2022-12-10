let element = document.querySelector('#btnDelete');

function deleteFile(id) {
  element.setAttribute('href', '../../controller/files/delete.php?id='+id);
}

function deleteUser(id) {
  element.setAttribute('href', '../../controller/users/delete.php?id='+id);
}
