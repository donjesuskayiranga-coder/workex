const express = require("express");
const cors = require("cors");
const users = [{ name : "KAYIRANGA luccin", email : "luccinkayiranga@gmail.com", age :10}]
const app = express();
app.use(cors()); 
app.use(express.json());
app.get("/",(req,res) => {
    res.send("Hello from express");
});
app.get("/users", (req,res) => { 
    console.log(req.body);
    res.send(users);
});
app.listen(6000 ,() => {
    console.log("server is running on port 6000!")
}); 