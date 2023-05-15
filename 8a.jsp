<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
	<title>Factorial Calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<div class="card-header bg-primary text-white">
				<h1>Factorial Calculator</h1>
			</div>
			<div class="card-body">
				<form method="post" action="factorial.jsp" class="form-inline">
					<div class="form-group mr-3">
						<label for="num" class="mr-2">Enter a number:</label>
						<input type="number" class="form-control" id="num" name="num" required>
					</div>
					<button type="submit" class="btn btn-success">Calculate Factorial</button>
				</form>
				
				<%
					// Check if form is submitted and num is not null
					if(request.getMethod().equals("POST") && request.getParameter("num") != null) {
						int num = Integer.parseInt(request.getParameter("num"));
						long factorial = 1;
						
						// Calculate factorial of num
						for(int i = num; i >= 1; i--) {
							factorial *= i;
						}
						
						// Output the result
						out.println("<br/><br/><div class='alert alert-info'>Factorial of " + num + " is " + factorial + "</div>");
					}
				%>
			</div>
		</div>
	</div>
</body>
</html>
