var num_opened = 0;
var num_of_open = localStorage.getItem('num-of-opens');
const style = document.getElementsByClassName('style');

function GFG_Fun() {
 $('style').empty();
} 

window.addEventListener("load", () => {
    if( num_of_open == 1){
        console.log('has already been opened');
        GFG_Fun();

    } else{
        console.log('fisrt time being opened ');
        num_opened = num_opened + 1;
        var num_of = localStorage.setItem("num-of-opens", num_opened);
        
    }
});