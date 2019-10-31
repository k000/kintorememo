const addBtn = document.getElementById('addBtn');
const delBtn = document.getElementById('delBtn');
addBtn.addEventListener('click',(e)=>{
    e.preventDefault();
    const dataArea = document.getElementById('data-area-outer');
    const lastChild = dataArea.lastElementChild;
    const cloneNode = lastChild.cloneNode(true);
    cloneNode.dataset.count = parseInt(lastChild.dataset.count) + 1;
    
    let childs = cloneNode.children;
   
    childs[0].children[0].name = "shumoku[" + cloneNode.dataset.count + "]";
    childs[1].children[0].children[1].name = "weight[" + cloneNode.dataset.count + "]";
    childs[1].children[1].children[1].name = "rep[" + cloneNode.dataset.count + "]";
    childs[1].children[2].children[1].name = "set[" + cloneNode.dataset.count + "]";

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