<?php

namespace First {
	class Foo {
		var $a=123;
	}
}

namespace Second {
	use First\Foo;
	
	$foo = new Foo();
	
	echo $foo->b;
}
