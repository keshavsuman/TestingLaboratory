function delet(id){
  document.getElementById('delete').value=id;
}
function edit(element){
  document.getElementById('edit').value=element;
}
function editcommon()
{
  var title=document.getElementById('title').value;
  var record=document.getElementById('record').value;
  document.getElementById('edittitle').value=title;
  document.getElementById('editrecord').value=record;
}
