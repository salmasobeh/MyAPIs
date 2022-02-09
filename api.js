document.getElementById("btn").addEventListener("click", function() {

    var value_x = document.getElementById("inputx").value
    var value_y = document.getElementById("inputy").value
    console.log(value_x + " " + value_y)

    const url1 = "http://localhost/lab/my_api.php/?x=" + value_x + "&y=" + value_y;


    getapi1(url1)


});
document.getElementById("btnpalindrome").addEventListener("click", function() {

    var string_pal = document.getElementById("palcheck").value
    console.log(string_pal)

    const url2 = "http://localhost/lab/my_api2.php?str=" + string_pal;


    getapi2(url2)

});
document.getElementById("btnspace").addEventListener("click", function() {

    var str_space = document.getElementById("space").value
    console.log(str_space)

    const url3 = "http://localhost/lab/my_api3.php?string=" + str_space;


    getapi3(url3)

});

document.getElementById("btnpass").addEventListener("click", function() {

    var password = document.getElementById("pwd").value
    console.log(password)

    const url4 = "http://localhost/lab/my_api4.php?password=" + password;


    getapi4(url4)

});
//value x and y
async function getapi1(url) {
    // Storing response
    const response = await fetch(url)
        // Storing data in form of JSON
    var data = await response.json()
    console.log(data)
    showValuesxy(data)
}
//palindrome
async function getapi2(url) {
    const response = await fetch(url)
    var data = await response.json()
    console.log(data)
    showPalindrome(data)
}
// remove extra space
async function getapi3(url) {
    const response = await fetch(url)
    var data = await response.json()
    console.log(data)
    removedExtraSpace(data)
}
async function getapi4(url) {
    // Storing response
    const response = await fetch(url)
        // Storing data in form of JSON
    var data = await response.json()
    console.log(data)
    showHashPassword(data)
}
//pali

function showValuesxy(data) {

    let x = `${data.value_x}`
    let y = `${data.value_y}`
    const exp = `${data.value_exp}`

    document.getElementById("exp").innerText = "" + exp
}

function showPalindrome(data) {
    let pal = `${data.string}`
    let check_pal = `${data.value}`
    document.getElementById("pal").innerText = "" + check_pal
}

function removedExtraSpace(data) {

    let str = `${data.string}`
    let new_str = `${data.new_string}`

    document.getElementById("remove").innerText = new_str
}

function showHashPassword(data) {
    let password = `${data.password}`
    let hash_pass = `${data.hashed_password}`
    let validate = `${data.validation}`

    document.getElementById("hash").innerText = hash_pass + " " + validate

}