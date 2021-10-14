function array(a)
{
	let b[];
	for(let i=0;i<a.length;i++){
		if(a[i]>0){
			b.push(a[i]);
		}

	}
	return b;
}
let arr[]=[-1,-2,0,1,2]
console.log(array(arr));