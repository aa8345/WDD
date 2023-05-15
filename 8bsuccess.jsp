<%@ page contentType="text/html; charset=UTF-8" %>
<%
	String username = request.getParameter("username");
	out.println("Welcome " + username + "! You are successfully registered.");
%>