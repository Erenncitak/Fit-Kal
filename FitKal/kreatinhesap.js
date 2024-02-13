const calculate = document.getElementById("calculate");
const result = document.getElementById("result");

function kreatinHesap() {
  const weight = document.getElementById("weight").value;

  if (weight === "") {
    alert("Lütfen boş alan bırakmayınız.");
  } else {
    const kreatin = weight * (0.1).toFixed(2);
    result.textContent = `Günlük Kreatin Dozunuz: ${kreatin.toFixed(2)} gr`;
  }
}
