

import jakarta.servlet.ServletException;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.io.PrintWriter;


public class CalcServlet extends HttpServlet {
    
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		PrintWriter pw=response.getWriter();
		int m1=Integer.parseInt(request.getParameter("m1"));
		int m2=Integer.parseInt(request.getParameter("m2"));
		int avg=(m1+m2)/2;
		
		if(avg>50) {
			pw.println("PASS");
		}
		else {
			pw.println("<p>FAIL</p>");
		
		}
	}

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
