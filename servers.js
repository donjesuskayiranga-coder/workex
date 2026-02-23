const http = require("http");
const add = require("./calculator")
const users = [
    {name: "Don Jesus", age:17 ,email:"donjesuskayiranga@gmail.com",phone:"0795822174"},
    {name: "Agaba", age:30 ,email:"agabahappy@gmail.com",phone:"0795822174"}
]
const server = http.createServer(function(req,res){
    if ( req.method === "GET" && req.url==="/users") {
        res.setHeader("Content-Type","application/json")
        res.setHeader("Access-Control-Allow-Origin", "*");
        res.end(JSON.stringify(users));
    }
else if(req.method === "POST" && req.url === "/users") {
let body = "";
req.on("data",chunk => {
body += chunk;
});
req.on("end", () => {
    const received = JSON.parse(body);
    users.push(received);
    console.log("Client sent:",received);
    res.setHeader("Access-Control-Allow-Origin", "*");
    res.end("Data received!");
});
}
else{
    res.statusCode =404;
    res.end("Not found");
}
});
 server.listen(3000, () => console.log("server is  running on port 3000")); 