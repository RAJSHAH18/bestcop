<!DOCTYPE html>
<!-- Code By Webdevtrick ( https://webdevtrick.com ) -->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Datatable | Webdevtrick.com</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css">

<style>
table {
  width: 100%;
  border-collapse: collapse;
}

tr:nth-of-type(odd) {
  background: #f4f4f4;
}

tr:nth-of-type(even) {
  background: #fff;
}

th {
  background: #5cb85c;
  color: #ffffff;
  font-weight: 300;
}

td,
th {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
}

td:nth-of-type(1) {
  font-weight: 500 !important;
}

td {
  font-family: 'Roboto', sans-serif !important;
  font-weight: 300;
  line-height: 20px;
}

span {
  font-style: italic
}

@media only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px) {

  table.responsive,
  .responsive thead,
  .responsive tbody,
  .responsive th,
  .responsive td,
  .responsive tr {
    display: block !important;
  }

  .responsive thead tr {
    position: absolute !important;
    top: -9999px;
    left: -9999px;
  }

  .responsive tr {
    border: 1px solid #ccc;
  }

  .responsive td {
    border: none;
    border-bottom: 1px solid #eee !important;
    position: relative !important;
    padding-left: 25% !important;
  }

  .responsive td:before {
    position: absolute !important;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap !important;
    font-weight: 500 !important;
  }

 
  .responsive td:before {
    content: attr(data-table-header) !important;
  }
} </style>
</head>

<body>


<div class="row">
<div class="container"> 
  
  <h1>Bootstrap 3 SortTable</h1> 
  <table class="table responsive" id="sort">
	<thead>
		<tr>
			<th scope="col">Title</th>
			<th scope="col">Authors</th>
			<th scope="col">Journal</th>
			<th scope="col">Date</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td data-table-header="Title">Parent Adolescent Relationship Factors and Adolescent Outcomes Among High-Risk Families.</td>
			<td data-table-header="Authors">Matthew Withers, Lenore McWey, Mallory Lucier-Greer</td>
			<td data-table-header="Journal">Family Relations</td>
			<td data-table-header="Date">Jan. 2017</td>
		</tr>
		
		<tr>
			<td data-table-header="Title">Macronutrient Intake and Distribution in the Etiology, Prevention and Treatment of Osteosarcopenic Obesity.</td>
			<td data-table-header="Authors">Kelly OJ, Gilman JC, Kim Y, Ilich JZ.</td>
			<td data-table-header="Journal">Current Aging Science</td>
			<td data-table-header="Date">May 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Perception in Romantic Relationships: a Latent Profile Analysis of Trait Mindfulness in Relation to Attachment and Attributions.</td>
			<td data-table-header="Authors">JG Kimmes, JA Durtschi, FD Fincham.</td>
			<td data-table-header="Journal">Mindfulness</td>
			<td data-table-header="Date">April 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Individual Differences in Adolescents’ Emotional Reactivity across Relationship Contexts.</td>
			<td data-table-header="Authors">Cook EC, Blair BL, Buehler C.</td>
			<td data-table-header="Journal">Journal of Youth Adolescence</td>
			<td data-table-header="Date">April 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Is Plus Size Equal? The Positive Impacts of Average and Plus Sized Media Fashion Models on Women’s Cognitive Resource Allocation, Social Comparisons, and Body Satisfaction. [in press]</td>
			<td data-table-header="Authors">RB Clayton, JL Ridgway, J Hendrickse.</td>
			<td data-table-header="Journal">Communication Monographs</td>
			<td data-table-header="Date">April 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Effects of Tart Cherry Juice on Brachial and Aortic Hemodynamics, Arterial Stiffness, and Blood Biomarkers of Cardiovascular Health in Adults with Metabolic Syndrome.</td>
			<td data-table-header="Authors">Sarah Johnson, Negin Navaei, Shirin Pourafshar, Salvador Jaime, Neda Akhavan, Stacey Alvarez-Alvarado, Nicole Litwin, Marcus Elam, Mark Payton, Bahram Arjmandi, Arturo Figueroa.</td>
			<td data-table-header="Journal">Journal of Federation of American Societies for Experimental Biology</td>
			<td data-table-header="Date">April 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Parenting Styles and College Enrollment: A Path Analysis of Risky Human Capital Decisions.</td>
			<td data-table-header="Authors">J Kimmes, S Heckman</td>
			<td data-table-header="Journal">Journal of Family and Economic Issues</td>
			<td data-table-header="Date">May 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Emerging Adult Relationship Transitions as Opportune Times for Tailored Interventions.</td>
			<td data-table-header="Authors">A Vennum, JK Monk, BK Pasley, FD Fincham</td>
			<td data-table-header="Journal">Emerging Adulthood</td>
			<td data-table-header="Date">May 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Watermelon and L-Arginine Consumption Regulate Gene Expression Related to Serum Lipid Profile, Inflammation, and Oxidative Stress in Rats Fed on Atherogenic Diet.</td>
			<td data-table-header="Authors">Joshua Beidler, Shirin Hooshmand, Mark Kern, Arturo Figueroa, Men Young Hong</td>
			<td data-table-header="Journal">Journal of Federation of American Societies for Experimental Biology</td>
			<td data-table-header="Date">April 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Contribution of Adiponectin to Vascular Responses in Bone Resistance Arteries in Mice.</td>
			<td data-table-header="Authors">Payal Ghosh, Kazuki Hotta, Tiffany Lucero, Kyle Borodunovich, Morgan Cowan, Jeremy Bramy, Bradley Behnke, Michael Delp, Judy Delp</td>
			<td data-table-header="Journal">Journal of Federation of American Societies for Experimental Biology</td>
			<td data-table-header="Date">April 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Bone-Protective Effects of Dried Plum in Postmenopausal Women: Efficacy and Possible Mechanisms.</td>
			<td data-table-header="Authors">Arjmani BH, Johnson SA, Pourafshar S, Navaei N, George KS, Hooshmand S, Chai SC, Akhavan NS</td>
			<td data-table-header="Journal">Nutrients</td>
			<td data-table-header="Date">May 2017</td>
		</tr>
		<tr>
			<td data-table-header="Title">Cardiovascular Responses to Unilateral, Bilateral, and Alternating Limb Resistance Exercise Performed Using Different Body Sements.</td>
			<td data-table-header="Authors">Moreira OC, Faraci LL, de Matos DG, Mazini Filho ML, da Silva SF, Aidar FJ, Hickner RC, de Oliveira CE</td>
			<td data-table-header="Journal">Journal of Strength and Conditioning Research</td>
			<td data-table-header="Date">March 2017</td>
		</tr>
	</tbody>
</table>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<script >// Code By Webdevtrick ( https://webdevtrick.com )
$(document).ready(function() {
   $("#sort").DataTable({
      columnDefs : [
    { type : 'date', targets : [3] }
],  
   });
});</script>

</body>
</html>