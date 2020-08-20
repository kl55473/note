function longTimeWork(workFine, errorMessage) {
    return new Promise( (resolve, reject) => {
        setTimeout( () => {
            workFine ? resolve(200) : reject(errorMessage);
        }, 1000);
    })
}

function usingLongTimeWork() {
    longTimeWork(true, "test is fail.")  // try true/false
    .then(function (e) {
        console.log("success");
        console.log(e);
    })
    .catch(function (e) {
        console.log("fail");
        console.log(e);
    })
}

usingLongTimeWork();
