<!DOCTYPE html>
<html>

<head>
    <title>JavaScript basic animation</title>

</head>

<body onload="animate_string('target')" <pre id="target">w3resource </pre>
</body>
<script >
    
        function animate_string(id) {
            var element = document.getElementById(id);
            console.log(document.getElementById(id).innerHTML)
            var textNode = element.childNodes[0]; // assuming no other children
            var text = textNode.data;
            console.log(textNode);
            console.log(text);
            setInterval(function() {
                text = text[text.length - 1] + text.substring(0, text.length - 1);
                textNode.data = text;
            }, 100);
        }
    
</script>

</html>