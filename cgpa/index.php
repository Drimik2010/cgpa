<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)http://www.utar.edu.my/fegt/file/calc.htm -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta style="visibility: hidden !important; display: block !important; width: 0px !important; height: 0px !important; border-style: none !important;">
<script type="text/javascript" src="./calc_files/sf_main.jsp">
</script>
<script type="text/javascript" src="./calc_files/sf_preloader.jsp">
</script>
<script type="text/javascript" src="./calc_files/sf_code.jsp">
</script>
<script type="text/javascript" src="./calc_files/base_single_icon.js">
</script><link rel="stylesheet" href="http://www.superfish.com/ws/css/main.css?v=13.1.4.90">
<script type="text/javascript" src="./calc_files/get.jsp">
</script>
<script src="./calc_files/ngram_id_dict.json" id="SF_ngram_call" type="text/javascript">
</script>
</head>
<body>

<font color="#000000"><em>
<form class="formborder" name="gpa_info" action="" method="post">

<p><img border="0" src="/BUBT_logo.jpg" width="950" height="234"></p>

<table class="tableborderzero">
<tbody>
<tr>
<td class="tableborderzero">
<table class="tableborderzero">
<tbody>
<tr>
<td class="tableborderzero">Current CGPA: </td>
<td class="tableborderzero"><input size="5" name="gpa"> </td></tr>

<tr>
<td class="tableborderzero">Total credit hours : </td>
<td class="tableborderzero"><input size="5" name="doned"> </td></tr></tbody></table></td>
<td class="tableborderzero">
</td></tr></tbody></table>
</form>

</em>




<form class="formborder" name="forrm" action="" method="post"><em>

		<table class="tableborderzero">
		<tbody>

		<tr>
		<td class="tableborderzero" width="90">No.&nbsp;&nbsp; Grade </td>
		<td class="tableborderzero">Point </td>
		<td class="tableborderzero">* </td>
		<td class="tableborderzero">Credit Hours </td>
		<td class="tableborderzero">= </td>
		<td class="tableborderzero">Grade Points </td></tr>
		<tr>
		<td class="tableborderzero" width="90">1&nbsp;&nbsp;&nbsp; 
		<select onchange="update_gp(1, this.options[this.selectedIndex].value)" name="grade_1">
		 <option value="" selected="">Select</option>
		<option value="4.00">A+</option>
		<option value="3.75">A</option> 
		<option value="3.50">A-</option> 
		<option value="3.25">B+</option>
		<option value="3.00">B</option> 
		 <option value="2.75">B-</option> 
		 <option value="2.50">C+</option> 
		 <option value="2.25">C</option> 
		 <option value="2.00">D</option> 
		 <option value="0.00">F</option> 
		 </select> </td>

		<td class="tableborderzero"><input size="5" name="grade_gp_1" required=""> </td>
		<td class="tableborderzero">* </td>
		<td class="tableborderzero">
		<select onchange="update_hours(1, this.options[this.selectedIndex].value)" name="points_1">
		 <option value="-0.5" selected="">Select</option>
		 <option value="0.75">0.75</option> 
		 <option value="1.0">1</option> 
		 <option value="1.5">1.5</option> 
		 <option value="2.0">2</option> 
		 <option value="3.0">3</option> 
		 <option value="4.0">4</option>
		
		 </select> </td>

		<td class="tableborderzero">= </td>
		<td class="tableborderzero"><input size="5" name="gp_1"> </td>
		</tr>
		
		
		
		<tr>
<td class="tableborderzero" width="90">2&nbsp;&nbsp;&nbsp;
 <select onchange="update_gp(2, this.options[this.selectedIndex].value)" name="grade_2"> 
 <option value="" selected="">Select</option>
		<option value="4.00">A+</option>
		<option value="3.75">A</option> 
		<option value="3.50">A-</option> 
		<option value="3.25">B+</option>
		<option value="3.00">B</option> 
		 <option value="2.75">B-</option> 
		 <option value="2.50">C+</option> 
		 <option value="2.25">C</option> 
		 <option value="2.00">D</option> 
		 <option value="0.00">F</option> 
 </select>
 </td>

