import addCalc from './modules/add-calc';
import taxCalc from './modules/tax-calc';

const totalPrice = addCalc(400, 600);
const priceIncludeTax = taxCalc(totalPrice, 1.08);

console.log(priceIncludeTax);