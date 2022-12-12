function editUser(id, nombre) {
  let element = document.querySelector('#btnEditUser');
  element.setAttribute('href', '../../controller/users/test.php?id='+id);

  let divPrueba = document.querySelector('#divPrueba')
  let inputPrueba = document.querySelector('#inputPrueba')
  let nombree = document.querySelector('#firstNameEdit') 

  let btn = document.querySelector('#editButton')
  let nombreAlt = btn.getAttribute('data-test-nombre')

  nombree.value = nombreAlt

  inputPrueba.value = id
}
