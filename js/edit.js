function editUser(id, nombre, apellido, telefono, correo, contraseña, nivelUsuario) {
  let nombreInput = document.querySelector('#firstNameEdit')
  let apellidoInput = document.querySelector('#lastNameEdit')
  let telefonoInput = document.querySelector('#phoneEdit')
  let cedulaInput = document.querySelector('#identificationCardEdit')
  let correoInput = document.querySelector('#emailEdit')
  let contraseñaInput = document.querySelector('#passwordEdit')
  let nivelInput = document.querySelector('#userLevelEdit')

  nombreInput.value = nombre
  apellidoInput.value = apellido
  telefonoInput.value = telefono
  cedulaInput.value = id
  correoInput.value = correo
  contraseñaInput.value = contraseña
  nivelInput.value = nivelUsuario
}
