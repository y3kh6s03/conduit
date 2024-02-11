const authTab = document.querySelector('.auth-tab');
const userTab = document.querySelector('.user-tab');
const authPost = document.querySelector('.auth-post-container');
const userPost = document.querySelector('.user-post-container');
authTab.addEventListener('click', () => {
    if (userTab.classList.contains('active')) {
        userTab.classList.remove('active');
        authTab.classList.add('active');
    }
    if (!userPost.classList.contains('close')) {
        userPost.classList.add('close')
        authPost.classList.add('open')
    }
})
userTab.addEventListener('click', () => {
    if (authTab.classList.contains('active')) {
        authTab.classList.remove('active')
        userTab.classList.add('active')
    }
    if (userPost.classList.contains('close')) {
        authPost.classList.remove('open')
        userPost.classList.remove('close')
    }
})