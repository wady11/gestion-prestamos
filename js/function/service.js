'use strict';



const ReciveInformacion = (dato)=>{
    return new Promise(async(resolve,reject)=>{
        const {user,name,password,type,url} = dato;
        let info = [user,name,password];

        let init={
            method : type,
            body : info,
            headers : {
                "content-type" : "application/json"
            }
        }

        try {
            const response = await fetch(`http://localhost:83/Admin-LTE/${url}`,init);
             const data = await response.json();
            resolve(data);
            console.log(data);
        } catch (error) {
            reject(error);
        }
        
    })

} 



const ajaxservice = {
    ReciveInformacion
}