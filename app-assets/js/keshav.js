function delet(id){
  document.getElementById('delete').value=id;
}
function edit(element){
  document.getElementById('edit').value=element;
}
function editCommon(elementValue)
{
  var elementTitleId='edittitle'+elementValue;
  var elementRecordId='editrecord'+elementValue;
  console.log(document.getElementsByName('title')[0]);
  document.getElementsByName('title')[0]=document.getElementById(elementTitleId).value;
  document.getElementsByName('record')[0]=document.getElementById(elementRecordId).value;
}
