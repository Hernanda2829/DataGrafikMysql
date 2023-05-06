<!DOCTYPE html>
<html>
    <head>
        <title>Modul Web-IoT</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body class="body">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IOT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#tabel">Data</a>
        <a class="nav-link" href="#diagram">Diagram</a>
      </div>
    </div>
  </div>
</nav>
<div class="MyBg"></div>
    <div class="text-title">
      <Container class="text-white d-flex text-center justify-content-center align-item-center">
        <Row>
          <Col>
            <div class="title">LATIHAN</div>
            <div class="title">MONITORING DATA IOT BERBASIS WEB</div>
            <div class="title">FAKULTAS ILMU KOMPUTER</div>
            <div class="title">UNIVERSITAS DUTA BANGSA SURAKARTA</div>
            </div>
          </Col>
        </Row>
      </Container>
      
</div>
    </div>   
            <div class="badan">
                <?php
                //menambahkan file koneksi yang telah dibuat sebelumnya
                include "koneksi.php";
                //mengakses tabel penyimpanan data sensor di database
                $query = mysqli_query($koneksi,"SELECT * FROM data_IoT ORDER BY id DESC LIMIT 10");
                ?>
                </br>
                </br>
                </br>
                <form action="" method="post">
                <section class="p-4" id="tabel" >
                    <h1 style="font-weight: bold;" >TABEL DATA</h1>
                </section>
<table class="table mb-5 ">
  <thead class="table-dark">
    <tr>
        <th>NO</th>
        <th>TANGGAL</th>
        <th>JAM</th>
        <th>JARAK</th>
    </tr>
  </thead>
   <?php if(mysqli_num_rows($query)>0){ ?> 
   <?php
   $no = 1;
   while($data = mysqli_fetch_array($query)){
    ?>
  <tbody>
    <td><?php echo $no ?></td>
    <td><?php echo $data["tgl"];?></td>
    <td><?php echo $data["jam"];?></td>
    <td><?php echo $data["jarak"];?></td>
  </tbody>
   <?php $no++; } ?>
   <?php } ?>
</table>

<section class="p-4 pt-5 " id="diagram" >
    <h1 style="font-weight: bold;" >DIAGRAM</h1>
<div class="p-4" style="width:500px; margin: 0px auto">
  <canvas id="myChart" ></canvas>
</div>
</section>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ["<100", "100 AND 200", ">200"],
            datasets: [{
                label:'DATA',
                data:[
                    <?php
                    $data1 = mysqli_query($koneksi, "SELECT jarak FROM data_IoT WHERE jarak <100");
                    echo mysqli_num_rows($data1);
                    ?>,
                    <?php
                    $data2 = mysqli_query($koneksi, "SELECT jarak FROM data_IoT WHERE jarak BETWEEN '100' AND '200'");
                    echo mysqli_num_rows($data2);
                    ?>,
                    <?php
                    $data3 = mysqli_query($koneksi, "SELECT jarak FROM data_IoT WHERE jarak >200");
                    echo mysqli_num_rows($data3);
                    ?>
                ],
                backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)',
                'rgba(34, 102, 205, 0.5)'
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
                'rgba(34, 102, 205, 0.5)'
				],
				borderWidth: 1
            }]
        },
        options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
    </form> 
        <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                </div>
                <p class="copyright">Company Name © 2018</p>
            </div>
        </footer>
    </div>
        
</body>
        </html>