<td class="tableborderzero"><input size="5" name="grade_gp_2"> </td>
<td class="tableborderzero">* </td>
<td class="tableborderzero">
<select onchange="update_hours(2, this.options[this.selectedIndex].value)" name="points_2">
 <option value="-0.5" selected="">Select</option>
         <option value="0.75">0.75</option> 
		 <option value="1.0">1</option> 
		 <option value="1.5">1.5</option> 
		 <option value="2.0">2</option> 
		 <option value="3.0">3</option> 
		 <option value="4.0">4</option>
 </select> </td>

<td class="tableborderzero">= </td>
<td class="tableborderzero"><input size="5" name="gp_2"> </td>
</tr>
		
		
		
		
		
		
			<tr>
<td class="tableborderzero" width="90">3&nbsp;&nbsp;&nbsp;
 <select onchange="update_gp(3, this.options[this.selectedIndex].value)" name="grade_3"> 
 <option value="" selected="">Select</option>
		<option value="4.00">A+</option>
		<option value="3.75">A</option> 
		<option value="3.50">A-</option> 
		<option value="3.25">B+</option>
		<option value="3.00">B</option> 
		 <option value="2.75">B-</option> 
		 <option value="2.50">C+</option> 
		 <option value="2.25">C</option> 
		 <option value="2.00">D</option> 
		 <option value="0.00">F</option> 
 </select>
 </td>

<td class="tableborderzero"><input size="5" name="grade_gp_3"> </td>
<td class="tableborderzero">* </td>
<td class="tableborderzero">
<select onchange="update_hours(3, this.options[this.selectedIndex].value)" name="points_3">
 <option value="-0.5" selected="">Select</option>
         <option value="0.75">0.75</option> 
		 <option value="1.0">1</option> 
		 <option value="1.5">1.5</option> 
		 <option value="2.0">2</option> 
		 <option value="3.0">3</option> 
		 <option value="4.0">4</option>
 </select> </td>

<td class="tableborderzero">= </td>
<td class="tableborderzero"><input size="5" name="gp_3"> </td>
</tr>
		
		




		
		<tr>
<td class="tableborderzero" width="90">4&nbsp;&nbsp;&nbsp;
 <select onchange="update_gp(4,this.options[this.selectedIndex].value)" name="grade_4"> 
 <option value="" selected="">Select</option>
		<option value="4.00">A+</option>
		<option value="3.75">A</option> 
		<option value="3.50">A-</option> 
		<option value="3.25">B+</option>
		<option value="3.00">B</option> 
		 <option value="2.75">B-</option> 
		 <option value="2.50">C+</option> 
		 <option value="2.25">C</option> 
		 <option value="2.00">D</option>
      <option value="0.00">F</option> 		 
 </select>
 </td>

<td class="tableborderzero"><input size="5" name="grade_gp_4"> </td>
<td class="tableborderzero">* </td>
<td class="tableborderzero">
<select onchange="update_hours(4,this.options[this.selectedIndex].value)" name="points_4">
 <option value="-0.5" selected="">Select</option>
         <option value="0.75">0.75</option> 
		 <option value="1.0">1</option> 
		 <option value="1.5">1.5</option> 
		 <option value="2.0">2</option> 
		 <option value="3.0">3</option> 
		 <option value="4.0">4</option>
 </select> </td>

<td class="tableborderzero">= </td>
<td class="tableborderzero"><input size="5" name="gp_4"> </td>
</tr>
		
		
		
		
		
		
		
		
		
		<tr>
