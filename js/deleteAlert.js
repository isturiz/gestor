
function deleteFile(id) {
  let element = document.querySelector('#btnDelete');
  element.setAttribute('href', '../../controller/files/delete.php?id='+id);
}

function deleteUser(id) {
  let element = document.querySelector('#btnDelete');
  element.setAttribute('href', '../../controller/users/delete.php?id='+id);
}
