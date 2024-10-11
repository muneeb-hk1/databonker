document.getElementById('sidetab').addEventListener('click',function(){
    document.getElementById('show_side_tabs').style.display = "block";
    document.getElementById('main').style.filter = 'blur(2px)';
})

document.getElementById('close_side_tab').addEventListener('click',function(){
    document.getElementById('show_side_tabs').style.display = "none";
    document.getElementById('main').style.filter = 'blur(0px)';
})

// Show User dashboard on tab





 