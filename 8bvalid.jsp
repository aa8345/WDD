<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
	<%
	
	
	String name = request.getParameter("name");
	String fname = request.getParameter("fname");
	String gender = request.getParameter("gender");
	String dob = request.getParameter("dob");
	String email = request.getParameter("email");
	String department = request.getParameter("department");
	String mobile = request.getParameter("mobile");

	// Validate form data
	

// Output the result of the validation
    boolean isValid=true;
	if(name==null||fname==null||gender==null||dob==null||email==null||mobile==null){
		isValid=false;
	}
	// If form data is valid, redirect to success page
	if (isValid) {
		
		response.sendRedirect("success.jsp?username=" + name);
	} else {
		// If form data is invalid, show error message
		out.println("Please fill all the fields!");
	}
%>
</body>
</html>
