		<div id="l_cont">
			<h1>My Smart House</h1>
			<form action="index.php" method=post>
				<div id="fauth">
					<div class="auth_el">
						<div class="auth_el_inp">
							<input name="l_name" type="text" size="30" placeholder="Login">
						</div>
					</div>
					<div class="auth_el">
						<div class="auth_el_inp">
							<input name="p_name" type="password" size="30"
								placeholder="Password">
						</div>
					</div>
				</div>
				<div class="auth_el">
					<!--  <input name="action" type="hidden" value="">  -->
				</div>
				<div class="auth_el">
					 <input class="myButton" type="submit" value="Log in">  
					<!--  <button type="button" value="Log in" class="myButton">Log in</button> -->
				</div>
			</form>
			<div id="err">
				<p>
					<?=$err;?>
				</p>
			</div>
		</div>
