// $(document).ready(function(){

//     $('.trieBtn').click(function(){
//         $('.my-event-card').toggle('slow')
//     })

// })

function trieAlphabetic(one, two){
    // var test = document.querySelector(#A)
    // document.getElementsByClassName('my-event-card').style.display = 'none'

    var x = document.getElementsByClassName("my-event-card")
    var i
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'none';
    }

    x = document.getElementsByClassName(one)
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'initial';
    }

    x = document.getElementsByClassName(two)
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'initial';
    }
}

function showAll(){
    var x = document.getElementsByClassName("my-event-card")
    var i
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'initial';
    }
}

function trieByType() {
    var type = document.getElementById('select_type').value
    var x = document.getElementsByClassName("my-event-card")
    var i

    if(type === "All"){
        showAll()
    }
    else{
        for (i = 0; i < x.length; i++) {
            x[i].style.display = 'none';
            
        }

        x = document.getElementsByClassName(type)
        for (i = 0; i < x.length; i++) {
            x[i].style.display = 'initial';
        }
    }

}