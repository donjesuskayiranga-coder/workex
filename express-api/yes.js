
import { useState } from "react";
function App() {
  const [name, setName] = useState("");
  return (
    <div>
      <h1>Hello,  {name}</h1>
      <input
        type="text"
        placeholder="Type your name"
        value={name} 
        onChange={(e) => setName(e.target.value)}
      />
    </div>
  );
}



function App() {
  const fruits = ["Apple", "Banana", "Orange"];
  return (

    <div>
      <h1>Fruits List</h1>
      <ul>
        {fruits.map((fruit, index) => (
          <li key={index}>{fruit}</li>
        ))}
      </ul>
    </div>
  );
}


import {useState} from "react";

function App() {


  const [fruits, setFruits] = useState(["Apple","Banana"]);
  const [newFruit, setNewFruit] = useState("");

const addFruit = () => {
  if (newFruit !== "") {

    setFruits([...fruits,newFruit]);
    setNewFruit("")
  }
};

return (
  <div>

  <h1>Fruits List</h1>


  <input 

  type="text"
  placeholder="Add a fruit"
  value={newFruit}
  onChange={(e) => setNewFruit(e.target.value)}/>

  <button onClick={addFruit}>Add Fruit</button>


  <ul>
    {fruits.map((fruit, index) => (


      <li key={index}>{fruit}</li>

    ))}

  </ul>

  </div>

);
}
export default App;







r