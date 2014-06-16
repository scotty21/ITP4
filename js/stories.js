/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    $('#selectProject').on('change', getStories());
});

function getStories() {
    var selected =   $('#selectProject').val();
    if(selected === null) {
        return;
    }
//    alert(selected);
    $.ajax({
        url:        '../php/db/getStories.php',
        type:       'POST',
        data:       { value: selected },
        success:    function(data) {
//            alert(data);
            $('#storiesList').html(data);
            $('#newStoryButton').html("<a href=\"editStory.php?action=new&p="+selected+"\">neue Story anlegen</a>");                
        }
    });
}