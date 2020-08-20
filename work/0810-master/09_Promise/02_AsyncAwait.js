function longTimeWork(workFine, errorMessage) {
    return new Promise( (resolve, reject) => {
        setTimeout( () => {
            (workFine) ? resolve(200) : reject(errorMessage);
        }, 3000);
    })
}

// async function usingLongTimeWork() {
//     var result = await longTimeWork(true, "test");
//     console.log(result);
// }

async function usingLongTimeWork() {
    try {
        var result = await longTimeWork(false, "test is fail.");
        console.log("success");
        console.log(result);
    }
    catch (e) {
        console.log("error");
        console.log(e);
    }
    
}

usingLongTimeWork();
