package app;

import jakarta.servlet.*;
import jakarta.servlet.http.*;
import java.io.*;
import java.sql.*;

public class LoginServlet extends HttpServlet {
 
  
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try {
			
			response.setContentType("text/html");
			PrintWriter pw=response.getWriter();
			
			String n=request.getParameter("name");
			String p=request.getParameter("pass");
			
			Class.forName("com.mysql.cj.jdbc.Driver");
			Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/user","root","Mysql@9980");
			Statement ps=con.createStatement();
			ResultSet rs=ps.executeQuery("Select * from login where username='"+n+"' and password='"+p+"'");
			
			if(rs.next()) {
				RequestDispatcher rd= request.getRequestDispatcher("welcome.jsp");
				rd.forward(request, response);
			}
			else {
				pw.println("Login Failed");
			}
			
			rs.close();
			ps.close();
			
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

}
