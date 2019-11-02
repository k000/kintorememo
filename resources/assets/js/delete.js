const dels = document.getElementsByClassName('gomi')
let i;

for(i=0;i<dels.length;i++){
    dels[i].addEventListener('click', function(e) {
        e.preventDefault();
        if(confirm('投稿を削除をします')){
            document.getElementById('form_' + this.dataset.id).submit();
        }
    })
}