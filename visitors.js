var count = document.getElementById('count');
updateVisitorsCount();
function updateVisitorsCount(){
    fetch('https://api.countapi.xyz/update/codinghubmhd/website/?amount=1')
    .then(res => res.json())
    .then(res =>{
        count.innerHTML=res.value;
    })
}