// Jquary Ajax//

function emailCheck(email) {
    $.ajax({
        url : 'http://localhost/data-store/public/email-check/'+email,
        method : 'GET',
        data : {email:email},
        dataType : 'JSON',
        success : function(data){
            document.getElementById('res').innerHTML = data;
            if  (xmlHttp.responseText == '<span class="text-danger">Email address already exist</span>'){
                document.getElementById('resBtn').disabled = true;
            }   else {
                document.getElementById('resBtn').disabled = false;
            }
        }
    });
}