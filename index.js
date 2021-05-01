var variavel = document.querySelector('#atackIcon');
var consoleRPG = document.querySelector('#consoleRPG');

variavel.addEventListener("click", () => {
    consoleRPG.innerHTML = "<?php echo $atualHp;?>";
    console.log("<?php echo $atualHp;?>");
});


/*
if (window.innerWidth > 767) {
    var dropfrequentlyQuestion = document.querySelector('#dropfrequentlyQuestion');
    dropfrequentlyQuestion.addEventListener("mouseleave", () => {
        dropfrequentlyQuestion.click();
    });
    var frequentlyQuestion = document.querySelector('#frequentlyQuestion');
    frequentlyQuestion.addEventListener("mouseenter", () => {
        if (dropfrequentlyQuestion.classList[3] == undefined) {
            frequentlyQuestion.click();
        }
    });
}
*/