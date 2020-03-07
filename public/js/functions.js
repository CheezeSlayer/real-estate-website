function toggle_hidden(item_id) {
    var x = document.getElementById(item_id)
    console.log(x.classList);
    if(x.classList.contains('hidden')) {
        x.classList.remove('hidden');
        console.log(x.classList);
    } else {
        x.classList.add('hidden');
        console.log(x.classList);
    }
}