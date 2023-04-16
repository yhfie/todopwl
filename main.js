// membuat tombol delete dan menambahkan ke tiap list
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "delet";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

//klik pada tombol delete akan menyembunyikan list
var delet = document.getElementsByClassName("delet");
var i;
for (i = 0; i < delet.length; i++) {
  delet[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
  }
}

//menambahkan class 'checked' ketika list di-klik
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
      ev.target.classList.toggle('checked');
  }
}, false);

//menambah group list baru ketika klik tombok "NEW"
function newGroup(){
  const divNew = document.createElement("div");
  divNew.classList.add("list", "container-sm", "container-lg", "col-lg-8");
  divNew.innerHTML =
  `
    <form action="" class="input-form">
      <input type="text" id="input-list" placeholder="Write anything...👀" class="list-input form-control col-sm-12">
      <button onclick="newElement()" class="addBtn">
          Add
      </button>
    </form>
  `;
  document.getElementById("list-cont").appendChild(divNew);

}


//menambah list baru ketika klik tombol 'add'
// function newElement() {
//   var li = document.createElement("li");
//   var date = document.createElement("span");

//   var inputValue = document.getElementById("input-list").value;
//   var dateInput = document.getElementById("input-deadline").value;

//   var t = document.createTextNode(inputValue);
//   var d = document.createTextNode(dateInput);

//   li.appendChild(t);
//   date.appendChild(d);

//   if (inputValue === '') {
//       alert("List can't be empty! 🤭");
//   }
//   else if(dateInput === ''){
//     document.getElementById("myUL").appendChild(li);
//     document.getElementById("myUL").innerHTML(`<span>No deadline</span>`);
//   }
//   else {
//       document.getElementById("myUL").appendChild(li);
//       document.getElementById("myUL").appendChild(date);
//   }
//   document.getElementById("input-list").value = "";
//   document.getElementById("input-deadline").value = "";

//   var span = document.createElement("SPAN");
//   var txt = document.createTextNode("\u00D7");
//   span.className = "delet";
//   span.appendChild(txt);
//   li.appendChild(span);

//   for (i = 0; i < delet.length; i++) {
//       delet[i].onclick = function() {
//       var div = this.parentElement;
//       div.style.display = "none";
//       }
//   }
// }

// const form = document.querySelector('form');

// form.addEventListener('submit', (event) =>
//   {
//     event.preventDefault();
//   }
// )