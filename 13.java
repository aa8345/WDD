//HelloWorldSpringBootApp.java
package com.exp.app;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class HelloWorldSpringBootApp {
	public static void main(String[]args) {
		SpringApplication.run(HelloWorldSpringBootApp.class,args);
	}
}



//HelloWorldController.java
package com.exp.app.controller;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class HelloWorldController {

	@RequestMapping(value="/")
	public String hello() {
		return "Hello World";
	}
	
}


//pom.xml
<project xmlns="http://maven.apache.org/POM/4.0.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://maven.apache.org/POM/4.0.0 https://maven.apache.org/xsd/maven-4.0.0.xsd">
  <modelVersion>4.0.0</modelVersion>
  <groupId>com.exp.app</groupId>
  <artifactId>HelloWorldSpringBoot</artifactId>
  <version>0.0.1-SNAPSHOT</version>
  
  <properties>
	  <java.version>1.8</java.version>
  </properties>
  
  <parent>
	  <groupId>org.springframework.boot</groupId>
	  <artifactId>spring-boot-starter-parent</artifactId>
	  <version>1.5.4.RELEASE</version>
  </parent>
  
  <dependencies>
	  <dependency>
		  <groupId>org.springframework.boot</groupId>
	  <artifactId>spring-boot-starter-web</artifactId>
	  </dependency>
  </dependencies>
</project>