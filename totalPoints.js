let bet = document.getElementsByTagName("td");


let count = 0;

for(let i=0; i<bet.length; i++)

    if(bet[i].innerHTML == "E")

    count++;

console.log(count);


//Output the count in the table

for(let i=0; i<bet.length; i++)
document.getElementById("total-points").innerHTML = count;
