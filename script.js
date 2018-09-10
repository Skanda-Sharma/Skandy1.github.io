// var ans=prompt("Are we there yet?");
// while(ans !="yes")
// {
// 	var ans=prompt("Are we there yet?");
// }

// alert("Yay,we made it!!");

var ans=prompt("Are we there yet?");
while(ans.indexOf("yes") === -1)
{
	var ans=prompt("Are we there yet?");
}

alert("Yay,we made it!!");