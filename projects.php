<?php require("head.php"); ?>
<style type="text/css">
 th { text-align: center;}

 .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.15);
    margin-bottom: 30px;
}
.styled-table thead tr {
    background-color: #088f8f;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(odd) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #eedd82;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #22272e;
    background-color: #e1f8dc;
}
.styled-table tbody tr:hover {background-color: #e1f8dc;}

</style>
<section class="page-section bg-primary text-white mb-0 ftco-section testimony-section" id="projects">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-white" style="font-size: 2em;">External Funded Projects</h2>
                <!-- Icon Divider -->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-inr"></i></div>
                    <div class="divider-custom-line"></div>
                </div> 
                <h2 class="page-section-heading text-center text-white" style="font-size: 1.5em;">Sponsored Projects</h2>
					<div class="about-div ms-auto" style="background: transparent;" >
						 <table class="styled-table" width="110%" height="100%">
							<thead >
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Funding Agency</th>
									<th>Funding Amount(INR)</th>
									<th>Duration</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr class="active-row">
									<td>1</td>
									<td>SERB Sponsored One Week High – End Workshop on <br> "SDN: Software Defined Networks Architectures and Applications"</td>
									<td>SERB, INDIA</td>
									<td>Rs. 5 lakhs</td>
									<td>17 – 23 July 2023 </td>
									<td>Completed</td>
								</tr>
								<!-- and so on... -->
							</tbody>
						</table>
					</div>
				<h2 class="page-section-heading text-center text-white" style="font-size: 1.5em;">Consultancy Projects</h2>
					<div class="about-div ms-auto" style="background: transparent;" >
						 <table class="styled-table" width="110%" height="100%">
							<thead >
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Funding Agency</th>
									<th>Funding Amount(INR)</th>
									<th>Duration</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr class="active-row">
									<td>2</td>
									<td>Development of Data Utilities and Mobile Apps</td>
									<td>Voola Software Solutions, Hyderabad</td>
									<td>Rs. 1.6992 lakhs</td>
									<td>1 Feb. 2024 - 31 Jan. 2025</td>
									<td>Running</td>
								</tr>
								<tr >
									<td>3</td>
									<td>ETL Tools & SQL Automation from on-prem technologies to Cloud</td>
									<td>Komhar Services, USA</td>
									<td>$ 5,840 (USD)</td>
									<td>17 Jan. 2023 - 16 Jan. 2024</td>
									<td>Completed</td>
								</tr>
								<tr >
									<td>4</td>
									<td>Technical Training on C & CPP Programming</td>
									<td>Nest Digital Private Limited</td>
									<td>Rs. 2.06 lakhs</td>
									<td>July 2022 - November 2022</td>
									<td>Completed</td>
								</tr>
								
								<!-- and so on... -->
							</tbody>
						</table>
					</div>
				
				</div>
		</section>	
<?php require_once("footer.php"); ?>