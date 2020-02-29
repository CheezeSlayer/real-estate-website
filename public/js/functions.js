function showAdvancedOptions() {
    var x = document.getElementById('advanced_options')
    console.log(x.classList);
    if(x.classList.contains('d-none')) {
        x.classList.remove('d-none');
        console.log(x.classList);
    } else {
        x.classList.add('d-none');
        console.log(x.classList);
    }
}