<div class="w-full shadow-lg border rounded-2xl bg-white rounded-r-2xl p-8 flex flex-col">
	<div class="flex flex-wrap -mx-4">
		<div class="w-full md:w-1/2 input-field-wrapper">
			<label for="first_name">First Name</label>
			<input type="text" id="first_name" placeholder="Juan" class="input-field" />
		</div>

		<div class="w-full md:w-1/2 input-field-wrapper">
			<label for="last_name">Last Name</label>
			<input type="text" id="last_name" placeholder="Juan" class="input-field" />
		</div>

		<div class="w-full md:w-1/2 input-field-wrapper">
			<label for="email">E-mail</label>
			<input type="text" id="email" placeholder="example@example.com" class="input-field" />
		</div>

		<div class="w-full md:w-1/2 input-field-wrapper">
			<label for="phone">Phone Number</label>
			<input type="text" id="phone" placeholder="+639xxxxx" class="input-field" />
		</div>

		<div class="w-full input-field-wrapper">
			<span class="label">Preferred communication method</span>
			<div class="flex flex-row space-x-2">
				<?php foreach ([ 'Messenger', 'WhatsApp', 'Viber', 'E-mail' ] as $mode) { ?>
					<div class="w-1/4 py-4">
						<label class="space-x-2">
							<input type="radio" name="preferred_comm_method" />
							<span class="font-semibold"><?php echo $mode; ?></span>
						</label>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="w-full input-field-wrapper">
			<label for="message">Message</label>
			<textarea name="message" placeholder="Write your inquiry" rows="10" class="input-field"></textarea>
		</div>
	</div>

	<button class="button is-secondary self-end shadow">Send Message</button>
</div>