<td class="tableborderzero" width="90">5&nbsp;&nbsp;&nbsp;
 <select onchange="update_gp(5, this.options[this.selectedIndex].value)" name="grade_5"> 
 <option value="" selected="">Select</option>
		<option value="4.00">A+</option>
		<option value="3.75">A</option> 
		<option value="3.50">A-</option> 
		<option value="3.25">B+</option>
		<option value="3.00">B</option> 
		 <option value="2.75">B-</option> 
		 <option value="2.50">C+</option> 
		 <option value="2.25">C</option> 
		 <option value="2.00">D</option> 
		 <option value="0.00">F</option> 
 </select>
 </td>

<td class="tableborderzero"><input size="5" name="grade_gp_5"> </td>
<td class="tableborderzero">* </td>
<td class="tableborderzero">
<select onchange="update_hours(3, this.options[this.selectedIndex].value)" name="points_5">
 <option value="-0.5" selected="">Select</option>
         <option value="0.75">0.75</option> 
		 <option value="1.0">1</option> 
		 <option value="1.5">1.5</option> 
		 <option value="2.0">2</option> 
		 <option value="3.0">3</option> 
		 <option value="4.0">4</option>
 </select> </td>

<td class="tableborderzero">= </td>
<td class="tableborderzero"><input size="5" name="gp_5"> </td>
</tr>
		
		
		
		
		
		
		<tr>
<td class="tableborderzero" width="90">6&nbsp;&nbsp;&nbsp;
 <select onchange="update_gp(6, this.options[this.selectedIndex].value)" name="grade_6"> 
 <option value="" selected="">Select</option>
		<option value="4.00">A+</option>
		<option value="3.75">A</option> 
		<option value="3.50">A-</option> 
		<option value="3.25">B+</option>
		<option value="3.00">B</option> 
		 <option value="2.75">B-</option> 
		 <option value="2.50">C+</option> 
		 <option value="2.25">C</option> 
		 <option value="2.00">D</option> 
		 <option value="0.00">F</option> 
 </select>
 </td>

<td class="tableborderzero"><input size="5" name="grade_gp_6"> </td>
<td class="tableborderzero">* </td>
<td class="tableborderzero">
<select onchange="update_hours(6, this.options[this.selectedIndex].value)" name="points_6">
 <option value="-0.5" selected="">Select</option>
         <option value="0.75">0.75</option> 
		 <option value="1.0">1</option> 
		 <option value="1.5">1.5</option> 
		 <option value="2.0">2</option> 
		 <option value="3.0">3</option> 
		 <option value="4.0">4</option>
 </select> </td>

<td class="tableborderzero">= </td>
<td class="tableborderzero"><input size="5" name="gp_6"> </td>
</tr>




		<tr>
<td class="tableborderzero" width="90">7&nbsp;&nbsp;&nbsp;
 <select onchange="update_gp(7, this.options[this.selectedIndex].value)" name="grade_7"> 
 <option value="" selected="">Select</option>
		<option value="4.00">A+</option>
		<option value="3.75">A</option> 
		<option value="3.50">A-</option> 
		<option value="3.25">B+</option>
		<option value="3.00">B</option> 
		 <option value="2.75">B-</option> 
		 <option value="2.50">C+</option> 
		 <option value="2.25">C</option> 
		 <option value="2.00">D</option> 
		 <option value="0.00">F</option> 
 </select>
 </td>

<td class="tableborderzero"><input size="5" name="grade_gp_7"> </td>
<td class="tableborderzero">* </td>
<td class="tableborderzero">
<select onchange="update_hours(7, this.options[this.selectedIndex].value)" name="points_7">
 <option value="-0.5" selected="">Select</option>
         <option value="0.75">0.75</option> 
		 <option value="1.0">1</option> 
		 <option value="1.5">1.5</option> 
		 <option value="2.0">2</option> 
		 <option value="3.0">3</option> 
		 <option value="4.0">4</option>
 </select> </td>

<td class="tableborderzero">= </td>
<td class="tableborderzero"><input size="5" name="gp_7"> </td>
</tr>
		
		





