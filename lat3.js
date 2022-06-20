// Mengubah object menjadi JSON dengan JSON.stringify()

// let mhs = {
//   nama: "Muhammad Zhafari",
//   nim: "001",
//   email: "muhammad.zhafari17@mhs.uinjkt.ac.id",
// };

// console.log(JSON.stringify(mhs));

// Mengubah JSON menjadi object dengan JSON.parse()

// Ajax

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if ((xhr.readyState == 4) & (xhr.status == 200)) {
//     let mhs = JSON.parse(this.responseText);
//     console.log(mhs);
//   }
// };

// xhr.open("GET", "json/coba.json", true);
// xhr.send();

// JQuery
$.getJSON("json/coba.json", function (data) {
  console.log(data);
});
