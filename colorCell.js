
var cells = document.getElementById("test").getElementsByTagName("td");
for (var i = 0; i < cells.length; i++) {
    if (cells[i].innerHTML == "L") {
        cells[i].style.backgroundColor = "red";
    }
}