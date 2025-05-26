const container = document.querySelector('.container');
const karywanBtn = document.querySelector('.karyawan-btn');
const adminBtn = document.querySelector('.admin-btn');

karywanBtn.addEventListener('click', () => {
    container.classList.add('active');
});

adminBtn.addEventListener('click', () => {
    container.classList.remove('active');
});