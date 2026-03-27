import { useState } from "react"; 
import {Link} from "react-router-dom";
import Home from "./Home";
import About from "./About "
function App() {
 const [newNumber, setNumber] = useState(100);
 const [text, setText] =useState("");
 const[showText, setshowText] =useState([]);
 const[editIndex , setEditIndex] = useState(null)
  const name= () => {
  if (text !== ""){
setshowText([...showText , text])
setText("")
 }
};
const name1 = () => {
  if (text !== "") {
    const updated = [...showText];
    updated[editIndex] = text;
    setshowText(updated);
    setEditIndex(null);
  }
  else {
  setshowText([...showText, text]);
  }
  setText("");
}
const removeItem = (indexToRemove) => {
setshowText(showText.filter((_,i) => i !== indexToRemove))};
const all = () => {
setshowText([])
}; 
 return (
  <div>
  <h1>Number:{newNumber}</h1>
  <button onClick ={ () => setNumber(newNumber+1)}>Increase</button>
  <button onClick ={() => setNumber(newNumber-1)} disabled={newNumber === 0}>Decrease</button>
{newNumber !== 0 && (
  <button onClick ={() => setNumber(0)}>Reset</button>
)}
<input
type="text"
placeholder="add Text"
value={text}
onChange ={(e)=> {
  setText(e.target.value)
}}/>
{text == "" && 
  <h3>nothing typed </h3>
}
<button onClick = {name}>add</button>
<ul>
{showText.map((text, index)=>
<li key ={index}>{text}  
  <button onClick={() => removeItem(index)}>Remove</button>
  <button onClick ={() => {
    setText(text);
  
   setEditIndex(index);
  }}>Edit</button>
</li>
)}
<button onClick = {all}>clear All</button>
<button onClick={name1}>{editIndex !==null? "Update" : "Add"}</button>
</ul>
</div>
 )
};
export default App;
