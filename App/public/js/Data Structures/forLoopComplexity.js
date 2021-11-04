// There are three basic time  complexity

let arr = [];
/* Standand for loop */
function nomalLoop(n) {
  for (i = 0; i < n; i++) {
    arr.push(i);
  }
  return arr.length;
}
console.log(nomalLoop(10));
console.log('------------------');

arr = [];
/* Nested with same N */
function nestedLoop(n) {
  for (i = 0; i < n; i++) {
    for (j = 0; j < n; j++) {
      arr.push(j);
    }
  }
  return arr.length;
}
console.log(nestedLoop(10));
console.log('------------------');

arr = [];
/* Nested with same diffrent variables */
function nestedWithVarsLoop(n, m) {
  for (i = 0; i < n; i++) {
    for (j = 0; j < m; j++) {
      arr.push(j);
    }
  }
  return arr.length;
}
console.log(nestedWithVarsLoop(3, 4));





