var file_pic_list = ["Vsauce_logo.png", "3Blue1Brown.jpg", "numberphile.jpg", "veritasium.jpg", "blackpenredpen.jpg"];
var index = 0;

var update = function() {
    current_pic = file_pic_list[index];
    document.body.style.backgroundImage = "url(" + current_pic + ")";
}

var inc = function() {
    if (index == file_pic_list.length - 1) {
        index = 0;
    } else {
        index++;
    }
    update();
}

var dec = function() {
    if (index == 0) {
        index = file_pic_list.length - 1;
    } else {
        index--;
    }
    update();
}
