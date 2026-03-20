



const http = require("http");
const fs = require("fs");


let users = [
    { id :1, name:"KAYIRANGA Don Jesus", age:17},
    {id:2, name:"Alpha Emmy", age:20,

    }

];

fs.readFile("users.json","utf8",(error,data)=>{

    if(error) {console.error(error)
        
    }

    else { 
        try{

        
    users =JSON.parse(data);
    console.log(users);
        }
        catch(e) {

            console.error("Error parsing users.json:",e);
        }
    };


const server = http.createServer(function(req,res){
res.setHeader("Access-Control-Allow-Origin","*");
    res.setHeader("Access-Control-Allow-Methods", "GET,POST,OPTIONS");
    res.setHeader("Access-Control-Allow-Headers","Content-Type");

    if(req.method === "OPTIONS") {
        res.writeHead(204);
        res.end();
        return
    }

    if(req.method === "GET" && req.url === "/") {
        res.setHeader("Content-Type","text/plain");
        res.end("Hello from node ");
    }
    else if(req.method === "GET" && req.url === "/users") {
    res.setHeader("Content-Type","application/json");
   
         res.end(JSON.stringify(users));

    }
    else if(req.method === "GET" && req.url === "/contact") {
        res.setHeader("Content-Type","text/plain");      
          res.end("contact");
    }


    else if(req.method === "POST" && req.url === "/users") {
        let body ="";

        req.on("data", chunk =>{
            
            body += chunk;

        });

        req.on("end",() => {
        
            let received = JSON.parse(body);
            users.push(received);

        console.log("Received:",received);
        
        res.end(JSON.stringify(users));

        fs.writeFile("users.json", JSON.stringify(users,null,2), (err) =>  {
            if(err) console.log("error writing users.json:",err);
            else console.log("saved users to file");
        })


        })
    
    }
    
    else{
        res.writeHead(404,{
            "Content-Type": "text/plain"
        });
        res.end("Page not found");

    }
    
});



   server.listen(4000,() => console.log("server is running on port 4000!"));


   


});



 
