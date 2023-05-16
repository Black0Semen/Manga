let comments = []
loadComment();

document.getElementById('comment_button').onclick = function(){
    
    let commenBody = document.getElementById('comment_write_body');
    let user_id = document.getElementById('id_user');
    let comic_id = document.getElementById('id_comic');

    let comment = {
        id : user_id.value,
        text : commenBody,
        id_comic : comic_id
    }
    //console.log(commenBody.value);
    commenBody.value = '';
    comments.push(comment);
    saveComments();
    showComments();
}

function saveComments(){
    localStorage.setItem('comments', JSON.stringify(comments));
}

function loadComment(){
    if(localStorage.getItem('comments')) comments = JSON.parse(localStorage.getItem('comments'));
    showComments();
}

function showComments(){
    let commentField = document.getElementById('comment__content');
    let out = '';
    comments.forEach(function(item){
        out += `<p>${item.text}</p>`;
    });
}