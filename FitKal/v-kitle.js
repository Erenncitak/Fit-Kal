
document
.getElementById("calculate")
.addEventListener("click", function () {
  const gender = document.getElementById("gender").value;
  const weight = parseFloat(document.getElementById("weight").value);
  const height =
    parseFloat(document.getElementById("height").value) / 100; // Convert cm to meters

  if (isNaN(weight) || isNaN(height)) {
    document.getElementById("result").innerHTML =
      "Lütfen geçerli bir kilo ve boy girin.";
    return;
  }

  const bmi = weight / (height * height);
  let interpretation = "";
  let bsa = 0; // Body Surface Area (Vücut Yüzey Alanı)
  let idealWeight = 0;
  let leanBodyWeight = 0;

  if (gender === "male") {
    // Calculations for male
    bsa = Math.sqrt((height * weight) / 3600).toFixed(2);
    idealWeight = (22 * Math.pow(height, 2)).toFixed(2);
    leanBodyWeight = (weight * (1 - (bmi < 27.8 ? 0.25 : 0.3))).toFixed(
      2
    );

    if (bmi < 20.7) {
      interpretation = "Zayıf";
    } else if (bmi < 26.4) {
      interpretation = "Normal";
    } else if (bmi < 27.8) {
      interpretation = "Fazla Kilolu";
    } else {
      interpretation = "Obez";
    }
  } else if (gender === "female") {
    // Calculations for female
    bsa = Math.sqrt((height * weight) / 3600).toFixed(2);
    idealWeight = (22 * Math.pow(height, 2)).toFixed(2);
    leanBodyWeight = (weight * (1 - (bmi < 27.3 ? 0.25 : 0.3))).toFixed(
      2
    );

    if (bmi < 19.1) {
      interpretation = "Zayıf";
    } else if (bmi < 25.8) {
      interpretation = "Normal";
    } else if (bmi < 27.3) {
      interpretation = "Fazla Kilolu";
    } else {
      interpretation = "Obez";
    }
  }

  document.getElementById("result").innerHTML = `
Vücut Kitle Endeksi: ${bmi.toFixed(2)} - Durum: ${interpretation}<br>
Vücut Yüzey Alanınız: ${bsa} m²<br>
İdeal Kilonuz: ${idealWeight} kg<br>
Yağsız Vücut Ağırlığınız: ${leanBodyWeight} kg
`;
});
