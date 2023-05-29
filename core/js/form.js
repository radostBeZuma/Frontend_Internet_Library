const registrBtn = document.querySelector('[data-btn-registr]');
const closeBtn = document.querySelector('[data-form-close]');
const formInst = document.querySelector('[data-form-registr]');

const openLoginBtn = document.querySelector('[data-btn-login]');
const closeLoginBtn = document.querySelector('[data-form-login-close]');
const formLogin = document.querySelector('[data-form-login]');

const formFuncs = (openBtn, closeBtn, form) => {
    openBtn.addEventListener('click', () => {
        form.classList.add('_is-active');
    });

    closeBtn.addEventListener('click', () => {
        form.classList.remove('_is-active');
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        window.location.replace('/cabinet/');
    })
};

formFuncs(registrBtn, closeBtn, formInst);
formFuncs(openLoginBtn, closeLoginBtn, formLogin);