<tr>
<td></td><td></td><td></td><td></td><td></td>
<td class="tableborderzero" width="90"><font color="#000000">
<input onclick="update_gpas()" type="button" value="Calculate" <="" font=""></font></td></tr>

<tr>
<td class="tableborderzero" width="90">Sum </td>
<td class="tableborderzero"></td>
<td class="tableborderzero"></td>
<td class="tableborderzero"><input size="5" name="sum_credit_hours"> </td>
<td class="tableborderzero"></td>
<td class="tableborderzero"><input size="5" name="sum_grade_points"> </td></tr>

<tr>
<td class="tableborderzero" width="90">GPA </td>
<td class="tableborderzero"></td>
<td class="tableborderzero"></td>
<td class="tableborderzero"></td>
<td class="tableborderzero"></td>
<td class="tableborderzero"><input size="5" name="term_gpa"> </td></tr>
<tr>
<td class="tableborderzero" width="90">CGPA </td>
<td class="tableborderzero"></td>
<td class="tableborderzero"></td>
<td class="tableborderzero"></td>
<td class="tableborderzero"></td>
<td class="tableborderzero"><input size="5" name="cumulative_gpa"> </td></tr>













		
		
		
		
		
		<script language="javascript">


function update_gp( field, grade_point )
{
  var textfield = "grade_gp_"+field;

  document.forms['forrm'].elements[textfield].value = grade_point;

  update_hours( field );
}

function update_hours( field )
{
  var gradefield = "";
  var credit_hours = "";
  var grade = "";
  var gp = "";
  var hours = "";

  credit_hours = "points_"+field;
  gradefield = "gp_"+field;
  grade = "grade_gp_"+field;

  hours = document.forms['forrm'].elements[credit_hours].options[document.forms['forrm'].elements[credit_hours].selectedIndex].value;
  gp = document.forms['forrm'].elements[grade].value;

  if ((gp != "") && (hours != -0.5)) {
    document.forms['forrm'].elements[gradefield].value = Math.round( gp * hours * 100) / 100;
  } else {
    document.forms['forrm'].elements[gradefield].value = "";
  }
}

function update_gpas( )
{
  var gradefield = "";
  var credit_hours = "";
  var gp = 0.0;
  var hours = 0.0
  var total_hours = 0.0;
  var sum_grade_points = 0.0;
  var index = 0;
  var credits = 1.0 * document.forms['gpa_info'].elements['doned'].value;
  var gpa = 1.0 * document.forms['gpa_info'].elements['gpa'].value;
  var grade_name;

  index = 1;
  while (index <= 7) {
    
    grade_name = "grade_"+index;
    update_gp( index, document.forms['forrm'].elements[grade_name].options[document.forms['forrm'].elements[grade_name].selectedIndex].value);

    gradefield = "gp_"+index;
    credit_hours = "points_"+index;

    hours = document.forms['forrm'].elements[credit_hours].options[document.forms['forrm'].elements[credit_hours].selectedIndex].value;
    gp = document.forms['forrm'].elements[gradefield].value;

    if ((gp != "") && (hours != "")) {
      total_hours += 1.0*hours;
    }
    sum_grade_points += 1.0*gp;

    index++;
  }

  document.forms['forrm'].elements['sum_credit_hours'].value = total_hours;
  document.forms['forrm'].elements['sum_grade_points'].value = sum_grade_points;

  if (total_hours > 0) {
    document.forms['forrm'].elements['term_gpa'].value = Math.round( sum_grade_points / total_hours * 10000) / 10000;
  } else {
    document.forms['forrm'].elements['term_gpa'].value = "";
  }
       var limon=Math.round( 10000 * (sum_grade_points + gpa*credits) / (credits + total_hours) ) / 10000;
  document.forms['forrm'].elements['cumulative_gpa'].value = limon;
  
}


</script>

</em>
</body>
</html>