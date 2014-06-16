/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function saveStory() {
    var title = $('#storyTitle').val();
    var description = $('#description').val();

    if (title === "" || description === "") {
        alert("Alle Felder müssen ausgefüllt sein!");
        return;
    }

    HTTP_GET_VARS = new Array();
    strGET = document.location.search.substr(1, document.location.search.length);
//    alert(strGET);
    if (strGET !== '')
    {
        gArr = strGET.split('&');
        for (i = 0; i < gArr.length; ++i)
        {
            v = '';
            vArr = gArr[i].split('=');
            if (vArr.length > 1) {
                v = vArr[1];
            }
            HTTP_GET_VARS[unescape(vArr[0])] = unescape(v);
        }
    }

    function GET(v)
    {
        if (!HTTP_GET_VARS[v]) {
            return 'undefined';
        }
        return HTTP_GET_VARS[v];
    }

    if (GET('action') === "undefined") {
        return;
    } else if (GET('p') !== "undefined") {
        $.ajax({
            url: '../php/db/saveStory.php',
            type: 'POST',
            data: {title: title, descr: description, action: GET('action'), project: GET('p')},
            success: function(data) {
            window.location.href = "../php/stories.php";
            }
        });
    } else if (GET('id') !== "undefined") {
        $.ajax({
            url: '../php/db/saveStory.php',
            type: 'POST',
            data: {title: title, descr: description, action: GET('action'), id: GET('id')},
            success: function(data) {
            window.location.href = "../php/stories.php";
            }
        });
    }
}

function deleteStory( sid ) {
    $.ajax({
        url: '../php/db/saveStory.php',
        type: 'POST',
        data: {action: "delete", id: sid},
        success: function(data) {
            window.location.href = "../php/stories.php";
        }
    });
}