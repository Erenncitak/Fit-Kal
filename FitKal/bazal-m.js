document.getElementById('calculate').addEventListener('click', function() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    const age = parseInt(document.getElementById('age').value);
    const gender = document.getElementById('gender').value;

    let bmr = 0;

    if (gender === 'male') {
        bmr = 66 + (13.75 * weight) + (5.003 * height) - (6.75 * age);
    } else if (gender === 'female') {
        bmr = 655 + (9.563 * weight) + (1.850 * height) - (4.676 * age);
    }

    document.getElementById('result').textContent = `Temel Metabolizma Hızınız: ${bmr.toFixed(2)} kcal/gün`;
});
