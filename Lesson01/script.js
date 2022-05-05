var content = document.querySelector(".content");
var inputArray = document.querySelector("#inputArray");
var btnResult = document.querySelector(".btnResult");
// console.log(inputArray)

// ***********************************CÂU 1**************************************
function findMax5(myarray) {
  var dem = 0;
  // let myarray = [10,11,2,30,22,6,8,9,11,12,22];
  var tempArr = [];
  myarray.sort(function (a, b) {
    return b - a;
  });
  for (var i = 0; i < myarray.length; i++) {
    if (dem < 5) {
      tempArr[i] = myarray[i];
      dem++;
    } else {
      break;
    }
  }

  content.innerHTML = "Kết quả: " + tempArr;
}

btnResult.onclick = function () {
  var values = inputArray.value;
  var getArr = [];
  var resultArr = [];
  arr = values.split(",");
  arr.forEach((element, index) => {
    resultArr[index] = parseInt(element);
  });

  findMax5(resultArr);
};

// ****************************CÂU 2**************************************************
var contentB = document.querySelector(".contentB");
var contentArr = document.querySelector(".arr");
function findFrequent(array) {
//  Biến arr lưu tất cả giá trị người dùng nhập vào và ép kiểu về chuỗi
  var arrString = [];
  array.forEach((element, index) => {
    //   console.log(array[e])
    arrString[index] = String(element);
  });

//   console.log(arrString);
// Biến dùng để lưu giá trị lớn nhất
  var maxArr = [];
  var count = 0;
  var tempCount = 0;
  for (var i = 0; i < arrString.length - 1; i++) {
    for (var j = i + 1; j < arrString.length; j++) {
      // console.log(arrString[i])
      // console.log(arrString[j])
      if (arrString[i] == arrString[j]) {
        tempCount++;
        maxArr = arrString[i];
      }
    }
  }
  if (tempCount > count) {
    count = tempCount;
  }
  
  contentB.innerHTML = "Phần tử xuất hiện nhiều nhất trong mảng là: " + maxArr;

}
let array = [null, "hello", true, null];
contentArr.innerHTML = "Input là: [ null, hello, true, null ]";
findFrequent(array);
