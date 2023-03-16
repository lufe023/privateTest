

let results = []
for(let i=101; i<150; i++)
{
    if(i%2!=0){
        results.push(i)
}
}


document.getElementById("ex1").innerHTML = results.map(result=>
    `<li>${result}</li>`
)
