

while(realGift.length < 4){
giftSum = sortedWeights[index] ;
for (var [key, value] of giftAnswerMap.entries()) {
    if(giftSum == value && !realGift.includes(key)){
      index += 1;
      realGift.push(key);
      break;
    }
  }
}



for (var [key, value] of giftAnswerMap.entries()) {
    giftSum = sortedWeights[index] ;
    if(giftSum == value){
      index += 1;
      realGift.push(key);
    }
    if(index == 4){
      break;
    }
}