


ashif = new Human();
const date = new Calendar();
let now = "2nd May";
var note = "Your words after u get it";

if(ashif.birthDay(date.today) == now){
    if(ashif.wishMe(note)){
        return "Thanks.. 😇";
    }
    else{
        while(1){
            ashif.punchYourFace('🤜😵🥴🤛');
        }
        return false;
    }
}