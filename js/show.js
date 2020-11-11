function showTables(data){
  
  let data_ary = data.split("\n");
  let data_cell = "";
  
  tbl_tag = "<table border='1'>";
  tbl_tag += "<th>項目1</th>";
  tbl_tag += "<th>項目2</th>";
  tbl_tag += "<th>項目3</th>";

  data_ary.forEach(element => {
    if(element !== ""){
      data_cell = element.split(",");
      tbl_tag += "<tr>";
      tbl_tag += "<td>" + data_cell[0] + "</td>";
      tbl_tag += "<td>" + data_cell[1] + "</td>";
      tbl_tag += "<td>" + data_cell[2] + "</td>";
      tbl_tag += "</tr>";
    }
  });

  tbl_tag += "</table>";
  return tbl_tag;
  
}
