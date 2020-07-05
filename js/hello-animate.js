var i = 0,
  text;
text = "Welcome To Dark";
var x = "Тест";
var pos = 0;
var data = ["Привет", "Меня зовут Роберт!", "Я Backend-разработчик"];

function typing() {
  if (i < data[pos].length) {
    console.log("Длина равна " + text.length);
    if (document.getElementById("text") != null) {
      document.getElementById("text").innerHTML += data[pos].charAt(i);
      i++;
    }

    setTimeout(typing, 150);
  } else {
    setTimeout(deleting, 100);
  }
}

function deleting() {
  var str = (document.getElementById("text").innerHTML = data[pos]
    .toString()
    .substring(0, i));
  document.getElementById("text").innerHTML = str;
  console.log(str.length);
  i--;
  if (str.length > 0) {
    setTimeout(deleting, 100);
  } else {
    typing();
    pos++;
    if (pos >= data.length) {
      pos = 0;
    }
  }
}

typing();

console.log("111");
