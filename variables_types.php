<?php
		$a=10; #global variable
		
		function f() #function f()
		{
			$b=20; #local variable
			static $c=45; #static variable
			echo $GLOBALS['a']."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$b."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$c."<br>";


			$GLOBALS['a']++; #increment in global variable.
			$b++; #increment in local variable.
			$c++; #increment in static variable.
		}
		function f1() #function f1()
		{
			$b=20; #local variable
			static $c=45; #static variable
			echo $GLOBALS['a']."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$b."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$c."<br>";


			$GLOBALS['a']++; #increment in local variable.
			$b++; #increment in local variable.
			$c++; #increment in static variable.
		}
		echo " function f()"."<br><br>";
		echo "Global"."&nbsp &nbsp"."local"." &nbsp &nbsp &nbsp"."Static"."<br>";

		f(); #function calling of f()
		f(); #function calling of f()
		f(); #function calling of f()
		f(); #function calling of f()
		f(); #function calling of f()

		echo "<br><br><br>";

		echo "function f1()"."<br><br>";
		echo "Global"."&nbsp &nbsp"."local"."&nbsp &nbsp &nbsp"."Static"."<br>";

		f1(); #function calling of f1()
		f1(); #function calling of f1()
		f1(); #function calling of f1()
		f1(); #function calling of f1()
		f1(); #function calling of f1()


?>