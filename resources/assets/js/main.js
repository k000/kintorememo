const addBtn = document.getElementById('addBtn');
const delBtn = document.getElementById('delBtn');
addBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    const dataArea = document.getElementById('data-area-outer');
    const lastChild = dataArea.lastElementChild;
    const cloneNode = lastChild.cloneNode(true);
    cloneNode.dataset.count = parseInt(lastChild.dataset.count) + 1;
    const nodes = cloneNode.childNodes;
    nodes.forEach( (n) => {
        if(n.id === "shumoku");
            n.name = "shumoku[" + cloneNode.dataset.count + "]";
        if(n.id === "weight");
            n.name = "weight[" + cloneNode.dataset.count + "]";
        if(n.id === "rep");
            n.name = "rep[" + cloneNode.dataset.count + "]";
        if(n.id === "set");
            n.name = "set[" + cloneNode.dataset.count + "]";
    } );
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