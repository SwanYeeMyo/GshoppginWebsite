
const input = document.getElementById('text');

function showPassword() {
    if (input.type ==='password') {
        input.type = 'text'
    } else {
        input.type='password'
    }
}
