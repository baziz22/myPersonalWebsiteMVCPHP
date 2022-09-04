d3.json("./data/users.json") .then((data) => {
        
    console.log("Data: "+ data);
    for (var i = 0; i < data.length; i++) {
        console.log(data[i]);
        console.log(data[i].Name);
        console.log(data[i].Salary);
        console.log(data[i].City);
    }
    
    d3.select(".project-live-modal-body")
    .selectAll("p")
    .data(data)
    .enter().append("p")
    .text((d) => d.Name + ", " + d.Salary + ", " + d.City)

}).then((error) => {
    if (error) {
        console.log(Ther is );
        console.log("Error: "+error);
    }else {
        console.log("ther ei s no error");
    }
})