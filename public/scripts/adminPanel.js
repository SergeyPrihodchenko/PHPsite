const autificationBlock = document.querySelector('.adminPanel');
autificationBlock.addEventListener('click', (e) => {
    if(e.target.tagName == 'BUTTON') {
        const inputs =  autificationBlock.querySelectorAll('input');
        inputs.forEach(el => {
            if(el.value == '') {
                el.style.background = 'red';
                el.addEventListener('change', (e) => {
                    if(e.target.value !== '') {
                        e.target.style.background = 'white';
                    }
                });
                e.preventDefault();
            }
        });
    } 
});
const addPost = document.querySelector('.adminPanel');
addPost.addEventListener('click', (e) => {
    if(e.target.tagName == 'BUTTON') {
      const name =  addPost.querySelector('.name_drink');
      const description =  addPost.querySelector('.description');

        addPost.querySelectorAll('input').forEach(el => {
            if(el.value == '') {
                el.style.background = 'red';
                el.addEventListener('input', (e) => {
                    if(e.target.value !== '') {
                        e.target.style.background = 'white';
                    }
                });
                e.preventDefault();
            }
        });
        let textaria = addPost.querySelector('textarea');
        if(textaria.value == '') {
            textaria.style.background = 'red';
            textaria.addEventListener('input', (e) => {
                if(e.target.value !== '') {
                    e.target.style.background = 'white';
                }
            });
        }

    } 
});


