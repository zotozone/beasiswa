// jQuery
$(document).ready(function(){
    setTimeout(function(){
        $(".alert").fadeOut()
    },3000)
})

function set_enabled(){
    $("#jenis").removeAttr("disabled")
    $("#syarat").removeAttr("disabled")
    $("#btn-submit").removeAttr("disabled")
}

function set_disabled(){
    $("#jenis").attr('disabled','disabled')
    $("#syarat").attr('disabled','disabled')
    $("#btn-submit").attr('disabled','disabled')
}

function get_nama(){
    let nim = $("#nim").val()

    $.get("http://localhost/bs/api_nilai.php?mode=nilai&nim="+nim,function(data){
        if(data!=""){
            api = JSON.parse(data)
            $("#nama").val(api.nama)
        }
    })
}

function get_ipk(){
    let nim = $("#nim").val()
    let semester = $("#semester").val()

    $.get("http://localhost/bs/api_nilai.php?mode=ipk&nim="+nim+"&semester="+semester,function(data){
        if(data!=""){
            api = JSON.parse(data)
            $("#ipk").val(api.ipk)
            if(api.ipk>=3){
                set_enabled()                
            } else {
                set_disabled()
                $alert = "<div class='position-fixed top-0 left-0 text-center w-100 alert alert-danger' role='alert'>IPK Tidak Memenuhi Syarat</div>"
                $("body").append($alert)
            }
        } else {
            set_disabled()
        }
    })
}