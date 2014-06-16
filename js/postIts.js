/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * Für das ziehen der "POSTITS
 */

function dragStart(ev) {
   ev.dataTransfer.effectAllowed='move';
   ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
   ev.dataTransfer.setDragImage(ev.target,0,0);
   return true;
}

function dragEnter(ev) {
   event.preventDefault();
   return true;
}
function dragOver(ev) {
    return false;
}
function dragDrop(ev) {
   var src = ev.dataTransfer.getData("Text");
   ev.target.appendChild(document.getElementById(src));
   ev.stopPropagation();
   return false;
}
 var $id=0;
function popup($id) {
    
    if($id<=10){
	popup = document.createElement("div");
	popup.setAttribute("id","post", "style","border: 1px solid black;background-color: yellow;width: 5em;height: 5em;");
	popup.innerHTML = "1";
	document.body.appendChild(popup);
    }
    $id++;
}