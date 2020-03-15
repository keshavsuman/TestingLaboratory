function delet(id){
  document.getElementById('delete').value=id;
}
function edit(element){
  document.getElementById('edit').value=element;
}
function singleentryedit(element){
  var editElement='edit'+element;
  document.getElementById('editfield').value=document.getElementById(editElement).innerHTML;
  document.getElementById('edit').value=element;
}
function editCommon(elementValue)
{
  var elementTitleId='edittitle'+elementValue;
  var elementRecordId='editrecord'+elementValue;
  console.log(elementTitleId);
  console.log(elementRecordId);
  document.getElementById('edit').value=elementValue;
  document.getElementsByName('title')[0].value=document.getElementById(elementTitleId).innerHTML;
  document.getElementsByName('record')[0].value=document.getElementById(elementRecordId).innerHTML;
}
