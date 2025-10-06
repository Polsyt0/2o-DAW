const canvas = document.getElementById('pong');
const ctx = canvas.getContext('2d');

// Game objects
const paddleWidth = 10;
const paddleHeight = 100;
const ballSize = 12;

let leftPaddle = {
    x: 10,
    y: canvas.height / 2 - paddleHeight / 2,
    width: paddleWidth,
    height: paddleHeight,
    speed: 10
};

let rightPaddle = {
    x: canvas.width - paddleWidth - 10,
    y: canvas.height / 2 - paddleHeight / 2,
    width: paddleWidth,
    height: paddleHeight,
    speed: 5
};

let ball = {
    x: canvas.width / 2 - ballSize / 2,
    y: canvas.height / 2 - ballSize / 2,
    size: ballSize,
    speedX: 5 * (Math.random() > 0.5 ? 1 : -1),
    speedY: 3 * (Math.random() > 0.5 ? 1 : -1)
};

// Control left paddle with mouse
canvas.addEventListener('mousemove', function(e) {
    const rect = canvas.getBoundingClientRect();
    let mouseY = e.clientY - rect.top;
    leftPaddle.y = mouseY - leftPaddle.height / 2;

    // Prevent paddle from going out of bounds
    if (leftPaddle.y < 0) leftPaddle.y = 0;
    if (leftPaddle.y + leftPaddle.height > canvas.height)
        leftPaddle.y = canvas.height - leftPaddle.height;
});

// Draw everything
function draw() {
    // Clear
    ctx.fillStyle = '#000';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Draw paddles
    ctx.fillStyle = '#fff';
    ctx.fillRect(leftPaddle.x, leftPaddle.y, leftPaddle.width, leftPaddle.height);
    ctx.fillRect(rightPaddle.x, rightPaddle.y, rightPaddle.width, rightPaddle.height);

    // Draw ball
    ctx.fillStyle = '#fff';
    ctx.fillRect(ball.x, ball.y, ball.size, ball.size);
}

// Game logic
function update() {
    // Move ball
    ball.x += ball.speedX;
    ball.y += ball.speedY;

    // Ball collision with top/bottom walls
    if (ball.y <= 0 || ball.y + ball.size >= canvas.height) {
        ball.speedY *= -1;
    }

    // Ball collision with left paddle
    if (
        ball.x <= leftPaddle.x + leftPaddle.width &&
        ball.y + ball.size >= leftPaddle.y &&
        ball.y <= leftPaddle.y + leftPaddle.height
    ) {
        ball.x = leftPaddle.x + leftPaddle.width; // Prevent sticking
        ball.speedX *= -1;
        // Add some randomness
        ball.speedY += (Math.random() - 0.5) * 2;
    }

    // Ball collision with right paddle
    if (
        ball.x + ball.size >= rightPaddle.x &&
        ball.y + ball.size >= rightPaddle.y &&
        ball.y <= rightPaddle.y + rightPaddle.height
    ) {
        ball.x = rightPaddle.x - ball.size; // Prevent sticking
        ball.speedX *= -1;
        // Add randomness
        ball.speedY += (Math.random() - 0.5) * 2;
    }

    // Ball out of bounds (reset)
    if (ball.x < 0 || ball.x > canvas.width) {
        ball.x = canvas.width / 2 - ball.size / 2;
        ball.y = canvas.height / 2 - ball.size / 2;
        ball.speedX = 5 * (Math.random() > 0.5 ? 1 : -1);
        ball.speedY = 3 * (Math.random() > 0.5 ? 1 : -1);
    }

    // AI for right paddle
    let paddleCenter = rightPaddle.y + rightPaddle.height / 2;
    if (ball.y + ball.size / 2 < paddleCenter - 10) {
        rightPaddle.y -= rightPaddle.speed;
    } else if (ball.y + ball.size / 2 > paddleCenter + 10) {
        rightPaddle.y += rightPaddle.speed;
    }
    // Prevent right paddle from going out of bounds
    if (rightPaddle.y < 0) rightPaddle.y = 0;
    if (rightPaddle.y + rightPaddle.height > canvas.height)
        rightPaddle.y = canvas.height - rightPaddle.height;
}

// Main loop
function loop() {
    update();
    draw();
    requestAnimationFrame(loop);
}

loop();