const  http = require("express");
const server = http.creatServer(function(req, res) {

    if(req.method=== "GET" & res.method==="/") {
res.end("Hello World");
    }
})


server.listen(5000, () => console.log("server is running on port 5000"));
