function deleteArchive(id) {
  var element=document.querySelector('#btnArchiveDelete');
  element.setAttribute('href', '../../controller/files/delete.php?id='+id);
}