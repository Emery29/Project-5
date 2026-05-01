function calculateSlope() {
    let x1 = parseFloat(document.getElementById("x1").value);
    let y1 = parseFloat(document.getElementById("y1").value);
    let x2 = parseFloat(document.getElementById("x2").value);
    let y2 = parseFloat(document.getElementById("y2").value);

    if (x1 === x2) {
        document.getElementById("slopeResult").innerText = "Slope is undefined (vertical line).";
        return;
    }

    let slope = (y2 - y1) / (x2 - x1);
    document.getElementById("slopeResult").innerText = "Slope = " + slope;
}

function checkAnswer() {
    let userAnswer = parseFloat(document.getElementById("answer").value);
    let correct = 5;

    if (userAnswer === correct) {
        document.getElementById("feedback").innerText = "Correct! Great job.";
        document.getElementById("feedback").style.color = "green";
    } else {
        document.getElementById("feedback").innerText = "Not quite. Try again.";
        document.getElementById("feedback").style.color = "red";
    }
}
