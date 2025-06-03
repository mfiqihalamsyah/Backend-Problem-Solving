function groupAnagrams(arr) {
  let result = [];
  let grouped = {};

  function sortString(str) {
    return str.split('').sort().join('');
  }

  for (let i = 0; i < arr.length; i++) {
    let word = arr[i];
    let sortedWord = sortString(word);

    if (!grouped[sortedWord]) {
      grouped[sortedWord] = [word];
    } else {
      grouped[sortedWord].push(word);
    }
  }

  for (let key in grouped) {
    result.push(grouped[key]);
  }

  return result;
}

let arr = ['cook', 'save', 'taste', 'aves', 'vase', 'state', 'map'];
console.log(groupAnagrams(arr));
