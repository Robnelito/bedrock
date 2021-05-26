function trieAlphabetic(one, two){
    // var test = document.querySelector(#A)
    // document.getElementsByClassName('my-event-card').style.display = 'none'

    var x = document.getElementsByClassName("my-event-card")
    var i
    for (i = 0; i < x.length; i++) {
        x[i].style.display = 'none';
    }
    document.getElementById(one).style.display = 'initial'
    document.getElementById(two).style.display = 'initial'

}
