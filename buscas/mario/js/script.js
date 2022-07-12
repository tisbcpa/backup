const mario = document.querySelector('.mario');
const pipe = document.querySelector('.pipe');
const cloud = document.querySelector('.cloud');

const jump = () => {
    mario.classList.add('jump');

    setTimeout(() => {

        mario.classList.remove('jump');

    }, 500);

}

const loop = setInterval(() => {
    const pipePosition = pipe.offsetLeft;
    const cloudPosition = cloud.offsetLeft;
    const marioPosition = +window.getComputedStyle(mario).bottom.replace('px', '');

    console.log(pipePosition)

        if (pipePosition <= 120 && pipePosition > 0 && marioPosition < 80){
            pipe.style.animation = 'none';
            pipe.style.left = `${pipePosition}px`;

            mario.style.animation = 'none';
            mario.style.bottom = `${marioPosition}px`;

            mario.src="./Imagens/game-over.png";
            mario.style.width = '75px'
            mario.style.marginLeft = '50px'

            cloud.style.animation = 'none';
            cloud.style.left = `${cloudPosition}px`;


            clearInterval(loop);

        }

}, 10);

document.addEventListener('keydown', jump);