let dbRows;

window.onload = () =>{

    document.getElementById("btn-clickMe").onclick = () =>{

        getContent("getFileAttenteContent");
    }
}

const getContent = (actionType) =>{

    $.ajax({
		url : "DbAction.php",
        type : "POST",			
        timeout : 0,
		data : {
            actionType:actionType
        },
	})
	.done(function (msg) {

        console.log(msg + "\n");

        dbRows = JSON.parse(msg);

        console.log(dbRows)

    })
    

}