require('./bootstrap');

Echo.private('notifications')
    .listen('UserSessionChanged',(e)=>{
        const noticationElement = document.getElementById('notification');
        noticationElement.innerText = e.message;
        noticationElement.classList.remove('invisible');
        noticationElement.classList.remove('alert-success');
        noticationElement.classList.remove('alert-danger');
        noticationElement.classList.add('alert-'+ e.type);
    })
