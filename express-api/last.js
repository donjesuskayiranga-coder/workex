const express = require("express");
const cors = require("cors");
const fs = require("fs");
fs.readFile("bad.json","utf8", (error,data) => {
    if(error) {
  console.log(error)
    }
    else{
        try{
        JSON.parse(data);
        console.log(users);   
        }
        catch(e){
            console.log(e)
        }
    }
});

const app = express();

app.use(express.json());

app.use((req,res,next)=> {

console.log(req.method, req.url);

next();

});

app.get("/", (req,res) => {
res.send("server is running");
});
app.get("/users", (req,res) => {

res.json(users);

});

app.post("/users",(req,res) => {
    users.push(req.body);
    res.json(users);
fs.writeFile("bad.json",JSON.stringify(users, null,2),(error)=>{

if(error) {console.log(error)}

    else("the users saved to server!");
});

});

app.listen(5000 , () => {
console.log("server is running on 5000!");
});
