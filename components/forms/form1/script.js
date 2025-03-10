const form1Button = document.querySelector(".form1 .nice-select");
const form1CurrentSelect = document.querySelector(".form1 .current");
const form1List = document.querySelectorAll(".form1 .option");

form1Button.addEventListener("click", () => {
  form1Button.classList.toggle("open");
});

form1List.forEach((item) => {
  item.addEventListener("click", (e) => {
    console.log(e.target);

    form1CurrentSelect.innerHTML = e.target.innerHTML;
  });
});
