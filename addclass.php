<?php

/*
Template Name: add class
*/

?>

<?php get_header(); ?>
<style>
       body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        textarea, input {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }
        button {
            display: block;
            margin-bottom: 10px;
        }
    </style>
 <h2>CSS Prefixer</h2>
    <input type="text" id="className" placeholder="Введіть клас, який додати..." value="custom-class">
    <textarea id="inputCSS" placeholder="Вставте ваш CSS тут..."></textarea>
    <button onclick="convertCSS()">Перетворити</button>
    <button onclick="copyToClipboard()">Копіювати</button>
    <textarea id="outputCSS" readonly placeholder="Тут з'явиться перетворений CSS..."></textarea>

    <script>
        function removeComments(cssText) {
            return cssText.replace(/\/\*[^*]*\*+(?:[^/*][^*]*\*+)*\//g, '');
        }

        function addClassPrefixToCSS(cssText, className) {
            return cssText.replace(/(^|\{|\}|,|\s)([^{}@\n]+)(?=\s*\{)/g, (match, before, selectors) => {
                let updatedSelectors = selectors.split(',').map(selector => {
                    selector = selector.trim();
                    if (selector.startsWith('@') || selector.startsWith(`.${className}`)) {
                        return selector;
                    }
                    return `.${className} ` + selector;
                }).join(', ');
                return `${before}${updatedSelectors}`;
            });
        }

        function convertCSS() {
            let inputCSS = document.getElementById("inputCSS").value;
            let className = document.getElementById("className").value.trim() || "custom-class";
            
            inputCSS = removeComments(inputCSS);
            
            inputCSS = inputCSS.replace(/(@media[^{]+{)([^}]+)}/g, (match, mediaQuery, mediaContent) => {
                let updatedContent = addClassPrefixToCSS(mediaContent, className);
                return `${mediaQuery}${updatedContent}}`;
            });

            let outputCSS = addClassPrefixToCSS(inputCSS, className);
            document.getElementById("outputCSS").value = outputCSS;
        }

        function copyToClipboard() {
            const outputCSS = document.getElementById("outputCSS");
            outputCSS.select();
            document.execCommand("copy");
            alert("Скопійовано!");
        }
    </script>

<?php get_footer(); ?>