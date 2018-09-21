

<script>
function SwitchIt(s){
	if ( s==1 ) {
		document.getElementById("some_output").innerHTML='<?PHP SwitchEcho("on"); ?>';
		}
	else{
		document.getElementById("some_output").innerHTML='<?PHP SwitchEcho("off"); ?>';
		}
 }

</script>

<?PHP
FUNCTION TestEcho(){
$var = "extra"; 
 //echo "hello there $var";
    $output=shell_exec("printf 'hello world $var' ");
    echo "$output";
 }

FUNCTION SwitchEcho($var){
$command = escapeshellcmd('/Users/kwraight/repositories/LED_control/testScript.py --set '.$var );
$output = shell_exec($command);
echo "$output";
 }
 
?>

<button onclick="SwitchIt(1)">ON</button> 
<button onclick="SwitchIt(0)">OFF</button> 
<br>
<p> Value output </p>
    <p id="some_output"></p>
