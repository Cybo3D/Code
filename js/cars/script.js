let cars = [];
cars.push({
    car: "Toyota",
    price: 10000
});
cars.push({
    car: "Chevrolet",
    price: 14500
});

function calculateTotalPrice(){
    let totalPrice = 0;
    for (let index = 0; index < cars.length; index++) {
        totalPrice += Number(cars[index].price);
    }
    document.getElementById("totalPrice").innerHTML = `<p>${totalPrice}</p>`;
}

function displayCars() {
    let output = "";
    for (let index = 0; index < cars.length; index++) {
        output += `<p>De ${cars[index].car} kost $${cars[index].price}</p>`;
    }
    console.warn("test");
    
    document.getElementById("car_list").innerHTML = output;

    calculateTotalPrice()
}

function addCar(){
    let car = document.forms["add_car_form"]["car"].value;
    let price = document.forms["add_car_form"]["price"].value;

    cars.push({
        car: car,
        price: price
    });

    displayCars();

    return false;
}

displayCars();