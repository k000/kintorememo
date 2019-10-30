const addBtn = document.getElementById('addBtn');
const delBtn = document.getElementById('delBtn');
addBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    const dataArea = document.getElementById('data-area-outer');
    const lastChild = dataArea.lastElementChild;
    const cloneNode = lastChild.cloneNode(true);
    cloneNode.dataset.count = parseInt(lastChild.dataset.count) + 1;

    let nodes = cloneNode.childNodes;

    nodes[1].childNodes[1].name = "shumoku[" + cloneNode.dataset.count + "]";
    nodes[3].childNodes[1].childNodes[3].name = "weight[" + cloneNode.dataset.count + "]";
    nodes[3].childNodes[3].childNodes[3].name = "rep[" + cloneNode.dataset.count + "]";
    nodes[3].childNodes[5].childNodes[3].name = "set[" + cloneNode.dataset.count + "]";

    dataArea.appendChild(cloneNode);
});
delBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    const dataArea = document.getElementById('data-area-outer');
    const lastChild = dataArea.lastElementChild;

    if(lastChild.dataset.count === "0")
        return;
    else
        dataArea.removeChild(lastChild);
});