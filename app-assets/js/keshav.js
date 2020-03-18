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
function doubleentryedit(element)
{
  var edit1Element='edit1'+element;
  var edit2Element='edit2'+element;
  var edit3Element='edit3'+element;
  document.getElementById('edit').value=element;
  document.getElementById('editvalue1').value=document.getElementById(edit3Element).value; //department_id
  document.getElementById('editvalue1').innerHTML=document.getElementById(edit1Element).innerHTML; //department_name
  document.getElementById('editvalue2').value=document.getElementById(edit2Element).innerHTML; //main test name

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
