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
